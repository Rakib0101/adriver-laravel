<section class="md:py-[100px] py-10 px-4 md:px-0">
    <div class="container">
        <h2
            class="text-gray-900 text-center text-2xl md:text-[40px] md:leading-[48px] font-semibold font-display mb-[50px]">
            Choose Pricing Plan
        </h2>
        <!-- pricing card wrapper -->
        <div
            class="pricing-card__wrap  grid xl:grid-cols-4 lg:grid-cols-3 sm:grid-cols-2 grid-cols-1 items-center  gap-6 pb-[50px]">
            <div
                class="pricing-card rounded-xl bg-white border border-gray-100 shadow-[0px_8px_24px_rgba(23,30,21,0.06)]">
                <div class="pricing-card__top bg-gray-50 rounded-md px-4 py-6 text-center m-3">
                    <free-price class="mb-6 mx-auto" />
                    <h4 class="text-gray-900 mb-3 font-display font-semibold text-lg leading-[100%] uppercase">
                        Free
                        <span class="text-sm font-normal text-gray-500 lowercase">/monthly</span>
                    </h4>
                    <p class="text-gray-600 text-sm mb-3">
                        Sed pellentesque tellus interdum augue pulvinar, ut ornare nibh
                        varius.
                    </p>
                    <h2 class="text-[32px] leading-10 text-primary-500 font-semibold">
                        $0 USD
                    </h2>
                </div>
                <div class="pricing-card__mid">
                    <ul>
                        <li class="flex gap-2 items-center px-5 py-3 bg-white text-gray-900 font-display text-base">
                            <span class="">
                                <active-check />
                            </span>
                            <span>1 Active Listing</span>
                        </li>
                        <li class="flex gap-2 items-center px-5 py-3 bg-white text-gray-900 font-display text-base">
                            <span>
                                <active-check />
                            </span>
                            <span>7 Days Visible</span>
                        </li>
                        <li class="flex gap-2 items-center px-5 py-3 bg-white text-gray-400 font-display text-base">
                            <span>
                                <disable-check />
                            </span>
                            <span>No Higlights</span>
                        </li>
                        <li class="flex gap-2 items-center px-5 py-3 bg-white text-gray-400 font-display text-base">
                            <span>
                                <disable-check />
                            </span>
                            <span>No Featured Listing</span>
                        </li>
                        <li class="flex gap-2 items-center px-5 py-3 bg-white text-gray-400 font-display text-base">
                            <span>
                                <disable-check />
                            </span>
                            <span>No Bump Up Listing</span>
                        </li>
                        <li class="flex gap-2 items-center px-5 py-3 bg-white text-gray-400 font-display text-base">
                            <span>
                                <disable-check />
                            </span>
                            <span>No Top Listing</span>
                        </li>
                    </ul>
                </div>
                <div class="pricing-card__bottom p-5">
                    <div @click="choosePlan">
                        <x-frontend.button.outline-primary class="flex w-full justify-center text-center">
                            Choose Plans <button-arrow />
                        </x-frontend.button.outline-primary>
                    </div>
                </div>
            </div>
            <div
                class="pricing-card rounded-xl bg-white border border-gray-100 shadow-[0px_8px_24px_rgba(23,30,21,0.06)]">
                <div class="pricing-card__top bg-gray-50 rounded-md px-4 py-6 text-center m-3">
                    <cube-icon class="mb-6 mx-auto" />
                    <h4 class="text-gray-900 mb-3 font-display font-semibold text-lg leading-[100%] uppercase">
                        Basic
                        <span class="text-sm font-normal text-gray-500 lowercase">/monthly</span>
                    </h4>
                    <p class="text-gray-600 text-sm mb-3">
                        Sed pellentesque tellus interdum augue pulvinar, ut ornare nibh
                        varius.
                    </p>
                    <h2 class="text-[32px] leading-10 text-primary-500 font-semibold">
                        $12 USD
                    </h2>
                </div>
                <div class="pricing-card__mid">
                    <ul>
                        <li class="flex gap-2 items-center px-5 py-3 bg-white text-gray-900 font-display text-base">
                            <span class="">
                                <active-check />
                            </span>
                            <span>1 Active Listing</span>
                        </li>
                        <li class="flex gap-2 items-center px-5 py-3 bg-white text-gray-900 font-display text-base">
                            <span>
                                <active-check />
                            </span>
                            <span>15 Days Visible</span>
                        </li>
                        <li class="flex gap-2 items-center px-5 py-3 bg-white text-gray-400 font-display text-base">
                            <span>
                                <disable-check />
                            </span>
                            <span>No Higlights</span>
                        </li>
                        <li class="flex gap-2 items-center px-5 py-3 bg-white text-gray-400 font-display text-base">
                            <span>
                                <disable-check />
                            </span>
                            <span>No Featured Listing</span>
                        </li>
                        <li class="flex gap-2 items-center px-5 py-3 bg-white text-gray-400 font-display text-base">
                            <span>
                                <disable-check />
                            </span>
                            <span>No Bump Up Listing</span>
                        </li>
                        <li class="flex gap-2 items-center px-5 py-3 bg-white text-gray-400 font-display text-base">
                            <span>
                                <disable-check />
                            </span>
                            <span>No Top Listing</span>
                        </li>
                    </ul>
                </div>
                <div class="pricing-card__bottom p-5">
                    <div @click="choosePlan">
                        <x-frontend.button.outline-primary class="flex w-full justify-center text-center">
                            Choose Plans <button-arrow />
                        </x-frontend.button.outline-primary>
                    </div>
                </div>
            </div>
            <div
                class="pricing-card rounded-xl bg-white border border-gray-100 shadow-[0px_8px_24px_rgba(23,30,21,0.06)]">
                <div class="pricing-card__top bg-primary-500 rounded-md px-4 py-6 text-center m-3">
                    <lightning-icon class="mb-6 mx-auto" />
                    <h4 class="text-white mb-3 font-display font-semibold text-lg leading-[100%] uppercase">
                        Standard
                        <span class="text-sm font-normal text-primary-100 lowercase">/monthly</span>
                    </h4>
                    <p class="text-white text-sm mb-3">
                        Sed pellentesque tellus interdum augue pulvinar, ut ornare nibh
                        varius.
                    </p>
                    <h2 class="text-[32px] leading-10 text-white font-semibold">
                        $39 USD
                    </h2>
                </div>
                <div class="pricing-card__mid">
                    <ul>
                        <li class="flex gap-2 items-center px-5 py-3 bg-white text-gray-900 font-display text-base">
                            <span>
                                <active-check />
                            </span>
                            <span>5 Active Listing</span>
                        </li>
                        <li class="flex gap-2 items-center px-5 py-3 bg-white text-gray-900 font-display text-base">
                            <span>
                                <active-check />
                            </span>
                            <span>30 Days Visible</span>
                        </li>
                        <li class="flex gap-2 items-center px-5 py-3 bg-white text-gray-900 font-display text-base">
                            <span>
                                <active-check />
                            </span>
                            <span>1 Higlights</span>
                        </li>
                        <li class="flex gap-2 items-center px-5 py-3 bg-white text-gray-900 font-display text-base">
                            <span>
                                <active-check />
                            </span>
                            <span>1 Featured Listing</span>
                        </li>
                        <li class="flex gap-2 items-center px-5 py-3 bg-white text-gray-400 font-display text-base">
                            <span>
                                <disable-check />
                            </span>
                            <span>No Bump Up Listing</span>
                        </li>
                        <li class="flex gap-2 items-center px-5 py-3 bg-white text-gray-400 font-display text-base">
                            <span>
                                <disable-check />
                            </span>
                            <span>No Top Listing</span>
                        </li>
                    </ul>
                </div>
                <div class="pricing-card__bottom p-5">
                    <div @click="choosePlan">
                        <x-frontend.button.outline-primary class="flex w-full justify-center text-center">
                            Choose Plans <button-arrow />
                        </x-frontend.button.outline-primary>
                    </div>
                </div>
            </div>
            <div
                class="pricing-card rounded-xl bg-white border border-gray-100 shadow-[0px_8px_24px_rgba(23,30,21,0.06)]">
                <div class="pricing-card__top bg-gray-900 rounded-md px-4 py-6 text-center m-3">
                    <building-icon class="mb-6 mx-auto" />
                    <h4 class="text-white mb-3 font-display uppercase font-semibold text-lg leading-[100%]">
                        Premium
                        <span class="text-sm font-normal text-gray-200 lowercase">/monthly</span>
                    </h4>
                    <p class="text-gray-300 text-sm mb-3">
                        Sed pellentesque tellus interdum augue pulvinar, ut ornare nibh
                        varius.
                    </p>
                    <h2 class="text-[32px] leading-10 text-primary-500 font-semibold">
                        $99 USD
                    </h2>
                </div>
                <div class="pricing-card__mid">
                    <ul>
                        <li class="flex gap-2 items-center px-5 py-3 bg-white text-gray-900 font-display text-base">
                            <span>
                                <active-check />
                            </span>
                            <span>15 Active Listing</span>
                        </li>
                        <li class="flex gap-2 items-center px-5 py-3 bg-white text-gray-900 font-display text-base">
                            <span>
                                <active-check />
                            </span>
                            <span>90 Days Visible</span>
                        </li>
                        <li class="flex gap-2 items-center px-5 py-3 bg-white text-gray-900 font-display text-base">
                            <span>
                                <active-check />
                            </span>
                            <span>3 Higlights</span>
                        </li>
                        <li class="flex gap-2 items-center px-5 py-3 bg-white text-gray-900 font-display text-base">
                            <span>
                                <active-check />
                            </span>
                            <span>3 Featured Listing</span>
                        </li>
                        <li class="flex gap-2 items-center px-5 py-3 bg-white text-gray-900 font-display text-base">
                            <span>
                                <active-check />
                            </span>
                            <span>3 Bump Up Listing</span>
                        </li>
                        <li class="flex gap-2 items-center px-5 py-3 bg-white text-gray-900 font-display text-base">
                            <span>
                                <active-check />
                            </span>
                            <span>3 Top Listing</span>
                        </li>
                    </ul>
                </div>
                <div class="pricing-card__bottom p-5">
                    <div @click="choosePlan">
                        <x-frontend.button.outline-primary class="flex w-full justify-center text-center">
                            Choose Plans <button-arrow />
                        </x-frontend.button.outline-primary>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col md:flex-row justify-center items-center gap-6 mb-12">
            <p class="text-gray-900 font-display text-base font-normal">
                Don’t want to buy pricing plan, then pay per listing posting.
            </p>
            <div @click="choosePayPlan">
                <x-frontend.button.outline-primary class="whitespace-nowrap text-gray-900 border-gray-900 text-[15px]">
                    Pay per Listing post
                </x-frontend.button.outline-primary>
            </div>
        </div>
        <div>
            <img class="w-full object-cover" src="{{ asset('frontend/assets/images/img/advertisement-h.png') }}"
                alt="">
        </div>
    </div>
</section>
