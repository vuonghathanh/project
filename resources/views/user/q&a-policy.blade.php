@extends('layout.user-layout')
@section('content')
    <nav style="min-height: 1400px">
        <div class="container">
            <div class="row">
                <div class="col-12" style="margin-top: 50px">
                    <div class="abc" style="text-align: center">
                        <h1 class="content_while">Chính Sách</h1>
                    </div>
                </div>
                <div class="col-6" style="margin-top: 30px">
                    <div class="row">
                        <h4 class="col-12">Các Chính sách chung trong khách sạn.</h4>
                        <div class="col-12">
                            <div style="width: 100%;height: 50px;border: 1px solid black;text-align: center;border-radius: 5px" type="button" data-toggle="collapse" data-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample" class="butt">
                                <p style="margin-top: 10px">Chính sách đảm bảo</p>
                            </div>
                        </div>
                        <div class="col-12" style="margin-top: 5px">
                            <div class="collapse" id="collapseExample1">
                                <div class="card card-body">
                                    Thanh toán trước: Phòng phải được đặt trước ít nhất 2 ngày.
                                    Toàn bộ số tiền phải được thanh toán trước bằng thẻ tín dụng hoặc chuyển khoản ngân hàng tại thời điểm đặt phòng.
                                    Thẻ tín dụng đặt cọc đặt phòng khách sạn phải được xuất trình tại quầy lễ tân khi nhận phòng.
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div style="width: 100%;height: 50px;border: 1px solid black;text-align: center;border-radius: 5px" type="button" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample">
                                <p style="margin-top: 10px">Chính sách hủy</p>
                            </div>
                        </div>
                        <div class="col-12" style="margin-top: 5px">
                            <div class="collapse" id="collapseExample2">
                                <div class="card card-body">
                                    Không hoàn lại tiền nếu hủy loại phòng trong bất kỳ trường hợp nào.
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div style="width: 100%;height: 50px;border: 1px solid black;text-align: center;border-radius: 5px" type="button" data-toggle="collapse" data-target="#collapseExample3" aria-expanded="false" aria-controls="collapseExample">
                                <p style="margin-top: 10px">Thời gian nhận phòng</p>
                            </div>
                        </div>
                        <div class="col-12" style="margin-top: 5px">
                            <div class="collapse" id="collapseExample3">
                                <div class="card card-body">
                                    Giờ nhận phòng khách sạn bắt đầu từ 14h00.
                                    Trong trường hợp khách muốn nhận phòng sớm sẽ phải trả thêm phụ phí theo chính sách của khách sạn.
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div style="width: 100%;height: 50px;border: 1px solid black;text-align: center;border-radius: 5px" type="button" data-toggle="collapse" data-target="#collapseExample4" aria-expanded="false" aria-controls="collapseExample">
                                <p style="margin-top: 10px">Thời gian trả phòng</p>
                            </div>
                        </div>
                        <div class="col-12" style="margin-top: 5px">
                            <div class="collapse" id="collapseExample4">
                                <div class="card card-body">
                                    Tiền phòng khách sạn phải trả lúc 12h.
                                    Trong trường hợp trả phòng trễ, khách sẽ phải trả phụ phí theo chính sách của khách sạn.
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div style="width: 100%;height: 50px;border: 1px solid black;text-align: center;border-radius: 5px" type="button" data-toggle="collapse" data-target="#collapseExample5" aria-expanded="false" aria-controls="collapseExample">
                                <p style="margin-top: 10px">Quy tắc dành cho trẻ em</p>
                            </div>
                        </div>
                        <div class="col-12" style="margin-top: 5px">
                            <div class="collapse" id="collapseExample5">
                                <div class="card card-body">
                                    Miễn phí chỗ ở và bữa sáng cho tối đa 2 trẻ em từ 6 tuổi trở xuống khi sử dụng cùng giường với người lớn hoặc cũi trẻ em. Trẻ vị thành niên nhận phòng phải có người lớn đi cùng.
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div style="width: 100%;height: 50px;border: 1px solid black;text-align: center;border-radius: 5px" type="button" data-toggle="collapse" data-target="#collapseExample6" aria-expanded="false" aria-controls="collapseExample">
                                <p style="margin-top: 10px">Thử tục nhận phòng khách sạn</p>
                            </div>
                        </div>
                        <div class="col-12" style="margin-top: 5px">
                            <div class="collapse" id="collapseExample6">
                                <div class="card card-body">
                                    Theo quy định của chính phủ, khách phải xuất trình thẻ căn cước hoặc hộ chiếu khi nhận phòng tại khách sạn. Bản sao của các thủ tục giấy tờ sẽ được nộp cho cơ quan chính phủ có liên quan.
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div style="width: 100%;height: 50px;border: 1px solid black;text-align: center;border-radius: 5px" type="button" data-toggle="collapse" data-target="#collapseExample7" aria-expanded="false" aria-controls="collapseExample">
                                <p style="margin-top: 10px">Điều khỏn sử dụng</p>
                            </div>
                        </div>
                        <div class="col-12" style="margin-top: 5px">
                            <div class="collapse" id="collapseExample7">
                                <div class="card card-body">
                                    Đảm bảo rằng trẻ vị thành niên từ 18 tuổi trở lên và có đầy đủ thẩm quyền hợp pháp để ký kết thỏa thuận này và việc sử dụng trang web này tuân thủ tất cả các điều khoản và điều kiện ở đây. Bạn đồng ý chịu trách nhiệm tài chính cho tất cả các hình thức thanh toán cho trang web (bao gồm cả trường hợp người khác sử dụng tài khoản của bạn hoặc trẻ vị thành niên sống cùng với bạn). Bạn chịu trách nhiệm về việc sử dụng trẻ vị thành niên dưới tên của bạn và tài khoản của bạn.Bạn cũng đảm bảo rằng tất cả thông tin của bạn và tư cách thành viên Hộ gia đình do bạn cung cấp trong quá trình sử dụng trang web này là đúng sự thật và chính xác, không có sự giả mạo hay gian lận. Bạn đồng ý với trang thiết bị đặt chỗ của trang web chỉ được sử dụng để đặt chỗ hoặc mua hàng hợp pháp cho bạn hoặc người được ủy quyền hợp pháp của bạn Tài khoản của bạn sẽ bị từ chối truy cập nếu lạm dụng quá mức các phương tiện đặt phòng. Đối với Đặt chỗ và dịch vụ có thể bị tính phí, tuân theo các điều khoản hoặc điều kiện mua hàng, bao gồm việc thanh toán mọi chi phí đến hạn và tuân thủ các nguyên tắc và luật về giá cả, sản phẩm và dịch vụ. Bạn phải chịu mọi chi phí, thuế phí phát sinh trong quá trình sử dụng địa điểm.
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div style="width: 100%;height: 50px;border: 1px solid black;text-align: center;border-radius: 5px" type="button" data-toggle="collapse" data-target="#collapseExample8" aria-expanded="false" aria-controls="collapseExample">
                                <p style="margin-top: 10px">Tỷ giá</p>
                            </div>
                        </div>
                        <div class="col-12" style="margin-top: 5px">
                            <div class="collapse" id="collapseExample8">
                                <div class="card card-body">
                                    Tỷ giá tiền tệ thay đổi dựa trên giá niêm yết của các ngân hàng chính phủ. Giá được niêm yết bằng nội tệ. Thông tin chuyển đổi tiền tệ được cung cấp bởi trang web này Chính xác.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-12" style="margin-top: 70px ">
                            <img
                                src="https://res.cloudinary.com/huydeptrai/image/upload/v1597052223/policy_tfjc1b.jpg"
                                width="102%" alt="" height="430px">
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-12" style="margin-top: 50px">
                    <div class="abc">
                        <h1 class="content_while" style="text-align: center;">Hỏi & Đáp</h1>
                    </div>
                </div>
                <div class="col-6" style="margin-top: 30px">
                    <div class="row">
                        <h4 class="col-12">Những Câu Hỏi Thường  Gặp?</h4>
                       <div class="col-12">
                           <div style="width: 100%;height: 50px;border: 1px solid black;text-align: center;border-radius: 5px" type="button" data-toggle="collapse" data-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample">
                               <p style="margin-top: 10px">Thời gian nhận - trả phòng khách sạn?</p>
                           </div>
                       </div>
                        <div class="col-12" style="margin-top: 5px">
                            <div class="collapse" id="collapseExample1">
                                <div class="card card-body">
                                    Theo quy định về thời gian nhận phòng khách sạn của một số thành phố lớn trong nước như:
                                    HCM, Huế, Hà Nội, Đà Nẵng ... thường chọn thời điểm 12h là thời điểm đặt và trả phòng.
                                    Từ thời điểm đó, khách sạn sẽ áp dụng cách tính ngày trong khách sạn cho khách.
                                    Thời gian nhận phòng cụ thể từ 12h trưa đến 14h chiều trở lên và
                                    Thời gian trả phòng phải vào 12h trưa ngày hôm sau. Tại thời điểm đó,
                                    Bạn sẽ phải trả một ngày cho tiền phòng.
                                    <br>
                                    Tuy nhiên, nếu thời gian nhận phòng khách sạn sớm hơn 12 giờ trưa
                                    hoặc trả phòng muộn hơn 12 giờ trưa, bạn vẫn phải trả phí nửa ngày.
                                    Trong trường hợp bạn trả phòng muộn hơn 18 giờ, phí đặt phòng của bạn sẽ được tính thêm một ngày.
                                    Điều này có nghĩa là ngay cả khi bạn thanh toán hơn 18 giờ ngày hôm trước và 12 giờ trưa ngày hôm sau thì
                                    Giá vẫn được tính theo một ngày.
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div style="width: 100%;height: 50px;border: 1px solid black;text-align: center;border-radius: 5px" type="button" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample">
                                <p style="margin-top: 10px">Một đêm ở khách được tính như thế nào?</p>
                            </div>
                        </div>
                        <div class="col-12" style="margin-top: 5px">
                            <div class="collapse" id="collapseExample2">
                                <div class="card card-body">
                                    Đối với trường hợp nhận phòng sớm:
                                    <br>
                                    Check in từ 5h00 – 9h00: Tính 50% giá phóng.
                                    Check in từ 9h – 14h00: Tính 30% giá phòng.
                                    Trường hợp trả phòng trễ
                                    <br>
                                    Từ 12h – 15h: Phụ thu 30% giá phòng.
                                    Từ 15h – 18h: Phụ thụ 50% giá phòng.
                                    Sau 18h00: Phụ thu 100% giá phòng.
                                    <br>
                                    Ví dụ như: Tôi sẽ đặt phòng khách sạn Phú Quý Sóc Trăng vào lúc 2 giờ chiều ngày 17/02/2020 và sẽ trả phòng lúc 11:55 trưa ngày 18/02/2020, theo cách tính tiền phòng khách sạn thì giá phòng sẽ tương đương 1.500.000 VNĐ ngày. Nhưng nếu tôi đặt phòng sớm hơn lúc 11 giờ trưa đến 12 giờ trưa ngày hôm sau tôi vẫn chịu phí nửa ngày với giá phòng là 2.200.000 VNĐ. Còn nếu tôi trả phòng lúc 18:00 ngày 18/02/2020 tôi sẽ chịu thêm phí 1 ngày ở nữa tổng cộng là 2 ngày với số tiền 3.000.000 VNĐ.
                                    <br>
                                    Một điểm lưu ý nhỏ nữa đó chính là theo nguyên tắc, những khách sạn từ 2 sao trở xuống sẽ có giờ nhận và trả phòng tính theo 12 giờ, còn những khách sạn 3-5 sao trở lên có thời gian nhận phòng là 14 giờ và trả phòng là 12 giờ. Trên đây là mức trung bình còn tùy vào khách sạn sẽ có những mức phụ thu khác nhau.
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div style="width: 100%;height: 50px;border: 1px solid black;text-align: center;border-radius: 5px" type="button" data-toggle="collapse" data-target="#collapseExample3" aria-expanded="false" aria-controls="collapseExample">
                                <p style="margin-top: 10px">Mẹo đúng để nhận phòng - trả phòng khách sạn?</p>
                            </div>
                        </div>
                        <div class="col-12" style="margin-top: 5px">
                            <div class="collapse" id="collapseExample3">
                                <div class="card card-body">
                                    Để tránh bị phạt theo khung thời gian và quy tắc do khách sạn đặt ra,
                                    Bạn cần trang bị cho mình một số kỹ năng trong việc nhận và trả phòng tại khách sạn.
                                    Sau đây Vietnam Booking sẽ nêu ra một số mẹo cũng như kinh nghiệm trả phòng
                                    Hoặc chọn khách sạn giá tốt.
                                    <br>
                                    Trước khi quyết định đặt phòng khách sạn, bạn cần tìm hiểu kỹ về khách sạn thông qua các bình luận,
                                    phản hồi mà khách trước đó đã thông báo. Nếu đọc những phản hồi tốt và
                                    Phù hợp với các tiêu chuẩn khách sạn đã đề cập trước đó, đây là khách sạn bạn nên chọn.
                                    Không phải tất cả các khách sạn đều có thời gian nhận và trả phòng giống nhau,
                                    vì vậy bạn sẽ cần tìm hiểu xem mấy giờ trả phòng khách sạn, khách sạn qua đêm,
                                    cách tính tiền phòng khách sạn…, để chuẩn bị tốt hơn khi nhận phòng.
                                    <br>
                                    Ngoài ra, nếu bạn muốn nhận phòng sớm hơn hoặc trả phòng muộn hơn thì có thể thương lượng trước
                                    Với lễ tân khách sạn để đưa ra một khoản phụ phí hợp lý, đảm bảo rằng điều đó không quá đắt.
                                    Đối với những người muốn ở thêm vài giờ, bạn nên thêm chỗ đặt trước theo giờ.
                                    Vì đặt theo giờ sẽ tiết kiệm hơn rất nhiều so với đặt trước ngày trong hoàn cảnh này.
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div style="width: 100%;height: 50px;border: 1px solid black;text-align: center;border-radius: 5px" type="button" data-toggle="collapse" data-target="#collapseExample4" aria-expanded="false" aria-controls="collapseExample">
                                <p style="margin-top: 10px">Dưới 18 tuổi có được thuê khách sạn không?</p>
                            </div>
                        </div>
                        <div class="col-12" style="margin-top: 5px">
                            <div class="collapse" id="collapseExample4">
                                <div class="card card-body">
                                    Theo luật, việc thuê khách sạn, nhà nghỉ là giao dịch dân sự giữa người thuê
                                    và bên cho thuê. Căn cứ Điều 21 Bộ luật dân sự 2015 về độ tuổi giao dịch dân sự:
                                    “Giao dịch dân sự của người dưới 6 tuổi do người đại diện theo pháp luật của người đó xác lập,
                                    biểu diễn. Người từ đủ 6 tuổi đến chưa đủ 15 tuổi khi xác lập, thực hiện giao dịch dân sự phải
                                    Người đại diện theo pháp luật đồng ý, trừ các giao dịch dân sự phù hợp với nhu cầu sinh hoạt hàng ngày
                                    với các lứa tuổi. Người từ đủ 15 tuổi đến chưa đủ 18 tuổi được tự mình xác lập, thực hiện giao dịch dân sự,
                                    trừ các giao dịch dân sự liên quan đến bất động sản phải đăng ký tài sản và các giao dịch dân sự khác
                                    theo quy định của pháp luật phải được sự đồng ý của người đại diện theo pháp luật ”. Cũng nhiều
                                    băn khoăn không biết nên mang gì vào nhà nghỉ? Trên thực tế, làm thế nào để thuê một khách sạn,
                                    Khi đến đặt phòng cần xuất trình một trong các loại giấy tờ sau: Chứng minh nhân dân,
                                    hộ chiếu hoặc giấy tờ có ảnh do cơ quan quản lý Nhà nước Việt Nam cấp.
                                    <br>
                                    Như vậy, về nguyên tắc chung :<h6> người chưa đủ 18 tuổi không có đủ năng lực giao dịch dân sự
                                        liên quan đến bất động sản</h6>. Đặc biệt là thuê khách sạn nếu không phải là trẻ vị thành niên
                                    và nếu không có ID của bạn, bạn sẽ không thể hoàn thành các thủ tục đặt phòng.
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div style="width: 100%;height: 50px;border: 1px solid black;text-align: center;border-radius: 5px" type="button" data-toggle="collapse" data-target="#collapseExample5" aria-expanded="false" aria-controls="collapseExample">
                                <p style="margin-top: 10px">Thuê khách sạn / nhà nghỉ khi chưa đủ tuổi cần những gì?</p>
                            </div>
                        </div>
                        <div class="col-12" style="margin-top: 5px">
                            <div class="collapse" id="collapseExample5">
                                <div class="card card-body">
                                    Nếu bạn chưa đủ tuổi nhưng vẫn muốn thuê phòng thì cách tốt nhất để thuê khách sạn là
                                    Vui lòng dẫn theo người thân lớn tuổi (có giấy tờ tùy thân). Hầu hết các khách sạn thường không yêu cầu khách
                                    Tất cả các giấy tờ tùy thân phải được xuất trình khi đi theo đoàn hoặc nhóm, thường chỉ yêu cầu xuất trình
                                    1/2 số CMND trong nhóm. Vì vậy, bạn nên đi cùng người bảo lãnh để họ ký bảo lãnh
                                    cho khách sạn để ở.
                                    <br>
                                    Ngoài ra, nếu bạn trên 16 tuổi và có CMND thì vẫn được khách sạn xem xét
                                    <br>
                                    Việc lưu trú phụ thuộc vào cách thức giao dịch của khách sạn và quy định chung của từng khách sạn.
                                    <br>
                                    Trường hợp có CMND khi đến khách sạn.
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div style="width: 100%;height: 50px;border: 1px solid black;text-align: center;border-radius: 5px" type="button" data-toggle="collapse" data-target="#collapseExample6" aria-expanded="false" aria-controls="collapseExample">
                                <p style="margin-top: 10px">Cách thanh toán khi đặt phòng trực tuyến?</p>
                            </div>
                        </div>
                        <div class="col-12" style="margin-top: 5px">
                            <div class="collapse" id="collapseExample6">
                                <div class="card card-body">
                                    Đặt phòng khách sạn trực tuyến hay đặt phòng trực tuyến là hình thức đặt phòng thông qua
                                    các trang web. Chỉ cần thiết bị di động, máy tính, laptop hoặc Ipad, ... có kết nối Internet
                                    là bạn có thể đặt phòng mọi lúc mọi nơi mà không cần đi thực địa hoặc đến trực tiếp khách sạn.
                                    Đặt phòng khách sạn trực tuyến hiện là một công cụ hữu hiệu cho du khách tự túc bởi những ưu điểm
                                    vừa tiện lợi nhanh chóng lại dễ kiếm giá cả tương đối mềm. Sau khi đặt phòng khách sạn
                                    trực tuyến, để đặt phòng thường phải thanh toán trước một số tiền nhất định.
                                    Hiện tại đặt phòng trực tuyến có 2 phương thức thanh toán là Online và trực tiếp.
                                    Đối với hình thức thanh toán trực tiếp, có các cách sau để bạn lựa chọn, đó là thanh toán bằng thẻ
                                    Visa / Mastercard, Internet Banking và Ví điện tử.
                                    <br>
                                    Tất cả những điều này có điểm chung là bạn chỉ cần ngồi nhà, thông qua Internet để thanh toán dịch vụ.
                                    Tuy nhiên, bạn cần lưu ý, hình thức này yêu cầu bạn phải chịu thêm phí, trong đó mức phí cao nhất
                                    Áp dụng cho thẻ thanh toán quốc tế. Hầu hết tất cả các trang web đặt phòng nước ngoài đều yêu cầu người dùng
                                    Để thanh toán bằng thẻ này, bạn phải trả thêm phí và có nguy cơ bị lộ thông tin thẻ.
                                    Tại Vietnam Booking, với phương thức thanh toán trực tuyến linh hoạt cả 3 cách, theo nhu cầu
                                    của khách hàng mà chúng tôi đề xuất cách phù hợp nhất. Đặc biệt, hình thức thanh toán qua
                                    Chuyển khoản ngân hàng là phương thức thanh toán được nhiều khách lựa chọn hơn và áp dụng nhiều hơn cho việc đặt phòng khách sạn
                                    Trực tuyến. Ưu điểm của hình thức thanh toán này không chỉ giúp bạn tiết kiệm nhiều thời gian
                                    mà còn giúp bạn không phải đi quá xa, bạn sẽ dễ dàng tìm được một ngân hàng phù hợp,
                                    Hoặc nếu bạn có tài khoản ngân hàng của riêng mình, bạn cũng có thể dễ dàng thanh toán trên thiết bị
                                    phòng giam của mình.
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div style="width: 100%;height: 50px;border: 1px solid black;text-align: center;border-radius: 5px" type="button" data-toggle="collapse" data-target="#collapseExample7" aria-expanded="false" aria-controls="collapseExample">
                                <p style="margin-top: 10px">Bạn làm gì khi mang thú cưng vào khách sạn?</p>
                            </div>
                        </div>
                        <div class="col-12" style="margin-top: 5px">
                            <div class="collapse" id="collapseExample7">
                                <div class="card card-body">
                                    Bên cạnh việc liên hệ và tìm hiểu kỹ các quy định về việc mang thú cưng vào khách sạn.
                                    Tra cứu thông tin khách sạn cho chó vào ở để không chủ động hơn.
                                    Mời các bạn cùng tham khảo những lời nhắc nhở khi đi du lịch mang thú cưng vào khách sạn để xử lý
                                    Di chuyển và ở thuận tiện hơn.
                                    <br>
                                    1. Làm quen với bọn trẻ với chiếc túi mà bạn sẽ cho vào khi đến khách sạn.
                                    Điều này giúp trẻ quen với không gian chật chội, bức bối. Và đừng quên bỏ một vài món đồ chơi
                                    để khiến tôi cảm thấy thích thú hơn trong “ngôi nhà” mới.
                                    <br>
                                    2. Chuỗi liên lạc sẽ giúp bạn tìm thấy thú cưng của mình nhanh chóng hơn.
                                    Trang bị vòng đeo cổ cho thú cưng và ghi tên Sếp và Sếp kèm số điện thoại
                                    Liên lạc trong trường hợp đột xuất bị lạc sẽ thuận tiện trong việc tìm kiếm.
                                    <br>
                                    3. Kiểm tra khả năng chống say xe của thú cưng bằng cách cho chúng chạy thử xe trong thời gian ngắn.
                                    Trong trường hợp thú cưng say xe nên trang bị thuốc chống say tàu xe để không ảnh hưởng
                                    sức khỏe để quá trình nhận phòng khách sạn nhanh hơn.
                                    <br>
                                    4. Hỏi bác sĩ về chế độ ăn và dinh dưỡng cho thú cưng của bạn trong thời gian bạn ở khách sạn / resort.
                                    Mỗi loại thú cưng tùy theo kích cỡ, độ tuổi sẽ có chế độ chăm sóc khác nhau khi đi du lịch.
                                    <br>
                                    5. Vận động nhiều hơn để cơ thể không mệt mỏi và muốn ngủ trong suốt chuyến đi.
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div style="width: 100%;height: 50px;border: 1px solid black;text-align: center;border-radius: 5px" type="button" data-toggle="collapse" data-target="#collapseExample8" aria-expanded="false" aria-controls="collapseExample">
                                <p style="margin-top: 10px">Những lưu ý khi thuê khách sạn?</p>
                            </div>
                        </div>
                        <div class="col-12" style="margin-top: 5px">
                            <div class="collapse" id="collapseExample8">
                                <div class="card card-body">
                                    Đối với trường hợp nhận phòng sớm:
                                    <br>
                                    Check in từ 5h00 – 9h00: Tính 50% giá phóng.
                                    Check in từ 9h – 14h00: Tính 30% giá phòng.
                                    Trường hợp trả phòng trễ
                                    <br>
                                    Từ 12h – 15h: Phụ thu 30% giá phòng.
                                    Từ 15h – 18h: Phụ thụ 50% giá phòng.
                                    Sau 18h00: Phụ thu 100% giá phòng.
                                    <br>
                                    Ví dụ như: Tôi sẽ đặt phòng khách sạn Phú Quý Sóc Trăng vào lúc 2 giờ chiều ngày 17/02/2020 và sẽ trả phòng lúc 11:55 trưa ngày 18/02/2020, theo cách tính tiền phòng khách sạn thì giá phòng sẽ tương đương 1.500.000 VNĐ ngày. Nhưng nếu tôi đặt phòng sớm hơn lúc 11 giờ trưa đến 12 giờ trưa ngày hôm sau tôi vẫn chịu phí nửa ngày với giá phòng là 2.200.000 VNĐ. Còn nếu tôi trả phòng lúc 18:00 ngày 18/02/2020 tôi sẽ chịu thêm phí 1 ngày ở nữa tổng cộng là 2 ngày với số tiền 3.000.000 VNĐ.
                                    <br>
                                    Một điểm lưu ý nhỏ nữa đó chính là theo nguyên tắc, những khách sạn từ 2 sao trở xuống sẽ có giờ nhận và trả phòng tính theo 12 giờ, còn những khách sạn 3-5 sao trở lên có thời gian nhận phòng là 14 giờ và trả phòng là 12 giờ. Trên đây là mức trung bình còn tùy vào khách sạn sẽ có những mức phụ thu khác nhau.
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div style="width: 100%;height: 50px;border: 1px solid black;text-align: center;border-radius: 5px" type="button" data-toggle="collapse" data-target="#collapseExample9" aria-expanded="false" aria-controls="collapseExample">
                                <p style="margin-top: 10px">Khách sạn / khu nghỉ dưỡng có cho phép vật nuôi không?</p>
                            </div>
                        </div>
                        <div class="col-12" style="margin-top: 5px">
                            <div class="collapse" id="collapseExample9">
                                <div class="card card-body">
                                    Do một số yếu tố khách quan, các khách sạn ở Việt Nam đã hạn chế mang theo thú cưng
                                    vào phòng nghỉ. Ngày nay, với mức sống hiện đại hơn, nhu cầu ở chung giữa “Sen cần Sếp”
                                    không thể tách rời. Họ xem thú cưng như một người bạn tâm giao đáng yêu nên muốn mang theo đồ
                                    tốt nhất cho thú cưng của bạn. Ngoài vấn đề không mang thú cưng vào khách sạn, vẫn còn
                                    khách sạn đưa thú cưng vào khách sạn nhưng "biệt lập" trong ký túc xá
                                    Không lấy được lòng các sếp lại là một câu chuyện khác. Do đó, khách sạn có
                                    mở thêm "khách sạn cho phép vật nuôi" để đáp ứng nhu cầu cấp thiết và hấp dẫn
                                    nhiều khách hàng hơn.
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div style="width: 100%;height: 50px;border: 1px solid black;text-align: center;border-radius: 5px" type="button" data-toggle="collapse" data-target="#collapseExample10" aria-expanded="false" aria-controls="collapseExample">
                                <p style="margin-top: 10px">Đặt phòng khách sạn thanh toán trực tiếp?</p>
                            </div>
                        </div>
                        <div class="col-12" style="margin-top: 5px">
                            <div class="collapse" id="collapseExample10">
                                <div class="card card-body">
                                    Bên cạnh hình thức trên, hình thức thanh toán trực tiếp được du khách Việt Nam ưa chuộng hơn cả. Bạn có thể
                                    Đặt phòng không cần thanh toán trước tại Vietnam Booking hoặc thanh toán đặt phòng khách sạn
                                    Khi bạn nhận phòng, không sao cả. Đến trực tiếp văn phòng công ty là bạn sẽ phải đến tận nơi
                                    trả. Tuy ưu điểm của nó có thể hạn chế thời gian bạn dọn phòng nhưng nhược điểm của nó
                                    Phương thức thanh toán này bạn cũng sẽ mất thời gian tìm văn phòng để đóng phí. Tuy nhiên,
                                    Cách trực tiếp này không có lợi khi bạn săn phòng khách sạn giá rẻ, bởi thời
                                    Đợt flash sale có hạn, di chuyển đến văn phòng xuất hóa đơn khá mất thời gian khiến bạn trì trệ
                                    dẫn đến bỏ lỡ những cơ hội tiết kiệm kha khá cho chuyến đi.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-12" style="margin-top: 70px ">
                            <img
                                src="https://res.cloudinary.com/huydeptrai/image/upload/v1597041539/q_a_ttajjc.jpg"
                                width="102%" alt="" height="540px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
@endsection
