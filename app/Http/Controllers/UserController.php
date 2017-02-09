<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\User;
use Auth;
use Validator;
use Session;

class UserController extends Controller
{
    public function indexSignUp(){
        return view('register');
    }

    public function postSignUp(Request $r){
        $this->validate($r,[
            'username' => 'required|unique:users',
            'password' => 'required',
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

        return redirect('/');
    }

    public function indexSignIn(){

    }

    public function postSignIn(Request $r){
        $rules = array(
            'username'    => 'required', 
             'password' => 'required|min:3'
        );

        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return Redirect::to('/')
                ->withErrors($validator) // send back all errors to the login form
                ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
        } else {
            // create our user data for the authentication
            $userdata = array(
                'username'     => Input::get('username'),
                'password'  => Input::get('password')
            );

            if (Auth::attempt($userdata)) {
                $user = Auth::user();
                Session::put('name', $user->name);    
                return Redirect::to('/dashboard');
           } else { 
                return Redirect::to('/');
            }
        }

    }

    public function getLogout(){
        Auth::logout();
        Session::flush();
        return redirect('/');
    }
}
