<div>
    <div class="flex justify-between items-center mb-6">
        <div>
            <button
                class="inline-flex gap-2 max-h-12 items-center text-gray-500 hover:text-gray-700 font-display px-5 border-2 border-transparent hover:border-gray-700 rounded-md hover:bg-gray-50 transition-all duration-300">
                <span class="text-base hidden md:inline-flex leading-[48px] font-semibold uppercase">clear filter</span>
                <span class="text-base md:hidden inline-flex leading-[48px] font-semibold uppercase">filter</span>
                <span
                    class="py-[3px] text-xs leading-[100%] font-medium px-1.5 bg-gray-500 text-white hidden sm:inline-flex rounded-full">3</span>
            </button>
        </div>
        <div class="flex gap-4">
            <div class="sm:w-[200px] w-[150px]">
                <select class="relative !w-full sorting-select select2" placeholder="Sort By :">
                    <option value="option1">Option 1</option>
                    <option value="option2">Option 2</option>
                    <option value="option3">Option 3</option>
                </select>
            </div>
            <div
                class="border border-gray-100 p-1.5 max-h-12 lg:inline-flex hidden gap-1.5 justify-center items-center shadow-[0px_3px_14px_rgba(23,30,21,0.02)] rounded-md">
                <button class="p-2 rounded text-gray-400 hover:bg-gray-50 hover:text-gray-900"
                    :class="{ 'bg-primary-500 text-white': isGrid }" @click="isGrid = true, isList = false">
                    <x-bi-grid />
                </button>
                <button class="p-2 rounded text-gray-400 hover:bg-gray-50 hover:text-gray-900"
                    :class="{ 'bg-primary-500 text-white': isList }" @click="isList = true, isGrid=false">
                    <x-bi-list />
                </button>
            </div>
        </div>
    </div>
    <div class="bg-gray-50 rounded-md px-[18px] py-3.5 mb-6">
        <p class="flex gap-3 items-center text-gray-900 text-sm font-medium overflow-x-auto">
            <span class="whitespace-nowrap"> Active Filters: </span>
            <template x-for="(item, index) in activeFilters" :key="index">
                <span class="active-filter text-gray-600 font-normal inline-flex gap-0.5 items-center"
                    :class="`${index}` + ' ' + { hidden: hide }">
                    <span class="whitespace-nowrap" x-text="item"></span>
                    <x-bi-x class="cursor-pointer" @click="hideEle(index)" />
                </span>
            </template>
        </p>
    </div>
</div>
