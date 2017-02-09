<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Restitution;

class RestitutionController extends Controller
{   
    public function getAllRestitution(){
        $restitution = Restitution::with(['user','stat'])->get();
        
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
}