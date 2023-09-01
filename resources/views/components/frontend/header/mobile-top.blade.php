{{-- <script>
import MobileLogo from "../Icons/MobileLogo.vue";
import BellIcon from "../Icons/BellIcon.vue";
import GlobeIcon from "../Icons/GlobeIcon.vue";
import IconArrow from "../Icons/IconArrow.vue";
import SmallLogo from "../Icons/Logo/SmallLogo.vue";

export default {
  components: {
    MobileLogo,
    BellIcon,
    GlobeIcon,
    IconArrow,
    SmallLogo
  },
  data() {
    return {
      valueLang: "EN",
      valueCurrency: "USD",
      listLang: ["En", "Bn", "Ar"],
      listCurremcy: ["USD", "BTK", "CAD"],
      visibleLangCurr: false,
      visibleLang: false,
      visibleCurr: false,
      overlay: false,
    };
  },
  methods: {
    toggleLangCurr() {
      this.visibleLangCurr = !this.visibleLangCurr;
      this.overlay = !this.overlay;
    },
    toggleLang() {
      this.visibleLang = !this.visibleLang;
    },
    toggleCurr() {
      this.visibleCurr = !this.visibleCurr;
    },
    selectLang(option) {
      this.valueLang = option;
    },
    selectCurrency(option) {
      this.valueCurrency = option;
    },
  },
};
</script> --}}


  <div class="w-full">
    <div class="container">
      <div class="flex justify-between items-center pt-3 pb-4 px-6">
        <div>
          <a href="#">
            <mobile-logo class="full-logo"/>
            <SmallLogo class="small-logo"/>
          </a>
        </div>
        <!-- language and currency -->
        <div class="inline-flex items-center gap-3.5">
          <div>
            <div
              class="inline-flex gap-1.5 items-center py-1.5 px-2.5 bg-gray-50 text-sm text-gray-700 rounded-md"
              @click="toggleLangCurr()"
            >
              <span>
                <globe-icon />
              </span>
              <span> Eng, USD </span>
            </div>
            <div
              {{-- :class="{ hidden: !visibleLangCurr, visibleLangCurr }" --}}
              class="fixed bottom-0 z-[99999] left-0 right-0 rounded-md bg-white shadow-[0px_12px_32px_rgba(23,30,21,0.08)] border border-gray-100 p-5"
            >
              <h2
                class="text-lg text-center font-semibold font-display text-gray-900 mb-6"
              >
                Change Language & Currency
              </h2>
              <div class="flex gap-4">
                <div class="w-full">
                  <h4 class="mb-2 text-sm text-gray-900 font-medium">
                    Language
                  </h4>
                  <div
                    class="flex justify-between items-center px-[18px] py-3 border border-gray-100 shadow-[0px_3px_14px_rgba(23,30,21,0.02)] rounded-md"
                    @click="toggleLang()"
                  >
                    <span
                      class="font-display uppercase text-base font-medium block text-gray-5 select-none"
                      >valueLang </span
                    >
                    <icon-arrow />
                  </div>
                  <ul
                    @click="toggleLang()"
                    {{-- :class="{ hidden: !visibleLang, visibleLang }" --}}
                    class="shadow-[0px_12px_32px_rgba(23,30,21,0.08)] border border-gray-100 rounded-md"
                  >
                    <li
                      :class="{ current: item === valueLang }"
                      class="text-gray-600 py-3 px-[18px] hover:bg-gray-50 cursor-pointer w-full"
                      v-for="item in listLang"
                      :key="item"
                      @click="selectLang(item)"
                    >
                       item
                    </li>
                  </ul>
                </div>
                <div class="w-full">
                  <h4 class="mb-2 text-sm text-gray-900 font-medium">
                    Currency
                  </h4>
                  <div
                    class="flex justify-between items-center px-[18px] py-3 border border-gray-100 shadow-[0px_3px_14px_rgba(23,30,21,0.02)] rounded-md"
                    @click="toggleCurr()"
                  >
                    <span
                      class="font-display uppercase text-base font-medium block text-gray-5 select-none"
                      > valueCurrency </span
                    >
                    <icon-arrow />
                  </div>
                  <ul
                    @click="toggleCurr()"
                    :class="{ hidden: !visibleCurr, visibleCurr }"
                    class="shadow-[0px_12px_32px_rgba(23,30,21,0.08)] border border-gray-100 rounded-md"
                  >
                    <li
                      :class="{ current: item === valueCurrency }"
                      class="text-gray-600 py-3 px-[18px] hover:bg-gray-50 cursor-pointer"
                      v-for="item in listCurremcy"
                      :key="item"
                      @click="selectCurrency(item)"
                    >
                       item 
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div :class="{ overlay: overlay }" @click="toggleLangCurr()"></div>
          </div>
          <div>
            <a href="#">
              <bell-icon />
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

{{-- <style scoped>
.overlay {
  position: fixed;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  background: #171e15;
  opacity: 0.8;
  z-index: 99;
}
@media (max-width: 374px) {
  .full-logo{
    display: none;
  }
}
@media (min-width: 375px) {
  .small-logo{
    display: none;
  }
}
</style> --}}
