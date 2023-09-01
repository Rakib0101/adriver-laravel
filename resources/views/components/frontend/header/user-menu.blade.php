{{-- <script setup>
    import icon1 from "../Icons/Dashboard/BarChart.vue";
    import icon2 from "../Icons/Dashboard/ClipBoard.vue";
    import icon3 from "../Icons/Dashboard/PlusCircle.vue";
    import icon4 from "../Icons/Dashboard/Hearticon.vue";
    import icon5 from "../Icons/Dashboard/CreditCard.vue";
    import icon6 from "../Icons/Dashboard/FileText.vue";
    import icon7 from "../Icons/Dashboard/MessageDots.vue";
    import icon8 from "../Icons/Dashboard/SettingIcon.vue";
</script> --}}

{{-- <script>
    import { defineComponent } from "vue";

    export default defineComponent({
        props: {
            showMenu: {
                type: Boolean,
            },
        },
        components: {
            icon2,
        },
        data() {
            return {
                isSelect: false,
            };
        },
    });
</script> --}}


    <div v-if="showMenu" class="w-[319px] userMenu">
        <div class="bg-gray-900 h-[88px] rounded-tl-lg rounded-tr-lg flex items-center gap-3 py-5 px-6 text-gray-300">
            <slot name="userpic"><img src="../../assets/images/img/avatar.png" alt="profile-picture"
                    class="w-[48px] h-[48px]" /></slot>
            <div>
                <p class="userName text-left text-white">Rnix Point</p>
                <p class="userMail">rnix.point@mail.com</p>
            </div>
        </div>
        <div class="border border-gray-100 bg-white rounded-bl-lg rounded-br-lg text-left">
            <p class="px-5 pt-5 nav text-gray-300 pb-2">Navigation</p>
            <ul class="links space-y-2 pb-5">
                <li class="usermenu-link px-5 border-l-[3px] border-transparent">
                    <div class="py-2 px-3 bg-transparent inner-link flex gap-2">
                        <span>
                            <icon1></icon1>
                        </span>
                        <a @click="isSelect = !isSelect">Dashboard</a>
                    </div>
                </li>
                <li class="usermenu-link px-5 border-l-[3px] border-transparent">
                    <div class="py-2 px-3 bg-transparent inner-link flex gap-2">
                        <span>
                            <icon2></icon2>
                        </span>
                        <a @click="isSelect = !isSelect" href="#">My Listing</a>
                    </div>
                </li>
                <li class="usermenu-link px-5 border-l-[3px] border-transparent">
                    <div class="py-2 px-3 bg-transparent inner-link flex gap-2">
                        <span>
                            <icon3></icon3>
                        </span>
                        <a @click="isSelect = !isSelect" href="#">Post Listing</a>
                    </div>
                </li>
                <li class="usermenu-link px-5 border-l-[3px] border-transparent">
                    <div class="py-2 px-3 bg-transparent inner-link flex gap-2">
                        <span>
                            <icon4></icon4>
                        </span>
                        <a @click="isSelect = !isSelect" href="#">Favorite Listing</a>
                    </div>
                </li>
                <li class="usermenu-link px-5 border-l-[3px] border-transparent">
                    <div class="py-2 px-3 bg-transparent inner-link flex gap-2">
                        <span>
                            <icon5></icon5>
                        </span>
                        <a @click="isSelect = !isSelect" href="#">Plans & Billing</a>
                    </div>
                </li>
                <li class="usermenu-link px-5 border-l-[3px] border-transparent">
                    <div class="py-2 px-3 bg-transparent inner-link flex gap-2">
                        <span>
                            <icon6></icon6>
                        </span>
                        <a @click="isSelect = !isSelect" href="#">Invoice</a>
                    </div>
                </li>
                <li class="usermenu-link px-5 border-l-[3px] border-transparent">
                    <div class="py-2 px-3 bg-transparent inner-link flex gap-2">
                        <span>
                            <icon7></icon7>
                        </span>
                        <a @click="isSelect = !isSelect" href="#">Message</a>
                    </div>
                </li>
                <li class="usermenu-link px-5 border-l-[3px] border-transparent">
                    <div class="py-2 px-3 bg-transparent inner-link flex gap-2">
                        <span>
                            <icon8></icon8>
                        </span>
                        <a @click="isSelect = !isSelect" href="#">Setting</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>


{{-- <style>
    .userMenu {
        box-shadow: 0px 12px 32px rgba(23, 30, 21, 0.08);
        border-radius: 8px;
    }

    .userName {
        font-family: "IBM Plex Sans";
        font-style: normal;
        font-weight: 500;
        font-size: 16px;
        line-height: 24px;
    }

    .userMail {
        font-family: "IBM Plex Sans";
        font-style: normal;
        font-weight: 400;
        font-size: 14px;
        line-height: 20px;
    }

    .nav {
        font-family: "IBM Plex Sans";
        font-style: normal;
        font-weight: 600;
        font-size: 14px;
        line-height: 100%;
        text-transform: uppercase;
    }

    .usermenu-link {
        transition: all 0.3s ease-in;
    }

    .usermenu-link:hover {
        border-color: #58B32B;
    }

    .inner-link {
        font-family: "IBM Plex Sans";
        font-style: normal;
        font-weight: 500;
        font-size: 16px;
        line-height: 24px;
        text-transform: capitalize;
        color: #4d554b;
    }

    .usermenu-link:hover .inner-link {
        background-color: #eef7ea;
        color: #58b32b;
        border-radius: 4px;
        font-family: "IBM Plex Sans";
        font-style: normal;
        font-weight: 500;
        font-size: 16px;
        line-height: 24px;
        text-transform: capitalize;
    }
</style> --}}
