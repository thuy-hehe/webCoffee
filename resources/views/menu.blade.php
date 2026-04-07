@extends('layout')
@section('title', 'Menu')
@section('content')
    <!-- start product -->
    <div class="productview">
        <span class="productview-title menu-title"> SẢN PHẨM CỦA CHÚNG TÔI</span>

        @foreach($drinks as $category => $item)
            <span class="category-name">{{ $category }}</span>
            <div class="grid">
                <div class="grid-row">
                    @foreach($item as $dr)
                        <div class="gird-row-4-4 productviewitem">
                            <a href="{{ url('/item/' . $dr['id']) }}" class="productviewitem-link">
                                <div class="productviewitem-new">
                                    <img src="{{ asset($dr['image']) }}" alt="" class="productview-img">
                                    <div class="productview-info">
                                        <span class="productview-name">{{ $dr['name'] }}</span>
                                        <span class="productview-price">{{ $dr['price'] }}</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
    <!-- end product -->
@endsection

