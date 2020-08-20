<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="{{asset('vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{'vendors/nprogress/nprogress.css'}}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{asset('vendors/animate.css/animate.min.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('build/css/custom.min.css')}}" rel="stylesheet">
</head>
<style>
    *{
        font-family: sans-serif, Verdana !important;
    }
</style>
<body class="login" style="background:white">
<div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>

    <div class="login_wrapper">
           <div class="animate form login_form">
               <section class="login_content">
                   <div>
                       <form method="post" action="/login" >
                           @csrf
                           <h1>Login Form</h1>
                           <div>
                               <input type="text" class="form-control" placeholder="Username" name="username" required="" />
                           </div>
                           <div>
                               <input type="password" class="form-control" placeholder="Password" name="password" required="" />
                           </div>
                           <div>
                               <input type="submit" class="btn btn-default submit" style="margin-left: 130px;color: silver" value="Log in">
                           </div>

                           <div class="clearfix"></div>

                           <div class="separator">
                               <p class="change_link">
                                   <a href="#signup" class="to_register"> Create Account </a>
                               </p>
                               <p class="change_link">
                                   <a href="/" class="to_register"> Trang chủ </a>
                               </p>
                               <div class="clearfix"></div>
                               <br />

                               <div>
                                   <img src="{{asset('image/logo1.png')}}" width="150px" alt="" style="margin-bottom: 20px">
                                   <p>©2020 All Rights Reserved. Lượn Phú Quốc</p>
                               </div>
                           </div>
                       </form>
                   </div>
               </section>
           </div>
       </div>

        <div id="register" class="animate form registration_form">
            <section class="login_content">
                <form method="post" action="/register">
                    @csrf
                    <h1>Create Account</h1>
                    <div>
                        <input type="text" class="form-control" placeholder="Username" name="username" required="" />
                        @if($errors->has('username'))
                            <span class="text-danger">* {{$errors->first('username')}}</span>
                        @endif
                    </div>
                    <div>
                        <input type="password" class="form-control" placeholder="Password" name="password" min="6" max="12" required="" />
                        @if($errors->has('password'))
                            <span class="text-danger">* {{$errors->first('password')}}</span>
                        @endif
                    </div>
                    <div>
                        <input type="text" class="form-control" placeholder="First name" name="first-name" required="" />
                        @if($errors->has('first-name'))
                            <span class="text-danger">* {{$errors->first('first-name')}}</span>
                        @endif
                    </div>
                    <div>
                        <input type="text" class="form-control" placeholder="Last name" name="last-name" required="" />
                        @if($errors->has('last-name'))
                            <span class="text-danger">* {{$errors->first('last-name')}}</span>
                        @endif
                    </div>
                    <div>
                        <input type="text" class="form-control" placeholder="Identity card" name="identity_card" required="" />
                        @if($errors->has('identity_card'))
                            <span class="text-danger">* {{$errors->first('identity_card')}}</span>
                        @endif
                    </div>
                    <div>
                        <input type="email" class="form-control" placeholder="Email" name="email" required="" />
                        @if($errors->has('email'))
                            <span class="text-danger">* {{$errors->first('email')}}</span>
                        @endif
                    </div>
                    <div>
                        <button class="btn btn-default submit" type="submit">Submit</button>
                    </div>

                    <div class="clearfix"></div>

                    <div class="separator">
                        <p class="change_link">Already a member ?
                            <a href="#signin" class="to_register"> Log in </a>
                        </p>

                        <div class="clearfix"></div>
                        <br />

                        <div>
                            <img src="{{asset('image/logo1.png')}}" width="150px" alt="" >
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </div>
</div>
</body>
</html>
