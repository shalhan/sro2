<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Location;
use App\Restitution;
use App\Information;
use Session;
use Route;


class RestitutionController extends Controller
{   
    public function getAllRestitution(){
        $restitution = Restitution::get();

        return view('layouts/dashboard', compact('restitution'));
    }

    public function newRestitution(){
        $user = User::where('roles', false)->get();
        $location = Location::get();
        $info = Information::where('status', 0)->get();
        return view('layouts.new_restitution', compact('user', 'location', 'info'));
    }

    public function createRestitution(Request $r){
        $restitution = new Restitution([
            'user_id' => $r->input('name'),
            'location_id' => $r->input('nama_rs'),
            'info_id' => $r->input('keluhan'),
            'stat_id' => 1
        ]);

        $restitution->save();

        return redirect('/');
    }

    public function updateRestitution($id){
        $restitution = Restitution::where('id', $id)->first();
        $stat = $restitution->stat_id;
        $stat++;
        Restitution::where('id', $id)->update(['stat_id' => $stat]);
        
        return redirect('/');
    }

    public function showRestitution($id){
       $restitution = Restitution::with(['user','stat'])
        ->whereRaw('user_id =' . Session::get('id'))
        ->orderBy('id','desc')
        ->get();
       
       return view('layouts/home', compact('restitution'));
    }
}
