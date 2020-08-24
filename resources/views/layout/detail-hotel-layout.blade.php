<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <link rel="shortcut icon" href="{{asset('image/logo2.png')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <script src="{{asset('js/jquery-3.5.1.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css"
          integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
          crossorigin="anonymous"/>
    <link rel="stylesheet" href="{{asset('css/details-hotels.css')}}">
    <link rel="stylesheet" href="{{asset('css/toast/jquery.toast.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"
          integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
          crossorigin="anonymous"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/light-box/lightbox.min.css')}}">
    <script type="text/javascript" src="{{asset('js/light-box/lightbox-plus-jquery.min.js')}}"></script>
    <link href="{{asset('vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">
    @yield('title')
</head>
<body>
<div id="cover"></div>
<nav>
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
                                    <li class="nav-item">
                                        <i data-toggle="dropdown" style="color: white;" class="fas fa-user-circle"></i>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd1">
                                            <a class="dropdown-item" href="/logout-user" style="color: black">Logout</a>
                                        </div>
                                    </li>
                                </ul>
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
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/5f3fc89e1e7ade5df442d02f/default';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
@endif
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"
        integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A=="
        crossorigin="anonymous"></script>
<script src="{{asset('vendors/moment/min/moment.min.js')}}"></script>
<script src="{{asset('vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<script src="https://widget.cloudinary.com/v2.0/global/all.js" type="text/javascript"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/20.0.0/classic/ckeditor.js"></script>

<script src="{{asset('js/toast/jquery.toast.min.js')}}"></script>
@yield('script')
<script src="{{asset('js/style-detail.js')}}"></script>

</body>
</html>
