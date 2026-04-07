@extends('layout')
@section('title', 'Câu Chuyện')
@section('content')
    <div class="bean-story">
        <div class="bean-story-title"> CÂU CHUYỆN HẠT CÀ PHÊ</div>

        @foreach($beanstory as $be)
            <div class="bean-story-conten">
                <img src="{{ asset($be['image']) }}" alt="" class="bean-story-img">
                <div class="bean-story-info">
                    <span class="bean-story-name">{{ $be['name'] }}</span>
                    <span class="bean-story-origin">Nguồn Gốc : {{ $be['origin'] }}</span>
                    <span class="bean-story-decription">Mô Tả : {{ $be['notes'] }}</span>
                </div>
            </div>
        @endforeach
    </div>
@endsection