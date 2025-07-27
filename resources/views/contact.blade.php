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
                            <span class="badge bg-color-light-rgba-10 text-light rounded-pill text-uppercase font-weight-semibold text-2-5 px-3 py-2 px-4 mb-3"><span class="d-inline-flex py-1 px-2">Get in Touch</span></span>
                        </div>
                        <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="200">
                            <h1 class="text-9 text-lg-12 text-color-light font-weight-semibold line-height-1 mb-2">Contact Us</h1>
                        </div>
                        <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="200">
                            <ul class="breadcrumb d-flex text-3-5 font-weight-semi-bold pb-2 mb-3">
                                <li><a href="{{ url('/') }}" class="text-light text-decoration-none">Home</a></li>
                                <li class="active">Contact Us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Intro -->
        <div class="container pt-4 pt-lg-5 pb-4" id="intro">
            <div class="row pt-4">
                <div class="col">
                    <div class="appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="0">
                        <span class="badge bg-gradient-light-primary-rgba-20 text-secondary rounded-pill text-uppercase font-weight-semibold text-2-5 px-3 py-2 px-4 mb-4"><span class="d-inline-flex py-1 px-2">Let's Get Started</span></span>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="200">
                        <h2 class="text-9 text-lg-12 font-weight-semibold line-height-1 mb-2">{{ $contact['intro_title'] }}</h2>
                    </div>
                </div>
                <div class="col-lg-6 p-relative">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                        <p class="mb-0">{{ $contact['intro_description'] }}</p>
                    </div>
                </div>
            </div>
            <div class="row mt-5 pt-2">
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="400">

                        <div class="owl-carousel owl-theme" data-plugin-options="{'items': 1, 'autoplay': true, 'dots': false, 'autoplayTimeout': 5000, 'margin': 10, 'animateOut': 'fadeOut'}">
                            <div>
                                <img class="img-fluid border-radius-2" src="img/demos/accounting-1/generic/contact1.jpg" alt="">
                            </div>
                            <div>
                                <img class="img-fluid border-radius-2" src="img/demos/accounting-1/generic/contact2.jpg" alt="">
                            </div>
                            <div>
                                <img class="img-fluid border-radius-2" src="img/demos/accounting-1/generic/contact3.jpg" alt="">
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 mb-3 mb-lg-0">

                    <div class="feature-box feature-box-secondary">
                        <div class="feature-box-icon feature-box-icon-lg p-static box-shadow-7">
                            <img src="img/icons/pin-light.svg" width="30" height="30" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': ''}" />
                        </div>
                        <div class="feature-box-info ps-3">
                            <strong class="d-block text-4-5 text-dark mb-1">Office Address</strong>
                            {!! $contact['addresses']['lagos'] !!}<br><br>
                            {!! $contact['addresses']['abuja'] !!}<br><br>
                            {!! $contact['addresses']['osun'] !!}
{{--                            <p class="mb-0 text-3-5 line-height-7"><a href="https://www.google.com/maps" target="_blank" class="text-color-secondary text-color-hover-primary font-weight-semi-bold text-decoration-underline">Get Directions</a></p>--}}
                        </div>
                    </div>


                </div>
                <div class="col-lg-4">

                    <div class="feature-box feature-box-secondary">
                        <div class="feature-box-icon feature-box-icon-lg p-static box-shadow-7">
                            <img src="img/icons/phone-2.svg" width="30" height="30" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light'}" />
                        </div>
                        <div class="feature-box-info ps-3">
                            <strong class="d-block text-4-5 text-dark mb-1">Phone</strong>
                            <p class="mb-0 text-3-5 line-height-7">Office Numbers:<br> <a href="tel:{{ $contact['main_clean_phone'] }}" class="text-color-secondary text-color-hover-primary font-weight-semi-bold text-decoration-underline">{{ $contact['phone_numbers'][0] }}</a></p>
                            <p class="mb-0 text-3-5 line-height-7"> <a href="tel:{{ $contact['sales_clean_phone'] }}" class="text-color-secondary text-color-hover-primary font-weight-semi-bold text-decoration-underline">{{ $contact['phone_numbers'][1] }}</a></p>
{{--                            <p class="mb-0 text-3-5 line-height-7">Client Support: <a href="tel:1234567890" class="text-color-secondary text-color-hover-primary font-weight-semi-bold text-decoration-underline">800 123 4567</a></p>--}}
                        </div>
                    </div>


                    <div class="feature-box feature-box-secondary mt-4 pt-2">
                        <div class="feature-box-icon feature-box-icon-lg p-static box-shadow-7">
                            <img src="img/icons/email.svg" width="30" height="30" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light'}" />
                        </div>
                        <div class="feature-box-info ps-3">
                            <strong class="d-block text-4-5 text-dark mb-1">E-mail</strong>
                            <p class="mb-0 text-3-5 line-height-7">General Inquiries:</p>
                            <p class="mb-0 text-3-5 line-height-7 pb-3"><a href="mailto:{{ $contact['email'] }}" class="text-color-secondary text-color-hover-primary font-weight-semi-bold text-decoration-underline">{{ $contact['email'] }}</a></p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row pt-4">
                <div class="col pt-4">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                        <p class="mb-0 text-dark d-flex justify-content-center">
                            <img src="img/demos/accounting-1/icons/icon-5.svg" width="30" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-dark me-2'}" />
                            24/7 Availability - Round-the-clock support for all your real estate and business legal needs, anytime.
                        </p>
                    </div>
                </div>
            </div>

        </div>

