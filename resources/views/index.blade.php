@extends('mainframe')
@section('content')
    @php
        $services = config('main_services');
    @endphp

        <!-- Hero -->
    @include('partials.index.hero')

    @include('partials.index.main_services')

    @include('partials.index.about_us')

    @include('partials.index.services')

    @include('partials.index.features')

    @include('partials.index.brag')

    @include('partials.index.clients')

    @include('partials.index.testimonials')

    @include('partials.index.faq')

    @include('partials.index.contact')

@endsection
