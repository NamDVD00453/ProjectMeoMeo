<?php

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            'productName' => 'Cơm thịt ba chỉ rang cháy cạnh',
            'productDesc' => 'Cơm thịt ba chỉ rang cháy cạnh của MeoMeo Shop là một trong những món cực dễ ăn và đưa cơm. Món ăn này thưởng thức cùng dưa muối chua giữa mùa hè thì thật tuyệt vời hoặc ăn giữa tiết trời se … ',
            'productPrice' => '55.000',
            'categoryId' => 'Cơm',
            'img' => 'http://shipdoan.vn/uploads/2015/05/bachi-300x166.jpg',
            'status' => '1',
        ]);

        DB::table('products')->insert([
            'productName' => 'Cơm đùi gà sốt BBQ',
            'productDesc' => 'Với một chiếc đùi gà, có vô vàn món và cách chế biến khác nhau. Nhưng hôm nay, MeoMeo Shop xin giới thiệu đến quý khách món ăn mang một hương vị hoàn toàn khác chỉ sử dụng đùi gà chiên vàng, cộng với … ',
            'productPrice' => '60.000',
            'categoryId' => 'Cơm',
            'img' => 'https://vuakhuyenmai.vn/wp-content/uploads/2016/09/18-15.jpg',
            'status' => '1',
        ]);

        DB::table('products')->insert([
            'productName' => 'Cơm sườn sốt me',
            'productDesc' => 'Cơm sườn sốt me đang đã chinh phục hàng trăm thực khách của MeoMeo Shop, liệu bạn muốn có cơ hội thưởng thức món ăn tuyệt ngon này? Đừng bỏ lỡ cuộc gọi đến số 0988 380 600 để được phục vụ món … ',
            'productPrice' => '60.000',
            'categoryId' => 'Cơm',
            'img' => 'http://shipdoan.vn/uploads/2015/05/com-suon-sot-me-300x166.jpg',
            'status' => '1',
        ]);

        DB::table('products')->insert([
            'productName' => 'Cơm bò sốt tiêu đen',
            'productDesc' => 'Thịt bò xào với ớt Đà Lạt đã chinh phục được nhiều người sành ăn. Nhưng đầu bếp đã biến tấu một chút sốt tiêu đen sẽ làm nên điều mới lạ cho món ăn này. Ớt Đà Lạt mạng vị ngọt cũng như màu sắc độc đáo … ',
            'productPrice' => '60.000',
            'categoryId' => 'Cơm',
            'img' => 'http://comvanphong5sao.com/wp-content/uploads/2016/12/com-bo-sot-tieu-den-1.jpg',
            'status' => '1',
        ]);

        DB::table('products')->insert([
            'productName' => 'Cơm bò lúc lắc',
            'productDesc' => 'Cơm bò lúc lắc là món ăn rất ngon và được đầu bếp của ship đồ ăn đêm hà nội chế biến cẩn thận và cầu kỳ, hấp dẫn từ tên gọi đến vị ngon ngọt đậm đà của món ăn.Cơm được ăn với nước sốt hòa quyện cùng với … ',
            'productPrice' => '60.000',
            'categoryId' => 'Cơm',
            'img' => 'http://shipdoan.vn/uploads/2014/08/com-bo-luc-lac-31-300x166.jpg',
            'status' => '1',
        ]);

        DB::table('products')->insert([
            'productName' => 'Cơm gà sốt me',
            'productDesc' => 'Thêm cơm gà sốt me của MeoMeo Shop vào danh sách các món ăn ngon sẽ không bao giờ khiến bạn hối hận. Bát cơm trắng dẻo thơm sẽ hết vèo dù là giữa trưa hè nắng gắt bởi vị chua ngọt đậm … ',
            'productPrice' => '60.000',
            'categoryId' => 'Cơm',
            'img' => 'http://shipdoan.vn/uploads/2015/05/com-ga-sot-me-2-300x166.jpg',
            'status' => '1',
        ]);

        DB::table('products')->insert([
            'productName' => 'Cơm trắng',
            'productDesc' => 'Các bạn sẽ thấy ngạc nhiên nếu như trong thực đơn của ship đồ ăn đêm Hà Nội có món Cơm trắng, dễ hiểu thôi, chúng tôi là người yêu ẩm thực, vậy nên chúng tôi luôn mong muốn mang đến cho thực khách tất cả những … ',
            'productPrice' => '10.000',
            'categoryId' => 'Cơm',
            'img' => 'http://shipdoan.vn/uploads/2015/05/com-trang-2-300x166.jpg',
            'status' => '1',
        ]);

        DB::table('products')->insert([
            'productName' => 'Cơm đùi gà sốt chua ngọt',
            'productDesc' => 'Với cách chế biến phá cách vừa giữ lại nét truyền thống, vừa thể hiện cá tính riêng của ship đồ ăn đêm Hà Nội thì bất cứ thực khách nào đã từng nếm món cơm gà chua ngọt đều có những trải nghiệm thích thú. Nét … ',
            'productPrice' => '60.000',
            'categoryId' => 'Cơm',
            'img' => 'http://shipdoan.vn/uploads/2015/05/cgcn-300x166.jpg',
            'status' => '1',
        ]);

        DB::table('products')->insert([
            'productName' => 'Cơm rang gà quay',
            'productDesc' => 'Có bạn nào bận bịu mà không có thời gian để nghĩ tới bữa ăn của mình ? Dù nhiều tới đâu cũng đừng lơ là việc chăm xóc cho bản thân mình nhé. Nếu quá bận để chuẩn bị bữa trưa, Hãy nghĩ tới Ship đồ ăn … ',
            'productPrice' => '60.000',
            'categoryId' => 'Cơm',
            'img' => 'http://shipdoan.vn/uploads/2014/08/crgq2-300x166.jpg',
            'status' => '1',
        ]);

        DB::table('products')->insert([
            'productName' => 'Cơm gà rang gừng',
            'productDesc' => 'Cơm gà rang gừng của ship đồ ăn đêm Hà Nội không chỉ bổ dưỡng mà còn giúp cơ thể phục hồi năng lượng nhanh chóng bởi gà gừng đều là hai vị thuốc tốt cho cơ thể. Thịt gà có tác dụng phục hồi suy nhược, … ',
            'productPrice' => '55.000',
            'categoryId' => 'Cơm',
            'img' => 'http://shipdoan.vn/uploads/2015/05/com-ga-rang-gung-2-300x166.jpg',
            'status' => '1',
        ]);

        DB::table('products')->insert([
            'productName' => 'Cơm rang dưa bò',
            'productDesc' => 'Cơm rang dưa bò, món ăn ” đặc sản đường phố”. Bất cứ một quán cơm nào trên đường bạn đều có thể bắt gặp món ăn này trong thực đơn. Nhưng qua bàn tay đầu bếp chuyên nghiệp, bạn sẽ được thưởng thức món ăn tuyệt … ',
            'productPrice' => '45.000',
            'categoryId' => 'Cơm',
            'img' => 'http://shipdoan.vn/uploads/2014/08/crdb-300x166.jpg',
            'status' => '1',
        ]);

        DB::table('products')->insert([
            'productName' => 'Cơm sườn nướng BBQ',
            'productDesc' => 'Những món ngon, bổ, nhiều chất dinh dưỡng luôn là sự lựa chọn hàng đầu của mọi gia đình. Cơm sườn nướng BBQ là món ăn như thế, và ship đồ ăn đêm tại Hà Nội chúng tôi luôn sẵn lòng phục vụ món ăn ngon như … ',
            'productPrice' => '60.000',
            'categoryId' => 'Cơm',
            'img' => 'http://shipdoan.vn/uploads/2015/05/com-suon-nuong-2-300x166.jpg',
            'status' => '1',
        ]);

        DB::table('products')->insert([
            'productName' => 'Cơm sườn chua ngọt',
            'productDesc' => 'Cơn sườn chua ngọt, một món ăn gần gũi và thân thuộc đối với tất cả mọi người. Qua bàn tay chế biến của đầu bếp chuyên nghiệp khiến vị chua chua, ngọt ngọt tê đầu lưỡi làm cho món ăn phần cuốn hút. Cơm sườn chua ngọt … ',
            'productPrice' => '60.000',
            'categoryId' => 'Cơm',
            'img' => 'http://shipdoan.vn/uploads/2014/08/com-suon-chua-ngot-2-300x166.jpg',
            'status' => '1',
        ]);

        DB::table('products')->insert([
            'productName' => 'Cơm cánh gà chiên mắm',
            'productDesc' => 'Cơm cánh gà chiên mắm sẽ giúp bạn xóa tan cơn đói nhanh chóng chỉ sau cuộc gọi đặt món tại ship đồ ăn đêm Hà Nội. Bạn cần đồ ăn ngon rẻ, hợp vệ sinh chỉ cần gọi và hãy để chúng tôi đem món ăn … ',
            'productPrice' => '55.000',
            'categoryId' => 'Cơm',
            'img' => 'http://shipdoan.vn/uploads/2015/05/cgcm-300x166.jpg',
            'status' => '1',
        ]);

        DB::table('products')->insert([
            'productName' => 'Cơm rang thập cẩm',
            'productDesc' => 'Cơm rang thập cẩm, một món ăn hấp dẫn và cùng quen thuộc với khách hàng của MeoMeo Shop. Đây không chỉ là bữa ăn trưa đủ chất, không những thế cơm rang thập cẩm cũng là một món ăn đêm lí tưởng , … ',
            'productPrice' => '45.000',
            'categoryId' => 'Cơm',
            'img' => 'http://shipdoan.vn/uploads/2014/08/crtc-300x166.jpg',
            'status' => '1',
        ]);

        DB::table('products')->insert([
            'productName' => 'Cơm đùi gà Singapore',
            'productDesc' => 'Cơm đùi gà Singapore chỉ cần nhìn thôi đã thấy ngon mắt rồi. Theo đầu bếp của MeoMeo Shop, Đùi ga rán vàng với cơm được chế biến từ hai loại gạo Thái và Nhật. Phương pháp chế biến cũng cầu kì, theo … ',
            'productPrice' => '60.000',
            'categoryId' => 'Cơm',
            'img' => 'http://shipdoan.vn/uploads/2014/08/ga-25-a-300x166.jpg',
            'status' => '1',
        ]);

        DB::table('products')->insert([
            'productName' => 'Cơm đùi gà xào sả ớt',
            'productDesc' => 'Với một suất cơm đùi gà xào xả ớt của MeoMeo Shop là bạn đã có thể ngất ngây cái bụng vì cả chất và lượng của suất ăn. Chỉ cần nghĩ đến từng miếng thịt gà thơm lừng mùi sả và vị … ',
            'productPrice' => '55.000',
            'categoryId' => 'Cơm',
            'img' => 'http://shipdoan.vn/uploads/2015/05/com-ga-xa-ot-2-300x166.jpg',
            'status' => '1',
        ]);

        DB::table('products')->insert([
            'productName' => 'Cơm đùi gà nướng mật ong',
            'productDesc' => 'Cơm đùi gà nướng mật ong của MeoMeo Shop luôn hấp dẫn người ăn không chỉ bởi màu vàng nâu cực hấp dẫn của da gà mà ngay cả khứu giác của bạn cũng bị chinh phục với hương thơm ngọt ngào của … ',
            'productPrice' => '55.000',
            'categoryId' => 'Cơm',
            'img' => 'http://shipdoan.vn/uploads/2015/05/com-ga-nuong-mat-ong-2-300x166.jpg',
            'status' => '1',
        ]);

        DB::table('products')->insert([
            'productName' => 'Chân gà xả ớt',
            'productDesc' => 'Với vị chua chua, cay cay, mùi thơm của ớt và xả cùng độ giòn sần sật, món chân gà ngâm sả ớt sẽ khiến các bạn thấy đã nghiền trong những ngày đông lạnh. ',
            'productPrice' => '50.000',
            'categoryId' => 'Mì',
            'img' => 'http://shipdoan.vn/uploads/2017/08/cgxo-300x166.jpg',
            'status' => '1',
        ]);

        DB::table('products')->insert([
            'productName' => 'Xúc xích',
            'productDesc' => 'Xúc Xích là thực đơn luôn hot của ship đồ ăn Hà Nội. Ngày hè nóng nực, xúc xích của chúng tôi là đồ ăn tuyệt vời trên bàn nhậu của các thực khách thích lai rai uống bia. Nguồn cảm hứng bên bàn nhậu là bất … ',
            'productPrice' => '15.000',
            'categoryId' => 'Mì',
            'img' => 'http://shipdoan.vn/uploads/2015/05/xx-300x166.jpg',
            'status' => '1',
        ]);

        DB::table('products')->insert([
            'productName' => 'Phở xào gà',
            'productDesc' => 'Món ăn của MeoMeo Shop luôn cung cấp đầy đủ chất dinh dưỡng. Khi bạn ngán cơm thì sao không nếm thử món phở xào gà rau củ cực hấp dẫn nhỉ? Từng miếng thịt gà xé cùng với rau củ xào thơm … ',
            'productPrice' => '50.000',
            'categoryId' => 'Mì',
            'img' => 'http://shipdoan.vn/uploads/2015/05/pho-xao-ga-2-300x166.jpg',
            'status' => '1',
        ]);

        DB::table('products')->insert([
            'productName' => 'Khoai lang kén',
            'productDesc' => 'Giòn giòn KHOAI LANG KÉN ngon tuyệt dễ ăn ngay tại nhà Bùi bùi khoai lang bên trong vỏ ngoài giòn rụm, thả vào miệng tù tì liền mấy cái lun nhé <3 Gọi ngay 0988 380 600 để thưởng thức món ăn vặt cực đỉnh này … ',
            'productPrice' => '35.000',
            'categoryId' => 'Mì',
            'img' => 'http://shipdoan.vn/uploads/2017/10/khoai-300x166.jpg',
            'status' => '1',
        ]);

        DB::table('products')->insert([
            'productName' => 'Chân gà rang muối',
            'productDesc' => 'Hẳn là nhiều người trong chúng ta không lạ gì các món như chân gà nướng, chân gà chiên, chân gà luộc,… và không thể không kể đến món chân gà rang muối này. Chân gà rang muối có vỏ ngoài giòn, bên trong mềm và mùi … ',
            'productPrice' => '60.000',
            'categoryId' => 'Mì',
            'img' => 'http://shipdoan.vn/uploads/2017/11/cgrm-300x166.jpg',
            'status' => '1',
        ]);

        DB::table('products')->insert([
            'productName' => 'Cánh gà chiên mắm',
            'productDesc' => 'Cánh gà chiên nước mắm luôn là lựa chọn tuyệt vời trong thực đơn của các gia đình trong những ngày hè. Nhưng tiết trời nóng nực là thế, vào bếp thật khổ cho các bà nội trợ. Vậy thì hãy để Ship đồ ăn đêm Hà … ',
            'productPrice' => '45.000',
            'categoryId' => 'Mì',
            'img' => 'http://shipdoan.vn/uploads/2015/05/canh-ga-chien-nuoc-mam-300x166.jpg',
            'status' => '1',
        ]);

        DB::table('products')->insert([
            'productName' => 'Mỳ xào bò',
            'productDesc' => 'Chắc hẳn đã nhiều lần bạn được thưởng thức món mỳ xào bò, Nhưng cũng với món mỳ này tại MeoMeo Shop, đầu bếp đã khéo léo kết hợp đầy đủ các nguyên liệu và gia vị để tạo nên món mỳ này … ',
            'productPrice' => '50.000',
            'categoryId' => 'Mì',
            'img' => 'http://shipdoan.vn/uploads/2014/08/my-xao-bo-2-300x166.jpg',
            'status' => '1',
        ]);

        DB::table('products')->insert([
            'productName' => 'Phở xào bò',
            'productDesc' => 'Phở xào bò đặc biệt thơm ngon và hấp dẫn của MeoMeo Shop. Chỉ cần một suất thôi là đảm bảo bạn no căng bụng luôn. Đầu bếp đã khéo léo kết hợp giữa các nguyên liệu và gia vị để món Phở … ',
            'productPrice' => '50.000',
            'categoryId' => 'Mì',
            'img' => 'http://shipdoan.vn/uploads/2014/08/pho-xao-bo-2-300x166.jpg',
            'status' => '1',
        ]);

        DB::table('products')->insert([
            'productName' => 'Mỳ xào gà',
            'productDesc' => 'Mỳ xào gà- món ăn cung cấp đầy đủ tinh bột, protein cho cả gia đình, hiện đang trở thành cơn sốt trong ngành ẩm thực việt nói chung và đối với ship đồ ăn đêm Hà Nội nói riêng. Vậy lí do là gì? Món ăn … ',
            'productPrice' => '50.000',
            'categoryId' => 'Mì',
            'img' => 'http://shipdoan.vn/uploads/2015/05/mxg-300x166.jpg',
            'status' => '1',
        ]);

        DB::table('products')->insert([
            'productName' => 'Khoai tây chiên',
            'productDesc' => 'Khoai tây chiên vàng rộm, cắn dòn tan đã trở thành món ăn vặt được rất nhiều thực khách ưa chuộng. Khoai tây được tẩm ướp kỹ càng, chiên cẩn thận, đủ tầm chắc chắn sẽ làm vừa lòng những thực khách khó tính nhất. Thử tưởng … ',
            'productPrice' => '35.000',
            'categoryId' => 'Mì',
            'img' => 'http://shipdoan.vn/uploads/2014/08/khoai-tay-chien-5-300x166.jpg',
            'status' => '1',
        ]);

        DB::table('products')->insert([
            'productName' => 'Nem chua rán',
            'productDesc' => 'Nem chua rán – Món ăn vặt đã rất quen thuộc với rất nhiều bạn trẻ. Với cách chiên đặc biệt của đâug bếp MeoMeo Shop – Mìếng nem chiên cắn dòn tan, hòa quyện cùng tường ớt cay cay làm dậy lên … ',
            'productPrice' => '50.000',
            'categoryId' => 'Mì',
            'img' => 'http://shipdoan.vn/uploads/2014/08/nem-chua-ran-300x166.jpg',
            'status' => '1',
        ]);

        DB::table('products')->insert([
            'productName' => 'Pepsi',
            'productDesc' => 'Đã khát cùng Pepsi lon ướp lạnh chỉ 15k của MeoMeo Shop. ',
            'productPrice' => '15.000',
            'categoryId' => 'Đồ uống',
            'img' => 'http://shipdoan.vn/uploads/2015/05/pepsi-300x166.jpg',
            'status' => '1',
        ]);

        DB::table('products')->insert([
            'productName' => 'Nước tăng lực Redbull',
            'productDesc' => 'Nước uống tăng lực Bò húc – Redbull 20k đã được ướp lạnh. Gọi ngay cho ship đồ ăn đêm hà nội để thưởng thức tại nhà nhé ',
            'productPrice' => '20.000',
            'categoryId' => 'Đồ uống',
            'img' => 'http://shipdoan.vn/uploads/2015/05/redbull-300x166.jpg',
            'status' => '1',
        ]);

        DB::table('products')->insert([
            'productName' => 'Sting dâu',
            'productDesc' => 'Nước tăng lực Sting dâu ướp lạnh giá chỉ 15k tại MeoMeo Shop. Uống sting – thỏa sức tung hoành xuyên màn đêm ',
            'productPrice' => '15.000',
            'categoryId' => 'Đồ uống',
            'img' => 'http://shipdoan.vn/uploads/2015/05/sting-300x166.jpg',
            'status' => '1',
        ]);

        DB::table('products')->insert([
            'productName' => 'Nước suối – Lavie',
            'productDesc' => '',
            'productPrice' => '10.000',
            'categoryId' => 'Đồ uống',
            'img' => 'http://shipdoan.vn/uploads/2015/05/lavie-2-300x166.jpg',
            'status' => '1',
        ]);

        DB::table('products')->insert([
            'productName' => 'Nước cam – Twister',
            'productDesc' => 'Nước cam ép Twister ướp lạnh. mát lạnh sảng khoái, tha hồ thưởng thức món ăn tại Ship đồ ăn đêm hà nội ',
            'productPrice' => '15.000',
            'categoryId' => 'Đồ uống',
            'img' => 'http://shipdoan.vn/uploads/2015/05/nuoc-cam-300x166.jpg',
            'status' => '1',
        ]);

        DB::table('products')->insert([
            'productName' => 'Bia Hà nội',
            'productDesc' => 'Những lon bia hà nội mát lạnh đng chờ bạn thưởng thức cùng đồ ăn tuyệt ngon tại MeoMeo Shop. Gọi món ngay ',
            'productPrice' => '20.000 Đ',
            'categoryId' => 'Đồ uống',
            'img' => 'http://shipdoan.vn/uploads/2015/05/bia-300x166.jpg',
            'status' => '1',
        ]);

        DB::table('products')->insert([
            'productName' => 'Chân gà xả ớt',
            'productDesc' => 'Với vị chua chua, cay cay, mùi thơm của ớt và xả cùng độ giòn sần sật, món chân gà ngâm sả ớt sẽ khiến các bạn thấy đã nghiền trong những ngày đông lạnh. ',
            'productPrice' => '50.000',
            'categoryId' => 'Gọi thêm',
            'img' => 'http://shipdoan.vn/uploads/2017/08/cgxo-300x166.jpg',
            'status' => '1',
        ]);

        DB::table('products')->insert([
            'productName' => 'Cơm rang trứng',
            'productDesc' => 'Đơn giản và dân dã nhưng món cơm rang trứng lại được rất nhiều người yêu thích và dùng như một bữa chính trong ngày. Với những đơn hàng liên tiếp đặt món ăn này, MeoMeo Shop thì niềm tin của chúng tôi … ',
            'productPrice' => '30.000',
            'categoryId' => 'Gọi thêm',
            'img' => 'http://shipdoan.vn/uploads/2015/05/com-rang-trung-2-300x166.jpg',
            'status' => '1',
        ]);

        DB::table('products')->insert([
            'productName' => 'Cánh gà chiên xù',
            'productDesc' => 'Chỉ cần nghĩ đến vị giòn tan của món cánh gà chiên xù cũng đủ để nhiều người ứa nước miếng. Lớp áo bột vàng ươm thích mắt cùng với vị thịt mềm ngọt tự nhiên chỉ có thể tìm thấy ở thực phẩm tươi sống. Và … ',
            'productPrice' => '45.000',
            'categoryId' => 'Gọi thêm',
            'img' => 'http://shipdoan.vn/uploads/2015/05/canh-xu-300x166.png',
            'status' => '1',
        ]);

        DB::table('products')->insert([
            'productName' => 'Cánh gà rang muối',
            'productDesc' => 'Nhiều người đã quen thuộc với món gà chiên nhưng lại rất ít người đã từng có cơ hội thưởng thức món gà rang muối. Đặc biệt với cách làm muối rang trứ danh của MeoMeo Shop thì nhiều thực khách đã mê … ',
            'productPrice' => '45.000',
            'categoryId' => 'Gọi thêm',
            'img' => 'http://shipdoan.vn/uploads/2015/05/canh-ga-rang-muoi-2-300x166.jpg',
            'status' => '1',
        ]);

        DB::table('products')->insert([
            'productName' => 'Đùi gà sốt me',
            'productDesc' => 'Đùi gà sốt me sẽ là một lựa chọn cực thích hợp trong thời tiết oi nóng của ngày hè. MeoMeo Shop sẽ mang đến cho bạn một phong vị hoàn toàn mới cực hấp dẫn bằng vị chua dịu, cay ngọt của … ',
            'productPrice' => '50.000',
            'categoryId' => 'Gọi thêm',
            'img' => 'http://shipdoan.vn/uploads/2015/05/dui-ga-sot-me-2-300x166.jpg',
            'status' => '1',
        ]);

        DB::table('products')->insert([
            'productName' => 'Đùi gà rán',
            'productDesc' => 'Đùi gà rán của ship đồ ăn đêm Hà Nội là món ăn vặt trứ danh. Lớp da gà vàng ươm, thích mắt, giòn tan sẽ khiến bạn mê mẩn ngay từ miếng đầu tiên. Và tuyệt vời hơn nữa là bạn cùng gia đình sẽ được … ',
            'productPrice' => '45.000',
            'categoryId' => 'Gọi thêm',
            'img' => 'http://shipdoan.vn/uploads/2015/05/dui-ga-ran-2-300x166.jpg',
            'status' => '1',
        ]);

        DB::table('products')->insert([
            'productName' => 'Đùi gà nướng mật ong',
            'productDesc' => 'Ai đã từng một lần thưởng thức món đùi gà nướng mật ong do ship đồ ăn đêm Hà Nội phục vụ thì khó có thể quên được. Lớp da gà vàng óng với mùi thơm hấp dẫn và vị đậm đà của gia vị ngấm đều … ',
            'productPrice' => '45.000',
            'categoryId' => 'Gọi thêm',
            'img' => 'http://shipdoan.vn/uploads/2015/05/dgn-300x166.jpg',
            'status' => '1',
        ]);

        DB::table('products')->insert([
            'productName' => 'Bò sốt tiêu đen',
            'productDesc' => 'Được các đầu bếp của ship đồ ăn đêm Hà Nội chế biến cẩn thận và chuyên nghiệp, món bò sốt tiêu đen đã làm siêu lòng biết bao người yêu ẩm thực, họ yêu món ăn rồi biến món ăn này thành món không thể thiếu … ',
            'productPrice' => '50.000',
            'categoryId' => 'Gọi thêm',
            'img' => 'http://shipdoan.vn/uploads/2015/05/bo-sot-tieu-den-2-300x166.jpg',
            'status' => '1',
        ]);

        DB::table('products')->insert([
            'productName' => 'Sườn xào chua ngọt',
            'productDesc' => 'Sườn xào chua ngọt là món ăn kèm được rất nhiều thực khách ưa chuộng. Từ những nguyên liệu đặc biệt, đầu bếp của MeoMeo Shop đã khéo léo kết hợp để tạo nên hương vị đặc biệt cho món ăn. Chính vì … ',
            'productPrice' => '50.000',
            'categoryId' => 'Gọi thêm',
            'img' => 'http://shipdoan.vn/uploads/2014/08/suon-xao-chua-ngot-300x166.jpg',
            'status' => '1',
        ]);

        DB::table('products')->insert([
            'productName' => 'Khoai lang kén',
            'productDesc' => 'Giòn giòn KHOAI LANG KÉN ngon tuyệt dễ ăn ngay tại nhà Bùi bùi khoai lang bên trong vỏ ngoài giòn rụm, thả vào miệng tù tì liền mấy cái lun nhé <3 Gọi ngay 0988 380 600 để thưởng thức món ăn vặt cực đỉnh này … ',
            'productPrice' => '35000',
            'categoryId' => 'Gọi thêm',
            'img' => 'http://shipdoan.vn/uploads/2017/10/khoai-300x166.jpg',
            'status' => '1',
        ]);

        DB::table('products')->insert([
            'productName' => 'Đùi gà rang gừng',
            'productDesc' => 'Những tín đồ mê đồ ăn ship không thể nào bỏ qua được món đùi gà rang gừng của ship đồ ăn đêm Hà Nội. Bởi món ăn này không chỉ cuốn hút người ăn bởi hương vị hấp dẫn mà còn cực an tâm với giá … ',
            'productPrice' => '50.000',
            'categoryId' => 'Gọi thêm',
            'img' => 'http://shipdoan.vn/uploads/2015/05/dui-ga-rang-gung-2-300x166.jpg',
            'status' => '1',
        ]);

        DB::table('products')->insert([
            'productName' => 'Đùi gà sả ớt',
            'productDesc' => 'Mùi sả ớt thơm lừng kích thích hệ thần kinh vị giác khiến bất cứ ai cũng phát thèm khi nghĩ đến món đùi gà sả ớt của Ship đồ ăn đêmHà Nội. Sau một cuộc gọi điện là món ăn này đã xuất hiện trên mâm … ',
            'productPrice' => '50.000',
            'categoryId' => 'Gọi thêm',
            'img' => 'http://shipdoan.vn/uploads/2015/05/dui-ga-sa-ot-2-300x166.jpg',
            'status' => '1',
        ]);

        DB::table('products')->insert([
            'productName' => 'Đùi gà chiên Singapore',
            'productDesc' => 'Đùi gà chiên Singapore đặc biệt của MeoMeo Shop. Chắc hẳn bạn đã từng thưởng thức rất nhiều những món ăn được chế biến từ đùi gà, nhưng bạn đã được thưởng thức món ăn chế biến từ gà mang hương vị Singapore … ',
            'productPrice' => '50.000',
            'categoryId' => 'Gọi thêm',
            'img' => 'http://shipdoan.vn/uploads/2014/08/dui-sing-300x166.jpg',
            'status' => '1',
        ]);

        DB::table('products')->insert([
            'productName' => 'Cánh gà chiên mắm',
            'productDesc' => 'Cánh gà chiên nước mắm luôn là lựa chọn tuyệt vời trong thực đơn của các gia đình trong những ngày hè. Nhưng tiết trời nóng nực là thế, vào bếp thật khổ cho các bà nội trợ. Vậy thì hãy để Ship đồ ăn đêm Hà … ',
            'productPrice' => '45.000',
            'categoryId' => 'Gọi thêm',
            'img' => 'http://shipdoan.vn/uploads/2015/05/canh-ga-chien-nuoc-mam-300x166.jpg',
            'status' => '1',
        ]);

        DB::table('products')->insert([
            'productName' => 'Đùi gà sốt chua ngọt',
            'productDesc' => 'Đùi gà sốt chua ngọt là một trong những món được nhiều người ưa thích nhất của MeoMeo Shop. Và bạn chắc chắn sẽ yêu thích món ăn này khi đã một lần nếm thử. Đùi gà sốt chua ngọt- Ship đồ ăn … ',
            'productPrice' => '50.000',
            'categoryId' => 'Gọi thêm',
            'img' => 'http://shipdoan.vn/uploads/2015/05/dui-ga-chua-ngot-2-300x166.jpg',
            'status' => '1',
        ]);

        DB::table('products')->insert([
            'productName' => 'Bò lúc lắc',
            'productDesc' => 'Vị thơm ngọt của rượu vang quyện trong nước sốt của món bò lúc lắc của MeoMeo Shop khiến người ăn khó mà quên được khi đã từng thưởng thức. Chỉ có chế biến từ nguyên liệu thịt tươi mới có thể tạo … ',
            'productPrice' => '50.000',
            'categoryId' => 'Gọi thêm',
            'img' => 'http://shipdoan.vn/uploads/2015/05/bo-luc-lac-2-300x166.jpg',
            'status' => '1',
        ]);

        DB::table('products')->insert([
            'productName' => 'Đùi gà chiên xù',
            'productDesc' => 'Đùi gà chiên xù – Món ăn nhanh đã hấp dẫn rất nhiều thực khách của MeoMeo Shop. Những chiếc đùi gà tươi được đầu bếp tẩm ướp kỹ càng, chiên vàng trong dầu mang lại hương vị hấp dẫn không thể chối … ',
            'productPrice' => '50.000',
            'categoryId' => 'Gọi thêm',
            'img' => 'http://shipdoan.vn/uploads/2015/05/gg-300x166.jpg',
            'status' => '1',
        ]);

        DB::table('products')->insert([
            'productName' => 'Đùi gà sốt BBQ',
            'productDesc' => 'Bạn đã bao giờ được thưởng thức món Đùi gà sốt BBQ với nước sốt đặc biệt mà chỉ cần thưởng thức một lần là không bao giờ quên chưa ? Đầu bếp của MeoMeo Shop đã đặc biệt khéo léo đã kết … ',
            'productPrice' => '50.000',
            'categoryId' => 'Gọi thêm',
            'img' => 'http://shipdoan.vn/uploads/2014/08/dui-ga-bbq-2-300x166.jpg',
            'status' => '1',
        ]);

        DB::table('products')->insert([
            'productName' => 'Trứng ốp',
            'productDesc' => 'Trứng ốp với kĩ thuật cách tân của ship đồ ăn đêm hà Nội xứng đáng là niềm mong đợi của mọi người. Với sự đổi mới trong cách kết hợp nguyên liệu, chúng tôi đã cho ra đứa con tinh thần đẹp mắt, đầy đủ chất … ',
            'productPrice' => '10.000',
            'categoryId' => 'Gọi thêm',
            'img' => 'http://shipdoan.vn/uploads/2015/05/trung-op-2-300x166.jpg',
            'status' => '1',
        ]);

        DB::table('products')->insert([
            'productName' => 'Sườn sốt me',
            'productDesc' => 'Món sườn sốt me có vị chua ngọt thanh dịu thấm đượm vào từng miếng sườn vàng ươm thơm ngậy của MeoMeo Shop sẽ khiến bạn khó chối từ. Đây chính là món ăn cực hấp dẫn không hề bị ngán trong những … ',
            'productPrice' => '50.000',
            'categoryId' => 'Gọi thêm',
            'img' => 'http://shipdoan.vn/uploads/2015/05/suonmee-300x166.jpg',
            'status' => '1',
        ]);

        DB::table('products')->insert([
            'productName' => 'Kim chi cải thảo',
            'productDesc' => 'Kim chi cải thảo là món ăn kèm quen thuộc và đặc trưng của người Hàn Quốc, tuy nhiên cùng với sự giao lưu và hội nhập của các nền văn hóa trên thế giới, dần dần món ăn này đã được “ Việt hóa” và làm hấp … ',
            'productPrice' => '20.000',
            'categoryId' => 'Hàn Quốc',
            'img' => 'http://shipdoan.vn/uploads/2014/08/kim-chi-300x166.jpg',
            'status' => '1',
        ]);

        DB::table('products')->insert([
            'productName' => 'Cơm rang kim chi – Bokkeumbap',
            'productDesc' => 'Cơm rang kim chi – Món ăn mang phong cách mới lạ đến từ Hàn Quốc. Với biến tấu một chút của MeoMeo Shop, các bạn sẽ được thưởng thức món ăn Cơm rang tuyệt ngon mang cả hai phong cách Việt Nam … ',
            'productPrice' => '55.000',
            'categoryId' => 'Hàn Quốc',
            'img' => 'http://shipdoan.vn/uploads/2014/08/com-rang-kim-chi-300x166.jpg',
            'status' => '1',
        ]);

        DB::table('products')->insert([
            'productName' => 'Bánh gạo Hàn Quốc – Tteokbokki',
            'productDesc' => 'Bánh gạo Hàn Quốc Tteokbokki là món khoái khẩu của bạn và cả gia đình, nhưng giữa trăm nghìn cái bận, bạn lấy đâu ra thời gian? Giải pháp nhanh gọn, gọi ship đồ ăn đêm, bạn sẽ không phải vất vả nữa, không phải nghĩ sắp … ',
            'productPrice' => '40.000',
            'categoryId' => 'Hàn Quốc',
            'img' => 'http://shipdoan.vn/uploads/2015/05/banh-gao-2-300x166.jpg',
            'status' => '1',
        ]);

        DB::table('products')->insert([
            'productName' => 'Sườn nướng Hàn Quốc',
            'productDesc' => 'Món Sườn nướng kiểu Hàn Quốc hấp dẫn. Đầu bếp của MeoMeo Shop đã khéo léo kết hợp những gia vị đặc biệt tạo nên hương vị đặc biệt hấp dẫn cho món ăn mang hương vị Hàn Quốc này. Thử tưởng tượng … ',
            'productPrice' => '50.000',
            'categoryId' => 'Hàn Quốc',
            'img' => 'http://shipdoan.vn/uploads/2014/08/suon-nuong-han-quoc-300x166.jpg',
            'status' => '1',
        ]);
    }
}
