@extends('mainframe')
@section('content')
    <div role="main" class="main px-3 px-lg-5">

            <div class="page-header py-0 bg-tertiary px-3 px-xl-0 border-radius-2 p-relative mb-0 overflow-hidden">
                <div class="overflow-hidden p-absolute top-0 left-0 bottom-0 h-100 w-100">
                    <div class="custom-el-5 custom-pos-4">
                        <img class="img-fluid opacity-2 opacity-hover-2" src="img/demos/accounting-1/svg/waves.svg" alt="">
                    </div>
                </div>
                <div class="container p-relative z-index-1 py-2">
                    <div class="row mh-200px mh-lg-300px align-items-center py-4">
                        <div class="col">
                            <div class="appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="0">
                                <span class="badge bg-color-light-rgba-10 text-light rounded-pill text-uppercase font-weight-semibold text-2-5 px-3 py-2 px-4 mb-3"><span class="d-inline-flex py-1 px-2">Who we are</span></span>
                            </div>
                            <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="200">
                                <h1 class="text-9 text-lg-12 text-color-light font-weight-semibold line-height-1 mb-2">About Us</h1>
                            </div>
                            <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="200">
                                <ul class="breadcrumb d-flex text-3-5 font-weight-semi-bold pb-2 mb-3">
                                    <li><a href="{{ url('/') }}" class="text-light text-decoration-none">Home</a></li>
                                    <li class="active">About Us</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        @include('partials.index.main_services')
        <!-- Who We Are -->
            <div class="container pt-lg-5" id="intro">
                <div class="row align-items-center">
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <div class="appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="0">
                            <span class="badge bg-gradient-light-primary-rgba-20 text-secondary rounded-pill text-uppercase font-weight-semibold text-2-5 px-3 py-2 px-4 mb-4 mt-sm-4">
                                <span class="d-inline-flex py-1 px-2">Who We Are</span>
                            </span>
                        </div>
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                            <h2 class="text-9 text-lg-12 font-weight-semibold line-height-1 mb-4">{{ $sections['about_us']['title'] }}</h2>
                        </div>
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                            <p class="pe-lg-5 mb-0">{!! $sections['about_us']['content'] !!}</p>
                        </div>

                    </div>
                    <div class="col-lg-6 p-relative">
                        <div class="accordion accordion-modern-status accordion-modern-status-arrow accordion-modern-status-arrow-dark mb-4 my-lg-4 pb-3 pb-lg-0" id="accordionWhoWeAre">
                            <div class="card card-default box-shadow-8 border-radius-2 bg-light">
                                <div class="card-header bg-transparent" id="collapseWhoWeAreHeadingOne">
                                    <h4 class="card-title m-0">
                                        <a class="accordion-toggle bg-transparent text-3-5 text-color-dark font-weight-semi-bold" data-bs-toggle="collapse" data-bs-target="#collapseWhoWeAreOne" aria-expanded="true" aria-controls="collapseWhoWeAreOne">
                                            {{ $sections['mission']['title'] }}
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseWhoWeAreOne" class="collapse show" aria-labelledby="collapseWhoWeAreHeadingOne" data-bs-parent="#accordionWhoWeAre">
                                    <div class="card-body pt-0">
                                        <p class="mb-0">{!! $sections['mission']['content'] !!}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-default box-shadow-8 border-radius-2 bg-light">
                                <div class="card-header bg-transparent" id="collapseWhoWeAreHeadingTwo">
                                    <h4 class="card-title m-0">
                                        <a class="accordion-toggle bg-transparent text-3-5 text-color-dark font-weight-semi-bold collapsed" data-bs-toggle="collapse" data-bs-target="#collapseWhoWeAreTwo" aria-expanded="false" aria-controls="collapseWhoWeAreTwo">
                                            {{ $sections['vision']['title'] }}
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseWhoWeAreTwo" class="collapse" aria-labelledby="collapseWhoWeAreHeadingTwo" data-bs-parent="#accordionWhoWeAre">
                                    <div class="card-body pt-0">
                                        <p class="mb-0">{!! $sections['vision']['content'] !!}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



    <!-- Our Stats -->
            <div class="bg-quaternary border-radius-2 p-relative overflow-hidden mt-5">
                <div class="container p-relative z-index-1 py-4">

                    <div class="row align-items-center py-5 my-3">
                        <div class="col">
                            <div class="row justify-content-center">
                                <div class="col-9 text-center">
                                    <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="0">
                                        <h2 class="text-9 text-lg-12 font-weight-semibold line-height-1 mb-4">Our <mark class="text-dark mark mark-color mark-color-primary mark-pos-2 mark-height-100 p-0 appear-animation" data-appear-animation data-appear-animation-delay="0">Commitment</mark> to You</h2>
                                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                                            <p>We are more than your legal counsel; we are your strategic partners in navigating complex legal landscapes. We are dedicated to providing proactive solutions that protect your interests and foster long-term success. Your legal security is our priority. Let's discuss your legal strategy</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row text-center justify-content-center">
                                <div class="col-lg-4 mb-4 mb-lg-0">
                                    <div class="appear-animation px-lg-4" data-appear-animation="blurIn" data-appear-animation-delay="300">
                                        <div class="d-flex justify-content-center align-items-center pt-4">
                                            <strong class="d-inline-flex text-15 text-dark n-ls-5">90%</strong>
                                            <div class="p-2 ps-3">
                                                <img src="img/demos/accounting-1/icons/icon-6.svg" width="48" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" />
                                            </div>
                                        </div>
                                        <span class="custom-font-tertiary text-7 text-dark n-ls-1 fst-italic">Reduced Legal Risks</span>
                                        <p class="mb-0 pt-2 text-3-5 line-height-7">Through meticulous contract drafting and proactive compliance strategies.</p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="appear-animation px-lg-4" data-appear-animation="blurIn" data-appear-animation-delay="600">
                                        <div class="d-flex justify-content-center align-items-center pt-4">
                                            <strong class="d-inline-flex text-15 text-dark n-ls-5">70%</strong>
                                            <div class="p-2 ps-3">
                                                <img src="{{ asset('img/demos/accounting-1/icons/icon-6.svg') }}" width="48" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" />
                                            </div>
                                        </div>
                                        <span class="custom-font-tertiary text-7 text-dark n-ls-1 fst-italic">Accelerated Transaction Closings</span>
                                        <p class="mb-0 pt-2 text-3-5 line-height-7">Streamlining real estate and business deals for faster, more efficient outcomes.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">

                        <div class="d-flex flex-column flex-md-row justify-content-center text-center align-items-center py-3">
                            <span class="badge bg-light text-dark border custom-font-secondary border-all-light box-shadow-8 n-ls-05 rounded-pill text-uppercase font-weight-semibold text-2 px-3 py-2 px-1 me-1"><span class="d-inline-flex py-1 px-2">We got you</span></span>
                            <p class="mb-0 text-dark ps-2 ms-1 text-3-5 pt-3 pt-md-0">For your real estate and business - <a href="#" title="" class="text-decoration-underline text-color-secondary text-color-hover-primary" data-bs-toggle="modal" data-bs-target="#formModal">Book a Consultation Now!</a></p>
                        </div>
                    </div>
                </div>
            </div>




    <!-- Why Choose Us -->
            <div class="mt-5">
                <div class="container pt-4">
                    <div class="row py-5">

                        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 p-relative">
                            <div class="accordion accordion-modern-status accordion-modern-status-arrow accordion-modern-status-arrow-dark" id="accordionWhyChooseUs">
                                @php $count = 1; @endphp
                                @foreach ($sections['why_us']['items'] as $item)
                                <div class="card card-default box-shadow-8 border-radius-2 bg-light">
                                    <div class="card-header bg-transparent" id="collapseWhyChooseUsHeading{{ $count }}">
                                        <h4 class="card-title m-0">
                                            <a class="accordion-toggle bg-transparent text-3-5 text-color-dark font-weight-semi-bold collapsed" data-bs-toggle="collapse" data-bs-target="#collapseWhyChooseUs{{ $count }}" aria-expanded="false" aria-controls="collapseWhyChooseUs{{ $count }}">
                                                {{ $item['title'] }}
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseWhyChooseUs{{ $count }}" class="collapse" aria-labelledby="collapseWhyChooseUsHeading{{ $count }}" data-bs-parent="#accordionWhyChooseUs">
                                        <div class="card-body pt-0">
                                            <p class="mb-0">{{ $item['description'] }}</p>
                                        </div>
                                    </div>
                                </div>
                                @php $count++; @endphp
                                @endforeach
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="0">
                                <span class="badge bg-gradient-light-primary-rgba-20 text-secondary rounded-pill text-uppercase font-weight-semibold text-2-5 px-3 py-2 px-4 mb-4"><span class="d-inline-flex py-1 px-2">Why Us</span></span>
                            </div>
                            <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                                <h2 class="text-9 text-lg-12 font-weight-semibold line-height-1 mb-4">{{ $sections['why_us']['title'] }}</h2>
                            </div>
                            <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                                <p>{{ $sections['why_us']['intro'] }}</p>
                            </div>
                            <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">
                                <div class="d-flex pt-3 align-items-center">
                                    <a href="demo-accounting-1-contact.html" class="btn btn-rounded btn-dark box-shadow-7 font-weight-medium btn-swap-1" data-clone-element="1">
                                        <span>Contact Us <i class="fa-solid fa-arrow-right ms-2 p-relative left-10"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

    <!-- Services -->
            <div id="about-services"
                class="bg-grey-100 my-5 px-3 px-xl-0 border-radius-2 p-relative overflow-hidden"
            >
                <div class="container py-5">
                    <div class="row py-5">
                        <div class="col">

                            <div class="container pt-5 pb-5" id="intro">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8 text-center">
                                        <div
                                            class="appear-animation"
                                            data-appear-animation="fadeInUpShorter"
                                            data-appear-animation-delay="200"
                                        >
                                            <h2
                                                class="text-9 text-lg-12 font-weight-semibold line-height-1 mb-4"
                                            >
                                                Our Services

                                            </h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-lg-12 text-center">
                                        <div
                                            class="appear-animation"
                                            data-appear-animation="fadeInUpShorter"
                                            data-appear-animation-delay="400"
                                        >
                                        </div>

                                        <div
                                            class="appear-animation"
                                            data-appear-animation="fadeInUpShorter"
                                            data-appear-animation-delay="400"
                                        >
                                            <p class="mb-0 text-dark d-flex justify-content-center">
                                                <img
                                                    width="29"
                                                    height="29"
                                                    src="img/demos/accounting-1/icons/icon-8.svg"
                                                    class="w-auto d-inline-flex p-relative bottom-2 me-2"
                                                    alt=""
                                                />
                                                Leveraging our expertise in Real Estate and Business law.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6 mb-4 mb-lg-0">
                                    <h4 class=" text-dark">{{ $sections['realty']['title'] ?? 'Realty Title' }}</h4>
                                    <div class="accordion accordion-modern-status accordion-modern-status-borders accordion-modern-status-arrow" id="accordion1">
                                        @php $count = 1; @endphp
                                        @foreach($sections['realty']['services'] as $service)
                                            <div class="card card-default">
                                                <div class="card-header" id="collapseHeading{{ $count }}">
                                                    <h4 class="card-title m-0">
                                                        <a class="accordion-toggle text-color-dark font-weight-bold collapsed"
                                                           data-bs-toggle="collapse"
                                                           data-bs-target="#collapse{{ $count }}"
                                                           aria-expanded="false"
                                                           aria-controls="collapse{{ $count }}">
                                                            {{ $service['title'] }}
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse{{ $count }}" class="collapse"
                                                     aria-labelledby="collapseHeading{{ $count }}"
                                                     data-bs-parent="#accordion1"> <!-- ← This is now correct -->
                                                    <div class="card-body pt-0">
                                                        <p class="mb-0">{!! $service['description'] !!}</p><br>
                                                        <a href="{{ route('sub.service', ['main_service' => 'real-estate-law', 'slug' => $service['slug']]) }}"
                                                           class="btn btn-arrow-effect-1 bg-transparent text-primary mt-2 border-0 p-0">
                                                            Read More <i class="fas fa-arrow-right ms-2"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            @php $count++; @endphp
                                        @endforeach
                                    </div>
                                </div>

                                <div class="col-lg-6 mb-4 mb-lg-0">
                                    <h4 class=" text-dark">{{ $sections['business']['title'] ?? 'Business Title' }}</h4>
                                    <div class="accordion accordion-modern-status accordion-modern-status-borders accordion-modern-status-arrow" id="accordion12">
                                        @php $count = 10; @endphp
                                        @foreach($sections['business']['services'] as $service)
                                            <div class="card card-default">
                                                <div class="card-header" id="collapseHeading{{ $count }}">
                                                    <h4 class="card-title m-0">
                                                        <a class="accordion-toggle text-color-dark font-weight-bold collapsed"
                                                           data-bs-toggle="collapse"
                                                           data-bs-target="#collapse{{ $count }}"
                                                           aria-expanded="false"
                                                           aria-controls="collapse{{ $count }}">
                                                            {{ $service['title'] }}
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse{{ $count }}" class="collapse"
                                                     aria-labelledby="collapseHeading{{ $count }}"
                                                     data-bs-parent="#accordion12"> <!-- ← This is now correct -->
                                                    <div class="card-body pt-0">
                                                        <p class="mb-0">{!! $service['description'] !!}</p><br>
                                                        <a href="{{ route('sub.service', ['main_service' => 'business-law', 'slug' => $service['slug']]) }}"
                                                           class="btn btn-arrow-effect-1 bg-transparent text-primary mt-2 border-0 p-0">
                                                            Read More <i class="fas fa-arrow-right ms-2"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            @php $count++; @endphp
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


</div>

@endsection
