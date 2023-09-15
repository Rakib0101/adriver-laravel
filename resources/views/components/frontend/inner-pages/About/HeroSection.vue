<template>
    <section class="py-[100px]">
        <div class="container">
            <div class="flex gap-6 lg:flex-row flex-col justify-between items-center">
                <div class="w-full max-w-[648px]">
                    <h2 class="text-5xl font-display mb-6 font-semibold">Lorem Ipsum dolor sit amet, consectetur adipiscing elit.</h2>
                    <p class="text-xl mb-6 font-dsiplay text-gray-600">Proin a rhoncus erat. Curabitur id vestibulum metus, id placerat nisi. Vivamus nec orci tempus, facilisis augue eu, ultricies nulla. Pellentesque fermentum mi in nunc dapibus dictum. Fusce turpis erat, viverra non elementum nec, luctus sed sem. Aliquam mollis ligula ac lacus egestas aliquet. Aenean id felis ut odio maximus pellentesque.</p>
                    <div>
                        <primary-button>
                            <play-icon />
                            <span>Play Video</span>
                        </primary-button>
                    </div>
                </div>
                <div class="w-full max-w-[536px]">
                    <img :src="Hero" alt="" class="w-full h-auto object-cover rounded-xl">
                </div>
            </div>
        </div>
    </section>
</template>
<script setup>
import PrimaryButton from "../../Button/PrimaryButton.vue";
import PlayIcon from "../../Icons/PlayIcon.vue"
import Hero from "../../../assets/images/img/about/hero-section.png"
</script>