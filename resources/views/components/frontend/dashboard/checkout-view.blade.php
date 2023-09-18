
  <div>
    <div class="container">
      <div class="max-w-[872px] mx-auto">
        <div class="lg:pb-[100px]">
          <div>
            <h3 class="text-lg mb-4 text-center md:text-start font-display font-medium text-gray-900">
              Payment Method
            </h3>
            <div class="flex mb-8 gap-4 justify-center flex-wrap">
              <div class="payment-box relative w-[160px] h-[108px]">
                <input type="radio" hidden checked name="payment-method" id="debit-card" />
                <label for="debit-card"
                  class="payment-method flex flex-col justify-center items-center cursor-pointer rounded-lg border border-gray-100 absolute top-0 left-0 w-full h-full">
                  <img :src="PaymentMethod01" alt="" />
                  <p>Debit/Credit Card</p>
                </label>
              </div>
              <div class="payment-box relative w-[160px] h-[108px]">
                <input type="radio" hidden name="payment-method" id="bank" />
                <label for="bank"
                  class="payment-method flex flex-col justify-center items-center cursor-pointer rounded-lg border border-gray-100 absolute top-0 left-0 w-full h-full">
                  <img :src="PaymentMethod02" alt="" />
                  <p>Offline/Bank</p>
                </label>
              </div>
              <div class="payment-box relative w-[160px] h-[108px]">
                <input type="radio" hidden name="payment-method" id="paypal" />
                <label for="paypal"
                  class="payment-method flex flex-col justify-center items-center cursor-pointer rounded-lg border border-gray-100 absolute top-0 left-0 w-full h-full">
                  <img :src="PaymentMethod03" alt="" />
                  <p>Paypal</p>
                </label>
              </div>
              <div class="payment-box relative w-[160px] h-[108px]">
                <input type="radio" hidden name="payment-method" id="razorpay" />
                <label for="razorpay"
                  class="payment-method flex flex-col justify-center items-center cursor-pointer rounded-lg border border-gray-100 absolute top-0 left-0 w-full h-full">
                  <img :src="PaymentMethod04" alt="" />
                  <p>Razorpay</p>
                </label>
              </div>
              <div class="payment-box relative w-[160px] h-[108px]">
                <input type="radio" hidden name="payment-method" id="paystack" />
                <label for="paystack"
                  class="payment-method flex flex-col justify-center items-center cursor-pointer rounded-lg border border-gray-100 absolute top-0 left-0 w-full h-full">
                  <img :src="PaymentMethod05" alt="" />
                  <p>Paystack</p>
                </label>
              </div>
              <div class="payment-box relative w-[160px] h-[108px]">
                <input type="radio" hidden name="payment-method" id="stripe" />
                <label for="stripe"
                  class="payment-method flex flex-col justify-center items-center cursor-pointer rounded-lg border border-gray-100 absolute top-0 left-0 w-full h-full">
                  <img :src="PaymentMethod06" alt="" />
                  <p>Stripe</p>
                </label>
              </div>
              <div class="payment-box relative w-[160px] h-[108px]">
                <input type="radio" hidden name="payment-method" id="sslcommerz" />
                <label for="sslcommerz"
                  class="payment-method flex flex-col justify-center items-center cursor-pointer rounded-lg border border-gray-100 absolute top-0 left-0 w-full h-full">
                  <img :src="PaymentMethod07" alt="" />
                  <p>SSLCommerz</p>
                </label>
              </div>
              <div class="payment-box relative w-[160px] h-[108px]">
                <input type="radio" hidden name="payment-method" id="instamojo" />
                <label for="instamojo"
                  class="payment-method flex flex-col justify-center items-center cursor-pointer rounded-lg border border-gray-100 absolute top-0 left-0 w-full h-full">
                  <img :src="PaymentMethod08" alt="" />
                  <p>Instamojo</p>
                </label>
              </div>
              <div class="payment-box relative w-[160px] h-[108px]">
                <input type="radio" hidden name="payment-method" id="midtrans" />
                <label for="midtrans"
                  class="payment-method flex flex-col justify-center items-center cursor-pointer rounded-lg border border-gray-100 absolute top-0 left-0 w-full h-full">
                  <img :src="PaymentMethod09" alt="" />
                  <p>Midtrans</p>
                </label>
              </div>
              <div class="payment-box relative w-[160px] h-[108px]">
                <input type="radio" hidden name="payment-method" id="flutterwave" />
                <label for="flutterwave"
                  class="payment-method flex flex-col justify-center items-center cursor-pointer rounded-lg border border-gray-100 absolute top-0 left-0 w-full h-full">
                  <img :src="PaymentMethod10" alt="" />
                  <p>Flutterwave</p>
                </label>
              </div>
            </div>
            <div class="bg-gray-50 p-8 rounded-xl mb-8">
              <h2 class="text-lg font-display font-semibold text-gray-900 mb-18">
                Debit/Credit Card
              </h2>
              <form action="">
                <div class="mb-[18px] relative">
                  <label class="flex w-full text-sm mb-2 font-display font-normal text-gray-900" for="card-num">Card
                    Number</label>
                  <input
                    class="flex w-full pl-[54px] pr-3 py-3 rounded-md shadow-[0p_3px_14px_rgba(23,30,21,0.03)] outline-none focus:border-primary-500 focus:shadow-[0px_8px_24px_rgba(88,179,43,0.12)] border border-gray-100"
                    type="text" placeholder="Enter Number ..." />
                  <label for="card-num" class="absolute bottom-3 left-[18px]"><credit-card /></label>
                </div>
                <div class="grid lg:grid-cols-3 grid-cols-1 gap-[18px]">
                  <div>
                    <label class="flex w-full text-sm mb-2 font-display font-normal text-gray-900" for="card-num">Name
                      on Card</label>
                    <input
                      class="flex w-full px-3 py-3 rounded-md shadow-[0p_3px_14px_rgba(23,30,21,0.03)] outline-none focus:border-primary-500 focus:shadow-[0px_8px_24px_rgba(88,179,43,0.12)] border border-gray-100"
                      type="text" placeholder="Enter Number ..." />
                  </div>
                  <div>
                    <label class="flex w-full text-sm mb-2 font-display font-normal text-gray-900" for="card-num">Expiry
                      Date</label>
                    <input
                      class="flex w-full px-3 py-3 rounded-md shadow-[0p_3px_14px_rgba(23,30,21,0.03)] outline-none focus:border-primary-500 focus:shadow-[0px_8px_24px_rgba(88,179,43,0.12)] border border-gray-100"
                      type="date" placeholder="MM/YY" />
                  </div>
                  <div class="relative">
                    <label class="flex w-full text-sm mb-2 font-display font-normal text-gray-900" for="cvc">CVC</label>
                    <input
                      class="flex w-full px-3 py-3 rounded-md shadow-[0p_3px_14px_rgba(23,30,21,0.03)] outline-none focus:border-primary-500 focus:shadow-[0px_8px_24px_rgba(88,179,43,0.12)] border border-gray-100"
                      id="cvc" type="text" />
                    <label for="cvc" class="absolute bottom-3 right-[18px]"><question-mark /></label>
                  </div>
                </div>
              </form>
            </div>
            <div class="md:flex justify-end" v-if="!payCheckout">
              <primary-button @click="$emit('completeCheckout')" class="w-full md:w-max">
                <span>confirm & Checkout</span>
                <button-arrow />
              </primary-button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

