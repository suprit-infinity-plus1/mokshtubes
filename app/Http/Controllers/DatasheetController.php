<?php

namespace App\Http\Controllers;

use App\Models\Datasheet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class DatasheetController extends Controller
{
    //
    public function index()
    {
        $datasheets = Datasheet::latest()->get();

        return view('backend.datasheets.index', compact('datasheets'));
    }

    public function add()
    {

        return view('backend.datasheets.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'page_path' => [
                'required',
                'string',
                'max:255',
                Rule::unique('datasheets', 'page_path'),
            ],
            'file' => 'required|mimes:pdf|max:10240',
            'active' => 'required|boolean',
        ]);

        // Store file in public disk
        $filePath = $request->file('file')->store('datasheets', 'public');

        Datasheet::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name).'-'.Str::random(6),
            'page_path' => $request->page_path,
            'file_path' => $filePath,
            'active' => $request->active,
        ]);

        return redirect()
            ->route('datasheets.index')
            ->with('success', 'Datasheet added successfully.');
    }

    public function edit($id)
    {
        $datasheet = Datasheet::findOrFail($id);

        return view('backend.datasheets.edit', compact('datasheet'));
    }

    public function update(Request $request, $id)
    {
        $datasheet = Datasheet::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'page_path' => 'required|string|max:255|unique:datasheets,page_path,'.$datasheet->id,
            'file' => 'nullable|mimes:pdf|max:10240',
            'active' => 'required|boolean',
        ]);

        if ($request->hasFile('file')) {

            if ($datasheet->file_path && Storage::disk('public')->exists($datasheet->file_path)) {
                Storage::disk('public')->delete($datasheet->file_path);
            }

            $datasheet->file_path = $request->file('file')->store('datasheets', 'public');
        }

        $datasheet->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'page_path' => $request->page_path,
            'active' => $request->active,
        ]);

        return redirect()
            ->route('datasheets.index')
            ->with('success', 'Datasheet updated successfully');
    }

    public function destroy($id)
    {
        $datasheet = Datasheet::findOrFail($id);

        Storage::delete($datasheet->file_path);
        $datasheet->delete();

        return redirect()->route('datasheets.index')
            ->with('success', 'Datasheet deleted successfully');
    }
}
