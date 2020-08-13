@extends('layout.admin-layout')
@section('content')
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Detail hotel</h3>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Detail Hotel</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box table-responsive">
                                <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Room number</th>
                                        <th>Floor</th>
                                        <th>Hotel id</th>
                                        <th>Type</th>
                                        <th>Thumbnail</th>
                                        <th>Description</th>
                                        <th>Price</th>
                                        <th>Number people</th>
                                        <th>Created At</th>
                                        <th>Updated At</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                    </thead>


                                    <tbody>
                                    @foreach($list->rooms->where('status','=',1) as $obj)
                                        <tr>
                                            <td>{{$obj->id}}</td>
                                            <td>{{$obj->room_number}}</td>
                                            <td>{{ $obj->floor }}</td>
                                            <td>{{$obj->hotel->name}}</td>
                                            <td>{{$obj->type->type}}</td>
                                            <td>
                                                @foreach($obj->large_photos as $photo)
                                                    <img src="{{$photo}}" alt="" width="100px" height="45px"
                                                         style="margin-bottom: 10px">
                                                @endforeach
                                            </td>
                                            <td>{!! $obj->description !!}</td>
                                            <td>{{$obj->price}}</td>
                                            <td>{{$obj->number_people}}</td>
                                            <td>{{$obj->created_at}}</td>
                                            <td>{{$obj->updated_at}}</td>
                                            <td>
                                                <a href="/admin/rooms/{{$obj->id}}/edit"
                                                   class="text-orange mr-1">Edit</a>
                                            </td>
                                            <td>
                                                <a href="#" class="btn-delete text-danger mr-1" id="delete-{{$obj->id}}">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="{{asset('js/update-status/update-status-room.js')}}"></script>
@endsection


