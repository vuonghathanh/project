@extends('layout.detail-hotel-layout')
@section('title')
    <title>Payment</title>

@endsection
@section('content')
    <link rel="stylesheet" href="{{asset('css/payment.css')}}">
    <div class="container" style="min-height: 700px;margin-top: 150px">
        <div class="row" style="border: 1px solid silver">
            <div class="col-9 infor-checkout">
                <h1 class="title-checkout">Thông tin thanh toán</h1>
                <div class="content-checkout">
                    <div>
                        <span class="text-checkout">Tổng số tiền: </span>
                        <span>{{$booking->price_format}}</span>
                    </div>
                </div>
                <div class="content-checkout">
                    <div>
                        <span class="text-checkout">Số tiền cần thanh toán: </span>
                        <span>{{\App\Utility::formatMoney($booking->total_price/2)}}</span>
                    </div>
                </div>
                <div class="content-checkout">
                    <div>
                        <span class="text-checkout">Email nhận thông tin: </span>
                        <span>{{$booking->email}}</span>
                    </div>
                </div>
                <div class="content-checkout">
                    <div>
                        <span class="text-checkout">Thông tin phòng đã đặt</span>
                    </div>
                </div>
                <div style="min-height: 50px;width:100%;background: aliceblue;margin-top: 30px">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Khách sạn</th>
                            <th scope="col">Loại phòng</th>
                            <th scope="col">Gía tiền</th>
                            <th scope="col">Ngày bắt đầu</th>
                            <th scope="col">Ngày kết thúc</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($booking->booking_details as $details)
                            <tr>
                                <td>{{$details->room->hotel->name}}</td>
                                <td>{{$details->room->type->type}}</td>
                                <td>{{$details->room->price_format}}</td>
                                <td>{{$details->start_with}}</td>
                                <td>{{$details->end_with}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="col-3" style="width: 100%;min-height: 500px;text-align: center">
                <div>
                    <h1 style="font-family: sans-serif, Verdana;font-size: 25px;padding-top: 30px">Phương Thức thanh
                        toán</h1>
                </div>

                <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" style="padding-top: 250px">
                    <input type="hidden" name="cmd" value="_xclick">
                    <input type="hidden" name="business" value="sb-7nzet2907842@business.example.com">
                    <input type="hidden" name="item_name" value="Booking Hotel">
                    <input type="hidden" name="item_number" value="{{$booking->id}}">
                    <input type="hidden" name="amount" value="{{$booking->total_price/2/23060}}">
                    <input type="hidden" name="tax" value="0">
                    <input type="hidden" name="quantity" value="1">
                    <input type="hidden" name="currency_code" value="USD">

                    <!-- Enable override of buyers's address stored with PayPal . -->
                    <input type="hidden" name="address_override" value="1">
                    <!-- Set variables that override the address stored with PayPal. -->
                    <input type="hidden" name="first_name" value="{{$booking->first_name}}">
                    <input type="hidden" name="last_name" value="{{$booking->last_name}}">
                    <input type="hidden" name="address1" value="345 Lark Ave">
                    <input type="hidden" name="city" value="San Jose">
                    <input type="hidden" name="state" value="CA">
                    <input type="hidden" name="zip" value="95121">
                    <input type="hidden" name="country" value="Ha Noi">
                    <input type="image" name="submit"
                           src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                           alt="PayPal - The safer, easier way to pay online">
                </form>
                <div style="padding-bottom: 10px;padding-top: 10px">
                    <a href="/banking-success">
                        <button type="button" class="btn btn-primary"
                                style="width: 90%;height: 50px;font-weight: bold;">Chuyển khoản
                        </button>
                    </a>
                </div>
                <!-- PayPal Logo -->
                <table border='0' cellpadding='10' cellspacing='0' align='center'>
                    <tr>
                        <td align='center'></td>
                    </tr>
                    <tr>
                        <td align='center'><a href='https://www.paypal.com/vn/webapps/mpp/paypal-popup'
                                              title='How PayPal Works'
                                              onclick="javascript:window.open('https://www.paypal.com/vn/webapps/mpp/paypal-popup','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); return false;"><img
                                    src='https://www.paypalobjects.com/webstatic/en_US/i/buttons/checkout-logo-large.png'
                                    alt='Checkout with PayPal | Large'/></a></td>
                    </tr>
                </table><!-- PayPal Logo -->
                <!-- PayPal Logo -->
                <table border='0' cellpadding='10' cellspacing='0' align='center'>
                    <tr>
                        <td align='center'></td>
                    </tr>
                    <tr>
                        <td align='center'><a href='https://www.paypal.com/vn/webapps/mpp/paypal-popup'
                                              title='How PayPal Works'
                                              onclick="javascript:window.open('https://www.paypal.com/vn/webapps/mpp/paypal-popup','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); return false;"><img
                                    src='https://www.paypalobjects.com/webstatic/mktg/logo/PP_AcceptanceMarkTray-NoDiscover_243x40.png'
                                    alt='PayPal acceptance mark Tray | Large'/></a></td>
                    </tr>
                </table><!-- PayPal Logo -->
            </div>
        </div>
    </div>
@endsection
@section('script')
@endsection
