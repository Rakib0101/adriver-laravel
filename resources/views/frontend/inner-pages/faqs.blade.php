<template>
  <HeaderComponent />
  <Breadcrumb
    :links="[
      { label: '', url: '#' },
      { label: 'Supports', url: '#' },
    ]"
    :title="'Frequently Ask Questions'"
  />
  <section class="py-16">
    <div class="container">
      <div class="flex items-start flex-wrap justify-between">
        <div
          class="p-5 rounded-lg border border-gray-100 shadow-[0px_8px_32px_rgba(23,30,21,0.08)] w-full lg:max-w-[312px]"
        >
          <h3 class="uppercase text-sm text-gray-300 mb-2">Navigation</h3>
          <ul class="flex flex-col gap-2">
            <li
              v-for="(tab, index) in tabs"
              :key="index"
              @click="setActiveTab(index)"
              class="flex gap-2 items-center cursor-pointer rounded transition-all duration-300 py-2 px-3"
              :class="
                activeTab === index
                  ? 'text-primary-500 bg-primary-50'
                  : 'text-gray-900 hover:text-primary-500 hover:bg-pirmary-50 bg-gray-50'
              "
            >
              <component :is="tab.icon" />{{ tab.name }}
            </li>
          </ul>
        </div>
        <div class="lg:max-w-[872px] w-full">
          <div
            v-for="(tab, index) in tabs"
            :key="index"
            :class="{ hidden: activeTab !== index }"
          >
            <h2 class="text-[32px] leading-10 text-gray-900 font-semibold mb-6">
              {{ tab.name }}
            </h2>
            <div class="accordion">
              <div
                v-for="(item, index) in items"
                :key="index"
                class="mb-4 transition-all duration-300"
              >
                <div
                  class="accordion-header transition-all duration-300 py-5 px-6 border border-gray-100 rounded-lg shadow-[0px_8px_32px_rgba(23,30,21,0.04)] flex justify-between items-center select-none cursor-pointer"
                  :class="[
                    isOpen(index)
                      ? 'border-none bg-primary-500 rounded-bl-none rounded-br-none text-white'
                      : 'text-gray-900',
                  ]"
                  @click="toggle(index)"
                >
                  <span class="">{{ item.title }}</span>
                  <Plus :class="isOpen(index) ? 'hidden' : 'inline-flex'" />
                  <Minus :class="isOpen(index) ? 'inline-flex' : 'hidden'" />
                </div>
                <div
                  class="accordion-body select-none transition-all duration-300 py-5 px-6 border rounded-bl-lg rounded-br-lg border-gray-100"
                  :class="
                    isOpen(index)
                      ? 'h-auto flex'
                      : 'max-h-0 overflow-hidden hidden'
                  "
                >
                  {{ item.content }}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <FooterComponent />
</template>

<script>
import HeaderComponent from "../../components/Header/HeaderComponent.vue";
import Breadcrumb from "../../components/Breadcrumb/Breadcrumb.vue";
import BreadcrumbArrow from "../../components/Icons/BreadcrumbArrow.vue";
import FooterComponent from "../../components/FooterComponent.vue";
import Asterist from "../../components/Icons/Faqs/AsteristIcon.vue";
import CreditCard from "../../components/Icons/Faqs/CreditCard.vue";
import PieChart from "../../components/Icons/Faqs/PieChart.vue";
import BarChart from "../../components/Icons/Faqs/BarChart.vue";
import FilePlus from "../../components/Icons/Faqs/FilePlus.vue";
import Lock from "../../components/Icons/Faqs/LockIcon.vue";
import Plus from "../../components/Icons/Faqs/PlusIcon.vue";
import Minus from "../../components/Icons/Faqs/MinusIcon.vue";

