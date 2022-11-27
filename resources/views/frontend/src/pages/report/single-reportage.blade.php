@extends('frontend.layout.app')
@section('content')
    <style>
        .back-pos {
            position: absolute;
            right: 0;
            top: 3px;
        }
    </style>


    <div class="container my-3 d-block d-lg-none">
        <a href="{!! url('/reportage') !!}" class="backButton">
            <svg height="14px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 66.87 124.75"><defs><style>.cls-1{fill:#b3b3b3;}</style></defs><path class="cls-1" d="M367.43,186.85l58.1-58.12a4.27,4.27,0,0,1,6,0l.25.26a4.26,4.26,0,0,1,0,6L380,186.85a4.26,4.26,0,0,0,0,6l51.83,51.84a4.26,4.26,0,0,1,0,6l-.25.25a4.26,4.26,0,0,1-6,0l-58.11-58.12A4.26,4.26,0,0,1,367.43,186.85Z" transform="translate(-366.19 -127.49)"/></svg>
            @lang('reportazh_back.report')
        </a>
    </div>

    <div>
        <div class="container my-0 my-xl-5">
            <div class="row">
                <div class="col-12 position-relative" style="display: flex;align-items: flex-end;flex-wrap: wrap;align-content: flex-end">
                <div class="col-12 position-relative" style="display: flex;align-items: flex-end;flex-wrap: wrap;align-content: flex-end">

                    <!-- BACK BUTTON AT IMAGE VIEW LEVEL -->

                    <a href="{!! url('/reportage') !!}" class="backButton back-pos d-none d-lg-block">
                        <svg height="14px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 66.87 124.75"><defs><style>.cls-1{fill:#b3b3b3;}</style></defs><path class="cls-1" d="M367.43,186.85l58.1-58.12a4.27,4.27,0,0,1,6,0l.25.26a4.26,4.26,0,0,1,0,6L380,186.85a4.26,4.26,0,0,0,0,6l51.83,51.84a4.26,4.26,0,0,1,0,6l-.25.25a4.26,4.26,0,0,1-6,0l-58.11-58.12A4.26,4.26,0,0,1,367.43,186.85Z" transform="translate(-366.19 -127.49)"/></svg>
                        @lang('text.reportazh_back')
                    </a><br /><br /><br /><br />


                    <h2 class="bio-text" style="font-weight: 500;width: 100%">{{$reportage->name[session('lang') != '' ? session('lang') : 'al']}}</h2>
                    <p class="bio-text my-2" style="font-size: 17px;">{!! $reportage->description[session('lang') != '' ? session('lang') : 'al'] !!}</p>
                </div>
                <div class="col-12 mt-5">
                    <div class="row">
                        <div>
                            <!-- Slider main container -->
                            @if($reportage->gallery != null && count($reportage->gallery) > 0)
                            <div class="swiper swiper--eager">
                                <div class="swiper-wrapper">
                                    @foreach($reportage->gallery as $gallery)
                                        <div class="swiper-slide">
                                            <a href="/reportage/{{$reportage->id}}/gallery/{{$gallery->id}}" class="text-decoration-none cardboard">
                                                <div class="mini-card" style="background: url('{{ asset('uploads/reportage/'.$gallery->reportage_id.'/'.$gallery->image) }}') center no-repeat;background-size: contain;"></div>
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                                @include('frontend.layout.left_arrow')
                                @include('frontend.layout.right_arrow')
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        let swiper = new Swiper(".swiper--eager", {
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
                '1600': {
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
            on: {
                // LazyLoad swiper images after swiper initialization
                afterInit: (swiper) => {
                    new LazyLoad({
                        container: swiper.el,
                        cancel_on_exit: false
                    });
                }
            }
        });
    </script>
@endsection
