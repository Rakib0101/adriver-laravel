@props(['class'=>'', 'href'=>'#', 'type'=> ''])
<a href="{{ $href }}" type="{{ $type }}" class="bg-primary-500 max-h-12 px-5 rounded-md inline-flex !whitespace-nowrap justify-center items-center gap-2 hover:bg-primary-700 font-display uppercase text-white font-semibold text-sm leading-[48px] tracking-[-0.01em] transition-all duration-300 {{$class}}">
    {{$slot}}
</a>
