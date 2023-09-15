@props(['name' => '', 'label' => '', 'id' => ''])
<div class="flex custom-radio">
    <input type="radio" name="{{ $name }}" id="{{ $id }}" />
    <label for="{{ $id }}" class="cursor-pointer text-sm select-none">{{ $label }}</label>
</div>
