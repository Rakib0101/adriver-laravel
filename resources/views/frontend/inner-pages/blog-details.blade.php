@extends('frontend.layouts.master')

@section('content')
    <div x-data>
        <x-frontend.breadcrumb.breadcrumb-view label='Home' url='#' title="Blog List" />
        <div class="py-14">
            <div class="container">
                <div class="flex lg:flex-row lg:justify-between flex-col gap-6">
                    <div class="w-full">
                        <div class="blog-detail w-full max-w-[872px]">
                            <p class="flex gap-2 items-center text-sm text-gray-700 mb-3">
                                <a href="#" class="inline-flex gap-2 items-center text-blue-500">
                                    <i class="ph-fill ph-stack text-2xl"></i>
                                    <span class="font-medium">Travel</span>
                                </a>
                                <span class="text-gray-300">•</span>
                                <span>Aug 28, 2004</span>
                                <span class="text-gray-300">•</span>
                                <span>7min read</span>
                                <span class="text-gray-300">•</span>
                                <span class="flex gap-2 items-center">Share:
                                    <div class="flex gap-2 items-center">
                                        <a href="#" class="inline-flex">
                                            <Facebook :size="16" />
                                        </a>
                                        <a href="#" class="inline-flex">
                                            <Twitter :size="16" />
                                        </a>
                                        <a href="#" class="inline-flex">
                                            <Pinterest :size="16" />
                                        </a>
                                        <a href="#" class="inline-flex">
                                            <Link :size="16" />
                                        </a>
                                    </div>
                                </span>
                            </p>
                            <h2 class="text-[32px] leading-10 font-semibold font-display line-clamp-1 mb-8">
                                Here are 7 UX/UI design trends to watch for in 2023.
                            </h2>
                            <div class="w-full md:h-[738px] h-[362px] mb-8">
                                <img src="{{ asset('frontend/assets/images/img/blog-detail.png') }}"
                                    alt="Blog Details Image" class="w-full h-full object-cover" />
                            </div>
                            <p class="text-base text-gray-700 mb-8">
                                The possibilities of modern technology are continually
                                expanding, and with them come new directions in digital design.
                                The year 2023 is quickly approaching, and with it come new ideas
                                and innovations that will revolutionize the ways in which user
                                interfaces and experiences are created.
                            </p>
                            <h3 class="text-lg text-gray-900 font-semibold font-display mb-3">
                                The significance of cutting-edge UX/UI design trends
                            </h3>
                            <p class="text-base text-gray-700 mb-8">
                                We are a seasoned digital innovation firm that creates complete
                                digital goods. Our commitment to this service ensures that we
                                are always abreast of developments in fields like color theory
                                and universal design that may have an impact on the expectations
                                of the people who use our products and services. The UX and UI
                                of a digital product, such as a website or app, may have a
                                significant impact on a user’s first impression of your brand or
                                organization, thus it’s crucial to adhere to best practices.
                            </p>
                            <div class="px-8 pt-8 pb-6 bg-gray-50 border-l-4 border-primary-500">
                                <div class="mb-2">
                                    <qoute-icon />
                                </div>
                                <q class="text-base text-gray-900">Because of the way AR/VR is being refined and marketed,
                                    it
                                    stands to become more commonplace. With each technological
                                    advance, we as experience designers must think about how these
                                    interactions will be realized and how to ensure the safety of
                                    the people who will be using these technologies. Ponder
                                    these</q>
                            </div>
                            <h3 class="text-lg text-gray-900 font-semibold font-display pt-8 mb-3">
                                Here are 7 user experience/user interface developments to watch
                                for in 2023.
                            </h3>
                            <p class="text-base text-gray-700 mb-3">
                                For optimal usability, performance, and aesthetics, a
                                human-centered design will take into account cutting-edge UX/UI
                                practices.
                            </p>
                            <ol class="list-decimal list-inside mb-8">
                                <li class="text-base text-gray-700 pb-1">
                                    Virtual and Augmented Reality (VR/AR)
                                </li>
                                <li class="text-base text-gray-700 pb-1">Animation Artistic</li>
                                <li class="text-base text-gray-700 pb-1">
                                    A Scrolling Experience That Pulls You In
                                </li>
                                <li class="text-base text-gray-700 pb-1">
                                    Three-Dimensional Imaging
                                </li>
                                <li class="text-base text-gray-700 pb-1">Gradients</li>
                                <li class="text-base text-gray-700 pb-1">Brutalism</li>
                                <li class="text-base text-gray-700 pb-1">Healthiness</li>
                            </ol>
                            <p class="text-base text-gray-700 mb-8">
                                Thanks to Meta and the growth of VR conversation caused by the
                                various Covid lockdowns, virtual reality has recently gained a
                                lot of attention. This year saw the debut of the first-ever
                                Virtual Reality Fashion Week. There are a plethora of other
                                businesses working on ways to facilitate online community
                                building and hybrid processes that combine the best of the
                                digital and physical worlds. Examples of such applications
                                include the use of augmented reality (AR) to decorate and paint
                                an empty room before purchasing furniture, the use of virtual
                                reality (VR) by doctors to practice separating conjoined twins
                                from different locations in real-time before the actual surgery,
                                and the use of AR by supply chain operators to navigate a
                                warehouse in real-time in order to maximize order picking
                                efficiency.
                            </p>
                            <p class="text-base text-gray-700 mb-[32px]">
                                Because of the way AR/VR is being refined and marketed, it
                                stands to become more commonplace. With each technological
                                advance, we as experience designers must think about how these
                                interactions will be realized and how to ensure the safety of
                                the people who will be using these technologies. Ponder these.
                            </p>
                        </div>

                        <div>
                            <h2 class="text-[32px] leading-10 font-semibold font-display line-clamp-1 mt-[48px] mb-6">
                                Related Blog Post
                            </h2>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 flex-wrap">
                                <template x-for="item in 4">
                                    <x-frontend.inner-pages.blog.blog-card href="blog-details" category="Travel"
                                        title="In 1911, a genius revealed a forgotten science of how to be 50x more productive without"
                                        excerpt="Drucker isn’t just talking about 50x productivity for the smartest people. He’s talking about 50x productivity on average for an entire society." />
                                </template>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar lg:max-w-[312px] w-full">
                        <div class="border border-gray-100 flex flex-col gap-4 mb-6 rounded-lg p-5">
                            <h2 class="text-lg font-display font-medium text-gray-900">
                                Ads Category
                            </h2>
                            <a href="#" class="w-full h-[88px] category-card px-6 py-4" v-for="item in 6">
                                <h2 class="text-base text-center font-semibold text-white mb-1.5">
                                    Technology
                                </h2>
                                <p class="flex justify-center count">
                                    <span
                                        class="text-xs bg-[rgba(255,255,255,0.16)] rounded font-medium text-white inline-flex py-1 px-2.5">34,234</span>
                                </p>
                            </a>
                        </div>
                        <div class="bg-gray-50 flex flex-col gap-4 rounded-lg p-5">
                            <h2 class="text-lg font-display font-medium text-gray-900">
                                Top Ads
                            </h2>
                            <template x-for="item in 4">
                                <x-frontend.listing-card.grid-view />
                            </template>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer-component />
    </div>
