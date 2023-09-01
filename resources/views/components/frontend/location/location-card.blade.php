@props(['title', 'count'])
<a href="#"
    class="location-card relative block h-[132px] sm:h-[188px] xl:max-w-[312px] w-full xl:h-[224px] rounded-lg overflow-hidden">
    {{ $slot }}
    <div class="flex flex-col justify-center items-center text-center text-white absolute w-full left-0 bottom-4 z-50">
        <h2 class="font-display md:text-base text-sm mb-[6px] text-white font-semibold">{{ $title }}</h2>
        <span
            class="count rounded shadow-[0px_4px_16px_rgba(0,0,0,0.16);] pt-[2px] px-[6px] font-display text-xs font-medium">{{ $count }}</span>
    </div>
</a>
