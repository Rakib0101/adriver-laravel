@extends('frontend.layouts.master')

@section('content')
    <div>
        <x-frontend.breadcrumb.breadcrumb-view label='Home' url='#' title="Blog List" />
        <div class="py-[100px]">
            <div class="container">
                <div class="flex lg:justify-between lg:items-start flex-col-reverse gap-8 lg:flex-row">
                    <div
                        class="w-full lg:max-w-[312px] border rounded-lg border-gray-100 shadow-[0px_8px_32px_rgba(23,30,21,0.08)]">
                        <div class="relative">
                            <input-field id="search" placeholder="How can we help you..."
                                class="pl-[54px] rounded-lg text-base font-medium" />
                            <label for="search" class="absolute left-[18px] top-3">
                                <search-lg />
                            </label>
                        </div>
                        <div class="p-6">
                            <h3 class="text-sm text-gray-300 font-medium mb-2">
                                Related Topic
                            </h3>
                            <ul>
                                <li>
                                    <a href="#"
                                        class="support-topic-list flex gap-3 items-center rounded hover:bg-primary-50 transition-all duration-300 text-base text-gray-700 hover:text-gray-900 font-medium py-3 px-4 mb-1">
                                        <span class="text-gray-300">
                                            <info-octagon />
                                        </span>
                                        New to Adriver</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="support-topic-list flex gap-3 items-center rounded hover:bg-primary-50 transition-all duration-300 text-base text-gray-700 hover:text-gray-900 font-medium py-3 px-4 mb-1">
                                        <span class="text-gray-300">
                                            <phone-icon />
                                        </span>
                                        Adriver Mobile App</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="support-topic-list flex gap-3 items-center rounded hover:bg-primary-50 transition-all duration-300 text-base text-gray-700 hover:text-gray-900 font-medium py-3 px-4 mb-1">
                                        <span class="text-gray-300">
                                            <settings-icon />
                                        </span>
                                        Account Settings & Privacy</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="support-topic-list flex gap-3 items-center rounded hover:bg-primary-50 transition-all duration-300 text-base text-gray-700 hover:text-gray-900 font-medium py-3 px-4">
                                        <span class="text-gray-300">
                                            <package-plus />
                                        </span>
                                        Posting Ads</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="support-topic-list flex gap-3 items-center rounded hover:bg-primary-50 transition-all duration-300 text-base text-gray-700 hover:text-gray-900 font-medium py-3 px-4 mb-1">
                                        <span class="text-gray-300">
                                            <layers-icon />
                                        </span>
                                        Meet your Dashboard</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="support-topic-list flex gap-3 items-center rounded hover:bg-primary-50 transition-all duration-300 text-base text-gray-700 hover:text-gray-900 font-medium py-3 px-4 mb-1">
                                        <span class="text-gray-300">
                                            <edit-icon />
                                        </span>
                                        Post, Edit & Customize</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="support-topic-list flex gap-3 items-center rounded hover:bg-primary-50 transition-all duration-300 text-base text-gray-700 hover:text-gray-900 font-medium py-3 px-4 mb-1">
                                        <span class="text-gray-300">
                                            <notification-icon />
                                        </span>
                                        Ads Listing and Seller</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="support-topic-list flex gap-3 items-center rounded hover:bg-primary-50 transition-all duration-300 text-base text-gray-700 hover:text-gray-900 font-medium py-3 px-4">
                                        <span class="text-gray-300">
                                            <arrow-circle />
                                        </span>
                                        Ads Listing and Seller</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="support-topic-list flex gap-3 items-center rounded hover:bg-primary-50 transition-all duration-300 text-base text-gray-700 hover:text-gray-900 font-medium py-3 px-4 mb-1">
                                        <span class="text-gray-300">
                                            <info-octagon />
                                        </span>
                                        New to Adriver</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="support-topic-list flex gap-3 items-center rounded hover:bg-primary-50 transition-all duration-300 text-base text-gray-700 hover:text-gray-900 font-medium py-3 px-4 mb-1">
                                        <span class="text-gray-300">
                                            <phone-icon />
                                        </span>
                                        Adriver Mobile App</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="support-topic-list flex gap-3 items-center rounded hover:bg-primary-50 transition-all duration-300 text-base text-gray-700 hover:text-gray-900 font-medium py-3 px-4 mb-1">
                                        <span class="text-gray-300">
                                            <settings-icon />
                                        </span>
                                        Account Settings & Privacy</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="support-topic-list flex gap-3 items-center rounded hover:bg-primary-50 transition-all duration-300 text-base text-gray-700 hover:text-gray-900 font-medium py-3 px-4">
                                        <span class="text-gray-300">
                                            <package-plus />
                                        </span>
                                        Posting Ads</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="support-topic-list flex gap-3 items-center rounded hover:bg-primary-50 transition-all duration-300 text-base text-gray-700 hover:text-gray-900 font-medium py-3 px-4 mb-1">
                                        <span class="text-gray-300">
                                            <layers-icon />
                                        </span>
                                        Meet your Dashboard</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="support-topic-list flex gap-3 items-center rounded hover:bg-primary-50 transition-all duration-300 text-base text-gray-700 hover:text-gray-900 font-medium py-3 px-4 mb-1">
                                        <span class="text-gray-300">
                                            <edit-icon />
                                        </span>
                                        Post, Edit & Customize</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="support-topic-list flex gap-3 items-center rounded hover:bg-primary-50 transition-all duration-300 text-base text-gray-700 hover:text-gray-900 font-medium py-3 px-4 mb-1">
                                        <span class="text-gray-300">
                                            <notification-icon />
                                        </span>
                                        Ads Listing and Seller</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="support-topic-list flex gap-3 items-center rounded hover:bg-primary-50 transition-all duration-300 text-base text-gray-700 hover:text-gray-900 font-medium py-3 px-4">
                                        <span class="text-gray-300">
                                            <arrow-circle />
                                        </span>
                                        Ads Listing and Seller</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="w-full lg:max-w-[732px]">
                        <h2 class="text-xl md:text-[40px] md:leading-[48px] text-gray-900 font-semibold mb-5">
                            New to Adriver.
                        </h2>
                        <p class="text-lg text-gray-500 mb-5">
                            Sed nulla lectus, rutrum id porta a, tincidunt id magna. Nam
                            interdum at urna a ultrices. Class aptent taciti sociosqu ad
                            litora torquent per conubia nostra, per inceptos himenaeos. Morbi
                            ac fermentum diam. Nunc sollicitudin ligula consectetur lacus
                            pretium ullamcorper. Donec quis pellentesque nibh, ut hendrerit
                            metus. Sed molestie orci ut erat cursus blandit. Phasellus commodo
                            nibh at vulputate lacinia.
                        </p>
                        <img src="{{ asset('frontend/assets/images/img/support-detail.png') }}" alt=""
                            class="w-full h-[312px] object-cover mb-[38px]" />
                        <h3 class="text-2xl text-gray-900 mb-3 font-semibold">
                            Start here.
                        </h3>
                        <p class="text-lg text-gray-500 mb-[38px]">
                            Phasellus facilisis lorem nec erat pulvinar, vitae pretium nisi
                            convallis. In sit amet porttitor purus. Duis ac lectus ac turpis
                            luctus vestibulum ut eget sapien. Nam pulvinar id metus egestas
                            consectetur. Suspendisse placerat mi semper ante euismod,
                            vestibulum pharetra mauris volutpat. Maecenas tincidunt elementum
                            ipsum id tempor. Curabitur sit amet tellus sit amet dolor lobortis
                            sodales nec non urna. Phasellus id aliquam sapien. Nam nec est
                            quis eros volutpat consectetur. Duis ornare dui at ex ultricies
                            faucibus. Nullam elementum maximus enim, sed consequat orci
                            euismod eget. Etiam semper suscipit cursus.
                        </p>
                        <h3 class="text-2xl text-gray-900 mb-3 font-semibold">
                            Create your acccount.
                        </h3>
                        <p class="text-lg text-gray-500 mb-[38px]">
                            Vivamus accumsan leo et semper volutpat. Sed in mauris eu lorem
                            laoreet ornare. Vestibulum eleifend, diam sagittis molestie
                            dignissim, dui elit tincidunt erat, eget hendrerit nunc tellus at
                            metus. Aenean sem nulla, varius sed odio eget, porta venenatis
                            lacus. Sed congue arcu eu lacinia eleifend. Nunc nec nunc sit amet
                            mauris fringilla consectetur. Etiam mattis massa sed neque
                            scelerisque malesuada.
                        </p>
                        <h3 class="text-2xl text-gray-900 mb-3 font-semibold">
                            What is a listing?
                        </h3>
                        <div class="text-lg text-gray-500">
                            Donec pulvinar libero semper mauris egestas, et faucibus lacus
                            lobortis. Curabitur quis rhoncus libero. Suspendisse tincidunt
                            mauris non metus hendrerit porttitor. Quisque aliquam consequat
                            ante, non maximus ex placerat id. Etiam dapibus euismod efficitur.
                            Maecenas in enim ac mi ornare aliquet. Morbi dignissim, erat at
                            volutpat accumsan, turpis est rutrum enim, bibendum hendrerit elit
                            neque vel ante.

                            <p class="pt-5">
                                Vivamus venenatis, sem pellentesque lacinia vehicula, lacus
                                magna tempor purus, at cursus dui elit gravida lacus. Morbi vel
                                accumsan libero. Orci varius natoque penatibus et magnis dis
                                parturient montes, nascetur ridiculus mus. Donec luctus nulla
                                mauris, eu luctus ante aliquam sit amet. Maecenas sollicitudin
                                dolor et nisl gravida, eget congue massa egestas. Pellentesque
                                nisi massa, convallis sed tortor ac, sodales vestibulum lectus.
                                Nulla ut elementum odio, vel mollis nisi. Fusce rhoncus ex eu
                                imperdiet faucibus. Vivamus faucibus accumsan elit. Nam tellus
                                enim, varius sed ultrices a, scelerisque non risus. Curabitur
                                elementum, orci sed tempus eleifend, nunc sem viverra est, ac
                                bibendum lectus ante ac augue. Nullam congue et mi ac egestas.
                                Phasellus sit amet feugiat felis. Pellentesque aliquet ultrices
                                libero, eget pulvinar leo fermentum ut. Sed ex tortor, eleifend
                                non risus quis, dapibus consectetur nibh. Morbi nec ornare
                                lectus.
                            </p>
                        </div>
                    </div>
                    <div class="w-full lg:block hidden lg:max-w-[200px] lg:ml-7">
                        <h2 class="text-sm text-gray-700 font-semibold mb-3">
                            Table of content
                        </h2>
                        <ul>
                            <li>
                                <a href="#"
                                    class="text-base text-gray-400 leading-7 hover:text-primary-500 hover:underline transition-all duration-300">Stay
                                    Here</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="text-base text-gray-400 leading-7 hover:text-primary-500 hover:underline transition-all duration-300">Create
                                    your account.</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="text-base text-gray-400 leading-7 hover:text-primary-500 hover:underline transition-all duration-300">What
                                    is listing ?</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="text-base text-gray-400 leading-7 hover:text-primary-500 hover:underline transition-all duration-300">Create
                                    your first listing.</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="text-base text-gray-400 leading-7 hover:text-primary-500 hover:underline transition-all duration-300">Promote
                                    Listing.</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="text-base text-gray-400 leading-7 hover:text-primary-500 hover:underline transition-all duration-300">Seller
                                    & rating.</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('styles')
    <style>
        .support-topic-list:hover svg path {
            stroke: #58b32b;
        }
    </style>
@endsection
