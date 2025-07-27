<!-- Free Quote -->
<div class="container pt-5">
    <div class="row align-items-center pt-4 pb-5 pt-lg-5">
        <div class="col-lg-6 mb-5 mb-lg-0 pe-lg-5">
            <div class="appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="0">
                <span class="badge bg-gradient-light-primary-rgba-20 text-secondary rounded-pill text-uppercase font-weight-semibold text-2-5 px-3 py-2 px-4 mb-4"><span class="d-inline-flex py-1 px-2">Free Quote</span></span>
            </div>
            <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                <h2 class="text-9 text-lg-12 font-weight-semibold line-height-1 mb-4">{{ $contact['intro_title'] }}</h2>
            </div>
            <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                <p>{{ $contact['intro_description'] }}</p>
            </div>
            <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">
                <div class="d-flex align-items-center py-3">
                    <span class="badge bg-light text-dark border custom-font-secondary border-all-light box-shadow-8 n-ls-05 rounded-pill text-uppercase font-weight-semibold text-2 px-3 py-2 px-1 me-1"><span class="d-inline-flex py-1 px-2">Quick Reply</span></span>
                    <p class="mb-0 text-dark ps-2 ms-1 text-3-5">Usually in 24 hours in working days.</p>
                </div>
            </div>
            <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">
                <div class="d-flex flex-column py-4">
                    {{-- PHONE BLOCK --}}
                    <div class="mb-4">
                        <div class="feature-box feature-box-secondary align-items-center">
                            <div class="feature-box-icon feature-box-icon-lg p-static box-shadow-7">
                                <img src="{{ asset('img/icons/phone-2.svg') }}" width="30" height="30" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light'}" />
                            </div>
                            <div class="feature-box-info ps-2">
                                <strong class="d-block text-uppercase text-color-secondary p-relative top-2">Call Us</strong>
                                <a href="tel:{{ $contact['main_clean_phone'] }}" class="text-decoration-none font-secondary text-5 font-weight-semibold text-color-dark text-color-hover-primary transition-2ms negative-ls-05 ws-nowrap p-relative bottom-2">
                                    {{ $contact['phone_numbers'][0] }}
                                </a>
                            </div>
                        </div>
                    </div>

                    {{-- EMAIL BLOCK --}}
                    <div>
                        <div class="feature-box feature-box-secondary align-items-center">
                            <div class="feature-box-icon feature-box-icon-lg p-static box-shadow-7">
                                <img src="{{ asset('img/icons/email.svg') }}" width="30" height="30" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light'}" />
                            </div>
                            <div class="feature-box-info ps-2">
                                <strong class="d-block text-uppercase text-color-secondary p-relative top-2">Send E-mail</strong>
                                <a href="mailto:{{ $contact['email'] }}" class="text-decoration-none font-secondary text-5 font-weight-semibold text-color-dark text-color-hover-primary transition-2ms negative-ls-05 ws-nowrap p-relative bottom-2">
                                    {{ $contact['email'] }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">
                <p class="text-2-5 pt-3">*Submitting your information, you consent to the terms of this <a href="#" class="text-decoration-underline text-color-secondary text-color-hover-primary">Privacy Notice.</a></p>
            </div>
        </div>
        <div class="col-lg-6 p-relative">

            <form class="contact-form" action="{{ route('send.enquiry') }}" method="POST">
                @csrf
{{--                <div class="contact-form-success alert alert-success d-none mt-4">--}}
{{--                    <strong>Success!</strong> Your message has been sent to us.--}}
{{--                </div>--}}

{{--                <div class="contact-form-error alert alert-danger d-none mt-4">--}}
{{--                    <strong>Error!</strong> There was an error sending your message.--}}
{{--                    <span class="mail-error-message text-1 d-block"></span>--}}
{{--                </div>--}}


                @if(Session::has('message'))
                    <div class="contact-form-success alert alert-success d-none mt-4">
                        <strong>Success!</strong> Your message has been sent to us.
                    </div>
                @endif
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
{{--                <div class="row">--}}
{{--                    <div class="form-group col-lg-6">--}}
{{--                        <label class="form-label font-weight-bold text-uppercase text-dark mb-1 text-2">Industry</label>--}}
{{--                        <input type="text" value="" placeholder="Enter your industry name" class="form-control text-3 h-auto border-width-2 border-radius-2 border-color-grey-200 py-2" name="industry">--}}
{{--                    </div>--}}
{{--                    <div class="form-group col-lg-6">--}}
{{--                        <label class="form-label font-weight-bold text-uppercase text-dark mb-1 text-2">Annual Revenue</label>--}}
{{--                        <input type="text" value="" placeholder="Enter your annual revenue" class="form-control text-3 h-auto border-width-2 border-radius-2 border-color-grey-200 py-2" name="revenue">--}}
{{--                    </div>--}}
{{--                </div>--}}
                <div class="row">
                    <div class="form-group col">
                        <label class="form-label font-weight-bold text-uppercase text-dark mb-1 text-2">Additional Information</label>
                        <textarea maxlength="5000" placeholder="Enter Additional Information or Questions" rows="8" class="form-control text-3 h-auto border-width-2 border-radius-2 border-color-grey-200 py-2" name="message"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col">
                        <button type="submit" class="btn btn-rounded btn-dark box-shadow-7 font-weight-medium btn-swap-1" data-clone-element="1">
                            <span>Submit <i class="fa-solid fa-arrow-right ms-2 p-relative left-10"></i></span>
                        </button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>
