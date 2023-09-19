@props(['isUserOwn' => false])
  <div class="sm:max-w-[312px] w-full mt-24 border border-gray-100 rounded-lg shadow-[0px_8px_24px_rgba(23,30,21,0.04)]">
    <div class="px-8 border-b border-gray-100">
      <div class="w-[172px] h-[172px] rounded-full mx-auto -mt-[86px] mb-6">
        <img src="{{ asset('frontend/assets/images/img/seller-profile.png') }}" alt="" class="w-full h-full object-cover" />
      </div>
      <h2 class="flex items-center gap-2 mb-1.5 justify-center text-gray-900 text-2xl font-display font-semibold">
        Rnix point <div class="tooltip"><blue-badge /> <span class="tooltiptext">Profile is verfied by adriver</span></div>
      </h2>
      <p class="flex gap-1.5 justify-center mb-1.5 items-center text-gray-900 text-sm font-semibold font-display">
        <icon-star /> 4.8 Star Rating
        <span class="text-gray-500">(7 Reviews)</span>
      </p>
      <p class="text-gray-500 mb-1.5 text-center text-base font-display">
        Member since October, 2021
      </p>
      <div class="flex justify-center mb-8">
        <div class="bg-primary-50 rounded inline-flex items-center gap-1 py-1 px-3 font-display">
          <file-check />
          <span class="text-base font-semibold text-gray-900">34</span>
          <span class="text-sm text-gray-700"> Total Sold</span>
        </div>
      </div>
    </div>
    <div class="p-8 border-b border-gray-100">
      <p class="flex mb-4 items-center text-2xl text-warning-500 font-semibold font-display">
        <span><star-large /></span>
        <span><star-large /></span>
        <span><star-large /></span>
        <span><star-large /></span>
        <span><star-half /></span>
        <span> 4.8</span>
      </p>
      <ul class="flex mb-6 flex-col gap-4">
        <li>
          <p class="text-sm text-gray-900 font-medium mb-1.5 font-display">
            5 Star (6)
          </p>
          <div class="bg-gray-100 h-1.5 rounded-full relative">
            <span
              class="bg-warning-500 rounded-full absolute top-0 left-0 h-full w-[80%]"
            ></span>
          </div>
        </li>
        <li>
          <p class="text-sm text-gray-900 font-medium mb-1.5 font-display">
            4 Star (1)
          </p>
          <div class="bg-gray-100 h-1.5 rounded-full relative">
            <span
              class="bg-warning-500 rounded-full absolute top-0 left-0 h-full w-[20%]"
            ></span>
          </div>
        </li>
        <li>
          <p class="text-sm text-gray-900 font-medium mb-1.5 font-display">
            3 Star (0)
          </p>
          <div class="bg-gray-100 h-1.5 rounded-full relative">
            <span
              class="bg-warning-500 rounded-full absolute top-0 left-0 h-full w-0"
            ></span>
          </div>
        </li>
        <li>
          <p class="text-sm text-gray-900 font-medium mb-1.5 font-display">
            2 Star (0)
          </p>
          <div class="bg-gray-100 h-1.5 rounded-full relative">
            <span
              class="bg-warning-500 rounded-full absolute top-0 left-0 h-full w-0"
            ></span>
          </div>
        </li>
        <li>
          <p class="text-sm text-gray-900 font-medium mb-1.5 font-display">
            1 Star (0)
          </p>
          <div class="bg-gray-100 h-1.5 rounded-full relative">
            <span
              class="bg-warning-500 rounded-full absolute top-0 left-0 h-full w-0"
            ></span>
          </div>
        </li>
      </ul>
      <div x-cloak x-show="!isUserOwn">
        <button
        @click="isWriteReview = !isWriteReview"
          class="text-base bg-warning-500 px-5 rounded-md leading-[48px] text-white font-semibold font-display"
        >
          Write A Review
        </button>
        <WriteReview v-if="isWriteReview" @close="isWriteReview = false"/>
      </div>
    </div>
    <div class="p-8">
      <ul class="flex flex-col gap-4 mb-8">
        <li class="flex gap-2 text-sm text-blue-500 font-display">
          <span><globe-large /></span>
          <a href="#" class="text-sm">www.rnixpoint.com</a>
        </li>
        <li class="flex gap-2 text-sm text-gray-900 font-display">
          <span><phone-icon /></span>
          <span>+91-855-539-3929</span>
        </li>
        <li class="flex gap-2 text-sm text-gray-900 font-display">
          <span><email-icon /></span>
          <span>Rnixpoint@hotmail.com</span>
        </li>
        <li class="flex gap-2 text-sm text-gray-900 font-display">
          <span><marker-pin /></span>
          <span
            >2, Ram Smruti, Kishan Nagar 3, Thane (west), Maharashtra, Mumbai
            400604, India</span
          >
        </li>
      </ul>
      <button
        class="inline-flex max-h-12 hover:bg-gray-50 hover:border-gray-900 text-[15px] transition-all duration-300 px-5 border-2 border-gray-100 rounded-md gap-2 items-center cursor-pointer font-display uppercase text-base leading-[48px] font-semibold text-gray-900 select-none">
        <span>Edit Info</span>
      </button>
    </div>
  </div>
</template>

<script>
import SellerProfile from "../../assets/images/img/seller-profile.png";
import BlueBadge from "../Icons/BlueBadge.vue";
import IconStar from "../Icons/IconStar.vue";
import FileCheck from "../Icons/FileCheck.vue";
import GlobeLarge from "../Icons/GlobeLarge.vue";
import MarkerPin from "../Icons/MarkerPin.vue";
import EmailIcon from "../Icons/EmailIcon.vue";
import PhoneIcon from "../Icons/PhoneIcon.vue";
import StarLarge from "../Icons/StarLarge.vue";
import StarHalf from "../Icons/StarHalf.vue";
import WriteReview from "./WriteReview.vue"

export default {
  components: {
    BlueBadge,
    IconStar,
    FileCheck,
    GlobeLarge,
    MarkerPin,
    EmailIcon,
    PhoneIcon,
    StarLarge,
    StarHalf,
    WriteReview
  },
  data() {
    return {
      SellerProfile: SellerProfile,
      isSeller: false,
      isWriteReview: false,
    };
  },
};
</script>
<style>
    .tooltip {
  position: relative;
  display: inline-block;
}

.tooltip .tooltiptext {
  visibility: hidden;
  width: 200px;
  background-color: #000;
  color: #fff;
  text-align: center;
  border-radius: 4px;
  padding: 6px 8px;
  position: absolute;
  z-index: 1;
  bottom: 125%; /* Position above the element */
  left: 50%;
  font-size: 14px;
  line-height: 125%;
  transform: translateX(-50%);
  opacity: 0;
  transition: opacity 0.3s, visibility 0.3s;
}

.tooltip:hover .tooltiptext {
  visibility: visible;
  opacity: 1;
}
</style>
