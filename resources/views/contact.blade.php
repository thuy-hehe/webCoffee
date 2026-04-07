@extends('layout')
@section('title', 'Contact')
@section('content')
    <div class="contact">
        <div class="contact-title">HÃY LIÊN HỆ VỚI CHÚNG TÔI</div>
        <div class="contact-content">
            <div class="contact-info">
                <p>
                    <i class="fa-solid fa-location-dot"></i>
                    08-Ngô Văn Sở,TP Đà Nẵng
                </p>
                <p>
                    <i class="fa-solid fa-phone-volume"></i>
                    0359399329
                </p>
                <p>
                    <i class="fa-solid fa-envelope-open"></i>
                    Tanphuyen78@gmail.com
                </p>
            </div>

            <div class="contact-form">
                <form action="">
                    <div class="contact-form-row">
                        <div class="contact-form-cols contact-form-cols2">
                            <input type="text" placeholder="Tên của bạn" class="contact-form-input">
                        </div>

                        <div class="contact-form-cols contact-form-cols2">
                            <input type="text" placeholder="Số Điện Thoại" class="contact-form-input">
                        </div>
                    </div>
                    <div class="contact-form-row contact-form-mt8">
                        <div class="contact-form-cols contact-form-colsfull">
                           <input type="text" placeholder="Thắc Mắc Của Bạn ?" class="contact-form-input">
                        </div>
                        
                    </div>
                    <input type="submit" value="Gửi" class="contact-form-btn">

                </form>
            </div>
        </div>
    </div>
@endsection