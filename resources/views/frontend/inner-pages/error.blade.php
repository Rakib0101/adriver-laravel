@extends('frontend.layouts.blank')

@section('content')
<div class="w-full h-screen flex flex-row justify-center relative overflow-hidden">
    <div class="w-full h-full flex flex-col justify-end items-center py-12">
        <div>
            <h4 class="font-display font-semibold text-3xl xl:text-5xl leading-[56px] text-center text-gray-900 mb-5">
                500 Error! Page not found.
            </h4>
            <p class="font-display text-lg font-normal text-center text-gray-700 mb-8">
                The page you are looking foor doesn’t exist or an other error
                occurred. Go back, or head over to adriver.com to choose new
                direction
            </p>
        </div>
        <div class="flex justify-center gap-3">
            <x-frontend.button.outline-primary class="" href="/home">
                <HomeIcon />
                <span> Go To Home</span>
            </x-frontend.button.outline-primary>

            <x-frontend.button.primary-button class="" href="/home">
                <span> Go Back</span>
            </x-frontend.button.primary-button>
        </div>
        <p class="text-center bg-white pt-24 px-4 rounded-md text-base text-gray-500 text-opacity-90">
            All content © 2023-Current Adriver and respective copyright holders.
        </p>
    </div>
    <img src="{{ asset('frontend/assets/images/Error/Error500.png') }}" alt="" class="absolute max-w-[500px] w-full top-0 left-1/2 -translate-x-1/2" />
</div>
@endsection
