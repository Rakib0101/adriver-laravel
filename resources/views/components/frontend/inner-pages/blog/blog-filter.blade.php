{{-- <script setup>
import SearchLg from "../../Icons/SearchLg.vue";
import LocationIcon from "../../Icons/LocationIcon.vue";
import TagIcon from "../../Icons/TagIcon.vue";
import TargetIcon from "../../Icons/TargetIcon.vue";
import MapIcon from "../../Icons/MapIcon.vue";
import Multiselect from "@vueform/multiselect";
import "@vueform/multiselect/themes/default.css";

import { ref } from "vue";

const isFocused = ref(false);
const value = ref(null);
const options = ["Popular", "Trending", "Latest"];
const options2 = ["Category 1", "Category 2", "Category 3"];
</script> --}}

<div class="mb-6">
    <div :class="isFocused
        ?
        'shadow-[0px_8px_24px_rgba(88,179,43,0.12)] border border-primary-500' :
        'shadow-[0px_3px_14px_rgba(23,30,21,0.03)] border border-gray-100'"
        for="search-filter"
        class="lg:shadow-[0px_12px_32px_rgba(23,30,21,0.05)] rounded-lg lg:py-[11px] lg:pr-3 lg:pl-1 flex justify-between flex-col mb-5">
        <div class="flex justify-between lg:border-none border-b border-gray-100">
            <div class="relative lg:flex hidden lg:max-w-[456px] w-full">
                <label for="search-filter" class="absolute top-3 left-[18px]">
                    <search-lg />
                </label>
                <input type="text" placeholder="Search for anything..." id="search-filter"
                    class="py-3 pl-[54px] max-w-[456px] w-full block focus:outline-none" @focus="isFocused = true"
                    @blur="isFocused = false" />
            </div>
            <div
                class="relative lg:flex hidden gap-3 items-center lg:max-w-[312px] w-full border-r border-l border-gray-100 px-[18px]">
                <!-- <tag-icon /> -->
                <Multiselect class="list-type" placeholder="Select category..." v-model="value"
                    :options="options2" />
            </div>
            <div
                class="relative lg:flex hidden gap-3 items-center lg:max-w-[312px] w-full border-r border-l border-gray-100 px-[18px]">
                <!-- <tag-icon /> -->
                <Multiselect class="list-type" placeholder="Sort by: " v-model="value" :options="options" />
            </div>
            <button
                class="lg:inline-flex hidden gap-2 text-white max-h-12 text-base leading-[48px] rounded-md items-center px-5 bg-primary-500 hover:bg-primary-700 transition-all duration-300">
                <search-lg />
                <span>Search</span>
            </button>
        </div>
        <div class="relative flex w-full border-b border-gray-100 lg:hidden">
            <label for="search-filter" class="absolute top-3 left-[18px]">
                <search-lg />
            </label>
            <input type="text" placeholder="Search for anything..." id="search-filter"
                class="py-3 pl-[54px] w-full block focus:outline-none" />
        </div>
        <div class="relative flex lg:hidden gap-3 items-center w-full px-[18px]">
            <!-- <tag-icon /> -->
            <Multiselect class="list-type" placeholder="Sort by: " v-model="value" :options="options" />
        </div>
    </div>
    <div>
        <p class="lg:flex hidden gap-2 text-gray-900 text-sm font-medium overflow-x-auto">
            Suggestion:
            <a href="#"
                class="text-gray-500 hover:text-primary-500 hover:underline transition-all duration-300">Mobile
                Phones,</a>
            <a href="#"
                class="text-gray-500 hover:text-primary-500 hover:underline transition-all duration-300">Accessories,</a>
            <a href="#"
                class="text-gray-500 hover:text-primary-500 hover:underline transition-all duration-300">Wearables,</a>
            <a href="#"
                class="text-gray-500 hover:text-primary-500 hover:underline transition-all duration-300">SIM Cards,</a>
            <a href="#"
                class="text-gray-500 hover:text-primary-500 hover:underline transition-all duration-300">Desktop
                Computers,</a>
            <a href="#"
                class="text-gray-500 hover:text-primary-500 hover:underline transition-all duration-300">Laptops,</a>
            <a href="#"
                class="text-gray-500 hover:text-primary-500 hover:underline transition-all duration-300">TVs,</a>
            <a href="#"
                class="text-gray-500 hover:text-primary-500 hover:underline transition-all duration-300">Photocopiers,</a>
            <a href="#"
                class="text-gray-500 hover:text-primary-500 hover:underline transition-all duration-300">Cars,</a>
            <a href="#"
                class="text-gray-500 hover:text-primary-500 hover:underline transition-all duration-300">Motorbikes,</a>
        </p>
    </div>
</div>
