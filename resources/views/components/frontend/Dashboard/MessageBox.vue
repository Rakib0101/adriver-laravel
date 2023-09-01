<template>
  <div class="pt-12">
    <div class="container">
      <div class="mb-6 flex justify-between items-center">
        <h2 class="text-2xl text-gray-900 font-display font-semibold">
          Chat/Message
        </h2>
        <button class="inline-flex gap-2 items-center text-sm text-gray-600 font-display font-medium">
          <message-check />
          See all safety tips
        </button>
      </div>
      <div class="border border-gray-100 rounded-2xl shadow-[0px_8px_24px_rgba(23,30,21,0.04)]">
        <div class="message-box flex flex-col lg:flex-row">
          <div :class="isMessageClick ? '' : 'active'"
            class="msg-list lg:max-w-[424px] h-[848px] w-full border-r border-gray-100">
            <div class="p-4">
              <div class="flex justify-between cursor-pointer items-center mb-4">
                <p>Inbox <span>(3 unread message)</span></p>
                <a href="#" @click="handleUnread" class="text-gray-600 hover:text-gray-900 msgFilter"
                  :class="{ active: isFilterActive }"><filter-lines /></a>
              </div>
              <div class="relative">
                <input-field :class="'block w-full pl-[54px]'" :id="searchMessage" :type="text"
                  :placeholder="'Search for message'" />
                <label class="absolute top-3 left-[18px]" for="searchMessage"><search-icon /></label>
              </div>
            </div>
            <ul v-if="messages" class="h-[720px] overflow-y-auto scrollbar-hide">
              <li class="py-4 hover:bg-gray-50 px-6 flex gap-3 items-center cursor-pointer"
                :class="{ 'bg-primary-50': InboxType.archive }" @click="showMessage"
                v-show="allMessages || !showUnread">
                <img :src="Inbox01" alt="" class="w-16 h-16 rounded-full object-cover" />
                <div class="w-full">
                  <h2 class="line-clamp-2 mb-1 text-base font-display font-medium">
                    <a href="#">Hawkins for</a> Simple Mobile 5G LTE Galexy 12
                    Mini 512GB Gaming Phone
                  </h2>
                  <p class="flex justify-between items-center gap-3 text-sm text-gray-500">
                    <span class="line-clamp-1">13/4A, Block-B, 1207 Babar Rd, Dhaka 1207</span>
                    <span class="text-gray-500">5s</span>
                  </p>
                </div>
              </li>
              <li class="py-4 hover:bg-gray-50 px-6 flex gap-3 items-center cursor-pointer"
                :class="{ 'bg-transparent': InboxType.read }" @click="showMessage" v-show="allMessages || !showUnread">
                <img :src="Inbox02" alt="" class="w-16 h-16 rounded-full object-cover" />
                <div class="w-full">
                  <h2 class="line-clamp-2 mb-1 text-base font-display font-medium">
                    <a href="#">Hawkins for</a> Simple Mobile 5G LTE Galexy 12
                    Mini 512GB Gaming Phone
                  </h2>
                  <p class="flex justify-between items-center gap-3 text-sm text-gray-500">
                    <span class="line-clamp-1">13/4A, Block-B, 1207 Babar Rd, Dhaka 1207</span>
                    <span>5s</span>
                  </p>
                </div>
              </li>
              <li class="py-4 hover:bg-gray-50 px-6 flex gap-3 items-center cursor-pointer"
                :class="{ 'bg-warning-50': InboxType.unread }" @click="showMessage" v-show="allMessages || showUnread">
                <img :src="Inbox03" alt="" class="w-16 h-16 rounded-full object-cover" />
                <div class="w-full">
                  <h2 class="line-clamp-2 mb-1 text-base font-display font-medium">
                    <a href="#">Hawkins for</a> Simple Mobile 5G LTE Galexy 12
                    Mini 512GB Gaming Phone
                  </h2>
                  <p class="flex justify-between items-center gap-3 text-sm text-gray-500">
                    <span class="line-clamp-1">13/4A, Block-B, 1207 Babar Rd, Dhaka 1207</span>
                    <span>5s</span>
                  </p>
                </div>
              </li>
              <li class="py-4 hover:bg-gray-50 px-6 flex gap-3 items-center cursor-pointer"
                :class="{ 'bg-warning-50': InboxType.unread }" @click="showMessage" v-show="allMessages || showUnread">
                <img :src="Inbox04" alt="" class="w-16 h-16 rounded-full object-cover" />
                <div class="w-full">
                  <h2 class="line-clamp-2 mb-1 text-base font-display font-medium">
                    <a href="#">Hawkins for</a> Simple Mobile 5G LTE Galexy 12
                    Mini 512GB Gaming Phone
                  </h2>
                  <p class="flex justify-between items-center gap-3 text-sm text-gray-500">
                    <span class="line-clamp-1">13/4A, Block-B, 1207 Babar Rd, Dhaka 1207</span>
                    <span>5s</span>
                  </p>
                </div>
              </li>
              <li class="py-4 hover:bg-gray-50 px-6 flex gap-3 items-center cursor-pointer"
                :class="{ 'bg-transparent': InboxType.read }" @click="showMessage" v-show="allMessages || !showUnread">
                <img :src="Inbox01" alt="" class="w-16 h-16 rounded-full object-cover" />
                <div class="w-full">
                  <h2 class="line-clamp-2 mb-1 text-base font-display font-medium">
                    <a href="#">Hawkins for</a> Simple Mobile 5G LTE Galexy 12
                    Mini 512GB Gaming Phone
                  </h2>
                  <p class="flex justify-between items-center gap-3 text-sm text-gray-500">
                    <span class="line-clamp-1">13/4A, Block-B, 1207 Babar Rd, Dhaka 1207</span>
                    <span>5s</span>
                  </p>
                </div>
              </li>
              <li class="py-4 hover:bg-gray-50 px-6 flex gap-3 items-center cursor-pointer"
                :class="{ 'bg-warning-50': InboxType.unread }" @click="showMessage" v-show="allMessages || showUnread">
                <img :src="Inbox02" alt="" class="w-16 h-16 rounded-full object-cover" />
                <div class="w-full">
                  <h2 class="line-clamp-2 mb-1 text-base font-display font-medium">
                    <a href="#">Hawkins for</a> Simple Mobile 5G LTE Galexy 12
                    Mini 512GB Gaming Phone
                  </h2>
                  <p class="flex justify-between items-center gap-3 text-sm text-gray-500">
                    <span class="line-clamp-1">13/4A, Block-B, 1207 Babar Rd, Dhaka 1207</span>
                    <span>5s</span>
                  </p>
                </div>
              </li>
              <li class="py-4 hover:bg-gray-50 px-6 flex gap-3 items-center cursor-pointer"
                :class="{ 'bg-transparent': InboxType.read }" @click="showMessage" v-show="allMessages || !showUnread">
                <img :src="Inbox03" alt="" class="w-16 h-16 rounded-full object-cover" />
                <div class="w-full">
                  <h2 class="line-clamp-2 mb-1 text-base font-display font-medium">
                    <a href="#">Hawkins for</a> Simple Mobile 5G LTE Galexy 12
                    Mini 512GB Gaming Phone
                  </h2>
                  <p class="flex justify-between items-center gap-3 text-sm text-gray-500">
                    <span class="line-clamp-1">13/4A, Block-B, 1207 Babar Rd, Dhaka 1207</span>
                    <span>5s</span>
                  </p>
                </div>
              </li>
              <li class="py-4 hover:bg-gray-50 px-6 flex gap-3 items-center cursor-pointer"
                :class="{ 'bg-primary-50': InboxType.archive }" @click="showMessage"
                v-show="allMessages || !showUnread">
                <img :src="Inbox04" alt="" class="w-16 h-16 rounded-full object-cover" />
                <div class="w-full">
                  <h2 class="line-clamp-2 mb-1 text-base font-display font-medium">
                    <a href="#">Hawkins for</a> Simple Mobile 5G LTE Galexy 12
                    Mini 512GB Gaming Phone
                  </h2>
                  <p class="flex justify-between items-center gap-3 text-sm text-gray-500">
                    <span class="line-clamp-1">13/4A, Block-B, 1207 Babar Rd, Dhaka 1207</span>
                    <span>5s</span>
                  </p>
                </div>
              </li>
            </ul>
          </div>
          <div class=" w-full relative msg-inbox" :class="isMessageClick ? 'active' : ''">
            <div class="relative">
              <div v-if="messageOpen"
                class="p-6 border-b border-gray-100 flex gap-5 md:flex-row sm:flex-col justify-between flex-wrap  lg:items-center">
                <div class="flex flex-nowrap gap-3 items-center">
                  <span @click="isMessageClick = false" class="lg:hidden inline-block">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M19 12H5M5 12L12 19M5 12L12 5" stroke="#58B32B" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                    </svg>
                  </span>
                  <a href="#" class="flex flex-nowrap gap-3 items-center">
                    <img :src="ProductImage" alt="" class="sm:w-24 sm:h-[74px] w-12 h-12 rounded object-cover" />
                    <div class="sm:max-w-[245px]">
                      <h2 class="sm:text-base text-sm line-clamp-2 font-display font-medium mb-1.5">
                        Simple Mobile 5G LTE Galexy 12 Mini 512GB Gaming Phone
                      </h2>
                      <p class="sm:text-sm line-clamp-1 text-xs text-gray-500">
                        Vijayawada, Andra Pradesh, India
                      </p>
                    </div>
                    <div class="pl-3">
                      <p class="sm:text-lg text-sm mb-1.5 font-display font-semibold text-warning-500">
                        $617.84
                      </p>
                      <p class="sm:text-sm text-xs text-gray-500">Fixed Price</p>
                    </div>
                  </a>
                </div>
                <a href="#" class="sm:max-w-[256px] w-full flex justify-between items-center rounded-md bg-gray-50 p-4">
                  <div class="flex gap-2 items-center">
                    <img :src="ProfilePicture" alt="" />
                    <div>
                      <h2 class="text-sm text-gray-900 font-display font-medium">
                        Guy Hawkins
                      </h2>
                      <p class="flex gap-1 items-center text-xs text-primary-600 font-semibold">
                        <span class="w-2 h-2 rounded-full bg-primary-600"></span>
                        ACTIVE
                      </p>
                    </div>
                  </div>
                  <div>
                    <delete-icon />
                  </div>
                </a>
              </div>
              <div v-if="messageOpen" ref="chatbox" class="pt-2 pb-14 md:pt-10 px-6 h-[620px] overflow-y-auto scrollbar-hide">
                <div v-for="(message, index) in messages" :key="index" class="">
                  <div v-if="message.type === 'sent'" class="sent-message flex justify-end">
                    <div class="mb-4 max-w-[70%]">
                      <p
                        class="text-block text-base py-2 px-3 text-white font-display font-medium bg-primary-500 rounded-md rounded-br-none mb-1">
                        {{ message.text }}
                      </p>
                      <p class="text-xs text-gray-500 text-right">
                        {{ minutesAgo(message.timestamp) }}min ago
                      </p>
                    </div>
                  </div>
                  <div v-else class="received-message flex justify-start">
                    <div class="mb-4 max-w-[70%]">
                      <p
                        class="text-block text-base py-2 px-3 text-gray-900 font-display font-medium bg-primary-50 rounded-md rounded-br-none mb-1">
                        {{ message.text }}
                      </p>
                      <p class="text-xs text-gray-500 text-left">
                        {{ minutesAgo(message.timestamp) }}min ago
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div v-else class="flex justify-center items-center w-full h-[620px]">
                <h2>You don't have any message till now</h2>
              </div>
            </div>
            <div class="absolute  border-t border-gray-100 bottom-0 left-0 right-0 z-50">
              <form @submit.prevent="sendMessage"
                class=" bg-white rounded-2xl flex gap-3 items-end justify-between py-2 px-1">
                <div class="flex w-full relative">
                  <textarea id="chatMessage" ref="textarea"
                    class="block w-full py-3 pl-[54px] pr-3 focus:shadow-[0px_8px_24px_rgba(88,179,43,0.12)] focus:rounded-md transition-all duration-300 focus:outline-primary-500"
                    type="text" v-model="messageText" placeholder="Write Your Message" @focus="resizeTextarea()" @keyup="resizeTextarea()" />
                  <label for="chatMessage" class="absolute top-3 left-[18px]"><message-icon /></label>
                </div>
                <button type="submit"
                  class="bg-primary-500 rounded-lg w-16 h-12 inline-flex justify-center items-center flex-grow-0">
                  <send-message />
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
  import MessageCheck from "../Icons/Dashboard/MessageCheck.vue";
  import FilterLines from "../Icons/Dashboard/FilterLines.vue";
  import SearchIcon from "../Icons/Dashboard/SearchIcon.vue";
  import Inbox01 from "../../assets/images/img/inbox-01.png";
  import Inbox02 from "../../assets/images/img/inbox-02.png";
  import Inbox03 from "../../assets/images/img/inbox-03.png";
  import Inbox04 from "../../assets/images/img/inbox-04.png";
  import ProductImage from "../../assets/images/img/Chat/Image.png";
  import ProfilePicture from "../../assets/images/img/profile-picture.png";
  import DeleteIcon from "../Icons/Dashboard/DeleteIcon.vue";
  import SendMessage from "../Icons/Dashboard/SendMessage.vue";
  import MessageIcon from "../Icons/MessageIcon.vue";
  import InputField from "../CustomInput/InputField.vue";
  import { ref } from "vue";

  export default {
    components: {
      MessageCheck,
      FilterLines,
      SearchIcon,
      Inbox01,
      Inbox02,
      Inbox03,
      Inbox04,
      ProductImage,
      ProfilePicture,
      InputField,
      DeleteIcon,
      SendMessage,
      MessageIcon,
    },
    data() {
      return {
        Inbox01: Inbox01,
        Inbox02: Inbox02,
        Inbox03: Inbox03,
        Inbox04: Inbox04,
        ProductImage: ProductImage,
        ProfilePicture: ProfilePicture,
        InboxType: {
          read: true,
          unread: true,
          archive: true,
        },
        allMessages: true,
        showUnread: false,
        messageOpen: false,
        isMessageClick: false,
        isFilterActive: false
      };
    },
    methods: {
      showMessage() {
        this.messageOpen = !this.messageOpen
        this.isMessageClick = !this.isMessageClick
      },
      handleUnread() {
        this.allMessages = false;
        this.showUnread = true;
        this.isFilterActive = !this.isFilterActive;
        console.log('click')
      },
      resizeTextarea(e) {
        const textarea = this.$refs.textarea;
        textarea.style.height = 'auto';
        const computedStyle = window.getComputedStyle(textarea);
        const height = parseInt(computedStyle.getPropertyValue('border-top-width'), 0)
          + parseInt(computedStyle.getPropertyValue('padding-top'), 10)
          + textarea.scrollHeight
          + parseInt(computedStyle.getPropertyValue('padding-bottom'), 10)
          + parseInt(computedStyle.getPropertyValue('border-bottom-width'), 0);
        textarea.style.height = height - 36 + 'px';
        textarea.style.maxHeight = '200px';
      },
      scrollToBottom() {
        this.$nextTick(function () {
          var container = this.$refs.chatbox;
          container.scrollTop = container.scrollHeight + 120;
        });
      },
    },
    updated() {
          this.scrollToBottom();
        },
    setup() {
      const messages = ref([
        {
          type: "sent",
          text: "Hello, I want to buy this product.",
          timestamp: "2023-02-15 10:31:00",
        },
        {
          type: "sent",
          text: "But price is little bit high for me. can you please reduce the price.",
          timestamp: "2023-02-15 10:35:00",
        },
        {
          type: "received",
          text: "Okay, We can think about that. How much you want us to reduce?",
          timestamp: "2023-02-15 10:45:00",
        },
        {
          type: "sent",
          text: "Maybe $200 or $250 USD",
          timestamp: "2023-02-15 10:35:00",
        },
        {
          type: "received",
          text: "That’s big amount. I think if you came to our shop then we can give you SPECIAL DISCOUNT. What you think?",
          timestamp: "2023-02-15 10:55:00",
        },
        {
          type: "sent",
          text: "Yeah sure, Where is your shop",
          timestamp: "2023-02-15 10:35:00",
        },
        {
          type: "received",
          text: "13/4A, Block-B, 1207 Babar Rd, Dhaka 1207",
          timestamp: "2023-02-15 10:55:00",
        },
      ]);

      const messageText = ref("");

      function sendMessage() {
        const ctimestamp = new Date();
        const options = {
          year: "numeric",
          month: "2-digit",
          day: "2-digit",
          hour: "2-digit",
          minute: "2-digit",
          second: "2-digit",
          hour12: false,
        };
        const formattedTimestamp = ctimestamp.toLocaleString("en-US", options);
        const newMessage = {
          type: "sent",
          text: messageText.value,
          timestamp: formattedTimestamp,
        };
        messages.value.push(newMessage);
        messageText.value = "";
        this.scrollToBottom();
      }
      const minutesAgo = (timestamp) => {
        const date = new Date(timestamp);
        const now = new Date();
        const diff = now - date;
        const minutes = Math.floor(diff / 60000);
        return minutes;
      };
      return {
        messages,
        messageText,
        sendMessage,
        minutesAgo
      };
    },
  };
</script>
<style>
  .msgFilter.active {
    color: #58b32b;
  }

  @media (max-width: 1023px) {

    .message-box .msg-list,
    .message-box .msg-inbox {
      display: none;
    }

    .message-box .msg-list.active,
    .message-box .msg-inbox.active {
      display: block;
    }
  }
  .text-block {
        white-space: pre-wrap;
        word-wrap: break-word;
        font-family: inherit;
        display: inline-flex;
    }
</style>
