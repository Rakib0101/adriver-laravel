<template>
  <div class="invoice" size="A4">
    <div class="invoice-header">
      <div class="container">
        <div class="py-4 flex justify-between items-center">
          <div>
            <h4 class="text-lg font-display font-semibold mb-2 text-gray-900">
              Invoice: #58185
            </h4>
            <p class="text-lg font-display font-normal text-gray-900">
              Dec 30, 2019
            </p>
          </div>
          <div>
            <primary-button>
              <download-icon />
              <span>Download</span>
            </primary-button>
          </div>
        </div>
      </div>
    </div>
    <div class="invoice-body bg-gray-50">
      <div class="container py-[88px]">
        <div class="invoice-body-top bg-primary-800 p-16">
          <div class="flex justify-between">
            <div>
              <logo-icon />
            </div>
            <div class="md:max-w-[424px] w-full">
              <div class="flex gap-6 justify-between mb-8">
                <h2 class="w-full text-white text-5xl font-display font-semibold">
                  Invoice
                </h2>
                <h2 class="w-full text-white text-5xl font-display font-semibold">
                  #58185
                </h2>
              </div>
              <div class="mb-8 text-white text-lg font-display">
                <p class="font-semibold">Issue date</p>
                <p class="font-normal">Dec 30, 2019 05:18</p>
              </div>
              <div class="flex gap-6 justify-between mb-8">
                <div class="w-full text-white text-lg font-display">
                  <h3 class="font-semibold">From</h3>
                  <p>ADRIVER</p>
                  <p>Laud Mansion Opp Charni Road, Mumbai 400004, India</p>
                </div>
                <div class="w-full text-white text-lg font-display">
                  <h3 class="font-semibold">To</h3>
                  <p>John Wick</p>
                  <p>123 Big Road Name London, WA34 3AD Chennai, India</p>
                </div>
              </div>
              <div class="flex gap-6 justify-between">
                <div class="w-full text-white text-lg font-display">
                  <h3 class="font-semibold">Company Number</h3>
                  <p>+91 385 340 6788</p>
                </div>
                <div class="w-full text-white text-lg font-display">
                  <h3 class="font-semibold">Vat Number</h3>
                  <p>394 8058 54</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="invoice-body-bottom bg-white px-[88px] pt-[88px] pb-[120px]">
          <table class="table" cellspacing="0" style="width:100%;">
            <thead>
              <tr class="border-b border-gray-900">
                <td style="width: 55%;" class="item-col text-lg text-gray-900 font-display font-semibold pb-2">Item</td>
                <td style="width: 20%;" class="cost-col text-lg text-gray-900 font-display font-semibold pb-2">Cost</td>
                <td style="width: 20%;" class="qty-col text-lg text-gray-900 font-display font-semibold pb-2">Qty</td>
                <td style="width: 5%;" class="total-col text-lg text-gray-900 font-display font-semibold pb-2">Total
                </td>
              </tr>
            </thead>
            <tbody>
              <tr class="">
                <td class="py-[17.75px] text-lg text-gray-900 font-display font-semibold">Post Listing</td>
                <td class="py-[17.75px] text-lg text-gray-900 font-display">$4.99</td>
                <td class="py-[17.75px] text-lg text-gray-900 font-display">1</td>
                <td class="py-[17.75px] text-lg text-gray-900 font-display">$4.99</td>
              </tr>
              <tr>
                <td class="pb-[17.75px] text-lg text-gray-900 font-display font-semibold">Listing Promotion - Urgents
                </td>
                <td class="pb-[17.75px] text-lg text-gray-900 font-display">$16.99</td>
                <td class="pb-[17.75px] text-lg text-gray-900 font-display">1</td>
                <td class="pb-[17.75px] text-lg text-gray-900 font-display">$16.99</td>
              </tr>
              <tr>
                <td class="pb-[17.75px] text-lg text-gray-900 font-display font-semibold">Listing Promotion - Featured
                </td>
                <td class="pb-[17.75px] text-lg text-gray-900 font-display">$37.99</td>
                <td class="pb-[17.75px] text-lg text-gray-900 font-display">1</td>
                <td class="pb-[17.75px] text-lg text-gray-900 font-display">$37.99</td>
              </tr>
              <tr>
                <td class="text-lg text-gray-900 font-display font-semibold">Listing Promotion - Top Ads</td>
                <td class="text-lg text-gray-900 font-display">$44.99</td>
                <td class="text-lg text-gray-900 font-display">1</td>
                <td class="text-lg text-gray-900 font-display">$44.99</td>
              </tr>
            </tbody>
          </table>
          <table class="w-[45%] ml-auto mt-[45px]">
            <tbody>
              <tr class="border-t border-gray-900">
                <td class="pt-2 text-lg text-gray-900 font-display font-semibold">Subtotal</td>
                <td class="pt-2 text-lg text-gray-900 font-display">$104.96</td>
              </tr>
              <tr>
                <td class="pt-2 text-lg text-gray-900 font-display font-semibold">Discount (20%)</td>
                <td class="pt-2 text-lg text-gray-900 font-display">$4.96</td>
              </tr>
              <tr>
                <td class="pt-2 text-lg text-gray-900 font-display font-semibold pb-[45px]">Subtotal</td>
                <td class="pt-2 text-lg text-gray-900 font-display pb-[45px]">$104.96</td>
              </tr>
              <tr class="border-t border-gray-900">
                <td class="pt-3 text-lg text-gray-900 font-display font-semibold">Invoice Total</td>
                <td class="pt-3 text-lg text-gray-900 font-display font-semibold">$105.24 USD</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
  import PrimaryButton from "../Button/PrimaryButton.vue";
  import DownloadIcon from "../Icons/Dashboard/DownloadIcon.vue";
  import LogoIcon from "../Icons/Dashboard/LogoIcon.vue";
</script>

<style>
  @media (max-width: 991px) {
    .invoice[size="A4"] {
      width: 21cm !important;
      height: 29.7cm !important;
      overflow: hidden !important;
      margin: auto;
    }
  }

  .invoice table tr td:last-child {
    text-align: right;
  }
</style>