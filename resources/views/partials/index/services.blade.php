@php
    $services = config('main_services');
@endphp
<!-- Our Services -->
<div class="bg-secondary px-3 px-xl-0 border-radius-2 text-light p-relative overflow-hidden">
    <div class="custom-el-3 custom-pos-2 opacity-1">
        <img class="img-fluid opacity-5" src="{{ asset('img/demos/accounting-1/svg/waves-2.svg') }}" alt="">
    </div>
    <div class="container p-relative z-index-1">
        <div class="row align-items-center py-5">
            <div class="col py-4">
                <div class="appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="0">
                    <span class="badge bg-gradient-secondary-dark text-light rounded-pill text-uppercase font-weight-semibold text-2-5 px-3 py-2 px-4 mb-4"><span class="d-inline-flex py-1 px-2">Our Services</span></span>
                </div>
                <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                    <h2 class="text-9 text-lg-12 font-weight-semibold line-height-1 mb-2 text-light">Our Services</h2>
                </div>
                <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                    <p class="pe-lg-5 text-light opacity-7">Leveraging our expertise in Real Estate and Business law.</p>
                </div>

                <div class="pt-2 pb-4">

                    <div class="carousel-half-full-width-wrapper">

                        <div class="row">

                            <div class="col-lg-6 mb-4 mb-lg-0">
                                <h4 class=" text-light">{{ $sections['realty']['title'] ?? 'Realty Title' }}</h4>
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
                                <h4 class=" text-light">{{ $sections['business']['title'] ?? 'Business Title' }}</h4>
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

                <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                    <p class="mb-0 text-light d-flex justify-content-center">
                        <img src="{{ asset('img/demos/accounting-1/icons/icon-5.svg') }}" width="30" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light me-2'}" />
                        24/7 Availability - Round-the-clock support for all your real estate and business legal needs, anytime.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
