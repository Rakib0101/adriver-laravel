<div class="container">
    <div class="flex justify-center lg:justify-between flex-wrap lg:flex-nowrap">
        <div class="mobileapp-left xl:w-[575px] w-full sm:py-[100px] pt-12">
            <div>
                <h2 class="font-display font-semibold text-2xl md:text-[40px] md:leading-[48px] text-gray-900">
                    Download our Mobile App everything is one touch away.
                </h2>
                <p
                    class="font-display font-normal text-sm md:text-[18px] md:leading-6 text-gray-600 pt-6 xl:w-[488px] mb-6">
                    Aenean malesuada facilisis dolor, eget auctor risus porttitor quis.
                    Fusce placerat velit nec consequat tempor. Suspendse potenti Integer
                    non erat imperdiet congue nunc.
                </p>
            </div>

            <div class="flex flex-col sm:flex-row gap-6">
                <a href="#" class="apple">
                    <x-frontend.mobile-app.icon-card title="Get it nows" title2="App Store">
                        <span class="flex justify-center">
                            <x-frontend.svg-icons.apple-store class="w-6 md:w-auto h-6 md:h-auto" />
                        </span>
                    </x-frontend.mobile-app.icon-card>
                </a>

                <a href="#">
                    <x-frontend.mobile-app.icon-card title="Get it nows" title2="Google Play">
                        <span class="flex justify-center">
                            <x-frontend.svg-icons.google-store class="w-6 md:w-auto h-6 md:h-auto" />
                        </span>
                    </x-frontend.mobile-app.icon-card>
                </a>
            </div>
        </div>

        <div class="mobileapp-right xl:max-w-[648px] xl:max-h-[496px]">
            <img src="{{ asset('frontend/assets/images/img/mobileapp2.png') }}" alt="" />
        </div>
    </div>
</div>


<style scoped>
    .apple:hover path {
        fill: #eb3b05;
    }
</style>

<script setup>
    import IconCard from "./IconCard.vue";
    import AppStoreIcon from "../../assets/images/svg/IconIosAppStore.vue";
    import PlayStoreIcon from "../../assets/images/svg/IconPlayStore.vue";
</script>
