<section id="hero" class="relative bg-cover bg-no-repeat bg-center overlay">
    <div class="container overflow-hidden md:flex md:flex-row md:items-center md:justify-between xl:gap-5">
        <!-- Hero Left Content -->
        <div class="lg:max-w-[609px] py-16">
            <div class="hero-content mb-6">
                <h1 class="md:text-5xl text-2xl font-semibold text-gray-900 font-display mb-6">
                    Buy, sell, and exchange anything around you.
                </h1>
                <p class="md:text-lg text-sm text-gray-900 max-w-[536px]">
                    Adriver is a platform on which you can buy and sell almost everything! Use the location selector to
                    find deals close to
                    you or check out your deals
                </p>
            </div>

            <form class="heroForm header-search flex rounded-lg border-2 border-primary-500 hover:border-primary-700 bg-white opacity-90">
                <div class="relative w-full">
                    <input id="search" type="text" placeholder="Search for anything..."
                        class="w-full py-3 pr-3 pl-[54px] rounded-lg text-base placeholder:text-gray-500 font-display text-gray-900 focus:border-none focus:outline-none" />
                    <label for="search" class="absolute top-3 left-[18px]">
                        <x-bi-search class="w-6 h-6" />
                    </label>
                </div>
                <div class="relative hidden md:inline-flex w-full">
                    <input id="search" type="text" placeholder="Location"
                        class="w-full py-3 pr-3 pl-[54px] rounded-lg text-base placeholder:text-gray-500 font-display text-gray-900 focus:border-none focus:outline-none" />
                    <label for="search" class="absolute top-3 left-[18px]">
                        <x-bi-geo-alt class="w-6 h-6" />
                    </label>
                    <span class="absolute top-3 right-5">
                        <icon-target />
                    </span>
                </div>
                <div class="md:inline-flex ml-auto hidden">
                    <button
                        class="bg-primary-500 hover:bg-primary-700 text-white px-5 font-display font-semibold rounded-[6px]">
                        Search
                    </button>
                </div>
            </form>
        </div>

        <!-- Hero Right Content -->
        <div class="hidden lg:block">
            <img src="{{ asset('frontend/assets/images/hero/hero-image.png') }}" alt="Hero Image" class="select-none -my-16" />
        </div>
    </div>
</section>
@section('styles')
<style>
    .overlay {
  background: #c33764;
  /* fallback colour. Make sure this is just one solid colour. */
  background: linear-gradient(rgba(241, 245, 240, 0.95),
      rgba(241, 245, 240, 0.95)),
    url("{{asset('frontend/assets/images/hero/hero-bg-image.png')}}");
  /* The least supported option. */
  background-size: cover;
  background-repeat: no-repeat;
}

.heroForm:has(input):focus-within {
  border-color: #356B1A;
}
</style>
@endsection

