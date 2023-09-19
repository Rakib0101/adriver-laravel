@extends('frontend.layouts.master')

@section('content')
<div>
    <x-frontend.breadcrumb.breadcrumb-view label='About Us' url='#' title="About Adriver" />
    <x-frontend.inner-pages.about.hero-section />
    <x-frontend.inner-pages.about.partners-section />
    <x-frontend.inner-pages.about.testimonial-section />
    <x-frontend.mobile-app.mobile-app />
    <x-frontend.newsletter.newsletter-view/>
</div>
@endsection
