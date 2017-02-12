<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restitution;
use App\Report;

class ReportController extends Controller
{
    public function newReport($id){
        return view('layouts.new_report', compact('id'));
    }

    public function createReport(Request $r, $id){
       $this->validate($r,[
            'id' => 'required',
            'message' => 'required|max:300'
        ]);

        $report = new Report([
            'restitusi_id' => $id,
            'message' => $r->input('message')
        ]);

        $report->save();

        return redirect('/');
    }
}
