<div class="bg-gray-50 w-full" x-data="{ showModal: false, showMenu: false }">
    <div class="container">
        <div class="flex gap-16 justify-between items-center py-6">
            <div class="flex gap-4 items-center flex-grow">
                <div>
                    <a href="/home" class="inline-flex gap-2 items-center">
                        <x-frontend.svg-icons.logo />
                        <span class="text-gray-900 text-4xl font-semibold uppercase">ADRIVER</span>
                    </a>
                </div>
                <label
                    class="header-search bg-white max-h-12 py-2 px-[18px] rounded-md hidden lg:flex items-center w-full"
                    for="search-input">
                    <!-- search by location -->
                    <div class="relative border-r border-gray-100">
                        <label class="absolute top-1/2 -translate-y-1/2 left-0" for="location-input">
                            <x-bi-geo-alt class="w-5 h-5" />
                        </label>
                        <input class="w-full p-2 outline-none pl-8" type="text" id="location-input"
                            placeholder="Location" />
                        <label class="absolute top-1/2 -translate-y-1/2 right-[18px]" for="location-input">
                            <x-frontend.svg-icons.target />
                        </label>
                    </div>
                    <!-- search by text -->
                    <div class="relative">
                        <input type="text" id="search-input" placeholder="Search for anything..."
                            class="pl-[54px] block w-full focus:outline-none" />
                        <label class="absolute top-1/2 transform -translate-y-1/2 left-[18px] inline-flex" for="search-input">
                            <i class="ph ph-magnifying-glass text-xl leading-5"></i>
                        </label>
                    </div>
                </label>
            </div>
            <div x-data="{ isLoginUser: false }">
                <div class="flex gap-3 item-center" x-cloak x-show="isLoginUser">
                    <div x-data="{ showMsg: false, showBell: false }" class="relative">
                        <div
                            class=" bg-white inline-flex gap-3 items-center p-3 border border-gray-100 rounded-md shadow-[0px_3px_14px_rgba(23,30,21,0.02)]">
                            <!-- message button -->
                            <button x-on:click="showMsg = !showMsg" class="border-0 p-0 relative">
                                <div class="relative text-gray-500 hover:text-black">
                                    <span>
                                        <x-bi-chat-left-dots class="w-5 h-5" />
                                    </span>
                                    <span x-cloak x-show="!showMsg"
                                        class="h-[7px] w-[7px] absolute rounded-full bg-danger-500 top-0 right-0 ring ring-white">
                                    </span>
                                </div>
                            </button>
                            <!-- notification button -->
                            <button x-on:click="showBell = !showBell" class="border-0 p-0 relative">
                                <div class="text-gray-500 hover:text-primary-500">
                                    <span>
                                        <x-bi-bell class="w-5 h-5" />
                                    </span>
                                    <span x-cloak x-show="!showBell"
                                        class="h-[7px] w-[7px] absolute rounded-full bg-danger-500 top-0 right-0 ring ring-white">
                                    </span>
                                </div>
                            </button>
                        </div>
                        <div x-cloak x-show="showMsg">
                            <x-frontend.popup.message-popup />
                        </div>
                        <div x-cloak x-show="showBell">
                            <x-frontend.popup.bell-popup />
                        </div>
                    </div>
                    <x-frontend.button.primary-button>
                        <x-bi-plus-circle class="w-5 h-5" />
                        <span class="whitespace-nowrap">Post Your ad</span>
                    </x-frontend.button.primary-button>
                    <button x-on:click="showMenu = !showMenu" class="w-12 h-12 relative" ref="profileDropdown">
                        <img class="w-full h-full rounded-full object-cover"
                            src="{{ asset('frontend/assets/images/img/seller-profile.png') }}" alt="" />
                        <UserMenu :show-menu="showMenu" class="absolute top-14 z-[99] right-0" />
                    </button>
                </div>
                <div class="flex gap-3 item-center" x-cloak x-show="!isLoginUser">
                    <temaplate @click="showModal = !showModal">
                        <x-frontend.button.outline-primary type="button">
                            Sign in
                        </x-frontend.button.outline-primary>
                    </temaplate>
                    <x-frontend.button.primary-button>
                        <x-bi-plus-circle class="w-5 h-5" />
                        <span>Post Your ad</span>
                    </x-frontend.button.primary-button>
                </div>
            </div>
        </div>
    </div>
    <x-frontend.modal.auth-modal />
</div>
