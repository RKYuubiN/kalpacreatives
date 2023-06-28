<?php

namespace App\Http\Controllers;

use App\Models\Drug;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReviewerController extends Controller
{
    public function __construct()
    {
        
    }

    public function show()
    {
        $drug = Drug::whereNull('approved_status')->orWhereDate('expiry_date','<',Carbon::now())->get();
        return view('user.reviewer')->with('drug',$drug);
    }

    public function review($id)
    {
        $drug = Drug::findOrFail($id);
        return view('user.reviewstatus')->with('drug',$drug);
    }

    public function reviewStatus(Request $request)
    {
        $validate = $request->validate([
            'approved_by'=>'required|string',
            'id'=>'required',
        ]);

        $drug = Drug::findOrFail($request->id);
        $drug->approved_by = $validate['approved_by'];
        if(isset($request->rejection_note) && !empty($request->rejection_note)){
            $drug->approved_status = false;
            $drug->rejection_note= $request->rejection_note;
        }else{
            $drug->approved_status = true;
            $drug->approved_date =  Carbon::now();
            $drug->expiry_date = Carbon::now()->addYear(1);
        }
        
        $drug->save();
        return redirect()->route('reviewer');
    }
}
