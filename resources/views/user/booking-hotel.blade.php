@extends('layout.detail-hotel-layout')
@section('title')
    <title>Đặt khách sạn</title>
@endsection
@section('content')
    <link rel="stylesheet" href="{{asset('css/booking-hotel.css')}}">
    @if(!$rooms || $rooms == null)
        <nav style="min-height: 1500px;margin-top: 100px">
            <div class="container">
                <div class="row">
                    <div class="col-3 lef-content">
                        <div class="row">
                            <h3>Tìm kiếm</h3>
                            <form action="/hotels" method="get" class="col-12">
                                <div class="row">
                                    <div class="form-group col-12">
                                        <label>Ngày bắt đầu</label>
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <input class="form-control" type="date" name="start" value="2011-08-19"
                                                       id="example-date-input">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-12">
                                        <label>Ngày kết thúc</label>
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <input class="form-control" type="date" name="end" value="2011-08-19"
                                                       id="example-date-input">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-12">
                                        <label>Số người</label>
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <input class="form-control" type="number" name="number_people" required min="1" placeholder="nhập số người ">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-12">
                                        <button type="submit" class="btn btn-primary col-12">Tìm kiếm</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-9 right-content">
                        @foreach($hotels as $hotel)
                            <div class="row box-sd">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-4 box-img">
                                            <a href="#">
                                                <img src="{{$hotel->large_photo}}"
                                                     width="250" height="250px" style="border-radius: 5px">
                                            </a>
                                        </div>
                                        <div class="col-8 box-content">
                                            <a href="#"><h2 class="content-align">{{$hotel->name}}</h2></a>
                                            <p class="content-align">
                                                <a href="#">{{$hotel->address}}</a>
                                                <span class="star-sp">
                                                @for($i=0;$i<$hotel->star;$i++)
                                                        <i class="fas fa-star size-color-icon"></i>
                                                    @endfor
                                            </span>
                                            </p>
                                            <p class="content-align"
                                               style="height: 100px;overflow: hidden">{{$hotel->description}}</p>
                                            <div class="row">
                                                <div class="col-8 slick-mr">
                                                    <div class="slick_slider responsive">
                                                        @foreach($hotel->large_photos as $thumbnails)
                                                            <div class="item">
                                                                <a href="{{$thumbnails}}"
                                                                   data-lightbox="roadtrip-{{$hotel->name}}">
                                                                    <img
                                                                        src="{{$thumbnails}}"
                                                                        alt="">
                                                                </a>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                                <div class="col-3 button-detail">
                                                    <button type="button" class="btn btn-primary">
                                                        <a href="/hotels/{{$hotel->id}}">Chi tiết</a>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </nav>
    @else
        <nav style="min-height: 1500px;margin-top: 100px">
            <div class="container">
                <div class="row">
                    <div class="col-12" style="font-size: 30px;text-align: center;margin-bottom: 50px">
                        <span >Các phòng còn trống từ ngày: <span style="font-weight: bold;">{{\Illuminate\Support\Facades\Session::get('start')}}</span> đến ngày: <span style="font-weight: bold;">{{\Illuminate\Support\Facades\Session::get('start')}}</span>, số người: <span style="font-weight: bold;">{{\Illuminate\Support\Facades\Session::get('number_people')}}
                    </div>
                    <div class="col-3 lef-content">
                        <div class="row">
                            <h3>Tìm kiếm</h3>
                            <form action="/hotels" method="get" class="col-12">
                                <div class="row">
                                    <div class="form-group col-12">
                                        <label>Ngày bắt đầu</label>
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <input class="form-control" type="date" name="start" value="{{\Illuminate\Support\Facades\Session::get('start')}}"
                                                       id="example-date-input">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-12">
                                        <label>Ngày kết thúc</label>
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <input class="form-control" type="date" name="end" value="{{\Illuminate\Support\Facades\Session::get('end')}}"
                                                       id="example-date-input">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-12">
                                        <label>Số người</label>
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <input class="form-control" type="number" required name="number_people" min="1"
                                                       placeholder="nhập số người " value="{{\Illuminate\Support\Facades\Session::get('number_people')}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-12">
                                        <button type="submit" class="btn btn-primary col-12">Tìm kiếm</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-9 right-content">
                        @foreach($rooms as $room)
                            <div class="row box-sd">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-4 box-img">
                                            <a href="#">
                                                <img src="{{$room->large_photo}}"
                                                     width="250" height="250px" style="border-radius: 5px">
                                            </a>
                                        </div>
                                        <div class="col-8 box-content">
                                            <a href="/hotels/{{$room->hotel->id}}/?&start={{\Illuminate\Support\Facades\Session::get('start')}}&end={{\Illuminate\Support\Facades\Session::get('end')}}&number_people={{\Illuminate\Support\Facades\Session::get('number_people')}}"><h2 class="content-align">{{$room->hotel->name}}</h2></a>
                                            <p class="content-align">
                                                <a href="#">{{$room->hotel->address}}</a>
                                                <span class="star-sp">
                                                @for($i=0;$i<$room->hotel->star;$i++)
                                                        <i class="fas fa-star size-color-icon"></i>
                                                    @endfor
                                            </span>
                                            </p>
                                            <p class="content-align"
                                               style="height: 50px;overflow: hidden">{{$room->description}} ..</p>
                                            <div class="row" style="margin-top: 30px">
                                                <div class="col-7">
                                                    <p><strong>Loại phòng</strong>: {{$room->type->type}}</p>
                                                </div>
                                                <div class="col-4">
                                                    <p><strong>Giá tiền</strong>: <span>{{$room->price_format}}</span></p>

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-7" style="margin-top: 10px">

                                                </div>
                                                <div class="col-4 button-detail" style="margin-top: 10px;">
                                                    <button type="button" class="btn btn-primary" style="width: 130px">
                                                        <a href="/room/{{$room->id}}/?&start={{\Illuminate\Support\Facades\Session::get('start')}}&end={{\Illuminate\Support\Facades\Session::get('end')}}&number_people={{\Illuminate\Support\Facades\Session::get('number_people')}}">Chi tiết phòng</a>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                            <div class="row">
                                <div class="col-8"></div>
                                <div class="col-4">
                                    <nav aria-label="Page navigation example" class="float-right">
                                        {{$rooms->links()}}
                                    </nav>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </nav>
    @endif
@endsection
@section('script')
    <script>
        $('.responsive').slick({
            dots: false,
            infinite: false,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: false
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });
    </script>
    <script src="{{asset('js/daterangepicker/daterangepicker-user.js')}}"></script>
@endsection
