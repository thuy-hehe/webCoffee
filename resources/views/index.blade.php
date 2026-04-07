@extends('layout');

@section('title', 'Trang Chủ')
@section('content')
    <!-- start slider -->
    <div class="slider">
        <div class="myslider">
            <img src="{{ asset('image/slide1.jpg') }}" alt="" class="slider-img">
            <div class="silder-text">Cà Phê Nguyên Chất</div>
        </div>
        <div class="myslider">
            <img src="{{ asset('image/slide2.jpg') }}" alt="" class="slider-img">
            <div class="silder-text">Thơm Ngon Sánh Mịn</div>
        </div>
        <!--  onclick="plusSlides(1) gọi hàm javascrip plusSlides để thay đổi 
          chỉ số slide -->
        <a  class="slise-next" onclick="plusSlides(1)">></a>
        <a  class="side-prev" onclick="plusSlides(-1)"><</a>
        
    </div>
    <!-- end slide -->

    <!-- start welcome -->
    <div class='welcome' style='background: url("{{ asset("image/image.jpg") }}") top center / cover no-repeat;'>
        <div class="welcome-content">
            <div class="welcome-name">NẾU BẠN TRAO CHÚNG TÔI NIỀM TIN <br> CHÚNG TÔI SẼ TRAO BẠN CHỮ TÍN</div>
            <div class="welcome-lienhe">HÃY GỌI CHÚNG TÔI</div>
            <div class="welcome-hottel">
                <span class="hottel-name">HOTLINE:</span>
                <span class="hottel-number"> 0966 245 068  – 0931 399 626</span>
            </div>
        </div>
        <div class="welcome-img">
            <img src="{{ asset('image/coffeeTransparentjpg-removebg-preview.png') }}" alt="" class="welcome-background">
        </div>
    </div>
    <!-- end welcome -->

    <!-- start product -->
    <div class="productview">
        <span class="productview-title"> SẢN PHẨM CỦA CHÚNG TÔI</span>
        <div class="grid">
            <div class="grid-row">
                <div class="grid-row-3-3 productviewitem">
                    <div class="productviewitem-new">

                        <img src="{{ asset('image/coffeeLatte.jpg') }}" alt="" class="productview-img">
                        <div class="productview-info">
                            <span class="productview-name">Tinh Vân Latte</span>
                            <span class="productview-price">55.000 đ</span>
                        </div>
                    </div>
                </div>

                <div class="grid-row-3-3 productviewitem">
                    <div class="productviewitem-new">

                        <img src="{{ asset('image/americano.jpg') }}" alt="" class="productview-img">
                        <div class="productview-info">
                            <span class="productview-name">Hố Đen Americano</span>
                            <span class="productview-price">45.000 đ</span>
                        </div>
                    </div>
                </div>

                <div class="grid-row-3-3 productviewitem">
                    <div class="productviewitem-new">

                        <img src="{{ asset('image/coldbrew.jpg') }}" alt="" class="productview-img">
                        <div class="productview-info">
                            <span class="productview-name">Vũ Trụ Cold Brew</span>
                            <span class="productview-price">60.000 đ</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end product -->

    <!-- start information -->
    <div class="infomation">
        <ul class="infomation-list">
            <li class="infomation-item">
                <img src="{{ asset('image/ship.png') }}" alt="" class="infomation-img">
                <div class="infomation-block">
                    <span class="infomation-name">Giao hàng tận nhà</span>
                    <spam class="infomation-title">Free ship nội thành</spam>
                </div>
            </li>
            <li class="infomation-item">
                <img src="{{ asset('image/thHieu.png') }}" alt="" class="infomation-img">
                <div class="infomation-block">
                    <span class="infomation-name">Uy tín lâu năm</span>
                    <spam class="infomation-title">Thương hiệu độc quyền</spam>
                </div>
            </li>
            <li class="infomation-item">
                <img src="{{ asset('image/cf.png') }}" alt="" class="infomation-img">
                <div class="infomation-block">
                    <span class="infomation-name">Sản phẩm chất lượng</span>
                    <spam class="infomation-title">Hương vị tuyệt vời</spam>
                </div>
            </li>
            <li class="infomation-item">
                <img src="{{ asset('image/tuVan.png') }}" alt="" class="infomation-img">
                <div class="infomation-block">
                    <span class="infomation-name">Tư vấn trực tuyến</span>
                    <spam class="infomation-title">Tư vấn hỗ trợ khách hàng</spam>
                </div>
            </li>
        </ul>
    </div>
    <!-- end information -->
    <script>
        let chiSo=1; // tạo biến toàn cục lưu chỉ số slide
        showSlide(chiSo);

        function plusSlides(n){//hàm sử lí việc người người dùng nhấn vào <>
            showSlide(chiSo+=n);//cập nhật giao diện
        }

        function showSlide(n){
            let i;
            let slide = document.getElementsByClassName('myslider')// lấy danh sách các ảnh
            if(n > slide.length){// nếu mà n vượt qua số ảnh thì quay về ảnh đầu tiên
                chiSo = 1;
            }
            if(n < 1){// nếu n bé hơn số ảnh thì quay về ảnh cuối
                chiSo = slide.length;
            }
            for(i=0 ; i < slide.length ; i++){// ẩn tất cả các ảnh
                slide[i].style.display = 'none';
            }
            slide[chiSo-1].style.display = 'block';//hiển thị slide hiện tại 
        }
        // tạo chuyển động sau mỗi 2s
        setInterval(()=>{plusSlides(1)}, 2000)
    </script>
@endsection