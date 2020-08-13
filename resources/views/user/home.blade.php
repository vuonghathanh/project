@extends('layout.user-layout')
@section('title')
    <title>Trang chủ</title>
@endsection
@section('content')
    {{-- Start demo hotel--}}
    <nav style="min-height: 1700px">
        <div class="container content">
            <div>
                <p class="content_while">Some outstanding hotels</p>
                <p>Lorem ipsum dolor sit amet</p>
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
                                    <i class="fas fa-star size-color-icon"></i>
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
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
            </div>
            <div class="row">
                <div class="col-6 thumbnail">
                </div>
                <div class="col-6 description">
                    <div>
                        <h4>Phu Quoc is a famous tourist area of Vietnam, with a series of beaches and great entertainment
                            services. </h4>
                        <br>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <br>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur.
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim
                            id est laborum.</p>
                        <br>
                        <p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto
                            beatae vitae dicta sunt explicabo.
                            Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                            consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam
                            est,</p>
                        <button class="btn btn-light"><a href="#">Booking now</a></button>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    {{-- End content --}}
@endsection
