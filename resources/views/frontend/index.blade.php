@extends('frontend.layouts.master')

@section('content')
    <x-frontend.hero-section />
    <x-frontend.category.category-view />
    <div class="container py-[100px]">
        <div class="flex xl:flex-row flex-col-reverse gap-6">
            <div class="xl:w-3/4 px-0 xl:px-0 w-full">
                <div class="flex justify-between items-center mb-8">
                    <h2 class="xl:text-[40px] text-xl leading-12 text-gray-900 font-display font-semibold">
                        Featured Listing
                    </h2>
                    <div>
                        <a href="/browse-listing"
                            class="inline-flex gap-1.5 items-center text-gray-500 text-base font-semibold font-display hover:text-primary-500">
                            View All
                            <x-frontend.svg-icons.double-arrow />
                        </a>
                    </div>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-1 gap-6 justify-items-center">
                    <x-frontend.listing-card.list-view isTop="true" for-sell="true" />
                    <x-frontend.listing-card.list-view isUrgent="true" isFeatured="true" is-slide="true" />
                    <x-frontend.listing-card.list-view isTop="true" isUrgent="true" isFavorite="true" />
                    <x-frontend.listing-card.list-view isFeatured="true" />
                    <x-frontend.listing-card.list-view isTop="true" isUrgent="true" />
                    <x-frontend.listing-card.list-view isTop="true" isUrgent="true" />
                </div>
            </div>
            <div class="xl:w-1/4 w-full xl:block">
                <div class="md:bg-gray-50 py-8 lg:px-5 xl:px-4 md:p-4 md:rounded-lg">
                    <h2 class="text-gray-900 text-xl leading-[100%] font-semibold font-display mb-3">
                        Top Listing
                    </h2>
                    <div
                        class="flex md:hidden lg:flex lg:flex-row justify-center items-center xl:flex-col flex-col gap-4 lg:gap-4 lg:justify-center">
                        <x-frontend.listing-card.grid-view isTop="true" forSell="true" is-urgent="true" />
                        <x-frontend.listing-card.grid-view is-Top="true" is-favorite="true" is-slide="true" />
                        <x-frontend.listing-card.grid-view isTop="true" for-xchange="true" is-urgent="true" is-slide="true" />
                    </div>
                    <a href="#"
                        class="hidden browse-link lg:flex items-center justify-center text-center gap-3 pt-3 text-gray-500 hover:text-primary-500">
                        <span>Browse All Ads</span>
                        <span>
                            <button-arrow />
                        </span>
                    </a>
                    <div class="hidden md:block lg:hidden">
                        <TopListingSlider />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <img class="w-full" src="{{ asset('frontend/assets/images/img/advertisement-h.png')}}" alt="">
    </div>
    <div class="border-b border-gray-100 px-4 md:px-0">
        <x-frontend.location.location-view />
    </div>
    <div class="latest-listing">
        <div class="container md:py-[100px] py-16">
            <h2
                class="text-gray-900 text-xl md:text-[40px] md:leading-[48px] font-semibold font-display text-center mb-[50px]">
                Latest Listing</h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-3 md:gap-6 justify-items-center">
                <x-frontend.listing-card.grid-view forSell="true" isTop="true" isSlide="true" />
                <x-frontend.listing-card.grid-view isUrgent="true" forXchange="true" />
                <x-frontend.listing-card.grid-view isFeatured="true" forSell="true" isFavorite="true" />
                <x-frontend.listing-card.grid-view isUrgent="true" />
                <x-frontend.listing-card.grid-view isTop="true" isFavorite="true" isUrgent="true" />
                <x-frontend.listing-card.grid-view isUrgent="true" forXchange="true" />
                <x-frontend.listing-card.grid-view forSell="false" isTop="true" />
                <x-frontend.listing-card.grid-view isFeatured="true" isUrgent="true" isSlide="true" />
                <x-frontend.listing-card.grid-view isTop="true" forXchange="true" />
                <x-frontend.listing-card.grid-view isFeatured="true" forXchange="true" />
                <x-frontend.listing-card.grid-view forSell="true" isFavorite="true" isTop="true" />
                <x-frontend.listing-card.grid-view isFeatured="true" isUrgent="true" />
            </div>
        </div>
    </div>
    <x-frontend.counter.counter-view />
    <div class="bg-gray-50">
        <x-frontend.pricing.pricing-area />
    </div>
    <x-frontend.mobile-app.mobile-app />
    <x-frontend.newsletter.newsletter-view />
@endsection
