<template>
  <div class="relative w-full max-w-[488px] bg-white rounded-xl m-auto p-8">
    <h2
      class="text-gray-900 text-center mb-3 text-xl font-display font-semibold uppercase"
    >
      Create Account on <span class="text-primary-500">ADriver</span>
    </h2>
    <p class="text-center text-gray-600 text-base font-display mb-6">
      A few clicks away from creating your first listing
    </p>
    <form action="">
      <div class="mb-[18px]">
        <label for="name" class="flex mb-2 text-sm text-gray-900">Name</label>
        <input-field
          id="name"
          type="text"
          placeholder="Full name"
        />
      </div>
      <div class="mb-[18px]">
        <label for="email" class="flex mb-2 text-sm text-gray-900">Email</label>
        <input-field
          id="email"
          type="email"
          placeholder="Email address"
        />
      </div>
      <div class="mb-[18px]">
        <label for="password" class="flex mb-2 text-sm text-gray-900"
          >Password</label
        >
        <div class="relative flex">
          <input-field
            id="password"
            :type="inputType"
            placeholder="8+ character"
          />
          <label for="password" class="absolute top-3 right-4" v-if="eyeOff" @click="toggleEye">
            <eye-off />
          </label>
          <label for="password" class="absolute top-3 right-4" v-if="eyeOn" @click="toggleEye">
            <eye-on />
          </label>
        </div>
      </div>
      <div class="mb-[18px]">
        <label for="cpassword" class="flex mb-2 text-sm text-gray-900"
          >Confirm Password</label
        >
        <div class="relative flex">
          <input-field
            id="cpassword"
            :type="cinputType"
            placeholder="8+ character"
          />
          <label
          for="cpassword"
            class="absolute top-3 right-4"
            v-if="ceyeOff"
            @click="ctoggleEye"
          >
            <eye-off />
          </label>
          <label
          for="cpassword"
            class="absolute top-3 right-4"
            v-if="ceyeOn"
            @click="ctoggleEye"
          >
            <eye-on />
          </label>
        </div>
      </div>
      <div class="custom-checkbox flex items-center text-sm text-gray-600 mb-8">
        <input-field type="checkbox" name="" id="checkbox"  class="w-full"/>
        <label for="checkbox" class="flex whitespace-nowrap"
          >I agree with adriver
          <a href="#" class="text-primary-500">Privacy Policy</a> and
          <a href="#" class="text-primary-500">Terms & Condition</a></label
        >
      </div>
      <div class="mb-4">
        <primary-button class="w-full">
          <span>Sign Up</span>
          <button-arrow />
        </primary-button>
      </div>
      <p class="flex justify-center items-center gap-1.5">
        Already have account!
        <a href="#" class="text-primary-500 inline-flex items-center gap-2"
          >Sign In <login-icon
        /></a>
      </p>
    </form>
    <button class="absolute right-3 top-3">
      <modal-close />
    </button>
  </div>
</template>

<script>
import PrimaryButton from "../Button/PrimaryButton.vue";
import ButtonArrow from "../Icons/ButtonArrow.vue";
import LoginIcon from "../Icons/LoginIcon.vue";
import ModalClose from "../Icons/ModalClose.vue";
import EyeOn from "../Icons/EyeOn.vue";
import EyeOff from "../Icons/EyeOff.vue";
import InputField from "../../components/CustomInput/InputField.vue"

export default {
  components: {
    InputField,
    PrimaryButton,
    ButtonArrow,
    LoginIcon,
    ModalClose,
    EyeOn,
    EyeOff,
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

<style></style>
