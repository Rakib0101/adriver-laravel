<template>
  <div class="w-full max-w-[872px] bg-white rounded-lg border mx-auto p-8 z-50 fixed top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
    <div class="flex justify-between items-center mb-6">
      <h2 class="text-2xl font-semibold font-display text-gray-900">
        Write A Review
      </h2>
      <button class="p-3 rounded-full bg-gray-50" @click="$emit('close')">
        <svg
          width="24"
          height="24"
          viewBox="0 0 24 24"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M17 7L7 17M7 7L17 17"
            stroke="#171E15"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
          />
        </svg>
      </button>
    </div>
    <div class="mb-6">
      <h3 class="text-sm text-gray-900 font-display mb-1.5">Choose Rating</h3>
      <vue3starRatings
        class="star-rating"
        :showControl="false"
        starColor="#E8903B"
        inactiveColor="#DEE6DC"
        :rating="rating"
        :increment="0.5"
        :star-size="24"
        :spacing="5"
        :read-only="false"
        :show-rating="false"
        @rating-selected="onRatingSelected"
      ></vue3starRatings>
    </div>
    <div class="mb-6">
      <label for="review" class="flex w-full mb-1.5 text-sm text-gray-900"
        >Write Yor Review</label
      >
      <textarea
        id="review"
        rows="4"
        v-model="review"
        class="flex w-full border border-gray-100 shadow-[0px_3px_14px_rgba(23,30,21,0.02)] rounded-md px-4 py-3"
      ></textarea>
    </div>
    <primary-button @click="submitReview">
      <span>Publish Review</span>
      <span><button-arrow /></span>
    </primary-button>
  </div>
  <div class="overlary fixed top-0 left-0 w-full h-full bg-[#171E15]/70 z-40" @click="$emit('close')"></div>
</template>

<script>
import vue3starRatings from "vue3-star-ratings";
import PrimaryButton from "../Button/PrimaryButton.vue";
import ButtonArrow from "../Icons/ButtonArrow.vue";

export default {
  components: {
    vue3starRatings,
    PrimaryButton,
    ButtonArrow,
  },
  data() {
    return {
      rating: 3.5,
      review: "",
    };
  },
  methods: {
    onRatingSelected(r) {
      console.log(r)
      this.rating = r;
    },
    submitReview() {
      // handle the review and rating submission
      console.log("Review:", this.review);
      console.log("Rating:", this.rating);
    },
  },
};
</script>

<style>
.star-rating {
  padding: 0px !important;
  margin: 0px !important;
}
.star-rating .stars {
  margin: 0px !important;
}
.star-rating .stars svg {
  margin-right: 6px;
}
.star-rating .stars svg:hover {
  color: #e8903b;
}
</style>
