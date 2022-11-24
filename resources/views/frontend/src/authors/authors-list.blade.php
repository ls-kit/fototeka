@extends('frontend.layout.app')
@section('content')

    <style>

        @media (max-width: 767px) {
            .height1 {
                background-size: contain !important;
            }
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
                                @foreach($authors as $author)
                                    <div class="swiper-slide">
                                        <a href="/author/{{$author->id}}" class="text-decoration-none ">
                                            <div class="card card1 height1" style="background: url('{{ asset("uploads/author/$author->image") }}') center no-repeat;background-size: cover">
                                                <h3 class="author-name" style="bottom: 35px;position: absolute;color: white !important; font-size: 16px;"> {{$author->name}} {{$author->last_name}}</h3>
                                                @if($author->age_from != null && $author->age_to != null)
                                                    <h3 class="author-name" style="bottom: 20px;position: absolute;color: rgba(255,255,255,0.8) !important; font-size: 12px;font-weight: bold">
                                                        ({!! $author->age_from !!} - {!! $author->age_to !!})
                                                    </h3>
                                                @endif
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

    <!-- <div class="bottom-height"></div> -->
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
                    spaceBetween: 40,
                },
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
