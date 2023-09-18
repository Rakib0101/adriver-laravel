<div class="pt-12">
    <div class="container">
        <div class="border border-gray-100 shadow-[0px_8px_24px_rgba(23,30,21,0.04)] rounded-xl py-6">
            <h2 class="text-2xl text-gray-900 font-display font-semibold px-6 mb-4">
                Latest Invoice
            </h2>
            <div class="overflow-auto scrollbar-hide">
                <table class="listing-table table-auto w-full responsive overflow-auto scrollbar-hide">
                    <thead>
                        <tr>
                            <th
                                class="px-6 py-2 bg-gray-50 text-start text-xs text-gray-500 font-display font-medium min-w-[116px]">
                                ID
                            </th>
                            <th
                                class="pr-6 py-2 bg-gray-50 text-start text-xs text-gray-500 font-display font-medium min-w-[172px]">
                                Date
                            </th>
                            <th
                                class="pr-6 py-2 bg-gray-50 text-start text-xs text-gray-500 font-display font-medium min-w-[108px]">
                                Amount
                            </th>
                            <th
                                class="pr-6 py-2 bg-gray-50 text-start text-xs text-gray-500 font-display font-medium min-w-[125px]">
                                Status
                            </th>
                            <th
                                class="pr-6 py-2 bg-gray-50 text-start text-xs text-gray-500 font-display font-medium min-w-[196px]">
                                Type
                            </th>
                            <th
                                class="pr-6 py-2 bg-gray-50 text-start text-xs text-gray-500 font-display font-medium min-w-[196px]">
                                Payment Method
                            </th>
                            <th
                                class="pr-6 py-2 bg-gray-50 text-start text-xs text-gray-500 font-display font-medium min-w-[167px]">
                                Action
                            </th>
                            <th
                                class="pr-6 py-2 bg-gray-50 text-start text-xs text-gray-500 font-display font-medium min-w-[48px]">
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="hover:bg-gray-50 transition-all duration-300">
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-1.5 text-sm text-gray-900 font-semibold font-display">
                                    <i class="ph ph-queue text-xl leading-5"></i>
                                    <span>ID58185</span>
                                </div>
                            </td>
                            <td class="pr-6 py-4">
                                <p class="text-sm text-gray-700">Dec 30, 2019 05:18</p>
                            </td>
                            <td class="pr-6 py-4">
                                <p class="text-base font-display font-medium text-warning-500">
                                    $39.00
                                </p>
                            </td>
                            <td class="pr-6 py-4">
                                <span class="bg-warning-50 rounded-[3px] uppercase text-sm font-display font-semibold text-warning-500 px-2 py-1.5">pending</span>
                            </td>
                            <td class="pr-6 py-4">
                                <div class="flex gap-1 items-center">
                                    <i class="ph ph-credit-card text-xl leading-5 text-blue-500"></i>
                                    <p class="text-gray-900 text-sm font-semibold text-ellipsis whitespace-nowrap">
                                        Pricing Plan (Standard)
                                    </p>
                                </div>
                            </td>
                            <td class="pr-6 py-4">
                                <p
                                    class="text-sm flex gap-2 items-center font-display text-gray-900 text-ellipsis whitespace-nowrap">
                                    <img class="w-6 h-6" src="{{ asset('frontend/assets/images/img/mastercard.png') }}" alt="" />
                                    Debit Card
                                </p>
                            </td>
                            <td class="pr-6 py-4">
                                <a href="/invoice-details"
                                    class="invoice-detail whitespace-nowrap text-ellipsis bg-primary-50 border-2 border-transparent hover:border-primary-500 max-h-12 px-5 rounded-md inline-flex justify-center items-center gap-2 font-display uppercase text-primary-500 font-semibold text-sm leading-[48px] tracking-[-0.01em] transition-all duration-300">
                                    Invoice Detail
                                </a>
                            </td>
                            <td class="pr-6 py-4">
                                <button class="download-btn w-12 h-12 inline-flex justify-center items-center border-2 border-primary-500 text-primary-500 rounded-md hover:bg-primary-500 hover:text-white transition-all duration-300">
                                    <i class="ph-bold ph-download-simple text-2xl leading-6"></i>
                                </button>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-50 transition-all duration-300">
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-1.5 text-sm text-gray-900 font-semibold font-display">
                                    <i class="ph ph-queue text-xl leading-5"></i>
                                    <span>ID58185</span>
                                </div>
                            </td>
                            <td class="pr-6 py-4">
                                <p class="text-sm text-gray-700">Dec 30, 2019 05:18</p>
                            </td>
                            <td class="pr-6 py-4">
                                <p class="text-base font-display font-medium text-warning-500">
                                    $39.00
                                </p>
                            </td>
                            <td class="pr-6 py-4">
                                <span
                                    class="bg-primary-50 rounded-[3px] uppercase text-sm font-display font-semibold text-primary-500 px-2 py-1.5">paid</span>
                            </td>
                            <td class="pr-6 py-4">
                                <div class="flex gap-1 items-center">
                                    <i class="ph ph-currency-dollar text-xl leading-5 text-blue-500"></i>
                                    <p class="text-gray-900 text-sm font-semibold text-ellipsis whitespace-nowrap">
                                        Pay Per Listing
                                    </p>
                                </div>
                            </td>
                            <td class="pr-6 py-4">
                                <p
                                    class="text-sm flex gap-2 items-center font-display text-gray-900 text-ellipsis whitespace-nowrap">
                                    <img class="w-6 h-6" src="{{ asset('frontend/assets/images/img/ebl-bank.png') }}" alt="" />
                                    EBL Bank
                                </p>
                            </td>
                            <td class="pr-6 py-4">
                                <a href="/invoice-details"
                                    class="invoice-detail whitespace-nowrap text-ellipsis bg-primary-50 border-2 border-transparent hover:border-primary-500 max-h-12 px-5 rounded-md inline-flex justify-center items-center gap-2 font-display uppercase text-primary-500 font-semibold text-sm leading-[48px] tracking-[-0.01em] transition-all duration-300">
                                    Invoice Detail
                                </a>
                            </td>
                            <td class="pr-6 py-4">
                                <button
                                    class="download-btn w-12 h-12 inline-flex justify-center items-center border-2 border-primary-500 text-primary-500 rounded-md hover:bg-primary-500 hover:text-white transition-all duration-300">
                                    <i class="ph-bold ph-download-simple text-2xl leading-6"></i>
                                </button>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-50 transition-all duration-300">
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-1.5 text-sm text-gray-900 font-semibold font-display">
                                    <i class="ph ph-queue text-xl leading-5"></i>
                                    <span>ID58185</span>
                                </div>
                            </td>
                            <td class="pr-6 py-4">
                                <p class="text-sm text-gray-700">Dec 30, 2019 05:18</p>
                            </td>
                            <td class="pr-6 py-4">
                                <p class="text-base font-display font-medium text-warning-500">
                                    $39.00
                                </p>
                            </td>
                            <td class="pr-6 py-4">
                                <span
                                    class="bg-primary-50 rounded-[3px] uppercase text-sm font-display font-semibold text-primary-500 px-2 py-1.5">paid</span>
                            </td>
                            <td class="pr-6 py-4">
                                <div class="flex gap-1 items-center">
                                    <i class="ph ph-arrow-fat-up text-xl leading-5 text-blue-500"></i>
                                    <p class="text-gray-900 text-sm font-semibold text-ellipsis whitespace-nowrap">
                                        Listing Promotion
                                    </p>
                                </div>
                            </td>
                            <td class="pr-6 py-4">
                                <p class="text-sm flex gap-2 items-center font-display text-gray-900 text-ellipsis whitespace-nowrap">
                                    <img class="w-6 h-6" src="{{ asset('frontend/assets/images/img/city-bank.png') }}" alt="" />
                                    City Bank
                                </p>
                            </td>
                            <td class="pr-6 py-4">
                                <a href="/invoice-details"
                                    class="invoice-detail whitespace-nowrap text-ellipsis bg-primary-50 border-2 border-transparent hover:border-primary-500 max-h-12 px-5 rounded-md inline-flex justify-center items-center gap-2 font-display uppercase text-primary-500 font-semibold text-sm leading-[48px] tracking-[-0.01em] transition-all duration-300">
                                    Invoice Detail
                                </a>
                            </td>
                            <td class="pr-6 py-4">
                                <button
                                    class="download-btn w-12 h-12 inline-flex justify-center items-center border-2 border-primary-500 text-primary-500 rounded-md hover:bg-primary-500 hover:text-white transition-all duration-300">
                                    <i class="ph-bold ph-download-simple text-2xl leading-6"></i>
                                </button>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-50 transition-all duration-300">
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-1.5 text-sm text-gray-900 font-semibold font-display">
                                    <i class="ph ph-queue text-xl leading-5"></i>
                                    <span>ID58185</span>
                                </div>
                            </td>
                            <td class="pr-6 py-4">
                                <p class="text-sm text-gray-700">Dec 30, 2019 05:18</p>
                            </td>
                            <td class="pr-6 py-4">
                                <p class="text-base font-display font-medium text-warning-500">
                                    $39.00
                                </p>
                            </td>
                            <td class="pr-6 py-4">
                                <span
                                    class="bg-blue-50 rounded-[3px] uppercase text-sm font-display font-semibold text-blue-500 px-2 py-1.5">unpaid</span>
                            </td>
                            <td class="pr-6 py-4">
                                <div class="flex gap-1 items-center">
                                    <currency-icon class="text-blue-500" />
                                    <p class="text-gray-900 text-sm font-semibold text-ellipsis whitespace-nowrap">
                                        Pay Per Listing
                                    </p>
                                </div>
                            </td>
                            <td class="pr-6 py-4">
                                <p
                                    class="text-sm flex gap-2 items-center font-display text-gray-900 text-ellipsis whitespace-nowrap">
                                    <img class="w-6 h-6" src="{{ asset('frontend/assets/images/img/ebl-bank.png') }}" alt="" />
                                    EBL Bank
                                </p>
                            </td>
                            <td class="pr-6 py-4">
                                <a href="/invoice-details"
                                    class="invoice-detail whitespace-nowrap text-ellipsis bg-primary-50 border-2 border-transparent hover:border-primary-500 max-h-12 px-5 rounded-md inline-flex justify-center items-center gap-2 font-display uppercase text-primary-500 font-semibold text-sm leading-[48px] tracking-[-0.01em] transition-all duration-300">
                                    Invoice Detail
                                </a>
                            </td>
                            <td class="pr-6 py-4">
                                <button
                                    class="download-btn w-12 h-12 inline-flex justify-center items-center border-2 border-primary-500 text-primary-500 rounded-md hover:bg-primary-500 hover:text-white transition-all duration-300">
                                    <i class="ph-bold ph-download-simple text-2xl leading-6"></i>
                                </button>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-50 transition-all duration-300">
                            <td class="px-6 py-4">
                                <div
                                    class="flex items-center gap-1.5 text-sm text-gray-900 font-semibold font-display">
                                    <i class="ph ph-queue text-xl leading-5"></i>
                                    <span>ID58185</span>
                                </div>
                            </td>
                            <td class="pr-6 py-4">
                                <p class="text-sm text-gray-700">Dec 30, 2019 05:18</p>
                            </td>
                            <td class="pr-6 py-4">
                                <p class="text-base font-display font-medium text-warning-500">
                                    $39.00
                                </p>
                            </td>
                            <td class="pr-6 py-4">
                                <span
                                    class="bg-primary-50 rounded-[3px] uppercase text-sm font-display font-semibold text-primary-500 px-2 py-1.5">paid</span>
                            </td>
                            <td class="pr-6 py-4">
                                <div class="flex gap-1 items-center">
                                    <i class="ph ph-credit-card text-xl leading-5 text-blue-500"></i>
                                    <p class="text-gray-900 text-sm font-semibold text-ellipsis whitespace-nowrap">
                                        Pricing Plan (Standard)
                                    </p>
                                </div>
                            </td>
                            <td class="pr-6 py-4">
                                <p
                                    class="text-sm flex gap-2 items-center font-display text-gray-900 text-ellipsis whitespace-nowrap">
                                    <img class="w-6 h-6" src="{{ asset('frontend/assets/images/img/mastercard.png') }}" alt="" />
                                    Debit Card
                                </p>
                            </td>
                            <td class="pr-6 py-4">
                                <a href="/invoice-details"
                                    class="invoice-detail whitespace-nowrap text-ellipsis bg-primary-50 border-2 border-transparent hover:border-primary-500 max-h-12 px-5 rounded-md inline-flex justify-center items-center gap-2 font-display uppercase text-primary-500 font-semibold text-sm leading-[48px] tracking-[-0.01em] transition-all duration-300">
                                    Invoice Detail
                                </a>
                            </td>
                            <td class="pr-6 py-4">
                                <button
                                    class="download-btn w-12 h-12 inline-flex justify-center items-center border-2 border-primary-500 text-primary-500 rounded-md hover:bg-primary-500 hover:text-white transition-all duration-300">
                                    <i class="ph-bold ph-download-simple text-2xl leading-6"></i>
                                </button>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-50 transition-all duration-300">
                            <td class="px-6 py-4">
                                <div
                                    class="flex items-center gap-1.5 text-sm text-gray-900 font-semibold font-display">
                                    <i class="ph ph-queue text-xl leading-5"></i>
                                    <span>ID58185</span>
                                </div>
                            </td>
                            <td class="pr-6 py-4">
                                <p class="text-sm text-gray-700">Dec 30, 2019 05:18</p>
                            </td>
                            <td class="pr-6 py-4">
                                <p class="text-base font-display font-medium text-warning-500">
                                    $39.00
                                </p>
                            </td>
                            <td class="pr-6 py-4">
                                <span
                                    class="bg-primary-50 rounded-[3px] uppercase text-sm font-display font-semibold text-primary-500 px-2 py-1.5">paid</span>
                            </td>
                            <td class="pr-6 py-4">
                                <div class="flex gap-1 items-center">
                                    <i class="ph ph-credit-card text-xl leading-5 text-blue-500"></i>
                                    <p class="text-gray-900 text-sm font-semibold text-ellipsis whitespace-nowrap">
                                        Pricing Plan (Basic)
                                    </p>
                                </div>
                            </td>
                            <td class="pr-6 py-4">
                                <p
                                    class="text-sm flex gap-2 items-center font-display text-gray-900 text-ellipsis whitespace-nowrap">
                                    <img class="w-6 h-6" src="{{ asset('frontend/assets/images/img/mastercard.png') }}" alt="" />
                                    Debit Card
                                </p>
                            </td>
                            <td class="pr-6 py-4">
                                <a href="/invoice-details"
                                    class="invoice-detail whitespace-nowrap text-ellipsis bg-primary-50 border-2 border-transparent hover:border-primary-500 max-h-12 px-5 rounded-md inline-flex justify-center items-center gap-2 font-display uppercase text-primary-500 font-semibold text-sm leading-[48px] tracking-[-0.01em] transition-all duration-300">
                                    Invoice Detail
                                </a>
                            </td>
                            <td class="pr-6 py-4">
                                <button class="download-btn w-12 h-12 inline-flex justify-center items-center border-2 border-primary-500 text-primary-500 rounded-md hover:bg-primary-500 hover:text-white transition-all duration-300">
                                    <i class="ph-bold ph-download-simple text-2xl leading-6"></i>
                                </button>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-50 transition-all duration-300">
                            <td class="px-6 py-4">
                                <div
                                    class="flex items-center gap-1.5 text-sm text-gray-900 font-semibold font-display">
                                    <i class="ph ph-queue text-xl leading-5"></i>
                                    <span>ID58185</span>
                                </div>
                            </td>
                            <td class="pr-6 py-4">
                                <p class="text-sm text-gray-700">Dec 30, 2019 05:18</p>
                            </td>
                            <td class="pr-6 py-4">
                                <p class="text-base font-display font-medium text-warning-500">
                                    $39.00
                                </p>
                            </td>
                            <td class="pr-6 py-4">
                                <span
                                    class="bg-danger-50 rounded-[3px] uppercase text-sm font-display font-semibold text-danger-500 px-2 py-1.5">cancel</span>
                            </td>
                            <td class="pr-6 py-4">
                                <div class="flex gap-1 items-center">
                                    <listing-promotion class="text-blue-500" />
                                    <p class="text-gray-900 text-sm font-semibold text-ellipsis whitespace-nowrap">
                                        Listing Promotion
                                    </p>
                                </div>
                            </td>
                            <td class="pr-6 py-4">
                                <p class="text-sm flex gap-2 items-center font-display text-gray-900 text-ellipsis whitespace-nowrap">
                                    <img class="w-6 h-6" src="{{ asset('frontend/assets/images/img/ebl-bank.png') }}" alt="" />
                                    EBL Bank
                                </p>
                            </td>
                            <td class="pr-6 py-4">
                                <a href="/invoice-details"
                                    class="invoice-detail whitespace-nowrap text-ellipsis bg-primary-50 border-2 border-transparent hover:border-primary-500 max-h-12 px-5 rounded-md inline-flex justify-center items-center gap-2 font-display uppercase text-primary-500 font-semibold text-sm leading-[48px] tracking-[-0.01em] transition-all duration-300">
                                    Invoice Detail
                                </a>
                            </td>
                            <td class="pr-6 py-4">
                                <button class="download-btn w-12 h-12 inline-flex justify-center items-center border-2 border-primary-500 text-primary-500 rounded-md hover:bg-primary-500 hover:text-white transition-all duration-300">
                                    <i class="ph-bold ph-download-simple text-2xl leading-6"></i>
                                </button>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-50 transition-all duration-300">
                            <td class="px-6 py-4">
                                <div
                                    class="flex items-center gap-1.5 text-sm text-gray-900 font-semibold font-display">
                                    <i class="ph ph-queue text-xl leading-5"></i>
                                    <span>ID58185</span>
                                </div>
                            </td>
                            <td class="pr-6 py-4">
                                <p class="text-sm text-gray-700">Dec 30, 2019 05:18</p>
                            </td>
                            <td class="pr-6 py-4">
                                <p class="text-base font-display font-medium text-warning-500">
                                    $39.00
                                </p>
                            </td>
                            <td class="pr-6 py-4">
                                <span
                                    class="bg-primary-50 rounded-[3px] uppercase text-sm font-display font-semibold text-primary-500 px-2 py-1.5">paid</span>
                            </td>
                            <td class="pr-6 py-4">
                                <div class="flex gap-1 items-center">
                                    <i class="ph ph-credit-card text-xl leading-5 text-blue-500"></i>
                                    <p class="text-gray-900 text-sm font-semibold text-ellipsis whitespace-nowrap">
                                        Pricing Plan (Premium)
                                    </p>
                                </div>
                            </td>
                            <td class="pr-6 py-4">
                                <p
                                    class="text-sm flex gap-2 items-center font-display text-gray-900 text-ellipsis whitespace-nowrap">
                                    <img class="w-6 h-6" src="{{ asset('frontend/assets/images/img/city-bank.png') }}" alt="" />
                                    City Bank
                                </p>
                            </td>
                            <td class="pr-6 py-4">
                                <a href="/invoice-details"
                                    class="invoice-detail whitespace-nowrap text-ellipsis bg-primary-50 border-2 border-transparent hover:border-primary-500 max-h-12 px-5 rounded-md inline-flex justify-center items-center gap-2 font-display uppercase text-primary-500 font-semibold text-sm leading-[48px] tracking-[-0.01em] transition-all duration-300">
                                    Invoice Detail
                                </a>
                            </td>
                            <td class="pr-6 py-4">
                                <button class="download-btn w-12 h-12 inline-flex justify-center items-center border-2 border-primary-500 text-primary-500 rounded-md hover:bg-primary-500 hover:text-white transition-all duration-300">
                                    <i class="ph-bold ph-download-simple text-2xl leading-6"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <x-frontend.pagination.pagination-view />
        </div>
    </div>
</div>

{{-- <script setup>
  import CreditCard from "../Icons/Profile/CreditCard.vue";
  import ListingPromotion from "../Icons/Dashboard/ListingPromotion.vue";
  import CurrencyIcon from "../Icons/Dashboard/CurrencyIcon.vue";
  import TableId from "../Icons/Dashboard/TableId.vue";
  import MasterCard from "../../assets/images/img/mastercard.png";
  import CityBank from "../../assets/images/img/city-bank.png";
  import EblBank from "../../assets/images/img/ebl-bank.png";
  import PrimaryButton from "../Button/PrimaryButton.vue";
  import DownloadIcon from "../Icons/Dashboard/DownloadIcon.vue";
  import PaginationIndex from "../Pagination/PaginationIndex.vue";
</script> --}}
<style>
    .listing-table tbody tr:hover .download-btn {
        color: white;
        background: #58b32b;
    }

    .listing-table tbody tr:hover .invoice-detail {
        border-color: #58b32b;
        background: transparent;
    }
</style>
