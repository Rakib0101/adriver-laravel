<template>
  <div>
    <div
      ref="modal"
      class="fixed left-0 top-0 bottom-0 z-[99999] w-full transition-all duration-300 max-w-[376px] bg-white p-8" :class="visible ? 'translate-x-0 opacity-1': 'translate-x-[-400px] opacity-0'"
    >
    <h2 class="mb-5 text-2xl text-gray-900 font-medium font-display">Filters</h2>
    <SidebarView />
    <div class="px-6 py-5 absolute bottom-0 left-0 right-0 bg-white border-t border-gray-100 shadow-[0px_-8px_24px_0px_rgba(23,30,21,0.06)]">
      <div class="flex justify-between items-center">
        <secondary-button>Clear Filter</secondary-button>
        <primary-button>Save Change</primary-button>
      </div>
    </div>
    </div>
    <div class="filter-overlay" v-if="visible" @click.self="$emit('close')"></div>
  </div>
</template>

<script>
import SidebarView from "../Sidebar/SidebarView.vue";
import PrimaryButton from "../Button/PrimaryButton.vue";
import SecondaryButton from "../Button/SecondaryButton.vue";

export default {
  components: {
    SidebarView,
    PrimaryButton,
    SecondaryButton
  },
  props: {
    visible: {
      type: Boolean,
      default: false,
    },
  },
  watch: {
    visible: {
      deep: true,
      handler(val, oldVal) {
        if (val == true) {
          document.body.style.setProperty('overflow', 'hidden', 'important');
        } else {
          document.body.style.setProperty('overflow', 'unset', 'important');
        }
      },
    },
  }
};
</script>

<style>
.filter-overlay {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5);
  display: flex;
  justify-content: flex-start;
  align-items: flex-start;
  z-index: 9999;
}
.dashed-bg:before,
.dashed-bg:after {
  background-image: repeating-linear-gradient(
    90deg,
    transparent,
    transparent 5px,
    #dee6dc 5px,
    #dee6dc 10px
  );
}
</style>
