@extends('frontend.layout.app')
@section('content')
    <style>
        .mySwiperImages {
            /* width: 375px; */
            /* height: 482px; */
            margin: 0;
            margin-bottom: 30px;
        }
        .paragraphsInColumns  {
            column-count: 3;
            column-gap: 50px;
        }
        .paragraphsInColumns p {
            font-size: 16px;
            color: rgba(0,0,0,0.4);
            text-align: justify;
        }
        .mySwiperImages,
        .mySwiperImages .swiper-slide img {
            width: 100%;
            height: 445px;
            object-fit: contain;
            object-position: top left;
        }
        @media (min-width: 1921px) {
            .mySwiperImages,
            .mySwiperImages .swiper-slide img {
                width: 100%;
                height: 100%;
            }
        }
        @media (max-width: 1299px) {
            .mySwiperImages .card,
            .mySwiperImages {
                width: 100% !important;
            }
        }
        @media (min-width: 768px) and (max-width: 991px) {
            .mySwiperImages,
            .mySwiperImages .swiper-slide img {
                height: 26vw;
            }
        }
        @media (min-width: 992px) and (max-width: 1199px) {
            .mySwiperImages,
            .mySwiperImages .swiper-slide img {
                height: 30vw;
            }
        }
        @media (max-width: 767px) {
            .paragraphsInColumns  {
                column-count: inherit;
                column-gap: inherit;
            }
            .paragraphsInColumns p {
                text-align: left;
            }
            .mySwiperImages,
            .mySwiperImages .swiper-slide img {
                height: 80vw;
                object-position: center;
            }
        }
    </style>
    <div class="container">


        <!-- BACK BUTTON AT IMAGE VIEW LEVEL -->
        <div class="row">
            <div class="col-12 my-4">
                <a href="{!! url()->previous() !!}" class="backButton">
                    <svg height="14px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 66.87 124.75"><defs><style>.cls-1{fill:#b3b3b3;}</style></defs><path class="cls-1" d="M367.43,186.85l58.1-58.12a4.27,4.27,0,0,1,6,0l.25.26a4.26,4.26,0,0,1,0,6L380,186.85a4.26,4.26,0,0,0,0,6l51.83,51.84a4.26,4.26,0,0,1,0,6l-.25.25a4.26,4.26,0,0,1-6,0l-58.11-58.12A4.26,4.26,0,0,1,367.43,186.85Z" transform="translate(-366.19 -127.49)"/></svg>
                            @lang('text.autoret_single_back')
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-12 paragraphsInColumns">
                <div class="mySwiperImages swiper">
                    <div class="swiper-wrapper">

                    <!--
                        <div class="swiper-slide" style="border: 1px solid white;">
                            <img src='{{ asset("uploads/author/$authors->image") }}' alt="img">
                        </div>
                    -->

                        @if($authors->images != null)
                            @foreach($authors->images as $image)
                            <div class="swiper-slide">
                                <img src='{{ asset("uploads/author/$image") }}' alt="img">

                            </div>
                            @endforeach
                        @endif
                    </div>
                </div>
                <p>{!! $authors->biography[session('lang') != '' ? session('lang') : 'al'] !!}</p>
            </div>
        </div>

    </div>

@endsection

@section('scripts')
    <script>
        let swiper2 = new Swiper(".mySwiperImages", {
            slidesPerView: 1,
            spaceBetween: 1,
            slidesPerGroup: 1,
            loop: true,
            autoplay: {
                delay: 8000,
            },
            loopFillGroupWithBlank: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>
@endsection
