<div>
    <div class="xl:p-14 p-8 rounded-xl bg-cover bg-center bg-no-repeat" style="background-image:url('{{ asset('frontend/assets/images/img/newsletter-bg.png') }}');">
        <div
            class="newsletter-wrapper w-full flex flex-col md:flex-row md:justify-center sm:gap-10 xl:justify-between items-center">
            <!-- content-left start -->
            <div class="flex flex-col xl:flex-row justify-center items-center gap-6">
                <!-- icon -->
                <span class="md:block hidden">
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M35.8333 29.9998L24.7619 19.9998M15.2381 19.9998L4.16673 29.9998M3.33334 11.6665L16.9415 21.1922C18.0435 21.9636 18.5945 22.3493 19.1938 22.4987C19.7232 22.6306 20.2769 22.6306 20.8062 22.4987C21.4055 22.3493 21.9565 21.9636 23.0585 21.1922L36.6667 11.6665M11.3333 33.3332H28.6667C31.4669 33.3332 32.8671 33.3332 33.9366 32.7882C34.8774 32.3088 35.6423 31.5439 36.1217 30.6031C36.6667 29.5336 36.6667 28.1334 36.6667 25.3332V14.6665C36.6667 11.8662 36.6667 10.4661 36.1217 9.39655C35.6423 8.45574 34.8774 7.69084 33.9366 7.21147C32.8671 6.6665 31.4669 6.6665 28.6667 6.6665H11.3333C8.53308 6.6665 7.13295 6.6665 6.06339 7.21147C5.12258 7.69084 4.35768 8.45574 3.87831 9.39655C3.33334 10.4661 3.33334 11.8662 3.33334 14.6665V25.3332C3.33334 28.1334 3.33334 29.5336 3.87831 30.6031C4.35768 31.5439 5.12258 32.3088 6.06339 32.7882C7.13295 33.3332 8.53308 33.3332 11.3333 33.3332Z"
                            stroke="white" stroke-width="3.33333" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </span>
                <!-- icon -->

                <!-- info -->
                <div class="">
                    <h2
                        class="font-display text-xl md:text-3xl lg:text-[40px] xl:leading-[48px] font-semibold text-[#FFFFFF] mb-3 text-center xl:text-start">
                        Subscribe Newsletter
                    </h2>
                    <p
                        class="font-display xl:text-[18px] text-sm xl:text-start text-center text-[#FFFFFF] leadding-6 font-normal opacity-80 xl:opacity-100">
                        Subscribe to our newsletter to get daily update about ads.
                    </p>
                </div>
                <!-- info -->
            </div>
            <!-- content-left end -->

            <!-- content-right start -->
            <div class="content-right pt-4 xl:pt-0">
                <div class="bg-white rounded-[10px] flex flex-wrap gap-3 py-4 pl-3 pr-4 ring-2 ring-primary-300 focus-within:ring-primary-500">
                    <div class="relative flex gap-3 items-center xl:w-[364px] w-full">
                        <label for="newsletter" class="absolute top-1/2 -translate-y-1/2 left-5">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M21.5 18L14.8571 12M9.14286 12L2.50003 18M2 7L10.1649 12.7154C10.8261 13.1783 11.1567 13.4097 11.5163 13.4993C11.8339 13.5785 12.1661 13.5785 12.4837 13.4993C12.8433 13.4097 13.1739 13.1783 13.8351 12.7154L22 7M6.8 20H17.2C18.8802 20 19.7202 20 20.362 19.673C20.9265 19.3854 21.3854 18.9265 21.673 18.362C22 17.7202 22 16.8802 22 15.2V8.8C22 7.11984 22 6.27976 21.673 5.63803C21.3854 5.07354 20.9265 4.6146 20.362 4.32698C19.7202 4 18.8802 4 17.2 4H6.8C5.11984 4 4.27976 4 3.63803 4.32698C3.07354 4.6146 2.6146 5.07354 2.32698 5.63803C2 6.27976 2 7.11984 2 8.8V15.2C2 16.8802 2 17.7202 2.32698 18.362C2.6146 18.9265 3.07354 19.3854 3.63803 19.673C4.27976 20 5.11984 20 6.8 20Z"
                                    stroke="#171E15" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </label>
                        <input type="text" placeholder="Email address"
                            class="inline-block font-display text-base text-[#636A60] focus:outline-none w-full pl-[54px] py-3 pr-1"
                            id="newsletter">
                    </div>
                    <button class="bg-[#58B32B] text-white px-5 rounded-md xl:w-[123px] w-full font-display text-[15px] font-semibold leading-[48px] hover:bg-[#356B1A] transition-all duration-300 ease-in-out">Subscribe</button>
                </div>
            </div>
            <!-- content-right end -->
        </div>
    </div>
</div>


<style>
    @media (max-width: 639px) {
        .newsletter-wrapper {
            padding-bottom: 100px;
        }
    }
</style>
