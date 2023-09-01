<template>
  <div class="pt-12">
    <div class="container">
      <div class="border border-gray-100 shadow-[0px_8px_24px_rgba(23,30,21,0.04)] rounded-xl py-6">
        <h2 class="text-2xl text-gray-900 font-display font-semibold px-6 mb-6">
          Favorite Listing
        </h2>
        <div class="overflow-auto scrollbar-hide">
          <table class="listing-table table-auto w-full responsive">
            <thead>
              <tr>
                <th class="px-6 py-2 bg-gray-50 text-start text-xs text-gray-500 font-display font-medium min-w-[27%]">
                  Name
                </th>
                <th class="pr-6 py-2 bg-gray-50 text-start text-xs text-gray-500 font-display font-medium min-w-[16%]">
                  Price
                </th>
                <th class="pr-6 py-2 bg-gray-50 text-start text-xs text-gray-500 font-display font-medium min-w-[31%]">
                  Ad Status
                </th>
                <th
                  class="pr-6 py-2 bg-gray-50 text-start text-xs text-gray-500 font-display font-medium min-w-[21%] whitespace-nowrap">
                  Posted by
                </th>
                <th class="pr-6 py-2 bg-gray-50 text-start text-xs text-gray-500 font-display font-medium min-w-[10%]">
                  Action
                </th>
                <th class="pr-6 py-2 bg-gray-50 text-start text-xs text-gray-500 font-display font-medium min-w-[16%]">
                </th>
              </tr>
            </thead>
            <tbody>
              <tr class="hover:bg-gray-50 transition-all duration-300">
                <td class="px-6 py-4 min-w-[364px]">
                  <div class="flex items-center gap-3">
                    <img :src="active01" alt="" class="w-24 h-[74px] rounded object-cover" />
                    <div>
                      <h2 class="text-gray-900 text-base font-medium font-display mb-1.5 line-clamp-2">
                        Simple Mobile 5G LTE Galaxy 12 Mini 512GB Gaming Phone
                      </h2>
                      <p class="text-sm font-display text-gray-500 text-ellipsis whitespace-nowrap">
                        Vijayawada, Andra Pradesh, India
                      </p>
                    </div>
                  </div>
                </td>
                <td class="pr-6 py-4 w-[202px]">
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
                <td class="pr-6 py-4 w-[409px]">
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
                <td class="pr-6 py-4 w-[309px]">
                  <div>

                    <h2 class="text-gray-900 text-base font-medium font-display mb-1.5 line-clamp- whitespace-nowrap">
                      David Lois
                    </h2>
                  </div>
                </td>
                <td class="pr-6 py-4 w-10">
                  <button
                    class="favourite-heart transition-all duration-300 w-12 h-12 inline-flex justify-center items-center rounded-md border-2 border-primary-500 text-primary-500">
                    <favourite-heart />
                  </button>
                </td>
                <td class="pr-6 py-4 w-[185px]">
                  <SecondaryButton class="secondary-btn text-primary-500 hover:text-primary-700">
                    <span class="text-ellipsis whitespace-nowrap">View Detail</span>
                    <span><button-arrow /></span>
                  </SecondaryButton>
                </td>

              </tr>

            </tbody>
          </table>
        </div>
        <pagination />
      </div>
    </div>
  </div>
</template>

<script>
  import active01 from "../../assets/images/img/active-list-01.png";
  import active02 from "../../assets/images/img/active-list-02.png";
  import active03 from "../../assets/images/img/active-list-03.png";
  import active04 from "../../assets/images/img/active-list-04.png";
  import CheckIcon from "../Icons/Profile/CheckIcon.vue";
  import DotsIcon from "../Icons/Profile/DotsIcon.vue";
  import TagIcon from "../Icons/Profile/TagIcon.vue";
  import CreditCard from "../Icons/Profile/CreditCard.vue";
  import FavouriteHeart from "../Icons/Dashboard/FavouriteHeart.vue";
  import Pagination from "../Pagination/PaginationIndex.vue";
  import SecondaryButton from "../Button/SecondaryButton.vue";
  import ButtonArrow from "../Icons/ButtonArrow.vue"

  export default {
    components: {
      CheckIcon,
      DotsIcon,
      TagIcon,
      CreditCard,
      FavouriteHeart,
      Pagination,
      SecondaryButton,
      ButtonArrow
    },
    data() {
      return {
        active01: active01,
        active02: active02,
        active03: active03,
        active04: active04,
      }
    }
  }
</script>
<style>
  .favourite-heart:hover {
    background: #58b32b;
  }

  .favourite-heart:hover svg path {
    fill: transparent;
    stroke: white;
  }

  .listing-table tbody tr:hover .favourite-heart svg path {
    fill: transparent;
    stroke: white;
  }

  .listing-table tbody tr:hover .favourite-heart {
    background: #58b32b;
  }

  .listing-table tbody tr:hover .secondary-btn {
    color: #356B1A;
    background: #DEE6DC;
  }
</style>