<template>
  <div class="z-[999] fixed top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2" v-if="isEmailVerify">
    <div class="relative w-full max-w-[488px] bg-white rounded-xl m-auto p-8">
      <div class="flex justify-center items-center mb-3">
        <email-verify />
      </div>
      <h2 class="text-gray-900 text-center mb-3 text-2xl font-display font-semibold uppercase">
        Email Verification
      </h2>
      <p class="text-center text-gray-600 text-base font-display mb-6">
        Enter six digit verification code that we send to your email address. Code
        will expire in 30 Secs
      </p>
      <form>
        <div class="flex gap-2 items-center mb-8">
          <input
            class="inline-flex justify-center items-center text-center w-16 h-[72px] border border-gray-100 rounded-md shadow-[0px_3px_14px_rgba(23,30,21,0.02)] focus:outline-primary-500 text-4xl"
            v-model="code1" type="text" id="code1" name="code1" maxlength="1" @input="validateCode" />
          <input
            class="inline-flex justify-center items-center text-center w-16 h-[72px] border border-gray-100 rounded-md shadow-[0px_3px_14px_rgba(23,30,21,0.02)] focus:outline-primary-500 text-4xl"
            v-model="code2" type="text" id="code2" name="code2" maxlength="1" @input="validateCode" />
          <input
            class="inline-flex justify-center items-center text-center w-16 h-[72px] border border-gray-100 rounded-md shadow-[0px_3px_14px_rgba(23,30,21,0.02)] focus:outline-primary-500 text-4xl"
            v-model="code3" type="text" id="code3" name="code3" maxlength="1" @input="validateCode" />
          <input
            class="inline-flex justify-center items-center text-center w-16 h-[72px] border border-gray-100 rounded-md shadow-[0px_3px_14px_rgba(23,30,21,0.02)] focus:outline-primary-500 text-4xl"
            v-model="code4" type="text" id="code4" name="code4" maxlength="1" @input="validateCode" />
          <input
            class="inline-flex justify-center items-center text-center w-16 h-[72px] border border-gray-100 rounded-md shadow-[0px_3px_14px_rgba(23,30,21,0.02)] focus:outline-primary-500 text-4xl"
            v-model="code5" type="text" id="code5" name="code5" maxlength="1" @input="validateCode" />
          <input
            class="inline-flex justify-center items-center text-center w-16 h-[72px] border border-gray-100 rounded-md shadow-[0px_3px_14px_rgba(23,30,21,0.02)] focus:outline-primary-500 text-4xl"
            v-model="code6" type="text" id="code6" name="code6" maxlength="1" @input="validateCode" />
        </div>
        <div class="mb-4">
          <primary-button class="w-full" @click.prevent="verifyCode">
            <span>Verify email address</span>
            <button-arrow />
          </primary-button>
        </div>
        <p class="flex text-gray-500 font-display justify-center items-center gap-1.5">
          Don’t get any codes <a href="#" class="text-primary-500">Resend</a>or<a href="#" class="text-primary-500">Change
            Email</a>
        </p>
      </form>
      <p v-if="error" class="error text-danger-500">{{ error }}</p>
      <button class="absolute right-3 top-3" @click.self="$emit('close')">
        <modal-close />
      </button>
    </div>
  </div>
  <div class="overlay fixed top-0 left-0 w-full h-full bg-[#171E15]/70 z-[99]" @click="$emit('close')"
    v-if="isEmailVerify"></div>
</template>

<script>
import EmailVerify from "../Icons/EmailVerify.vue";
import PrimaryButton from "../Button/PrimaryButton.vue";
import ButtonArrow from "../Icons/ButtonArrow.vue";
import ModalClose from "../Icons/ModalClose.vue";
export default {
  components: {
    EmailVerify,
    PrimaryButton,
    ButtonArrow,
    ModalClose,
  },
  props: {
    isEmailVerify: {
      type: Boolean,
      default: false
    }
  },
  data() {
    return {
      code1: "",
      code2: "",
      code3: "",
      code4: "",
      code5: "",
      code6: "",
      error: "",
    };
  },
  methods: {
    validateCode(event) {
      if (!event.target.value.match(/^\d*$/)) {
        event.target.value = event.target.value.replace(/[^0-9]/g, "");
      }
    },
    verifyCode() {
      if (
        this.code1.length !== 1 ||
        this.code2.length !== 1 ||
        this.code3.length !== 1 ||
        this.code4.length !== 1 ||
        this.code5.length !== 1 ||
        this.code6.length !== 1
      ) {
        this.error = "Each input must contain only one digit";
      } else {
        this.error = "";
        let code =
          this.code1 +
          this.code2 +
          this.code3 +
          this.code4 +
          this.code5 +
          this.code6;
        // Code is valid, perform some action
        // ...
      }
    },
  },
};
</script>
