<div x-data="{ allActivity: false }">
    <div x-cloak x-show="allActivity">
        <x-frontend.dashboard.all-activity />
    </div>
  <div class="pt-12" x-cloak x-show="!allActivity">
    <div class="container">
      <h2 class="text-2xl text-gray-900 font-display font-semibold mb-6">
        Hey, Rnix point
      </h2>
      <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3 md:gap-6 lg:gap-6 mb-[26px]">
        <div class="flex items-center gap-3 p-6 rounded-xl bg-primary-50 border border-primary-100">
          <div>
            <active-listing />
          </div>
          <div>
            <h2 class="text-gray-900 text-2xl font-semibold font-display mb-1">
              19
            </h2>
            <p class="text-gray-600 text-sm font-display">Active Listing</p>
          </div>
        </div>
        <div class="flex items-center gap-3 p-6 rounded-xl bg-primary-50 border border-primary-100">
          <div>
            <total-listing />
          </div>
          <div>
            <h2 class="text-gray-900 text-2xl font-semibold font-display mb-1">
              172
            </h2>
            <p class="text-gray-600 text-sm font-display">Total Listing</p>
          </div>
        </div>
        <div class="flex items-center gap-3 p-6 rounded-xl bg-primary-50 border border-primary-100">
          <div>
            <total-favourite />
          </div>
          <div>
            <h2 class="text-gray-900 text-2xl font-semibold font-display mb-1">
              89
            </h2>
            <p class="text-gray-600 text-sm font-display">Favorites Listing</p>
          </div>
        </div>
        <div class="flex items-center gap-3 p-6 rounded-xl bg-primary-50 border border-primary-100">
          <div>
            <total-star />
          </div>
          <div>
            <h2 class="text-gray-900 text-2xl font-semibold font-display mb-1">
              4.8
            </h2>
            <p class="text-gray-600 text-sm font-display">Star Rating</p>
          </div>
        </div>
      </div>
      <div class="flex lg:flex-row flex-col gap-6 mb-6">
        <div
          class="border border-gray-100 shadow-[0px_8px_24px_rgba(23,30,21,0.04)] rounded-xl p-6 w-full max-w-[760px] h-[450px] overflow-x-auto scrollbar-hide">
          <h2 class="text-lg font-display font-semibold text-gray-900 mb-4">
            Profile Views
          </h2>
          <x-frontend.chart.profile-chart />
        </div>
        <div
          class="border border-gray-100 shadow-[0px_8px_24px_rgba(23,30,21,0.04)] rounded-xl pt-6 w-full max-w-[536px] md:max-h-[450px] scrollbar-hide">
          <div class="pb-3">
            <div class="flex justify-between items-center px-6">
              <h2 class="text-lg font-display font-semibold text-gray-900">
                Latest Activity
              </h2>
              <button @click="allActivity = !allActivity" class="inline-flex gap-1.5 items-center text-gray-500 text-base font-display font-semibold">
                <span>View All</span>
                <span><double-arrow /></span>
              </button>
            </div>
            <ul>
              <li class="px-6 py-3 flex gap-2 items-center hover:bg-gray-50 transition-all duration-300 cursor-pointer">
                <span class="w-8 h-8 rounded-full">
                  <img src="{{ asset('frontend/assets/images/img/avatar-1.png') }}" alt="" />
                </span>
                <p class="text-gray-600 font-display text-base">
                  You have 2 days. Pay your latest invoice.
                  <strong>Pay Now</strong>
                </p>
              </li>
              <li class="px-6 py-3 flex gap-2 items-center hover:bg-gray-50 transition-all duration-300 cursor-pointer">
                <span class="w-8 h-8 rounded-full">
                  <img src="{{ asset('frontend/assets/images/img/avatar-1.png') }}" alt="" />
                </span>
                <p class="text-gray-600 font-display text-base">
                  Your ad “v21 48mp ois slefie” is successful published.
                  <strong>View Ad</strong>
                </p>
              </li>
              <li class="px-6 py-3 flex gap-2 items-center hover:bg-gray-50 transition-all duration-300 cursor-pointer">
                <span class="w-8 h-8 rounded-full">
                  <img src="{{ asset('frontend/assets/images/img/avatar-1.png') }}" alt="" />
                </span>
                <p class="text-gray-600 font-display text-base">
                  John Wick saved your ad to his favourite collection.
                </p>
              </li>
              <li class="px-6 py-3 flex gap-2 items-center hover:bg-gray-50 transition-all duration-300 cursor-pointer">
                <span class="w-8 h-8 rounded-full">
                  <img src="{{ asset('frontend/assets/images/img/avatar-1.png') }}" alt="" />
                </span>
                <p class="text-gray-600 font-display text-base">
                  Please complete your profile editing to post a ads.
                </p>
              </li>
              <li class="px-6 py-3 flex gap-2 items-center hover:bg-gray-50 transition-all duration-300 cursor-pointer">
                <span class="w-8 h-8 rounded-full">
                  <img src="{{ asset('frontend/assets/images/img/avatar-1.png') }}" alt="" />
                </span>
                <p class="text-gray-600 font-display text-base">
                  Your ad “converse blue training shoes” is successful
                  published.
                  <strong>View ad</strong>
                </p>
              </li>
              <li class="px-6 py-3 flex gap-2 items-center hover:bg-gray-50 transition-all duration-300 cursor-pointer">
                <span class="w-8 h-8 rounded-full">
                  <img src="{{ asset('frontend/assets/images/img/avatar-1.png') }}" alt="" />
                </span>
                <p class="text-gray-600 font-display text-base">
                  Sir, 5 days remaining to complete your Adlisting membership
                  charge. <strong>Pay Now</strong>
                </p>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <x-frontend.dashboard.my-listing title="Active Listings" />
    </div>
  </div>
</div>

{{-- <script>
  import ActiveListing from "../Icons/Profile/ActiveListing.vue";
  import TotalListing from "../Icons/Profile/TotalListing.vue";
  import TotalFavourite from "../Icons/Profile/TotalFavourite.vue";
  import TotalStar from "../Icons/Profile/TotalStar.vue";
  import MyChart from "../Chart/MyChart.vue";
  import DoubleArrow from "../Icons/DoubleArrow.vue";
  import avatar from "../../assets/images/img/avatar-1.png";
  import ListingTable from "../Dashboard/MyListing.vue";
  import AllActivity from "../Dashboard/AllActivity.vue"
  export default {
    components: {
      ActiveListing,
      TotalListing,
      TotalFavourite,
      TotalStar,
      MyChart,
      DoubleArrow,
      ListingTable,
      AllActivity
    },
    data() {
      return {
        avatar: avatar,
        active01: active01,
        active02: active02,
        active03: active03,
        active04: active04,
        allActivity: false
      };
    },
  };
</script> --}}

<style>
  .my-chart svg {
    width: 100%;
    height: 100%;
  }

  .listing-table tbody tr:hover .dot {
    background: white;
    border: 1px solid #58b32b;
  }
</style>
