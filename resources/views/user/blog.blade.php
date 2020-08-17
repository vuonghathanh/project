@extends('layout.user-layout')
@section('content')
    <link rel="stylesheet" href="{{asset('css/blog.css')}}">
    <nav style="min-height: 1400px">
        <div class="container content">
            <div>
                <p class="content_while">Nhật Kí Phú Quốc</p>
                <p>Du lịch Phú Quốc là một thiên đường của nét đẹp với nhiều   tinh túy tạo nên một cảnh quan thiên nhiên phong phú và đa dạng.</p>
            </div>
            <div class="col-12">
                <div class="row" style="margin-top: 30px;margin-bottom: 30px">
                    @foreach($blogs as $blog)
                        <a href="/blog/{{$blog->id}}">
                            <div class="col-md-6">
                                <div class="bl-og">
                                    <img src="{{$blog->large_photo}}" alt="">
                                    <div class="og-text">
                                        <h4 style="font-size: 20px;font-family: sans-serif;margin-bottom: 140px">{{$blog->title}}</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </nav>
@endsection
