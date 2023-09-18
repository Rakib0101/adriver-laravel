{{-- <script>
import SearchLg from "../Icons/SearchLg.vue";
import LocationIcon from "../Icons/LocationIcon.vue";
import TagIcon from "../Icons/TagIcon.vue";
import TargetIcon from "../Icons/TargetIcon.vue";
import MapIcon from "../Icons/MapIcon.vue";
import Multiselect from "@vueform/multiselect";
import "@vueform/multiselect/themes/default.css";

export default {
  components: {
    SearchLg,
    LocationIcon,
    TagIcon,
    TargetIcon,
    MapIcon,
    Multiselect,
  },
  props: {
    mapFilter: {
      type: Boolean,
      default: false,
    },
  },
  data() {
    return {
      isFocused: false,
      value: null,
      options: ["I want to Buy", "I want to Sell", "I want to Exchange"],
    };
  },
};
</script> --}}

  <div class="mb-6">
    <label for="search-filter" class="search-filter-wrap lg:shadow-[0px_12px_32px_rgba(23,30,21,0.05)] rounded-lg lg:py-[11px] lg:pr-3 lg:pl-1 flex justify-between flex-col mb-5 shadow-[0px_3px_14px_rgba(23,30,21,0.03)] border border-gray-100">
      <div class="flex justify-between lg:border-none border-b border-gray-100">
        <div class="relative lg:flex hidden lg:max-w-[456px] w-full">
          <label for="search-filter" class="absolute top-3 left-[18px]">
            <i class="ph ph-magnifying-glass text-2xl leading-6"></i>
          </label>
          <input
            type="text"
            placeholder="Search for anything..."
            id="search-filter"
            @focus="isFocused = true"
            @blur="isFocused = false"
            class="py-3 pl-[54px] max-w-[456px] w-full block focus:outline-none"
          />
        </div>
        <div
          class="relative lg:flex hidden items-center lg:max-w-[312px] w-full border-r border-l border-gray-100 px-[18px]"
        >
          <i class="ph ph-tag text-2xl leading-6"></i>
          <select name="" id="" class="relative !w-full filter-select select2">
            <option value="">I want to buy</option>
            <option value="">I want to sell</option>
            <option value="">I want to exchange</option>
          </select>
        </div>
        <div class="relative lg:max-w-[272px] w-full rounded-lg">
          <label for="location-input" class="absolute top-3 left-[18px]">
            <x-bi-geo-alt class="w-6 h-6" />
          </label>
          <input
            type="text"
            placeholder="Location"
            id="location-input"
            @focus="isFocused = true"
            @blur="isFocused = false"
            class="py-3 pl-[54px] max-w-[456px] w-full block focus:outline-none rounded-lg"
          />
          <label
            for="location-input"
            class="absolute top-0 right-0 py-3 px-[18px] lg:border-none border-x border-gray-100"
          >
            <target-icon />
          </label>
        </div>
        <div class="flex gap-3 items-center">
          <a href="/map-browse-listing" class="inline-flex gap-2 items-center max-h-12 px-5 bg-transparent hover:bg-gray-50 transition-all duration-300 text-gray-900 text-base leading-[48px] lg:border-2 rounded-md border-gray-900">
            <i class="ph-bold ph-map-trifold text-2xl leading-6"></i>
            <span>Map</span>
          </a>
          <button
            class="lg:inline-flex hidden gap-2 text-white max-h-12 text-base leading-[48px] rounded-md items-center px-5 bg-primary-500 hover:bg-primary-700 transition-all duration-300"
          >
            <search-lg />
            <span>Search</span>
          </button>
        </div>
      </div>
      <div class="relative flex w-full border-b border-gray-100 lg:hidden">
        <label for="search-filter" class="absolute top-3 left-[18px]">
          <search-lg />
        </label>
        <input
          type="text"
          placeholder="Search for anything..."
          id="search-filter"
          class="py-3 pl-[54px] w-full block focus:outline-none"
        />
      </div>
      <div class="relative flex lg:hidden items-center w-full px-[18px]">
        <tag-icon />
        <Multiselect
          class="list-type"
          placeholder="Listing type"
          v-model="value"
          :options="options"
        />
      </div>
    </label>
    <div>
      <p
        class="lg:flex hidden gap-2 text-gray-900 text-sm font-medium scrollbar-hide overflow-x-auto"
      >
        Suggestion:
        <a
          href="#"
          class="text-gray-500 hover:text-primary-500 hover:underline whitespace-nowrap transition-all duration-300"
          >Mobile Phones,</a
        >
        <a
          href="#"
          class="text-gray-500 hover:text-primary-500 hover:underline whitespace-nowrap transition-all duration-300"
          >Accessories,</a
        >
        <a
          href="#"
          class="text-gray-500 hover:text-primary-500 hover:underline whitespace-nowrap transition-all duration-300"
          >Wearables,</a
        >
        <a
          href="#"
          class="text-gray-500 hover:text-primary-500 hover:underline whitespace-nowrap transition-all duration-300"
          >SIM Cards,</a
        >
        <a
          href="#"
          class="text-gray-500 hover:text-primary-500 hover:underline whitespace-nowrap transition-all duration-300"
          >Desktop Computers,</a
        >
        <a
          href="#"
          class="text-gray-500 hover:text-primary-500 hover:underline whitespace-nowrap transition-all duration-300"
          >Laptops,</a
        >
        <a
          href="#"
          class="text-gray-500 hover:text-primary-500 hover:underline whitespace-nowrap transition-all duration-300"
          >TVs,</a
        >
        <a
          href="#"
          class="text-gray-500 hover:text-primary-500 hover:underline whitespace-nowrap transition-all duration-300"
          >Photocopiers,</a
        >
        <a
          href="#"
          class="text-gray-500 hover:text-primary-500 hover:underline whitespace-nowrap transition-all duration-300"
          >Cars,</a
        >
        <a
          href="#"
          class="text-gray-500 hover:text-primary-500 hover:underline whitespace-nowrap transition-all duration-300"
          >Motorbikes,</a
        >
        <a
          href="#"
          class="text-gray-500 hover:text-primary-500 hover:underline whitespace-nowrap transition-all duration-300"
          >Bicycles,</a
        >
        <a
          href="#"
          class="text-gray-500 hover:text-primary-500 hover:underline whitespace-nowrap transition-all duration-300"
          >Three Wheelers,</a
        >
        <a
          href="#"
          class="text-gray-500 hover:text-primary-500 hover:underline whitespace-nowrap transition-all duration-300"
          >Trucks,</a
        >
        <a
          href="#"
          class="text-gray-500 hover:text-primary-500 hover:underline whitespace-nowrap transition-all duration-300"
          >Van,</a
        >
        <a
          href="#"
          class="text-gray-500 hover:text-primary-500 hover:underline whitespace-nowrap transition-all duration-300"
          >Garages,</a
        >
        <a
          href="#"
          class="text-gray-500 hover:text-primary-500 hover:underline whitespace-nowrap transition-all duration-300"
          >Doors,</a
        >
      </p>
    </div>
  </div>