export default {
  components: {
    HeaderComponent,
    Breadcrumb,
    BreadcrumbArrow,
    FooterComponent,
    Asterist,
    CreditCard,
    PieChart,
    BarChart,
    FilePlus,
    Lock,
    Plus,
    Minus,
  },
  data() {
    return {
      activeTab: 0,
      tabs: [
        { name: "General", icon: Asterist },
        { name: "Pricing Plans & Checkout", icon: CreditCard },
        { name: "Plans & Billing and Invoice", icon: PieChart },
        { name: "User Dashbaord", icon: BarChart },
        { name: "Post Ads", icon: FilePlus },
        { name: "Password & Security", icon: Lock },
      ],
      active: 0,
      items: [
        {
          title:
            "Vivamus orci odio, sodales at commodo viverra, aliquam id erat. ",
          content:
            "Pellentesque rutrum magna purus, quis convallis nulla tincidunt quis. Sed sit amet urna justo. Vestibulum quis dui erat. In vitae iaculis justo. Phasellus sit amet tellus erat. Pellentesque ut nunc ac neque tempus eleifend. Nulla in cursus arcu. Mauris varius blandit risus sit amet placerat. Nullam eget feugiat neque. Nulla facilisi. Proin sit amet ullamcorper mi. Sed vel dui dignissim, porttitor nisi non, consequat libero. Cras feugiat, felis nec ultricies porttitor, quam nunc dictum nisi, in porta nibh diam a lacus.",
        },
        {
          title:
            "Aenean mi est, laoreet in arcu mattis, pellentesque malesuada leo. ",
          content:
            "Pellentesque rutrum magna purus, quis convallis nulla tincidunt quis. Sed sit amet urna justo. Vestibulum quis dui erat. In vitae iaculis justo. Phasellus sit amet tellus erat. Pellentesque ut nunc ac neque tempus eleifend. Nulla in cursus arcu. Mauris varius blandit risus sit amet placerat. Nullam eget feugiat neque. Nulla facilisi. Proin sit amet ullamcorper mi. Sed vel dui dignissim, porttitor nisi non, consequat libero. Cras feugiat, felis nec ultricies porttitor, quam nunc dictum nisi, in porta nibh diam a lacus.",
        },
        {
          title:
            "Sed interdum sed odio vel porta. Donec elementum, justo vel viverra mollis. ",
          content:
            "Pellentesque rutrum magna purus, quis convallis nulla tincidunt quis. Sed sit amet urna justo. Vestibulum quis dui erat. In vitae iaculis justo. Phasellus sit amet tellus erat. Pellentesque ut nunc ac neque tempus eleifend. Nulla in cursus arcu. Mauris varius blandit risus sit amet placerat. Nullam eget feugiat neque. Nulla facilisi. Proin sit amet ullamcorper mi. Sed vel dui dignissim, porttitor nisi non, consequat libero. Cras feugiat, felis nec ultricies porttitor, quam nunc dictum nisi, in porta nibh diam a lacus.",
        },
        {
          title: "Nunc arcu dictum lectus, eu auctor lacus lectus eget sem.",
          content:
            "Pellentesque rutrum magna purus, quis convallis nulla tincidunt quis. Sed sit amet urna justo. Vestibulum quis dui erat. In vitae iaculis justo. Phasellus sit amet tellus erat. Pellentesque ut nunc ac neque tempus eleifend. Nulla in cursus arcu. Mauris varius blandit risus sit amet placerat. Nullam eget feugiat neque. Nulla facilisi. Proin sit amet ullamcorper mi. Sed vel dui dignissim, porttitor nisi non, consequat libero. Cras feugiat, felis nec ultricies porttitor, quam nunc dictum nisi, in porta nibh diam a lacus.",
        },
        {
          title: "Sed pellentesque turpis eget erat pretium placerat.",
          content: "Content for item 2",
        },
        {
          title:
            "Pellentesque rutrum magna purus, quis convallis nulla tincidunt quis.",
          content:
            "Pellentesque rutrum magna purus, quis convallis nulla tincidunt quis. Sed sit amet urna justo. Vestibulum quis dui erat. In vitae iaculis justo. Phasellus sit amet tellus erat. Pellentesque ut nunc ac neque tempus eleifend. Nulla in cursus arcu. Mauris varius blandit risus sit amet placerat. Nullam eget feugiat neque. Nulla facilisi. Proin sit amet ullamcorper mi. Sed vel dui dignissim, porttitor nisi non, consequat libero. Cras feugiat, felis nec ultricies porttitor, quam nunc dictum nisi, in porta nibh diam a lacus.",
        },
      ],
    };
  },
  methods: {
    setActiveTab(index) {
      this.activeTab = index;
    },
    toggle(index) {
      if (this.active === index) {
        this.active = null;
      } else {
        this.active = index;
      }
    },
    isOpen(index) {
      return this.active === index;
    },
  },
};
</script>
