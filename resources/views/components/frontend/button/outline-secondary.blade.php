@props(['href' => '#', 'class' => '', 'type' => ''])
<a href="{{ $href }}" type="{{ $type }}"
    class="text-[15px] leading-[48px] text-gray-900 whitespace-nowrap font-semibold hover:border-gray-700 bg-white hover:bg-gray-50 hover:text-gray-700 transition-all duration-300 h-12 border-2 px-5 inline-flex justify-center items-center rounded-md border-gray-900 uppercase {{ $class }}">
    {{ $slot }}
</a>
