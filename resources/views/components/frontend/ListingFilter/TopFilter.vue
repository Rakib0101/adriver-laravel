<script>
  import FilterIcon from "../Icons/FilterIcon.vue";
  import SelectInput from "../CustomInput/SelectInput.vue";
  import GridIcon from "../Icons/GridIcon.vue";
  import ListIcon from "../Icons/ListIcon.vue";
  import CrossIcon from "../Icons/CrossIcon.vue";
  import Multiselect from '@vueform/multiselect';
  import '@vueform/multiselect/themes/default.css';

  export default {
    components: {
      FilterIcon,
      CrossIcon,
      SelectInput,
      GridIcon,
      ListIcon,
      Multiselect
    },
    data() {
      return {
        hide: null,
        activeFilters: [
          "Destop Computer",
          "Laptops",
          "Computer Accessories",
          "Latest/New",
          "Price: 4.8k to 8.9k USD",
        ],
        // tab: {
        //   gridIcon: true,
        //   listIcon: false,
        // },
        isGrid: false,
        value: null,
        options: [
          { value: 'go', label: 'Go' },
          { value: 'python', label: 'Python' },
          { value: 'rust', label: 'Rust' },
          { value: 'javascript', label: 'Javascript' },
        ]
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
      // toggleTab() {
      //   this.tab.gridIcon = !this.tab.gridIcon;
      //   this.tab.listIcon = !this.tab.listIcon;
      //   this.$emit("emitFunc", this.tab);
      // },
      toggleTab() {
        this.isGrid = !this.isGrid;
        // this.tab.listIcon = !this.tab.listIcon;
        this.$emit("emitFunc", this.isGrid);
      },
    },
  };
</script>
<template>
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
          <Multiselect placeholder="Sort by:" v-model="value" :options="options" />
        </div>
        <div
          class="border border-gray-100 p-1.5 max-h-12 lg:inline-flex hidden gap-1.5 justify-center items-center shadow-[0px_3px_14px_rgba(23,30,21,0.02)] rounded-md">
          <button class="p-2 rounded text-gray-400 hover:bg-gray-50 hover:text-gray-900"
            :class="{ 'bg-primary-500 text-white': isGrid }" @click="toggleTab()">
            <grid-icon />
          </button>
          <button class="p-2 rounded text-gray-400 hover:bg-gray-50 hover:text-gray-900"
            :class="{ 'bg-primary-500 text-white': !isGrid }" @click="toggleTab()">
            <list-icon />
          </button>
        </div>
      </div>
    </div>
    <div class="bg-gray-50 rounded-md px-[18px] py-3.5 mb-6">
      <p class="flex gap-3 items-center text-gray-900 text-sm font-medium overflow-x-auto">
        <span class="whitespace-nowrap"> Active Filters: </span>
        <span v-for="(item, index) in activeFilters" :key="index"
          class="active-filter text-gray-600 font-normal inline-flex gap-0.5 items-center"
          :class="`${index}` + ' ' + { hidden: hide }">
          <span class="whitespace-nowrap">{{ item }}</span>
          <cross-icon class="cursor-pointer" @click="hideEle(index)" />
        </span>
      </p>
    </div>
  </div>
</template>