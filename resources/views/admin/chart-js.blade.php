@extends('layout.admin-layout')
@section('content')
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Thống kê: <small>Doanh thu của các khách sạn theo thời gian</small></h3>
            </div>
        </div>
        <div class="clearfix"></div>
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
                    </div>
                    <div style="padding-top: 500px">
                        <span>
                            <h3>Tổng doanh thu: {{\App\Utility::formatMoney($total_price)}}</h3>
                            <h4>Doanh thu được nhận: {{\App\Utility::formatMoney($total_price * 0.1)}}</h4>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Vinpearl Resort & Spa Phu Quoc</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        {!! $chart2->container() !!}
                    </div>
                    <div style="padding-top: 500px">
                        <span>
                            <h3>Tổng doanh thu: {{\App\Utility::formatMoney($total_price2)}}</h3>
                            <h4>Doanh thu được nhận: {{\App\Utility::formatMoney($total_price2 * 0.1)}}</h4>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Praha Hotel</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        {!! $chart3->container() !!}
                    </div>
                    <div style="padding-top: 500px">
                        <span>
                            <h3>Tổng doanh thu: {{\App\Utility::formatMoney($total_price3)}}</h3>
                            <h4>Doanh thu được nhận: {{\App\Utility::formatMoney($total_price3 * 0.1)}}</h4>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>VinOasis Phu Quoc</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        {!! $chart4->container() !!}
                    </div>
                    <div style="padding-top: 500px">
                        <span>
                            <h3>Tổng doanh thu: {{\App\Utility::formatMoney($total_price4)}}</h3>
                            <h4>Doanh thu được nhận: {{\App\Utility::formatMoney($total_price4 * 0.1)}}</h4>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Novotel Phu Quoc Resort</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        {!! $chart5->container() !!}
                    </div>
                    <div style="padding-top: 500px">
                        <span>
                            <h3>Tổng doanh thu: {{\App\Utility::formatMoney($total_price5)}}</h3>
                            <h4>Doanh thu được nhận: {{\App\Utility::formatMoney($total_price5 * 0.1)}}</h4>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Sol Beach House Phu Quoc</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        {!! $chart6->container() !!}
                    </div>
                    <div style="padding-top: 500px">
                        <span>
                            <h3>Tổng doanh thu: {{\App\Utility::formatMoney($total_price6)}}</h3>
                            <h4>Doanh thu được nhận: {{\App\Utility::formatMoney($total_price6 * 0.1)}}</h4>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Premier Residences Phu Quoc Emerald Bay</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        {!! $chart7->container() !!}
                    </div>
                    <div style="padding-top: 500px">
                        <span>
                            <h3>Tổng doanh thu: {{\App\Utility::formatMoney($total_price7)}}</h3>
                            <h4>Doanh thu được nhận: {{\App\Utility::formatMoney($total_price7 * 0.1)}}</h4>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Best Western Premier Sonasea Phu Quoc Resort</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        {!! $chart8->container() !!}
                    </div>
                    <div style="padding-top: 500px">
                        <span>
                            <h3>Tổng doanh thu: {{\App\Utility::formatMoney($total_price8)}}</h3>
                            <h4>Doanh thu được nhận: {{\App\Utility::formatMoney($total_price8 * 0.1)}}</h4>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Seashells Phu Quoc Hotel & Spa</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        {!! $chart9->container() !!}
                    </div>
                    <div style="padding-top: 500px">
                        <span>
                            <h3>Tổng doanh thu: {{\App\Utility::formatMoney($total_price9)}}</h3>
                            <h4>Doanh thu được nhận: {{\App\Utility::formatMoney($total_price9 * 0.1)}}</h4>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Intercontinental Phu Quoc Long Beach Resort</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        {!! $chart10->container() !!}
                    </div>
                    <div style="padding-top: 500px">
                        <span>
                            <h3>Tổng doanh thu: {{\App\Utility::formatMoney($total_price10)}}</h3>
                            <h4>Doanh thu được nhận: {{\App\Utility::formatMoney($total_price10 * 0.1)}}</h4>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page content -->
@endsection
@section('script')
    {!! $chart->script() !!}
    {!! $chart2->script() !!}
    {!! $chart3->script() !!}
    {!! $chart4->script() !!}
    {!! $chart5->script() !!}
    {!! $chart6->script() !!}
    {!! $chart7->script() !!}
    {!! $chart8->script() !!}
    {!! $chart9->script() !!}
    {!! $chart10->script() !!}
@endsection
