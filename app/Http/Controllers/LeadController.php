<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LeadController extends Controller
{
    public function store(Request $request)
    {
        // Validate email
        $request->validate([
            'email' => 'required|email',
            'pdf' => 'required|string'
        ]);
        // Save email to database
        $leads = Lead::create([
            'email' => $request->email,
            'pdf' => $request->pdf
        ]);
        $pdfFile = basename($request->pdf);
        // dd($pdfFile);
        // Path to PDF
        $filePath = storage_path('app/public/datasheets/' . $pdfFile);
        // $filePath = storage_path('app/public/datasheets/EN8_Steel_Datasheet.pdf');

         // Check if file exists
    if (!file_exists($filePath)) {
        abort(404, 'Requested datasheet not found.');
    }

        // dd("i am hwere");
        // Return PDF as download
        return response()->download($filePath, $pdfFile);
    }
}
