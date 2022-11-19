<!doctype html>
<html lang="al">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="/assets/frontend/favicon1.png" type="image/x-icon"/>
    <title>{!! $mainSettings->settings['title'] !!}</title>

    <!-- Scripts -->
    <script src="{{ asset('/assets/js/scripts.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type='text/css'
          href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css">
    <!-- Styles -->
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/custom.css') }}" rel="stylesheet">
    <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Roboto+Slab&display=swap" rel="stylesheet">
</head>
<body >
<div id="app" style="font-family: 'Roboto', sans-serif !important;">
    @if(Route::current()->getName() == 'home')
        @include('frontend.layout.frontend-navbar')
    @else
        @include('frontend.layout.frontend-navbar-others')
    @endif

        @if(Route::current()->getName() == 'home')
            <main class="min-full-height" >
        @else
            <!-- <main class="min-full-height" style="display: flex; align-content: center; justify-content: center;"> -->
            <main class="min-full-height">
        @endif
        @yield('content')
    </main>
    @if(Route::current()->getName() == 'home')
        @include('frontend.layout.frontend-footer')
    @endif
</div>
<script>
    (function (){
        let singleImgDesc = document.querySelectorAll('.bio-text-images')
        singleImgDesc.forEach(i=>{
            i.innerText = i.innerText.replaceAll('.,',',')
            i.innerText = i.innerText.replaceAll('""','')
            i.innerText = i.innerText.replaceAll('“”','')
            i.innerText = i.innerText.replaceAll('”“','')
            i.innerText = i.innerText.replaceAll(' ,',',')
	        i.innerText = i.innerText.replaceAll(',,',',')
	        i.innerText = i.innerText.replaceAll(',,',',')
	        i.innerText = i.innerText.replaceAll('x,','')
        })
    })()
</script>
<!-- Scripts -->
<script src="//code.jquery.com/jquery-1.11.2.min.js" type="text/javascript"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
@yield('scripts')
</body>
</html>
