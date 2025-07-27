<!-- Main Slider -->
<div class="owl-carousel owl-carousel-light owl-carousel-light-init-fadeIn owl-theme manual nav-style-1 nav-arrows-thin nav-inside nav-inside-plus nav-dark nav-lg nav-font-size-lg rounded-nav nav-borders show-nav-hover mb-0" data-plugin-options="{'autoplay': true, 'autoplayTimeout': 7000}" data-dynamic-height="['750px','750px','750px','750px','750px']" style="height: 750px;">
    <div class="owl-stage-outer">
        <div class="owl-stage">

            <!-- Carousel Slide 1 -->
            @foreach ($sections['home']['slides'] as $slide)
                @php
                    $imageUrl = asset($slide['image'] ?? 'img/demos/accounting-1/slides/slide-2.jpg');
                @endphp

                <div class="owl-item p-relative border-radius-2 overflow-hidden">
                <div class="background-image-wrapper p-absolute z-index-1 top-0 left-0 right-0 bottom-0 overlay overlay-color-dark overlay-show overlay-op-6" data-appear-animation="kenBurnsToLeft" data-appear-animation-duration="30s" data-carousel-onchange-show style="background-image: url('{{ $imageUrl }}'); background-size: cover; background-position: center;"></div>
                <div class="container text-color-light p-relative z-index-2">
                    <div class="row justify-content-center align-items-center mh-750px py-5">
                        <div class="col-lg-6 text-center">
                            <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">
                                <div class="rotate-animation">
                                    <img width="90" height="90" src="{{ asset('img/demos/accounting-1/icons/icon-shape-1.svg') }}" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary mb-4'}" />
                                </div>
                            </div>
                            <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                                <h4 class="text-6 text-lg-7 text-color-light font-weight-regular mb-4"><span class="d-inline-flex p-relative top-7"><img width="34" height="34" src="{{ asset('img/demos/accounting-1/icons/icon-7.svg') }}"  data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light d-inline-flex'}" alt=""></span> {{ $slide['title'] }}</h4>
                            </div>
                            <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">
                                <h2 class="text-10 text-lg-12 font-weight-semibold text-color-light line-height-1">{{ $slide['description'] }}</h2>
                            </div>
                            <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">
                                <a href="#start" data-hash data-hash-offset="0" data-hash-offset-lg="0" class="btn btn-light btn-effect-2 transition-3ms border-0 btn-rounded btn-xl text-3 py-4 btn-with-arrow-solid mt-3" data-bs-toggle="modal" data-bs-target="#formModal">
                                    <strong class="d-inline-flex text-dark font-weight-medium text-3-5 text-lg-4 me-3 px-3">Get Free Consultation</strong>
                                    <span class="bg-transparent box-shadow-6"><i class="fa-solid fa-arrow-right text-dark"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="owl-nav">
        <button type="button" role="presentation" class="owl-prev" aria-label="Previous"></button>
        <button type="button" role="presentation" class="owl-next" aria-label="Next"></button>
    </div>
</div>
