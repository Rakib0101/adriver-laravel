@extends('frontend.layouts.master')

@section('content')
    <div x-data>
        <x-frontend.breadcrumb.breadcrumb-view label='Home' url='#' title="Blog List" />
        <div class="py-14">
            <div class="container">
                <div class="flex flex-col xl:flex-row gap-6">
                    <div class="sidebar xl:max-w-[312px] w-full">
                        <div class="border border-gray-100 flex flex-col gap-4 mb-6 rounded-lg p-5">
                            <h2 class="text-lg font-display font-medium text-gray-900">
                                Ads Category
                            </h2>
                            <div
                                class="2xl:flex flex-col gap-4 place-items-center grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5">
                                <template x-for="item in 6" :key="item">
                                    <a href="#" class="w-full h-[88px] category-card px-6 py-4">
                                        <h2 class="text-base text-center font-semibold text-white mb-1.5">
                                            Technology
                                        </h2>
                                        <p class="flex justify-center count">
                                            <span
                                                class="text-xs bg-[rgba(255,255,255,0.16)] rounded font-medium text-white inline-flex py-1 px-2.5">34,234</span>
                                        </p>
                                    </a>
                                </template>
                            </div>
                        </div>
                        <div class="bg-gray-50 rounded-lg p-5">
                            <h2 class="text-lg font-display font-medium text-gray-900 mb-4">
                                Top Ads
                            </h2>
                            <div
                                class="2xl:flex flex-col grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                                <template x-for="item in 2">
                                    <x-frontend.listing-card.grid-view />
                                </template>
                            </div>
                        </div>
                    </div>
                    <div class="w-full">
                        <x-frontend.inner-pages.blog.blog-filter />
                        <div class="grid gap-6 lg:grid-cols-3 sm:grid-cols-2 grid-cols-1 place-items-center">
                            <template x-for="item in 9">
                                <x-frontend.inner-pages.blog.blog-card href="blog-details" category="Travel"
                                    title="In 1911, a genius revealed a forgotten science of how to be 50x more productive without"
                                    excerpt="Drucker isn’t just talking about 50x productivity for the smartest people. He’s talking about 50x productivity on average for an entire society." />
                            </template>
                        </div>
                        <x-frontend.pagination.pagination-view />
                    </div>
                </div>
            </div>
        </div>
        <!-- <mobile-app /> -->
        <x-frontend.newsletter.newsletter-view />
    </div>
@endsection
@section('styles')
    <style>
        .category-card {
            background: linear-gradient(0deg,
                    rgba(23, 30, 21, 0.48),
                    rgba(23, 30, 21, 0.48)),
                url("{{ asset('frontend/assets/images/img/category-01.png') }}");
            border-radius: 4px;
        }

        .category-card:hover {
            background: linear-gradient(0deg, rgba(23, 30, 21, 0.72) 0%, rgba(23, 30, 21, 0.72) 100%), url("{{ asset('frontend/assets/images/img/category-01.png') }}");
        }

        .category-card:hover .count span {
            background-color: #58B32B;
        }
    </style>
@endsection
{{-- <script setup>
    import HeaderComponent from "../../components/Header/HeaderComponent.vue";
    import Breadcrumb from "../../components/Breadcrumb/Breadcrumb.vue";
    import BreadcrumbArrow from "../../components/Icons/BreadcrumbArrow.vue";
    import BlogCard from "../../components/Pages/Blog/BlogCard.vue";
    import BlogFilter from "../../components/Pages/Blog/BlogFilter.vue";
    import GridView from "../../components/ListingCard/GridView.vue";
    import MobileApp from "../../components/MobileApp/MobileApp.vue";
    import NewsLetterView from "../../components/Newsletter/NewsLetterView.vue";
    import FooterComponent from "../../components/FooterComponent.vue";
    import CategoryOne from "../../assets/images/img/category-01.png";
    import PaginationView from "../../components/Pagination/PaginationIndex.vue";
    import GridCard from "../../components/ListingCard/GridView.vue"

    const blog = {
        title: "In 1911, a genius revealed a forgotten science of how to be 50x more productive without",
        excerpt: "Drucker isn’t just talking about 50x productivity for the smartest people. He’s talking about 50x productivity on average for an entire society.",
        category: "Travel",
    };
</script> --}}
{{--  --}}
