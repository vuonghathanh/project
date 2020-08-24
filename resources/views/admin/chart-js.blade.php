@extends('layout.admin-layout')
@section('content')
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Thống kê: <small style="font-size: 17px">Doanh thu của các khách sạn theo thời gian</small></h3>
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
                                    <form action="/admin" method="get" id="filter_form">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="exampleFormControlSelect1">Search by name hotel</label>
                                                    <select name="hotel_id" class="form-control" id="hotel_select">
                                                        <option value="0">All</option>
                                                        @foreach($hotels as $hotel)
                                                            <option value="{{$hotel->id}}" {{$hotel->id == $hotel_id ? 'selected':''}}>{{$hotel->name}}</option>
                                                        @endforeach
                                                    </select>
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
            <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Marriott Phú Quốc Emerald Bay Resort & Spa</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        {!! $chart->container() !!}
                        <div style="padding-top: 100px">
                        <span>
                            <h3>Doanh thu được nhận: {{\App\Utility::formatMoney($total_price * 0.1)}}</h3>
                            <h4>Tổng doanh thu: {{\App\Utility::formatMoney($total_price)}}</h4>
                        </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page content -->
@endsection
@section('script')

    <script>
        $('#hotel_select').change(function (){
            $('#filter_form').submit();

        })
        $('#type_select').change(function (){
            $('#filter_form').submit();
        })

    </script>
    <script src="{{asset('js/daterangepicker/daterangepicker.js')}}"></script>
    {!! $chart->script() !!}
@endsection
