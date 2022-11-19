<!doctype html>
<html lang="al">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="/assets/frontend/favicon1.png" type="image/x-icon"/>
    <title>{{ config('app.name', 'Arkiva') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('/assets/js/scripts.js') }}" defer></script>
    <script src="{{ asset('/assets/js/disableMouseRightClick.js') }}" defer></script> <!-- Mouse Right Click Disable + controller -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type='text/css'
          href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css">


    <!-- Styles -->
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/custom.css') }}" rel="stylesheet">
    <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>


    <!-- Selection Color to Yellow -->
    <style>
        ::-moz-selection { /* Code for Firefox */
            background: yellow;
        }

        ::selection {
            background: yellow;
        }
    </style>
</head>
<body>
<div id="app">
    @include('frontend.layout.frontend-navbar')

    <main class="min-full-height">
        @yield('content')
    </main>
    @if(Route::current()->getName() == 'home')
        @include('frontend.layout.frontend-footer')
    @else
        @include('frontend.layout.frontend-footer2')
    @endif
</div>


<!-- Scripts -->
<script src="http://code.jquery.com/jquery-1.11.2.min.js" type="text/javascript"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}" defer></script>
</body>
</html>
