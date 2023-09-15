<template>
  <div class="ll-select" ref="select">
    <select v-model="selectedOption" @click="toggleOptions" :class="showOptions ? 'open' : 'close'">
      <option :value="null" disabled hidden>{{placeholder}}</option>
      <option v-for="(option, index) in options" :key="index" :value="option.value">{{ option.label }}</option>
    </select>
    <div class="arrow-icon" :class="showOptions ? 'open' : 'close'">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#7A8178" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <path d="M6 9L12 15L18 9"></path>
      </svg>
    </div>
    <div class="options-container" v-show="showOptions">
      <ul class="options">
        <li v-for="(option, index) in options" :key="index" @click="selectOption(option.value)">
          {{ option.label }}
        </li>
      </ul>
    </div>
  </div>
</template>

<script>
export default {
  props:{
    placeholder: { type: String, default: 'Select an option'},
    options: { type: Array, default: []}
  },
  data() {
    return {
      selectedOption: null,
      showOptions: false,
    };
  },
  computed: {
    selectedOptionLabel() {
      const selected = this.options.find(option => option.value === this.selectedOption);
      return selected ? selected.label : 'Select an option';
    }
  },
  methods: {
    toggleOptions() {
      this.showOptions = !this.showOptions;
    },
    selectOption(value) {
      this.selectedOption = value;
      this.showOptions = false;
    },
    outsideClickHandler(event) {
      if (!this.$refs.select.contains(event.target)) {
        this.showOptions= false;
      }
    }
  },
  mounted() {
    document.addEventListener('click', this.outsideClickHandler);
  },
  beforeUnmount() {
    document.removeEventListener('click', this.outsideClickHandler);
  }
};
</script>

<style>
.ll-select {
  position: relative;
  width: 100%;
}

.ll-select select {
  appearance: none;
  background: #FFFFFF;
  border: 1px solid #DEE6DC;
  box-shadow: 0px 3px 14px rgba(23, 30, 21, 0.02);
  border-radius: 6px;
  font-size: 16px;
  padding: 12px 18px;
  width: 100%;
  cursor: pointer;
}
.ll-select select.open{
    border-bottom: none;
    border-radius: 6px 6px 0px 0px;
}
.ll-select select option{
    display: none;
}
.ll-select select:focus {
  outline: none;
}

.ll-select .options-container {
  position: absolute;
  top: 100%;
  left: 0;
  right: 0;
  z-index: 999;
}

.ll-select .options {
  list-style: none;
  margin: 0;
  padding: 0;
  background: #fff;
  border: 1px solid #ccc;
  max-height: 200px;
  overflow-y: auto;
  position: relative;
  z-index: 999;
}

.ll-select .options li {
  padding: 8px 18px;
  font-family: 'IBM Plex Sans';
  font-style: normal;
  font-weight: 400;
  font-size: 16px;
  line-height: 24px;
  color: #171E15;
  cursor: pointer;
  transition: background-color 0.2s ease;
}

.ll-select .options li:hover {
  background-color: #F3F5F2;
}
.ll-select .arrow-icon {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  right: 1em;
  display: inline-flex;
  z-index: 99;
}
.ll-select .arrow-icon.open{
    transform: translateY(-50%) rotate(180deg);
}
</style>


