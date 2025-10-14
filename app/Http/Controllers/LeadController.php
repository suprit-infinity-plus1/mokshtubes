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
            'email' => 'required|email|unique:leads,email'
        ]);
        // Save email to database
        $leads = Lead::create([
            'email' => $request->email
        ]);
        // Path to PDF
        $filePath = storage_path('app/public/datasheets/en8.pdf');

        // dd("i am hwere");
        // Return PDF as download
        return response()->download($filePath, 'EN8_Steel_Datasheet.pdf');
    }
}
