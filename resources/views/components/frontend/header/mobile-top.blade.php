<div class="w-full" x-data="{ isPopup: false }">
    <div class="container">
        <div class="flex justify-between items-center pt-3 pb-4 px-0 sm:px-6">
            <a href="/home" class="inline-flex gap-2 items-center">
                <x-frontend.svg-icons.logo class="full-logo" />
                <span class="logo-text text-gray-900 text-4xl font-semibold uppercase">ADRIVER</span>
            </a>
            <!-- language and currency -->
            <div class="inline-flex items-center gap-3.5">
                <div>
                    <div class="inline-flex gap-1.5 items-center py-1.5 px-2.5 bg-gray-50 text-sm text-gray-700 rounded-md"
                        x-on:click="isPopup = !isPopup">
                        <span>
                            <x-bi-globe />
                        </span>
                        <span> Eng, USD </span>
                    </div>
                    <div x-show="isPopup" :class="isPopup ? '':'hidden'"
                        class="fixed bottom-0 z-[99] left-0 right-0 rounded-md bg-white shadow-[0px_12px_32px_rgba(23,30,21,0.08)] border border-gray-100 p-5">
                        <h2 class="text-lg text-center font-semibold font-display text-gray-900 mb-6">
                            Change Language & Currency
                        </h2>
                        <div class="flex gap-4">
                            <div class="w-full">
                                <h4 class="mb-2 text-sm text-gray-900 font-medium">
                                    Language
                                </h4>
                                <div class="!w-full">
                                    <select class="relative !w-full select2" placeholder="">
                                        <option value="option1">Option 1</option>
                                        <option value="option2">Option 2</option>
                                        <option value="option3">Option 3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="!w-full">
                                <h4 class="mb-2 text-sm text-gray-900 font-medium">
                                    Currency
                                </h4>
                                <div class="w-full">
                                    <select class="relative !w-full select2" placeholder="">
                                        <option value="option1">Option 1</option>
                                        <option value="option2">Option 2</option>
                                        <option value="option3">Option 3</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div :class="isPopup ? 'lang-overlay' : ''" x-on:click="isPopup = false"></div>
                </div>
                <div>
                    <a href="#">
                        <bell-icon />
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- <style scoped>
.overlay {
  position: fixed;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  background: #171e15;
  opacity: 0.8;
  z-index: 99;
}
@media (max-width: 374px) {
  .full-logo{
    display: none;
  }
}
@media (min-width: 375px) {
  .small-logo{
    display: none;
  }
}
</style> --}}
