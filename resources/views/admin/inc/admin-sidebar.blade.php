<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Settings</div>

                <a class="nav-link {{ Request::is('') ? 'collapse active' : 'collapsed'  }}" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Tema
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link {{ Request::is('admin/add-category') ? 'active' : ''  }}" href="{{ url('admin/add-category') }}">Shto Temë</a>
                        <a class="nav-link {{ Request::is('admin/category') ? 'active' : ''  }}" href="{{ url('admin/category') }}">Shiko Temat</a>
                    </nav>
                </div>

                <a class="nav-link {{ Request::is('') ? 'collapse active' : 'collapsed'  }}" href="#" data-bs-toggle="collapse" data-bs-target="#collapseReportages" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Reportazhet
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseReportages" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link {{ Request::is('admin/add-reportage') ? 'active' : ''  }}" href="{{ url('admin/add-reportage') }}">Shto Reportazh</a>
                        <a class="nav-link {{ Request::is('admin/reportage') ? 'active' : ''  }}" href="{{ url('admin/reportage') }}">Shiko Reportazhet</a>
                    </nav>
                </div>

                <a class="nav-link {{ Request::is('') ? 'collapse active' : 'collapsed'  }}" href="#" data-bs-toggle="collapse" data-bs-target="#collapseAuthor" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Autoret
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseAuthor" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link {{ Request::is('admin/add-author') ? 'active' : ''  }}" href="{{ url('admin/add-author') }}">Shto Autoret</a>
                        <a class="nav-link {{ Request::is('admin/authors') ? 'active' : ''  }}" href="{{ url('admin/authors') }}">Shiko Autoret</a>
                    </nav>
                </div>

                <a class="nav-link {{ Request::is('') ? 'collapse active' : 'collapsed'  }}" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePost" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Koleksionet
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapsePost" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link {{ Request::is('admin/add-post') ? 'active' : ''  }}" href="{{ url('admin/add-post') }}">Shto Koleksion</a>
                        <a class="nav-link {{ Request::is('admin/posts') ? 'active' : ''  }}" href="{{ url('admin/posts') }}">Shiko Koleksionet</a>
                    </nav>
                </div>

                <a class="nav-link {{ Request::is('') ? 'collapse active' : 'collapsed'  }}" href="#" data-bs-toggle="collapse" data-bs-target="#collapseSlider" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Slideret
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseSlider" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link {{ Request::is('admin/add-slider') ? 'active' : ''  }}" href="{{ url('admin/add-slider') }}">Shto Slider</a>
                        <a class="nav-link {{ Request::is('admin/slider') ? 'active' : ''  }}" href="{{ url('admin/slider') }}">Shiko Slideret</a>
                    </nav>
                </div>
                <a class="nav-link {{ Request::is('') ? 'collapse active' : 'collapsed'  }}" href="#" data-bs-toggle="collapse" data-bs-target="#collapseSettings" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Settings
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseSettings" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link {{ Request::is('admin/settings') ? 'active' : ''  }}" href="{{ url('admin/settings') }}">Shiko Settings</a>
                    </nav>
                </div>


{{--                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">--}}
{{--                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>--}}
{{--                    Faqet--}}
{{--                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>--}}
{{--                </a>--}}
{{--                <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">--}}
{{--                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">--}}


{{--                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAbout" aria-expanded="false" aria-controls="pagesCollapseAuth">--}}
{{--                            Rreth Nesh--}}
{{--                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>--}}
{{--                        </a>--}}
{{--                        <div class="collapse" id="pagesCollapseAbout" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">--}}
{{--                            <nav class="sb-sidenav-menu-nested nav">--}}
{{--                                <a class="nav-link" href="{{ url('admin/about') }}">Shiko faqen Rreth Nesh</a>--}}
{{--                            </nav>--}}
{{--                        </div>--}}
{{--                    </nav>--}}
{{--                </div>--}}
{{--                <div class="sb-sidenav-menu-heading">Addons</div>--}}
{{--                <a class="nav-link" href="charts.html">--}}
{{--                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>--}}
{{--                    Charts--}}
{{--                </a>--}}
{{--                <a class="nav-link" href="tables.html">--}}
{{--                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>--}}
{{--                    Tables--}}
{{--                </a>--}}
            </div>
        </div>
    </nav>
</div>
