<?php

namespace App\Http\Controllers;

use App\Models\Drug;
use Illuminate\Http\Request;

class ApplicantController extends Controller
{
    public function __construct()
    {
        
    }

    public function show()
    {
        return view('user.applicant');
    }

    public function registerDrug(Request $request)
    {
        $validated = $request->validate([
            'name'=>'required|string|max:255',
            'dose'=>'required|integer',
            'type'=>'required|string',
            'registered_by'=>'required|string',
        ]);
        
        $drug = Drug::create([
            'name'=>$validated['name'],
            'dose'=>$validated['dose'],
            'type'=>$validated['type'],
            'registered_by'=>$validated['registered_by'],
        ]);

        $drug->save();

        return redirect()->route('applicant');
    }
}
