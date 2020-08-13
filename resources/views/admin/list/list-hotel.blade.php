@extends('layout.admin-layout')
@section('content')
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>List Hotels</h3>
                <h4><a href="/admin/hotels/create">Create +</a></h4>
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
                                <form action="/admin/hotels" method="get" id="filter_form">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">Search by keyword</label>
                                                <input  value="{{$keyword}}" type="text" name="keyword" class="form-control" placeholder="Search by keyword">
                                                <input type="submit" style="visibility: hidden;" />
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">Search by time</label>
                                                <input type="text" name="dates" class="form-control">
                                                <input type="hidden" name="start">
                                                <input type="hidden" name="end">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Search by star</label>
                                                <select class="form-control" id="star_select" name="star">
                                                    <option value="" > Choose star </option>
                                                    <option value="1" {{1 == $star ? 'selected':''}}>1</option>
                                                    <option value="2" {{2 == $star ? 'selected':''}}>2</option>
                                                    <option value="3" {{3 == $star ? 'selected':''}}>3</option>
                                                    <option value="4" {{4 == $star ? 'selected':''}}>4</option>
                                                    <option value="5" {{5 == $star ? 'selected':''}}>5</option>
                                                </select>
                                                <input type="submit" style="visibility: hidden">
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
                <div class="x_title">
                    <ul class="nav navbar-right panel_toolbox">
                        <div class="ml-auto">
                            <div class="dropdown sub-dropdown">
                                <button class="btn btn-link text-muted dropdown-toggle" type="button"
                                        id="dd1" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                    <i data-feather="more-vertical" ></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd1">
                                    <a class="dropdown-item" href="javascript:void(0)" id="delete-all">Delete All</a>
                                </div>
                            </div>
                        </div>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box table-responsive">
                                @if(sizeof($list) > 0)
                                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th class="">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="checkAll" value="0">
                                                    <label class="custom-control-label" for="checkAll"></label>
                                                </div>
                                            </th>
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>Star</th>
                                            <th>Thumbnail</th>
                                            <th>Address</th>
                                            <th>Description</th>
                                            <th>Email</th>
                                            <th>Detail</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                        </thead>


                                        <tbody>
                                        @foreach($list as $obj)
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input product-checkbox"
                                                               value="{{$obj->id}}" id="checkbox_{{$obj->id}}">
                                                        <label class="custom-control-label"
                                                               for="checkbox_{{$obj->id}}"></label>
                                                    </div>
                                                </td>
                                                <td>{{$obj->id}}</td>
                                                <td>{{$obj->name}}</td>
                                                <td>{{$obj->star}}</td>
                                                <td>
                                                    @foreach($obj->large_photos as $photo)
                                                        <img src="{{$photo}}" alt="" width="100px" height="45px"
                                                             style="margin-bottom: 10px">
                                                    @endforeach
                                                </td>
                                                <td>{{$obj->address}}</td>
                                                <td>{!! $obj->description !!}</td>
                                                <td>{{$obj->email}}</td>
                                                <td><a href="/admin/hotels/{{$obj->id}}" class="text-capitalize mr1">Detail</a></td>
                                                <td><a href="/admin/hotels/{{$obj->id}}/edit" class="text-orange mr-1"> Edit</a></td>
                                                <td><a href="#" class="btn-delete text-danger mr-1" id="delete-{{$obj->id}}">Delete</a></td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                @else
                                    <div>Have no hotel</div>
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
    <script>
        $('#star_select').change(function (){
            $('#filter_form').submit();
        })
    </script>
    <script src="{{asset('js/daterangepicker/daterangepicker.js')}}"></script>
    <script src="{{asset('js/update-status/update-status-hotel.js')}}"></script>
    <script src="{{asset('js/update-status/update-all-status-hotel.js')}}"></script>
@endsection
