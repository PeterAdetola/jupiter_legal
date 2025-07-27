<!-- Parallax -->
<div class="bg-quaternary border-radius-2 p-relative overflow-hidden mt-5">
    <section class="section position-relative overflow-hidden border-0 overlay overlay-color-tertiary overlay-show overlay-op-6 m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5, 'parallaxHeight': '120%', 'fadeIn': true}" data-image-src="{{ asset($sections['home']['ad']['image']) }}" loading="lazy">
        <div class="container py-3">
            <div class="row align-items-center justify-content-center mh-500px">
                <div class="col-lg-6 text-light text-center">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="0">
                        <h4 class="text-6 text-lg-7 text-color-light font-weight-regular mb-4"><span class="d-inline-flex p-relative top-7"><img width="34" height="34" src="{{ asset('img/demos/accounting-1/icons/icon-7.svg') }}"  data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light d-inline-flex'}" alt=""></span>{{ $sections['home']['ad']['title'] ?? '' }}</h4>
                    </div>
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                        <h2 class="text-10 text-lg-12 font-weight-semibold text-color-light line-height-1">{{ $sections['home']['ad']['subtitle'] ?? '' }}</h2>
                    </div>
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                        <a class="text-decoration-none lightbox" href="https://www.youtube.com/watch?v=TfU0qjuZkJ4" data-plugin-options="{'type':'iframe'}">
                            <i class="fa-solid fa-arrow-right featured-icon featured-icon-style-2 featured-icon-hover-effect-1 pulseAnim pulseAnimAnimated animation-infinite bg-primary right-4 top-0 m-0"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