{{-- <script setup>
  import PaymentPlan from "../Icons/Dashboard/PaymentPlan.vue";
  import ChangePlan from "../Icons/Dashboard/ChangePlan.vue";
  import PaymentMethod01 from "../../assets/images/img/payment-method-01.png";
  import PaymentMethod02 from "../../assets/images/img/payment-method-02.png";
  import PaymentMethod03 from "../../assets/images/img/payment-method-03.png";
  import PaymentMethod04 from "../../assets/images/img/payment-method-04.png";
  import PaymentMethod05 from "../../assets/images/img/payment-method-05.png";
  import PaymentMethod06 from "../../assets/images/img/payment-method-06.png";
  import PaymentMethod07 from "../../assets/images/img/payment-method-07.png";
  import PaymentMethod08 from "../../assets/images/img/payment-method-08.png";
  import PaymentMethod09 from "../../assets/images/img/payment-method-09.png";
  import PaymentMethod10 from "../../assets/images/img/payment-method-10.png";
  import CreditCard from "../Icons/Dashboard/CreditCard.vue";
  import QuestionMark from "../Icons/Dashboard/QuestionMark.vue";
  import PrimaryButton from "../Button/PrimaryButton.vue";
  import ButtonArrow from "../Icons/ButtonArrow.vue";
  const props = defineProps({
    payCheckout: {
      type: Boolean,
      default: false,
    },
  });
</script> --}}
<style>
  .payment-box input:checked+.payment-method {
    background: #eef7ea;
    border: 2px solid #58b32b;
  }
</style>
