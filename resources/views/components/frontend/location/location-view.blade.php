<div class="">
    <div class="container">
        <!-- top Location start -->
        <div class="top-location py-[100px]">
            <h1 class="text-gray-900 text-xl md:text-[40px] md:leading-[48px] font-semibold font-display text-center">
                Top Locations</h1>

            <div
                class="location-wrapper place-items-center grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-2.5 md:gap-4 lg:gap-6 my-12">

                <!-- location card start -->
                <x-frontend.location.location-card img="location1" title="Andhra Pradesh" count="5948">
                    <img src="{{ asset('frontend/assets/images/img/location-1.png') }}" alt=""
                        class="w-full h-full object-cover transition-all duration-300" />
                </x-frontend.location.location-card>
                <x-frontend.location.location-card img="location2" title="Andhra Pradesh" count="5948">
                    <img src="{{ asset('frontend/assets/images/img/location-2.png') }}" alt=""
                        class="w-full h-full object-cover transition-all duration-300">
                </x-frontend.location.location-card>
                <x-frontend.location.location-card img="location3" title="Andhra Pradesh" count="5948">
                    <img src="{{ asset('frontend/assets/images/img/location-3.png') }}" alt=""
                        class="w-full h-full object-cover transition-all duration-300">
                </x-frontend.location.location-card>
                <x-frontend.location.location-card img="location4" title="Andhra Pradesh" count="5948">
                    <img src="{{ asset('frontend/assets/images/img/location-4.png') }}" alt=""
                        class="w-full h-full object-cover transition-all duration-300">
                </x-frontend.location.location-card>
                <x-frontend.location.location-card img="location5" title="Andhra Pradesh" count="5948">
                    <img src="{{ asset('frontend/assets/images/img/location-5.png') }}" alt=""
                        class="w-full h-full object-cover transition-all duration-300">
                </x-frontend.location.location-card>
                <x-frontend.location.location-card img="location6" title="Andhra Pradesh" count="5948">
                    <img src="{{ asset('frontend/assets/images/img/location-6.png') }}" alt=""
                        class="w-full h-full object-cover transition-all duration-300">
                </x-frontend.location.location-card>
                <x-frontend.location.location-card img="location7" title="Andhra Pradesh" count="5948">
                    <img src="{{ asset('frontend/assets/images/img/location-7.png') }}" alt=""
                        class="w-full h-full object-cover transition-all duration-300">
                </x-frontend.location.location-card>
                <x-frontend.location.location-card img="location8" title="Andhra Pradesh" count="5948">
                    <img src="{{ asset('frontend/assets/images/img/location-8.png') }}" alt=""
                        class="w-full h-full object-cover transition-all duration-300">
                </x-frontend.location.location-card>
                <!-- location card end -->
            </div>
            <div class="text-center">
                <x-frontend.button.outline-primary href="'/browse-listing'">
                    <span>
                        <x-bi-search class="w-6 h-6"/>
                    </span>
                    <span>Browse Listing</span>
                </x-frontend.button.outline-primary>
            </div>
        </div>
        <!-- top Location end -->
    </div>
</div>
