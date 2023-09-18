<div class="border border-gray-100 rounded-lg px-8 pb-8 pt-6">
    <div class="flex lg:flex-col xl:flex-row gap-4 flex-row justify-between xl:items-center lg:items-start items-center">
        <div>
            <h2 class="text-warning-500 text-xl md:text-[40px] md:leading-[48px] font-semibold font-display mb-2">
                $526.00
            </h2>
            <p class="text-gray-500 flex gap-2 items-center font-medium font-display text-sm">
                <span class="whitespace-nowrap">FIXED PRICE</span><span>•</span><span class="whitespace-nowrap">USED
                    PRODUCT</span>
            </p>
        </div>
        <div>
            <button
                class="p-3 rounded-full border-2 border-[#58B32B] text-[#58B32B] bg-transparent hover:bg-[#EEF7EA] hover:border-[#356B1A] hover:text-[#356B1A]"
                :disabled="isFavorite">
                <heart-icon v-if="!isFavorite" />
                <!-- <fill-heart v-if="isFavorite" /> -->
            </button>
        </div>
    </div>
    <hr class="border-gray-100 my-6" />

    <div class="flex lg:flex-col xl:flex-row flex-row item-center justify-between">
        <div class="flex items-center gap-3 mb-6">
            <div>
                <img src="../../../assets/images/img/avatar.png" alt="" />
            </div>
            <div>
                <p class="text-gray-400 text-sm font-display mb-0.5">AD POST BY:</p>
                <h4 class="text-gray-900 text-base font-display font-medium">
                    Brooklyn Simmons
                </h4>
            </div>
        </div>
        <a href="/user-profile"
            class="uppercase font-display font-semibold text-[15px] leading-[48px] tracking-[-0.01em] text-primary-500">
            View Profile
        </a>
    </div>
    <div>
        <primary-button class="w-full mb-3">
            <span><message-square /></span>
            <span>Send Message</span>
        </primary-button>
        <outline-primary class="w-full mb-3">
            <span><message-icon /></span>
            <span>Message via email</span>
        </outline-primary>
        <secondary-button class="w-full mb-3 text-gray-900 hover:text-gray-700">
            <span><icon-whatsapp /></span>
            <span>Message via whatsapp</span>
        </secondary-button>
        <div class="border-2 border-warning-50 p-5 cursor-pointer rounded-md bg-warning-50 hover:bg-warning-100 flex justify-start items-center gap-2 hover:border-warning-100 transition-all duration-300 font-display uppercase font-semibold text-sm tracking-[-0.01em] mb-3"
            @click="revealNo = !revealNo">
            <span class="text-danger-500"><phonecall-lg /></span>
            <div>
                <p class="text-gray-600 mb-1 capitalize">
                    Click here to reveal phone numer.
                </p>
                <h2 class="text-gray-900 font-2xl font-semibold"><span v-if="!revealNo">+91816xxxxxxx</span> <span
                        v-else>+91816234567</span></h2>
            </div>
        </div>
        <p class="text-sm text-gray-500 font-display">
            This ad will expire in 29th November, 2022
        </p>
    </div>
</div>
