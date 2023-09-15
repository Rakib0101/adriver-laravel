<div class="!overflow-y-auto h-full scrollbar-hide pb-24" x-data="sidebar()">
    <div class="category-wrapper border border-gray-100 rounded-lg mb-6 font-display">
        <h2 class="px-5 pt-5 pb-2 text-lg font-semibold text-gray-900">
            Category
        </h2>
        <ul class="pb-5">
            <template x-for="category in categories">
                <li class="cat-item">
                    <a x-on:click="toggleDropdown(category.id)" class="cat-link"
                        :class="isDropdownOpen(category.id) ? 'active' : ''">
                        <span x-text="category.name"></span>
                        <span class="badge" x-text="category.count"></span>
                    </a>
                    <ul x-show="isDropdownOpen(category.id)" class="sub-cat-content">
                        <template x-for="(subcat, index) in category?.subCat" :key="index">
                            <li><a href="" x-text="subcat"></a></li>
                        </template>
                    </ul>
                </li>
            </template>
        </ul>
    </div>
    <div class="border border-gray-100 rounded-lg mb-6">
        <h2 class="p-5 text-lg font-semibold text-gray-900">Price Range</h2>
        <x-frontend.slider.price-slider>
            <div class="price-input">
                <div class="field">
                    <span class="text-sm mb-2">Min Price</span>
                    <input type="number" class="input-min" value="2500" />
                </div>
                <div class="field">
                    <span class="text-sm mb-2">Max Price</span>
                    <input type="number" class="input-max" value="7500" />
                </div>
            </div>
        </x-frontend.slider.price-slider>
    </div>
    <div class="border border-gray-100 rounded-lg mb-6">
        <h2 class="p-5 text-lg font-semibold text-gray-900">Location Radius</h2>
        <div class="mb-6">
            <x-frontend.slider.location-slider> </x-frontend.slider.location-slider>
        </div>
    </div>
    <div class="border border-gray-100 rounded-lg mb-6">
        <div class="px-5 pt-5">
            <h2 class="text-lg font-semibold text-gray-900 mb-3">Condition</h2>
            <div class="grid grid-cols-2 gap-5 items-center">
                <x-frontend.custom-input.custom-radio name="condition" id="new" label="New" />
                <x-frontend.custom-input.custom-radio name="condition" id="used" label="Used" />
            </div>
        </div>
        <div class="h-[1px] bg-gray-100 m-5"></div>
        <div class="px-5 pb-5">
            <h2 class="mb-3 text-lg font-semibold text-gray-900">
                Want to Negotiate
            </h2>
            <div class="grid grid-cols-2 gap-5 items-center">
                <x-frontend.custom-input.custom-radio name="negotiate" id="yes" label="Yes" />
                <x-frontend.custom-input.custom-radio name="negotiate" id="no" label="No" />
            </div>
        </div>
    </div>
    <div class="border border-gray-100 rounded-lg mb-6">
        <h2 class="p-5 text-lg font-semibold text-gray-900">Brand</h2>
        <div class="px-5 pb-5">
            <ul class="grid grid-cols-2 gap-3">
                <li>
                    <x-frontend.custom-input.custom-checkbox id="apple" label="Apple" />
                </li>
                <li>
                    <x-frontend.custom-input.custom-checkbox id="sumsung" label="Samsung" />
                </li>
                <li>
                    <x-frontend.custom-input.custom-checkbox id="lenovo" label="Lenovo" />
                </li>
                <li>
                    <x-frontend.custom-input.custom-checkbox id="oppo" label="Oppo" />
                </li>
                <li>
                    <x-frontend.custom-input.custom-checkbox id="microsoft" label="Microsoft" />
                </li>
                <li>
                    <x-frontend.custom-input.custom-checkbox id="lg" label="LG" />
                </li>
                <li>
                    <x-frontend.custom-input.custom-checkbox id="huawei" label="HUAWEI" />
                </li>
                <li>
                    <x-frontend.custom-input.custom-checkbox id="nokia" label="Nokia" />
                </li>
                <li>
                    <x-frontend.custom-input.custom-checkbox id="xiaomi" label="Xiaomi" />
                </li>
                <li>
                    <x-frontend.custom-input.custom-checkbox id="nothingphone" label="Nothing Phone" />
                </li>
            </ul>
        </div>
    </div>
</div>

