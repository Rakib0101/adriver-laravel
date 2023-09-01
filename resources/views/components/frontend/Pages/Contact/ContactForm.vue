<template>
  <div>
    <div class="container pb-20">
      <div class="max-w-[872px] mx-auto p-8 rounded-xl bg-gray-50">
        <h2 class="text-2xl font-display font-semibold mb-[18px]">
          Contact with us
        </h2>
        <form>
          <div class="flex sm:flex-row flex-col gap-[18px] mb-[18px]">
            <div class="w-full">
              <label
                for="email"
                class="text-sm font-normal font-display mb-1.5 flex w-full"
                >Email</label
              >
              <input
                type="email"
                placeholder="Email Address"
                class="flex w-full px-[18px] py-3 rounded-md shadow-[0p_3px_14px_rgba(23,30,21,0.03) outline-none focus:border-primary-500 focus:shadow-[0px_8px_24px_rgba(88,179,43,0.12)] border border-gray-100"
              />
            </div>
            <div class="w-full">
              <label
                for="email"
                class="text-sm font-normal font-display mb-1.5 flex w-full"
                >Email</label
              >
              <input
                type="email"
                placeholder="Email Address"
                class="flex w-full px-[18px] py-3 rounded-md shadow-[0p_3px_14px_rgba(23,30,21,0.03) outline-none focus:border-primary-500 focus:shadow-[0px_8px_24px_rgba(88,179,43,0.12)] border border-gray-100"
              />
            </div>
          </div>
          <div class="w-full mb-[18px]">
              <label
                for="subject"
                class="text-sm font-normal font-display mb-1.5 flex w-full"
                >Subject</label
              >
              <input
                type="subject"
                placeholder="Subject"
                class="flex w-full px-[18px] py-3 rounded-md shadow-[0p_3px_14px_rgba(23,30,21,0.03) outline-none focus:border-primary-500 focus:shadow-[0px_8px_24px_rgba(88,179,43,0.12)] border border-gray-100"
              />
            </div>
            <div class="w-full mb-[18px]">
              <label
                for="message"
                class="text-sm font-normal font-display mb-1.5 flex w-full"
                >Email</label
              >
              <textarea
              rows="6"
                placeholder="Message"
                class="flex w-full px-[18px] py-3 rounded-md shadow-[0p_3px_14px_rgba(23,30,21,0.03) outline-none focus:border-primary-500 focus:shadow-[0px_8px_24px_rgba(88,179,43,0.12)] border border-gray-100"
              ></textarea>
            </div>
            <div>
                <primary-button>
                    <span>Send Message</span>
                    <send-message />
                </primary-button>
            </div>
        </form>
      </div>
    </div>
  </div>
</template>
<script setup>
    import PrimaryButton from "../../Button/PrimaryButton.vue";
    import SendMessage from "../../Icons/Contact/SendMessage.vue";
</script>
