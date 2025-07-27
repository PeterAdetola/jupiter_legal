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
                        <a href="{{ route('contact') }}" class="btn btn-rounded btn-dark box-shadow-7 font-weight-medium btn-swap-1" data-clone-element="1">
                            <span>Contact Us Now <i class="fa-solid fa-arrow-right ms-2 p-relative left-10"></i></span>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
