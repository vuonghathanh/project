@extends('layout.detail-hotel-layout')
@section('title')
    <title>Chi tiết khách sạn</title>
@endsection
@section('content')
    <nav style="min-height: 3000px;margin-top: 130px">
        <div class="container" style="max-width: 1000px">
            <div class="row">
                <div class="col-7">
                    <h1 class="name-hotel">
                        {{$hotel->name}}
                    </h1>
                    <h5>
                        {{$hotel->address}}
                    </h5>
                </div>
                <div class="col-5 star-hotel">
                    <div class="ml-star">
                        <span>
                            @for($i=0;$i<$hotel->star;$i++)
                                <i class="fas fa-star size-color-icon"></i>
                            @endfor
                        </span>
                    </div>
                </div>
            </div>
            <div class="row big-img">
                <div class="col-12">
                    <div class="slider-for responsive">
                        @foreach($hotel->large_photos as $photo)
                            <div class="item">
                                <img src="{{$photo}}" height="500px"
                                     width="100%" alt="">
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-12 small-image">
                    <div class="slider-nav responsive">
                        @foreach($hotel->large_photos as $photo)
                            <div class="item">
                                <img src="{{$photo}}" width="100px"
                                     height="70px" alt="">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="row overview-rating">
                <div class="col-7 overview">
                    <h2 style="font-weight: bold">Overview</h2>
                    <p>{{$hotel->description}}</p>
                </div>
                <div class="col-5 rating">
                    <h2 style="font-weight: bold">Rating</h2>
                    <div class="box-rating col-6">
                        <h1 class="count-rating">9.0</h1>
                    </div>
                    <div class="col-6 rating-detail">
                        <p class="rating-name">Excellent</p>
                        <p class="rating-count">Based on 252 reviews</p>
                    </div>
                </div>
            </div>

            <div class="row room-rates">
                <div class="col-4">
                    <h1>Room rates</h1>
                </div>
                <div class="col-8">
                    <div class="row">
                        <form action="/hotels/{{$hotel->id}}" method="get" >
                            <div class="row">
                                <div class="form-group date">
                                    <input type="text" name="dates" class="form-control"/>
                                    <input type="hidden" name="start">
                                    <input type="hidden" name="end">
                                </div>
                                <div class="form-group submit-rq">
                                    <button type="submit" class="btn btn-warning">
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                        <button type="button"  class="btn btn-primary booked" data-toggle="modal" data-target="#exampleModalCenter">
                            <a href="/check-out" id="show-booked" style="color: white;text-decoration: none">
                                Đã đặt trước
                            </a>
                        </button>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: 50px">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">Số người</th>
                        <th>Hình ảnh demo</th>
                        <th scope="col">Giá cơ bản hàng đêm</th>
                        <th></th>
                    </tr>
                    </thead>
                    <session>
                    <tbody>
                    @foreach($rooms as $room)
                        <tr>
                            <td scope="row">{{$room->number_people}}</td>
                            <td>
                                @foreach($room->small_photos as $photo)
                                    <a href="{{$photo}}" data-lightbox="roadtrip-{{$room->id}}">
                                        <img src="{{$photo}}" width="100px" alt="">
                                    </a>
                                @endforeach
                            </td>

                            <td><span class="money"> {{$room->priceFormat}} </span></td>
                            <td>
                                <button class="btn btn-warning add-card" data-id="{{$room->id}}">
                                    Đặt
                                </button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                    </session>
                </table>
            </div>
            <div class="row" style="text-align: center;font-size: 13px">
                <nav aria-label="Page navigation example" class="float-right">
                    {{$rooms->links()}}
                </nav>
                <div class="col-12">
                    <p>Prices are based on 1 night and 1 room, not including taxes and fees.</p>
                </div>
            </div>
            <div class="row map">
                <div class="col-12">
                    <h1>Map</h1>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3200.1242901427413!2d103.95789352088389!3d10.21615098686652!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a78c879719f163%3A0x985bd0745b52e6ba!2zNSDEkMaw4budbmcgMzAgVGjDoW5nIDQsIFRULiBExrDGoW5nIMSQw7RuZywgUGjDuiBRdeG7kWMsIHThu4luaCBLacOqbiBHaWFuZywgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1596299470582!5m2!1svi!2s"
                        width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""
                        aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
            <div class="row policies">
                <div class="col-12">
                    <h1>Policies</h1>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-3 check">
                            <h4>Check in</h4>
                            <p>14:00</p>
                        </div>
                        <div class="col-3 check" style="margin-left: 20px;margin-right: 20px">
                            <h4>Check out</h4>
                            <p>12:00</p>
                        </div>
                        <div class="col-5 payment-box">
                            <h4>Cancellation/prepayment</h4>
                            <p>Policies vary by room type and provider.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 detail-policies">
                    <div class="row">
                        <h2>Amenities</h2>
                    </div>
                    <div class="row">
                        <div class="col-6 left-detail">
                            <p>Free Wi-Fi</p>
                            <p>Car rental</p>
                            <p>Concierge service</p>
                            <p>Room service</p>
                            <p>Fishing</p>
                            <p>Hairdryer</p>
                            <p>24hr front desk</p>
                            <p>Airport shuttle (surcharge)</p>
                            <p>Designated smoking area</p>
                            <p>Non-smoking rooms available</p>
                            <p>Accessible parking</p>
                            <p>Elevator</p>
                            <p>Bathtub</p>
                            <p>Bottle of water</p>
                            <p>Clothes rack</p>
                            <p>Family rooms</p>
                            <p>Flat-screen TV</p>
                            <p>Interconnected room(s) available</p>
                            <p>Mountain view</p>
                            <p>Non-feather pillow</p>
                            <p>Private check-in/check-out</p>
                            <p>Sea view</p>
                            <p>Shampoo</p>
                            <p>Shower cap</p>
                            <p>Smoke alarm</p>
                            <p>Socket near the bed</p>
                            <p>Sofa bed</p>
                        </div>
                        <div class="col-6 right-detail">
                            <p>Street parking</p>
                            <p>Toilet</p>
                            <p>Toothbrush</p>
                            <p>Trash cans</p>
                            <p>Upper floors accessible by elevator</p>
                            <p>Walk-in shower</p>
                            <p>Window</p>
                            <p>Daily housekeeping</p>
                            <p>Ironing service</p>
                            <p>Tour desk</p>
                            <p>Diving</p>
                            <p>Ticket service</p>
                            <p>CCTV outside property</p>
                            <p>Safe</p>
                            <p>Disabled Access</p>
                            <p>Internet</p>
                            <p>Sauna</p>
                            <p>Towels</p>
                            <p>Slippers</p>
                            <p>Non-feather pillow</p>
                            <p>City view</p>
                            <p>Desk</p>
                            <p>Entire unit wheelchair accessible</p>
                            <p>Key card access</p>
                            <p>Newspapers</p>
                            <p>Safety deposit box</p>
                            <p>Air-conditioned</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
