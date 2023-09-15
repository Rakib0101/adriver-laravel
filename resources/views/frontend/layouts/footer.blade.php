<footer class="bg-white text-gray-600 pt-[100px] hidden sm:block">
    <div class="container">
        <div class="grid grid-cols-12 gap-6">
            <!-- Footer 1st Item -->
            <div class="w-full lg:col-span-3 col-span-6 order-1">
                <div class="">
                    <!-- Footer Logo -->
                    <div class="mb-6">
                        <a href="#"
                            class="text-2xl font-bold text-gray-800 dark:text-white hover:text-gray-700 dark:hover:text-gray-300"><img
                                src="{{ asset('frontend/assets/images/footer/logo.svg') }}" alt="Logo" /></a>
                    </div>

                    <!-- Social Links -->
                    <div class="max-w-sm text-gray-400">
                        <div class="links flex flex-row flex-wrap gap-4 text-gray-500 font-semibold">
                            <a href="#" class="footer-link hover:text-primary-500">About,</a>
                            <a href="#" class="footer-link hover:text-primary-500">Contact,</a>
                            <a href="#" class="footer-link hover:text-primary-500">Help Centre,</a>
                            <a href="#" class="footer-link hover:text-primary-500">FAQs,</a>
                            <a href="#" class="footer-link hover:text-primary-500">Privacy,</a>
                            <a href="#" class="footer-link hover:text-primary-500">Terms & Condition</a>
                        </div>
                    </div>

                    <!-- Social Icons -->
                    <div class="flex mt-6 -mx-2 gap-2">
                        <a href="#"
                            class="bg-primary-50 p-3 rounded-md text-primary-700 transition-colors duration-300 hover:bg-primary-500 hover:text-white"
                            aria-label="Reddit">
                            <x-bi-facebook class="w-5" />
                        </a>

                        <a href="#"
                            class="bg-primary-50 p-3 rounded-md text-primary-700 transition-colors duration-300 hover:bg-primary-500 hover:text-white"
                            aria-label="Reddit">
                            <x-bi-twitter class="w-5" />
                        </a>

                        <a href="#"
                            class="bg-primary-50 p-3 rounded-md text-primary-700 transition-colors duration-300 hover:bg-primary-500 hover:text-white"
                            aria-label="Reddit">
                            <x-bi-instagram class="w-5" />
                        </a>

                        <a href="#"
                            class="bg-primary-50 p-3 rounded-md text-primary-700 transition-colors duration-300 hover:bg-primary-500 hover:text-white"
                            aria-label="Reddit">
                            <x-bi-whatsapp class="w-5" />
                        </a>

                        <a href="#"
                            class="bg-primary-50 p-3 rounded-md text-primary-700 transition-colors duration-300 hover:bg-primary-500 hover:text-white"
                            aria-label="Reddit">
                            <x-bi-youtube class="w-5" />
                        </a>
                    </div>
                </div>
            </div>
            <!-- Footer 2nd Item -->
            <div class="w-full lg:col-span-6 col-span-12 grid grid-cols-3 gap-6 order-3">
                <div class="w-full col-span-2">
                    <h3 class="text-primary-500 font-semibold font-display text-xl uppercase mb-5">
                        ADS Category
                    </h3>
                    <ul class="ads-category-list">
                        <li>
                            <a href="#" class="footer-link text-gray-400 hover:text-primary-500">Smartphone</a>
                        </li>
                        <li>
                            <a href="#" class="footer-link text-gray-400 hover:text-primary-500">Electronics</a>
                        </li>

                        <li>
                            <a href="#" class="footer-link text-gray-400 hover:text-primary-500">Vehicles</a>
                        </li>

                        <li>
                            <a href="#" class="footer-link text-gray-400 hover:text-primary-500">Property</a>
                        </li>

                        <li>
                            <a href="#" class="footer-link text-gray-400 hover:text-primary-500">Home & Living</a>
                        </li>
                        <li>
                            <a href="#" class="footer-link text-gray-400 hover:text-primary-500">Fashion &
                                Beauty</a>
                        </li>
                        <li>
                            <a href="#" class="footer-link text-gray-400 hover:text-primary-500">Pets &
                                Animals</a>
                        </li>
                        <li>
                            <a href="#" class="footer-link text-gray-400 hover:text-primary-500">Hobbies, Sport &
                                Kids</a>
                        </li>
                        <li>
                            <a href="#" class="footer-link text-gray-400 hover:text-primary-500">Education &
                                Essential</a>
                        </li>
                        <li>
                            <a href="#" class="footer-link text-gray-400 hover:text-primary-500">View All
                                Category</a>
                        </li>
                    </ul>
                </div>
                <!-- Footer 3rd Item -->
                <div class="w-full col-span-1">
                    <h3 class="text-primary-500 font-semibold font-display text-xl uppercase mb-5">
                        Quick Links
                    </h3>
                    <ul class="flex flex-col gap-3">
                        <li>
                            <a href="#" class="footer-link text-gray-400 hover:text-primary-500">Post a
                                Listing</a>
                        </li>
                        <li>
                            <a href="#" class="footer-link text-gray-400 hover:text-primary-500">Sign In & Sign
                                Up</a>
                        </li>
                        <li>
                            <a href="#" class="footer-link text-gray-400 hover:text-primary-500">Pricing Plan</a>
                        </li>
                        <li>
                            <a href="#" class="footer-link text-gray-400 hover:text-primary-500">Download Mobile
                                App</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Footer Last Item -->
            <div class="w-full lg:col-span-3 col-span-6 order-2">
                <h3 class="text-primary-500 font-semibold font-display text-xl uppercase mb-5">
                    Latest Listing
                </h3>
                <ul class="flex flex-col gap-3">
                    <li>
                        <a href="#"
                            class="inline-block border hover:shadow-[0px_8px_24px_rgba(23,30,21,0.04)] hover:border-primary-500 hover:bg-primary-50 transition-all duration-300 border-gray-100 rounded-md font-semibold text-gray-500 hover:text-primary-500 py-3 px-[18px]">
                            <div class="tag flex items-center gap-1">
                                <span class="text-primary-500 inline-flex">
                                    <i class="ph ph-tag text-xl leading-5"></i>
                                </span>
                                <p class="uppercase text-xs font-semibold text-primary-500">
                                    For Sale
                                </p>
                            </div>
                            <p class="text-sm text-gray-900 font-medium">
                                Lorem ipsum dolor sit amet, adipiscing.
                            </p>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="inline-block border hover:shadow-[0px_8px_24px_rgba(23,30,21,0.04)] hover:border-primary-500 hover:bg-primary-50 transition-all duration-300 border-gray-100 rounded-md font-semibold text-gray-500 hover:text-primary-500 py-3 px-[18px]">
                            <div class="tag flex items-center gap-1">
                                <span class="text-blue-500 inline-flex">
                                    <i class="ph ph-tag text-xl leading-5"></i>
                                </span>
                                <p class="uppercase font-semibold text-danger-500"></p>
                                <p class="uppercase text-xs font-semibold text-blue-500">
                                    Want to Buy
                                </p>
                            </div>
                            <p class="text-sm text-gray-900 font-medium">
                                Lorem ipsum dolor sit amet, adipiscing.
                            </p>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="inline-block border border-gray-100 hover:shadow-[0px_8px_24px_rgba(23,30,21,0.04)] hover:border-primary-500 hover:bg-primary-50 transition-all duration-300 rounded-md font-semibold text-gray-500 hover:text-primary-500 py-3 px-[18px]">
                            <div class="tag flex items-center gap-1">
                                <span class="text-danger-500 inline-flex">
                                    <i class="ph ph-tag text-xl leading-5"></i>
                                </span>
                                <p class="uppercase text-xs font-semibold text-danger-500">
                                    For Exchange
                                </p>
                            </div>
                            <p class="text-sm text-gray-900 font-medium">
                                Lorem ipsum dolor sit amet, adipiscing.
                            </p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="py-9 sm:block hidden">
            <p class="text-center text-gray-500 dark:text-gray-400">
                All content © 2023-Current Adriver and respective copyright holders.
            </p>
        </div>
    </div>
</footer>
