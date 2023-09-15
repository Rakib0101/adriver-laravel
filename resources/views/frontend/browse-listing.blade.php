@extends('frontend.layouts.master')

@section('content')
    <x-frontend.breadcrumb.breadcrumb-view title="Browse Listing" url="/" label="Home" />
    <div class="container py-[50px] pb-[50px] sm:pb-0" x-data="data">
        <span x-text="isGrid"></span>
        <x-frontend.filter.search-filter />
        <div class="grid lg:grid-flow-col xl:grid-cols-4 grid-cols-3 gap-6">
            <div class="col-span-1 hidden lg:block">
                <x-frontend.sidebar.sidebar-view />
            </div>
            <div class="col-span-3">
                <x-frontend.filter.category-filter />
                <Transition name="fade">
                    <div class="grid md:grid-cols-2 lg:grid-cols-1 2xl:flex 2xl:flex-col gap-6 mb-6" x-show="!isGrid">
                        <template x-for="item in 6" :key="item">
                            <x-frontend.listing-card.list-view class="mx-auto" />
                        </template>
                    </div>
                </Transition>
                <Transition name="fade">
                    <div class="grid grid-listing-card place-items-center xl:grid-cols-3 lg:grid-cols-2 md:grid-cols-2 grid-cols-1 lg:gap-x-0 gap-6 md:gap-x-0 mb-6"
                        x-show="isGrid">
                        <template x-for="item in 12" :key="item">
                            <x-frontend.listing-card.grid-view />
                        </template>
                    </div>
                </Transition>
                <div>
                    <pagination-view />
                </div>
            </div>
        </div>
        <div class="">
            <footer-component />
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('data', () => ({
                isGrid: false,
                isList: true,
                hide: null,
                activeFilters: [
                    "Destop Computer",
                    "Laptops",
                    "Computer Accessories",
                    "Latest/New",
                    "Price: 4.8k to 8.9k USD",
                ],
                hideEle(i) {
                    var newActiveFilters = this.activeFilters;
                    newActiveFilters.forEach((item, index) => {
                        if (index === i) {
                            newActiveFilters.splice(index, 1);
                        }
                    });

                    this.activeFilters = newActiveFilters;
                },
            }))
        })
    </script>
@endsection