{{--        <!-- Google Maps - Go to the bottom of the page to change settings and map location. -->--}}
{{--        <div class="bg-grey-100 px-3 px-xl-0 border-radius-2 p-relative overflow-hidden mt-5">--}}
{{--            <div id="googlemaps" class="google-map m-0" style="min-height: 580px;"></div>--}}
{{--        </div>--}}

        <!-- Free Quote -->
        <div class="container pt-5">
            <div class="row pt-4 pt-lg-5">
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <div class="appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="0">
                        <span class="badge bg-gradient-light-primary-rgba-20 text-secondary rounded-pill text-uppercase font-weight-semibold text-2-5 px-3 py-2 px-4 mb-4"><span class="d-inline-flex py-1 px-2">Contact Form</span></span>
                    </div>
                    <h2 class="text-9 text-lg-12 font-weight-semibold line-height-1 mb-4">Get in Touch with Our Team</h2>

                    <form class="contact-form pt-3" action="{{ route('send.enquiry') }}" method="POST">
                        @csrf
{{--                        @if(Session::has('message'))--}}
{{--                        <div class="contact-form-success alert alert-success d-none mt-4">--}}
{{--                            <strong>Success!</strong> Your message has been sent to us.--}}
{{--                        </div>--}}
{{--                        @endif--}}
                        @if ($errors->any())
                        <div class="contact-form-error alert alert-danger d-none mt-4">
                            <strong>Error!</strong> There was an error sending your message.
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
{{--                            <span class="mail-error-message text-1 d-block"></span>--}}
                        </div>
                        @endif

                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label class="form-label font-weight-bold text-uppercase text-dark mb-1 text-2">Your Name *</label>
                                <input type="text" value="" placeholder="Enter your name" data-msg-required="Please enter your name." maxlength="100" class="form-control text-3 h-auto border-width-2 border-radius-2 border-color-grey-200 py-2" name="name" required>
                            </div>
                            <div class="form-group col-lg-6">
                                <label class="form-label font-weight-bold text-uppercase text-dark mb-1 text-2">Email Address</label>
                                <input type="email" value="" placeholder="Enter your e-mail address" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control text-3 h-auto border-width-2 border-radius-2 border-color-grey-200 py-2" name="email" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label class="form-label font-weight-bold text-uppercase text-dark mb-1 text-2">Phone Number</label>
                                <input type="tel" value="" placeholder="Enter your phone number" class="form-control text-3 h-auto border-width-2 border-radius-2 border-color-grey-200 py-2" name="phone">
                            </div>
                            <div class="form-group col-lg-6">
                                <label class="form-label font-weight-bold text-uppercase text-dark mb-1 text-2">Company Name</label>
                                <input type="text" value="" placeholder="Enter your company name" class="form-control text-3 h-auto border-width-2 border-radius-2 border-color-grey-200 py-2" name="company">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label class="form-label font-weight-bold text-uppercase text-dark mb-1 text-2">Additional Information</label>
                                <textarea maxlength="5000" placeholder="Enter Additional Information or Questions" rows="8" class="form-control text-3 h-auto border-width-2 border-radius-2 border-color-grey-200 py-2" name="message"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <input type="submit" value="Send Message" class="btn btn-rounded btn-dark box-shadow-7 font-weight-medium btn-swap-1 right" data-loading-text="Loading...">
{{--                                    <span>Submit <i class="fa-solid fa-arrow-right ms-2 p-relative left-10"></i></span>--}}

                            </div>
                        </div>
                    </form>

                </div>
                <div class="col-lg-5 ps-lg-5">

                    <div class="appear-animation pt-lg-5 mt-lg-2" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">
                        <div class="d-flex align-items-center pt-2 pb-4">
                            <p class="d-inline-block mb-0 font-weight-bold line-height-1"><mark class="text-dark mark mark-pos-2 mark-height-50 mark-color bg-color-before-primary-rgba-30 font-secondary text-15 mark-height-30 n-ls-5 p-0">{{ date('Y') - $contact['est_year'] }}+</mark></p>
                            <span class="custom-font-tertiary text-6 text-dark n-ls-1 fst-italic ps-2">Years of Experience</span>
                        </div>
                    </div>

                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">
                        <div class="py-2 d-flex align-items-center text-4-5 n-ls-1 text-dark">
                            <div>
                                <img src="img/demos/accounting-1/icons/icon-4.svg" width="48" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-secondary me-md-2 p-relative top-2'}" />
                            </div>
                            <div class="ps-1">
                                <p class="mb-0 text-3-5 p-relative bottom-2"><i class="fas fa-star custom-text-color-2 text-2"></i><i class="fas fa-star custom-text-color-2 text-2"></i><i class="fas fa-star custom-text-color-2 text-2"></i><i class="fas fa-star custom-text-color-2 text-2"></i><i class="fas fa-star custom-text-color-2 text-2"></i></p>
                                <strong class="custom-font-secondary pe-2">Join Our</strong><span class="d-none d-md-inline-block pe-2"> | </span>1000+ clients nationwide!
                            </div>
                        </div>
                    </div>

                    <div class="appear-animation pt-4 mb-3" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">
                        <span class="badge bg-light text-dark border custom-font-secondary border-all-light box-shadow-8 n-ls-05 rounded-pill text-uppercase font-weight-semibold text-2 px-3 py-2 px-1 me-1"><span class="d-inline-flex py-1 px-2">Quick Reply</span></span>
                        <p class="mb-0 text-dark mt-2 text-3-5">Usually in 24 hours in working days.</p>
                    </div>

                    <!-- Explore Further -->
                    <div class="bg-tertiary text-light p-3 border-radius-2 mb-4">
                        <div class="m-3">
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
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
@endsection
