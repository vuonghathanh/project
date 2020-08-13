<?php

namespace App\Http\Controllers;

use App\Account;
use App\Http\Requests\FormCraeteAccount;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class AdminCreateAccount extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = array();
        $data['keyword'] = '';
        $data['email'] = '';
        $list_account = Account::query();
        if($request->has('keyword') && strlen($request->get('keyword')) >0 ){
            $data['keyword']= $request->get('keyword');
            $list_account = $list_account->where('username', '=',  $request->get('keyword'));
        }
        if($request->has('email') && strlen($request->get('email')) >0 ){
            $data['email']= $request->get('email');
            $list_account = $list_account->where('email', '=',  $request->get('email'));
        }
        if ($request->has('start') && strlen($request->get('start')) > 0 && $request->has('end') && strlen($request->get('end')) > 0) {
            $data['start'] = $request->get('start');
            $data['end'] = $request->get('end');
            $from = date($request->get('start') . ' 00:00:00');
            $to = date($request->get('end') . ' 23:59:00');
            $list_account = $list_account->whereBetween('created_at', [$from, $to]);
        }
        $data['list'] =  $list_account
            ->where('status','=','1')
            ->orderByDesc('created_at')
            ->paginate(5)
            ->appends($request->only($request->get('keyword')));
        return view('admin/list/list-account')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/form/form-account');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
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
        $accounts->role = $request->get('role');
        $accounts->salt = $salt;
        $accounts->status = 1;
        $accounts->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $accounts->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $accounts->save();
        return redirect('/admin/accounts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin/form/edit/edit-account')->with('obj',Account::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $obj = Account::find($id);
        if ($obj == null || $obj->status != 1) {
            return view('error/error-404');
        }
        $obj->username = $request->get('username');
        $obj->role = $request->get('role');
        $obj->first_name = $request->get('first-name');
        $obj->last_name = $request->get('last-name');
        $obj->identity_card = $request->get('identity_card');
        $obj->email = $request->get('email');
        $obj->status = 1;
        $obj->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $obj->save();
        return redirect('/admin/accounts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function updateStatus($id){
        $obj = Account::find($id);
        if ($obj == null){
            return view('error/error-404');
        }
        $obj->status = 0;
        $obj->save();
    }
    public function updateAllStatus(Request $request)
    {
        $ids = $request->get('ids');
        Account::whereIn('id', $ids)->update(['status' => 0]);
        return redirect('/admin/blogs');
    }
}
