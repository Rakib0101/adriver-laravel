@extends('frontend.layouts.master')

@section('content')
    <div x-data="{ activeTab:'dashboard' }">
        <div class="py-[15px] sm:flex hidden gap-2 items-center overflow-x-auto border-b border-gray-100">
            <div class="container">
                <div class="flex">
                    <button class="tab-button" :class="{ active: activeTab === 'dashboard' }" @click="activeTab = 'dashboard'">
                        <div
                            class="tab-link inline-flex cursor-pointer rounded gap-2 items-center text-gray-600 px-3 py-2 hover:bg-primary-50 hover:text-primary-500">
                            <BarChart />
                            <span class="whitespace-nowrap">Dashboard</span>
                        </div>
                    </button>
                    <button class="tab-button" :class="{ active: activeTab === 'my-listing' }" @click="activeTab = 'my-listing'">
                        <div
                            class="tab-link inline-flex cursor-pointer rounded gap-2 items-center text-gray-600 px-3 py-2 hover:bg-primary-50 hover:text-primary-500">
                            <ClipBoard />
                            <span class="whitespace-nowrap">My Listing</span>
                        </div>
                    </button>
                    <button class="tab-button" :class="{ active: activeTab === 'post-listing' }" @click="activeTab = 'post-listing'">
                        <div
                            class="tab-link inline-flex cursor-pointer rounded gap-2 items-center text-gray-600 px-3 py-2 hover:bg-primary-50 hover:text-primary-500">
                            <PlusCircle />
                            <span class="whitespace-nowrap">Post Listing</span>
                        </div>
                    </button>
                    <button class="tab-button" :class="{ active: activeTab === 'favorite-listing' }"
                        @click="activeTab = 'favorite-listing'">
                        <div
                            class="tab-link inline-flex cursor-pointer rounded gap-2 items-center text-gray-600 px-3 py-2 hover:bg-primary-50 hover:text-primary-500">
                            <HeartIcon />
                            <span class="whitespace-nowrap">Favorite Listing</span>
                        </div>
                    </button>
                    <button class="tab-button" :class="{ active: activeTab === 'plan-billing' }" @click="activeTab = 'plan-billing'">
                        <div
                            class="tab-link inline-flex cursor-pointer rounded gap-2 items-center text-gray-600 px-3 py-2 hover:bg-primary-50 hover:text-primary-500">
                            <CreditCard />
                            <span class="whitespace-nowrap">Plans & Billing</span>
                        </div>
                    </button>
                    <button class="tab-button" :class="{ active: activeTab === 'invoice' }" @click="activeTab = 'invoice'">
                        <div
                            class="tab-link inline-flex cursor-pointer rounded gap-2 items-center text-gray-600 px-3 py-2 hover:bg-primary-50 hover:text-primary-500">
                            <FileText />
                            <span class="whitespace-nowrap">Invoice</span>
                        </div>
                    </button>
                    <button class="tab-button" :class="{ active: activeTab === 'message' }" @click="activeTab = 'message'">
                        <div
                            class="tab-link inline-flex cursor-pointer rounded gap-2 items-center text-gray-600 px-3 py-2 hover:bg-primary-50 hover:text-primary-500">
                            <MessageDots />
                            <span class="whitespace-nowrap">Message</span>
                        </div>
                    </button>
                    <button class="tab-button" :class="{ active: activeTab === 'setting' }" @click="activeTab = 'setting'">
                        <div
                            class="tab-link inline-flex cursor-pointer rounded gap-2 items-center text-gray-600 px-3 py-2 hover:bg-primary-50 hover:text-primary-500">
                            <SettingIcon />
                            <span class="whitespace-nowrap">Setting</span>
                        </div>
                    </button>
                </div>
            </div>
        </div>

        <div class="container">
            <div x-show="activeTab === 'dashboard'">
                <x-frontend.dashboard.dashboard />
            </div>
            <div x-show="activeTab === 'my-listing'">
                <x-frontend.dashboard.my-listing />
            </div>
            <div x-show="activeTab === 'post-listing'">
                <x-frontend.dashboard.ad-post.ad-post />
            </div>
            <div x-show="activeTab === 'favorite-listing'">
                <x-frontend.dashboard.favorite-listing />
            </div>
            <div x-show="activeTab === 'plan-billing'">
                <x-frontend.dashboard.plan-billing />
            </div>
            <div x-show="activeTab === 'invoice'">
                <x-frontend.dashboard.invoice-table />
            </div>
            <div x-show="activeTab === 'message'">
                <x-frontend.dashboard.chat-box />
            </div>
            <div x-show="activeTab === 'setting'">
                <x-frontend.dashboard.setting />
            </div>
        </div>
    </div>
@endsection
<script setup>
    import Header from "../components/Header/HeaderComponent.vue";
    import Breadcrumb from "../components/Breadcrumb/Breadcrumb.vue";
    import BreadcrumbArrow from "../components/Icons/BreadcrumbArrow.vue";
    import BarChart from "../components/Icons/Dashboard/BarChart.vue";
    import ClipBoard from "../components/Icons/Dashboard/ClipBoard.vue";
    import PlusCircle from "../components/Icons/Dashboard/PlusCircle.vue";
    import HeartIcon from "../components/Icons/Dashboard/Hearticon.vue";
    import CreditCard from "../components/Icons/Dashboard/CreditCard.vue";
    import FileText from "../components/Icons/Dashboard/FileText.vue";
    import MessageDots from "../components/Icons/Dashboard/MessageDots.vue";
    import SettingIcon from "../components/Icons/Dashboard/SettingIcon.vue";
    import Dashboard from "../components/Dashboard/Dashboard.vue";
    import MyListing from "../components/Dashboard/MyListing.vue";
    import FavoriteListing from "../components/Dashboard/FavoriteListing.vue";
    import PlanBilling from "../components/Dashboard/PlanBilling.vue";
    import Invoice from "../components/Dashboard/InvoiceTable.vue";
    import Message from "../components/Dashboard/MessageBox.vue";
    import Setting from "../components/Dashboard/UserSetting.vue";
    import Footer from "../components/FooterComponent.vue";
    import MobileFooter from "../components/Header/MobileBottom.vue";
    import {
        ref
    } from "vue";
    import AddPost from "../components/Dashboard/PostAd/AddPost.vue";

    const activeTab = ref("dashboard");
    const userLogin = ref(true);
</script>
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
