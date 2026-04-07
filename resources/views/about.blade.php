@extends('layout')

@section('title', 'Giới Thiệu')
@section('content')
    <div class="about">
        <div class="about-content">
            <div class="about-conten1">
                <span class="about-conten1-title">VỀ CHÚNG TÔI</span>
                <span class="about-conten1-name">gemini coffee</span>
                <span class="about-conten1-decripsicon">Được hình thành từ 2013, Gemini Coffee với hơn 10 năm kinh nghiệm trong ngành Cà Phê. Là đơn vị sản xuất và kinh doanh cà phê tiên phong trong nghiên cứu và phát triển các dòng sản phẩm cà phê sức khỏe ở Việt Nam, định hình chuỗi cà phê tích hợp đa dạng tiện ích nhưng vẫn mang hơi hướng của phong cách kiến trúc truyền thống, tạo không gian cà phê độc đáo mà gần gũi thân thuộc, nơi mọi người kết nối và sẻ chia, nơi chúng tôi tôn vinh và lan tỏa văn hóa cà phê Việt.</span>
                <a href="{{ asset('/') }}" class="about-conten1-trangchu">gemini coffee</a>
            </div>
            <div class="about-conten2">
                <div class="about-conten2-list">
                    <span class="about-conten2-name1">Trải qua hơn</span>
                    <span class="about-conten2-name2">10 năm</span>
                    <span class="about-conten2-name3">hình thành và phát triển</span>
                </div>
    
                <div class="about-conten2-list">
                    <span class="about-conten2-name1">Gemini có mặt</span>
                    <span class="about-conten2-name2">08 tỉnh</span>
                    <span class="about-conten2-name3">thành phố toàn quốc</span>
                </div>
    
                <div class="about-conten2-list">
                    <span class="about-conten2-name1">Tổng số cửa hàng</span>
                    <span class="about-conten2-name2">50 +</span>
                    <span class="about-conten2-name3">trên cả nước</span>
                </div>
            </div>
        </div>

        <img src="{{ asset('image/3-mon.jpg') }}" alt="" class="about-conten-img">
    </div>

    <div class="about-info">
        <img src="{{ asset('image/annhquan.jpeg') }}" alt="" class="about-info-img">
        <div class="about-info-content">
            <span class="about-info-content-title">GIÁ TRỊ CỐT LÕI</span>
            <span class="about-info-content-name">Nâng tầm nông sản & giàu bản sắc việt</span>
            <span class="about-info-content-decripsion">Chúng tôi vận hành và phát triển hướng tới những nhân tố cốt lõi, không chỉ phục vụ KHÁCH HÀNG – ĐỐI TÁC, chúng tôi đang phục vụ cho những hạt CÀ PHÊ, duy trì những giá trị bền vững</span>
            <ul class="about-info-content-list">
                <li class="about-info-content-item">Sản phẩm cốt lõi khác biệt</li>
                <li class="about-info-content-item">Kết hợp tinh hoa nông sản việt và dược liệu thiên nhiên</li>
                <li class="about-info-content-item">Sự hòa quyện hoàn hảo giữa sắc vị và sức khỏe</li>
                <li class="about-info-content-item">Tận tâm trao gửi, lắng nghe và kết nối</li>
                <li class="about-info-content-item">Không đơn giản chỉ cà phê, đó còn là sức sống giàu bản sắc và văn minh.</li>
            </ul>
        </div>
    </div>

@endsection