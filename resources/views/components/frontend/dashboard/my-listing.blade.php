<div x-data="data">
    <div class="border border-gray-100 my-12 shadow-[0px_8px_24px_rgba(23,30,21,0.04)] rounded-xl py-6">
        <h2 class="text-lg text-gray-900 font-display font-semibold px-6 mb-4">
            Active Listing
        </h2>
        <div class="overflow-x-auto scrollbar-hide">
            <table class="listing-table table-auto w-full responsive-table">
                <thead>
                    <tr class="uppercase">
                        <th
                            class="px-6 py-2 bg-gray-50 text-start text-xs text-gray-500 font-display font-medium min-w-[364px]">
                            AD
                        </th>
                        <th
                            class="pr-6 py-2 bg-gray-50 text-start text-xs text-gray-500 font-display font-medium min-w-[124px]">
                            Price
                        </th>
                        <th
                            class="pr-6 py-2 bg-gray-50 text-start text-xs text-gray-500 font-display font-medium min-w-[170px]">
                            Ad Status
                        </th>
                        <th
                            class="pr-6 py-2 bg-gray-50 text-start text-xs text-gray-500 font-display font-medium min-w-[148px]">
                            Plan Type
                        </th>
                        <th
                            class="pr-6 py-2 bg-gray-50 text-start text-xs text-gray-500 font-display font-medium min-w-[148px]">
                            Ad Type
                        </th>
                        <th
                            class="pr-6 py-2 bg-gray-50 text-start text-xs text-gray-500 font-display font-medium min-w-[148px]">
                            Post Date
                        </th>
                        <th
                            class="pr-6 py-2 bg-gray-50 text-start text-xs text-gray-500 font-display font-medium min-w-10">
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <template x-for="(item, index) in 6" :key="item">
                        <tr class="hover:bg-gray-50 transition-all duration-300">
                            <td class="px-6 py-4 w-[364px]">
                                <div class="flex items-center gap-3">
                                    <img src="{{ asset('frontend/assets/images/img/active-list-01.png') }}"
                                        alt="" class="w-24 h-[74px] rounded object-cover" />
                                    <div>
                                        <h2
                                            class="text-gray-900 text-base font-medium font-display mb-1.5 line-clamp-2">
                                            Simple Mobile 5G LTE Galexy 12 Mini 512GB Gaming Phone
                                        </h2>
                                        <p class="text-sm font-display text-gray-500 text-ellipsis whitespace-nowrap">
                                            Vijayawada, Andra Pradesh, India
                                        </p>
                                    </div>
                                </div>
                            </td>
                            <td class="pr-6 py-4 w-[124px]">
                                <div>
                                    <h2
                                        class="text-xl text-warning-500 font-display font-semibold mb-1.5 text-ellipsis whitespace-nowrap">
                                        $211.68
                                    </h2>
                                    <p class="text-sm font-display text-gray-500 text-ellipsis whitespace-nowrap">
                                        Fixed Price
                                    </p>
                                </div>
                            </td>
                            <td class="pr-6 py-4 w-[170px]">
                                <div>
                                    <h2
                                        class="text-sm flex gap-1 items-center text-primary-500 font-display font-semibold mb-1.5 text-ellipsis whitespace-nowrap">
                                        <check-icon /> Active
                                    </h2>
                                    <p class="text-sm font-display text-gray-500 text-ellipsis whitespace-nowrap">
                                        Sold in 15 Sept, 2023
                                    </p>
                                </div>
                            </td>
                            <td class="pr-6 py-4 w-[148px]">
                                <div class="flex gap-2 text-[#1F85E2]">
                                    <credit-card />
                                    <div>
                                        <p
                                            class="text-xs text-gray-500 font-display mb-0.5 text-ellipsis whitespace-nowrap">
                                            Pricing Plan
                                        </p>
                                        <h2
                                            class="text-sm text-gray-900 font-display font-medium text-ellipsis whitespace-nowrap">
                                            Standard Plan
                                        </h2>
                                    </div>
                                </div>
                            </td>
                            <td class="pr-6 py-4 w-[148px]">
                                <div class="flex gap-1 items-center">
                                    <tag-icon />
                                    <p class="text-primary-500 text-sm font-semibold text-ellipsis whitespace-nowrap">
                                        For Sale
                                    </p>
                                </div>
                            </td>
                            <td class="pr-6 py-4 w-[148px]">
                                <p class="text-sm font-display text-gray-500 text-ellipsis whitespace-nowrap">
                                    Aug 07, 2019
                                </p>
                            </td>
                            <td class="pr-6 py-4 w-10 dropdown-btn">
                                <button @click="toggleDropdown(index)"
                                    class="p-3 relative bg-gray-50 border border-gray-50 w-12 h-12 rounded-md hover:bg-white hover:border-primary-500 dot">
                                    <i class="ph-bold ph-dots-three text-2xl leading-6"></i>
                                    <div x-show="activeDropdown === index"
                                        class="dropdown-list py-3 bg-white w-[248px] mt-3 shadow-[0px_12px_32px_rgba(23,30,21,0.08)] border border-gray-100 absolute right-0 top-full rounded-md z-50">
                                        <ul>
                                            <li
                                                class="flex px-[18px] py-2 items-center gap-2 hover:bg-gray-50 text-gray-600 hover:text-gray-900">
                                                <i class="ph ph-x-circle text-xl leading-5"></i>
                                                Mark As Sold
                                            </li>
                                            <li x-on:click="togglePromotion = !togglePromotion"
                                                class="flex px-[18px] py-2 items-center gap-2 hover:bg-gray-50 text-gray-600 hover:text-gray-900">
                                                <i class="ph ph-arrow-fat-up text-xl leading-5"></i>
                                                Listing Promotion
                                            </li>
                                            <li class="flex px-[18px] py-2 items-center gap-2 hover:bg-gray-50 text-gray-600 hover:text-gray-900">
                                                <i class="ph ph-chat-dots text-xl leading-5"></i>
                                                View All Message
                                            </li>
                                            <li
                                                class="flex px-[18px] py-2 items-center gap-2 hover:bg-gray-50 text-gray-600 hover:text-gray-900">
                                                <i class="ph ph-file-text text-xl leading-5"></i>
                                                View Listing Detail
                                            </li>
                                            <li
                                                class="flex px-[18px] py-2 items-center gap-2 hover:bg-gray-50 text-gray-600 hover:text-gray-900">
                                                <i class="ph ph-share-network text-xl leading-5"></i>
                                                Share Listing
                                            </li>
                                        </ul>
                                    </div>
                                </button>
                            </td>
                        </tr>
                    </template>
                </tbody>
            </table>
        </div>

        <x-frontend.pagination.pagination-view />
        <div x-cloak x-show="togglePromotion">
            <x-frontend.dashboard.promote-listing />
        </div>
    </div>
