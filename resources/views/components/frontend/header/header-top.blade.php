  <div class="bg-gray-900">
      <div class="container">
          <div class="py-2.5 flex justify-between items-center gap-5">
              <div>
                  <ul class="flex gap-5 items-center">
                      <li><a href="/home"
                              class="text-sm hover:text-primary-500 active:text-primary-500 text-gray-300">Home</a></li>
                      <li><a href="/browse-listing"
                              class="text-sm hover:text-primary-500 active:text-primary-500 text-gray-300">Browse
                              Listing</a></li>
                      <li><a href="/pricing-plan"
                              class="text-sm hover:text-primary-500 active:text-primary-500 text-gray-300">Pricing
                              Plan</a></li>
                      <li><a href="/about"
                              class="text-sm hover:text-primary-500 active:text-primary-500 text-gray-300">About</a>
                      </li>
                      <li><a href="/blog"
                              class="text-sm hover:text-primary-500 active:text-primary-500 text-gray-300">Blog</a></li>
                      <li><a href="/support-center"
                              class="text-sm hover:text-primary-500 active:text-primary-500 text-gray-300">Help
                              Center</a></li>
                  </ul>
              </div>
              <div class="flex gap-5 items-center">
                  <div class="lang-dropdown" x-data="{ isDropdown: false }">
                      <div x-on:click="isDropdown = !isDropdown"
                          class="text-sm font-medium text-gray-300 cursor-pointer inline-flex gap-1 justify-between items-center">
                          <span>English</span>
                          <x-frontend.svg-icons.arrow-down />
                      </div>
                      <ul class="dropdown-item w-[200px] max-w-[200px]" @click.outside="isDropdown = false" x-cloak
                          x-show="isDropdown">
                          <li><a href="#" class="inline-flex items-center gap-2"><span
                                      class="w-5 h-5"><x-bi-check2 class="w-5 h-5" x-cloak x-show="true" /></span> English</a>
                          </li>
                          <li><a href="#" class="inline-flex items-center gap-2"><span
                                      class="w-5 h-5"><x-bi-check2 class="w-5 h-5" x-cloak x-show="false" /></span> Bangla</a>
                          </li>
                          <li><a href="#" class="inline-flex items-center gap-2"><span
                                      class="w-5 h-5"><x-bi-check2 class="w-5 h-5" x-cloak x-show="false" /></span> Arabic</a>
                          </li>
                      </ul>
                  </div>
                  <div class="curr-dropdown" x-data="{ isDropdown: false }">
                      <div @click="isDropdown = !isDropdown"
                          class="text-sm font-medium text-gray-300 cursor-pointer inline-flex gap-1 justify-between items-center">
                          <span>USD</span>
                          <x-frontend.svg-icons.arrow-down />
                      </div>
                      <ul class="dropdown-item w-[200px] max-w-[200px]" @click.outside="isDropdown = false" x-cloak
                          x-show="isDropdown">
                          <li><a href="#" class="inline-flex items-center gap-2"><span
                                      class="w-5 h-5"><x-bi-check2 class="w-5 h-5" x-cloak x-show="true" /></span> USD</a></li>
                          <li><a href="#" class="inline-flex items-center gap-2"><span
                                      class="w-5 h-5"><x-bi-check2 class="w-5 h-5" x-cloak x-show="false" /></span> BDT</a></li>
                          <li><a href="#" class="inline-flex items-center gap-2"><span
                                      class="w-5 h-5"><x-bi-check2 class="w-5 h-5" x-cloak x-show="false" /></span> AUD</a></li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>
