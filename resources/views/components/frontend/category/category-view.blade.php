<div class="py-16">
    <div class="container">
        <!-- top category start -->
        <div class="top-category flex justify-between lg:justify-center mb-8 px-6">
            <h2
                class="xl:text-center text-[##171E15] text-2xl md:text-[32px] md:leading-[100%] font-semibold font-display">
                Browse Listing by Category
            </h2>
        </div>

        <div class="grid lg:grid-cols-5 sm:grid-cols-3 grid-cols-2 mb-8">
            <x-frontend.category.category-card title="Mobiles" count="70443">
                <span class="flex justify-center pb-3 transition-all duration-300 ease-in-out">
                    <img src="{{ asset('frontend/assets/images/img/cat-01.svg')}}" alt="">
                </span>
            </x-frontend.category.category-card>
            <x-frontend.category.category-card title="Electronics" count="20796">
                <span class="flex justify-center pb-3 transition-all duration-300 ease-in-out">
                    <img src="{{ asset('frontend/assets/images/img/cat-02.svg')}}" alt="">
                </span>
            </x-frontend.category.category-card>
            <x-frontend.category.category-card title="Vehicles" count="8811">
                <span class="flex justify-center pb-3 transition-all duration-300 ease-in-out">
                    <img src="{{ asset('frontend/assets/images/img/cat-03.svg')}}" alt="">
                </span>
            </x-frontend.category.category-card>
            <x-frontend.category.category-card title="Property" count="9374">
                <span class="flex justify-center pb-3 transition-all duration-300 ease-in-out">
                    <img src="{{ asset('frontend/assets/images/img/cat-04.svg')}}" alt="">
                </span>
            </x-frontend.category.category-card>
            <x-frontend.category.category-card title="Home & Living" count="4600">
                <span class="flex justify-center pb-3 transition-all duration-300 ease-in-out">
                    <img src="{{ asset('frontend/assets/images/img/cat-05.svg')}}" alt="">
                </span>
            </x-frontend.category.category-card>
            <x-frontend.category.category-card title="Men's Fashion & Gooming" count="826">
                <span class="flex justify-center pb-3 transition-all duration-300 ease-in-out">
                    <img src="{{ asset('frontend/assets/images/img/cat-06.svg')}}" alt="">
                </span>
            </x-frontend.category.category-card>
            <x-frontend.category.category-card title="Women's Fashion & Beauty" count="816">
                <span class="flex justify-center pb-3 transition-all duration-300 ease-in-out">
                    <img src="{{ asset('frontend/assets/images/img/cat-07.svg')}}" alt="">
                </span>
            </x-frontend.category.category-card>
            <x-frontend.category.category-card title="Pets & Animal" count="423">
                <span class="flex justify-center pb-3 transition-all duration-300 ease-in-out">
                    <img src="{{ asset('frontend/assets/images/img/cat-08.svg')}}" alt="">
                </span>
            </x-frontend.category.category-card>
            <x-frontend.category.category-card title="Hobbies, Sports & Kids" count="423">
                <span class="flex justify-center pb-3 transition-all duration-300 ease-in-out">
                    <img src="{{ asset('frontend/assets/images/img/cat-09.svg')}}" alt="">
                </span>
            </x-frontend.category.category-card>
            <x-frontend.category.category-card title="Business & Industry" count="357" class="lg:block hidden">
                <span class="flex justify-center pb-3 transition-all duration-300 ease-in-out">
                    <img src="{{ asset('frontend/assets/images/img/cat-10.svg')}}" alt="">
                </span>
            </x-frontend.category.category-card>
            <!-- top category end -->
        </div>
        <div class="flex justify-center items-center">
            <x-frontend.button.outline-primary href="'/browse-listing'">
                <span>
                    <i class="ph ph-magnifying-glass text-2xl leading-6"></i>
                </span>
                <span>Browse listing</span>
            </x-frontend.button.outline-primary>
        </div>
    </div>
</div>

