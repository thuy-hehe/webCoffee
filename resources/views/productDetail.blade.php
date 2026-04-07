@extends('layout')
@section('title', 'Chi Tiết Sản Phẩm')
@section('content')
    <div class="contact-title productDetail-title">CHI TIẾT SẢN PHẨM</div>
    <div class="productDetail">
        <div class="productDetail-image">
            <img src="{{ asset($item['image']) }}" alt="" class="productDetail-img">
        </div>
        <div class="productDetail-content">
            <span class="productDetail-name">{{ $item['name'] }}</span>
            <span class="productDetail-decripsion">{{ $item['description'] }}</span>
            <div class="productDetail-price">
                <span class="productDetail-pri">{{ $item['price'] }}</span>
                <div class="productDetail-commnet">
                    <i class="fa-solid fa-star productDetail-star"></i>
                    <i class="fa-solid fa-star productDetail-star"></i>
                    <i class="fa-solid fa-star productDetail-star"></i>
                    <i class="fa-solid fa-star productDetail-star"></i>
                    <i class="fa-solid fa-star productDetail-star1"></i>
                </div>
            </div>

            <div class="productDetail-button">
                <a href="{{ asset('/menu') }}" class="productDetail-button-back">TRỞ LẠI</a>
                <i class="fa-solid fa-heart productDetail-love"></i>
            </div>
        </div>
    </div>
@endsection