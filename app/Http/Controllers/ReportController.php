<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restitution;
use App\Report;
use App\User;

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

    public function indexReport(){
        $report = Report::get();

        // foreach($report as $r){
            
        //      echo date("d-m-Y", strtotime($date[0]));
        // }
       
    
        return view('layouts.index_report', compact('report'));
    }
}
