
  <PricingPlan v-show="isPricingPlan" @choosePlan="choosePlan" @choosePayPlan="choosePayPlan" />
  <div v-show="openCheckout">
    <div class="container">
      <div class="flex md:flex-row flex-col gap-5 pt-12 pb-9 items-center justify-center md:justify-between max-w-[872px] mx-auto">
        <h2 class="text-2xl md:text-xl md:text-[40px] md:leading-[48px] font-display font-semibold text-gray-900">
          Choose Your Payment Method
        </h2>
        <div class="md:max-w-[312px] flex items-center border border-gray-50 rounded-md p-3 md:py-3 md:px-4">
          <span>
            <payment-plan />
          </span>
          <div class="flex gap-3">
            <div>
              <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M29.3334 13.3327H2.66675M14.6667 18.666H8.00008M2.66675 10.9327L2.66675 21.066C2.66675 22.5595 2.66675 23.3062 2.9574 23.8767C3.21306 24.3784 3.62101 24.7864 4.12277 25.042C4.6932 25.3327 5.43994 25.3327 6.93341 25.3327L25.0668 25.3327C26.5602 25.3327 27.307 25.3327 27.8774 25.042C28.3792 24.7864 28.7871 24.3784 29.0428 23.8767C29.3334 23.3062 29.3334 22.5595 29.3334 21.066V10.9327C29.3334 9.43921 29.3334 8.69247 29.0428 8.12204C28.7871 7.62028 28.3792 7.21233 27.8774 6.95667C27.307 6.66602 26.5602 6.66602 25.0668 6.66602L6.93342 6.66602C5.43994 6.66602 4.69321 6.66602 4.12277 6.95666C3.62101 7.21233 3.21306 7.62028 2.9574 8.12204C2.66675 8.69247 2.66675 9.43921 2.66675 10.9327Z"
                  stroke="#99A197" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </div>
            <div class="w-[155px]">
              <p class="text-ellipsis text-xs mb-1.5font-display font-semibold text-gray-900 whitespace-nowrap">
                $12 USD/Monthly
              </p>
              <p class="text-sm text-gray-500 font-display font-normal text-ellipsis whitespace-nowrap">
                Standard Plans
              </p>
            </div>
          </div>

          <button class="gap-1 flex text-xs text-primary-500">
            <ChangePlan /><span class="uppercase font-display font-semibold">Change</span>
          </button>
        </div>
      </div>
      <CheckOutView @completeCheckout="completeCheckout" />
      <!-- <checkout-view @completeCheckout="completeCheckout" /> -->
    </div>
  </div>
  <StepOne v-show="openStepOne" @completeStepOne="completeStepOne" />
  <StepTwo v-show="openStepTwo" @completeStepTwo="completeStepTwo" />
  <StepComplete v-show="openStepComplete" @completeAllStep="completeAllStep" />
  <PayPerStepOne v-show="openPayStepOne" @completePayStepOne="completePayStepOne" />
  <PayPerStepTwo v-show="openPayStepTwo" @completePayStepTwo="completePayStepTwo" />
  <PayPerCheckout v-show="payCheckout" @completePayCheckout="completePayCheckout" />
  <PublishedPost v-show="publishedPost" />

{{-- <script>
  import ChangePlan from "../../Icons/Dashboard/ChangePlan.vue";
  import PricingPlan from "../../Pricing/PricingArea.vue";
  import CheckOutView from "../CheckoutView.vue";
  import StepOne from "./StepOne.vue";
  import PayPerStepOne from "../PayperPost/StepOne.vue";
  import StepTwo from "./StepTwo.vue";
  import PayPerStepTwo from "../PayperPost/StepTwo.vue";
  import StepComplete from "./StepComplete.vue";
  import PublishedPost from "./PublishedPost.vue";
  import PayPerCheckout from "./PayPerCheckout.vue";

  export default {
    components: {
      PricingPlan,
      CheckOutView,
      StepOne,
      StepTwo,
      ChangePlan,
      StepComplete,
      PayPerStepOne,
      PayPerStepTwo,
      PayPerCheckout,
      PublishedPost,
    },
    data() {
      return {
        isPricingPlan: true,
        openCheckout: false,
        openStepOne: false,
        openStepTwo: false,
        openStepComplete: false,
        openPayStepOne: false,
        openPayStepTwo: false,
        payCheckout: false,
        publishedPost: false,
      };
    },
    methods: {
      choosePlan() {
        this.isPricingPlan = false;
        this.openStepOne = false;
        this.openStepTwo = false;
        this.openStepComplete = false;
        this.openPayStepOne = false;
        this.openPayStepTwo = false;
        this.payCheckout = false;
        this.publishedPost = false;
        this.openCheckout = true;
      },
      choosePayPlan() {
        this.isPricingPlan = false;
        this.openStepTwo = false;
        this.openStepComplete = false;
        this.openCheckout = false;
        this.openPayStepOne = false;
        this.openPayStepTwo = false;
        this.payCheckout = false;
        this.publishedPost = false;
        this.openStepOne = true;
      },
      completeCheckout() {
        this.isPricingPlan = false;
        this.openCheckout = false;
        this.openStepTwo = false;
        this.openStepComplete = false;
        this.openPayStepOne = false;
        this.openPayStepTwo = false;
        this.payCheckout = false;
        this.publishedPost = false;
        this.openStepOne = true;
      },
      completeStepOne() {
        this.isPricingPlan = false;
        this.openCheckout = false;
        this.openStepOne = false;
        this.openStepComplete = false;
        this.openPayStepOne = false;
        this.openPayStepTwo = false;
        this.payCheckout = false;
        this.publishedPost = false;
        this.openStepTwo = true;
      },
      completeStepTwo() {
        this.isPricingPlan = false;
        this.openCheckout = false;
        this.openStepOne = false;
        this.openStepTwo = false;
        this.openPayStepOne = false;
        this.openPayStepTwo = false;
        this.payCheckout = false;
        this.publishedPost = false;
        this.openStepComplete = true;
      },
      completeAllStep() {
        this.isPricingPlan = false;
        this.openCheckout = false;
        this.openStepOne = false;
        this.openStepTwo = false;
        this.openPayStepOne = false;
        this.openPayStepTwo = false;
        this.payCheckout = false;
        this.publishedPost = false;
        this.openStepComplete = true;
      },
      choosePayPlan() {
        this.isPricingPlan = false;
        this.openStepOne = false;
        this.openStepTwo = false;
        this.openStepComplete = false;
        this.openCheckout = false;
        this.openPayStepTwo = false;
        this.payCheckout = false;
        this.publishedPost = false;
        this.openPayStepOne = true;
      },
      completePayStepOne() {
        this.isPricingPlan = false;
        this.openCheckout = false;
        this.openStepOne = false;
        this.openStepTwo = false;
        this.openStepComplete = false;
        this.openPayStepOne = false;
        this.payCheckout = false;
        this.publishedPost = false;
        this.openPayStepTwo = true;
      },
      completePayStepTwo() {
        this.isPricingPlan = false;
        this.openCheckout = false;
        this.openStepOne = false;
        this.openStepTwo = false;
        this.openStepComplete = false;
        this.openPayStepOne = false;
        this.openPayStepTwo = false;
        this.publishedPost = false;
        this.payCheckout = true;
      },
      completePayCheckout() {
        this.isPricingPlan = false;
        this.openCheckout = false;
        this.openStepOne = false;
        this.openStepTwo = false;
        this.openStepComplete = false;
        this.openPayStepOne = false;
        this.openPayStepTwo = false;
        this.payCheckout = false;
        this.publishedPost = true;
      },
    },
  };
</script> --}}
