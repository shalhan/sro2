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
        $roles = false;

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
            'password' => bcrypt($r->input('password')),
        ]);

        $user->save();

        return redirect('/');
    }

    public function indexSignIn(){
        return view('login');

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
        //     $userdata = array(
        //         'username'     => Input::get('username'),
        //         'password'  => Input::get('password')
        //     );

        //     if (Auth::attempt($userdata)) {
        //         $user = Auth::user();
        //         Session::put('name', $user->name);
        //         Session::put('id', $user->id);
        //         if($user->roles == true){
        //             Session::put('role', $user->roles);
        //             return Redirect::to('/dashboard');                
        //         }else{
        //             return redirect('/home/user=' . Session::get('id'));
        //         }
        //    } else { 
        //         return Redirect::to('/');
        //     }
                if (Auth::guard('admin')->attempt(['username' => Input::get('username'),
                    'password'  => Input::get('password'), 'roles' => true])) {
                    // echo "kamu admin";
                    $user = Auth::user();
                    print_r($user);
                    // Session::put('name', $user->name);
                    // Session::put('id', $user->id);
                    // return redirect('/dashboard');
                    //return Redirect::to('/dashboard');
                }else if(Auth::guard('web')->attempt(['username' => Input::get('username'),
                    'password'  => Input::get('password'), 'roles' => false])){
                    $user = Auth::user();
                    // print_r($user);
                    
                    Session::put('name', $user->name);
                    Session::put('id', $user->id);
                    // return redirect('/home/user=' . Session::get('id'));
                }else {
                    echo "eror huft";
                }
        }

    }

    public function getLogout(){
        Auth::logout();
        Session::flush();
        return redirect('/');
    }
}
