<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Information;

class InformationController extends Controller
{
    public function indexInformation(){
        $info1 = Information::where('status', 0)->get();
        $info2 = Information::where('status', 1)->get();
        return view('layouts.index_information', compact('info1', 'info2'));
    }
}
