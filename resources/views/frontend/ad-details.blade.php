@extends('frontend.layouts.master')

@section('content')
    <div>
        <x-frontend.breadcrumb.breadcrumb-view title="Rnix Profile" url="/home" label="ad-details" />
        <div class="container mt-14">
            <div class="grid gap-6 lg:grid-cols-3 grid-cols-1">
                <div class="lg:col-span-2 col-span-1">
                    <div class="lg:pb-[100px] md:pb-[30px] pb-[10px]">
                        <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
                            class="swiper mySwiper2">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-5.jpg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-6.jpg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-7.jpg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-8.jpg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-9.jpg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-10.jpg" />
                                </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                        <div thumbsSlider="" class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-5.jpg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-6.jpg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-7.jpg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-8.jpg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-9.jpg" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://swiperjs.com/demos/images/nature-10.jpg" />
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-wrap gap-2 items-center mb-3">
                            <span
                                class="inline-flex gap-1 items-center text-sm text-white font-display font-semibold px-2.5 py-1 rounded bg-warning-500">Featured</span>
                            <span
                                class="inline-flex gap-1 items-center text-sm text-white font-display font-semibold px-2.5 py-1 rounded bg-danger-500">Urgent</span>
                            <span
                                class="inline-flex gap-1 items-center text-sm text-white font-display font-semibold px-2.5 py-1 rounded bg-blue-500"><icon-fire />Top
                                Ads</span>
                            <span
                                class="inline-flex gap-1 items-center text-base text-primary-500 font-display font-semibold"><icon-tag />For
                                Sale</span>
                            <span class="inline-flex gap-1 items-center text-base text-gray-900 font-display font-semibold">
                                <icon-location />
                                Vijayawada, Andra Pradesh, India
                            </span>
                        </div>
                        <div>
                            <h2 class="text-[32px] mb-8 leading-10 font-display font-semibold text-gray-900">
                                New Surface 8 Pro 2021 For Sell | Used 6 Month
                            </h2>
                            <div>
                                <h3 class="text-xl font-medium font-display mb-4 uppercase">
                                    FEATURE
                                </h3>
                                <ul class="feature-list mb-8">
                                    <li class="flex items-center gap-2 text-gray-700 text-base mb-4 font-display">
                                        <icon-check /> Windows 11 OS
                                    </li>
                                    <li class="flex items-center gap-2 text-gray-700 text-base mb-4 font-display">
                                        <icon-check /> 10 MP (Single Camera)
                                    </li>
                                    <li class="flex items-center gap-2 text-gray-700 text-base mb-4 font-display">
                                        <icon-check /> 6200 mAh Battery
                                    </li>
                                    <li class="flex items-center gap-2 text-gray-700 text-base mb-4 font-display">
                                        <icon-check /> 2D Face Unlock
                                    </li>
                                    <li class="flex items-center gap-2 text-gray-700 text-base mb-4 font-display">
                                        <icon-check /> Wireless Screen share
                                    </li>
                                    <li class="flex items-center gap-2 text-gray-700 text-base mb-4 font-display">
                                        <icon-check /> Multiple speakers
                                    </li>
                                    <li class="flex items-center gap-2 text-gray-700 text-base mb-4 font-display">
                                        <icon-check /> 120Hz Refresh Rate
                                    </li>
                                    <li class="flex items-center gap-2 text-gray-700 text-base mb-4 font-display">
                                        <icon-check /> 13.0 Inche Display
                                    </li>
                                    <li class="flex items-center gap-2 text-gray-700 text-base mb-4 font-display">
                                        <icon-check /> 5 MP Front Camera
                                    </li>
                                    <li class="flex items-center gap-2 text-gray-700 text-base mb-4 font-display">
                                        <icon-check /> HDR support, Ambient sensor
                                    </li>
                                    <li class="flex items-center gap-2 text-gray-700 text-base mb-4 font-display">
                                        <icon-check /> Platinum Color
                                    </li>
                                    <li class="flex items-center gap-2 text-gray-700 text-base mb-4 font-display">
                                        <icon-check /> Type-C USB
                                    </li>
                                    <li class="flex items-center gap-2 text-gray-700 text-base mb-4 font-display">
                                        <icon-check /> Multiple speakers
                                    </li>
                                    <li class="flex items-center gap-2 text-gray-700 text-base mb-4 font-display">
                                        <icon-check /> Back: Aluminum Material
                                    </li>
                                    <li class="flex items-center gap-2 text-gray-700 text-base mb-4 font-display">
                                        <icon-check /> 2880 x 1920 Pixel
                                    </li>
                                    <li class="flex items-center gap-2 text-gray-700 text-base mb-4 font-display">
                                        <icon-check /> Intel Core i5 11th Gen 1135G7
                                    </li>
                                    <li class="flex items-center gap-2 text-gray-700 text-base mb-4 font-display">
                                        <icon-check /> Video Recording
                                    </li>
                                    <li class="flex items-center gap-2 text-gray-700 text-base mb-4 font-display">
                                        <icon-check /> 3.5mm headphone jack
                                    </li>
                                    <li class="flex items-center gap-2 text-gray-700 text-base mb-4 font-display">
                                        <icon-check /> 8 GB Ram
                                    </li>
                                    <li class="flex items-center gap-2 text-gray-700 text-base mb-4 font-display">
                                        <icon-check /> Multiple speakers
                                    </li>
                                </ul>
                                <h3 class="text-xl font-medium font-display mb-3 uppercase">
                                    Description
                                </h3>
                                <div class="flex flex-col gap-3 text-base text-gray-600 font-display">
                                    <p>
                                        Unlock more possibilities than ever with the Pro designed
                                        for a Pro like you. The first Surface Pro built on the
                                        Intel® Evo™ platform on select configurations†† and designed
                                        to light up the best of Windows 11, Surface Pro 8 combines
                                        the power of a laptop with the flexibility of a tablet, and
                                        every angle in between, with the iconic Kickstand and
                                        detachable Keyboard* with built-in Slim Pen storage and
                                        charging.^ Do great things with a larger 13” touchscreen,
                                        faster connections with Thunderbolt™ 4 ports, and extra
                                        speed when you need it.
                                    </p>
                                    <p>
                                        Do it all with the first Surface Pro built on the Intel®
                                        Evo™ platform on select configurations,†† engineered for
                                        mobile performance with 11th Gen Intel® Core™ processors,
                                        amazing graphics, and all-day battery life¹ in a thin and
                                        light PC.
                                    </p>
                                    <p>
                                        Buy a new Surface Pro 8 and get one month of free Xbox Game
                                        Pass Ultimate to access over 100 high-quality games. Play
                                        across devices from the cloud and discover your next
                                        favorite game with friends. Plus, get all the benefits of
                                        Xbox Live Gold and EA Play.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col gap-6">
                    <x-frontend.ad-details.sidebar-top />
                    <x-frontend.ad-details.sidebar-middle />
                    <x-frontend.ad-details.sidebar-bottom />
                </div>
            </div>
        </div>
        <div class="bg-gray-50 lg:pt-[100px] md:pt-[50px] pt-5 md:pb-[100px] pb-0">
            <div class="container">
                <h2
                    class="xl:text-[40px] lg:text-[30px] md:text-[24px] text-[20px] lg:mb-[50px] mb-5 text-center text-lg leading-12 text-gray-900 font-display font-semibold">
                    Related Listings
                </h2>
                <div class="grid place-items-center 2xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-6 mb-6">
                    <template x-for="item of 12" :key="item">
                        <x-frontend.listing-card.grid-view />
                    </template>
                </div>
                <div class="text-center">
                    <x-frontend.button.outline-primary>
                        <span>
                            <search />
                        </span>
                        <span>Browse listing</span>
                    </x-frontend.button.outline-primary>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('styles')
    <!-- Link Swiper's CSS -->
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" /> --}}
    <style>
        .mySwiper2 {
            height: 648px;
            width: 100%;
        }

        @media (max-width: 767px) {
            .mySwiper2 {
                height: 500px;
            }
        }

        @media (max-width: 525px) {
            .mySwiper2 {
                height: 300px;
            }
        }

        .swiper.mySwiper {
            height: 108px;
            box-sizing: border-box;
            padding: 10px 0;
        }

        .mySwiper .swiper-slide {
            width: 12.5%;
            height: 76px;
            opacity: 0.7;
            border: 1px solid #dee6dc;
            border-radius: 6px;
        }

        .mySwiper .swiper-slide-thumb-active {
            opacity: 1;
            border: 5px solid #fff;
            outline: 2px solid #58b32b;
            border-radius: 6px;
        }

        .mySwiper .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .mySwiper .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            /* Center slide text vertically */
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;
        }

        .mySwiper .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        @media (min-width: 375px) {
            .feature-list {
                webkit-column-count: 2;
                /* Chrome, Safari, Opera */
                -moz-column-count: 2;
                /* Firefox */
                column-count: 2;
            }
        }

        @media (min-width: 640px) {
            .feature-list {
                webkit-column-count: 3;
                /* Chrome, Safari, Opera */
                -moz-column-count: 3;
                /* Firefox */
                column-count: 3;
            }
        }
    </style>
@endsection
@section('scripts')
    <!-- Swiper JS -->
    {{-- <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script> --}}

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            loop: true,
            spaceBetween: 10,
            slidesPerView: 4,
            freeMode: true,
            watchSlidesProgress: true,
        });
        var swiper2 = new Swiper(".mySwiper2", {
            loop: true,
            spaceBetween: 10,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            thumbs: {
                swiper: swiper,
            },
        });
    </script>
@endsection
