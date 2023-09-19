<template>
  <div>
    <header-component />
    <Breadcrumb :links="[
      { label: '', url: '#' },
      { label: 'Support', url: '#' },
      { label: '', url: '#' },
    ]" :title="'Help Center'" />
    <div class="py-[100px]">
      <div class="container">
        <div class="flex flex-col lg:flex-row gap-8 md:justify-between">
          <div class="w-full lg:max-w-[536px]">
            <div class="mb-3">
              <span
                class="py-2 h-10 inline-flex justify-center items-center text-base text-blue-500 font-semibold px-4 rounded border-2 border-blue-500 bg-[rgba(31,133,226,0.08)]">24/7
                Customer Support</span>
            </div>
            <h2 class="text-[40px] mb-6 leading-[48px] font-semibold text-gray-900">
              How can we help you?
            </h2>
            <p class="text-lg mb-6 text-gray-500">
              Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed
              tempus nulla ac orci sagittis sodales eu quis ante. Quisque diam
              metus facilisis vitae varius ut.
            </p>
            <div class="relative">
              <input-field placeholder="How can we help you..." />
              <button
                class="absolute top-1 right-2 w-10 h-10 justify-center items-center text-white inline-flex rounded-md bg-primary-500 hover:bg-primary-700 transition-all duration-300">
                <search-lg />
              </button>
            </div>
          </div>
          <div class="w-full xl:w-1/2 rounded-xl shadow-[0px_12px_56px_rgba(23,30,21,0.08)] p-8">
            <h4 class="text-base mb-3 text-gray-900 font-semibold">
              POPULAR TOPICS
            </h4>
            <ul class="sm:columns-2">
              <li>
                <a href="#"
                  class="support-topic-list flex gap-3 items-center rounded hover:bg-primary-50 transition-all duration-300 text-base text-gray-700 hover:text-gray-900 font-medium py-3 px-4 mb-1">
                  <span class="text-gray-300">
                    <info-octagon />
                  </span>

                  New to Adriver</a>
              </li>
              <li>
                <a href="#"
                  class="support-topic-list flex gap-3 items-center rounded hover:bg-primary-50 transition-all duration-300 text-base text-gray-700 hover:text-gray-900 font-medium py-3 px-4 mb-1">
                  <span class="text-gray-300">
                    <phone-icon />
                  </span>
                  Adriver Mobile App</a>
              </li>
              <li>
                <a href="#"
                  class="support-topic-list flex gap-3 items-center rounded hover:bg-primary-50 transition-all duration-300 text-base text-gray-700 hover:text-gray-900 font-medium py-3 px-4 mb-1">
                  <span class="text-gray-300">
                    <settings-icon />
                  </span>
                  Account Settings & Privacy</a>
              </li>
              <li>
                <a href="#"
                  class="support-topic-list flex gap-3 items-center rounded hover:bg-primary-50 transition-all duration-300 text-base text-gray-700 hover:text-gray-900 font-medium py-3 px-4">
                  <span class="text-gray-300">
                    <package-plus />
                  </span>
                  Posting Ads</a>
              </li>
              <li>
                <a href="#"
                  class="support-topic-list flex gap-3 items-center rounded hover:bg-primary-50 transition-all duration-300 text-base text-gray-700 hover:text-gray-900 font-medium py-3 px-4 mb-1">
                  <span class="text-gray-300">
                    <layers-icon />
                  </span>
                  Meet your Dashboard</a>
              </li>
              <li>
                <a href="#"
                  class="support-topic-list flex gap-3 items-center rounded hover:bg-primary-50 transition-all duration-300 text-base text-gray-700 hover:text-gray-900 font-medium py-3 px-4 mb-1">
                  <span class="text-gray-300">
                    <edit-icon />
                  </span>
                  Post, Edit & Customize</a>
              </li>
              <li>
                <a href="#"
                  class="support-topic-list flex gap-3 items-center rounded hover:bg-primary-50 transition-all duration-300 text-base text-gray-700 hover:text-gray-900 font-medium py-3 px-4 mb-1">
                  <span class="text-gray-300">
                    <notification-icon />
                  </span>
                  Ads Listing and Seller</a>
              </li>
              <li>
                <a href="#"
                  class="support-topic-list flex gap-3 items-center rounded hover:bg-primary-50 transition-all duration-300 text-base text-gray-700 hover:text-gray-900 font-medium py-3 px-4">
                  <span class="text-gray-300">
                    <arrow-circle />
                  </span>
                  Ads Listing and Seller</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="bg-gray-50 py-[100px]">
      <div class="container">
        <h2 class="text-[32px] leading-10 mb-[48px] font-semibold text-gray-900">
          All Topics
        </h2>
        <div class="flex justify-center flex-wrap gap-6">
          <a href="#"
            class="topic-card transition-all duration-300 w-full max-w-[312px] p-8 bg-white rounded-[10px] hover:shadow-[0px_12px_48px_rgba(23,30,21,0.12)] flex flex-col items-center">
            <div
              class="icon mb-5 transition-all duration-300 w-20 h-20 inline-flex justify-center items-center rounded-full border-2 border-primary-100">
              <user-circle />
            </div>
            <h2 class="text-gray-900 text-center font-semibold text-lg mb-2">
              User & Account
            </h2>
            <p class="text-sm text-center text-gray-600">
              Nullam vitae lobortis dolor, nec consetur augue, Proin sit amet
              purus.
            </p>
          </a>
          <a href="#"
            class="topic-card transition-all duration-300 w-full max-w-[312px] p-8 bg-white rounded-[10px] hover:shadow-[0px_12px_48px_rgba(23,30,21,0.12)] flex flex-col items-center">
            <div
              class="icon mb-5 transition-all duration-300 w-20 h-20 inline-flex justify-center items-center rounded-full border-2 border-primary-100">
              <passcode-icon />
            </div>
            <h2 class="text-gray-900 text-center font-semibold text-lg mb-2">
              Login & Password
            </h2>
            <p class="text-sm text-center text-gray-600">
              Nullam vitae lobortis dolor, nec consetur augue, Proin sit amet
              purus.
            </p>
          </a>
          <a href="#"
            class="topic-card transition-all duration-300 w-full max-w-[312px] p-8 bg-white rounded-[10px] hover:shadow-[0px_12px_48px_rgba(23,30,21,0.12)] flex flex-col items-center">
            <div
              class="icon mb-5 transition-all duration-300 w-20 h-20 inline-flex justify-center items-center rounded-full border-2 border-primary-100">
              <credit-card />
            </div>
            <h2 class="text-gray-900 text-center font-semibold text-lg mb-2">
              Pricing and Checkout
            </h2>
            <p class="text-sm text-center text-gray-600">
              Nullam vitae lobortis dolor, nec consetur augue, Proin sit amet
              purus.
            </p>
          </a>
          <a href="#"
            class="topic-card transition-all duration-300 w-full max-w-[312px] p-8 bg-white rounded-[10px] hover:shadow-[0px_12px_48px_rgba(23,30,21,0.12)] flex flex-col items-center">
            <div
              class="icon mb-5 transition-all duration-300 w-20 h-20 inline-flex justify-center items-center rounded-full border-2 border-primary-100">
              <lock-icon />
            </div>
            <h2 class="text-gray-900 text-center font-semibold text-lg mb-2">
              Privacy and Security
            </h2>
            <p class="text-sm text-center text-gray-600">
              Nullam vitae lobortis dolor, nec consetur augue, Proin sit amet
              purus.
            </p>
          </a>
          <div
            class="topic-card transition-all duration-300 w-full max-w-[312px] p-8 bg-white rounded-[10px] hover:shadow-[0px_12px_48px_rgba(23,30,21,0.12)] flex flex-col items-center">
            <div
              class="icon mb-5 transition-all duration-300 w-20 h-20 inline-flex justify-center items-center rounded-full border-2 border-primary-100">
              <file-icon />
            </div>
            <h2 class="text-gray-900 text-center font-semibold text-lg mb-2">
              Plans, Billing and Invoice
            </h2>
            <p class="text-sm text-center text-gray-600">
              Nullam vitae lobortis dolor, nec consetur augue, Proin sit amet
              purus.
            </p>
          </div>
          <a href="#"
            class="topic-card transition-all duration-300 w-full max-w-[312px] p-8 bg-white rounded-[10px] hover:shadow-[0px_12px_48px_rgba(23,30,21,0.12)] flex flex-col items-center">
            <div
              class="icon mb-5 transition-all duration-300 w-20 h-20 inline-flex justify-center items-center rounded-full border-2 border-primary-100">
              <message-icon />
            </div>
            <h2 class="text-gray-900 text-center font-semibold text-lg mb-2">
              Seller Profile and Message
            </h2>
            <p class="text-sm text-center text-gray-600">
              Nullam vitae lobortis dolor, nec consetur augue, Proin sit amet
              purus.
            </p>
          </a>
          <a href="#"
            class="topic-card transition-all duration-300 w-full max-w-[312px] p-8 bg-white rounded-[10px] hover:shadow-[0px_12px_48px_rgba(23,30,21,0.12)] flex flex-col items-center">
            <div
              class="icon mb-5 transition-all duration-300 w-20 h-20 inline-flex justify-center items-center rounded-full border-2 border-primary-100">
              <package-icon />
            </div>
            <h2 class="text-gray-900 text-center font-semibold text-lg mb-2">
              Posting Ads
            </h2>
            <p class="text-sm text-center text-gray-600">
              Nullam vitae lobortis dolor, nec consetur augue, Proin sit amet
              purus.
            </p>
          </a>
          <a href="#"
            class="topic-card transition-all duration-300 w-full max-w-[312px] p-8 bg-white rounded-[10px] hover:shadow-[0px_12px_48px_rgba(23,30,21,0.12)] flex flex-col items-center">
            <div
              class="icon mb-5 transition-all duration-300 w-20 h-20 inline-flex justify-center items-center rounded-full border-2 border-primary-100">
              <alert-icon />
            </div>
            <h2 class="text-gray-900 text-center font-semibold text-lg mb-2">
              Policies and Reporting
            </h2>
            <p class="text-sm text-center text-gray-600">
              Nullam vitae lobortis dolor, nec consetur augue, Proin sit amet
              purus.
            </p>
          </a>
        </div>
      </div>
    </div>
    <footer-component />
  </div>
