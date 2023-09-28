<div x-data="data" x-cloak>
    <div x-cloak x-show="isPricingPlan">
        <x-frontend.pricing.pricing-area />
    </div>
    <div x-cloak x-show="openCheckout">
        <div class="container">
            <div
                class="flex md:flex-row flex-col gap-5 pt-12 pb-9 items-center justify-center md:justify-between max-w-[872px] mx-auto">
                <h2
                    class="text-2xl md:text-xl md:text-[40px] md:leading-[48px] font-display font-semibold text-gray-900">
                    Choose Your Payment Method
                </h2>
                <div class="md:max-w-[312px] flex items-center border border-gray-50 rounded-md p-3 md:py-3 md:px-4">
                    <span>
                        <payment-plan />
                    </span>
                    <div class="flex gap-3">
                        <div>
                            <i class="ph ph-credit-card text-[32px] text-gray-500"></i>
                        </div>
                        <div class="w-[155px]">
                            <p
                                class="text-ellipsis text-xs mb-1.5font-display font-semibold text-gray-900 whitespace-nowrap">
                                $12 USD/Monthly
                            </p>
                            <p class="text-sm text-gray-500 font-display font-normal text-ellipsis whitespace-nowrap">
                                Standard Plans
                            </p>
                        </div>
                    </div>

                    <button class="gap-1 inline-flex items-center text-xs text-primary-500">
                        <i class="ph ph-pencil-line text-xl"></i>
                        <span class="uppercase font-display font-semibold">Change</span>
                    </button>
                </div>
            </div>
            <x-frontend.dashboard.checkout-view />
        </div>
    </div>
    <div x-cloak x-show="openStepOne">
        <x-frontend.dashboard.ad-post.step-one />
    </div>
    <div x-cloak x-show="openStepTwo">
        <x-frontend.dashboard.ad-post.step-two />
    </div>
    <div x-cloak x-show="openStepComplete">
        <x-frontend.dashboard.ad-post.step-complete />
    </div>
    <div x-cloak x-show="openPayStepOne">
        <x-frontend.dashboard.payper-post.step-one />
    </div>
    <div x-cloak x-show="openPayStepTwo">
        <x-frontend.dashboard.payper-post.step-two />
    </div>
    <div x-cloak x-show="payCheckout">
        <x-frontend.dashboard.payper-post.payper-checkout />
    </div>
    <div x-cloak x-show="publishedPost">
        <x-frontend.dashboard.payper-post.published-post />
    </div>
</div>

@push('component_scripts')
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('data', () => ({
                isPricingPlan: true,
                openCheckout: false,
                openStepOne: false,
                openStepTwo: false,
                openStepComplete: false,
                openPayStepOne: false,
                openPayStepTwo: false,
                payCheckout: false,
                publishedPost: false,
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
            }))
        })
    </script>
@endpush
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