@endsection
{{-- <script setup>
import HeaderComponent from "../../components/Header/HeaderComponent.vue";
import Breadcrumb from "../../components/Breadcrumb/Breadcrumb.vue";
import BreadcrumbArrow from "../../components/Icons/BreadcrumbArrow.vue";
import BlogCard from "../../components/Pages/Blog/BlogCard.vue";
import BlogFilter from "../../components/Pages/Blog/BlogFilter.vue";
import GridView from "../../components/ListingCard/GridView.vue";
import FooterComponent from "../../components/FooterComponent.vue";
import CategoryOne from "../../assets/images/img/category-01.png";
import LayersIcon from "../../components/Icons/Blog/LayersIcon.vue";
import ArrowDouble from "../../components/Icons/Blog/ArrowDouble.vue";
import Facebook from "../../components/Icons/BlogDetails/Facebook.vue";
import Twitter from "../../components/Icons/BlogDetails/Twitter.vue";
import Pinterest from "../../components/Icons/BlogDetails/Pinterest.vue";
import Link from "../../components/Icons/BlogDetails/Link.vue";
import BlogDetail from "../../assets/images/img/blog-detail.png";
import QouteIcon from "../../components/Icons/Blog/QouteIcon.vue";
import GridCard from "../../components/ListingCard/GridView.vue"

const blog = {
  title:
    "In 1911, a genius revealed a forgotten science of how to be 50x more productive without",
  excerpt:
    "Drucker isn’t just talking about 50x productivity for the smartest people. He’s talking about 50x productivity on average for an entire society.",
  category: "Travel",
};
</script> --}}
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
