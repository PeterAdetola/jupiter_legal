@extends('mainframe')
@section('content')
    <style>
        .feature-box-info-limited {
            overflow: hidden;
            max-width: 252px; /* Default max-width for larger screens */
        }

        /* On smaller screens (e.g., below 768px width, which is often Bootstrap's breakpoint for "small") */
        @media (max-width: 767.98px) {
            .feature-box-info-limited {
                max-width: none; /* Or max-width: auto; */
            }
        }
        .nav-item .nav-link.text-truncate {
            max-width: 200px;
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
        }

        /* On smaller screens (e.g., below 768px width) */
        @media (max-width: 767.98px) {
            .nav-item .nav-link.text-truncate {
                max-width: 220px;
            }
        }
    </style>
    @include('partials.sub_service_header')
    <div class="container pb-5 pt-lg-5 mt-5">
        <div class="row">
            <div class="col-lg-4 order-1 order-lg-0 pe-lg-5 mt-4 mt-lg-0">
                <div class="bg-grey-100 p-4 border-radius-2 mb-4">
                    <div class="m-3">
                        <h4 class="text-5 font-weight-semibold line-height-1 mb-4">{{ \Illuminate\Support\Str::title(str_replace('-', ' ', $main_service)) }}</h4>

                        <ul class="nav nav-list nav-list-arrows flex-column mb-0">
                            @foreach(($main_services[$main_service]['sub_services'] ?? []) as $sub)
                                @php
                                    $url = route('sub.service', ['main_service' => $main_service, 'slug' => $sub['slug']]);
                                    $isActive = url()->current() === $url;
                                @endphp
                                <li class="nav-item">
                                    <a href="{{ $url }}"
                                       class="nav-link {{ $isActive ? 'active text-dark' : '' }} text-truncate">
                                        {{ $sub['title'] }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="bg-tertiary text-light p-3 border-radius-2 mb-4">
                    <div class="m-3">
                        <h4 class="text-5 font-weight-semibold line-height-1 mb-4 text-light">Contact Us</h4>

                        <div class="d-flex flex-column pt-2">
                            <div class="pe-4">
                                <div class="feature-box feature-box-secondary align-items-center">
                                    <div class="feature-box-icon feature-box-icon-lg p-static box-shadow-7">
                                        <img src="{{ asset('img/icons/phone-2.svg')}}" width="30" height="30" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light'}" />
                                    </div>
                                    <div class="feature-box-info ps-2">
                                        <strong class="d-block text-uppercase text-color-secondary p-relative top-2">Call Us</strong>
                                        <a href="tel:{{ $contact['main_clean_phone'] }}" class="text-decoration-none font-secondary text-5 font-weight-semibold text-color-light text-color-hover-primary transition-2ms negative-ls-05 ws-nowrap p-relative bottom-2">{{ $contact['phone_numbers'][0] }}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="pe-4 pt-4 overflow-hidden  feature-box-info-limited">
                                <div class="feature-box feature-box-secondary align-items-center">
                                    <div class="feature-box-icon feature-box-icon-lg p-static box-shadow-7">
                                        <img src="{{ asset('img/icons/email.svg')}}" width="30" height="30" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light'}" />
                                    </div>
                                    <div class="feature-box-info ps-2">
                                        <strong class="d-block text-uppercase text-color-secondary p-relative top-2">Send E-mail</strong>
                                        <a href="mailto:{{ $contact['email'] }}" class="text-decoration-none font-secondary text-5 font-weight-semibold text-color-light text-color-hover-primary transition-2ms negative-ls-05 ws-nowrap p-relative bottom-2"><span class="__cf_email__" data-cfemail="5821372d183c3735393136763b3735">{{ $contact['email'] }}</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="pe-4 pt-4 overflow-hidden">
                                <div class="feature-box feature-box-secondary align-items-center">
                                    <a href="#" class="btn btn-light border-0 btn-rounded box-shadow-7 btn-lg text-3 py-3 btn-with-arrow-solid mb-2" data-bs-toggle="modal" data-bs-target="#formModal"><strong class="d-inline-flex font-weight-semibold text-dark me-2">Get Free Consultation</strong><span class="bg-light box-shadow-6"><i class="fa-solid fa-arrow-right text-dark"></i></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


<!--            MainContent-->
            <div class="col-lg-8">
                <h2 class="text-7 font-weight-semibold line-height-1 mb-4">{{ $sub_service['intro'] }} </h2>
                @if($sub_service['main_description'])
                <p>{!! $sub_service['main_description'] !!}</p>
                @endif

                @if(!empty($sub_service['description_list']))
                    <div class="text-start">
                        <ul class="list list-icons list-icons-lg list-icons-style-3 text-3-5">
                            @foreach($sub_service['description_list'] as $item)
                                <li class="text-3 mb-2">
                                    <i class="fas fa-check bg-color-dark-rgba-10 text-color-before-primary"></i>
                                    {{ is_string($item) ? $item : '[Invalid description item]' }}
                                </li>
                            @endforeach

                        </ul><br>

                    </div>
                @endif

                @if($sub_service['criteria'])
                    <ul class="list list-icons list-icons-lg list-icons-style-3 text-3-5">
                        @foreach($sub_service['criteria'] as $criterion)
                            <li><i class="fas fa-check bg-color-dark-rgba-10 text-color-before-secondary"></i>{{ $criterion }}</li>
                        @endforeach
                    </ul><br>
                @endif

                @if($sub_service['steps'])
                    <section style="margin-bottom:5em">
                        <h2 class="text-5 font-weight-semibold line-height-1 mb-4 mt-3">Steps to take</h2>
                        <ul class="list list-icons list-icons-lg list-icons-style-3 text-3-5">
                            @foreach($sub_service['steps'] as $item)
                                <li><i class="fas fa-check bg-color-dark-rgba-10 text-color-before-secondary"></i>{{ $item }}</li>
                            @endforeach
                        </ul>
                    </section>
                        <br>
                @endif

                @if($sub_service['why'])
                    <section style="margin-bottom:5em">
                        <h2 class="text-5 font-weight-semibold line-height-1 mb-4 mt-3">Why Us</h2>
                        <ul class="list list-icons list-icons-lg list-icons-style-3 text-3-5">
                            @foreach($sub_service['why'] as $benefit)
                                <li><i class="fas fa-check bg-color-dark-rgba-10 text-color-before-secondary"></i>
                                    <strong>{{ $benefit['reason'] }}:</strong> {{ $benefit['details'] }}
                                </li>
                            @endforeach
                        </ul>
                    </section>
                @endif

                @if($sub_service['benefits'])
                    <section style="margin-bottom:5em">
                        <h2 class="text-5 font-weight-semibold line-height-1 mb-4 mt-3">Benefits</h2>
                        <ul class="list list-icons list-icons-lg list-icons-style-3 text-3-5">
                            @foreach($sub_service['benefits'] as $benefit)
                                <li><i class="fas fa-check bg-color-dark-rgba-10 text-color-before-secondary"></i>
                                    <strong>{{ $benefit['key'] }}:</strong> {{ $benefit['details'] }}
                                </li>
                            @endforeach
                        </ul>
                    </section>
                @endif

{{--                packages--}}


                @if($sub_service['packages'])
                <div class="pricing-table row mb-4">
                    @php $count = 1; @endphp
                        @foreach ($sub_service['packages'] as $package)
                            <div class="col-md-6 col-lg-6">
                                <div class="plan">
                                    <div class="plan-header" style="background-color: {{ $package['color'] }};">
                                        <h3>{{ $package['key'] }}</h3>
                                    </div>
                                    <div class="plan-price">
                                        <span class="price"><span class="price-unit">NGN</span>{{ $package['price'] }}</span>
{{--                                        <label class="price-label">PER MONTH</label>--}}
                                    </div>
                                    <div class="plan-features">
                                        <p>{{ $package['description'] }}</p>
                                    </div>
                                    <div class="plan-features">
                                        <ul class="list list-icons list-icons-style-3 list-dark list-icons-sm ms-3">
                                            @foreach ($package['services'] as $service)
                                            <li class="text-start" style="font-size:1em; line-height:1.5"><i class="fas fa-check bg-color-dark-rgba-10 text-color-before-secondary"></i><p style="margin-bottom: 0.02em">{{ $service }}</p><br></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="plan-footer">
                                        <a href="#" class="btn btn-dark btn-modern py-2 px-4" data-bs-toggle="modal" data-bs-target="#consultModal{{ $count }}">Sign Up</a>
                                    </div>
                                </div>
                            </div>
                        @include('partials.consult_form')
                        @php $count++; @endphp

                        @endforeach

                </div>
                @endif


                @if($sub_service['consult_packages'])
                    <div class="pricing-table row mb-4">
                        @php $count = 1; @endphp
                        @foreach ($sub_service['consult_packages'] as $package)
                            <div class="col-md-6 col-lg-4">
                                <div class="plan">
                                    <div class="plan-header">
                                        <h3>{{ $package['key'] }}</h3>
                                    </div>
                                    <div class="plan-price">
                                        <span class="text-7"><span class="price-label">NGN</span><br>{{ $package['price'] }}</span>

                                    </div>
                                    <div class="plan-features">
                                        <p>{{ $package['description'] }}</p>
                                    </div>
                                    <div class="plan-footer">
                                        <a href="#" class="btn btn-dark btn-modern py-2 px-4" data-bs-toggle="modal" data-bs-target="#consultModal{{ $count }}">Sign Up</a>
                                    </div>
                                </div>
                            </div>
                            @include('partials.consult_form')
                            @php $count++; @endphp
                        @endforeach
                    </div>
                @endif


                {{--Process--}}

                @if($sub_service['process'])
                    <div class="row">
                        <div class="col">
                            <div class="row my-5">
                                <div class="col">
                                    <h4 class="mb-2">Process</h4>

                                    <div class="process process-vertical py-4">
                                        @php $count = 1; @endphp
                                        @foreach ($sub_service['process'] as $item)
                                        <div class="process-step appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                                            <div class="process-step-circle">
                                                <strong class="process-step-circle-content">{{ $count }}</strong>
                                            </div>
                                            <div class="process-step-content">
                                                <h4 class="mb-1 text-4 font-weight-bold">{{ $item['step'] }}</h4>
                                                <p class="mb-0">{{ $item['details'] }}</p>
                                            </div>
                                        </div>
                                        @php $count++; @endphp
                                        @endforeach
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                @endif


                @if($sub_service['faqs'])
                <!-- FAQ's -->
                <div class="row align-items-center mt-3">
                    <div class="col">
                        <h2 class="text-5 font-weight-semibold line-height-1 mb-4">FAQs</h2>

                        <div class="toggle toggle-minimal toggle-faqs toggle-dark m-0" data-plugin-toggle>
                            @foreach ($sub_service['faqs'] as $item)
                                <section class="toggle">
                                    <a class="toggle-title text-4 text-dark">{{ $item['question'] }}</a>
                                    <div class="toggle-content"><p class="mb-0">{{ $item['answer'] }}</p></div>
                                </section>
                            @endforeach
                        </div>
                    </div>
                </div>
                @endif


            </div>
        </div>
    </div>
@endsection
