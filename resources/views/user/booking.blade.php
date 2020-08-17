@extends('layout.detail-hotel-layout')
@section('title')
    <title>Chi tiết đơn hàng</title>
@endsection
@section('content')
    @if($bookingCart == null || !$bookingCart)
        <link rel="stylesheet" href="{{asset('css/booking.css')}}">
        <nav style="min-height: 1200px">
            <div class="container">
                <div class="row">
                    <div class="col-3">
                        <div class="row">
                            <div class="col-12 booking-detail">
                                <div class="tile-detail">
                                    <h6>Chi tiết đặt phòng</h6>
                                </div>
                                <div class="check-in-out">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="check-in after">
                                                <p class="check-check">Ngày bắt đầu</p>
                                                <h4></h4>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="check-in">
                                                <p class="check-check">Ngày kết thúc</p>
                                                <h4></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row length-stay">
                                        <div class="col-12 content-length-stay">
                                            <h2>Tổng thời gian lưu trú: </h2>
                                        </div>
                                        <div class="col-12 number-length-stay">
                                            <p> </p>
                                            <a href="/hotels" style="font-size: 14px;text-decoration: none;margin-top: -10px">Thay đổi lựa chọn của bạn?</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="selected-room">
                                    <div class="row">
                                        <div class="col-12">
                                            <h6 style="margin-top: 10px">Bạn đã đặt: </h6>
                                        </div>

                                            <div class="col-8">
                                                <p></p>
                                            </div>
                                            <div class="col-4">

                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 price-summary">
                                <div class="title-detail-price">
                                    <h6>Tổng giá của bạn</h6>
                                </div>
                                <div class="content-price row">
                                    <div class="name-content col-6">

                                    </div>
                                    <div class="price-content col-6">

                                    </div>
                                </div>

                                <div class="total-price row">
                                    <div class="col-4">
                                        <h6>Tổng tiền</h6>
                                    </div>
                                    <div class="col-8">
                                        <p> VND</p>
                                    </div>
                                    <div class="col-12">
                                        <p>Đã bao gồm 10% thuế GTGT</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 payment">
                                <div class="title-payment">
                                    <h6>Lịch thanh toán</h6>
                                </div>
                                <div>
                                    <p>Không thanh toán vào bay giờ, bạn sẽ trả tiền khi rời khỏi khách sạn.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 payment">
                                <div class="title-cancel">
                                    <h6>Chi phí nếu bạn hủy lịch</h6>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <p>Nếu hủy bạn sẽ phải trả</p>
                                    </div>
                                    <div class="col-6" style="color: red">
                                        <p> VND</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-8 details-if">
                        <div class="row">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-4">
                                        <img src=""
                                             width="100%" alt="">
                                    </div>
                                    <div class="col-12  ">
                                        <div class="row">
                                            <div class="name-hotel col-12">
                                                <h2>Không có phòng nào được đặt trước</h2>
                                            </div>
                                            <div class="star col-12">
                                                <div class="hl-star">
                                                <span>

                                                </span>
                                                </div>
                                            </div>
                                            <div class="address col-12">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 title-right">
                                        <div class="content-title">
                                        <span>
                                            <i class="far fa-check-circle"></i>
                                            Không cần đặt cọc để đảm bảo. Bạn sẽ trả tiền trong thời gian lưu trú.
                                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    @else
        <link rel="stylesheet" href="{{asset('css/booking.css')}}">
        @php
            $totalMoney = 0;
            $getKey = reset($bookingCart);
        @endphp
        <nav style="min-height: 1200px">
            <div class="container">
                <div class="row">
                    <div class="col-3">
                        <div class="row">
                            <div class="col-12 booking-detail">
                                <div class="tile-detail">
                                    <h6>Chi tiết đặt phòng</h6>
                                </div>
                                <div class="check-in-out">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="check-in after">
                                                <p class="check-check">Ngày bắt đầu</p>
                                                <h4>{{$getKey['startTime']}}</h4>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="check-in">
                                                <p class="check-check">Ngày kết thúc</p>
                                                <h4>{{$getKey['endTime']}}</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row length-stay">
                                        <div class="col-12 content-length-stay">
                                            <h2>Tổng thời gian lưu trú: </h2>
                                        </div>
                                        <div class="col-12 number-length-stay">
                                            <p>{{$getKey['dateNumber']}} đêm </p>
                                            <a href="javascript:void(0)" id="change" style="font-size: 14px;text-decoration: none;margin-top: -10px">Thay đổi lựa chọn của bạn?</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="selected-room">
                                    <div class="row">
                                        <div class="col-12">
                                            <h6>Bạn đã đặt: </h6>
                                        </div>
                                        @foreach($bookingCart as $key => $bookingRoom)
                                            <div class="col-8">
                                                <p>{{$bookingRoom['roomType']}} Room</p>
                                            </div>
                                            <div class="col-4">
                                                <a href="javascript:void(0)" style="color: red;text-decoration: none;font-size: 13px"class="remove-item" data-id="{{$bookingRoom['roomId']}}">Remove</a>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 price-summary">
                                <div class="title-detail-price">
                                    <h6>Tổng giá của bạn</h6>
                                </div>
                                <div class="content-price row">
                                    <div class="name-content col-6">
                                        @foreach($bookingCart as $key => $bookingRoom)
                                            <p>{{$bookingRoom['roomType']}}</p>
                                        @endforeach
                                    </div>
                                    <div class="price-content col-6">
                                        @foreach($bookingCart as $key => $bookingRoom)
                                            <p>{{\App\Utility::formatMoney($bookingRoom['roomPrice'] * $bookingRoom['dateNumber'])}}</p>
                                        @endforeach
                                    </div>
                                </div>
                                @php
                                    foreach ($bookingCart as $key => $bookingRoom){
                                        $totalMoney += $bookingRoom['roomPrice'] * $bookingRoom['dateNumber'] ;
                                    }
                                @endphp
                                <div class="total-price row">
                                    <div class="col-5">
                                        <h6>Tổng tiền</h6>
                                    </div>
                                    <div class="col-7">
                                        <span class="money">{{\App\Utility::formatMoney($totalMoney)}} </span>
                                    </div>
                                    <div class="col-12">
                                        <br>
                                        <p>Đã bao gồm 10% thuế GTGT</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 payment">
                                <div class="title-payment">
                                    <h6>Lịch thanh toán</h6>
                                </div>
                                <div>
                                    <p>Không thanh toán vào bay giờ, bạn sẽ trả tiền khi rời khỏi khách sạn.</p>
                                </div>
                            </div>
                        </div>
                        @php
                            $cancel = $totalMoney/2;
                        @endphp
                        <div class="row">
                            <div class="col-12 payment">
                                <div class="title-cancel">
                                    <h6>Chi phí nếu bạn hủy lịch</h6>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <p>Nếu hủy bạn sẽ phải trả</p>
                                    </div>
                                    <div class="col-6" style="color: red">
                                        <span class="money">{{\App\Utility::formatMoney($cancel)}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-8 details-if">
                        <form action="/submit" id="check-out-form" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-4">
                                            <img src="{{$getKey['hotelPhoto']}}"
                                                 width="100%" alt="">
                                        </div>
                                        <div class="col-8">
                                            <div class="row">
                                                <div class="name-hotel col-12">
                                                    <h2>{{$getKey['hotelName']}}</h2>
                                                </div>
                                                <div class="star col-12">
                                                    <div class="hl-star">
                                                    <span>
                                                        @for($i=0;$i<$getKey['hotelStar'];$i++)
                                                            <i class="fas fa-star size-color-icon"></i>
                                                        @endfor
                                                    </span>
                                                    </div>
                                                </div>
                                                <div class="address col-12">
                                                    <span><i class="fas fa-map-marker-alt"></i>{{$getKey['hotelAddress']}}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 title-right">
                                            <div class="content-title">
                                            <span>
                                                <i class="far fa-check-circle"></i>
                                                Không cần đặt cọc để đảm bảo. Bạn sẽ trả tiền trong thời gian lưu trú.
                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 enter-details">
                                            <div class="title-detail-if">
                                                <p>Enter your details</p>
                                            </div>
                                        </div>
                                        <div class="col-12 form-detail-if">
                                            <div class="row form">
                                                <div class="field item form-group col-6">
                                                    <label class="col-form-label col-12 label-align">Họ<span class="required">*</span></label>
                                                    <div class="col-12">
                                                        <input class="form-control" type="text" name="first_name" required/>
                                                    </div>
                                                </div>
                                                <input type="hidden" name="total_price" value="{{$totalMoney}}">
                                                <div class="field item form-group col-md-6">
                                                    <label class="col-form-label col-12 label-align">Tên<span class="required">*</span></label>
                                                    <div class="col-12">
                                                        <input class="form-control" type="text" name="last_name"
                                                               required/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group field item col-6">
                                                    <label class="col-form-label col-12 label-align">Email<span class="required">*</span></label>
                                                    <div class="col-12">
                                                        <input type="email" class="form-control" required name="email">
                                                    </div>
                                                </div>
                                                <div class="form-group field item col-6">
                                                    <p class="cf-email">Confirmation email goes to this address</p>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-12 if-room">
                                                        <h1>Standard Queen Room</h1>
                                                        <div>
                                                        <span>
                                                            <i class="far fa-snowflake"></i> Air conditioning
                                                            <i class="fas fa-shower ml"></i> Ensuite bathroom
                                                            <i class="fas fa-tv ml"></i> Flat-screen TV
                                                            <i class="fas fa-volume-mute ml"></i> Soundproofing
                                                            <i class="fas fa-swimming-pool ml"></i> Swimming
                                                            <i class="fas fa-utensils ml"></i> restaurant
                                                        </span>
                                                        </div>
                                                        <h2>regulations: <span><i class="fas fa-smoking-ban"></i></span></h2>
                                                        <span>
                                                        <h2> Partially refundable: </h2>
                                                        <p>you will be charged 50% of the total price if you cancel your booking.
                                                            If you don't show up you will charged the total price of the reservation.</p>
                                                    </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row btn-booking">
                                <input type="submit" class="btn btn-success" value="Check out">

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </nav>
    @endif
@endsection
@section('script')
    <script>

        $(document).ready(function (){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('.remove-item').click(function (){
                if(confirm('Bạn có chắc chắn muốn bỏ phòng này khỏi danh sách đặt trước?')){
                    $roomId = $(this).attr('data-id');
                    $.ajax({
                        'url': '/remove',
                        'method': 'GET',
                        'data':{
                            'roomId': $roomId,
                        },
                        'success':function (){
                            $.toast({
                                text : ["<div style='font-weight: bold;font-size:13px'>Xóa phòng thành công!</div>"],
                                showHideTransition : 'slide',  // It can be plain, fade or slide
                                hideAfter : 1000,
                                bgColor : 'red',              // Background color for toast
                                textColor : 'white',
                                position : 'bottom-right'
                            })
                            location.reload();
                        },
                        'error':function (){
                            alert('Xóa không thành công! xin vui lòng thực hiện lại hoặc tải lại trang web')
                        }
                    })
                }
            })
            $('#change').click(function (){
                if (confirm('Bạn có chắc chắn muốn thay đổi không? ')){
                    $('#change').attr("href","/change");
                }
            })
        })

    </script>
@endsection
