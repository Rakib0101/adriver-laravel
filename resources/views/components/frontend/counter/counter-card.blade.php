@props(['count', 'title'])
<div class="xl:w-[312px] w-[182px] h-[108px] xl:h-[162px]">
    {{$slot}}
    <div class="text-center xl:mt-5 mt-3">
        <p class="text-gray-900 text-2xl xl:text-[32px] xl:leading-10 font-semibold font-display">
            {{ $count }}</p>
        <h4 class="xl:text-gray-900 text-gray-500 text-sm xl:text-base font-medium font-display mt-0 xl:mt-[6px]">
            {{ $title }}
        </h4>
    </div>
</div>
