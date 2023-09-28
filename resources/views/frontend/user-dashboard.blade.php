@extends('frontend.layouts.master')

@section('content')
    <div x-data="{ activeTab:'dashboard' }">
        <div class="py-[15px] sm:flex hidden gap-2 items-center overflow-x-auto border-b border-gray-100">
            <div class="container">
                <div class="flex overflow-x-auto overflow-y-hidden">
                    <button class="tab-button" :class="{ active: activeTab === 'dashboard' }" @click="activeTab = 'dashboard'">
                        <div
                            class="tab-link inline-flex cursor-pointer rounded gap-2 items-center text-gray-600 px-3 py-2 hover:bg-primary-50 hover:text-primary-500">
                            <x-frontend.svg-icons.bar-chart />
                            <span class="whitespace-nowrap">Dashboard</span>
                        </div>
                    </button>
                    <button class="tab-button" :class="{ active: activeTab === 'my-listing' }" @click="activeTab = 'my-listing'">
                        <div
                            class="tab-link inline-flex cursor-pointer rounded gap-2 items-center text-gray-600 px-3 py-2 hover:bg-primary-50 hover:text-primary-500">
                            <x-frontend.svg-icons.clip-board />
                            <span class="whitespace-nowrap">My Listing</span>
                        </div>
                    </button>
                    <button class="tab-button" :class="{ active: activeTab === 'post-listing' }" @click="activeTab = 'post-listing'">
                        <div
                            class="tab-link inline-flex cursor-pointer rounded gap-2 items-center text-gray-600 px-3 py-2 hover:bg-primary-50 hover:text-primary-500">
                            <x-frontend.svg-icons.plus-circle />
                            <span class="whitespace-nowrap">Post Listing</span>
                        </div>
                    </button>
                    <button class="tab-button" :class="{ active: activeTab === 'favorite-listing' }"
                        @click="activeTab = 'favorite-listing'">
                        <div
                            class="tab-link inline-flex cursor-pointer rounded gap-2 items-center text-gray-600 px-3 py-2 hover:bg-primary-50 hover:text-primary-500">
                            <x-frontend.svg-icons.heart-icon />
                            <span class="whitespace-nowrap">Favorite Listing</span>
                        </div>
                    </button>
                    <button class="tab-button" :class="{ active: activeTab === 'plan-billing' }" @click="activeTab = 'plan-billing'">
                        <div
                            class="tab-link inline-flex cursor-pointer rounded gap-2 items-center text-gray-600 px-3 py-2 hover:bg-primary-50 hover:text-primary-500">
                            <x-frontend.svg-icons.credit-card />
                            <span class="whitespace-nowrap">Plans & Billing</span>
                        </div>
                    </button>
                    <button class="tab-button" :class="{ active: activeTab === 'invoice' }" @click="activeTab = 'invoice'">
                        <div
                            class="tab-link inline-flex cursor-pointer rounded gap-2 items-center text-gray-600 px-3 py-2 hover:bg-primary-50 hover:text-primary-500">
                            <x-frontend.svg-icons.file-text />
                            <span class="whitespace-nowrap">Invoice</span>
                        </div>
                    </button>
                    <button class="tab-button" :class="{ active: activeTab === 'message' }" @click="activeTab = 'message'">
                        <div
                            class="tab-link inline-flex cursor-pointer rounded gap-2 items-center text-gray-600 px-3 py-2 hover:bg-primary-50 hover:text-primary-500">
                            <x-frontend.svg-icons.chat-dots />
                            <span class="whitespace-nowrap">Message</span>
                        </div>
                    </button>
                    <button class="tab-button" :class="{ active: activeTab === 'setting' }" @click="activeTab = 'setting'">
                        <div
                            class="tab-link inline-flex cursor-pointer rounded gap-2 items-center text-gray-600 px-3 py-2 hover:bg-primary-50 hover:text-primary-500">
                            <x-frontend.svg-icons.setting-icon />
                            <span class="whitespace-nowrap">Setting</span>
                        </div>
                    </button>
                </div>
            </div>
        </div>

        <div class="container">
            <div x-cloak x-show="activeTab === 'dashboard'">
                <x-frontend.dashboard.dashboard />
            </div>
            <div x-cloak x-show="activeTab === 'my-listing'">
                <x-frontend.dashboard.my-listing />
            </div>
            <div x-cloak x-show="activeTab === 'post-listing'">
                <x-frontend.dashboard.ad-post.ad-post />
            </div>
            <div x-cloak x-show="activeTab === 'favorite-listing'">
                <x-frontend.dashboard.favorite-listing />
            </div>
            <div x-cloak x-show="activeTab === 'plan-billing'">
                <x-frontend.dashboard.plan-billing />
            </div>
            <div x-cloak x-show="activeTab === 'invoice'">
                <x-frontend.dashboard.invoice-table />
            </div>
            <div x-cloak x-show="activeTab === 'message'">
                <x-frontend.dashboard.chat-box />
            </div>
            <div x-cloak x-show="activeTab === 'setting'">
                <x-frontend.dashboard.setting />
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    @stack('component_scripts')
@endsection
@section('styles')
<style>
    .tab-button.active::before {
        border-bottom: 3px solid #58b32b;
        z-index: 99;
    }

    .tab-button {
        position: relative;
    }

    .tab-button.active .tab-link {
        background-color: #eef7ea;
        color: #58b32b !important;
    }

    .tab-button::before {
        content: "";
        position: absolute;
        bottom: -15px;
        left: 0;
        width: 100%;
        border-bottom: 3px solid transparent;
        transition: border 0.3s ease-in-out;
    }

    @media (min-width: 375px) and (max-width: 599px) {
        .container {
            width: 100%;
            padding: 0 4px;
            /* overflow: hidden; */
        }
    }

    @media (min-width: 375px) and (max-width: 649px) {
        .footer-top-padding {
            padding-top: 130px;
        }
    }
</style>
@endsection
