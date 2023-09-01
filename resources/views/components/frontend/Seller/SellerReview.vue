<template>
  <div class="py-8">
    <h2 class="text-[32px] leading-10 font-display font-semibold text-gray-900">Seller Reviews</h2>
    <div>
        <seller-comment v-for="item in 5" :key="item">
            <template #reply>
                <seller-reply />
            </template>
        </seller-comment>
    </div>
    <div>
        <button
            class="flex items-center uppercase h-[48px] mt-[24px] py-[12px] px-[20px] bg-gray-50 mx-auto rounded-md font-display text-[15px] leading-[48px] font-semibold">
            <span class="mr-2">
                <LoadingIcon />
            </span> Load More
        </button>
    </div>
  </div>
</template>

<script>
import SellerComment from './Review/SellerComment.vue';
import SellerReply from './Review/SellerReply.vue';
import LoadingIcon from "../Icons/Profile/LoadingIcon.vue";
export default {
    components:{
        SellerComment,
        SellerReply,
        LoadingIcon
    }
}
</script>