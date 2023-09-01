<template>
  <div class="container">
    <main-filter />
    <div class="grid grid-cols-4 gap-8">
      <sidebar-view />
      <div class="col-span-3">
        <top-filter />
        <pagination-index />
      </div>
    </div>
  </div>
</template>

<script setup>
import PaginationIndex from "./Pagination/PaginationIndex.vue";
import TopFilter from "./ListingFilter/TopFilter.vue";
import MainFilter from "./ListingFilter/MainFilter.vue";
import SidebarView from "./Sidebar/SidebarView.vue";
</script>

<style scoped>
.custom-select.categorySelect:hover .selected span {
  background: rgba(255, 255, 255, 0.24);
  color: white;
  font-family: "IBM Plex Sans";
}

.custom-select.categorySelect .selected span {
  padding: 1.5px 5px 2.5px !important;
  background: #f3f5f2;
  border-radius: 3px !important;
  font-weight: 500;
  font-size: 12px;
  line-height: 16px;
  color: #58b32b;
  font-family: "IBM Plex Sans";
}
</style>
