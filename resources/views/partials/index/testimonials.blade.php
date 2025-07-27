<!-- What Our Clients Say -->
<style>

    .initial-avatar {
        /* Center the content */
        align-items: center;
        display: flex;
        justify-content: center;

        /* Colors */
        background-color: #bebebe;
        color: #fff;

        /* Rounded border */
        border-radius: 50%;
        height: 4rem;
        width: 4rem;
        font-size: 1em;
    }
</style>
<div class="container pb-5">
    <div class="row">
        <div class="col-lg-6 mb-5 mb-lg-0 p-relative z-index-1">
            <div class="sticky-container h-100">
                <div data-plugin-sticky data-plugin-options="{'minWidth': 0, 'containerSelector': '.sticky-container', 'padding': {'top': 0, 'bottom': 0}}">
                    <div class="appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="0">
                        <span class="badge bg-gradient-light-primary-rgba-20 text-secondary rounded-pill text-uppercase font-weight-semibold text-2-5 px-3 py-2 px-4 mb-4 mt-4"><span class="d-inline-flex py-1 px-2">Loved by Our Clients <i class="fa-solid fa-heart ms-2 custom-text-color-1"></i></span></span>
                    </div>
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                        <h2 class="text-9 text-lg-12 font-weight-semibold line-height-1 mb-4">What Our Clients Say</h2>
                    </div>
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                        <p>Our commitment to delivering exceptional legal services is reflected in the feedback we receive from our valued clients.</p>
                    </div>

                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">
                        <div class="py-2 d-flex text-4-5 n-ls-1 text-dark">
                            <img src="{{ asset('img/demos/accounting-1/icons/icon-4.svg') }}" width="28" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-secondary me-2'}" /> <strong class="custom-font-secondary pe-2">Join Our</strong> | 1000+ clients nationwide!
                        </div>
                    </div>

                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">
                        <div class="d-flex pt-4 align-items-center">
                            <a href="#!" class="btn btn-rounded btn-dark box-shadow-7 font-weight-medium btn-swap-1" data-clone-element="1" data-bs-toggle="modal" data-bs-target="#formModal">
                                <span>Get Free Consultation<i class="fa-solid fa-arrow-right ms-2 p-relative left-10"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            @foreach ($sections['home']['testimonials'] as $testimonial)

                @php
                    $nameParts = explode(' ', $testimonial['name']);
                    $initials = '';
                    foreach ($nameParts as $part) {
                        $initials .= strtoupper(substr($part, 0, 1));
                    }
                @endphp
            <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                <div class="card border-radius-2 bg-color-light border-0 box-shadow-9 mb-5">
                    <div class="card-body py-3 px-2">
                        <div class="testimonial testimonial-style-4 border-0 box-shadow-none m-0 p-0">
                            <div class="testimonial-author pb-3">
                                <div class="testimonial-author-thumbnail">
                                    <div class="initial-avatar" style="margin-bottom: 0em">{{ $initials }}</div>
                                </div>
                                <p><strong class="font-weight-bold">{{ $testimonial['name'] }}</strong><span>{{ $testimonial['role'] }} - {{ $testimonial['company'] }}</span></p>
                            </div>
                            <div class="px-4 mx-2 pt-2 pb-3">
                                <p>{{ $testimonial['content'] }}</p>
{{--                                <p class="mb-0"><i class="fas fa-star custom-text-color-2 text-2"></i><i class="fas fa-star custom-text-color-2 text-2"></i><i class="fas fa-star custom-text-color-2 text-2"></i><i class="fas fa-star custom-text-color-2 text-2"></i><i class="fas fa-star custom-text-color-2 text-2"></i></p>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
