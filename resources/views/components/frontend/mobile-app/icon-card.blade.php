@props(['title', 'title2'])
<div class="md:w-[200px] flex items-center md:gap-3 gap-1.5 border-[2px] border-primary-100 hover:border-primary-700 md:px-6 md:py-[18px] p-3 rounded-lg bg-white  transition duration-300 ease-in-out hover:bg-primary-50">
    {{$slot}}
    <div class="">
        <h4 class="xl:text-gray-900 whitespace-nowrap text-gray-500 text-xs xl:text-sm font-normal font-display">
            {{ $title2 }}
        </h4>
        <p class="text-gray-900 whitespace-nowrap text-sm md:text-base font-semibold font-display">
            {{ $title }}</p>
    </div>
</div>
