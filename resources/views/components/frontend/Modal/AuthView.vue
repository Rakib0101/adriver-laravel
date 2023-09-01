<template>
  <div class="popup-overlay" v-show="visible" @click.self="$emit('close')">
    <div ref="modal" class="relative w-full max-w-[488px] bg-white rounded-xl m-auto p-8">
      <!-- Sign-In Section -->
      <div v-if="signIn && !isForget">
        <h2 class="text-gray-900 text-center mb-3 text-2xl font-display font-semibold uppercase">
          Sign in to your account
        </h2>
        <p class="text-center text-gray-600 text-base font-display mb-6">
          Welcome back
        </p>
        <button
          class="flex w-full py-3 max-h-12 rounded-md gap-3 text-base text-gray-700 font-display justify-center items-center border border-gray-100 shadow-[0px_3px_14px_rgba(23,30,21,0.02)] transition-all duration-300 hover:shadow-[0px_3px_14px_rgba(23,30,21,0.12)] mb-[18px]">
          <img :src="GoogleImg" alt="" />
          <span>Sign in with <span class="font-medium text-gray-900">Google</span></span>
        </button>
        <button
          class="flex w-full py-3 max-h-12 rounded-md gap-3 text-base text-gray-700 font-display justify-center items-center border border-gray-100 shadow-[0px_3px_14px_rgba(23,30,21,0.02)] transition-all duration-300 hover:shadow-[0px_3px_14px_rgba(23,30,21,0.12)] mb-[18px]">
          <img :src="FacebookImg" alt="" />
          <span>Sign in with <span class="font-medium text-gray-900">Facebook</span></span>
        </button>
        <div class="flex justify-center overflow-hidden mb-[18px]">
          <p
            class="inline-flex relative before:absolute after:absolute before:right-full after:left-full before:top-1/2 after:top-1/2 before:w-full after:w-full dashed-bg before:h-[1px] after:h-[1px] px-3 z-1 text-xs font-medium text-gray-400">
            OR SIGN IN MANUALLY
          </p>
        </div>
        <form action="">
          <div class="mb-[18px]">
            <div class="flex justify-between mb-2">
              <label for="phone" class="flex text-sm text-gray-900" v-if="phoneLogin">Phone Number</label>
              <label for="email" class="flex text-sm text-gray-900" v-if="emailLogin">Email</label>
              <button class="text-primary-500 font-display font-semibold text-sm" v-if="phoneLogin"
                @click="toggleEmailPhone">
                Use Email Instead
              </button>
              <button class="text-primary-500 font-display font-semibold text-sm" v-if="emailLogin"
                @click="toggleEmailPhone">
                Use Phone Number Instead
              </button>
            </div>
            <input-field id="phone" type="text" placeholder="Enter Phone Number" v-if="phoneLogin" />
            <input-field id="email" type="email" placeholder="Email address" v-if="emailLogin" />
          </div>
          <div class="mb-[18px]" v-if="emailLogin">
            <label for="password" class="flex mb-2 text-sm text-gray-900">Password</label>
            <div class="relative flex">
              <input-field :id="password" :type="inputType" placeholder="8 + character" />
              <label for="password" class="absolute top-3 right-4" v-if="eyeOff" @click="toggleEye">
                <eye-off />
              </label>
              <label for="password" class="absolute top-3 right-4" v-if="eyeOn" @click="toggleEye">
                <eye-on />
              </label>
            </div>
          </div>
          <div class="mb-6 flex justify-between">
            <div v-if="phoneLogin" class="inline-flex gap-2 custom-checkbox">
              <input type="checkbox" name="" id="keepme" class="" />
              <label for="keepme" class="text-sm !text-gray-600">Keep me logged in.</label>
            </div>
            <div v-if="!phoneLogin" class="flex gap-2 custom-checkbox">
              <input type="checkbox" name="" id="keepme" class="" />
              <label for="keepme" class="text-sm !text-gray-600">Keep me logged in. </label>

            </div>

            <div v-if="emailLogin">
              <a href="#" class="text-primary-500 font-display font-medium" @click="fPass">Forget
                Password</a>
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
            <span>Don’t have an account!</span>
            <button class="text-primary-500 inline-flex items-center gap-2 font-semibold" @click="toggleSignInUP"
              type="button">
              Create Account <signup-icon />
            </button>
          </p>
        </form>
      </div>
      <ForgetPassword v-if="isForget" @close="false" />
      <!--End Sign-In Section -->
      <!--Sign-Up Section -->
      <div v-if="signUp">
        <h2 class="text-gray-900 text-center mb-3 text-xl font-display font-semibold uppercase">
          Create Account on <span class="text-primary-500">ADriver</span>
        </h2>
        <p class="text-center text-gray-600 text-base font-display mb-6">
          A few clicks away from creating your first listing
        </p>
        <form action="">
          <div class="mb-[18px]">
            <label for="name" class="flex mb-2 text-sm text-gray-900">Name</label>
            <input-field id="name" type="text" placeholder="Full name" />
          </div>
          <div class="mb-[18px]">
            <label for="email" class="flex mb-2 text-sm text-gray-900">Email</label>
            <input-field id="email" type="email" placeholder="Email address" />
          </div>
          <div class="mb-[18px]">
            <label for="password" class="flex mb-2 text-sm text-gray-900">Password</label>
            <div class="relative flex">
              <input-field id="password" :type="inputType" placeholder="8 + character" />
              <label for="password" class="absolute top-3 right-4" v-if="eyeOff" @click="toggleEye">
                <eye-off />
              </label>
              <label for="password" class="absolute top-3 right-4" v-if="eyeOn" @click="toggleEye">
                <eye-on />
              </label>
            </div>
          </div>
          <div class="mb-[18px]">
            <label for="cpassword" class="flex mb-2 text-sm text-gray-900">Confirm Password</label>
            <div class="relative flex">
              <input-field id="cpassword" :type="cinputType" placeholder="8 + character" />
              <label for="cpassword" class="absolute top-3 right-4" v-if="ceyeOff" @click="ctoggleEye">
                <eye-off />
              </label>
              <label for="cpassword" class="absolute top-3 right-4" v-if="ceyeOn" @click="ctoggleEye">
                <eye-on />
              </label>
            </div>
          </div>
          <div class="custom-checkbox flex items-center text-sm text-gray-600 mb-8">
            <input-field type="checkbox" name="" id="checkbox" class="w-full" />
            <label for="checkbox" class="flex whitespace-nowrap">I agree with adriver
              <router-link to="privacy-policy" class="text-primary-500">Privacy Policy</router-link> and
              <router-link to="terms-condition" class="text-primary-500">Terms & Condition</router-link></label>
          </div>
          <div class="mb-4">
            <primary-button class="w-full">
              <span>Sign Up</span>
              <button-arrow />
            </primary-button>
          </div>
          <p class="flex justify-center items-center gap-1.5">
            Already have account!
            <button @click="toggleSignInUP" type="button" class="text-primary-500 inline-flex items-center gap-2">
              Sign In <login-icon />
            </button>
          </p>
        </form>
      </div>

      <!--End Sign-Up Section -->
      <button class="absolute right-3 top-3" @click="$emit('close')">
        <modal-close />
      </button>
    </div>
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
import ForgetPassword from "../../components/Auth/ForgetPassword.vue";
import LoginIcon from "../Icons/LoginIcon.vue"
export default {
  components: {
    PrimaryButton,
    ButtonArrow,
    SignupIcon,
    ModalClose,
    GoogleImg,
    FacebookImg,
    EyeOn,
    EyeOff,
    InputField,
    ForgetPassword,
    ForgetPassword,
    LoginIcon
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
      isForget: false,
      eyeOff: true,
      eyeOn: false,
      ceyeOff: true,
      ceyeOn: false,
      inputType: "password",
      cinputType: "password",
      signIn: true,
      signUp: false,
    };
  },
  methods: {
    fPass() {
      this.signIn = !this.signUp;
      this.isForget = !this.isForget;
    },
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
    toggleSignInUP() {
      this.signIn = !this.signIn;
      this.signUp = !this.signUp;
    },
  },
};
</script>

<style>
.popup-overlay {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5);
  display: flex;
  justify-content: center;
  align-items: center;
  z-index: 9999;
}

.dashed-bg:before,
.dashed-bg:after {
  background-image: repeating-linear-gradient(90deg,
      transparent,
      transparent 5px,
      #dee6dc 5px,
      #dee6dc 10px);
}
</style>