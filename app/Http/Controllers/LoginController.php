<?php

namespace App\Http\Controllers;

use App\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function login(){
        return view('login-register/form-login');
    }

    public function processLogin(Request $request){
        $username = $request->get('username');
        $password = $request->get('password');
        $existingAccount = Account::where('username','=',$username)->first();
        if ($existingAccount == null){
            return redirect('/login');
        }
        if (md5($password . $existingAccount->salt) != $existingAccount->password_hash){
            return redirect('/login');
        }
        $request->getSession()->put('username',$existingAccount->username);
        $request->getSession()->put('role',$existingAccount->role);
        if ($existingAccount->role == 'admin'){
            return redirect('/admin');
        }
        if ($existingAccount->role == 'user'){
            return redirect('/check-out');
        }
    }
    public function logOutAdmin(){
        Session::remove('username');
        Session::remove('role');
        return redirect('/');
    }
    public function logOutUser(){
        Session::remove('username');
        Session::remove('role');
        return redirect('/');
    }
}