</template>
<script setup>
import HeaderComponent from "../../components/Header/HeaderComponent.vue";
import Breadcrumb from "../../components/Breadcrumb/Breadcrumb.vue";
import BreadcrumbArrow from "../../components/Icons/BreadcrumbArrow.vue";
import FooterComponent from "../../components/FooterComponent.vue";
import InputField from "../../components/CustomInput/InputField.vue";
import SearchLg from "../../components/Icons/SearchLg.vue";
import InfoOctagon from "../../components/Icons/Support/InfoOctagon.vue";
import PhoneIcon from "../../components/Icons/Support/PhoneIcon.vue";
import SettingsIcon from "../../components/Icons/Support/SettingsIcon.vue";
import PackagePlus from "../../components/Icons/Support/PackagePlus.vue";
import LayersIcon from "../../components/Icons/Support/LayersIcon.vue";
import EditIcon from "../../components/Icons/Support/EditIcon.vue";
import NotificationIcon from "../../components/Icons/Support/NotificationIcon.vue";
import ArrowCircle from "../../components/Icons/Support/ArrowCircle.vue";
import UserCircle from "../../components/Icons/Support/UserCircle.vue";
import PasscodeIcon from "../../components/Icons/Support/PasscodeIcon.vue";
import LockIcon from "../../components/Icons/Support/LockIcon.vue";
import FileIcon from "../../components/Icons/Support/FileIcon.vue";
import AlertIcon from "../../components/Icons/Support/AlertIcon.vue";
import PackageIcon from "../../components/Icons/Support/PackageIcon.vue";
import MessageIcon from "../../components/Icons/Support/MessageIcon.vue";
import CreditCard from "../../components/Icons/Support/CreditCard.vue";
</script>
<style>
.support-topic-list:hover svg path {
  stroke: #58b32b;
}

.topic-card .icon {
  color: #58b32b;
}

.topic-card:hover .icon {
  background-color: #58b32b;
  border-color: #58b32b;
  color: white;
}
</style>
