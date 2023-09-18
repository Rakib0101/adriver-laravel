<template>
  <div>
    <div class="container">
      <div class="max-w-[872px] mx-auto pt-12 md:pb-[68px]">
        <div class="w-full md:max-w-[464px] mb-8">
          <h2
            class="text-3xl md:text-[40px] text-center md:text-start leading-[48px] mb-3 font-display font-semibold text-gray-900">
            Post Your Listing
          </h2>
          <p class="text-base text-gray-600 text-center md:text-start">
            Vestibulum lacinia urna eu fringilla venenatis. Quisque sed leo
            feugiat, imperdiet mi nec, elementum mi.
          </p>
        </div>
        <div class="sm:p-8 p-5 bg-gray-50 rounded-xl mb-6 listing-cat">
          <h3 class="mb-[18px] text-lg text-gray-900 font-display font-semibold">
            Listing Category
          </h3>
          <div class="flex flex-col md:flex-row mb-[18px] gap-[18px]">
            <div class="w-full">
              <label for="category" class="text-sm font-normal font-display mb-1.5 flex w-full">Category</label>
              <div>
                <Multiselect placeholder="Select a category" v-model="value4" :options="options2" />
              </div>
            </div>
            <div class="w-full">
              <label for="category" class="text-sm font-normal font-display mb-1.5 flex w-full">Sub Category</label>
              <div>
                <Multiselect placeholder="Select a sub category" v-model="value5" :options="options2" />
              </div>
            </div>
          </div>
          <div class="flex flex-col md:flex-row gap-[18px]">
            <div class="w-full">
              <label for="category" class="text-sm font-normal font-display mb-1.5 flex w-full">Brand</label>
              <div>
                <Multiselect placeholder="Select a brand" v-model="value6" :options="options2" />
              </div>
            </div>
            <div class="w-full">
              <label for="category" class="text-sm font-normal font-display mb-1.5 flex w-full">Model</label>
              <div>
                <input-field placeholder="Enter Model" v-model="value" type="text" :class="'!text-gray-500'" />
              </div>
            </div>
          </div>
        </div>

        <!-- Listing Type starts -->
        <div class="sm:p-8 p-5 bg-gray-50 rounded-xl mb-6">
          <h3 class="mb-[18px] text-lg text-gray-900 font-display font-semibold">
            Listing Type
          </h3>
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3">
            <label class="flex gap-2 items-start custom-checkbox h-[84px]">
              <input type="checkbox" checked id="forsell2" />
              <label for="forsell2"
                class="listing-type items-start border-2 border-transparent bg-transparent hover:bg-white py-3 px-4 rounded-lg w-[260px]">
                <div class="flex w-full flex-col ml-3">
                  <h2 class="text-gray-900 uppercase text-sm mb-1.5 leading-[100%] font-display font-semibold">
                    For Sell
                  </h2>
                  <p class="font-display text-xs text-gray-500">
                    Do you want to sell your posted product to sellers?
                  </p>
                </div>
              </label>
            </label>
            <div class="flex gap-2 items-start custom-checkbox h-[84px]">
              <input type="checkbox" id="forbuy2" />
              <label for="forbuy2"
                class="listing-type items-start border-2 border-transparent bg-transparent hover:bg-white py-3 px-4 rounded-lg w-[260px]">
                <div class="flex w-full flex-col ml-3">
                  <h2 class="text-gray-900 uppercase text-sm mb-1.5 leading-[100%] font-display font-semibold">
                    want to buy
                  </h2>
                  <p class="font-display text-xs text-gray-500">
                    Do you want to buy your posted products from buyers?
                  </p>
                </div>
              </label>
            </div>
            <div class="flex gap-2 items-start custom-checkbox">
              <input type="checkbox" id="forexchange2" />
              <label for="forexchange2"
                class="listing-type border-2 border-transparent bg-transparent hover:bg-white py-3 px-4 rounded-lg w-[260px]">
                <div class="flex w-full flex-col ml-3">
                  <h2 class="text-gray-900 uppercase text-sm mb-1.5 leading-[100%] font-display font-semibold">
                    Want to exchange
                  </h2>
                  <p class="font-display text-xs text-gray-500">
                    Do you want to exchange your posted products buyers and
                    sellers?
                  </p>
                </div>
              </label>
            </div>
          </div>
        </div>
        <!-- Listing Type end -->

        <div class="p-8 bg-gray-50 rounded-lg mb-6">
          <h3 class="text-lg font-display font-semibold text-gray-900 mb-2">
            Listing Location
          </h3>
          <p class="text-sm text-gray-600 mb-[18px]">
            Click on the map location to set your location.
          </p>
          <div class="overflow-hidden w-full h-[312px] rounded-md">
            <setting-map />
          </div>
        </div>
        <div class="pt-8 pb-0 border-t border-gray-100">
          <div class="flex gap-y-6 flex-row justify-between items-center">
            <secondary-button>
              <info-circle />
              <span>Posting Guide</span>
            </secondary-button>
            <primary-button @click="$emit('completePayStepOne')">
              <span>Next step</span>
              <button-arrow />
            </primary-button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script setup>
import CustomSelect from "../../CustomInput/CustomSelect.vue";
import Multiselect from "@vueform/multiselect";
import "@vueform/multiselect/themes/default.css";
import SettingMap from "../../Map/SettingMap.vue";
import PrimaryButton from "../../Button/PrimaryButton.vue";
import SecondaryButton from "../../Button/SecondaryButton.vue";
import ButtonArrow from "../../Icons/ButtonArrow.vue";
import InfoCircle from "../../Icons/Button/InfoCircle.vue";
import InputField from "../../CustomInput/InputField.vue";
import { ref } from "vue";

const value = ref(null);
const value4 = ref(null);
const value5 = ref(null);
const value6 = ref(null);
const options2 = [
  { value: "option1", label: "Option 1" },
  { value: "option2", label: "Option 2" },
  { value: "option3", label: "Option 3" },
];
</script>
<style>
label.listing-type {
  align-items: start !important;
  gap: 0px;
}

.listing-cat .multiselect-placeholder {
  color: #636a60;
}

.custom-checkbox input:checked+.listing-type {
  background: white;
  box-shadow: 0px 8px 18px rgba(23, 30, 21, 0.05);
  border-radius: 8px;
}
</style>
