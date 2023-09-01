<template>
  <div class="relative w-full max-w-[488px] bg-white rounded-xl m-auto p-8">
    <h2
      class="text-gray-900 text-center mb-3 text-xl font-display font-semibold uppercase"
    >
      Sign in to your account
    </h2>
    <p class="text-center text-gray-600 text-base font-display mb-6">
      Welcome back
    </p>
    <button
      class="flex w-full py-3 max-h-12 rounded-md gap-3 text-base text-gray-700 font-display justify-center items-center border border-gray-100 shadow-[0px_3px_14px_rgba(23,30,21,0.02)] transition-all duration-300 hover:shadow-[0px_3px_14px_rgba(23,30,21,0.12)] mb-[18px]"
    >
      <img :src="GoogleImg" alt="" />
      <span>Sign in with <span class="font-medium">Google</span></span>
    </button>
    <button
      class="flex w-full py-3 max-h-12 rounded-md gap-3 text-base text-gray-700 font-display justify-center items-center border border-gray-100 shadow-[0px_3px_14px_rgba(23,30,21,0.02)] transition-all duration-300 hover:shadow-[0px_3px_14px_rgba(23,30,21,0.12)] mb-[18px]"
    >
      <img :src="FacebookImg" alt="" />
      <span>Sign in with <span class="font-medium">Facebook</span></span>
    </button>
    <div class="flex justify-center overflow-hidden mb-[18px]">
      <p
        class="inline-flex relative before:absolute after:absolute before:right-full after:left-full before:top-1/2 after:top-1/2 before:w-full after:w-full dashed-bg before:h-[1px] after:h-[1px] px-3 z-1"
      >
        OR SIGN IN MANUALLY
      </p>
    </div>
    <form action="">
      <div class="mb-[18px]">
        <div class="flex justify-between mb-2">
          <label
            for="phone"
            class="flex text-sm text-gray-900"
            v-if="phoneLogin"
            >Phone Number</label
          >
          <label
            for="email"
            class="flex text-sm text-gray-900"
            v-if="emailLogin"
            >Email</label
          >
          <button
            class="text-primary-500 font-display font-semibold text-sm"
            v-if="phoneLogin"
            @click="toggleEmailPhone"
          >
            Use Email Instead
          </button>
          <button
            class="text-primary-500 font-display font-semibold text-sm"
            v-if="emailLogin"
            @click="toggleEmailPhone"
          >
            Use Phone Number Instead
          </button>
        </div>
        <input-field
          id="phone"
          type="number"
          placeholder="Enter Phone Number"
          v-if="phoneLogin"
        />
        <input-field
          id="email"
          type="email"
          placeholder="Email address"
          v-if="emailLogin"
        />
      </div>
      <div class="mb-[18px]" v-if="emailLogin">
        <label for="password" class="flex mb-2 text-sm text-gray-900"
          >Password</label
        >
        <div class="relative flex">
          <input-field
            id="password"
            :type="inputType"
            placeholder="8+ character"
            class="flex w-full px-[18px] py-3 border border-gray-100 shadow-[0px_3px_14px_rgba(23,30,21,0.02)] rounded-md"
          />
          <label for="password" class="absolute top-3 right-4" v-if="eyeOff" @click="toggleEye">
            <eye-off />
          </label>
          <label for="password" class="absolute top-3 right-4" v-if="eyeOn" @click="toggleEye">
            <eye-on />
          </label>
        </div>
      </div>
      <div class="mb-6">
        <CustomCheckbox type="checkbox" id="keepme" label="Keep me logged in." />
        <div v-if="emailLogin">
          <a href="#" class="text-primary-500 font-display font-medium"
            >Forget Password</a
          >
        </div>
      </div>
      <div class="mb-4">
        <primary-button class="w-full">
          <span v-if="phoneLogin">Send otp</span>
          <span v-if="emailLogin">Sign IN</span>
          <button-arrow />
        </primary-button>
      </div>
      <p class="flex justify-center items-center gap-1.5">
        Don’t have account!
        <a
          href="#"
          class="text-primary-500 inline-flex items-center gap-2 font-semibold"
          >Create Account <signup-icon
        /></a>
      </p>
    </form>
    <button class="absolute right-3 top-3" @click="$emit('close')">
      <modal-close />
    </button>
  </div>
</template>

<script>
import PrimaryButton from "../Button/PrimaryButton.vue";
import ButtonArrow from "../Icons/ButtonArrow.vue";
import SignupIcon from "../Icons/SignupIcon.vue";
import ModalClose from "../Icons/ModalClose.vue";
import GoogleImg from "../../assets/images/img/google-logo.png";
import FacebookImg from "../../assets/images/img/facebook-logo.png";
import EyeOn from "../Icons/EyeOn.vue";
import EyeOff from "../Icons/EyeOff.vue";
import InputField from "../CustomInput/InputField.vue";
import CustomCheckbox from "../CustomInput/CustomCheckbox.vue"

export default {
  components: {
    InputField,
    PrimaryButton,
    ButtonArrow,
    SignupIcon,
    ModalClose,
    EyeOff,
    EyeOn,
    CustomCheckbox
  },
  props: {
    visible: {
      type: Boolean,
      default: false,
    },
  },
  data() {
    return {
      GoogleImg: GoogleImg,
      FacebookImg: FacebookImg,
      phoneLogin: true,
      emailLogin: false,
      eyeOff: true,
      eyeOn: false,
      inputType: "password",
    };
  },
  methods: {
    toggleEmailPhone() {
      this.emailLogin = !this.emailLogin;
      this.phoneLogin = !this.phoneLogin;
    },
    toggleEye() {
      this.eyeOn = !this.eyeOn;
      this.eyeOff = !this.eyeOff;
      if (this.eyeOn) {
        this.inputType = "text";
      }
      if (this.eyeOff) {
        this.inputType = "password";
      }
    },
  },
};
</script>
