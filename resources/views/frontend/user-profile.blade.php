@extends('frontend.layouts.master')

@section('content')
  <x-frontend.breadcrumb.breadcrumb-view title="Rnix Profile" url="/home" label="profile" />
  <div class="container py-14">
    <div class="grid gap-6 xl:grid-cols-4 lg:grid-cols-3 sm:grid-cols-2 grid-cols-1">
      <div class="col-span-1">
        <x-frontend.user.profile />
      </div>
      <div class="xl:col-span-3 lg:col-span-2 sm:col-span-1">
        <h2 class="text-[32px] mb-6 font-semibold leading-10 text-gray-900">
          Active Listing
        </h2>
        <div class="grid xl:grid-cols-3 lg:grid-cols-2 gap-6">
          <x-frontend.listing-card.grid-view isFeatured="true" isSlide="true" forSell="true" />
          <x-frontend.listing-card.grid-view isUrgent="true" isSlide="true" forSell="true" />
          <x-frontend.listing-card.grid-view isFeatured="true" isSlide="false" forSell="false" />
          <x-frontend.listing-card.grid-view isFeatured="true" isSlide="true" forSell="true" />
          <x-frontend.listing-card.grid-view isFeatured="true" isSlide="true" forSell="true" />
          <x-frontend.listing-card.grid-view isFeatured="true" isSlide="true" forXchange="true" />
        </div>

        <button
          class="flex items-center uppercase h-[48px] mt-[24px] py-[12px] px-[20px] bg-gray-50 mx-auto rounded-md font-display text-[15px] leading-[48px] font-semibold">
          <span class="mr-2">
            <LoadingIcon />
          </span> Load All
        </button>
        <x-frontend.user.seller-reviews />
      </div>
    </div>
  </div>
@endsection
