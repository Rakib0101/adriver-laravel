<div>
    <div class="fixed left-0 top-0 bottom-0 z-[99999] w-full max-w-[376px] bg-white p-8 transition-all duration-300"
        :class="openModal ? 'translate-x-0 opacity-1' : 'translate-x-[-400px] opacity-0'">
        <h2 class="mb-5 text-2xl text-gray-900 font-medium font-display">Filters</h2>
        <x-frontend.sidebar.sidebar-view />
        <div
            class="px-6 py-5 absolute bottom-0 left-0 right-0 bg-white border-t border-gray-100 shadow-[0px_-8px_24px_0px_rgba(23,30,21,0.06)]">
            <div class="flex justify-between items-center">
                <x-frontend.button.secondary-button>Clear Filter</x-frontend.button.secondary-button>
                <x-frontend.button.primary-button>Save Change</x-frontend.button.primary-button>
            </div>
        </div>
    </div>
    <div class="filter-overlay" x-cloak x-show="openModal" x-on:click="openModal = false"></div>
</div>
<style>
    .filter-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        display: flex;
        justify-content: flex-start;
        align-items: flex-start;
        z-index: 9999;
    }

    .dashed-bg:before,
    .dashed-bg:after {
        background-image: repeating-linear-gradient(90deg,
                transparent,
                transparent 5px,
                #dee6dc 5px,
                #dee6dc 10px);
    }
</style>
