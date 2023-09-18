@extends('frontend.layouts.master')

@section('content')
    <div x-data="data">
        <div class="flex justify-between items-start">
            <div class="w-full px-8 max-w-[1016px]">
                <x-frontend.filter.search-filter />
                <div>
                    <div class="flex justify-between items-center mb-6">
                        <div>
                            <button type="button" x-on:click="openModal = !openModal"
                                class="inline-flex gap-2 max-h-12 items-center text-gray-500 hover:text-gray-700 font-display px-5 border-2 border-transparent hover:border-gray-700 rounded-md hover:bg-gray-50 transition-all duration-300">
                                <span class="text-base hidden md:inline-flex leading-[48px] font-semibold uppercase">filters</span>
                                <span class="text-base md:hidden inline-flex leading-[48px] font-semibold uppercase">filter</span>
                                <span class="py-[3px] text-xs leading-[100%] font-medium px-1.5 bg-gray-500 text-white inline-flex rounded-full">3</span>
                            </button>
                        </div>
                        <div class="flex gap-4">
                            <div class="w-[200px]">
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
                                    <cross-icon class="cursor-pointer" @click="hideEle(index)" />
                                </span>
                            </template>
                        </p>
                    </div>
                </div>
                <div class="flex justify-center flex-wrap gap-6 mb-6" x-show="isList">
                    <template x-for="item in 12" :key="item">
                            <x-frontend.listing-card.list-view class="mx-auto" />
                        </template>
                </div>
                <div class="grid place-items-center 2xl:grid-cols-3 md:grid-cols-3 grid-cols-1 gap-6 mb-6" x-show="isGrid">
                    <template x-for="item in 12" :key="item">
                        <x-frontend.listing-card.grid-view />
                    </template>
                </div>
                <div>
                    <x-frontend.pagination.pagination-view />
                </div>
            </div>
            <div class="w-full max-w-[836px] h-[888px]">
                <x-frontend.map.setting-map />
            </div>
            <x-frontend.modal.filter-modal />
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('data', () => ({
                isGrid: false,
                isList: true,
                hide: null,
                activeFilters: [
                    "Destop Computer",
                    "Laptops",
                    "Computer Accessories",
                    "Latest/New",
                    "Price: 4.8k to 8.9k USD",
                ],
                openModal : false,
                hideEle(i) {
                    var newActiveFilters = this.activeFilters;
                    newActiveFilters.forEach((item, index) => {
                        if (index === i) {
                            newActiveFilters.splice(index, 1);
                        }
                    });

                    this.activeFilters = newActiveFilters;
                },
            }))
        })
    </script>
@endsection


{{-- <script>
import HeaderComponent from "../components/Header/HeaderComponent.vue";
import BreadcrumbComponent from "../components/Breadcrumb/BreadcrumbView.vue";
import TopFilter from "../components/ListingFilter/TopFilter.vue";
import MainFilter from "../components/ListingFilter/MainFilter.vue";
import ListView from "../components/ListingCard/ListView.vue";
import GridView from "../components/ListingCard/GridView.vue";
import SidebarView from "../components/Sidebar/SidebarView.vue";
import PaginationView from "../components/Pagination/PaginationIndex.vue";
import FooterComponent from "../components/FooterComponent.vue";
import CustomMap from "../components/Map/SettingMap.vue";
import FilterIcon from "../components/Icons/FilterIcon.vue";
import Multiselect from "@vueform/multiselect";
import "@vueform/multiselect/themes/default.css";
import { ref } from "vue";
import GridIcon from "../components/Icons/GridIcon.vue";
import ListIcon from "../components/Icons/ListIcon.vue";
import CrossIcon from "../components/Icons/CrossIcon.vue";
import BreadcrumbArrow from "../components/Icons/BreadcrumbArrow.vue";
import FilterModal from "../components/Modal/FilterModal.vue";

export default {
  components: {
    HeaderComponent,
    BreadcrumbComponent,
    MainFilter,
    TopFilter,
    SidebarView,
    ListView,
    GridView,
    PaginationView,
    FooterComponent,
    CustomMap,
    FilterIcon,
    CrossIcon,
    GridIcon,
    ListIcon,
    BreadcrumbArrow,
    FilterModal,
    Multiselect,
  },
  data() {
    return {
      gridView: true,
      listView: false,
      hide: null,
      activeFilters: [
        "Destop Computer",
        "Laptops",
        "Computer Accessories",
        "Latest/New",
        "Price: 4.8k to 8.9k USD",
      ],
      tab: {
        gridIcon: true,
        listIcon: false,
      },
      value: null,
      options: [
        { value: "go", label: "Go" },
        { value: "python", label: "Python" },
        { value: "rust", label: "Rust" },
        { value: "javascript", label: "Javascript" },
      ],
      filterModal: false,
    };
  },
  methods: {
    hideEle(i) {
      var newActiveFilters = this.activeFilters;
      newActiveFilters.forEach((item, index) => {
        if (index === i) {
          newActiveFilters.splice(index, 1);
        }
      });

      this.activeFilters = newActiveFilters;
    },
    toggleTab() {
      this.tab.gridIcon = !this.tab.gridIcon;
      this.tab.listIcon = !this.tab.listIcon;
      this.gridView = !this.gridView;
      this.listView = !this.listView;
    },
  },
};
</script> --}}
