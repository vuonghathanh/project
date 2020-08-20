<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon"  href="{{asset('image/logo2.png')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <script src="{{asset('js/jquery-3.5.1.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css"
          integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
          crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"
          integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
          crossorigin="anonymous"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/light-box/lightbox.min.css')}}">
    <script type="text/javascript" src="{{asset('js/light-box/lightbox-plus-jquery.min.js')}}"></script>
    <link href="{{asset('vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">
    @yield('title')
</head>
<body>
<nav>
    <div id="cover"></div>
    @if(\Illuminate\Support\Facades\Session::get('username') == null)
        {{--Header & menu--}}
        <div class="container-fluid">
            <div class="row">
                <nav class=" nav-header col">
                    <div class="row">
                        <div class="menu-logo " id="menu-logo">
                            <div class="row">
                                <div class="logo col-2">
                                    <a href="/"><img src="{{asset('image/logo1.png')}}" width="150px"
                                                     style="margin-top: -20px;margin-left: 60px" alt=""></a>
                                </div>
                                <div class=" menu col-10  " id="navbarSupportedContent">
                                    <ul>
                                        <li>
                                            <a href="/">Trang Chủ</a>
                                        </li>
                                        <li class="nav-item"><a href="/hotels">Đặt phòng</a></li>
                                        <li class="nav-item"><a href="/blogs">Nhật kí</a></li>
                                        <li class="nav-item"><a href="/contact">Liên hệ</a></li>
                                        <li class="nav-item"><a href="/about-us">Về chúng tôi</a></li>
                                        <li class="nav-item"><a href="/q&a">Hỏi & đáp</a></li>
                                        <li class="nav-item"><a href="/policy">Chính sách</a></li>
                                        <li class="nav-item"><a href="/login"></i> Đăng
                                                nhập</a></li>
                                        <li class="nav-item"><a href="/login#signup"></i>Đăng ký</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="nav-header-overlay"></div>
                        <div class="intro-header">
                            <h2>
                                Nếu muốn có một gì nghỉ dưỡng thú vị hãy chọn ...
                            </h2>
                            <h1 class="big-content">
                                Du lịch phú quốc
                            </h1>
                            <p class="small-content">
                                Điểm đến thú vị với nhiều cảnh sắc thiên phong phú và đa dạng với vẻ đẹp tự nhiên toát
                                lên sự tinh khiết về mọi góc nhiền tạo nên một Phú Quốc huyền ảo.
                                <br> Cái đẹp tiềm ẩn giúp du khách muốn đến và khám mọi thứ nơi đây và cảm nhận một bầu
                                không khí trong lành ảm đạm mà thiên nhiên đã ban tặng
                                commodo consequat
                            </p>
                            <div
                                style="border: 1px solid silver;min-height: 100px;background: white;width: 1200px;border-radius: 50px;margin-left: 160px;margin-top: 60px">
                                <div class="row">
                                    <form action="/hotels" method="get" class="col-12">
                                        <div class="row">
                                            <div class="form-group date col-4"
                                                 style="margin-top: 5px;margin-left: 130px">
                                                <label style="color: black;font-size: 15px">Ngày nhận phòng - Ngày trả
                                                    phòng</label>
                                                <input type="text" name="dates" class="form-control"/>
                                                <input type="hidden" name="start">
                                                <input type="hidden" name="end">
                                            </div>
                                            <div class="form-group col-4" style="margin-top: 5px;margin-left: 25px">
                                                <label style="color: black;font-size: 15px">Số người</label>
                                                <input type="number" name="number_people" class="form-control" min="1"
                                                       placeholder="Nhập số người ">
                                            </div>
                                            <div class="form-group col-3" style="margin-top: 35px;margin-left: -100px">
                                                <button type="submit" class="btn btn-warning" style="width: 70px">
                                                    Tìm
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        {{--End header & menu--}}
</nav>
@yield('content')
{{-- Start request email --}}
<nav>
    <div class="container-fluid request-email">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-3">

                    </div>
                    <div class="col-6">
                        <a href="/create-blog">
                            <button class="btn btn-primary" type="button"
                                    style="font-size: 25px;border-radius: 20px;margin-top: 75px">
                                Click vào đây nếu bạn muốn đăng thông tin về Phú Quốc.
                            </button>
                        </a>
                    </div>
                    <div class="col-3">

                    </div>
                </div>
            </div>

        </div>
    </div>
</nav>
{{-- End request email--}}

{{-- Start footer --}}
<nav class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-3" style="padding-left: 100px">
                <img src="{{asset('image/logo1.png')}}" width="150px" alt="">
                <span>
                   <br>
                    <br>
                    Công ty du lịch: Lượn Lờ Phú Quốc
                    <br>
                    Trụ sở chính: Số 8, Tôn Thất Thuyết, Mỹ Đình, Hà Nội.
                    <br>
                    Mã số kinh doanh: 0129131231
                    <br>
                    Đại diện: Supper Star Team
                    <br>
                    Điện Thoại: 098.777.033
                    <br>
                    Email: LuonLoPhuQuoc@gmail.com
                    <br><br>
                    <a href="#"><i class="fab fa-skype" style="font-size: 20px"></i></a>
                    <a href="#"><i class="fab fa-facebook-square" style="font-size: 20px"></i></a>
                    <a href="#"><i class="fas fa-envelope-square" style="font-size: 20px"></i></a>
                </span>
            </div>
            <div class="col-6 padding-footer">
                <div class="row">
                    <div class="col-6">
                       <span>
                            Chi Nhánh TP.HCM:
                            <br>
                            <br>
                            Đại Diện: Supper Star Team
                            <br>
                            Địa Chỉ:số 333, Quận 1, TP.HCM
                            <br>
                            Điện Thoại: 098.777.088
                            <br>
                            Email: LuonLoPhuQuoc@gmail.com
                            <br>
                        </span>
                    </div>
                    <div class="col-6">
                        <span>
                            Chi Nhánh Đà Nẵng:
                            <br>
                            <br>
                            Đại Diện: Supper Star Team
                            <br>
                            Địa Chỉ:số 324, đường Trần Bình, Đà Nẵng
                            <br>
                            Điện Thoại: 098.777.066
                            <br>
                            Email: LuonLoPhuQuoc@gmail.com
                            <br>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8441.20308316047!2d105.77738200386956!3d21.02854408835086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454b3260b1a8b%3A0x862052392e3f478e!2zOCBUw7RuIFRo4bqldCBUaHV54bq_dCwgTeG7uSDEkMOsbmgsIFThu6sgTGnDqm0sIEjDoCBO4buZaSAxMDAwMCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1595773299548!5m2!1svi!2s"
                    width="365px" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
            </div>
        </div>
    </div>
</nav>
{{-- End footer --}}
@else
    {{--Header & menu--}}
    <div class="container-fluid">
        <div class="row">
            <nav class=" nav-header col">
                <div class="row">
                    <div class="menu-logo " id="menu-logo">
                        <div class="row">
                            <div class="logo col-2">
                                <a href="/"><img src="{{asset('image/logo1.png')}}" width="150px"
                                                 style="margin-top: -20px" alt=""></a>
                            </div>
                            <div class=" menu col-10" id="navbarSupportedContent">
                                <ul>
                                    <li>
                                        <a href="/">Trang Chủ</a>
                                    </li>
                                    <li class="nav-item"><a href="/hotels">Đặt phòng</a></li>
                                    <li class="nav-item"><a href="/blogs">Nhật kí</a></li>
                                    <li class="nav-item"><a href="/contact">Liên hệ</a></li>
                                    <li class="nav-item"><a href="/about-us">Về chúng tôi</a></li>
                                    <li class="nav-item"><a href="/q&a">Hỏi & đáp</a></li>
                                    <li class="nav-item"><a href="/policy">Chính sách</a></li>
                                    <li class="nav-item">
                                       <i class="fas fa-user-circle" data-toggle="dropdown"></i>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd1">
                                            <a class="dropdown-item" href="/logout-user" style="color: black">Logout</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="nav-header-overlay"></div>
                    <div class="intro-header">
                        <h2>
                            Discover everything in ...
                        </h2>
                        <h1 class="big-content">
                            Phu Quoc Travel
                        </h1>
                        <p class="small-content">
                            Điểm đến thú vị với nhiều cảnh sắc thiên phong phú và đa dạng với vẻ đẹp tự nhiên toát lên
                            sự tinh khiết về mọi góc nhiền tạo nên một Phú Quốc huyền ảo.
                            <br> Cái đẹp tiềm ẩn giúp du khách muốn đến và khám mọi thứ nơi đây và cảm nhận một bầu
                            không khí trong lành ảm đạm mà thiên nhiên đã ban tặng
                            commodo consequat
                        </p>
                        <div
                            style="border: 1px solid silver;min-height: 100px;background: white;width: 1200px;border-radius: 50px;margin-left: 160px;margin-top: 60px">
                            <div class="row">
                                <form action="/hotels" method="get" class="col-12">
                                    <div class="row">
                                        <div class="form-group date col-4" style="margin-top: 5px;margin-left: 130px">
                                            <label style="color: black;font-size: 15px">Ngày nhận phòng - Ngày trả
                                                phòng</label>
                                            <input type="text" name="dates" class="form-control"/>
                                            <input type="hidden" name="start">
                                            <input type="hidden" name="end">
                                        </div>
                                        <div class="form-group col-4" style="margin-top: 5px;margin-left: 25px">
                                            <label style="color: black;font-size: 15px">Số người</label>
                                            <input type="number" name="number_people" class="form-control" min="1"
                                                   placeholder="Nhập số người ">
                                        </div>
                                        <div class="form-group col-3" style="margin-top: 35px;margin-left: -100px">
                                            <button type="submit" class="btn btn-warning" style="width: 70px">
                                                Tìm
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    {{--End header & menu--}}
    </nav>
    @yield('content')
    {{-- Start request email --}}
    <nav>
        <div class="container-fluid request-email">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-3">

                        </div>
                        <div class="col-6">
                            <a href="/create-blog">
                                <button class="btn btn-primary" type="button"
                                        style="font-size: 25px;border-radius: 20px;margin-top: 75px">
                                    Click vào đây nếu bạn muốn đăng thông tin về Phú Quốc.
                                </button>
                            </a>
                        </div>
                        <div class="col-3">

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </nav>
    {{-- End request email--}}

    {{-- Start footer --}}
    <nav class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-3" style="padding-left: 100px">
                    <img src="{{asset('image/logo1.png')}}" width="150px" alt="">
                    <span>
                   <br>
                    <br>
                    Công ty du lịch: Lượn Lờ Phú Quốc
                    <br>
                    Trụ sở chính: Số 8, Tôn Thất Thuyết, Mỹ Đình, Hà Nội.
                    <br>
                    Mã số kinh doanh: 0129131231
                    <br>
                    Đại diện: Supper Star Team
                    <br>
                    Điện Thoại: 098.777.033
                    <br>
                    Email: LuonLoPhuQuoc@gmail.com
                    <br><br>
                    <a href="#"><i class="fab fa-skype" style="font-size: 20px"></i></a>
                    <a href="#"><i class="fab fa-facebook-square" style="font-size: 20px"></i></a>
                    <a href="#"><i class="fas fa-envelope-square" style="font-size: 20px"></i></a>
                </span>
                </div>
                <div class="col-6 padding-footer">
                    <div class="row">
                        <div class="col-6">
                       <span>
                            Chi Nhánh TP.HCM:
                            <br>
                            <br>
                            Đại Diện: Supper Star Team
                            <br>
                            Địa Chỉ:số 333, Quận 1, TP.HCM
                            <br>
                            Điện Thoại: 098.777.088
                            <br>
                            Email: LuonLoPhuQuoc@gmail.com
                            <br>
                        </span>
                        </div>
                        <div class="col-6">
                        <span>
                            Chi Nhánh Đà Nẵng:
                            <br>
                            <br>
                            Đại Diện: Supper Star Team
                            <br>
                            Địa Chỉ:số 324, đường Trần Bình, Đà Nẵng
                            <br>
                            Điện Thoại: 098.777.066
                            <br>
                            Email: LuonLoPhuQuoc@gmail.com
                            <br>
                        </span>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8441.20308316047!2d105.77738200386956!3d21.02854408835086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454b3260b1a8b%3A0x862052392e3f478e!2zOCBUw7RuIFRo4bqldCBUaHV54bq_dCwgTeG7uSDEkMOsbmgsIFThu6sgTGnDqm0sIEjDoCBO4buZaSAxMDAwMCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1595773299548!5m2!1svi!2s"
                        width="365px" height="100%" frameborder="0" style="border:0;" allowfullscreen=""
                        aria-hidden="false"
                        tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </nav>
    {{-- End footer --}}
@endif


<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"
        integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A=="
        crossorigin="anonymous"></script>
<script src="{{asset('vendors/moment/min/moment.min.js')}}"></script>
<script src="{{asset('vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<script src="{{asset('js/style.js')}}"></script>
<script src="{{asset('js/daterangepicker/daterangepicker-user.js')}}"></script>
</body>
</html>