@endsection
@section('script')
    <script>
        $(document).ready(function (){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('.add-card').click(function (){
                var roomId = $(this).attr('data-id');
                var startTime = url.searchParams.get("start");
                var endTime = url.searchParams.get("end");
                if (startTime === null || startTime.length == 0 || endTime === null || endTime.length == 0){
                    alert('Vui lòng nhập ngày bắt đầu và kết thúc để đặt phòng');
                    return;
                }
                var arrayStartDate = startTime.split('-');
                var startDate = new Date(arrayStartDate[0],arrayStartDate[1],arrayStartDate[2]);
                var arrayEndDate = endTime.split('-');
                var endDate = new Date(arrayEndDate[0],arrayEndDate[1],arrayEndDate[2]);
                var oneDay = 24 * 60 * 60 * 1000;
                var dateNumber = Math.round(Math.abs((startDate - endDate) / oneDay));
                $.ajax({
                    'url': '/add',
                    'method' : 'GET',
                    'data' : {
                        "roomId" : roomId,
                        "startTime" : startTime,
                        "endTime" : endTime,
                        "dateNumber" : dateNumber
                    },
                    'success' :function (){
                        $.toast({
                            text : ["<div style='font-weight: bold;font-size:13px'>Đã thêm phòng vào danh sách đặt!</div>"],
                            showHideTransition : 'slide',  // It can be plain, fade or slide
                            hideAfter : 1000,
                            bgColor : '#00bfff',              // Background color for toast
                            textColor : 'white',
                            position : 'bottom-right'
                        })
                        setTimeout(function (){
                            location.reload();
                        },1000)
                    },
                    'error': function () {
                        alert('Thêm mới thất bại xin vui lòng thực hiện lại hoặc tải lại trang web');
                    }
                })
            })
        })
    </script>
    <script src="{{asset('js/daterangepicker/daterangepicker-user.js')}}"></script>
@endsection
