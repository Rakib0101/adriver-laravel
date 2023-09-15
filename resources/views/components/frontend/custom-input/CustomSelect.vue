<script>
import CustomCheckbox from "../CustomInput/CustomCheckbox.vue";
export default {
  components: {
    CustomCheckbox,
  },
  props: {
    options: {
      type: Array,
      required: true,
    },
    title: {
      type: String,
      required: false,
      default: null,
    },
    tabindex: {
      type: Number,
      required: false,
      default: 0,
    },
  },
  data() {
    return {
      open: false,
    };
  },
  mounted() {
    this.$emit("input", this.selected);
  },
};
</script>
<template>
  <div class="custom-select" :tabindex="tabindex">
    <div class="selected" :class="{ open: open }" @click="open = !open">
      {{ title }} <span class="count"><slot name="count"></slot></span>
    </div>
    <ul
      class="bg-white transform transition-transform duration-300"
      :class="
        open ? 'visible h-auto translate-y-0' : 'invisible h-0 -translate-y-4'
      "
    >
      <li class="px-8 py-3" v-for="(option, i) of options" :key="i">
        <CustomCheckbox :id="option" :value="option" :label="option" />
      </li>
    </ul>
  </div>
</template>

<style>
.custom-select {
  position: relative;
  width: 200px;
  text-align: left;
  outline: none;
  line-height: 47px;
  font-family: "IBM Plex Sans", sans-serif;
}

@media (max-width: 425px) {
  .custom-select {
    width: 150px;
  }
}
.custom-select .selected {
  border: 1px solid #dee6dc;
  box-shadow: 0px 3px 14px rgba(23, 30, 21, 0.02);
  border-radius: 6px;
  font-family: "IBM Plex Sans", sans-serif;
  font-style: normal;
  font-weight: 400;
  font-size: 16px;
  line-height: 24px;
  color: #636a60;
  padding: 11px 17px;
  cursor: pointer;
  user-select: none;
}

.custom-select .selected.open {
  border: 1px solid #dee6dc;
  border-radius: 6px 6px 0px 0px;
}

.custom-select .selected:after {
  position: absolute;
  content: url("data:image/svg+xml,%3Csvg width='16' height='16' viewBox='0 0 16 16' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M4 6L8 10L12 6' stroke='%237A8178' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round'/%3E%3C/svg%3E%0A");
  top: 15px;
  right: 1em;
  display: inline-flex;
}

.custom-select .selected.open:after {
  transform: rotate(180deg);
  top: 8px;
}

.custom-select .count {
  background: #f3f5f2;
  border-radius: 3px;
  font-style: normal;
  font-weight: 500;
  font-size: 12px;
  line-height: 16px;
  color: #58b32b;
  padding: 1.5px 5px;
}

.custom-select .items {
  color: #fff;
  border-radius: 0px 0px 6px 6px;
  overflow: hidden;
  border-right: 1px solid #dee6dc;
  border-left: 1px solid #dee6dc;
  border-bottom: 1px solid #dee6dc;
  position: absolute;
  background: white;
  left: 0;
  right: 0;
  z-index: 1;
  padding-left: 32px;
}

.custom-select .items div {
  color: #636a60;
  padding-left: 1em;
  cursor: pointer;
  user-select: none;
  font-family: "IBM Plex Sans", sans-serif;
}

.custom-select .items div:hover {
  color: #171e15;
}

.selectHide {
  display: none;
}
.custom-select.listingType {
  width: 100% !important;
  background: transparent;
  font-family: "IBM Plex Sans";
}
.custom-select.listingType .selected {
  border: none !important;
  box-shadow: none !important;
}

.custom-select.categorySelect {
  width: 100% !important;
  transition: all 0.5s ease;
}
.custom-select.categorySelect .selected {
  background: transparent;
  border: none;
  box-shadow: none;
  display: flex;
  gap: 6px;
  align-items: center;
  font-family: "IBM Plex Sans", sans-serif !important;
}

.custom-select.categorySelect:hover {
  background: #58b32b;
}
.custom-select.categorySelect:hover .selected {
  color: white;
  font-family: "IBM Plex Sans" !important;
}
.custom-select.categorySelect:hover .selected::after {
  content: url("data:image/svg+xml,%3Csvg width='16' height='16' viewBox='0 0 16 16' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M12 10L8 6L4 10' stroke='white' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round'/%3E%3C/svg%3E%0A");
  transform: rotate(0deg);
  top: 12px;
}
</style>
