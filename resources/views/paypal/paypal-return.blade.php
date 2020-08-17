@extends('layout.admin-layout')
@section('content')
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>List rooms</h3>
                <h4><a href="/admin/accounts/create">Create +</a></h4>
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
{{--                                @if(sizeof($list) > 0)--}}
                                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Username</th>
                                            <th>First name</th>
                                            <th>Last name</th>
                                            <th>Identity card</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                            <th>Salt</th>
                                            <th>Created At</th>
                                            <th>Updated At</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                        </thead>


                                        <tbody>
{{--                                        @foreach($list as $obj)--}}
{{--                                            <tr>--}}
{{--                                                <td>{{$obj->id}}</td>--}}
{{--                                                <td>{{$obj->username}}</td>--}}
{{--                                                <td>{{ $obj->first_name }}</td>--}}
{{--                                                <td>{{$obj->last_name}}</td>--}}
{{--                                                <td>{{$obj->identity_card }}</td>--}}
{{--                                                <td>{{$obj->email}}</td>--}}
{{--                                                <td>{{$obj->role}}</td>--}}
{{--                                                <td>{{$obj->salt}}</td>--}}
{{--                                                <td>{{$obj->created_at}}</td>--}}
{{--                                                <td>{{$obj->updated_at}}</td>--}}
{{--                                            </tr>--}}
{{--                                        @endforeach--}}
                                        </tbody>
                                    </table>
{{--                                @else--}}
                                    <div>Have no account</div>
{{--                                @endif--}}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8"></div>
                        <div class="col-4">
                            <nav aria-label="Page navigation example" class="float-right">
{{--                                {{$list->links()}}--}}
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')

@endsection
