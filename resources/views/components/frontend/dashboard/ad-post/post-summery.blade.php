<div class="max-w-[384px] w-full rounded-xl bg-gray-50 p-6">
    <h3 class="text-lg text-gray-900 font-display font-semibold mb-4">
        Post Summery
    </h3>
    <div class="flex justify-between items-center mb-3 text-sm">
        <h4 class="text-left text-gray-700">Post Ads</h4>
        <p class="text-right text-gray-900 font-medium">$4.99</p>
    </div>
    <div class="flex justify-between items-center mb-3 text-sm">
        <h4 class="text-left text-gray-700">Platform Fee</h4>
        <p class="text-right text-gray-900 font-medium">$0.49</p>
    </div>
    <div class="flex justify-between items-center mb-3 text-sm">
        <h4 class="text-left text-gray-700">Ads Promotion - Urgents</h4>
        <p class="text-right text-gray-900 font-medium">$16.99</p>
    </div>
    <div class="flex justify-between items-center mb-3 text-sm">
        <h4 class="text-left text-gray-700">Ads Promotion - Featured</h4>
        <p class="text-right text-gray-900 font-medium">$37.99</p>
    </div>
    <div class="flex justify-between items-center mb-3 text-sm">
        <h4 class="text-left text-gray-700">Ads Promotion - Top Ads</h4>
        <p class="text-right text-gray-900 font-medium">$44.99</p>
    </div>
    <div class="flex justify-between items-center text-sm">
        <h4 class="text-left text-gray-700">Tax</h4>
        <p class="text-right text-gray-900 font-medium">$1.99</p>
    </div>
    <div class="devider bg-gray-100 h-[1px] my-4"></div>
    <div class="flex justify-between items-center text-base mb-8">
        <h4 class="text-left text-gray-900">Total</h4>
        <p class="text-right text-gray-900 font-semibold">$107.44 USD</p>
    </div>
    <div @click="completePayCheckout">
        <x-frontend.button.primary-button class="w-full">
            <span>Post Ads</span>
            <button-arrow />
        </x-frontend.button.primary-button>
    </div>
</div>
