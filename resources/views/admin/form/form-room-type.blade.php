@extends('layout.admin-layout')
@section('content')
    <div class="x_content">
        <form class="" action="/admin/room-types" method="post" id="hotel_form" novalidate>
            @csrf
            <span class="section">Room type</span>
            <div class="field item form-group">
                <label class="col-form-label col-md-3 col-sm-3  label-align">Type<span class="required">*</span></label>
                <div class="col-md-6 col-sm-6">
                    <input class="form-control" name="type" type="text" required="required"/>
                    @if($errors->has('type'))
                        <span class="text-danger">* {{$errors->first('type')}}</span>
                    @endif
                </div>
            </div>
            <div class="field item form-group">
                <label class="col-form-label col-md-3 col-sm-3  label-align">Hotel<span
                        class="required">*</span></label>
                <div class="col-md-3 col-sm-3">
                    <select class="form-control" id="star_select" name="hotel">
                        @foreach($hotels as $hotel)
                            <option value="{{$hotel->id}}">{{$hotel->name}}</option>
                        @endforeach
                    </select>
                    @if($errors->has('hotel'))
                        <span class="text-danger">* {{$errors->first('hotel')}}</span>
                    @endif
                </div>
            </div>
            <div class="ln_solid">
                <div class="form-group">
                    <div class="col-md-6 offset-md-3">
                        <button type='submit' class="btn btn-primary">Submit</button>
                        <button type='reset' class="btn btn-success">Reset</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
