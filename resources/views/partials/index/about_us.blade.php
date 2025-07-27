<!-- Who We Are -->
@php
$placeholder = "We provide comprehensive accounting and financial services tailored to meet the needs of businesses and individuals alike. We are here to help you navigate the complexities of the financial world.

";
@endphp
<div class="container" id="intro">
    <div class="row align-items-center">
        <div class="col-lg-6 mb-5 mt-5 mt-lg-0 py-lg-5">
            <div class="appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="0">
                <span class="badge bg-gradient-light-primary-rgba-20 text-secondary rounded-pill text-uppercase font-weight-semibold text-2-5 px-3 py-2 px-4 mb-4"><span class="d-inline-flex py-1 px-2">Who We Are</span></span>
            </div>
            <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                <h2 class="text-9 text-lg-12 font-weight-semibold line-height-1 mb-4">{{ $sections['about']['title'] }}</h2>
            </div>
            <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                <p class="pe-lg-5">{!! $sections['about']['content'] !!}  </p>
            </div>

            <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">
                <div class="d-flex align-items-center pt-2 pb-4">
                    <p class="d-inline-block mb-0 font-weight-bold line-height-1"><mark class="text-dark mark mark-pos-2 mark-height-50 mark-color bg-color-before-primary-rgba-30 font-secondary text-15 mark-height-30 n-ls-5 p-0">{{ date('Y') - $contact['est_year'] }}+</mark></p>
                    <span class="custom-font-tertiary text-6 text-dark n-ls-1 fst-italic ps-2">Years of Experience</span>
                </div>
            </div>

            <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">
                <div class="d-flex flex-column flex-lg-row pt-3 align-items-lg-center">
                    <div>
                        <a href="{{ route('contact') }}" class="btn btn-rounded btn-dark box-shadow-7 font-weight-medium btn-swap-1" data-clone-element="1">
                            <span>Contact Us Now <i class="fa-solid fa-arrow-right ms-2 p-relative left-10"></i></span>
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
        <div class="col-lg-6 text-center p-relative py-5">
            <div class="opacity-2 p-absolute w-100">
                <img src="{{ asset('img/icons/abstract-bg-1.svg') }}" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary w-100'}" />
            </div>
            <div class="cascading-images-wrapper custom-cascading-images-wrapper-1">
                <div class="cascading-images p-relative">
                    <div class="custom-mask-img custom-mask-img-2">
                        <img class="img-fluid" src="{{ asset('img/demos/accounting-1/generic/realtor.jpg') }}" loading="lazy" alt="">
                    </div>
                    <div class="p-absolute w-100 custom-mask-img custom-mask-img-3" style="top: 21%; left: -30%;">
                        <img src="{{ asset('img/demos/accounting-1/generic/corporate_man.jpg') }}" loading="lazy" class="img-fluid" alt="" />
                    </div>
                    <div class="p-absolute bg-color-light border-radius-2 p-3 text-3-5 n-ls-05 text-dark box-shadow-7 d-flex align-items-center" style="bottom: 0%; left: -45%;">
                        <img src="{{ asset('img/demos/accounting-1/icons/icon-4.svg') }}" width="26" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-secondary me-1'}" /> <strong class="custom-font-secondary pe-2">Join Our</strong> | 1000+ clients nationwide!
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
