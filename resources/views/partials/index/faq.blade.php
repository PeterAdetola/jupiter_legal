<!-- News -->
<div>
    <div class="text-center overflow-hidden w-100">
        <div class="appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">
            <h2 class="text-resp-150 ws-nowrap font-weight-semi-bold text-overflow-center text-color-grey-100 n-ls-5 mb-5">FAQs</h2>
        </div>
    </div>
    <div class="bg-grey-100 px-3 px-xl-0 border-radius-2 p-relative overflow-hidden custom-pos-3">
        <div class="container py-5">
            <div class="row pt-4">
                <div class="col text-center">
                    <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="200">
                        <h2 class="text-9 text-lg-12 font-weight-semibold line-height-1 mb-4">Frequently Asked Questions</h2>
                    </div>
                </div>
            </div>
            @php
                $faqs = $sections['home']['faq'];
                $chunks = array_chunk($faqs, ceil(count($faqs) / 2));
            @endphp

            <div class="row pb-5">
                @foreach ($chunks as $colIndex => $faqChunk)
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <div class="accordion accordion-modern-status accordion-modern-status-borders accordion-modern-status-arrow" id="accordion{{ 200 + $colIndex }}">
                            @foreach ($faqChunk as $i => $faq)
                                @php $count = $colIndex * ceil(count($faqs) / 2) + $i + 1; @endphp
                                <div class="card card-default">
                                    <div class="card-header" id="collapseHeading{{ $count }}">
                                        <h4 class="card-title m-0">
                                            <a class="accordion-toggle text-color-dark font-weight-bold collapsed"
                                               data-bs-toggle="collapse"
                                               data-bs-target="#collapse{{ $count }}"
                                               aria-expanded="false"
                                               aria-controls="collapse{{ $count }}">
                                                {{ $count }} - {{ $faq['question'] }}
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse{{ $count }}" class="collapse"
                                         aria-labelledby="collapseHeading{{ $count }}"
                                         data-bs-parent="#accordion{{ 200 + $colIndex }}">
                                        <div class="card-body pt-0">
                                            <p class="mb-0">{{ $faq['answer'] }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>

</div>
