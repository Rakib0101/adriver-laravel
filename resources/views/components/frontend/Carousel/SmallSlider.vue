<template>
    <swiper :style="{
        '--swiper-navigation-color': '#000',
        '--swiper-pagination-color': '#000',
    }" :loop="true" :spaceBetween="10" :navigation="true" :thumbs="{ swiper: thumbsSwiper }" class="mySwiper2">
        <swiper-slide><img src="https://swiperjs.com/demos/images/nature-1.jpg" /></swiper-slide><swiper-slide><img
                src="https://swiperjs.com/demos/images/nature-2.jpg" /></swiper-slide><swiper-slide><img
                src="https://swiperjs.com/demos/images/nature-3.jpg" /></swiper-slide><swiper-slide><img
                src="https://swiperjs.com/demos/images/nature-4.jpg" /></swiper-slide><swiper-slide><img
                src="https://swiperjs.com/demos/images/nature-5.jpg" /></swiper-slide><swiper-slide><img
                src="https://swiperjs.com/demos/images/nature-6.jpg" /></swiper-slide><swiper-slide><img
                src="https://swiperjs.com/demos/images/nature-7.jpg" /></swiper-slide><swiper-slide><img
                src="https://swiperjs.com/demos/images/nature-8.jpg" /></swiper-slide><swiper-slide><img
                src="https://swiperjs.com/demos/images/nature-9.jpg" /></swiper-slide><swiper-slide><img
                src="https://swiperjs.com/demos/images/nature-10.jpg" /></swiper-slide>
    </swiper>
    <swiper @swiper="setThumbsSwiper" :spaceBetween="10" :slidesPerView="4" :freeMode="true" :watchSlidesProgress="true"
        class="mySwiper">
        <swiper-slide><img class="border border-gray-900 rounded-xl"
                src="https://swiperjs.com/demos/images/nature-1.jpg" /></swiper-slide><swiper-slide><img
                class="border border-gray-900 rounded-xl"
                src="https://swiperjs.com/demos/images/nature-2.jpg" /></swiper-slide><swiper-slide><img
                class="border border-gray-900 rounded-xl"
                src="https://swiperjs.com/demos/images/nature-3.jpg" /></swiper-slide><swiper-slide><img
                class="border border-gray-900 rounded-xl"
                src="https://swiperjs.com/demos/images/nature-4.jpg" /></swiper-slide><swiper-slide><img
                class="border border-gray-900 rounded-xl"
                src="https://swiperjs.com/demos/images/nature-5.jpg" /></swiper-slide><swiper-slide><img
                class="border border-gray-900 rounded-xl"
                src="https://swiperjs.com/demos/images/nature-6.jpg" /></swiper-slide><swiper-slide><img
                class="border border-gray-900 rounded-xl"
                src="https://swiperjs.com/demos/images/nature-7.jpg" /></swiper-slide><swiper-slide><img
                class="border border-gray-900 rounded-xl"
                src="https://swiperjs.com/demos/images/nature-8.jpg" /></swiper-slide><swiper-slide><img
                class="border border-gray-900 rounded-xl"
                src="https://swiperjs.com/demos/images/nature-9.jpg" /></swiper-slide><swiper-slide><img
                class="border border-gray-900 rounded-xl"
                src="https://swiperjs.com/demos/images/nature-10.jpg" /></swiper-slide>
    </swiper>
</template>
<script>
// Import Swiper Vue.js components
import { Swiper, SwiperSlide } from 'swiper/vue';

// Import Swiper styles
import 'swiper/css';
import "swiper/css/navigation"
import "swiper/css/thumbs"

// import required modules
import SwiperCore, {
    FreeMode, Navigation, Thumbs
} from 'swiper';

SwiperCore.use([FreeMode, Navigation, Thumbs]);

export default {
    components: {
        Swiper,
        SwiperSlide,
    },
    data() {
        return {
            thumbsSwiper: null
        }
    },
    methods: {
        setThumbsSwiper(swiper) {
            this.thumbsSwiper = swiper;
        }
    }
}
</script>
<style scoped>
.swiper {
    width: 100%;
    margin-left: auto;
    margin-right: auto;
}

.swiper-slide {
    background-size: cover;
    background-position: center;
}

.mySwiper2 {
    height: 648px;
    width: 100%;
}

.mySwiper .swiper-slide.swiper-slide-thumb-active {
    opacity: 1;
    border: 5px solid #fff;
    outline: 2px solid #58B32B;
    border-radius: 6px;
}

.mySwiper .swiper-slide {
    width: 12.5%;
    height: 76px;
    opacity: 0.7;
    border: 1px solid #DEE6DC;
    border-radius: 6px;
}
</style>