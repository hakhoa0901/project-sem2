@extends('user.layouts.master')

@section('content')
    <div class="login">
        <div class="wrap">
            <ul class="breadcrumb breadcrumb__t"><a class="home" href="/">Trang chủ</a>  / Liên hệ</ul>
            <div class="section group">
                <div class="labout span_1_of_about">
                    <iframe src="https://docs.google.com/forms/d/e/1FAIpQLScKZotbJvEXplwzVEGRUq0iY-iss8x-vmS-oVILA-ZMQibzSQ/viewform?embedded=true" height="1000px" width="500px" frameborder="0" marginheight="0" marginwidth="0">Đang tải…</iframe>
                    </div>
                </div>
                <div class="cont span_2_of_about">
                    <h3>Dịch vụ</h3>
                    <pre>Nhằm giúp quý khách an tâm chọn lựa cho mình một sản phẩm và phục vụ khách hàng chu đáo,
Leo Shop gửi đến quý khách hàng CHÍNH SÁCH BẢO HÀNH VÀ ĐỔI TRẢ SẢN PHẨM chi tiết sau:

        Chúng tôi cam kết chế độ hậu mãi tốt nhất Việt Nam khi bảo hành trọn đời và đổi trả sản phẩm không cần lý do trong 30 ngày
        Quý khách có thể đổi sản phẩm mới trong vòng 30 ngày sau khi nhận được hàng mà không cần lí do.
        Lưu ý : Khi đổi gọng kính đã cắt mắt, chúng tôi chỉ hỗ trợ giảm 50% giá trị gọng kính mới có cắt mắt tương tự.
        Chúng tôi áp dụng chính sách bảo hành trọn đời cho tất cả sản phẩm gọng kính và tròng kính.

        Chính sách hủy đơn hàng và đổi trả sản phẩm
        Quý khách có thể đổi sản phẩm mới trong vòng 30 ngày sau khi nhận được hàng mà không cần lí do. Trong khoảng thời gian này,
        quý khách cần giữ sản phẩm và tất cả phụ kiện kèm theo còn nguyên vẹn và chưa qua sử dụng.  Sau khi xác nhận đổi hoặc trả sản phẩm, quý khách vui lòng gửi
        lại sản phẩm cho chúng tôi qua bưu điện hoặc tại cửa hàng trong vòng 7 ngày kể từ khi xác nhận đổi trả.
        Quý khách có thể hủy đơn hàng trước khi sản phẩm được vận chuyển. Vui lòng thông báo cho chúng tôi qua hotline: 0866588098
        Số tiền mà quý khách đã thanh toán trước khi đặt hàng sẽ được hoàn trả cho quý khách trong vòng 1-3 ngày.
        Nếu quý khách không có nhu cầu đổi sang sản phẩm khác, chúng tôi sẽ hoàn trả lại toàn bộ số tiền của đơn hàng (không bao gồm phí vận chuyển .
        Với trường hợp đơn hàng có cắt mắt kính, chúng tôi sẽ hỗ trợ hoàn trả lại 50% giá trị của đơn hàng). Trong trường hợp đổi sang sản phẩm có giá trị cao hơn,
        quý khách vui lòng thanh toán thêm khoản chênh lệch giữa 2 sản phẩm.
        Chúng tôi sẽ không hỗ trợ hoàn trả số tiền chênh lệch nếu quý khách đổi sang sản phẩm có giá trị thấp hơn.
                    </pre>

                    <h5 class="m_6">Thành Viên</h5>
                    <div class="section group">
                        <div class="col_1_of_about-box span_1_of_about-box">
                            <h4 class="m_7" style="color: black">Nguyễn Văn Đạt</h4>
                            <p> sđt : 0376285297</p>
                            <p> email :datnvth1907029@fpt.edu.vn</p>
                        </div>
                        <div class="col_1_of_about-box span_1_of_about-box">
                            <h4 class="m_7" style="color: black">Phạm Hà Khoa</h4>
                            <p>sđt: 0866588098</p>
                            <p>email: hakhoa7s1@gmail.com</p>
                        </div>
                        <div class="col_1_of_about-box span_1_of_about-box">
                            <h4 class="m_7" style="color: black">Doãn Văn Dũng</h4>
                            <p>sđt : 034.7095.217</p>
                            <p>email :ddung13701@gmail.com</p>
                        </div>
                        <div class="clear"></div>

                    </div>
                    <!-- Add fancyBox main JS and CSS files -->
                    <script src="/user/js/jquery.magnific-popup.js" type="text/javascript"></script>
                    <link href="/user/css/magnific-popup.css" rel="stylesheet" type="text/css">
                    <script>
                        $(document).ready(function() {
                            $('.popup-with-zoom-anim').magnificPopup({
                                type: 'inline',
                                fixedContentPos: false,
                                fixedBgPos: true,
                                overflowY: 'auto',
                                closeBtnInside: true,
                                preloader: false,
                                midClick: true,
                                removalDelay: 300,
                                mainClass: 'my-mfp-zoom-in'
                            });
                        });
                    </script>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
@endsection
