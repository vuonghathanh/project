<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (env('DB_CONNECTION') == 'mysql') {
            \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        }
        //Xóa toàn bộ dữ liệu cũ
        \Illuminate\Support\Facades\DB::table('blogs')->truncate();
        \Illuminate\Support\Facades\DB::table('blogs')->insert([
            [
                'id'=>1,
                'title'=>'Hôm nay 25/8/2020 giới trẻ đến phú quốc nên đi đâu',
                'description'=>'Nếu bạn muốn có một buổi tối thú vị Phú Quốc có thể đáp ứng mọi nhu cầu của bạn như Casino, dạo phố, trải nhiệm một đêm đi câu mực cùng ngư dân,... Nhưng có một địa điểm khá thú vị dành cho các bạn trẻ mà tôi vừa phát hiện ra vào tối hôm trước
                nơi đó có không gian rộng dãi thoáng đãng với những tiếng sóng vỗ dập dìu và những bài hát nhẹ nhàng giúp ta có một cảm giác thư giản thoải mái sau những ngày tháng đi làm mệt nhọc.',
                'details'=>'Ốc Sên Beach Bar Phú Quốc là một quán bar cực chất, ghi dấu ấn ngay lập tức với những chiếc ghế lười màu cam nổi bật trên bãi cát trắng mịn màng.|
                Ốc Sên Beach Bar cũng chính là điểm ngắm hoàng hôn cực đẹp ở Phú Quốc, đừng bỏ qua nhé!.Ốc Sên Beach Bar xuất hiện ở hầu hết các bài review du lịch Phú Quốc với không ngớt những lời khen có cánh. Cũng phải thôi, cứ nghĩ đi, giữa khung cảnh bao la của biển cả, thả mình trên những chiếc ghế lười êm ái, ngắm hoàng hôn đang dần buông, nhấm nháp chút bia hoặc nước mát, và chill… Ôi, làm sao cưỡng lại được?|
                Điều tuyệt vời là cứ đến đây là auto có hình đẹp các bạn à. Vừa có khung cảnh hoàng hôn tuyệt diệu vừa có đủ đồ nghề luôn nè: vừa có bãi biển trắng, ghế lười cam, có cả khung lưới, nhà cây cho bạn tha hồ mà tạo kiểu nhé!.Đây cũng là bar rất thích hợp cho các bạn thích quẩy nha, đêm nào cũng có lửa trại, show DJ, múa lửa đến 1-2h sáng, tha hồ mà sung luôn.Giá đồ uống từ khoảng 50 ngàn đồng trở lên, cũng không phải là quá chát cho quán bar tuyệt vời như này đúng không?|
                Tuy nhiên, bạn nên đến sớm để có ghế ngồi cũng như không gian trống để chụp ảnh nhé! Đặc biệt là cuối tuần quán rất đông luôn.',
                'thumbnail'=>'Bar1_pyyq4a,Bar2_eng7hq,Bar3_q9fdhj,Bar4_kasghp,',
                'author'=>'Theo nguồn luonlophuquoc.com',
                'status'=>1,
                'created_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],[
                'id'=>2,
                'title'=>'Dự báo thời tiết cho biết 25/8/2020 có khả năng sẩy ra mưa vào 8-10 giờ sáng. Nếu mưa có những địa điểm nào thú vị.',
                'description'=>'Bạn đi du lịch ở đâu thì đi chứ đi du lịch Phú Quốc mà bỏ qua coi thông tin thời tiết thì có khi phí tiền, phí cả chuyến đi, về lại bảo Phú Quốc chán, chẳng có gì đẹp và thú vị.',
                'details'=>'Bởi vì thời tiết, mùa mưa và nắng ở Phú Quốc sẽ quyết định tới 50% thành công trong chuyến đi của bạn. Chẳng hạn, có lẽ ít ai muốn đi tới một địa điểm tham quan du lịch vào ngày mưa bão lũ cả. Riêng ở Phú Quốc thì vào mùa mưa và bão bạn vẫn có thể đến được, nhưng nếu bạn đặt khách sạn (hoặc resort) nhầm chỗ (vào đúng bên có mưa bão) thì sẽ thực sự lãng phí tiền của. |
                Tại sao tôi lại viết dở hơi vậy? Bởi vì bạn phải hình dung đặc điểm địa hình của đảo Phú Quốc, một hòn đảo lớn nằm ở cuối cực nam của đất nước, nhưng nó lại được bao bọc bởi mũi đất liền (gọi là biển Tây) kéo dài từ mũi Cà Mau tới Mũi Nai (TP Hà Tiên – Kiên Giang). Vừa nằm ở xa, gần với xích đạo lại được che chắn nên ở Phú Quốc gần như không có mùa Đông, trời không lạnh. Nhưng ở biển Tây thì vào mùa mưa sẽ có rất nhiều đợt gió mùa Tây Nam thổi đưa mây và mưa lớn tới. Mà bạn hình dung, Phú Quốc là một hòn đảo trải dài theo chiều Bắc – Nam (phía trên là Bắc thì phình to ra như phần cuống của trái xoài, còn phía dưới là nam thì thót lại như đít trái xoài). Chạy dọc “trái xoài” là dãy núi Hàm Ninh phân chia đảo Phú Quốc thành hai nửa gồm sườn Đông đảo và sườn Tây đảo. Ở mỗi bên sườn đều có các bãi biển (bãi tắm du lịch) với nhiều tên gọi khác nhau. Nói chung, Phú Quốc có rất nhiều bãi biển du lịch. Tất nhiên, gọi là đảo thì 360 độ đều là biển nhưng chỉ có những khu nào có bãi tắm đẹp + an toàn thì mới được quy hoạch thì khu du lịch + tắm biển. |
                Vào mùa mưa, bạn không nên chọn các khách sạn và khu nghỉ dưỡng ở Bãi Dài Cụ thể, bạn cứ hình dung: trung tâm của đảo là TT Dương Đông (gần sân bay Phú Quốc). Tất cả đều nằm ở phía sườn Tây. Ngược lên phía Bắc của đảo là các bãi biển như bãi biển Ông Lang, Bãi Dài, mũi Gành Dầu… Còn xuôi về phía nam của đảo là các bãi nổi tiếng như Bãi Trường, Bãi Sao, Bãi Khem, đảo Hòn Thơm, mũi Ông Đội…Mà thời tiết ở Phú Quốc được chia làm hai mùa rõ rệt là mùa mưa bão và mùa khô. Bão thì ít nhưng mùa mưa ở Phú Quốc cũng như miền Tây Nam bộ thì rất dữ dội. Vậy mùa mưa ở Phú Quốc vào tháng mấy? Mùa mưa Phú Quốc chính là mùa hè và mùa thu ở miền Bắc, cụ thể là từ khoảng tháng 5 đến tháng 11. Lúc ở miền Bắc bắt đầu rét lạnh như tháng 10 và 11 thì ở Phú Quốc vẫn đang là mùa mưa (tức là mưa nhiều, dễ mưa). Riêng khoảng tháng 9-11 còn có gió mạnh, sóng lớn. Gió lớn kèm sóng lớn nhiều khi còn đưa rác ở đâu dạt về bãi biển. Nếu bạn đặt các khách sạn và resort tại các bãi như Bãi Dài, Bãi Trường, Bãi Sao, mũi Gành Dầu… ở bờ biển phía Tây (hướng ra phía vịnh Thái Lan) thì sẽ không còn đẹp nữa. |
                Mùa mưa Phú Quốc nên ở Bãi Sao và Bãi Khem nhưng sang mùa khô thì lại sóng lớn không tắm được Cùng khoảng thời gian này, nếu bạn chọn các resort ở bờ biển phía Đông của đảo Phú Quốc như ở Bãi Sao, Bãi Khem thì lại lặng sóng, biển sạch và mới tắm được.Ngược lại, từ tháng 11 năm trước đến cuối tháng 4 năm sau được coi là mùa khô ở đảo Phú Quốc. Ở phía Tây trời ít mưa, có khi nắng nóng và biển lặng sóng, thời tiết đẹp. Nếu bạn đi du lịch Phú Quốc vào các tháng 11, 12, 1, 2, 3 và 4 thì hãy chọn các khách sạn và resort ở bờ phía Tây của đảo như các khu vực bãi biển Ông Lang, Bãi Trường, Bãi Dài, mũi Gành Dầu… Còn ở các khu vực như Bãi Sao, Bãi Khem thì chịu ảnh hưởng của gió mùa Đông Bắc nên có sóng lớn, không thể tắm được. Riêng vào thời điểm hai tháng 4 và 5 là khoảng giao thoa giữa mùa khô và mùa mưa ở Phú Quốc thì thời tiết cả hai bên rất phức tạp, bạn ở đâu cũng chỉ là do may rủi. |
                Đi du lịch Phú Quốc vào đúng mùa mưa, bạn sẽ chứng kiến những cảnh tượng như thế này, muốn tung tăng cũng không nổi, mất hết hứng thú, mưa liên tục Trước đây khi lần đầu tiên đi Phú Quốc, tôi cứ nghĩ mùa hè (tháng 5-6-7-8) mới là mùa cao điểm của du lịch Phú Quốc nhưng trên thực tế, mùa du lịch chính ở đảo Phú Quốc lại vào mùa khô, tức là từ tháng 11 đến tháng 4. Nếu bạn đi du lịch Phú Quốc vào dịp Tết Dương lịch và Tết Nguyên đán chính là vào mùa cao điểm của Phú Quốc. Lúc này, giá phòng khách sạn, resort khá đắt. Bởi vì phần lớn khách du lịch đều muốn đặt phòng ở trung tâm đảo Phú Quốc (TT Dương Đông) và các Bãi Trường, Bãi Dài, bãi biển Ông Lang để nhìn ra phía biển khơi. Còn vào mùa mưa Phú Quốc thì không phải là cao điểm của du lịch Phú Quốc và các bãi biển nằm ở phía Tây thưa vắng khách hơn thường lệ (không phải là không đông khách), nên giá phòng mềm hơn. Tôi cũng xin bạn lưu ý rằng, gọi là mùa mưa bão song không phải ngày nào Phú Quốc cũng có mưa bão. Cũng có những ngày khô ráo. Tuy nhiên, vào các tháng 7-8-9 thì có khi mưa gió não nề kéo dài cả tuần và chẳng ai muốn đi lại trong cảnh mưa gió như thế. Và nếu đi du lịch, ăn chơi Phú Quốc mà gặp cả ngày, cả tuần mưa thì làm thế nào? Đây là bài học hiếm có của tôi chia sẻ lại cho những ai yêu mến.',
                'thumbnail'=>'Review_el5eg5,Review1_iaxqyt,Review2_qvogfj,Review3_dyrfsc,',
                'author'=>'Van_Nguyen',
                'status'=>1,
                'created_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],[
                'id'=>3,
                'title'=>'Sáng hôm nay 25/8/2020 với thời tiết mắt mẻ trời trong xanh nên đi đâu?',
                'description'=>'Thuộc vùng khí hậu nhiệt đới gió mùa nên ở Phú Quốc mùa mưa thường kéo dài từ tháng 5-10, mùa khô từ tháng 11 đến tháng 4 năm sau. Mùa khô là thời gian đẹp nhất để du lịch ở Phú Quốc nhưng chi phí khá đắt đỏ. Nếu bạn muốn có chuyến đi tiết kiệm, hãy đến Phú Quốc vào tháng 4-6. Thời điểm này biển chưa động, mưa cũng không nhiều, thời tiết khá dễ chịu. Bãi Sao, bãi Khem vào mùa mưa gợn sóng lăn tăn, nước xanh ngắt cuốn hút du khách.',
                'details'=>'Nếu đã đến Phú Quốc thì bạn nhất định phải trải nghiệm: Vi vu 4 đảo bằng cano. Chuyến tham quan 4 đảo trên chiếc ca-nô tốc độ sẽ đưa bạn đến những thiên đường biển đảo tuyệt đẹp như Hòn Móng Tay, Hòn Gầm Ghì, Hòn Mây Rút Trong, và Hòn Mây Rút Ngoài.Chắc chắn bạn sẽ phải xiêu lòng trước vẻ đẹp nhẹ nhàng bởi màu nước trong xanh như ngọc bích của Hòn Móng Tay, những rặng san hô đẹp chết người của Hòn Gầm Ghì hay vẻ hoang sơ của Hòn Mây Rút Trong và Hòn Mây Rút Ngoài. |
                Tham quan Vinpearl Safari, Vinpearl Safari – Phú Quốc là nhà của hơn 3.000 động vật từ 150 loài đến từ khắp nơi trên thế giới. Tại đây, bạn có thể quan sát rất nhiều loài động vật từ khoảng cách gần qua khung cửa kính của chiếc xe điện. Ngoài ra, bạn còn được selfie với các vũ công trong trang phục thổ dân, thưởng thức xiếc thú và chụp hình sống ảo cùng các loài động vật quý hiếm nữa đó. Vui chơi tại VinWonders Phú Quốc. Đến VinWonders bạn sẽ có được những trải nghiệm mới lạ và đầy cuốn hút. Với 6 phân khu, hơn 100 trò chơi hiện đại cùng các chương trình biểu diễn đa phương tiện quy mô lớn, nơi đây chắc chắn là điểm đến không thể bỏ qua cho hội mê xê dịch và trải nghiệm. |
                Trải nghiệm cáp treo Hòn Thơm, Bạn đã bao giờ ngắm nhìn Phú Quốc từ trên cao chưa? Nếu chưa thì hãy bắt đầu chuyến hành trình của mình với trải nghiệm cáp treo vượt biển để đến với Hòn Thơm. Đây cũng là tuyến cáp treo vượt biển dài nhất thế giới tại đây. Với quãng đường vượt biển gần 7.900 m, cáp treo Hòn Thơm Nature Park Phú Quốc sẽ đưa du khách đến nơi có thiên nhiên hoang sơ và thiên đường vui chơi giải trí bất tận hàng đầu Việt Nam. |
                Câu mực đêm: Khi màn đêm buông xuống, mọi thứ trở nên tĩnh lặng thì cũng là lúc thích hợp nhất để bạn trải nghiệm hoạt động câu mực đêm với các ngư dân nơi đây. Sẽ không gì thích thú hơn khi chính tay bạn câu được những con mực đang săn mồi dưới biển hay bắt được những chú cá kiếm, cá xanh xương đang ngụp lặn trên mặt biển. Chiến lợi phẩm sẽ được chế biến và phục vụ ngay trên tàu luôn đó các bạn ơi. |
                Lặn biển ngắm san hô: Với hệ sinh thái biển nguyên sơ và đa dạng, bạn đừng quên tham gia hành trình lặn biển thú vị khi đặt chân du lịch ở Phú Quốc. Bạn sẽ được trang bị đồ nghề chuyên nghiệp như một thợ lặn bao gồm quần áo lặn, kính mắt, ống thở, bình hơi cùng dây nịt bằng chì. Sau vài thao tác ký hiệu với người hướng dẫn, bạn sẽ bắt đầu hành trình khám phá đại dương ở độ sâu 6 – 10 mét. Những dãy san hô tuyệt đẹp cùng những sinh vật biển dễ thương, đầy màu sắc sẽ cuốn hút bạn không chỉ một lần mà còn mời gọi trở lại mỗi khi đến với biển đảo. Với các gợi ý trên, Lượn Phú Quốc hy vọng bạn sẽ có được một kỳ nghỉ với nhiều hoạt động trải nghiệm, vui chơi đặc sắc khi du lịch tại Phú Quốc. Đừng bỏ lỡ – Nhanh tay đặt vé thôi các bạn ơi! |',
                'thumbnail'=>'vivu_dzamot,vivu2_hbmlqg,vivu4_cttmr1,vivu5_owuvyn,vivu6_vll6yr,',
                'author'=>'Vương Hà Thành',
                'status'=>1,
                'created_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],[
                'id'=>4,
                'title'=>'Chiều hôm nay 25/8/2020 những địa điểm nào có thể ngắm hoàng hôn đẹp?',
                'description'=>'Phú Quốc không chỉ nổi tiếng bởi vẻ đẹp hoang sơ, quyến rũ với những bãi cát dài trắng mịn, biển xanh như ngọc mà còn là một những nơi ngắm hoàng hôn đẹp nhất Việt Nam. Hãy cùng Lượn Phú Quốc khám phá những địa điểm ngắm hoàng hôn ở Phú Quốc cực chất này nhé!',
                'details'=>'Đầu tiên phải kể đến nơi được nhiều bạn trẻ lựa chọn check in nhất hiện nay: Sunset Sanato Beach Club – Không còn lạ lẫm với du khách đến Phú Quốc du lịch nhờ được nhiều travel blogger giới thiệu. Đây là khu tổ hợp công trình nghệ thuật được các nghệ nhân tạo nên như mặt người cắt (Cổng trời – The gate keeper), đàn voi trên biển, đàn cá, hình nón lá, căng nhà gỗ trên cây, nấc thang lên thiên đường,… với kích thước khổng lồ choáng ngợp, đặt ngay trên bãi cát và bờ biển, trở thành một trong những điểm check-in ấn tượng nhất Phú Quốc hút dân mê du lịch. Từ đây du khách có thể thuận tiện ngắm nhìn hoàng hôn ở Phú Quốc cực đẹp. Địa chỉ: Bãi Trường Phú Quốc – Tổ 3, ấp Đường Bào, xã Dương Tơ, Phú Quốc. Chỉ dẫn đường đi đến Sunset Sanato Beach Club: Vị trí của Sunset Sanato Beach Club Phú Quốc nằm tại khu Bãi Trường, ấp Đường Bào, xã Dương Tơ, Phú Quốc. Điểm dễ nhận biết nhất là các bạn chạy đến khu vực Bãi Trường, nhìn thấy biển Sunset Sanato Resort & Villa thì rẽ vô, cứ chạy vào khu resort là sẽ thấy khu quán bar bãi biển. Đó chính là Sunset Sanato Beach Club Phú Quốc. Từ Dương Đông nếu bạn muốn đến Sunset Sanato Beach Club Phú Quốc thì cứ chạy theo đường Trần Hưng Đạo về hướng Nam (hướng ra sân bay) khoảng 15km sẽ tới. |
                Tiếp theo là Chuồn Chuồn Bistro & Sky Bar – với view núi có vị trí khá đẹp nên bạn có thể ngắm hoàng hôn ở Phú Quốc lúc chiều tà hoặc ngắm toàn cảnh thị trấn Dương Đông vào ban đêm. Đặc biệt của quán bar được bao quanh bởi một cây to cho bóng mát, thiết kế chú trọng mảng xanh, chiếm trọn cảm tình của người yêu thiên nhiên nên vừa chụp ảnh sống ảo vừa làm bóng che mát khiến cho không gian quán thật trong lành. Địa chỉ: Đồi Sao Mai, 69 Trần Hưng Đạo, Dương Đông, Phú Quốc. Chỉ dẫn đường đi đến Chuồn Chuồn Bistro & Sky Bar Phú Quốc: Nếu đi bằng taxi, bạn chỉ cần nói với tài xế tên “Nhà hàng Chuồn Chuồn”. Nếu tự đi, có một con đường nhỏ dẫn lên đồi nằm đối diện Saigon Phú Quốc resort ở 62 Trần Hưng Đạo, bạn chỉ cần đi theo con đường đó, rẽ phải ở ngã đầu tiên, sau đó đi thẳng sẽ gặp Chuồn Chuồn Bistro bên trái. |
                Một nơi vừa ngắm hoàng hôn vừa hòa mình cùng thiên nhiên thì ta không thể bỏ qua Ocsen Beach Bar & Club – Đến đây ngắm mặt trời lặn ở Phú Quốc thì tuyệt vời nhất, thích nhất là tự do đặt những chiếc gối lười ngày trên bãi cát trắng mịn, nằm duỗi thân thoải mái đọc sách, thưởng thức ly cocktail mát lạnh sau đó ngắm hoàng hôn buông xuống. Ngoài ra trong thời gian chờ đợi mặt trời lặn các bạn có thể chụp ảnh xung quanh lều trại sống ảo cực chất nhé. Địa chỉ: 118 đường Trần Hưng Đạo, Dương Tơ, Phú Quốc. Chỉ dẫn đường đi đến Ocsen Beach Bar & Club: Từ thị trấn Dương Đông, bạn di chuyển đến vòng xoay ngã 3 đường Trần Hưng Đạo, Lý Tự Trọng, Võ Thị Sáu, sau đó tiếp tục di chuyển trên đường Trần Hưng Đạo, đến hẻm 118, rẽ phải rồi đi thêm một đoạn ngắn nữa đến nơi. Mẹo nhỏ: Do nơi đây rất đông khách đến để ngắm hoàng hôn thường là 17h30 nên các bạn có thể đến sớm hơn để có chỗ ngồi đẹp nhé.',
                'thumbnail'=>'hoanghon_e8ve6u,hoanghon2_wpl8lb,hoanghon1_ltg9im',
                'author'=>'Gia Hân',
                'status'=>1,
                'created_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],[
                'id'=>5,
                'title'=>'Ngày 25/8/2020 Phú Quốc có bình minh không? Và nên ngắm bình minh ở đâu',
                'description'=>'Phú Quốc là một hòn đảo được thiên nhiên ưu đãi với rất nhiều bãi biển trong, sạch và tuyệt đẹp!!! Và tất nhiên, ngắm bình minh trên những bãi biển trải dài, cùng với làn nước trong mát là một trong những trải nghiệm quá tuyệt vời bạn nên thử ở Phú Quốc. Dưới đây, mình xin chia sẻ với các bạn về 3 địa điểm ngắm bình minh trên biển đẹp bậc nhất ở Phú Quốc.',
                'details'=>'Phú Quốc, hòn đảo Ngọc của du lịch Việt Nam, từ lâu đã thu hút du khách không chỉ bởi vẻ đẹp hoang sơ của những hòn đảo chưa được khám phá, những bãi biển xinh đẹp với lớp cát trắng mịn níu chân người, những hàng dừa nghiêng mình che bóng mát mà còn bởi những hoạt động khám phá trải nghiệm thú vị trên hòn đảo này. Trong số đó, ngắm bình minh trên những bãi biển kéo dài, tận hưởng những tia nắng ấm áp đầu tiên trong ngày cùng với làn nước trong mát là một trong những trải nghiệm tuyệt vời mà bạn nên thử khi du lịch Phú Quốc. SUNSET SANATO PHÚ QUỐC. Vị trí của Sunset Sanato Beach Club Phú Quốc nằm tại khu Bãi Trường, ấp Đường Bào, xã Dương Tơ, Phú Quốc. Điểm dễ nhận biết nhất là các bạn chạy đến khu vực Bãi Trường, nhìn thấy biển Sunset Sanato Resort & Villa thì rẽ vô, cứ chạy vào khu resort là sẽ thấy khu quán bar bãi biển. Đó chính là Sunset Sanato Beach Club Phú Quốc. |
                 LÀNG CHÀI HÀM NINH PHÚ QUỐC, Đây là địa điểm được yêu thích nhất, cũng như theo đánh giá là địa điểm ngắm bình minh đẹp nhất ở Phú Quốc. Điểm tạo nên điểm nhấn cho cảnh bình minh ở đây là con đường dài tầm 200m, chạy dọc ra biển. Đây là con đường được người dân dùng để di chuyển ra khu tàu, thuyền đánh bắt cá cập bến. Và chính con đường này tô điểm cho cảnh bình minh trên biển ở làng chài này trở nên “vi diệu” hơn.Hãy chịu khó dậy sớm một chút, tầm khoảng 5h là đẹp, di chuyển ra làng chài Hàm Ninh để săn những bức ảnh cực đẹp, cũng như lưu giữ lại một kỉ niệm đáng nhớ tại mảnh đất xứ “đảo ngọc”. |
                 BÃI SAO PHÚ QUỐC, Đây cũng là một địa điểm ngắm bình minh rất thuận lợi và đẹp ở Phú Quốc. Bãi Sao là một trong những bãi biển đẹp nhất ở Phú Quốc hiện nay, và khi mặt trời hửng sáng, cũng là lúc khung cảnh nơi đây hiện lên rất ảo diệu. Tốt nhất là bạn nên có “người mẫu” sẽ săn được những bức ảnh đẹp hơn. Hơn nữa, bãi tắm này hiện nay đường đi vào cũng tương đối tối và xa so với đường chính nên đi đông và cẩn thận chút nhé.',
                'thumbnail'=>'binhminh_muxwwy,binhminh1_hkrbjb,binhminh2_tqnlba',
                'author'=>'Mai Linh',
                'status'=>1,
                'created_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],[
                'id'=>6,
                'title'=>'Thời tiết ngày 25/8/2020 là một điều kiện tuyệt vời để mọi người có thể khám phá những khu rừng. ',
                'description'=>'Sáng du khách tự túc dùng điểm tâm sáng, 8h00 xe của công ty sẽ đến khách sạn để đón du khách lại điểm tập trung. Khởi hành tham quan Bắc đảo lúc, trên đường đi du khách ghé tham quan cơ sở sản xuất Nước mắm với truyền thống lâu đời và nổi tiếng. Vườn tiêu xanh – đặc sản xứ đảo.',
                'details'=>'Du khách tiếp tục tham quan Rừng nguyên sinh (vườn quốc gia Phú Quốc) tận mắt nhìn thấy hệ sinh thái rừng độc đáo nơi đất đảo.|
                  Du khách đi đến điểm cực bắc của đảo Phú Quốc là Gành Dầu ngắm hải giới Campuchia.|
                  Dừng lại nghỉ ngơi, ăn trưa tại bãi biển Vũng Bầu – một trong những bãi biển đẹp và hoang sơ.|
                  Lên thuyền nhỏ hoặc thuyền Kayak cùng chèo dọc theo sông Cửa Cạn để khám phá vẻ đẹp của dòng sông. Xe khởi hành trở về khách sạn và kết thúc chương trình tour lúc 16h00.',
                'thumbnail'=>'thuyenpayak1_cpcrcq,thuyenpayak2_rep6vh,thuyenpayak3_udxjll,thuyenpayak4_ph8qqf',
                'author'=>'Hoàng Huy',
                'status'=>1,
                'created_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],[
                'id'=>7,
                'title'=>'Với dự báo có mưa vào buổi sáng có nên chụp ảnh tại Cổng trời không?',
                'description'=>'Từ nay, không cần phải sang tận Indonesia mà ngay Việt Nam mình cũng có một cổng trời bí mật, đẹp ngất ngây luôn nè. Chụp hình ở đây rồi check – in ở nước ngoài thì bạn bè cũng tin ngay luôn đó. ',
                'details'=>'Cổng trời bí mật đang hot rần rần hội mê du lịch Phú Quốc.Cổng trời bí mật này nằm trong khuôn viên của Sunset Sonato Beach Club – một điểm đến vô cùng quen thuộc với những tín đồ mê du lịch Phú Quốc từ cuối năm 2017.|
                 Với thiết kế độc đáo hình mặt người cắt đôi, được dựng bên bờ biển, đứng đây bạn không những có hình đẹp sống ảo mà đây còn là nơi ngắm hoàng hôn vô cùng lãng mạn đấy.|
                 Đây hứa hẹn sẽ là điểm đến được nhiều bạn săn đón mỗi khi du lịch Phú Quốc.Tọa lạc tại Tổ 3, ấp Đường Bào, xã Dương Tơ, ngay một vị trí đắc địa, cách sân bay quốc tế Phú Quốc chỉ 7 phút đi xe nên nơi này cực kỳ tiện lợi cho hội nào muốn check – in sống ảo.|
                 Ở Sunset Sanato còn có một bãi biển dài xanh ngát, những khu vui chơi, thể thao, quầy bar cực xinh… và những ngóc ngách sống ảo không đụng hàng như: mô hình chú cá, voi, sứa được cắm thẳng lên bãi biển, vô cùng công phu. Có thể nói mọi ngóc ngách ở đây đều là background cho bạn tha hồ chụp choẹt đấy nhé.Cùng chiêm ngưỡng những bức hình check in vô cùng tuyệt vời ở cổng trời bí mật, rồi note ngay lại cho chuyến du lịch Phú Quốc sắp tới nào.',
                'thumbnail'=>'Congtroi1_dkfhrz,Congtroi2_u7js4r,Congtroi3_cwh43k,Congtroi4_d0qvbz,',
                'author'=>'Thanh Hà',
                'status'=>1,
                'created_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],[
                'id'=>8,
                'title'=>'Hôm nay 25/8/2020 là một ngày tuyệt vời để trải nghiệm thử một ngày làm ngư dân tại phú quốc.',
                'description'=>'Đa số du khách khi đến với Phú Quốc chỉ biết đến làng chài Hàm Ninh nổi tiếng mà vô tình bỏ qua những làng chài khác cũng bình yên và xinh đẹp không kém. Từ những cái tên quen thuộc như Cửa Cạn, Gành Dầu đến lạ lẫm như Rạch Tràm, Rạch Vẹm, những làng chài ở Phú Quốc luôn tạo cho du khách từng đặt chân đến một cảm giác thân thuộc khó tả.',
                'details'=>'1. Làng chài Hàm Ninh: Làng chài Hàm Ninh nằm trên bờ biển phía Ðông đảo, sau lưng là núi rừng, trước mặt là biển cả mênh mông. Biển Hàm Ninh ra xa vài trăm thước mà vẫn còn cạn. Khi nước ròng, bãi cát mênh mông chạy tít ra xa, lúc nước lên, tràn ngập bãi, vào tận mé rừng. Ấn tượng đầu tiên khi đến mảnh đất này là bạn sẽ được chiêm ngưỡng ngọn núi Hàm Ninh cao 300m. Đá chồng đá, dựng đứng rêu phong tạo nên một vùng mây khói hòa giữa màu xanh của núi rừng và biển trời mênh mông Phú Quốc. Chiều về trên bãi Hàm Ninh, bạn có thể ngắm biển xanh, phía xa xa là quần đảo Hải Tặc, hòn Nghệ thấp thoáng trong làn nước biển. Nếu một lần đến đây bạn đừng quên chọn mua những con ghẹ Hàm Ninh nổi tiếng chắc thịt còn tươi rói, đem hấp chấm muối tiêu vừa thưởng thức vừa ngắm biển Hàm Ninh đẹp rực rỡ nắng vàng. |
                2. Làng chài Cửa Cạn: Nằm ở phía Bắc và cách thị trấn Dương Đông khoảng 14 km, cách bãi Ông Lang một vài km là làng chài Cửa Cạn. Tại đây có rất nhiều những cây cầu gỗ chỉ cho phép người đi bộ và xe máy chạy qua. Tuy làng chài khá nhỏ nhưng nó vẫn có một số địa điểm cung cấp thức uống và thư giãn bên đường trước khi đi tới những bãi biển vắng vẻ phía Bắc đảo. Cuối phía Nam của làng cũng có một trạm xăng. Nếu bạn muốn tìm thêm sự phiêu lưu mạo hiểm hãy thử thuyết phục một chủ tàu bản địa mang theo bạn ra sông Cửa Cạn. Đó là một trong những cách tuyệt vời để tìm hiểu khung cảnh sinh hoạt hàng ngày của cư dân ven sông hay ngắm những con tàu lớn đánh bắt cá trở về sau những chuyến ra khơi nhiều ngày. Tại làng Cửa Cạn cũng có một cồn cát xinh đẹp nhưng bị cô lập ở phía Bắc ngôi làng, bạn có thể nhìn thấy nó từ con đường ven biển đi về phía Bắc đến Gành Dầu và bãi Dài. |
                3. Làng chài Gành Dầu: Gành Dầu là một làng chài tương đối nhỏ, tại đây bạn chỉ có thể tìm thấy những nguồn cung cơ bản cùng với xăng dầu, nước, vài món thực phẩm và còn có một tiệm cắt tóc nữa. Đến tham quan làng chài Gành Dầu bạn sẽ cảm nhận được lối sống bình dị vốn có từ trước của người dân Phú Quốc hay khung cảnh những con cá cơm được phơi nắng sẵn sàng đưa vào cơ sở sản xuất nước mắm, những đứa trẻ vui đùa quanh làng, những con thuyền đánh cá neo đậu trong bến thuyền. Đến làng chài Gành Dầu là nơi bạn có thể thấy rõ bờ biển Campuchia chỉ vài cách đó vài km. Gành Dầu là nơi sở hữu một vài bãi biển bình yên nhất đảo Phú Quốc, những bãi biển ở phía nam này không còn đóng cửa đối với du khách như trong quá khứ vài năm trước (trong thời kì chiến tranh chống Khmer đỏ nơi đây từng là địa điểm đóng quân của 50.000 quân nhân). Ở đây có nhà hàng Gió Biển cách làng chài khoảng 1 km và một nhà hàng nổi gần đó chuyên bán hải sản với giá vô cùng rẻ. |
                4. Làng chài Rạch Vẹm: Nằm ở phía Bắc đảo, Rạch Vẹm là một làng chài tương đối nhỏ, với 170 hộ dân, chủ yếu làm nghề chài lưới. Làng chài Rạch Vẹm cách thị trấn Dương Đông khoảng 20 km. Bạn có thể di chuyển đến đây bằng xe máy hoặc xe ô tô. Khung cảnh làng chài như một bức tranh hài hoà của thiên nhiên, có chút màu của biển, chút màu của trời, thêm chút mát lạnh của những cơn gió sẽ làm bạn thoải mái vô cùng. Chủ của nhà bè sẽ đưa bạn rời khỏi đất liền bằng chiếc ghe chài lưới. Sau 5 phút, bạn đã đứng trên nhà bè giữa biển trời mênh mông. Đứng trên cầu, bạn có thể ngắm nhìn những chú sao biển qua làn nước trong veo. Khi những bãi biển quá nổi tiếng của Phú Quốc làm bạn cảm thấy không còn gì mới mẻ thì Rạch Vẹm sẽ là nơi lý tưởng để bạn bè gặp nhau, cười đùa vui vẻ dưới một khung cảnh quá yên bình. |
                5. Làng chài Rạch Tràm: Hiện nay để đến được làng chài Rạch Tràm không phải điều dễ dàng vì đường khó tìm và khó đi. Tuy nhiên khi đã đến đây, bạn có thể tham gia vào hoạt động khám phá sông Rạch Tràm, bãi tắm núi Hàm Rồng với nhiều điều thú vị. Cùng con thuyền gỗ nhỏ với sự giúp sức của những mái chèo, bạn sẽ có cơ hội khám phá những nét đẹp hoang sơ của sông Rạch Tràm, với một bên là rừng Tràm trắng chen lẫn cây họ dầu và cây Sao, còn bên kia là rừng ngập mặn với những cây Cóc Đỏ lòa xòa trên mặt nước lá xanh sẫm, hoa đỏ từng chùm nổi lên trên đám vẹt và đước màu xanh nhạt mép sông. Đến ngã ba Bắc Cứu, bạn rẽ theo một trong hai nhánh của sông Rạch Tràm để len lỏi đến thượng nguồn, nơi rừng ngập mặn đã dần chuyển thành rừng mây gai, nhum, su ổi… Dừng mái chèo để có những phút đi bộ ngắm các loài phong lan rừng, tận mắt thấy trái bí kỳ nam đang lớn lên cùng tổ kiến và những trái mỏ quạ lủng lẳng trên những cành cổ thụ … là những trải nghiệm không thể nào quên khi đến với làng chài Rạch Tràm.',
                'thumbnail'=>'blog5_arzkeb,blog-detail_eeawt8,blog-detail1_c5mjtw,langchai_sxvzwq,langchai1_czkvxe,',
                'author'=>'Linh Linh',
                'status'=>1,
                'created_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],[
                'id'=>9,
                'title'=>'Với thời tiết hôm nay nên đi ăn gì tại Phú Quốc?',
                'description'=>'Đến với Phú Quốc nơi hòn đảo xinh đẹp, thích hợp cho nghỉ dưỡng thư thái nhất. Đi đôi với du lịch luôn là ẩm thực, vậy nên có những quán ăn vặt Phú Quốc nào ngon, ấn tượng cũng được đa phần các du khách quan tâm. Ăn vặt gì ngon tại Phú Quốc là chủ đề được quan tâm. Tuy đa dạng về quán ăn vặt ngon để phục vụ khách du lịch nhưng ấn tượng và đặc sắc thì không phải tất cả. Trong bài viết dưới đây, chúng tôi sẽ giới thiệu cho các bạn top đầu các quán ăn vặt Phú Quốc thú vị và nổi tiếng.',
                'details'=>'1.Bánh canh chả cá Phụng: Tại Phú Quốc có rất nhiều các cửa hàng bán bánh cá đa dạng và phong phú như bánh canh chả cá, bánh canh thịt lợn, vậy nhưng nổi tiếng nhất vẫn là quán bánh canh chả cá Phụng. Quán Phụng nằm gần Dinh Cậu, thị trấn Dương Đông, đã có tuổi đời từ rất lâu.Điều tạo nên sự đặc biệt cho bánh canh tại đây đó là chủ quán chỉ sử dụng cá thu tươi ngon do ngư dân đảo đánh bắt được vào sáng sớm. Bên cạnh cá thu được nấu tươi, quán còn bán cả cá thu chiên, tất cả đều được xếp vào một tô để thưởng thức. |
                2.Hủ tiếu hải sản Quốc Anh : Đến với Phú Quốc không thể không thử món hủ tiếu hải sản vang danh này. Muốn chuẩn vị nhất, phải đến quán Quốc Anh ở 74 Bạch Đằng, khu 1, thị trấn Dương Đông. Nước dùng được quán chế biến rất ngon, ăn vừa miệng.Hải sản của quán được chọn lọc kỹ càng nên vừa có vị ngọt, lại rất tươi, ăn nhiều mà không ngán. Quán Quốc Anh là một quán ăn vặt Phú Quốc đêm mở cửa đến tận 11h đêm và phục vụ rất nhanh chóng.|
                3.Bánh kẹo chỉ Phú Quốc: Bánh kẹo chỉ Phú Quốc là một món ăn đơn giản có thể được tìm thấy ở bất cứ đâu ttrong chợ đêm Dinh Cậu, ấy vậy mà nó lại là đặc sản ăn vặt Phú Quốc. Nguyên liệu làm bánh chỉ gồm kẹo chỉ, dừa nạo và bánh tráng. Kẹo được thắng từ đường được tạo màu, tạo mùi, sau đó được ăn kèm với dừa bào sợi, bánh tráng mỏng. Có thể nói, món ăn này chính là sự kết hợp giữa vị ngọt của đường, vị ngậy của dừa và dai giòn của bánh tráng. |
                4.Mực trứng nướng: Là một hòn đảo nổi tiếng với nhiều món hải sản độc đáo và ngon miệng nên đến Phú Quốc là phải thưởng thức ngay món mực trứng nướng.Mực sau khi được làm sạch sẽ được ướp với gia vị tầm khoảng 15 phút cho ngấm đều, sau đó thực khách khi dùng chỉ cần nướng trên bếp than hồng. Mực khi đã chín có màu vàng hấp dẫn, thân săn chắc, căng bóng, dậy mùi thơm hấp dẫn khiến thực khách khó lòng mà kìm lại được. |
                5.Kem cuộn Thái Lan: Là một quán ăn vặt Phú Quốc facebook rất có tiếng trên mạng xã hội, kem cuộn Thái Lan ở địa chỉ đường Võ Thị Sáu là một sự lựa chọn lý tưởng dành cho các tín đồ mê ăn đồ ăn vặt. Món kem độc đáo có nguồn góc từ Thái Lan này tạo nên sức hấp dẫn không chỉ bởi mùi vị mà còn bởi thực khách được chính mắt quan sát quá trình làm nên nó. Những người thợ làm kem vô cùng khéo léo và nhanh nhạy, tạo nên những chiếc kem cuộn nhiều lớp, có nhiều loại hương vị khác khau, mang đến vị man mát, ngọt thanh cho người thưởng thức. |
                6.Bánh Kéo Phú Quốc Thu Hiền: Bánh khéo Thu Hiền là một món ăn vặt Phú Quốc khó có thể chối từ. Bánh được chủ quán nặn từ bột mì với nhiều hương vị của nhân bánh như dừa, đậu xanh, khoai môn ; có độ ngọt vừa phải, ít béo, không gây cảm giác ngán. Kiểu dáng của bánh rất bắt mắt, ngộ nghĩnh cùng với hương vị thơm ngon sẽ đem đến cho thực khách cảm giác dễ chịu khi thưởng thức. Muốn ăn món ăn vặt Phú Quốc này, tìm ngay đến địa chỉ 47 đường 30/4 ngay thôi nào. |
                7.Bánh tráng nướng chợ Dinh Cậu: Đi dạo chợ đêm Dinh Cậu một vòng, rất nhiều thực khách đều bị hấp dẫn bởi món bánh tráng nướng tuy quen nhưng lại lạ này. Bánh tráng nướng trong chợ đêm Phú Quốc ăn giòn rụm, từng lớp bánh bao trọn lấy phần nhân gồm mỡ hành, hành băm nhuyễn, trứng và ruốc thịt được nướng trên than nóng hổi tạo nên mùi thơm rất hấp dẫn.Có lẽ chính vì lý do đó mà nhiều thực khách khi ghé qua đây đều cầm lòng không nổi trước món ăn vặt Phú Quốc này. Ốc gai Phú Quốc Hoài Thương. Nói đến đệ nhất ốc gai nướng Phú Quốc, phải kể tới quán Hoài Thương ở Bãi Khem. Ốc gai nướng có mùi vị thơm ngon độc đáo rất đặc trưng.Lời khuyên cho thực khách là trước khi ăn nên chọn những con vừa nướng chín tới, dùng chiếc tăm tre nhọn khều thịt ra, chấm với nước mắm được pha chua ngọt thì ngon hết biết. |
                8.Ốc gai Phú Quốc Hoài Thương: Nói đến đệ nhất ốc gai nướng Phú Quốc, phải kể tới quán Hoài Thương ở Bãi Khem. Ốc gai nướng có mùi vị thơm ngon độc đáo rất đặc trưng.Lời khuyên cho thực khách là trước khi ăn nên chọn những con vừa nướng chín tới, dùng chiếc tăm tre nhọn khều thịt ra, chấm với nước mắm được pha chua ngọt thì ngon hết biết. Thịt ốc có màu trắng đục, to bằng nửa ngón tay cái, cho vào miệng nhai từ từ sẽ cảm thấy vị béo, vừa dai dai, giòn giòn, hương vị được tẩm ướp đậm đà, vừa miệng ăn.Thịt ốc có màu trắng đục, to bằng nửa ngón tay cái, cho vào miệng nhai từ từ sẽ cảm thấy vị béo, vừa dai dai, giòn giòn, hương vị được tẩm ướp đậm đà, vừa miệng ăn. |',
                'thumbnail'=>'anvat_vr14ge,anvat1_kk1ixe,anvat2_yootmh,anvat3_mmicp4,anvat4_lc8zqo,anvat5_rfxz0x,anvat6_j6jleq,anvat7_pkyszr',
                'author'=>'Gia Bảo',
                'status'=>1,
                'created_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ],[
                'id'=>10,
                'title'=>'Có nên đi đến khu du lịch Hy Lạp cổ thu nhỏ vào hôm nay?',
                'description'=>'Ga cáp treo Hòn Thơm còn được gọi với cái tên khác là Nhà Ga An Thới, điểm xuất phát để đi cáp treo đến Hon Thom Nauture Park . Được mệnh danh là “Đấu trường La Mã” của Việt Nam, Ga An Thới gây ấn tượng với du khách bởi kiến trúc mang hơi thở “Địa Trung Hải” độc đáo. Ga An thới hứa hẹn là điểm check in cực “chất” cho du khách khi đi du lịch Phú Quốc..',
                'details'=>'Vị trí trong khu vui chơi giải trí  Sun World Hon Thom Nature Park, có một Hy Lạp thu nhỏ giữa lòng Phú Quốc này thực chất là ga An Thới .|
                 Tại đây không chỉ là một nhà ga thông thường mà đã biến hóa thành những công trình La-Mã cổ đại.Kiến trúc cổ kính, độc đáo và vô cùng hoành tráng chính là một số mỹ từ khi nhắc đến vẻ đẹp của nhà ga An Thới Phú Quốc. Nếu không tận mắt chứng kiến, bạn cũng không thể ngờ rằng ở Việt Nam lại xuất hiện một thiên đường Lã Mã lộng lẫy, cổ xưa và đẹp rụng rời đến thế. Chỉ cần đến đây là bạn có ngay hàng tá ảnh đẹp, sống ảo cực chất trên mạng xã hội.|
                 Ga Cáp Treo Hòn Thơm được xây dựng đậm chất kiến trúc La Mã cổ đại với những bức tường lát gạch ong đồ sộ, những mái vòm uốn lượn duyên dáng, những cảnh đổ nát “nhân tạo” đầy tính nghệ thuật. Nổi bật là những bức tượng đồng chiến binh khổng lồ, vô cùng uy nghi. Hứa hẹn mang đến một chuyến đi không thể tuyệt vời hơn.Bạn sẽ trãi nghiệm cáp treo Hòn Thơm được Unessco công nhận là cáp treo 3 dây vượt biển dài nhất thế giới. Với chiều dài hơn 7.899m, sẽ đưa du khách đi một hành trình kỳ thú trên cao. Ngắm nhìn toàn cảnh các quần đảo nhỏ trong tầm mắt 360 độ. Đắm mình vào vé đẹp của thiên nhiên, biển đảo, các tàu bè đánh bắt hải sản trên mặt biển thật đẹp làm sao.|
                 Không dừng ở đó, khi đến với SunWorld Hòn Thơm bạn và gia đình sẽ thấy sự hoành tráng của công viên nước Hòn Thơm, với tên gọi Aquatopia Water Park. Là một trong những công viên nước chủ đề hiện đại nhất Đông Nam Á. Hơn 20+ mạo hiểm dành cho người lớn và các em thiếu nhi.Sân Ga Cafe nằm trong khuôn viên ga đi cáp treo hòn thơm, là địa điểm thưởng thức ẩm thực mới nhất của Hon Thom Nature Park. Địa điểm hẹn lý tưởng, mang đến cho du khách những giây phút thư giãn thoải mái, dễ chịu khi vừa được đắm chìm  trong vẻ đẹp kiêu sa của đảo ngọc Phú Quốc.Đến với Sân Ga Cafe du khcsh sẽ hòa mình vào không gian thiên nhiên sống động, đồng thời chiêm ngưỡng vẻ đẹp mang phong cách Đại Trung Hải rực rỡ của Ga An Thới.Thời gian hoạt động hàng ngày từ 17:00 đến 22:00, phù hợp với mọi lứa tuổi từ trẻ em, thanh thiếu niên đến người trưởng thành. Ngoài các đồ uống thông thường, bạn còn thưởng thức cốc cafe chính hiệu được xay ra từ hạt cà phê nguyên chất, pha chế bằng máy chuyên dụng. Quán còn phục vụ một số món ăn nhẹ rất hấp dẫn như: Gà xiên que, cá viên trứng cút, nạc vai heo, bánh cake nhân chocalate.Bạn có thể đi bằng xe máy nếu muốn trãi nghiệm phượt, những cung đường xung quanh là rừng cây của xử đảo. Mất 40 phút từ trung tâm thị trấn Dương Đống đến nhà ga An Thới bằng xe máy. Còn nếu đi gia đình có trẻ em và người lớn tuổi thì bạn hãy bắt taxi hoặc tìm dịch vụ thuê xe du lịch, để đến ga cáp treo sẽ tiện lợi hơn. Khoảng 30 phút từ trung tâm thị trấn di chuyển bằng xe ôtô.',
                'thumbnail'=>'hylap1_pthyoc,hylap2_ocstqn,hylap3_kj3um7,hylap4_fmxg3k,',
                'author'=>'Theo nguồn luonlophuquoc.com',
                'status'=>1,
                'created_at' => Carbon::now()->addDays(-1)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->addDays(0)->format('Y-m-d H:i:s'),
            ]

        ]);
        if (env('DB_CONNECTION') == 'mysql') {
            \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
        }
    }
}
