<template>
  <section class="pt-[20px] lg:py-[100px]">
    <div class="container">
      <div class="flex gap-6 lg:flex-row flex-col justify-between items-center">
        <div class="w-full max-w-[648px]">
          <img :src="Testimonial" alt="" class="w-full h-auto object-cover rounded-xl" />
        </div>
        <div class="w-full max-w-[536px]">
          <h2 class="text-xl md:text-[40px] md:leading-[48px] mb-8 text-gray-900 font-display font-semibold">
            Our Seller and Buyers Voice
          </h2>
          <div class="relative">
            <swiper :navigation="{
              prevEl: '.testimonial-prev',
              nextEl: '.testimonial-next',
            }" :modules="modules" class="mySwiper mb-8">
              <swiper-slide>
                <p class="mb-4 text-xl text-gray-600">
                  Vestibulum arcu sapien, sagittis eget dictum eleifend,
                  faucibus fermentum turpis. Nunc vel massa odio. In hac
                  habitasse platea dictumst. Mauris ante mauris, porttitor
                  tempor magna et, ultrices venenatis lectus. Phasellus mattis
                  cursus nisl, id ultrices urna consequat et.
                </p>
                <div class="flex items-center gap-3">
                  <span>
                    <testimonial-arrow />
                  </span>
                  <div>
                    <h4 class="text-lg text-gray-900 mb-1 font-semibold">
                      Designerzafor
                    </h4>
                    <p class="text-sm text-gray-500">9+ Years Seller.</p>
                  </div>
                </div>
              </swiper-slide>
              <swiper-slide>
                <p class="mb-4 text-xl text-gray-600">
                  Vestibulum arcu sapien, sagittis eget dictum eleifend,
                  faucibus fermentum turpis. Nunc vel massa odio. In hac
                  habitasse platea dictumst. Mauris ante mauris, porttitor
                  tempor magna et, ultrices venenatis lectus. Phasellus mattis
                  cursus nisl, id ultrices urna consequat et.
                </p>
                <div class="flex items-center gap-3">
                  <span>
                    <testimonial-arrow />
                  </span>
                  <div>
                    <h4 class="text-lg text-gray-900 mb-1 font-semibold">
                      Designerzafor
                    </h4>
                    <p class="text-sm text-gray-500">9+ Years Seller.</p>
                  </div>
                </div>
              </swiper-slide>
            </swiper>
            <div class="flex gap-3 items-center">
              <div
                class="testimonial-prev cursor-pointer rounded-md w-12 h-12 inline-flex justify-center items-center hover:bg-primary-500 hover:text-white bg-gray-50 text-gray-900">
                <left-icon />
              </div>
              <div
                class="testimonial-next cursor-pointer rounded-md rotate-180 w-12 h-12 inline-flex justify-center items-center hover:bg-primary-500 hover:text-white bg-gray-50 text-gray-900">
                <left-icon />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>
<script>
  import Testimonial from "../../../assets/images/img/about/TestimonialArea.png";
  import TestimonialArrow from "../../Icons/About/TestimonialArrow.vue";
  import LeftIcon from "../../Icons/About/LeftIcon.vue";
  import { Swiper, SwiperSlide } from "swiper/vue";
  // Import Swiper styles
  import "swiper/css";

  import "swiper/css/free-mode";
  import "swiper/css/navigation";
  import "swiper/css/thumbs";

  // import required modules
  import { FreeMode, Navigation, Thumbs } from "swiper";
  import { data } from "dom7";

  export default {
    components: {
      Testimonial,
      Swiper,
      SwiperSlide,
      TestimonialArrow,
      LeftIcon,
    },
    setup() {
      let thumbsSwiper = null;
      const setThumbsSwiper = (swiper) => {
        thumbsSwiper = swiper;
      };
      return {
        modules: [FreeMode, Navigation, Thumbs],
      };
    },
    data() {
      return {
        Testimonial: Testimonial,
      };
    },
  };
</script>