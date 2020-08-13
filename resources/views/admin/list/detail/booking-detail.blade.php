@extends('layout.admin-layout')
@section('content')
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>List room types</h3>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_content">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box table-responsive">
                                <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Price</th>
                                        <th>Date number</th>
                                        <th>Start with</th>
                                        <th>End with</th>
                                        <th>Room id</th>

                                    </tr>
                                    </thead>


                                    <tbody>
                                    @foreach($list as $obj)
                                        <tr>
                                            <td>{{$obj->id}}</td>
                                            <td>{{$obj->price}}</td>
                                            <td>{{$obj->date_number}}</td>
                                            <td>{{$obj->start_with}}</td>
                                            <td>{{$obj->end_with}}</td>
                                            <td>{{$obj->room_id}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8"></div>
                        <div class="col-4">
                            <nav aria-label="Page navigation example" class="float-right">
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="{{asset('js/update-status/update-status-room-type.js')}}"></script>
    <script src="{{asset('js/update-status/update-all-status-room-type.js')}}"></script>
@endsection
