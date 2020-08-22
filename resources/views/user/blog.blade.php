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
                                <a href="/blog/{{$blog->id}}"><h3 style="margin-top: 15px;width: 100%">{{$blog->title}}</h3></a>
                                <p style="width: 100%;height: 70px;overflow: hidden">{{$blog->description}}</p>
                                <p>Ngày đăng: {{$blog->created_at}}</p>
                                <p style="position: absolute;top:200px;right: 30px">{{$blog->author}}</p>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </nav>
@endsection
