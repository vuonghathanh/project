<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="shortcut icon"  href="{{asset('image/logo2.png')}}">
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
<nav>
    {{--Header & menu--}}
    <div class="container-fluid">
        <div class="row">
            <nav class=" nav-header col">
                <div class="row">
                    <div class="menu-logo " id="menu-logo">
                        <div class="row">
                            <div class="logo col-3">
                                <a href="/"><img src="{{asset('image/logo1.png')}}" width="150px" style="margin-top: -20px" alt=""></a>
                            </div>
                            <div class=" menu col-9  " id="navbarSupportedContent">
                                <ul>
                                    <li>
                                        <a href="/">Home</a>
                                    </li>
                                    <li class="nav-item"><a href="/hotels">Booking Hotel</a></li>
                                    <li class="nav-item"><a href="#">About</a></li>
                                    <li class="nav-item"><a href="/contact">Contact-Us</a></li>
                                    <li class="nav-item"><a href="#">Blog</a></li>
                                    <li class="nav-item"><a href="#">Q&A</a></li>
                                    <li class="nav-item"><a href="#"> <i class="fas fa-sign-in-alt"></i> Login</a></li>
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
            <div class="col-12" style="font-size: 30px">
                Sign up and we will send you the best deals
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-3"></div>
                    <form action="#" class="col-6 form-inline setting-form">
                        <div class="form-group">
                            <input type="email" required class="form-control none-border-radius size-form">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary none-border-radius">Sign in</button>
                        </div>
                    </form>
                    <div class="col-3"></div>
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
            <div class="col-3 padding-footer">
                <img src="https://colorlib.com/preview/theme/adventure/img/logo.png" alt="">
                <span>
                    <br>
                    <br>
                    Limited company: ....
                    <br>
                    Address: Number 8, Ton That Thuyet, My Dinh, Ha Noi.
                    <br>
                    Business code: 0129131231
                    <br>
                    Legal representation: Vuong Ha Thanh
                    <br>
                    Position: Leader
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
                            Lorem ipsum dolor sit amet:
                            <br>
                            <br>
                            Consectetur adipiscing elit.
                            <br>
                             Duis aute irure dolor in reprehenderit in voluptate velit esse.
                            <br>
                            Sed ut perspiciatis unde.
                            <br>
                            Sunt in culpa qui officia.
                        </span>
                    </div>
                    <div class="col-6">
                        <span>
                            Lorem ipsum dolor sit amet
                            <br><br>
                            Quis nostrud exercitation ullamco labori.
                            <br>
                            Sunt in culpa qui officia deserunt mollit anim id est laborum.
                            <br>
                            Excepteur sint occaecat cupidatat non proident
                            <br>
                            Ut enim ad minim veniam.
                            <br>
                            Quis autem vel eum iure reprehenderit qui in ea voluptate.
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"
        integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A=="
        crossorigin="anonymous"></script>
<script src="{{asset('vendors/moment/min/moment.min.js')}}"></script>
<script src="{{asset('vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<script src="https://widget.cloudinary.com/v2.0/global/all.js" type="text/javascript"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/20.0.0/classic/ckeditor.js"></script>

<script src="{{asset('js/style-detail.js')}}"></script>
<script src="{{asset('js/toast/jquery.toast.min.js')}}"></script>
@yield('script')
</body>
</html>
