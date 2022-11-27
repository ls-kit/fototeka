@extends('frontend.layout.app')
@section('content')
    <style>
        .back-pos {
            position: absolute;
            right: 18px;
            top: 25px;
        }
    </style>
    <div class="container">
        <div class="row">
            <div class="col-12 my-4 d-block d-lg-none">
                <a href="{!! url('/authors-list') !!}" class="backButton">
                    <svg height="14px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 66.87 124.75"><defs><style>.cls-1{fill:#b3b3b3;}</style></defs><path class="cls-1" d="M367.43,186.85l58.1-58.12a4.27,4.27,0,0,1,6,0l.25.26a4.26,4.26,0,0,1,0,6L380,186.85a4.26,4.26,0,0,0,0,6l51.83,51.84a4.26,4.26,0,0,1,0,6l-.25.25a4.26,4.26,0,0,1-6,0l-58.11-58.12A4.26,4.26,0,0,1,367.43,186.85Z" transform="translate(-366.19 -127.49)"/></svg>
                    @lang('text.autoret_back')
                </a>
            </div>
            <div class="col-12">
                <div>
                    <div class="row">
                        <div class="col-12 col-md-3">
                            <div class="card ms-0" style="background: url('{{ asset("uploads/author/$authors->image") }}') left no-repeat;background-size: contain;height: 45vh;width: 100%; box-shadow: none"></div>
                        </div>
                        <div class="col-12 col-md-9 position-relative" style="display: flex;align-items: flex-end;flex-wrap: wrap;align-content: flex-end">
                            <a href="{!! url('/authors-list') !!}" class="backButton back-pos d-none d-lg-block">
                                <svg height="14px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 66.87 124.75"><defs><style>.cls-1{fill:#b3b3b3;}</style></defs><path class="cls-1" d="M367.43,186.85l58.1-58.12a4.27,4.27,0,0,1,6,0l.25.26a4.26,4.26,0,0,1,0,6L380,186.85a4.26,4.26,0,0,0,0,6l51.83,51.84a4.26,4.26,0,0,1,0,6l-.25.25a4.26,4.26,0,0,1-6,0l-58.11-58.12A4.26,4.26,0,0,1,367.43,186.85Z" transform="translate(-366.19 -127.49)"/></svg>
                                @lang('text.autoret_back')
                            </a>
                            <h2 class="bio-text" style="font-weight: 600;margin-top: 10px;width:100%;">{{$authors->name}} {{$authors->last_name}}</h2>
                            <p class="bio-text collectionParagraph" style="margin-top: 30px;margin-bottom: 0;">
                                {!! substr($authors->biography[session('lang') != '' ? session('lang') : 'al'],0,445) !!}
                                <a href="{!! url('/author/'.$authors->id.'/details') !!}" class="read_more">
                                    @lang('text.read_more')
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
                <div style="margin: 50px 0;">
                    <div class="col-12">
                        @if($authors->gallery != null && count($authors->gallery)>0)
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                @foreach($authors->gallery as $item)
                                    <div class="swiper-slide">
                                        <a href="/author/{!! $authors->id !!}/gallery/{{$item->id}}" class="text-decoration-none cardboard">
                                            <div class="mini-card" style="background: url('{{ asset("uploads/author/$authors->id/$item->image") }}') center no-repeat;background-size: contain;"></div>
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
    <div class="bottom-height"></div>
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
        });
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
