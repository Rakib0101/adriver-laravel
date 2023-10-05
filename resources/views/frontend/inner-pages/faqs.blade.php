@extends('frontend.layouts.master')
@section('content')
    <x-frontend.breadcrumb.breadcrumb-view title="Rnix Profile" url="/home" label="ad-details" />
    <section class="py-16">
        <div class="container" x-data="data()">
            <div class="flex items-start flex-wrap justify-between">
                {{-- <div x-text="tabs"></div> --}}
                <div
                    class="p-5 rounded-lg border border-gray-100 shadow-[0px_8px_32px_rgba(23,30,21,0.08)] w-full lg:max-w-[312px]">
                    <h3 class="uppercase text-sm text-gray-300 mb-2">Navigation</h3>
                    <ul class="flex flex-col gap-2">
                        <template x-for="(tab, index) in tabs" :key="index">
                            <li @click="setActiveTab(index)"
                                class="flex gap-2 items-center cursor-pointer rounded transition-all duration-300 py-2 px-3"
                                :class="activeTab === index ?
                                    'text-primary-500 bg-primary-50' :
                                    'text-gray-900 hover:text-primary-500 hover:bg-pirmary-50 bg-gray-50'" x-text="tab.name">
                            </li>
                        </template>
                    </ul>
                </div>
                <div class="lg:max-w-[872px] w-full">
                    <template x-for="(tab, index) in tabs" :key="index">
                        <div :class="{ hidden: activeTab !== index }">
                            <h2 class="text-[32px] leading-10 text-gray-900 font-semibold mb-6" x-text="tab.name">

                            </h2>
                            <div class="accordion">
                                <div x-for="(item, index) in items" :key="index"
                                    class="mb-4 transition-all duration-300">
                                    <div class="accordion-header transition-all duration-300 py-5 px-6 border border-gray-100 rounded-lg shadow-[0px_8px_32px_rgba(23,30,21,0.04)] flex justify-between items-center select-none cursor-pointer"
                                        :class="[
                                            isOpen(index) ?
                                            'border-none bg-primary-500 rounded-bl-none rounded-br-none text-white' :
                                            'text-gray-900',
                                        ]"
                                        @click="toggle(index)">
                                        <span class="" x-text="item.title"></span>
                                        <Plus :class="isOpen(index) ? 'hidden' : 'inline-flex'" />
                                        <Minus :class="isOpen(index) ? 'inline-flex' : 'hidden'" />
                                    </div>
                                    <div class="accordion-body select-none transition-all duration-300 py-5 px-6 border rounded-bl-lg rounded-br-lg border-gray-100"
                                        :class="isOpen(index) ?
                                            'h-auto flex' :
                                            'max-h-0 overflow-hidden hidden'" x-text="item.content">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </template>
                    {{-- <div x-data="{
                        activeAccordion: '',
                        setActiveAccordion(id) {
                            this.activeAccordion = (this.activeAccordion == id) ? '' : id
                        }
                    }"
                        class="relative w-full mx-auto overflow-hidden text-sm font-normal bg-white border border-gray-200 divide-y divide-gray-200 rounded-md">
                        <div x-data="{ id: $id('accordion') }" class="cursor-pointer group">
                            <button @click="setActiveAccordion(id)"
                                class="flex items-center justify-between w-full p-4 text-left select-none group-hover:underline">
                                <span>What is Pines?</span>
                                <svg class="w-4 h-4 duration-200 ease-out" :class="{ 'rotate-180': activeAccordion == id }"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="6 9 12 15 18 9"></polyline>
                                </svg>
                            </button>
                            <div x-show="activeAccordion==id" x-collapse x-cloak>
                                <div class="p-4 pt-0 opacity-70">
                                    Pines is a UI library built for AlpineJS and TailwindCSS.
                                </div>
                            </div>
                        </div>
                        <div x-data="{ id: $id('accordion') }" class="cursor-pointer group">
                            <button @click="setActiveAccordion(id)"
                                class="flex items-center justify-between w-full p-4 text-left select-none group-hover:underline">
                                <span>How do I install Pines?</span>
                                <svg class="w-4 h-4 duration-200 ease-out" :class="{ 'rotate-180': activeAccordion == id }"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="6 9 12 15 18 9"></polyline>
                                </svg>
                            </button>
                            <div x-show="activeAccordion==id" x-collapse x-cloak>
                                <div class="p-4 pt-0 opacity-70">
                                    Add AlpineJS and TailwindCSS to your page and then copy and paste any of these elements
                                    into your project.
                                </div>
                            </div>
                        </div>
                        <div x-data="{ id: $id('accordion') }" class="cursor-pointer group">
                            <button @click="setActiveAccordion(id)"
                                class="flex items-center justify-between w-full p-4 text-left select-none group-hover:underline">
                                <span>Can I use Pines with other libraries or frameworks?</span>
                                <svg class="w-4 h-4 duration-200 ease-out" :class="{ 'rotate-180': activeAccordion == id }"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="6 9 12 15 18 9"></polyline>
                                </svg>
                            </button>
                            <div x-show="activeAccordion==id" x-collapse x-cloak>
                                <div class="p-4 pt-0 opacity-70">
                                    Absolutely! Pines works with any other library or framework. Pines works especially well
                                    with the TALL stack.
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script>
        function data() {
            return {
                activeTab: 0,
                tabs: [{
                        name: "General",
                        icon: Asterist
                    },
                    {
                        name: "Pricing Plans & Checkout",
                        icon: CreditCard
                    },
                    {
                        name: "Plans & Billing and Invoice",
                        icon: PieChart
                    },
                    {
                        name: "User Dashbaord",
                        icon: BarChart
                    },
                    {
                        name: "Post Ads",
                        icon: FilePlus
                    },
                    {
                        name: "Password & Security",
                        icon: Lock
                    },
                ],
                active: 0,
                items: [{
                        title: "Vivamus orci odio, sodales at commodo viverra, aliquam id erat. ",
                        content: "Pellentesque rutrum magna purus, quis convallis nulla tincidunt quis. Sed sit amet urna justo. Vestibulum quis dui erat. In vitae iaculis justo. Phasellus sit amet tellus erat. Pellentesque ut nunc ac neque tempus eleifend. Nulla in cursus arcu. Mauris varius blandit risus sit amet placerat. Nullam eget feugiat neque. Nulla facilisi. Proin sit amet ullamcorper mi. Sed vel dui dignissim, porttitor nisi non, consequat libero. Cras feugiat, felis nec ultricies porttitor, quam nunc dictum nisi, in porta nibh diam a lacus.",
                    },
                    {
                        title: "Aenean mi est, laoreet in arcu mattis, pellentesque malesuada leo. ",
                        content: "Pellentesque rutrum magna purus, quis convallis nulla tincidunt quis. Sed sit amet urna justo. Vestibulum quis dui erat. In vitae iaculis justo. Phasellus sit amet tellus erat. Pellentesque ut nunc ac neque tempus eleifend. Nulla in cursus arcu. Mauris varius blandit risus sit amet placerat. Nullam eget feugiat neque. Nulla facilisi. Proin sit amet ullamcorper mi. Sed vel dui dignissim, porttitor nisi non, consequat libero. Cras feugiat, felis nec ultricies porttitor, quam nunc dictum nisi, in porta nibh diam a lacus.",
                    },
                    {
                        title: "Sed interdum sed odio vel porta. Donec elementum, justo vel viverra mollis. ",
                        content: "Pellentesque rutrum magna purus, quis convallis nulla tincidunt quis. Sed sit amet urna justo. Vestibulum quis dui erat. In vitae iaculis justo. Phasellus sit amet tellus erat. Pellentesque ut nunc ac neque tempus eleifend. Nulla in cursus arcu. Mauris varius blandit risus sit amet placerat. Nullam eget feugiat neque. Nulla facilisi. Proin sit amet ullamcorper mi. Sed vel dui dignissim, porttitor nisi non, consequat libero. Cras feugiat, felis nec ultricies porttitor, quam nunc dictum nisi, in porta nibh diam a lacus.",
                    },
                    {
                        title: "Nunc arcu dictum lectus, eu auctor lacus lectus eget sem.",
                        content: "Pellentesque rutrum magna purus, quis convallis nulla tincidunt quis. Sed sit amet urna justo. Vestibulum quis dui erat. In vitae iaculis justo. Phasellus sit amet tellus erat. Pellentesque ut nunc ac neque tempus eleifend. Nulla in cursus arcu. Mauris varius blandit risus sit amet placerat. Nullam eget feugiat neque. Nulla facilisi. Proin sit amet ullamcorper mi. Sed vel dui dignissim, porttitor nisi non, consequat libero. Cras feugiat, felis nec ultricies porttitor, quam nunc dictum nisi, in porta nibh diam a lacus.",
                    },
                    {
                        title: "Sed pellentesque turpis eget erat pretium placerat.",
                        content: "Content for item 2",
                    },
                    {
                        title: "Pellentesque rutrum magna purus, quis convallis nulla tincidunt quis.",
                        content: "Pellentesque rutrum magna purus, quis convallis nulla tincidunt quis. Sed sit amet urna justo. Vestibulum quis dui erat. In vitae iaculis justo. Phasellus sit amet tellus erat. Pellentesque ut nunc ac neque tempus eleifend. Nulla in cursus arcu. Mauris varius blandit risus sit amet placerat. Nullam eget feugiat neque. Nulla facilisi. Proin sit amet ullamcorper mi. Sed vel dui dignissim, porttitor nisi non, consequat libero. Cras feugiat, felis nec ultricies porttitor, quam nunc dictum nisi, in porta nibh diam a lacus.",
                    },
                ],
                setActiveTab(index) {
                    this.activeTab = index;
                }
                toggle(index) {
                    if (this.active === index) {
                        this.active = null;
                    } else {
                        this.active = index;
                    }
                }
                isOpen(index) {
                    return this.active === index;
                }
            }
        }
    </script>
@endsection
