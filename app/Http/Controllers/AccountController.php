<?php

namespace App\Http\Controllers;

use App\Account;
use App\Http\Requests\FormCraeteAccount;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('login-register/form-login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(FormCraeteAccount $request)
    {
        $request->validated();
        $password = $request->get('password');
        $salt = substr(sha1(rand()), 0, 7);
        $accounts = new Account();
        $accounts->username = $request->get('username');
        $accounts->password_hash = md5($password . $salt);
        $accounts->first_name = $request->get('first-name');
        $accounts->last_name = $request->get('last-name');
        $accounts->identity_card = $request->get('identity_card');
        $accounts->email = $request->get('email');
        $accounts->role = 'user';
        $accounts->salt = $salt;
        $accounts->status = 1;
        $accounts->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $accounts->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $accounts->save();
        return redirect('/login');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
