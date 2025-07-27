@php
    $route = Route::current()->getName();

    $services = config('main_services');
@endphp
<style>
    .dropdown-menu li a {
        display: block;
        max-width: 250px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

</style>
<header id="header" data-plugin-options="{'stickyScrollUp': true, 'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': false, 'stickyStartAt': 100, 'stickyHeaderContainerHeight': 100}">
    <div class="header-body border-top-0 h-auto box-shadow-none">
        <div class="container-fluid px-3 px-lg-5 p-static">
            <div class="row align-items-center py-3">
                <div class="col-auto col-lg-2 col-xxl-3 me-auto me-lg-0">
                    <div class="header-logo" data-clone-element-to="#offCanvasLogo">
                        <a href="{{ url('/') }}">
                            <img alt="Jupiter Legal" width="131" height="62" src="{{ asset('img/demos/accounting-1/logo.png') }}">
                        </a>
                    </div>
                </div>
                <div class="col-auto col-lg-8 col-xxl-6 justify-content-lg-center">
                    <div class="header-nav header-nav-links justify-content-lg-center">
                        <div class="header-nav-main header-nav-main-text-capitalize header-nav-main-arrows header-nav-main-effect-2">
                            <nav class="collapse">
                                <ul class="nav nav-pills" id="mainNav">
                                    <li>
                                        <a href="{{ url('/') }}" class="nav-link {{ ($route == 'index')? 'active' : '' }}">
                                            Home
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link {{ ($route == 'about')? 'active' : '' }}" href="{{ route('about') }}">
                                            About
                                        </a>
                                    </li>
                                    @foreach($services as $key => $main)
                                        @php
                                            $isActiveMain = request()->routeIs('main.service') && request()->route('main_service') === $key;
                                            $isActiveSub = request()->routeIs('sub.service') && request()->route('main_service') === $key;
                                        @endphp

                                        <li class="dropdown {{ ($isActiveMain || $isActiveSub) ? 'active' : '' }}">
                                            <a href="{{ route('main.service', ['main_service' => $key]) }}"
                                               class="nav-link dropdown-toggle {{ $isActiveMain ? 'active' : '' }}">
                                                {{ $main['title'] }}
                                            </a>
                                            <ul class="dropdown-menu">
                                                @foreach($main['sub_services'] as $sub)
                                                    @php
                                                        $isSubActive = request()->routeIs('sub.service') &&
                                                                       request()->route('main_service') === $key &&
                                                                       request()->route('slug') === $sub['slug'];
                                                    @endphp
                                                    <li>
                                                        <a href="{{ route('sub.service', ['main_service' => $key, 'slug' => $sub['slug']]) }}"
                                                           class="dropdown-item anim-hover-translate-right-5px transition-3ms bg-transparent text-color-hover-primary text-lg-2 py-lg-2 {{ $isSubActive ? 'active' : '' }}">
                                                            {{ $sub['title'] }}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                    @endforeach

                                    <li>
                                        <a class="nav-link {{ ($route == 'contact')? 'active' : '' }}" href="{{ route('contact') }}">
                                            Contact
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-auto col-lg-2 col-xxl-3">
                    <div class="d-flex justify-content-end align-items-center">
                        <div class="d-none d-sm-flex d-lg-none d-xxl-flex">
                            <img src="{{ asset('img/icons/phone-2.svg') }}" width="24" height="24" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-secondary pe-1'}" />
                            <a href="tel:{{ $contact['main_clean_phone'] }}" class="text-decoration-none font-secondary text-4 font-weight-semibold text-color-dark text-color-hover-primary transition-2ms negative-ls-05 ws-nowrap">{{ $contact['phone_numbers'][0] }}</a>
                        </div>
                        <a href="#!" class="btn btn-rounded btn-dark box-shadow-7 font-weight-medium px-3 py-2 text-2-5 btn-swap-1 ms-3 d-none d-md-flex" data-clone-element="1" data-bs-toggle="modal" data-bs-target="#formModal">
                            <span>Get Free Consultation <i class="fa-solid fa-arrow-right ms-2"></i></span>
                        </a>
                        <button class="btn header-btn-collapse-nav rounded-pill" data-bs-toggle="offcanvas" href="#offcanvasMain" role="button" aria-controls="offcanvasMain">
                            <i class="fas fa-bars"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

@include('partials.enquiry_form')
