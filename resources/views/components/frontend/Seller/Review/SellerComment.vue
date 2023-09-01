<template>
  <div class="flex gap-4 py-6 border-b border-gray-100 items-start">
    <div class="min-w-12 max-w-12 min-h-12 max-h-12 rounded-full overflow-hidden">
      <img :src="SellerAvatar" alt="" class="h-full w-full object-cover" />
    </div>
    <div class="w-full">
      <div class="flex gap-2 items-center font-display mb-1">
        <span class="text-base text-gray-900 font-semibold">Darlene Robertson</span>
        <span class="text-sm text-gray-500">Time ago</span>
      </div>
      <p class="text text-warning-500 flex gap-1 items-center font-medium mb-2">
        <span><icon-star /></span>
        <span>5.0 Star Rating</span>
      </p>
      <p class="text-base font-display text-gray-900 mb-3">
        I had I was very good this day.
      </p>
      <slot name="reply"></slot>
    </div>
    <div class="relative inline-flex write-reply">
      <button
        class="bg-gray-50 hover:bg-transparent hover:shadow-[0px_4px_24px_rgba(121,194,85,0.2)] border border-transparent hover:border-primary-500 h-12 w-12 inline-flex justify-center items-center rounded-md">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z"
            stroke="#4D554B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
          <path
            d="M19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12C18 12.5523 18.4477 13 19 13Z"
            stroke="#4D554B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
          <path
            d="M5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12C4 12.5523 4.44772 13 5 13Z"
            stroke="#4D554B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
      </button>
      <button @click="isWriteReply = !isWriteReply"
        class="write-reply-btn absolute right-0 top-full py-2.5 px-[18px] rounded-md inline-flex gap-2 items-center shadow-[0px_12px_32px_rgba(23,30,21,0.08)] bg-white border border-gray-100">
        <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M10.125 11.25V6.25M7.625 8.75H12.625M5.95833 15V16.9463C5.95833 17.3903 5.95833 17.6123 6.04936 17.7263C6.12852 17.8255 6.24856 17.8832 6.37545 17.8831C6.52136 17.8829 6.69473 17.7442 7.04146 17.4668L9.02934 15.8765C9.43543 15.5517 9.63847 15.3892 9.86457 15.2737C10.0652 15.1712 10.2787 15.0963 10.4993 15.051C10.7481 15 11.0081 15 11.5281 15H13.625C15.0251 15 15.7252 15 16.26 14.7275C16.7304 14.4878 17.1128 14.1054 17.3525 13.635C17.625 13.1002 17.625 12.4001 17.625 11V6.5C17.625 5.09987 17.625 4.3998 17.3525 3.86502C17.1128 3.39462 16.7304 3.01217 16.26 2.77248C15.7252 2.5 15.0251 2.5 13.625 2.5H6.625C5.22487 2.5 4.5248 2.5 3.99002 2.77248C3.51962 3.01217 3.13717 3.39462 2.89748 3.86502C2.625 4.3998 2.625 5.09987 2.625 6.5V11.6667C2.625 12.4416 2.625 12.8291 2.71019 13.147C2.94135 14.0098 3.61522 14.6836 4.47795 14.9148C4.79587 15 5.18336 15 5.95833 15Z"
            stroke="#4D554B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
        <span class="whitespace-nowrap">Write Reply on Review</span>
      </button>
      <WriteReply v-if="isWriteReply" @close="isWriteReply = false" />
    </div>
  </div>
</template>

<script>
  import SellerAvatar from "../../../assets/images/img/seller-comment.png";
  import IconStar from "../../Icons/IconStar.vue";
  import WriteReply from "../WriteReply.vue";

  export default {
    components: {
      IconStar,
      WriteReply
    },
    data() {
      return {
        SellerAvatar,
        isWriteReply: false,
      };
    },
  };
</script>
<style>
  .write-reply-btn {
    visibility: hidden;
    opacity: 0;
    height: 0;
    transform: translateY(-12px);
    transition: all 0.5s;
  }

  .write-reply:hover .write-reply-btn {
    visibility: visible;
    pointer-events: all;
    opacity: 1;
    height: auto;
    transform: translateY(12px);
  }
</style>