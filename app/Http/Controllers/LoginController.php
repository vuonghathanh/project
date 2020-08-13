<?php

namespace App\Http\Controllers;

use App\Account;
use Illuminate\Http\Request;

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
            return redirect('/admin/hotels');
        }
        if ($existingAccount->role == 'user'){
            return redirect('/check-out');
        }
    }
}
