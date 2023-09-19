<template>
  <div class="coming-soon w-full min-h-screen h-[1080px] relative">
    <div class="w-full h-full flex justify-center pt-32 relative z-50">
      <div class="text-center">
        <a href="/home">
            <img :src="Logo" alt="" class="mx-auto mb-8" />
        </a>
        <h2
          class="text-2xl md:text-[64px] max-w-[748px] mb-8 line-clamp-2 md:leading-[72px] text-gray-900 font-semibold font-display">
          Coming soon! We are almost ready to launch.
        </h2>
        <div class="flex justify-center items-center gap-4 md:gap-6 mb-8">
          <div class="inline-flex flex-col justify-center">
            <div
              class="md:w-[88px] md:h-[88px] h-16 w-16 inline-flex justify-center items-center text-primary-500 md:text-[40px] text-2xl md:leading-[48px] bg-primary-50 rounded-lg mb-2 border-2 border-primary-100">
              {{ days }}
            </div>
            <h3 class="text-base text-gray-500">DAYS</h3>
          </div>
          <div class="inline-flex flex-col justify-center">
            <div
              class="md:w-[88px] md:h-[88px] h-16 w-16 inline-flex justify-center items-center text-primary-500 md:text-[40px] text-2xl md:leading-[48px] bg-primary-50 rounded-lg mb-2 border-2 border-primary-100">
              {{ hours }}
            </div>
            <h3 class="text-base text-gray-500">HOURS</h3>
          </div>
          <div class="inline-flex flex-col justify-center">
            <div
              class="md:w-[88px] md:h-[88px] h-16 w-16 inline-flex justify-center items-center text-primary-500 md:text-[40px] text-2xl md:leading-[48px] bg-primary-50 rounded-lg mb-2 border-2 border-primary-100">
              {{ minutes }}
            </div>
            <h3 class="text-base text-gray-500">MINS</h3>
          </div>
          <div class="inline-flex flex-col justify-center">
            <div
              class="md:w-[88px] md:h-[88px] h-16 w-16 inline-flex justify-center items-center text-primary-500 md:text-[40px] text-2xl md:leading-[48px] bg-primary-50 rounded-lg mb-2 border-2 border-primary-100">
              {{ seconds }}
            </div>
            <h3 class="text-base text-gray-500">SECS</h3>
          </div>
        </div>
        <div
          class="py-[18px] px-6 border border-gray-100 bg-white rounded-[10px] shadow-[0px_8px_24px_rgba(23,30,21,0.04)] inline-flex sm:flex-nowrap flex-wrap justify-center gap-3 items-center">
          <p class="sm:w-auto w-full font-medium text-base">Follow Us:</p>
          <a href="#"
            class="w-11 h-11 text-primary-700 hover:text-white bg-primary-50 inline-flex justify-center items-center rounded hover:bg-primary-500 transition-all duration-300">
            <Facebook />
          </a>
          <a href="#"
            class="w-11 h-11 text-primary-700 hover:text-white bg-primary-50 inline-flex justify-center items-center rounded hover:bg-primary-500 transition-all duration-300">
            <Twitter />
          </a>
          <a href="#"
            class="w-11 h-11 text-primary-700 hover:text-white bg-primary-50 inline-flex justify-center items-center rounded hover:bg-primary-500 transition-all duration-300">
            <Instagram />
          </a>
          <a href="#"
            class="w-11 h-11 text-primary-700 hover:text-white bg-primary-50 inline-flex justify-center items-center rounded hover:bg-primary-500 transition-all duration-300">
            <Whatsapp />
          </a>
          <a href="#"
            class="w-11 h-11 text-primary-700 hover:text-white bg-primary-50 inline-flex justify-center items-center rounded hover:bg-primary-500 transition-all duration-300">
            <Youtube />
          </a>
        </div>
      </div>

      <p
        class="absolute bottom-8 text-center bg-white inline-flex py-2 px-4 rounded-md text-base text-gray-500 text-opacity-90">
        All content © 2023-Current Adriver and respective copyright holders.
      </p>
    </div>
    <img :src="ComingLeft" alt="" class="absolute top-0 left-0 hidden xl:block z-30" />
    <img :src="ComingRight" alt="" class="absolute top-0 right-0 hidden xl:block z-30" />
  </div>
</template>
<script>
import ComingLeft from "../../assets/images/img/coming-soon-left.png";
import ComingRight from "../../assets/images/img/coming-soon-right.png";
import Logo from "../../assets/images/img/coming-soon-logo.svg";
import Facebook from "../../components/Icons/ComingSoon/FacebookIcon.vue";
import Twitter from "../../components/Icons/ComingSoon/TwitterIcon.vue";
import Instagram from "../../components/Icons/ComingSoon/InstagramIcon.vue";
import Whatsapp from "../../components/Icons/ComingSoon/WhatsappIcon.vue";
import Youtube from "../../components/Icons/ComingSoon/YoutubeIcon.vue";
import { ref, computed, onMounted, watch } from "vue";

export default {
  components: {
    ComingLeft,
    ComingRight,
    Facebook,
    Twitter,
    Instagram,
    Whatsapp,
    Youtube,
  },
  data() {
    return {
      Logo: Logo,
      ComingLeft: ComingLeft,
      ComingRight: ComingRight,
    };
  },
  setup() {
    const countdownDate = ref(new Date("2023-12-31T23:59:59").getTime());
    const currentTime = ref(new Date().getTime());
    const days = ref(0);
    const hours = ref(0);
    const minutes = ref(0);
    const seconds = ref(0);

    const updateCurrentTime = () => {
      currentTime.value = new Date().getTime();
    };

    onMounted(() => {
      setInterval(updateCurrentTime, 1000);
    });

    const timeRemaining = computed(() => {
      const totalSeconds = Math.floor(
        (countdownDate.value - currentTime.value) / 1000
      );
      const days = Math.floor(totalSeconds / 86400);
      const hours = Math.floor((totalSeconds % 86400) / 3600);
      const minutes = Math.floor((totalSeconds % 3600) / 60);
      const seconds = Math.floor(totalSeconds % 60);
      return {
        days,
        hours,
        minutes,
        seconds,
      };
    });

    days.value = timeRemaining.value.days;
    hours.value = timeRemaining.value.hours;
    minutes.value = timeRemaining.value.minutes;
    seconds.value = timeRemaining.value.seconds;

    setInterval(() => {
      days.value = timeRemaining.value.days;
      hours.value = timeRemaining.value.hours;
      minutes.value = timeRemaining.value.minutes;
      seconds.value = timeRemaining.value.seconds;
    }, 1000);

    return {
      days,
      hours,
      minutes,
      seconds,
    };
  },
};
</script>
<style>
.coming-soon {
  background: linear-gradient(180deg,
      #ffffff 43.23%,
      rgba(255, 255, 255, 0.88) 83.85%,
      rgba(255, 255, 255, 0.46) 100%),
    url("../../assets/images/img/coming-soon-bg.png");
}
</style>