</div>
@section('scripts')
<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('data', () => ({
            togglePromotion: false,
            activeDropdown: null,
            toggleDropdown(index) {
                if (this.activeDropdown === index) {
                    this.activeDropdown = null;
                } else {
                    this.activeDropdown = index;
                }
            }
        }))
    })
</script>
@endsection
{{-- <script>
    import DoubleArrow from "../Icons/DoubleArrow.vue";
    import active01 from "../../assets/images/img/active-list-01.png";
    import active02 from "../../assets/images/img/active-list-02.png";
    import active03 from "../../assets/images/img/active-list-03.png";
    import active04 from "../../assets/images/img/active-list-04.png";
    import CheckIcon from "../Icons/Profile/CheckIcon.vue";
    import DotsIcon from "../Icons/Profile/DotsIcon.vue";
    import TagIcon from "../Icons/Profile/TagIcon.vue";
    import CreditCard from "../Icons/Profile/CreditCard.vue";
    import MarkSold from "../Icons/Profile/MarkSold.vue";
    import ListingPromotion from "../Icons/Profile/ListingPromotion.vue";
    import MessageDots from "../Icons/Profile/MessageDots.vue";
    import ListingDetails from "../Icons/Profile/ListingDetails.vue";
    import ShareListing from "../Icons/Profile/ShareListing.vue";
    import Pagination from "../Pagination/PaginationIndex.vue";
    import PromoteListing from "./PromoteListing.vue";
    import {
        ref,
        onMounted,
        onUnmounted
    } from "vue";

    export default {
        components: {
            CheckIcon,
            DotsIcon,
            TagIcon,
            CreditCard,
            MarkSold,
            ListingPromotion,
            MessageDots,
            ListingDetails,
            ShareListing,
            Pagination,
            PromoteListing,
            DoubleArrow,
        },
        data() {
            return {
                active01: active01,
                active02: active02,
                active03: active03,
                active04: active04,
                selected: "",
                togglePromotion: false,
            };
        },
        methods: {
            isOverlayClick(value) {
                this.togglePromotion = !this.togglePromotion;
            },
        },
        setup() {
            const activeDropdown = ref(null);
            const toggleDropdown = (index) => {
                activeDropdown.value = activeDropdown.value === index ? null : index;
            };

            const handleClickOutside = (event) => {
                if (!event.target.closest(".dropdown-btn")) {
                    activeDropdown.value = null;
                }
            };

            onMounted(() => {
                document.addEventListener("click", handleClickOutside);
            });

            onUnmounted(() => {
                document.removeEventListener("click", handleClickOutside);
            });

            return {
                activeDropdown,
                toggleDropdown,
            };
        },
    };
</script> --}}
