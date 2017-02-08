<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function indexSignUp(){
        return view('register');
    }

    public function postSignUp(Request $r){
        $this->validate($r,[
            'username' => 'required|unique:users',
            'password' => 'required|min:8',
            'name' => 'required',
            'nip' => 'required',
            'position' => 'required'
        ]);

        $user = new User([
            'name' => $r->input('name'),
            'nip' => $r->input('nip'),
            'position' => $r->input('position'),
            'username' => $r->input('username'),
            'password' => bcrypt($r->input('password'))
        ]);

        $user->save();

        return redirect()->url('/dashboard');
    }
}
