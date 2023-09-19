<template>
  <div class="w-full h-screen flex justify-center items-center relative overflow-hidden">
    <div class="w-full h-full flex flex-col justify-end items-center py-12">
        <div>
          <h4
            class="font-display font-semibold text-3xl xl:text-5xl leading-[56px] text-center text-gray-900 mb-5"
          >
            Oops! Page not found.
          </h4>
          <p
            class="font-display text-lg font-normal text-center text-gray-700 mb-8"
          >
            The page you are looking foor doesn’t exist or an other error
            occurred. Go back, or head over to adriver.com to choose new
            direction
          </p>
        </div>
        <div class="flex justify-center gap-3">
          <OutlinePrimary href="/home">
            <HomeIcon />
            <span> Go To Home</span>
          </OutlinePrimary>

          <PrimaryButton class="" href="/home">
            <span> Go Back</span>
          </PrimaryButton>
        </div>
        <p class="text-center bg-white px-4 pt-24 rounded-md text-base text-gray-500 text-opacity-90">
          All content © 2023-Current Adriver and respective copyright holders.
        </p>
    </div>
    <img :src="ErrorPage" alt="" class="absolute max-w-[500px] w-full top-0 left-1/2 -translate-x-1/2" />
  </div>
</template>
<script setup>
import ErrorIcon from "../../components/Icons/ErrorIcon.vue";
import ErrorPage from "../../assets/images/Error/404.png";
import FooterComponent from "../../components/FooterComponent.vue";
import OutlinePrimary from "../../components/Button/OutlinePrimary.vue";
import PrimaryButton from "../../components/Button/PrimaryButton.vue";
import HomeIcon from "../../components/Icons/HomeIcon.vue";
</script>
