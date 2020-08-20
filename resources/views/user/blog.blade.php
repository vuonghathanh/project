@extends('layout.detail-hotel-layout')
@section('content')
    <link rel="stylesheet" href="{{asset('css/blog.css')}}">
    <nav style="min-height: 1400px;margin-top: 150px">
        <div class="container content">
            <div>
                <p class="content_while">Nhật Kí Phú Quốc</p>
                <p>Du lịch Phú Quốc là một thiên đường của nét đẹp với nhiều   tinh túy tạo nên một cảnh quan thiên nhiên phong phú và đa dạng.</p>
            </div>
            <div class="col-12">
                <div class="row" style="margin-top: 30px;margin-bottom: 30px">
                    @foreach($blogs as $blog)
                        <div class="row new-blog">
                            <div class="col-5 img-new-blog" >
                                <a href="/blog/{{$blog->id}}">
                                    <img src="{{$blog->large_photo}}" width="400px" height="266px" salt="">
                                </a>
                            </div>
                            <div class="col-7 text-new-blog" >
                                <a href="/blog/{{$blog->id}}"><h3 style="margin-top: 15px">{{$blog->title}}</h3></a>
                                <p>{{$blog->description}}</p>
                            </div>
                        </div>
{{--                        <a href="/blog/{{$blog->id}}">--}}
{{--                            <div class="col-md-6">--}}
{{--                                <div class="bl-og">--}}
{{--                                    <img src="{{$blog->large_photo}}" alt="">--}}
{{--                                    <div class="og-text">--}}
{{--                                        <h4 style="font-size: 20px;font-family: sans-serif;margin-bottom: 140px">{{$blog->title}}</h4>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </a>--}}
                    @endforeach
                </div>

            </div>
        </div>
    </nav>
@endsection
