@props(['isFeatured' => false, 'isTop' => false, 'isUrgent' => false, 'isSlide' => false, 'isFavorite' => false, 'forSell' => false, 'forXchange'=> false])
<a href="/ad-details"
    class="listing-card border block lg:min-h-[230px] border-gray-100 shadow-[0px_8px_24px_rgba(23,30,21,0.04)] rounded-lg min-w-[305px] md:max-w-[380px] lg:max-w-max relative z-0 transition-all duration-300 {{ $isFeatured ? 'featured' : '' }}">
    <div class="lg:grid lg:grid-cols-3 flex items-center lg:gap-6 h-full">
        <div class="relative overflow-hidden rounded-md border-4 {{ $isTop ? 'border-[#1F85E2]' : 'border-transparent' }}">
            <div x-if="isSlide" class="md:max-w-[304px] image-slider">
                <image-slider class="hidden lg:block" />
                <img src="{{ asset('frontend/assets/images/img/listing-card/listing-card-1.png') }}" alt=""
                    class="object-cover w-full h-full min-h-[118px] lg:min-h-[240px] block lg:hidden transition-transform duration-300 img rounded {{ $isFeatured ? 'rounded-[4px]' : '' }}" />
            </div>
            <img x-else src="{{ asset('frontend/assets/images/img/listing-card/listing-card-1.png') }}" alt=""
                class="object-cover w-full h-full min-h-[118px] transition-transform lg:min-h-[240px]  duration-300 img rounded {{ $isFeatured ? 'rounded-[4px]' : '' }}" />
            <div class="absolute top-4 left-4 lg:inline-flex gap-1.5 items-center hidden  md:flex-col lg:flex-row opacity-100 transition-opacity duration-200 badges z-10">
                @if($isFeatured)
                <span class="bg-warning-500 rounded-md py-1 px-2.5 border border-white shadow-[0px_2px_24px_rgba(0,0,0,0.24)] text-sm font-semibold text-white hidden md:flex">Featured</span>
                @endif
                @if($isUrgent)
                <span class="bg-[#CC3E42] rounded-md py-1 px-2.5 border border-white shadow-[0px_2px_24px_rgba(0,0,0,0.24)] text-sm font-semibold text-white hidden md:flex">Urgent</span>
                @endif
            </div>
            @if($isTop)
            <span class="text-white uppercase font-semibold text-xs leading-3 absolute bottom-0 lg:bottom-3 -left-8 lg:-left-5 bg-[#1F85E2] py-1 px-8 rotate-45">top</span>
            @endif
        </div>
        <div class="h-full flex flex-col gap-6 justify-between lg:py-6 lg:pr-6 lg:pl-0 p-3 lg:border-r lg:border-b-0 md:border-b border-gray-100">
            <div>
                <p class="flex items-center md:gap-1.5 gap-1 uppercase text-blue-500 lg:text-sm text-[11px] leading-[100%] font-semibold font-display lg:mb-1.5 mb-0.5">
                    <i class="ph ph-tag lg:w-[13.17px] w-3.5 lg:h-[13.17px] h-3.5"></i>
                    Want to buy
                </p>
                <h2 class="text-gray-900 lg:text-base text-sm lg:font-semibold font-medium font-display lg:mb-1.5 mb-1 line-clamp-2 cardTitle transition-colors duration-300">
                    Lorem ipsum dolor sit amet, adipiscing elit. Morbi mauris ipsum, semper.
                </h2>
                <p class="lg:mb-0 mb-2 text-gray-500 lg:text-sm text-xs line-clamp-1">
                    Deomali, Arunachal Pradesh, India
                </p>
                <h2 class="text-warning-500 font-display font-semibold lg:text-xl text-base leading-[100%] lg:hidden">
                    $1,500
                </h2>
            </div>
            <div class="hidden lg:block">
                <p class="flex gap-1 items-center mb-2">
                    <x-bi-cash class="w-6 h-6" />Negotaiable: Fixed Price
                </p>
                <p class="flex gap-1 items-center">
                    <x-bi-list-ul class="w-6 h-6" />Authenticity: Used
                </p>
            </div>
        </div>
        <div class="lg:p-6 lg:pl-0 px-3 pb-3 h-full hidden lg:block">
            <div class="flex flex-col gap-6 justify-between h-full">
                <div class="flex justify-between items-center">
                    <div>
                        <h2 class="text-warning-500 font-display font-semibold md:text-xl text-base leading-[100%]">
                            $1,500
                        </h2>
                        <h4 class="font-display text-gray-500 mb-0 text-sm">USD</h4>
                    </div>
                    <button class="p-3 rounded-full border-2 border-[#58B32B] text-[#58B32B] bg-transparent hover:bg-[#EEF7EA] hover:border-[#356B1A] hover:text-[#356B1A]"
                        {{ $isFavorite ? 'disabled' : '' }}>
                        @if($isFavorite)
                        <x-bi-heart-fill class="w-6 h-6"/>
                        @else
                        <x-bi-heart class="w-6 h-6" />
                        @endif
                    </button>
                </div>
                <div>
                    <span class="flex bg-primary-500 hover:bg-primary-700 transition-all duration-300 justify-center rounded-md font-display text-white text-[15px] leading-[48px] font-semibold md:mb-4 uppercase lg:mb-0">View
                        Detail</span>
                </div>
            </div>
        </div>
    </div>
</a>
