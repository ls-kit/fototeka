@extends('frontend.layout.app')
@section('content')
    <style>
        .pra1 {
            font-size:20px;
            margin-bottom: 30px;
            column-count: 2;
            column-gap: 60px;
        }
        @media (max-width: 767px) {
            .pra1 {
                column-count: 1;
                word-break: break-all;
            }
        }
    </style>
    <div class="container pb-100 bio-text mt-60 mt-5">
        <div class="row">
            <div class="col-12" style="margin-bottom: 60px;">
                <div class="mySwiperImages d_md_none" style="height: 450px;width: 100%;overflow: hidden">
                    <div class="swiper-wrapper">
                        @if($pageSettings['images'] != null)
                            @foreach($pageSettings['images'] as $image)
                                <div class="swiper-slide" style="height: 450px;width: 100%">
                                    <div  style="background: url('{{ asset("uploads/settings/$image") }}') center no-repeat;background-size: cover;width: 100%;height: 100%"></div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
                <div class="mySwiperImagesMob d_desk_none" style="height: 450px;width: 100%;overflow: hidden">
                    <div class="swiper-wrapper">
                        @if($pageSettings['mobile-images'] != null)
                            @foreach($pageSettings['mobile-images'] as $image)
                                <div class="swiper-slide" style="height: 450px;width: 100%">
                                    <div  style="background: url('{{ asset("uploads/settings/$image") }}') center no-repeat;background-size: cover;width: 100%;height: 100%"></div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-12 ">
                <h2 class="mb-5" style="font-weight: 600">{!! $pageSettings['title'] !!}</h2>
                <p class="pra1">
                    {!! $pageSettings['description'] !!}
                </p>
            </div>
            <div class="col-12 col-sm-6 col-md-6">
                <h5 class="mb-3">{!! $pageSettings['address'] !!}</h5>
            </div>
            <div class="col-12 col-sm-6 col-md-6 page-setting-email">
                <h5>{!! $pageSettings['email'] !!}</h5>
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
        let swiper3 = new Swiper(".mySwiperImagesMob", {
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
