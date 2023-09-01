<template>
  <div class="border-b border-gray-100">
    <div class="container py-[15px]">
      <ul class="flex gap-2 items-center overflow-x-auto">
        <li
          class="inline-flex relative gap-2 items-center px-3 text-ellipsis whitespace-nowrap py-2 text-gray-600 text-base font-medium font-display rounded hover:bg-gray-50 hover:text-gray-900 cursor-pointer transition-all duration-300"
          v-for="(tab, index) in tabs" :key="index" @click="selectedTab = tab.name" :class="{
            'bg-primary-50 text-primary-500 after:absolute after:block after:left-0 after:-bottom-[17px] after:h-1 after:w-full after:bg-primary-500':
              selectedTab === tab.name,
          }">
          <component :is="tab.menuIcon"></component>
          <span>{{ tab.menuName }}</span>
        </li>
      </ul>
    </div>
  </div>
</template>

<script>
  import DashboardIcon from "../Icons/Profile/DashboardIcon.vue";
  import ListingIcon from "../Icons/Profile/ListingIcon.vue";
  import FavouriteListing from "../Icons/Profile/FavouriteListing.vue";
  import PlanBilling from "../Icons/Profile/PlanBilling.vue";
  import InvoiceIcon from "../Icons/Profile/InvoiceIcon.vue";
  import MessageIcon from "../Icons/MessageIcon.vue";
  import SettingIcon from "../Icons/Profile/SettingIcon.vue";
  import PostListing from "../Icons/Profile/PostListing.vue";

  export default {
    components: {
      DashboardIcon,
      ListingIcon,
      FavouriteListing,
      PlanBilling,
      InvoiceIcon,
      MessageIcon,
      SettingIcon,
      PostListing,
    },
    data() {
      return {
        selectedTab: "Tab 1",
        tabs: [
          {
            name: "Tab 1",
            component: "tab-1",
            menuName: "Dashboard",
            menuIcon: DashboardIcon,
          },
          {
            name: "Tab 2",
            component: "tab-2",
            menuName: "My Listing",
            menuIcon: ListingIcon,
          },
          {
            name: "Tab 3",
            component: "tab-3",
            menuName: "Post Listing",
            menuIcon: PostListing,
          },
          {
            name: "Tab 4",
            component: "tab-4",
            menuName: "Favorite Listing",
            menuIcon: FavouriteListing,
          },
          {
            name: "Tab 5",
            component: "tab-5",
            menuName: "Plans & Billing",
            menuIcon: PlanBilling,
          },
          {
            name: "Tab 6",
            component: "tab-6",
            menuName: "Invoice",
            menuIcon: InvoiceIcon,
          },
          {
            name: "Tab 7",
            component: "tab-7",
            menuName: "Message",
            menuIcon: MessageIcon,
          },
          {
            name: "Tab 8",
            component: "tab-8",
            menuName: "Setting",
            menuIcon: SettingIcon,
          },
        ],
      };
    },
    methods: {},
  };
</script>

<style></style>
