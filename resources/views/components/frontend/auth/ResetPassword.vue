<template>
  <div class="z-[999] fixed top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2" v-if="isResetPassword">
    <div class="relative w-full max-w-[488px] bg-white rounded-xl m-auto p-8">
      <div class="flex justify-center items-center mb-6">
        <forget-password />
      </div>
      <h2 class="text-gray-900 text-center mb-3 text-xl font-display font-semibold uppercase">
        Reset Password
      </h2>
      <p class="text-center text-gray-600 text-base font-display mb-6">
        Duis sed erat eu odio fringilla posuere vel non dolor. Aliquam eu velit
        condimentum, mollis nisi sed.
      </p>
      <form action="">
        <div class="mb-[18px]">
          <label for="password" class="flex mb-2 text-sm text-gray-900">Password</label>
          <div class="relative flex">
            <input-field id="password" :type="inputType" placeholder="8+ character" />
            <label class="absolute top-3 right-4" v-if="eyeOff" @click="toggleEye">
              <eye-off />
            </label>
            <label class="absolute top-3 right-4" v-if="eyeOn" @click="toggleEye">
              <eye-on />
            </label>
          </div>
        </div>
        <div class="mb-[18px]">
          <label for="password" class="flex mb-2 text-sm text-gray-900">Confirm Password</label>
          <div class="relative flex">
            <input-field id="password" :type="cinputType" placeholder="8+ character" />
            <label class="absolute top-3 right-4" v-if="ceyeOff" @click="ctoggleEye">
              <eye-off />
            </label>
            <label class="absolute top-3 right-4" v-if="ceyeOn" @click="ctoggleEye">
              <eye-on />
            </label>
          </div>
        </div>
        <div class="mb-4">
          <primary-button class="w-full">
            <span>Reset Password & Sign In</span>
            <button-arrow />
          </primary-button>
        </div>
      </form>
      <button class="absolute right-3 top-3" @click="$emit('close')">
        <modal-close />
      </button>
    </div>
  </div>
  <div class="overlay fixed top-0 left-0 w-full h-full bg-[#171E15]/70 z-[99]" @click="$emit('close')"
    v-if="isResetPassword"></div>
</template>

<script>
import ForgetPassword from "../Icons/ForgetPassword.vue";
import PrimaryButton from "../Button/PrimaryButton.vue";
import ButtonArrow from "../Icons/ButtonArrow.vue";
import SignupIcon from "../Icons/SignupIcon.vue";
import ModalClose from "../Icons/ModalClose.vue";
import EyeOn from "../Icons/EyeOn.vue";
import EyeOff from "../Icons/EyeOff.vue";
import InputField from "../CustomInput/InputField.vue"

export default {
  components: {
    InputField,
    PrimaryButton,
    ForgetPassword,
    ButtonArrow,
    SignupIcon,
    ModalClose,
    EyeOff,
    EyeOn,
  },
  props: {
    isResetPassword: {
      type: Boolean,
      default: false
    }
  },
  data() {
    return {
      eyeOff: true,
      eyeOn: false,
      ceyeOff: true,
      ceyeOn: false,
      inputType: "password",
      cinputType: "password",
    };
  },
  methods: {
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
    ctoggleEye() {
      this.ceyeOn = !this.ceyeOn;
      this.ceyeOff = !this.ceyeOff;
      if (this.ceyeOn) {
        this.cinputType = "text";
      }
      if (this.ceyeOff) {
        this.cinputType = "password";
      }
    },
  },
};
</script>