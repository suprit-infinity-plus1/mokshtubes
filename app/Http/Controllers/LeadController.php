<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeadController extends Controller
{
    public function store(Request $request)
    {
        // Validate email
        $request->validate([
            'email' => 'required|email',
        ]);

        // ✅ Optional: Save lead to database if you have a "leads" table
        // \App\Models\Lead::create(['email' => $request->email]);

        // File path (public folder)
        $filePath = public_path('datasheets/EN8_Datasheet_v2.docx');

        // Check file exists
        if (!file_exists($filePath)) {
            return back()->with('error', 'Datasheet file not found!');
        }

        // Force download of the datasheet
        return response()->download($filePath, 'EN8_Datasheet.docx');
    }
}
