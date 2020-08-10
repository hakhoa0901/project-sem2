@extends('user.layouts.master')

@section('content')
    <div class="login">
        <div class="wrap">
            <ul class="breadcrumb breadcrumb__t"><a class="home" href="#">Trang chủ</a>  / Quyền riêng tư</ul>
            <h5 class="m_6">Quyền riêng tư</h5>
            <p class="m_text" style="color: black"><h1>1. Mục đích thu thập thông tin cá nhân :</h1></p>
            <br>
            <p class="m_text">Việc thu thập thông tin của khách hàng nhằm liên hệ với khách khi khách gửi yêu cầu dịch vụ, sản phẩm về email công ty.</p>
            <p class="m_text">Thông tin website yêu cầu khách hàng cung cấp bao gồm: họ tên, số điện thoại liên lạc, địa chỉ, email.</p>
            <h5 class="m_6">Customer information protection policy</h5>
            <p class="m_text" style="color: black"><h1>2. Phạm vi sử dụng thông tin:</h1></p>
            <br>
            <pre class="m_text" style="color: #777777">Website Farello.com.vn sử dụng thông tin khách hàng cung cấp để:

 Sử dụng để xác nhận đặt hàng khi khách có nhu cầu mua bất kỳ sản phẩm nào trên website;
 Dùng để gửi thông báo, thực hiện các chương trình quảng cáo, PR cho các dịch vụ mới được sử dụng trên website;
 Dùng để phân tích xu hướng tiêu dùng của khách hàng, với mục đích xây dựng những dịch vụ mới, hoặc cải thiện những dịch vụ cũ.
 Dùng để liên lạc với khách hàng khi chúng tôi tổ chức khuyến mại, trao đổi ý kiến thông tin trên bảng đánh giá, bình luận.
 Dùng để trả lời các thắc mắc của khách hàng: chúng tôi sẽ trả lời khách hàng bằng email, điện thoại, hoặc gửi thư tới địa chỉ của thành viên, khi khách hàng thắc mắc.</pre>
            <p class="m_text" style="color: black"><h1>3. Thời gian lưu trữ thông tin:</h1></p>
            <br>
            <p class="m_text">Dữ liệu cá nhân của khách sẽ được lưu trữ trong quá trình bán sản phẩm cho khách và sẽ bị hủy khi có yêu cầu từ khách hàng­.</p>
            <p class="m_text" style="color: black"><h1>4. Địa chỉ của đơn vị thu thập và quản lý thông tin cá nhân:</h1></p>
            <br>
            <pre class="m_text" style="color: #777777">Địa chỉ: 8 Tôn Thất Thuyết, Mỹ Đình, Từ Liêm, Hà Nội.

Điện thoại: 0866588098

Email: khoaphth1907037@dpt.edu.vn</pre>
            <p class="m_text" style="color: black"><h1>5. Những người hoặc tổ chức có thể được tiếp cận với thông tin đó;</h1></p>
            <br>
            <p class="m_text">Ban quản trị;</p>
            <p class="m_text">Nhân viên của công ty TNHH THƯƠNG MẠI VÀ DỊCH VỤ LILY GROUP VIỆT NAM</p>
            <p class="m_text">Bên thứ ba có dịch vụ tích hợp với Website Leo Shop</p>
            <p class="m_text" style="color: black"><h1>6. Phương tiện và công cụ để người dùng tiếp cận và chỉnh sửa dữ liệu cá nhân của mình</h1></p>
            <br>
            <p class="m_text">Thông tin của khách được thu thập qua email của công ty nơi khách hàng dùng để liên hệ yêu cầu sản phẩm dịch vụ. Khi khách có nhu cầu thay đổi thông tin cá nhân thì vui lòng liên hệ địa chỉ mail khoaphth1907037@fpt.edu.vn</p>
            <p class="m_text">Khách hàng có quyền gửi khiếu nại nếu có nghi ngờ về việc lộ thông tin cá nhân cho ban quản trị website. Ban quản trị website phải có trách nhiệm tiếp nhận và giải quyết khiếu nại của khách hàng.</p>
            <p class="m_text" style="color: black"><h1>7.   Cam kết bảo mật thông tin cá nhân khách hàng:</h1></p>
            <br>
            <p class="m_text">Chúng tôi vô cùng coi trọng việc bảo mật thông tin của quý khách, vì vậy chúng tôi xin cam kết sẽ không tự ý sử dụng thông tin khách hàng mà không có sự cho phép, cam kết không buôn bán, trao đổi cho bên thứ ba (ngoại trừ trường hợp phải cung cấp tên, địa chỉ khách cho bên giao hàng).</p>
            <p class="m_text">Bảo mật tuyệt đối thông tin giao dịch, hóa đơn chứng từ của khách trên website.</p>
            <p class="m_text">Khách hàng chịu hoàn toàn trách nhiệm về mặt pháp lý đối với những thông tin khách hàng đã cung cấp trên Farello.vn. Chúng tôi sẽ không chịu trách nhiệm nếu có tranh chấp xảy ra sau này khi những thông tin ban đầu của khách hàng cung cấp là không chính xác.</p>
            <p class="m_text" style="color: black"><h1>8. Cơ chế tiếp nhận và giải quyết khiếu nại liên quan đến việc thông tin của người tiêu dùng</h1></p>
            <br>
            <p class="m_text">Khi phát hiện thông tin cá nhân của mình bị sử dụng sai mục đích hoặc phạm vi, người tiêu dùng gửi email khiếu nại đến email: contact@farello.vn hoặc gọi điện thoại tới số 0921.389.986 để khiếu nại và cung cấp chứng cứ liên quan tới vụ việc cho ban quản trị. Ban quản trị cam kết sẽ phản hồi ngay lập tức hoặc muộn nhất là trong vòng 24 giờ làm việc kể từ thời điểm nhận được khiếu nại.</p>
            <p class="m_text"style="color: black">Staff of Leo Shop</p>
        </div>
    </div>
@endsection
