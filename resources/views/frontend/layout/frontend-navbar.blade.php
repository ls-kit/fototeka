<nav class="navbar header-part">
    <div class="container-fluid container">
        <span class="logo-title-part">
              <a class="navbar-brand" href="/">
                <img class="image-logo" src="{!! url('/uploads/settings/'.$mainSettings->settings['logoWhite']) !!}">
            </a>
            <a class="navbar-brand ml-5" href="/">
                <p class="header-text-part m-0">
                    <span class="header-title" style="font-family: 'Arial', sans-serif;">{!! $mainSettings->settings['title'] !!}</span> <br>
                    <span class="header-subtitle" style="font-family: 'Arial', sans-serif;color: #cfcfcf"></span>
                </p>
            </a>
        </span>
        <div id="navbarNav">
            <nav class="navbar navbar-dark">
                <div class="toggle-container ">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </nav>
            <div class="collapse customCollapse" id="navbarToggleExternalContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item hiddeAboveMobile" >
                        <a href="#" style="height: 40px" class="nav-link"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{Request::is('/') ? 'customActive':''}}" aria-current="page"
                           href="/">@lang('text.home')</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{Request::is('category') ? 'customActive':''}}" href="/category">@lang('text.tema')</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{Request::is('about') ? 'customActive':''}}" href="/about">@lang('text.about')</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{Request::is('authors-list') ? 'customActive':''}}"
                           href="/authors-list">@lang('text.authors')</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{Request::is('collection') ? 'customActive':''}}"
                           href="/collection">@lang('text.collection')</a>
                    </li>
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link {{Request::is('section') ? 'active':''}}"--}}
{{--                           href="/section">@lang('text.section')</a>--}}
{{--                    </li>--}}
                    <li class="nav-item">
                        <a class="nav-link {{Request::is('reportage') ? 'customActive':''}}" href="/reportage">@lang('text.report')</a>
                    </li>
                    <li class="nav-item dropdown more-margin">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                           aria-expanded="false">
                            @if(session('lang')=='al')
                                <span class="cart-count top--6 text-theme-1">GJUHA</span>
                            @else
                                <span class="cart-count top--6 text-theme-1">LANGUAGE</span>
                            @endif
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/changeLanguage/en">EN</a></li>
                            <li><a class="dropdown-item" href="/changeLanguage/al">AL</a></li>
                        </ul>
                    </li>
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link {{Request::is('search') ? 'active':''}}" href="/search">@lang('text.search')</a>--}}
{{--                    </li>--}}
                </ul>
            </div>
        </div>
    </div>
</nav>

{{--<script type="text/javascript">--}}
{{--    $(document).ready(function() {--}}
{{--        $('select[name=language]').change(function() {--}}
{{--            var lang = $(this).val();--}}
{{--            window.location.href = "{{ route('changeLanguage') }}?language="+lang;--}}
{{--        });--}}
{{--    });--}}
{{--</script>--}}
