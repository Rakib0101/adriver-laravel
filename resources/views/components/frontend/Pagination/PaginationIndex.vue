<script>
import PaginationLeft from "../Icons/PaginationLeft.vue";
import PaginationRight from "../Icons/PaginationRight.vue";
import PaginationNumber from "./PaginationNumber.vue";
export default {
  components: {
    PaginationLeft,
    PaginationNumber,
    PaginationRight,
  },
};
</script>
<template>
  <div
    class="pagination pt-6 flex justify-center gap-3 items-center overflow-x-auto scrollbar-hide"
  >
    <button
      class="pagination-left-arrow cursor-pointer max-h-12 max-w-12 hover:bg-primary-50 inline-flex justify-center items-center p-2.5 rounded-md border-2 border-primary-500 hover:border-primary-700 text-primary-500 hover:text-primary-700 transition-all duration-300"
    >
      <pagination-left />
    </button>
    <div class="pagination-number flex gap-3 items-center justify-center">
      <pagination-number v-for="item of 9" :key="item" class="hidden md:block">
        {{ item }}
      </pagination-number>
      <pagination-number v-for="item of 3" :key="item" class="block md:hidden">
        {{ item }}
      </pagination-number>
    </div>
    <button
      class="pagination-left-arrow cursor-pointer max-h-12 max-w-12 hover:bg-primary-50 inline-flex justify-center items-center p-2.5 rounded-md border-2 border-primary-500 hover:border-primary-700 text-primary-500 hover:text-primary-700 transition-all duration-300"
    >
      <pagination-right />
    </button>
  </div>
</template>
