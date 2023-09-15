@props(['title', 'url', 'label'])
<div class="container">
    <div class="bg-gray-50 pt-6 sm:pb-[34px] pb-16 rounded-bl-xl rounded-br-xl relative">
        <h2 class="text-center text-gray-900 font-display font-medium text-xl">
            {{ $title }}
        </h2>

        <p
            class="absolute top-[68px] whitespace-nowrap text-gray-500 text-sm left-1/2 -translate-x-1/2 w-full max-w-max inline-flex flex-wrap gap-1.5 bg-white border border-gray-100 py-2 px-4 rounded shadow-[0px_3px_8px_rgba(23,30,21,0.04)] justify-center items-center">
            <a href="{{$url}}">{{ $label }}</a>
            <span class="inline-flex justify-center items-center">
                <x-bi-slash />
            </span>
            <span>{{ $title }}</span>
        </p>
    </div>
</div>
