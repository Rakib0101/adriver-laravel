@props(['name' => '', 'label' => '', 'id' => ''])
<div class="flex custom-checkbox">
    <input type="checkbox" name="{{ $name }}" id="{{ $id }}" />
    <label for="{{ $id }}" class="cursor-pointer text-sm select-none">{{ $label }}</label>
</div>
