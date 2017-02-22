<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;
class LocationController extends Controller
{
    public function indexLocation(){
        $location = Location::get();
        $cur = 0;
        return view('layouts.index_location', compact('location','cur'));
    }
}
