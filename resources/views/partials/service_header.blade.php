<div class="page-header py-0 bg-tertiary px-3 px-xl-0 border-radius-2 p-relative mb-0 overflow-hidden">
    <div class="overflow-hidden p-absolute top-0 left-0 bottom-0 h-100 w-100">
        <div class="custom-el-5 custom-pos-4">
            <img class="img-fluid opacity-2 opacity-hover-2" src="{{ asset('img/demos/accounting-1/svg/waves.svg') }}" alt="">
        </div>
    </div>
    <div class="container p-relative z-index-1 py-2">
        <div class="row mh-200px mh-lg-300px align-items-center py-4">
            <div class="col">
                <div class="appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="0">
                    <span class="badge bg-color-light-rgba-10 text-light rounded-pill text-uppercase font-weight-semibold text-2-5 px-3 py-2 px-4 mb-3"><span class="d-inline-flex py-1 px-2">Main Service</span></span>
                </div>
                <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="200">
                    <h1 class="text-9 text-lg-12 text-color-light font-weight-semibold line-height-1 mb-2">{{ $service['title'] }}</h1>
                </div>
                <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="200">
                    <ul class="breadcrumb d-flex text-3-5 font-weight-semi-bold pb-2 mb-3">
                        <li><a href="{{ url('/') }}" class="text-light text-decoration-none">Home</a></li>
                        <li class="active">{{ $service['title'] }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
