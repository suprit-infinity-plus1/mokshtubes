<?php

namespace App\Http\Controllers;

use App\Models\DatasheetLead;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class DatasheetLeadController extends Controller
{
    public function store(Request $request)
    {
        // Validate email
        $request->validate([
            'email' => 'required|email',
            'pdf' => 'required|string',
        ]);
        // Save email to database
        $datasheetLead = DatasheetLead::create([
            'email' => $request->email,
            'pdf' => $request->pdf,
        ]);
        $pdfFile = basename($request->pdf);
        // dd($pdfFile);
        // Path to PDF
        $filePath = storage_path('app/public/datasheets/'.$pdfFile);
        // $filePath = storage_path('app/public/datasheets/EN8_Steel_Datasheet.pdf');

        // Check if file exists
        if (! file_exists($filePath)) {
            abort(404, 'Requested datasheet not found.');
        }

        // dd("i am hwere");
        // Return PDF as download
        return response()->download($filePath, $pdfFile);
    }

    public function datasheets()
    {
        $datasheetLeads = DatasheetLead::latest()->get();

        // dd($blogs);
        // return view('admin.blogs.index', compact('blogs'));
        return view('backend.datasheet_leads.index', compact('datasheetLeads'));
    }

    public function edit($id)
    {
        $datasheetLead = DatasheetLead::findOrFail($id);

        return view('datasheet_leads.edit', compact('datasheetLead'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'email' => 'required|email',
            'pdf' => 'required|string',
        ]);

        $datasheetLead = DatasheetLead::findOrFail($id);
        $datasheetLead->update([
            'email' => $request->email,
            'pdf' => $request->pdf,
        ]);

        return redirect()->route('datasheet.edit', $id)
            ->with('success', 'Datasheet Lead updated successfully!');
    }

    public function destroy($id)
    {
        $datasheetLead = DatasheetLead::findOrFail($id);
        $datasheetLead->delete();

        return redirect()->back()->with('success', 'Datasheet Lead deleted successfully!');
    }

    // public function export()
    // {
    //     $fileName = 'datasheet_leads_'.now()->format('Y_m_d_His').'.csv';
    //     $datasheetLeads = DatasheetLead::all(['id', 'email', 'pdf', 'created_at']);

    //     $headers = [
    //         'Content-Type' => 'text/csv',
    //         'Content-Disposition' => "attachment; filename=$fileName",
    //     ];

    //     $columns = ['ID', 'Email', 'PDF', 'Created At'];

    //     $callback = function () use ($datasheetLeads, $columns) {
    //         $file = fopen('php://output', 'w');
    //         fputcsv($file, $columns);

    //         foreach ($datasheetLeads as $lead) {
    //             fputcsv($file, [
    //                 $lead->id,
    //                 $lead->email,
    //                 $lead->pdf,
    //                 $lead->created_at->format('Y-m-d H:i:s'),
    //             ]);
    //         }

    //         fclose($file);
    //     };

    //     return Response::stream($callback, 200, $headers);
    // }

    public function export(Request $request)
    {
        $from = $request->query('from');
        $to = $request->query('to');

        // Validate date inputs (optional but good practice)
        $request->validate([
            'from' => 'nullable|date',
            'to' => 'nullable|date|after_or_equal:from',
        ]);

        // Build the query
        $query = DatasheetLead::query()->select('id', 'email', 'pdf', 'created_at');

        if ($from) {
            $query->whereDate('created_at', '>=', $from);
        }

        if ($to) {
            $query->whereDate('created_at', '<=', $to);
        }

        $datasheetLeads = $query->orderBy('created_at', 'desc')->get();

        $fileName = 'datasheet_leads_'.now()->format('Y_m_d_His').'.csv';

        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => "attachment; filename=$fileName",
        ];

        $columns = ['ID', 'Email', 'PDF', 'Created At'];

        $callback = function () use ($datasheetLeads, $columns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);

            foreach ($datasheetLeads as $lead) {
                fputcsv($file, [
                    $lead->id,
                    $lead->email,
                    $lead->pdf,
                    $lead->created_at->format('Y-m-d H:i:s'),
                ]);
            }

            fclose($file);
        };

        return Response::stream($callback, 200, $headers);
    }
}
