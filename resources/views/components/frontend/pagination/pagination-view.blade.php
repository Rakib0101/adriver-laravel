<div class="pagination pt-6 flex justify-center gap-3 items-center overflow-x-auto scrollbar-hide">
    <button class="pagination-left-arrow cursor-pointer max-h-12 max-w-12 hover:bg-primary-50 inline-flex justify-center items-center p-2.5 rounded-md border-2 border-primary-500 hover:border-primary-700 text-primary-500 hover:text-primary-700 transition-all duration-300">
        <i class="ph-bold ph-arrow-left text-2xl leading-6"></i>
    </button>
    <div class="pagination-number flex gap-3 items-center justify-center">
        <template x-for="item of 9" :key="item">
            <div class="hidden md:block">
                <button
                    class="text-gray-500 text-base font-medium py-3 hover:bg-primary-500 rounded-md hover:text-white transition-all duration-300">
                    <span class="w-12 h-6 inline-flex justify-center items-center" x-text="item">
                    </span>
                </button>
            </div>
        </template>
    </div>
    <button class="pagination-left-arrow cursor-pointer max-h-12 max-w-12 hover:bg-primary-50 inline-flex justify-center items-center p-2.5 rounded-md border-2 border-primary-500 hover:border-primary-700 text-primary-500 hover:text-primary-700 transition-all duration-300">
        <i class="ph-bold ph-arrow-right text-2xl leading-6"></i>
    </button>
</div>
