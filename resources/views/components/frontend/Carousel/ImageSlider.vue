<template>
    <swiper :autoplay="{ delay: 5000 }" class="swiper" :pagination="true" loop="true" :class="class">
        <swiper-slide><img src="../../assets/images/img/listing-card/listing-card-1.png" /></swiper-slide><swiper-slide><img
                src="../../assets/images/img/listing-card/listing-card-2.png" /></swiper-slide><swiper-slide><img
                src="../../assets/images/img/listing-card/listing-card-3.png" /></swiper-slide><swiper-slide><img
                src="../../assets/images/img/listing-card/listing-card-4.png" /></swiper-slide><swiper-slide><img
                src="../../assets/images/img/listing-card-01.png" /></swiper-slide>
    </swiper>
</template>
<script>
// Import Swiper Vue.js components
import { Swiper, SwiperSlide } from 'swiper/vue';
// Import Swiper styles
import 'swiper/css';
import 'swiper/css/pagination';

// import required modules
import SwiperCore, {
    Autoplay, Pagination
} from 'swiper';

// install Swiper modules
SwiperCore.use([Autoplay, Pagination]);


export default {
    props: {
        class: {
            type: String,
            default: ''

        }

    },
    components: {
        Swiper,
        SwiperSlide,
    },
};
</script>
<style>
.image-slider .swiper-wrapper {
    position: relative;
    width: 100%;
    height: 100%;
    z-index: 1;
    display: flex;
    transition-property: transform;
    /* box-sizing: content-box; */
}

.image-slider .swiper {
    width: 100%;
    max-height: 228px;
    margin-left: auto;
    margin-right: auto;
}

.image-slider .swiper-slide img {
    width: 305px;
    max-height: 216px;
    background-size: contain;
    background-position: center;
}

.image-slider .swiper-pagination {
    position: absolute;
    text-align: center;
    display: flex;
    justify-content: center;
    align-items: center;
    transition: .3s opacity;
    transform: translate3d(0, 0, 0);
    z-index: 10;
}

.image-slider .swiper-pagination-bullets {
    bottom: 14px;
    left: 0;
    width: 100%;
}

.image-slider .swiper-pagination-bullet {
    display: inline-block;
    border-radius: 50%;
    width: 6px;
    height: 6px;
    background-color: white;
    opacity: .9;
}

.image-slider .swiper-pagination-bullet-active {
    background-color: #58b32b;
    border: 2px solid white;
    width: 8px;
    height: 8px;
}

@media (min-width: 1024px) and (max-width: 1247px) {
    .image-slider .swiper-slide img {
        width: 300px;
        background-size: cover;
        max-height: 216px;

    }
}
</style>