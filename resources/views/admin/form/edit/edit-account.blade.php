@extends('layout.admin-layout')
@section('content')
    <div class="x_content">
        <form class="" action="/admin/accounts/{{$obj->id}}" method="post" id="hotel_form" novalidate>
            @method('PUT')
            @csrf
            <span class="section">Hotel Info</span>
            <div class="row">
                <div class="field item form-group col-md-4 col-sm-4">
                    <label class="col-form-label col-md-3 col-sm-3  label-align">Username<span
                            class="required">*</span></label>
                    <div class="col-md-11 col-sm-11">
                        <input class="form-control" type="text"  name="username" value="{{$obj->username}}"  required/>
                        @if($errors->has('username'))
                            <span class="text-danger">* {{$errors->first('username')}}</span>
                        @endif
                    </div>
                </div>
                <div class="field item form-group col-md-4 col-sm-4">
                    <label class="col-form-label col-md-5 col-sm-5  label-align">Role<span
                            class="required">*</span></label>
                    <div class="col-md-11 col-sm-11">
                        <select class="form-control" name="role">
                            <option value="admin">Admin</option>
                            <option value="user">User</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="field item form-group col-md-4 col-sm-4">
                    <label class="col-form-label col-md-3 col-sm-3  label-align">First name<span
                            class="required">*</span></label>
                    <div class="col-md-11 col-sm-11">
                        <input class="form-control" type="text"  name="first-name" value="{{$obj->first_name}}"  required/>
                        @if($errors->has('first-name'))
                            <span class="text-danger">* {{$errors->first('first-name')}}</span>
                        @endif
                    </div>
                </div>
                <div class="field item form-group col-md-4 col-sm-4">
                    <label class="col-form-label col-md-5 col-sm-5  label-align">Last name<span
                            class="required">*</span></label>
                    <div class="col-md-11 col-sm-11">
                        <input class="form-control" type="text"  name="last-name" value="{{$obj->last_name}}"  required/>
                        @if($errors->has('last-name'))
                            <span class="text-danger">* {{$errors->first('last-name')}}</span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="field item form-group col-md-4 col-sm-4">
                    <label class="col-form-label col-md-3 col-sm-3  label-align">Identity card<span
                            class="required">*</span></label>
                    <div class="col-md-11 col-sm-11">
                        <input class="form-control" type="text"  name="identity_card" value="{{$obj->identity_card}}"  required/>
                        @if($errors->has('identity_card'))
                            <span class="text-danger">* {{$errors->first('identity_card')}}</span>
                        @endif
                    </div>
                </div>
                <div class="field item form-group col-md-4 col-sm-4">
                    <label class="col-form-label col-md-5 col-sm-5  label-align">Email<span
                            class="required">*</span></label>
                    <div class="col-md-11 col-sm-11">
                        <input class="form-control" type="email"  name="email" value="{{$obj->email}}"  required/>
                        @if($errors->has('email'))
                            <span class="text-danger">* {{$errors->first('email')}}</span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="ln_solid">
                <div class="form-group">
                    <div class="col-md-6 offset-md-1">
                        <button type='submit' class="btn btn-primary">Submit</button>
                        <button type='reset' class="btn btn-success">Reset</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
@section('script')
@endsection
