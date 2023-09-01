@props(['href'=>'#', 'class'=>'', 'type'=>''])
<a href="{{ $href }}" type="{{ $type }}"
    class="border-2 max-h-12 border-primary-500 whitespace-nowrap px-5 rounded-md bg-transparent hover:bg-primary-50 inline-flex justify-center items-center gap-2 hover:border-primary-700 transition-all duration-300 font-display uppercase text-primary-500 hover:text-primary-700 font-semibold text-sm leading-[48px] tracking-[-0.01em] {{$class}}">
    {{$slot}}
</a>
