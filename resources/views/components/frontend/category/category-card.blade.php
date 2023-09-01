@props(['title' => 'card title', 'count' => '10'])
<div class="category-card rounded-lg p-6">
    {{ $slot }}
    <p class="mb-2 text-[#171E15] font-medium text-lg text-center font-display">{{ $title }}</p>
    <div class="flex justify-center ">
        <span
            class="info text-[#3A4138] text-[12px] leading-4 text-center font-display px-[6px] pt-[2px] pb-[4px] w-[48px] rounded transition-all duration-300 ease-in-out bg-[#EEF7EA]">{{ $count }}</span>
    </div>
</div>
