@extends('layout.detail-hotel-layout')
@section('title')
    <title>Đặt khách sạn</title>
@endsection
@section('content')
    <link rel="stylesheet" href="{{asset('css/booking-hotel.css')}}">
    <nav style="min-height: 1500px;margin-top: 100px">
        <div class="container">
            <div class="row">
                <div class="col-3 lef-content">
                    <div class="row">
                        <h3>Tìm kiếm</h3>
                        <form action="#" method="get" class="col-12">
                            <div class="row">
                                <div class="form-group col-12">
                                    <label>Ngày bắt đầu - Ngày kết thúc</label>
                                    <div class="form-group date">
                                        <input type="text" name="dates" class="form-control"/>
                                        <input type="hidden" name="start">
                                        <input type="hidden" name="end">
                                    </div>
                                </div>
                                <div class="form-group col-12">
                                    <label>người</label>
                                    <select name="người" id="" class="form-control">
                                        <option value="1"> 1 người</option>
                                        <option value="2"> 2 người</option>
                                        <option value="3"> 3 người</option>
                                        <option value="4"> 4 người</option>
                                        <option value="5"> 5 người</option>
                                        <option value="6"> 6 người</option>
                                        <option value="7"> 7 người</option>
                                        <option value="8"> 8 người</option>
                                        <option value="9"> 9 người</option>
                                        <option value="10"> 10 người</option>
                                        <option value="11"> 11 người</option>
                                        <option value="12"> 12 người</option>
                                        <option value="13"> 13 người</option>
                                        <option value="14"> 14 người</option>
                                        <option value="15"> 15 người</option>
                                        <option value="16"> 16 người</option>
                                        <option value="17"> 17 người</option>
                                        <option value="18"> 18 người</option>
                                        <option value="19"> 19 người</option>
                                        <option value="20"> 20 người</option>
                                    </select>
                                </div>
                                <div class="form-group col-12">
                                    <button type="submit" class="btn btn-primary col-12">Search</button>
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
                                        <p class="content-align" style="height: 100px;overflow: hidden">{{$hotel->description}}</p>
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
