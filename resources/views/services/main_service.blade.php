@extends('mainframe')
@section('content')
@include('partials.service_header')
    <!-- Intro -->
    <div class="container" id="intro">
        <div class="row align-items-center">
            <div class="col-lg-6 text-center p-relative pt-0 pb-2 py-lg-5 pe-lg-5">
                <div class="opacity-2 p-absolute w-100 pe-5">
                    <img src="{{ asset('img/icons/abstract-bg-1.svg') }}" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary w-100 me-5'}" />
                </div>
                <div class="cascading-images-wrapper custom-cascading-images-wrapper-1">
                    <div class="cascading-images p-relative">
                        <div class="p-relative" style="left: -20%;">
                            <img class="img-fluid border-radius-2" src="{{ asset($service['image_bg']) }}" loading="lazy" alt="">
                        </div>
                        <div class="p-absolute w-100 custom-mask-img custom-mask-img-3" style="top: 21%; left: 0%;">
                            <img src="{{ asset($service['image']) }}" loading="lazy" class="img-fluid" alt="" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 py-lg-5 ps-lg-4">
                <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                    <h2 class="text-9 text-lg-12 font-weight-semibold line-height-1 mb-4">{{ $service['intro'] }}</h2>
                </div>
                <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                    <p class="pe-lg-5">{!! nl2br(e($service['main_description'])) !!}</p>
                </div>

                <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">
                    <div class="d-flex flex-column flex-lg-row pt-3 align-items-lg-center">
                        <div>
                            <a href="demo-accounting-1-about.html" class="btn btn-rounded btn-dark box-shadow-7 font-weight-medium btn-swap-1" data-clone-element="1">
                                <span>Learn More <i class="fa-solid fa-arrow-right ms-2 p-relative left-10"></i></span>
                            </a>
                        </div>
                        <div class="text-4 px-3 d-none d-lg-block">-</div>
                        <div class="pt-4 pt-lg-0">
                            <div class="feature-box feature-box-secondary align-items-center">
                                <div class="feature-box-icon feature-box-icon-lg p-static box-shadow-7">
                                    <img src="{{ asset('img/icons/phone-2.svg') }}" width="30" height="30" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light'}" />
                                </div>
                                <div class="feature-box-info ps-2">
                                    <strong class="d-block text-uppercase text-color-secondary p-relative top-2">Call Us</strong>
                                    <a href="tel:{{ $contact['main_clean_phone'] }}" class="text-decoration-none font-secondary text-5 font-weight-semibold text-color-dark text-color-hover-primary transition-2ms negative-ls-05 ws-nowrap p-relative bottom-2">{{ $contact['phone_numbers'][0] }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="container py-4">
    <div class="row align-items-center py-5 my-3">
        <div class="col">
            <div class="row justify-content-center">
                <div class="col-9 text-center">
                    <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="0">
                        <h2 class="text-9 text-lg-12 font-weight-semibold line-height-1 mb-4">Our {{ $service['title'] }}</h2>

                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                            @if(!empty($service['criteria']))
                                <div class="text-start">
                                    <p class="text-4">Our Real Estate Law Services are a perfect fit for you if you:</p>

                                    <ul class="list list-icons list-icons-lg list-icons-style-3 text-3-5">
                                        @foreach($service['criteria'] as $item)
                                            <li class="text-3 mb-2"><i class="fas fa-check bg-color-dark-rgba-10 text-color-before-primary"></i> {{ $item }}</li>
                                        @endforeach
                                    </ul>
                                </div>

                            @elseif(!empty($service['main_description']))
                                <p>{!! nl2br(e($service['main_description'])) !!}</p>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
{{--Services--}}
            <div class="row align-items-center mt-3 py-5">
                <div class="col">

                    <div class="appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="0">
                        <span class="badge bg-gradient-light-primary-rgba-20 text-secondary rounded-pill text-uppercase font-weight-semibold text-2-5 px-3 py-2 px-4 mb-4"><span class="d-inline-flex py-1 px-2">Services</span></span>
                    </div>

                    <div class="accordion accordion-modern-status accordion-modern-status-arrow accordion-modern-status-arrow-dark" id="accordionWhyChooseUs">
                        @php $count = 1; @endphp
                        @foreach ($service['services'] as $sub)
                        <div class="card card-default box-shadow-8 border-radius-2 bg-light">
                            <div class="card-header bg-transparent" id="collapseWhyChooseUsHeading{{ $count }}">
                                <h4 class="card-title m-0">
                                    <a class="accordion-toggle bg-transparent text-3-5 text-color-dark font-weight-semi-bold collapsed" data-bs-toggle="collapse" data-bs-target="#collapseWhyChooseUs{{ $count }}" aria-expanded="false" aria-controls="collapseWhyChooseUs{{ $count }}">
                                        {{ $sub['title'] }}
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseWhyChooseUs{{ $count }}" class="collapse" aria-labelledby="collapseWhyChooseUsHeading{{ $count }}" data-bs-parent="#accordionWhyChooseUs">
                                <div class="card-body pt-0">
                                    <p class="mb-0">Our expert team of certified accountants brings years of experience and deep industry knowledge to help you navigate complex financial landscapes. We’re dedicated to providing personalized, reliable, and results-driven services, ensuring your business thrives with our strategic financial guidance.</p>
                                    <br/><a href="{{ route('sub.service', ['main_service' => $main_service, 'slug' => $sub['slug']]) }}" class="btn-arrow-effect-1">Read more <i class="fas fa-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                        @php $count++; @endphp
                        @endforeach
                    </div>
                </div>
            </div>

{{--Process--}}
            <div class="row">
                <div class="col">
                    <div class="appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="0">
                        <span class="badge bg-gradient-light-primary-rgba-20 text-secondary rounded-pill text-uppercase font-weight-semibold text-2-5 px-3 py-2 px-4 mb-4"><span class="d-inline-flex py-1 px-2">Process</span></span>
                    </div>
                    <div class="row process process-shapes process-shapes-hover-animate my-5">
                        @php $count = 1; @endphp
                        @foreach ($service['process'] as $item)
                        <div class="process-step col-md-6 col-lg-3 mb-5 mb-md-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                            <div class="process-step-circle">
                                <strong class="process-step-circle-content">0{{ $count }}</strong>
                            </div>
                            <div class="process-step-content">
                                <h4 class="mb-0 text-4 font-weight-bold">{{ $item['title'] }}</h4>
                                <p class="mb-0">{{ $item['details'] }}</p>
                            </div>
                        </div>
                            @php $count++; @endphp
                        @endforeach
                    </div>

                </div>
            </div>

            <!-- FAQ's -->
            <div class="row align-items-center mt-3">
                <div class="col">
                    <div class="appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="0">
                        <span class="badge bg-gradient-light-primary-rgba-20 text-secondary rounded-pill text-uppercase font-weight-semibold text-2-5 px-3 py-2 px-4 mb-4"><span class="d-inline-flex py-1 px-2">FAQs</span></span>
                    </div>

                    <div class="toggle toggle-minimal toggle-faqs toggle-dark m-0" data-plugin-toggle>
                        @foreach ($service['faq'] as $item)
                        <section class="toggle">
                            <a class="toggle-title text-4 text-dark">{{ $item['question'] }}</a>
                            <div class="toggle-content"><p class="mb-0">{{ $item['answer'] }}</p></div>
                        </section>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
