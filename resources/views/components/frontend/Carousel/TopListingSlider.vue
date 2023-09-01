<script setup>
import GridView from "../ListingCard/GridView.vue";
</script>

<template>
    <div>
        <swiper loop="true" :autoplay="{ delay: 3000 }" :initialSlide="0" :breakpoints="{
            '768': {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            '980': {
                slidesPerView: 3,
                spaceBetween: 50,
            },
        }" class="mySwiper">

            <swiper-slide>
                <GridView :isTop="true" :forSell="true" :is-urgent="true" />
            </swiper-slide>
            <swiper-slide>
                <GridView :is-Top="true" :is-favorite="true" :is-slide="true" />
            </swiper-slide>
            <swiper-slide>
                <GridView :isTop="true" :for-xchange="true" :is-urgent="true" :is-slide="true" />
            </swiper-slide>
        </swiper>
        <!-- top category end -->
    </div>
</template>

<style></style>

<script>

//swipper slider js code
// Import Swiper Vue.js components
import { Swiper, SwiperSlide } from "swiper/vue";

// Import Swiper styles
import "swiper/css";

import "swiper/css/pagination";

// import required modules
import SwiperCore, {
    Autoplay
} from 'swiper';

// install Swiper modules
SwiperCore.use([Autoplay]);

export default {
    components: {
        Swiper,
        SwiperSlide
    }
};
</script>
