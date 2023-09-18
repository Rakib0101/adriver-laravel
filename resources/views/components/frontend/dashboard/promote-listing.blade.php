
  <div class="max-w-[872px] z-[100] mx-auto p-8 bg-gray-50 rounded-xl fixed top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2">
    <h2
      class="text-2xl text-gray-900 mb-2 font-display font-normal w-full truncate"
    >
      <strong>Listing Promotion -</strong> Portable Wshing Machine, 11lbs
      capacity Model 18NMFIAM
    </h2>
    <p class="w-full max-w-[424px] text-gray-500 font-display text-base mb-6">
      Morbi pellentesque lacus ipsum, ut tempus libero bibendum ut. Ut nec eros
      id velit malesuada dapibus vel.
    </p>
    <div class="flex flex-wrap mb-6 justify-center items-center gap-3.5">
      <div
        class="flex gap-2 items-center text-sm text-gray-600 custom-checkbox"
      >
        <input type="checkbox" id="featureListing" />
        <label for="featureListing" class="promote-listing border-2 border-transparent bg-white py-3 px-4 rounded-lg w-[260px]">
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
      <div
        class="flex gap-2 items-center text-sm text-gray-600 custom-checkbox"
      >
        <input type="checkbox" id="urgentListing" />
        <label for="urgentListing" class="promote-listing border-2 border-transparent bg-white py-3 px-4 rounded-lg w-[260px]">
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
      <div
        class="flex gap-2 items-center text-sm text-gray-600 custom-checkbox"
      >
        <input type="checkbox" id="topListing" disabled />
        <label
          for="topListing"
          class="promote-listing py-3 px-4 rounded-lg w-[260px] bg-transparent border-2 border-dashed border-gray-100"
        >
          <div class="flex flex-col">
            <h2 class="text-gray-900 text-base font-display font-medium">
              Top Listing
            </h2>
            <p
              class="font-display inline-flex gap-[5px] items-center text-sm text-gray-500"
            >
              <span>No top listing</span>
              <span>•</span>
              <a href="#" class="text-blue-500">Upgrade Plan</a>
            </p>
          </div>
        </label>
      </div>
    </div>
    <div>
        <PrimaryButton>
            <span>Promote Listing</span>
            <ButtonArrow />
        </PrimaryButton>
    </div>
  </div>
  <div class="fixed z-[90] top-0 left-0 w-full h-full bg-[rgba(23,30,21,0.8)]" @click="overlayClick"></div>

{{-- <script>
import PrimaryButton from '../Button/PrimaryButton.vue';
import ButtonArrow from '../Icons/ButtonArrow.vue';

export default{
    components:{
      ButtonArrow,
      PrimaryButton
    },
    methods:{
      overlayClick(){
        this.$emit('checkClick', true);
      }
    }
}
</script> --}}

<style>
.custom-checkbox input:checked+.promote-listing{
    border: 2px solid #58B32B;
}
</style>
