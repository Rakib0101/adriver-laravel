@props(['isFeatured' => false, 'isTop' => false, 'isUrgent' => false, 'isSlide' => false, 'isFavorite' => false, 'forSell' => false, 'forXchange' => false])
<a href="/listing-details"
    class="grid-card border border-gray-100 bg-white md:max-w-[310px] flex md:flex-col md:items-center flex-row rounded-md lg:flex-wrap shadow-[0px_8px_24px_rgba(23,30,21,0.04)] w-full transition-all duration-300"
    :class="{{ $isFeatured ? 'featured' : '' }}">
    <div class="md:w-full">
        <div class="w-full overflow-hidden relative rounded-md border-4"
            :class="isTop ? 'border-blue-500' : 'border-transparent'">
            <div x-if="isSlide" class="max-h-[216px] image-slider">
                <image-slider class="hidden md:block" />
                <img src="{{ asset('frontend/assets/images/img/listing-card/listing-card-1.png') }}" alt=""
                    class="object-cover block md:hidden md:max-w-full w-full min-h-[120px] lg:min-w-[280px] md:max-h-[216px] transition-transform duration-300 img" />
            </div>
            <img x-else src="{{ asset('frontend/assets/images/img/listing-card/listing-card-1.png') }}" alt=""
                class="object-cover md:max-w-full w-full min-h-[120px] lg:min-w-[280px] md:max-h-[216px] transition-transform duration-300 img" />
            <div
                class="absolute top-4 left-4 inline-flex gap-1.5 items-center opacity-100 transition-opacity duration-200 badges z-10">
                <span x-show="isFeatured"
                    class="bg-warning-500 rounded-md py-1 px-2.5 border border-white shadow-[0px_2px_24px_rgba(0,0,0,0.24)] text-sm font-semibold text-white hidden md:flex">Featured</span>
                <span x-show="isUrgent"
                    class="bg-[#CC3E42] rounded-md py-1 px-2.5 border border-white shadow-[0px_2px_24px_rgba(0,0,0,0.24)] text-sm font-semibold text-white hidden md:flex">Urgent</span>
            </div>
            <button
                class="absolute right-2 top-2 z-10 p-2 rounded-full text-[#58B32B] bg-white hover:text-[#356B1A] hidden md:block"
                :class="isFavorite ? 'disabled' : ''">
                @if ($isFavorite)
                    <x-bi-heart-fill />
                @else
                    <x-bi-heart />
                @endif

            </button>
            @if ($isTop)
                <span
                    class="text-white uppercase font-semibold text-xs leading-3 absolute bottom-0 md:bottom-3 -left-8 md:-left-5 bg-[#1F85E2] py-1 px-8 rotate-45">top</span>
            @endif
        </div>
    </div>
    <div class="">
        <div class="md:px-6 px-3 md:py-4 pt-3 pb-2">
            <p class="flex md:items-center gap-1.5 uppercase text-blue-500 sm:text-sm text-[11px] leading-[100%] font-semibold font-display sm:mb-1.5 sm-0.5">
                @if($forSell)
                    <i class="ph ph-tag w-3.5 h-3.5 text-primary-500"></i>
                    <span class="text-[#58B32B]">For Sell</span>
                @elseif($forXchange)
                    <i class="ph ph-tag w-3.5 h-3.5 text-danger-500"></i>
                    <span class="text-danger-500">For Exchange</span>
                @else
                    <i class="ph ph-tag w-3.5 h-3.5 text-blue-500"></i>
                    <span class="text-blue-500">Want To Buy</span>
                @endif
            </p>
            <h2
                class="text-gray-900 sm:text-base text-sm font-semibold font-display md:mb-1.5 mb-0.5 line-clamp-2 cardTitle">
                Lorem ipsum dolor sit amet, adipiscing elit. Morbi mauris ipsum,
                semper.
            </h2>
            <p class="mb-0 text-gray-500 sm:text-sm line-clamp-1 text-xs">
                Deomali, Arunachal Pradesh, India
            </p>
        </div>
        <div class="border-t border-b border-gray-100 md:py-4 px-6 hidden md:block">
            <p class="flex gap-1 items-center mb-2">
                <bank-note />Negotaiable: Fixed Price
            </p>
            <p class="flex gap-1 items-center"><bullet-list />Authenticity: Used</p>
        </div>
        <div class="flex justify-between md:flex-wrap md:gap-4 md:px-6 px-3 md:py-4 mb-0 items-center">
            <div class="flex md:block gap-5 items-center">
                <h2 class="text-warning-500 font-display font-semibold sm:text-xl text-base leading-[100%]">
                    $1,500
                </h2>
                <h4 class="font-display text-gray-500 mb-0 text-sm md:block ">
                    USD
                </h4>
            </div>
            <div
                class="hidden sm:inline-flex md:hidden gap-1.5 items-center opacity-100 transition-opacity duration-200 badges z-10">
                <span v-if="isFeatured"
                    class="bg-warning-500 rounded-md py-1 px-2.5 border border-white shadow-[0px_2px_24px_rgba(0,0,0,0.24)] text-sm font-semibold text-white flex">Featured</span>
                <span v-if="isUrgent"
                    class="bg-[#CC3E42] rounded-md py-1 px-2.5 border border-white shadow-[0px_2px_24px_rgba(0,0,0,0.24)] text-sm font-semibold text-white flex">Urgent</span>
            </div>
            <div class="md:flex hidden gap-2 items-center">
                <span href="#"
                    class="border-2 text-primary-500 rounded-md border-gray-100 hover:border-primary-500 p-1.5 h-10 w-10">
                    <x-bi-telephone-plus class="w-6 h-6" />
                </span>
                <span href="#"
                    class="border-2 text-primary-500 rounded-md border-gray-100 hover:border-primary-500 p-1.5 h-10 w-10">
                    <x-bi-envelope class="w-6 h-6" />
                </span>
                <span href="#"
                    class="border-2 text-primary-500 rounded-md border-gray-100 hover:border-primary-500 p-1.5 h-10 w-10">
                    <x-bi-chat-dots class="w-6 h-6" />
                </span>
            </div>
        </div>
    </div>
</a>