<script>
    function sidebar() {
        return {
            openDropdowns: [],
            categories: [{
                    id: 0,
                    name: 'Mobile Phones',
                    count: 4600,
                    subCat: [
                        'Sub category 1',
                        'Sub category 2',
                        'Sub category 3'
                    ]
                },
                {
                    id: 1,
                    name: 'Electronics',
                    count: 6065,
                    subCat: [
                        'Sub category 1',
                        'Sub category 2',
                        'Sub category 3'
                    ]
                },
                {
                    id: 2,
                    name: 'Vehicle',
                    count: 4600,
                    subCat: [
                        'Sub category 1',
                        'Sub category 2',
                        'Sub category 3'
                    ]
                },
                {
                    id: 3,
                    name: 'Property',
                    count: 6065,
                    subCat: [
                        'Sub category 1',
                        'Sub category 2',
                        'Sub category 3'
                    ]
                },
                {
                    id: 4,
                    name: 'Home & Living',
                    count: 4600,
                    subCat: [
                        'Sub category 1',
                        'Sub category 2',
                        'Sub category 3'
                    ]
                },
                {
                    id: 5,
                    name: 'Men’s Fashion & Gooming',
                    count: 6065,
                    subCat: [
                        'Sub category 1',
                        'Sub category 2',
                        'Sub category 3'
                    ]
                },
                {
                    id: 6,
                    name: 'Pets & Animals',
                    count: 4600,
                    subCat: [
                        'Sub category 1',
                        'Sub category 2',
                        'Sub category 3'
                    ]
                },
                {
                    id: 7,
                    name: 'Women’s Fashion & Beauty',
                    count: 6065,
                    subCat: [
                        'Sub category 1',
                        'Sub category 2',
                        'Sub category 3'
                    ]
                },
                {
                    id: 8,
                    name: 'Pets & Animal',
                    count: 4600,
                    subCat: [
                        'Sub category 1',
                        'Sub category 2',
                        'Sub category 3'
                    ]
                },
                {
                    id: 9,
                    name: 'Hobbies, Sports & Kids',
                    count: 6065,
                    subCat: [
                        'Sub category 1',
                        'Sub category 2',
                        'Sub category 3'
                    ]
                },
                {
                    id: 10,
                    name: 'Business & Industry',
                    count: 4600,
                    subCat: [
                        'Sub category 1',
                        'Sub category 2',
                        'Sub category 3'
                    ]
                },
                {
                    id: 11,
                    name: 'Education',
                    count: 6065,
                    subCat: [
                        'Sub category 1',
                        'Sub category 2',
                        'Sub category 3'
                    ]
                },
                {
                    id: 12,
                    name: 'Essential',
                    count: 6690,
                    subCat: [
                        'Sub category 1',
                        'Sub category 2',
                        'Sub category 3'
                    ]
                },
            ],
            toggleDropdown(id) {
                if (this.isDropdownOpen(id)) {
                    this.openDropdowns = this.openDropdowns.filter(openId => openId !== id);
                } else {
                    this.openDropdowns.push(id);
                }
            },
            isDropdownOpen(id) {
                return this.openDropdowns.includes(id);
            },
        }
    }
</script>

<style>
    .slide-enter-active,
    .slide-leave-active {
        transition: all 0.3s ease;
    }

    .slide-enter-from,
    .slide-leave-to {
        transform: translateY(-10px);
        opacity: 0;
    }

    .cat-item .cat-link {
        padding: 8px 20px;
        display: flex;
        align-items: center;
        gap: 6px;
        cursor: pointer;
        color: #3A4138;
        font-family: IBM Plex Sans;
        font-size: 14px;
        font-style: normal;
        font-weight: 500;
        line-height: 20px;
        position: relative;
    }

    .cat-item .cat-link::after {
        position: absolute;
        right: 20px;
        top: 8px;
        content: url("data:image/svg+xml,%3Csvg width='16' height='16' viewBox='0 0 16 16' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M4 6L8 10L12 6' stroke='%237A8178' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round'/%3E%3C/svg%3E%0A");
        display: inline-block;
    }

    .cat-item:hover .cat-link::after,
    .cat-item .cat-link.active::after {
        content: url("data:image/svg+xml,%3Csvg width='16' height='16' viewBox='0 0 16 16' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M12 10L8 6L4 10' stroke='white' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round'/%3E%3C/svg%3E ");
    }

    .cat-item .cat-link .badge {
        padding: 1.5px 5px 2.5px 5px;
        border-radius: 3px;
        background: #F3F5F2;
        font-family: IBM Plex Sans;
        font-size: 12px;
        font-style: normal;
        font-weight: 500;
        line-height: 16px;
        color: #58B32B;
    }

    .cat-item:hover .cat-link,
    .cat-item:active .cat-link,
    .cat-item .cat-link.active {
        background-color: #58B32B;
        color: white;
    }

    .cat-item:hover.badge,
    .cat-item:active .badge,
    .cat-item .cat-link.active .badge {
        background: rgba(255, 255, 255, 0.24);
        color: white;
    }

    .cat-item .cat-link+ul li a {
        padding: 8px 24px 8px 40px;
        display: block;
        color: #4D554B;
        font-family: IBM Plex Sans;
        font-size: 14px;
        font-style: normal;
        font-weight: 400;
        line-height: 20px;
    }

    .cat-item .cat-link+ul li a:hover {
        color: #171E15;
    }
</style>
