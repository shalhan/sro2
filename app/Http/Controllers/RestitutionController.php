<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Restitution;
use Session;

class RestitutionController extends Controller
{   
    public function getAllRestitution(){
        $restitution = Restitution::with(['user','stat'])->whereRaw('stat_id < 12')->get();
        
        return view('layouts/dashboard', compact('restitution'));
    }

    public function newRestitution(){
        $user = User::where('roles', false)->get();
        return view('layouts.new_restitution', compact('user'));
    }

    public function createRestitution(Request $r){
        $restitution = new Restitution([
            'user_id' => $r->input('name'),
            'title' => $r->input('title'),
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
