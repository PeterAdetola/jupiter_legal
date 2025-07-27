<footer id="footer" class="border-0 bg-light px-3 px-lg-5 pt-0 text-3">
    <!-- Explore Further -->
    <div class="bg-secondary border-radius-2 p-relative overflow-hidden">
        <div class="container-fluid">
            <div class="row">
                <div class="col px-0 text-center text-color-light">
                    <div class="d-flex flex-column flex-lg-row align-items-lg-center justify-content-lg-center">
                        <div class="me-lg-4 flex-grow-1 flex-lg-grow-0">
                            <span class="d-inline-block text-3 py-4 px-5 text-uppercase font-weight-medium custom-bg-gradient-1 w-100 rounded-pill">Explore Further:</span>
                        </div>
                        <div class="me-3 ps-3 p-relative bottom-1 pt-3 pt-lg-0">
                            <a href="{{ route('about') }}#about-services" class="btn btn-arrow-effect-1 bg-transparent text-light border-0 text-lg-3-5 py-2 py-lg-0">Learn About Our Legal Services <i class="fas fa-arrow-right ms-2"></i></a>
                        </div>
                        <div class="py-3 py-lg-0 p-relative bottom-1 border-start border-color-light-rgba-20">
                            <a href="#!" class="btn btn-arrow-effect-1 bg-transparent text-light border-0 text-lg-3-5 py-2 py-lg-0" data-bs-toggle="modal" data-bs-target="#formModal">Get Free Consultation <i class="fas fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="border-bottom border-bottom-color-grey-100"></div><br><br>
    <div class="border-bottom border-bottom-color-grey-100">
        <div class="container">
            <div class="row align-items-center pb-5">
                <div class="col-lg-3">
                    <a href="{{ url('/') }}">
                        <img alt="Porto" width="131" height="60" src="{{ asset('img/demos/accounting-1/logo.png') }}">
                    </a>
                </div>
                <div class="col-lg-9 pt-4 pt-lg-0">
                    <div class="d-flex flex-column flex-lg-row justify-content-lg-end py-4 align-items-lg-center">
                        <div class="pe-4">
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
                        <div class=" pt-4 pt-lg-0 pe-0">
                            <div class="feature-box feature-box-secondary align-items-center">
                                <div class="feature-box-icon feature-box-icon-lg p-static box-shadow-7">
                                    <img src="{{ asset('img/icons/email.svg') }}" width="30" height="30" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light'}" />
                                </div>
                                <div class="feature-box-info ps-2">
                                    <strong class="d-block text-uppercase text-color-secondary p-relative top-2">Send E-mail</strong>
                                    <a href="mailto:{{ $contact['email'] }}" class="text-decoration-none font-secondary text-5 font-weight-semibold text-color-dark text-color-hover-primary transition-2ms negative-ls-05 ws-nowrap p-relative bottom-2">{{ $contact['email'] }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container pb-lg-4 pt-5">
        <div class="row pt-3">
            <div class="col-lg-4">
                <h4 class="text-color-dark font-weight-bold mb-3">Jupiter Legal</h4>

                <p class="text-3-5 text-color-grey">{{ $contact['hook'] }}</p>

                <div class="d-flex align-items-center pt-2 pb-4">
                    <p class="d-inline-block mb-0 font-weight-bold line-height-1"><mark class="text-dark mark mark-pos-2 mark-height-50 mark-color bg-color-before-primary-rgba-30 font-secondary text-8 mark-height-30 n-ls-5 p-0">{{ date('Y') - $contact['est_year'] }}+</mark></p>
                    <span class="custom-font-tertiary text-5 text-dark n-ls-1 fst-italic ps-2">Years of Experience</span>
                </div>

                <ul class="social-icons social-icons-clean social-icons-medium">
                    <li class="social-icons-instagram">
                        <a href="{{ $contact['social_media']['instagram'] }}" target="_blank" title="Instagram">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li class="social-icons-facebook">
                        <a href="{{ $contact['social_media']['facebook'] }}" target="_blank" title="Facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-6 col-lg-2 pt-4 pt-lg-0">
                <h4 class="text-color-dark font-weight-bold mb-3">About</h4>
                <ul class="list list-unstyled">
                    <li>
                        <a href="{{ url('/') }}" class="text-color-grey text-color-hover-primary">
                            Home
                        </a>
                    </li>
                    <li>
                        <a class="text-color-grey text-color-hover-primary" href="{{ route('about') }}">
                            About
                        </a>
                    </li>
                    <li>
                        <a class="text-color-grey text-color-hover-primary" href="{{ route('main.service', ['main_service' => 'real-estate-law']) }}">
                            Real Estate Law
                        </a>
                    </li>
                    <li>
                        <a class="text-color-grey text-color-hover-primary" href="{{ route('main.service', ['main_service' => 'business-law']) }}">
                            Business Law
                        </a>
                    </li>
                    <li>
                        <a class="text-color-grey text-color-hover-primary" href="demo-accounting-1-contact.html">
                            Contact
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-6 col-lg-3 pt-4 pt-lg-0">
                <h4 class="text-color-dark font-weight-bold mb-3">Real Estate Laws</h4>
                <ul class="list list-unstyled">
                    @foreach(($main_services['real-estate-law']['sub_services'] ?? []) as $sub)
                        <li><a href="{{ route('sub.service', ['main_service' => 'real-estate-law', 'slug' => $sub['slug']]) }}" class="text-color-grey text-color-hover-primary">{{ $sub['title'] }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="col-lg-3 pt-4 pt-lg-0">
                <h4 class="text-color-dark font-weight-bold mb-3">Business Laws</h4>
                <ul class="list list-unstyled">
                    @foreach(($main_services['business-law']['sub_services'] ?? []) as $sub)
                        <li><a href="{{ route('sub.service', ['main_service' => 'business-law', 'slug' => $sub['slug']]) }}" class="text-color-grey text-color-hover-primary">{{ $sub['title'] }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="footer-copyright bg-transparent pb-5">
                <div class="container">
                    <hr>
                    <div class="row">
                        <div class="col-lg-6 text-center text-lg-start py-3">
                            <p class="text-3 mb-0 opacity-6">
                                &copy; <?php echo date('Y'); ?> Jupiter Legal is Proudly Powered by
                                <a href="https://www.thepacmedia.com/" target="_blank" class="text-decoration-underline text-color-secondary text-color-hover-primary">
                                    Pacmedia Creatives
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
