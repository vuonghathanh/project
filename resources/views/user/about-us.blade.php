@extends('layout.user-layout')
@section('content')
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <nav style="min-height: 500px">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="col-12 ab-title" >
                        <h1>Về chúng tôi</h1>
                    </div>
                </div>
                <div class="col-6" style="margin-top: 50px">
                    <div class="row">
                        <h3 class="col-12">Supper Star Team</h3>
                        <p class="col-12">Sự cam kết của mỗi cá nhân trong công việc, là một phần không thể thiếu để tạo ra một đội
                            luôn hiệu quả, giúp nhóm chúng tôi vạch ra kế hoạch làm việc cụ thể. Trong kế hoạch
                            nêu trên cùng với sự giúp đỡ lẫn nhau trong công việc, nó tạo nên một tập thể đoàn kết và
                            cách làm việc thông minh đã giúp nhóm làm việc hiệu quả.</p>
                        <p class="col-12">Dựa trên cách thức làm việc hiệu quả và có đầu tư thời gian đã giúp chúng tôi tạo ra
                            sản phẩm, với tiêu chí giới thiệu đến mọi người những khách sạn và khu vui chơi giải trí tốt nhất. Nhiều nhất
                            địa điểm đẹp ở Phú Quốc. Nó giúp mọi người lựa chọn và sử dụng dịch vụ tốt nhất về biệt thự
                            và resorts.</p>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-12" style="margin-top: 50px ">
                            <img
                                src="https://res.cloudinary.com/huydeptrai/image/upload/v1596425827/about-us_e1f2jt.jpg"
                                width="102%" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row tt" style="margin-top: 130px">
                <div class="col-4">
                    <div class="single-team">
                        <img src="https://res.cloudinary.com/huydeptrai/image/upload/v1596431619/icon1_kkeo9n.jpg"
                             alt="">
                        <div class="team-text">
                            <h4>Leader:Vuong Ha Thanh</h4>
                            <p>Student: FPT Aptech</p>
                        </div>
                    </div>
                    <br>
                    <h6>Thông tin cá nhân:</h6>
                    <p><span>Nhóm trưởng: </span>Là người đưa ra các quan điểm và thông qua các ý kiến của các thành viên.Từ đó tóm tắt lại và đưa ra việc làm cụ thể cho cả nhóm.</p>
                    <p><span>Tính cách: </span> nhanh nhẹn, lanh lợi, hòa đồng, tích cực giúp đỡ bạn bè.</p>
                    <p><span>Kỹ năng: </span> sử dụng thành thạo nhiều ngôn ngữ lập trình và có thể ứng dụng vào công việc thể hiện rõ nhất là ở dự án mô phỏng về website qua việc book phòng.<r/p>
                </div>
                <div class="col-4">
                    <div class="single-team">
                        <img src="https://res.cloudinary.com/huydeptrai/image/upload/v1597291323/add_kmj5jc.jpg" alt="">
                        <div class="team-text">
                            <h4>Member:Hoang Xuan Huy</h4>
                            <p>Student: FPT Aptech</p>
                        </div>
                    </div>
                    <br>
                    <h6>Thông tin cá nhân:</h6>
                    <p><span>Thành viên: </span> đóng góp ý kiến về việc làm trong tuần hoặc nhiệm vụ tuần tới và hoàn thành các nhiệm được giao trong tuần không được chậm làm ảnh hưởng đến các thành viên khác.</p>
                    <p><span>Tính cách: </span> nhanh nhẹn, lanh lợi, hoạt bát,tích cực giúp đỡ bạn bè.</p>
                    <p><span>Kỹ năng: </span> sử dụng được một số ngôn ngữ lập trình và có thể áp dụng vào công việc thể hiện rõ nhất là ở dự án mô phỏng về website qua việc book phòng. </p>
                </div>
                <div class="col-4">
                    <div class="single-team">
                        <img src="https://res.cloudinary.com/huydeptrai/image/upload/v1596431670/icon3_d80fn1.jpg"
                             alt="">
                        <div class="team-text">
                            <h4>Member:Tran Thu Trang</h4>
                            <p>Student: FPT Aptech</p>
                        </div>
                    </div>
                    <br>
                    <h6>Thông tin cá nhân:</h6>
                    <p><span>Thành viên: </span> đóng góp ý kiến về việc làm trong tuần hoặc nhiệm vụ tuần tới và hoàn thành các nhiệm được giao trong tuần không được chậm làm ảnh hưởng đến các thành viên khác.</p>
                    <p><span>Tính cách: </span> nhanh nhẹn, lanh lợi, hoạt bát,tích cực giúp đỡ bạn bè.</p>
                    <p><span>Kỹ năng: </span> sử dụng được một số ngôn ngữ lập trình và có thể áp dụng vào công việc thể hiện rõ nhất là ở dự án mô phỏng về website qua việc book phòng. </p>
                </div>
            </div>
            <div class="achievements">
                <h1 class="content_while">Thành Tựu</h1>
                <div>
                    <p>Qua quá trình làm việc với sự tích cực và phân chia công việc nhóm chúng tôi đã đạt được kết quả như ý muốn.Là việc tạo ra 1 website nhằm phục vụ nhu cầu của người tiêu dùng về việc đâu là địa điểm mà mình nên đặt chân đến ở Phú Quốc.Với quy mô và kết cấu liên kết giữa các khách sạn, các căn villa,ressort và các điểm vui chơi giải trí nhằm phục vụ nhu cầu của mọi người khi đến Phú Quốc nghỉ dưỡng sau những thời gian làm việc.Nơi đây cùng là điiểm đến lí tưởng cho các cặp đôi muốn sở hữu bộ ảnh cưới đẹp nên thơ hay nhưng cặp vợ chồng mới cưới tận hưởng cảm giác tuần trang mật.Thông qua điều đó việc tiếp cận của mọi người đối với website ngày một hoàn thiện hơn, qua đó mọi người đóng góp giúp chúng tôi ngày một hoàn thiện dịch vụ hơn.</p>
                </div>
            </div>
        </div>
    </nav>
@endsection
