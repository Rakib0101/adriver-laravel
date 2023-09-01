<div
    class="fixed bottom-0 z-[9999] left-0 right-0 bg-white shadow-[0px_-8px_24px_rgba(23,30,21,0.04)] border-t border-gray-100">
    <div class="container">
        <div class="footer-mbl flex justify-between items-center py-6 px-2">
            <a href="/home"
                class="flex flex-col justify-center gap-1 text-gray-900 hover:text-gray-400 items-center w-full max-w-[76px]">
                <div>
                    <home-icon />
                </div>
                <h2 class="text-xs">Home</h2>
            </a>
            <a href="/browse-listing" class="flex flex-col justify-center gap-1 items-center w-full max-w-[76px]">
                <div>
                    <browse-icon />
                </div>
                <h2 class="text-xs">Browse</h2>
            </a>
            <a href="#" class="flex flex-col justify-center gap-1 items-center w-full max-w-[76px]">
                <div class="p-3 rounded-full bg-primary-500 text-white">
                    <plus-icon />
                </div>
            </a>
            <a href="/dashboard" class="flex flex-col justify-center gap-1 items-center w-full max-w-[76px]">
                <div>
                    <message-icon />
                </div>
                <h2 class="text-xs">Message</h2>
            </a>
            <a href="/dashboard" class="flex flex-col justify-center gap-1 items-center w-full max-w-[76px]">
                <div>
                    <account-icon />
                </div>
                <h2 class="text-xs">Account</h2>
            </a>
        </div>
    </div>
    <!-- <mobile-menu :isLoginUser="isLoginUser" /> -->
</div>

{{-- <style>
  @media (max-width: 375px) {
    .footer-mbl {
      padding: 12px 0px;
    }
  }
</style> --}}
