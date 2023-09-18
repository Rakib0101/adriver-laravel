<template>
  <div class="max-w-[872px] overflow-hidden border border-gray-100 mt-24 mx-auto rounded-xl">
    <div class="p-8">
      <div class="flex flex-wrap lg:flex-nowrap items-center gap-4">
        <CongratulationsIcon />
        <div class="w-full">
          <h3 class="text-lg text-gray-900 mb-2 font-display font-semibold">Congratulation, Your Listing Successful
            Publish</h3>
          <p class="max-w-[384px] w-full text-sm text-gray-500">Phasellus faucibus arcu consectetur ligula maximus
            ullamcorper. Donec sollicitudin pulvinar ante.</p>
        </div>
        <div class="inline-flex">
          <button
            class="inline-flex whitespace-nowrap text-ellipsis font-display font-semibold text-[15px] justify-center items-center h-12 border-2 border-gray-900 rounded-md px-5">View
            Listing Detail</button>
        </div>
      </div>
    </div>
    <div class="w-full xl:w-[872px] pt-8 px-8 pb-2  bg-gray-50">
      <div class="w-full max-w-[424px]">
        <h2 class="text-2xl text-gray-900 mb-2 font-display font-semibold w-full truncate">
          Listing Promotion
        </h2>
        <p class="w-full max-w-[424px] text-gray-500 font-display text-base mb-6">
          Morbi pellentesque lacus ipsum, ut tempus libero bibendum ut. Ut nec
          eros id velit malesuada dapibus vel.
        </p>
      </div>
      <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 mb-6 justify-center items-center gap-3.5">
        <div class="flex gap-2 items-center text-sm text-gray-600 custom-checkbox">
          <input type="checkbox" id="featureListing" />
          <label for="featureListing"
            class="promote-listing border-2 border-transparent bg-white py-3 px-4 rounded-lg w-[260px]">
            <div class="flex flex-col">
              <h2 class="text-gray-900 text-base font-display font-medium">
                Featured Listing
              </h2>
              <p class="font-display text-sm text-gray-500">
                3 listing remaining
              </p>
            </div>
          </label>
        </div>
        <div class="flex gap-2 items-center text-sm text-gray-600 custom-checkbox">
          <input type="checkbox" id="urgentListing" />
          <label for="urgentListing"
            class="promote-listing border-2 border-transparent bg-white py-3 px-4 rounded-lg w-[260px]">
            <div class="flex flex-col">
              <h2 class="text-gray-900 text-base font-display font-medium">
                Urgents Listing
              </h2>
              <p class="font-display text-sm text-gray-500">
                2 listing remaining
              </p>
            </div>
          </label>
        </div>
        <div class="flex gap-2 items-center text-sm text-gray-600 custom-checkbox">
          <input type="checkbox" id="topListing" disabled />
          <label for="topListing"
            class="promote-listing py-3 px-4 rounded-lg w-[260px] bg-transparent border-2 border-dashed border-gray-100">
            <div class="flex flex-col">
              <h2 class="text-gray-900 text-base font-display font-medium">
                Top Listing
              </h2>
              <p class="font-display inline-flex gap-[5px] items-center text-sm text-gray-500">
                <span>No top listing</span>
                <span>•</span>
                <a href="#" class="text-blue-500">Upgrade Plan</a>
              </p>
            </div>
          </label>
        </div>
      </div>
      <div>
        <PrimaryButton @click="$emit('completeAllStep')">
          <span>Promote Listing</span>
          <ButtonArrow />
        </PrimaryButton>
      </div>
    </div>
  </div>
</template>
<script setup>
import PrimaryButton from "../../Button/PrimaryButton.vue";
import ButtonArrow from "../../Icons/ButtonArrow.vue";
import CongratulationsIcon from "../../Icons/CongratulationsIcon.vue";
</script>
