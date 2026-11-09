@props([
    'label' => '',
    'name' => ''
])

<div class="mb-3.5">
    <label for="{{ $name }}" class="block text-xs font-semibold text-stone-800 mb-1.5">{{ $label }}</label>
    <textarea id="{{ $name }}" name="{{ $name }}" rows="3"
    {{ $attributes->merge([
        'class' => "field w-full rounded-lg border border-stone-300 text-sm outline-none px-3 py-2 focus:border-primary focus:ring-1 focus:ring-[#2f5d3a]"
    ]) }}
    ></textarea>
</div>