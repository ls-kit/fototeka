@extends('frontend.layout.app')
@section('content')
    <style>
        @media (max-width: 767px) {
            .height1 {
                background-size: contain;
            }
            /* display block */
            .swiper-pagination{
                display: block !important;
            }
        }
    </style>
    <div class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cardContainer height1">
                    <!-- Slider main container -->
                    <div class="swiper mySwiper custom-slide">
                        <div class="swiper-wrapper">
                            @foreach($posts as $item)
                                <div class="swiper-slide">
                                    <a href="/collection_details/{{$item->id}}" class="text-decoration-none">
                                        <div class="card card1 height1" style="background: url('{{ asset("uploads/post/$item->image") }}') center no-repeat;background-size: cover">
                                            <h3 class="author-name" style="text-align: left;bottom: 15px;position: absolute;color: white !important; font-size: 16px;"> {{$item->title[session('lang') != '' ? session('lang') : 'al']}} </h3>
                                            <h3 class="author-name" style="bottom: 0;position: absolute;color: rgba(255,255,255,0.4) !important; font-size: 12px;"> ({{ $item->original_date }})</h3>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-pagination" style="display:none"></div>
                        @include('frontend.layout.left_arrow')
                        @include('frontend.layout.right_arrow')
                    </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        let swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 1,
            slidesPerGroup: 1,
            loop: true,
            loopFillGroupWithBlank: true,
            breakpoints: {
                '480': {
                    slidesPerView: 1,
                    spaceBetween: 40,},
                '720': {
                    slidesPerView: 2,
                    spaceBetween: 50, },
                '1080': {
                    slidesPerView: 3,
                    spaceBetween: 50, },
                '1400': {
                    slidesPerView: 4,
                    spaceBetween: 50, },
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
@endsection
