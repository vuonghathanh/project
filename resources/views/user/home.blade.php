@extends('layout.user-layout')
@section('title')
    <title>Trang chủ</title>
@endsection
@section('content')
    {{-- Start demo hotel--}}
    <nav style="min-height: 1700px">
        <div class="container content">
            <div>
                <p class="content_while">Một số khách sạn nổi bật</p>
                <p>Dưới đây là một số khách sạn nổi bật trong thời gian qua!</p>
            </div>

            {{--  Start box hotels --}}
            @foreach($hotels as $hotel)
            <div class="row">
                <div class="col-12  box-hotel">
                    <div class="row">
                        <div class="col-3 box-img">
                            <a href="#">
                                <img src="{{$hotel->large_photo}}" width="250px" height="250px" style="border-radius: 5px">
                            </a>
                        </div>
                        <div class="col-7 box-content">
                            <a href="#"><h2 class="content-align">{{$hotel->name}}</h2></a>
                            <p class="content-align"><a href="#">{{$hotel->address}}</a></p>
                            <p class="content-align" style="height: 50px;overflow: hidden">{{$hotel->description}}</p>
                            <div class="slick_slider responsive">
                                @foreach($hotel->large_photos as $thumbnails)
                                <div class="item">
                                    <a href="{{$thumbnails}}" data-lightbox="roadtrip-{{$hotel->name}}">
                                        <img src="{{$thumbnails}}" alt="">
                                    </a>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-2 box-content">
                            <div>
                            <span>
                                @for($i=0;$i<$hotel->star;$i++)
                                    <i class="fa fa-star size-color-icon"></i>
                                @endfor
                            </span>
                                <p></p>
                            </div>
                            {{-- ....... --}}
                            <button class="btn btn-primary btn-detail">
                                <a href="/hotels/{{$hotel->id}}" style="color: white;text-decoration: none">Chi tiết</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </nav>
    {{-- End demo hotel --}}

    {{-- Start background dive--}}
    <nav class="nav-between">
        <div class="nav-between-overlay">
            <div class="container work-with-me">
                <div class="p-between">Bạn có muốn đặt phòng bây giờ không?</div>
            </div>
            <button type="button" class="btn btn-light text-dark click-me">Click me</button>
        </div>
    </nav>
    {{-- End background dive --}}
    {{-- Start content --}}
    <nav style="min-height: 1050px">
        <div class="container content" id="start">
            <div>
                <p class="content_while">Tại sao bạn nên đi du lịch Phú Quốc?</p>

            </div>
            <div class="row">
                <div class="col-6 thumbnail">
                </div>
                <div class="col-6 description">
                    <div>
                        <h4>Phú Quốc là khu du lịch nổi tiếng của Việt Nam, với hàng loạt bãi biển và các dịch vụ vui chơi giải trí tuyệt vời. </h4>
                        <br>
                        <p>Phú Quốc là hòn đảo tươi đẹp của tỉnh Kiên Giang nằm trong khu vực vịnh Thái Lan, gần với biên giới Campuchia được rất nhiều khách du lịch trong và ngoài nước đánh giá cao bởi vẻ đẹp nguyên sơ của bờ biển trong xanh, trải dài cát trắng cùng cảnh thiên nhiên ngoạn mục, các cánh rừng nguyên sinh cổ thụ cùng hệ sinh thái động thực vật đa dạng. Dưới đây là 6 lý do, Du Lịch Quốc Tế Đại Việt khuyên bạn nên trải nghiệm hòn đảo Phú Quốc ngay trong mùa hè này để được tận hưởng các vẻ đẹp tuyệt vời mà thiên nhiên và cuộc sống nơi đây mang lại.</p>
                        <br>
                        <p>Ngoài ra, bạn còn có thể lựa chọn ngọc trai tại Phú Quốc hay hải sâm, một thực phẩm cao cấp quý hiếm với giá trị cao trong việc nâng cao sức khỏe hoặc nấm tràm, loại nấm đặc trưng chỉ có tại Phú Quốc.</p>
                        <br>
                        <p></p>
                        <button class="btn btn-light"><a href="#">Đặt Ngay</a></button>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    {{-- End content --}}
@endsection
