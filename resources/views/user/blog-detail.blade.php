@extends('layout.detail-hotel-layout')
@section('content')
    <link rel="stylesheet" href="{{asset('css/blog.css')}}">
    <nav style="min-height: 1400px">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-8 right-content-detail-blog">
                            <div>
                                <h4 class="title-blog">{{$blog->title}}</h4>
                                <p><span style="color: #2f6ee0">Du lịch Phú Quốc</span> {{$blog->description}}</p>
                                @php
                                    $count = 0;
                                @endphp
                                @for($i = 0; $i < count($blog->large_photos);$i++)
                                    <img src="{{$blog->large_photos[$i]}}" width="100%" height="500px" walt="">

                                    @for($j = $i  ; $j <= $i ;$j++)
                                        <p>{{$blog->small_details[$j]}}</p>
                                    @endfor
                                @endfor
                                <p style="text-align: right;font-weight: bold;font-size: 13px;">{{$blog->author}}</p>
                            </div>
                        </div>
                        <div class="col-4 left-content-detail-blog">
                            <div class="row content-blog-left">
                                <h3 class="title-blog-ab">Du Lịch Phú Quốc</h3>
                                <p>Trực thuộc tỉnh Kiên Giang, <strong>Phú Quốc</strong> được mệnh danh là Đảo Ngọc. Với
                                    những bãi biển nước xanh trong vắt như Bãi Sao và Bãi Dài, Phú Quốc thực sự là thiên
                                    đường cho những người yêu biển. Thị trấn Dương Đông là nơi tập trung dân cư sầm uất
                                    nhất trên đảo Phú Quốc, đặc biệt là khu chợ đêm nằm gần Dinh Cậu. Ngoài ra, làng
                                    chài Hàm Ninh, Gành Dầu và quần đảo An Thới cũng là những địa điểm tham quan không
                                    thể bỏ qua khi du lịch Phú Quốc. Đặc sản của Phú Quốc không chỉ có các loại hải sản
                                    tươi sống mà còn có hồ tiêu Phú Quốc, được trồng dọc theo con đường đất đỏ đi đến
                                    Bắc Đảo, Gành Dầu.
                                    <br>
                                    Cùng <strong>LuonLoPhuQuoc.com</strong> đặt phòng khách sạn khi du lịch Phú Quốc:
                                    Danh sách khách sạn Phú Quốc. </p>
                            </div>
                            <div class="row">
                                <div class="title-blog-ab-bt">
                                    <h2 style="margin-top: 30px">Bài Viết Mới</h2>
                                </div>
                                @foreach($obj as $blog)
                                        <div class="detail-og" style="margin-top: 30px">
                                            <a href="javascript:void(0)"><img
                                                    src="{{$blog->large_photo}}"
                                                    alt=""></a>
                                            <div class="og-title">
                                                <h5 style=""><a href="/blog/{{$blog->id}}" style="color: white;">{{$blog->title}}</a></h5>
                                            </div>
                                        </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
@endsection
