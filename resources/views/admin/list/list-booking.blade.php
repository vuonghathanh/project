@extends('layout.admin-layout')
@section('content')
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>List Bookings</h3>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Filter</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="title_right">
                                <form action="/admin/bookings" method="get" id="filter_form">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">Search by time</label>
                                                <input type="text" name="dates" class="form-control">
                                                <input type="hidden" name="start">
                                                <input type="hidden" name="end">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_content">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box table-responsive">
                                @if(sizeof($list) > 0)
                                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Total price</th>
                                            <th>Payment Type</th>
                                            <th>Account</th>
                                            <th>First name</th>
                                            <th>Last name</th>
                                            <th>Email</th>
                                            <th>Created At</th>
                                            <th>Updated At</th>
                                            <th>Status</th>
                                            <th>Detail</th>
                                            <th>Confirm</th>
                                            <th>Cancel</th>
                                        </tr>
                                        </thead>


                                        <tbody>
                                        @foreach($list as $obj)
                                            <tr>
                                                <td>{{$obj->id}}</td>
                                                <td>{{$obj->total_price}}</td>
                                                <td>{{ $obj->payment_type }}</td>
                                                <td>{{$obj->account->username}}</td>
                                                <td>{{$obj->first_name}}</td>
                                                <td>{{$obj->last_name}}</td>
                                                <td>{{$obj->email}}</td>
                                                <td>{{$obj->created_at}}</td>
                                                <td>{{$obj->updated_at}}</td>
                                                <td>{!! $obj->status_string !!}</td>
                                                <td><a href="/admin/bookings/{{$obj->id}}" class="text-capitalize mr1">Detail</a></td>
                                                <td><a href="#" class="text-orange mr-1 btn-confirm" id="confirm-{{$obj->id}}"> Confirm</a></td>
                                                <td><a href="#" class="btn-cancel text-danger mr-1" id="cancel-{{$obj->id}}">Cancel</a></td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                @else
                                    <div>Have no booking</div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8"></div>
                        <div class="col-4">
                            <nav aria-label="Page navigation example" class="float-right">
                                {{$list->links()}}
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="{{asset('js/daterangepicker/daterangepicker.js')}}"></script>
    <script src="{{asset('js/booking/cancel.js')}}"></script>
    <script src="{{asset('js/booking/confirm.js')}}"></script>
@endsection
