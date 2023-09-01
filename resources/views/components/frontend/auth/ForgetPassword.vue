<template>
  <div class="relative w-full max-w-[488px] bg-white rounded-xl m-auto p-8">
    <div class="flex justify-center items-center mb-6">
      <forget-password />
    </div>
    <h2 class="text-gray-900 text-center mb-3 text-xl font-display font-semibold uppercase">
      Forget Password
    </h2>
    <p class="text-center text-gray-600 text-base font-display mb-6">
      Duis sed erat eu odio fringilla posuere vel non dolor. Aliquam eu velit
      condimentum, mollis nisi sed.
    </p>
    <form action="">
      <div class="mb-[18px]">
        <label for="phone" class="flex text-sm text-gray-900 mb-2">Email/Phone Number</label>
        <input-field id="phone" type="text" placeholder="Enter Phone Number" />
      </div>
      <div class="mb-4">
        <primary-button class="w-full">
          <span>Reset Password</span>
          <button-arrow />
        </primary-button>
      </div>
    </form>
  </div>
</template>

<script>
import ForgetPassword from "../Icons/ForgetPassword.vue";
import PrimaryButton from "../Button/PrimaryButton.vue";
import ButtonArrow from "../Icons/ButtonArrow.vue";
import ModalClose from "../Icons/ModalClose.vue";
import InputField from "../CustomInput/InputField.vue";

export default {
  components: {
    InputField,
    PrimaryButton,
    ForgetPassword,
    ButtonArrow,
    ModalClose,
  },
};
</script>
