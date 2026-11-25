@props([
    'name' => '',
    'label' => '',
    'type' => 'text'
])

<div class="mb-3.5">
    <label for="{{ $name }}" class="block text-xs font-semibold text-stone-800 mb-1.5">{{ $label }}</label>
    <div class="relative">
        <input id="{{ $name }}" name="{{ $name }}" type="{{ $type }}"
            @if ($type !== 'password') value="{{ old($name) }}" @endif
            
            {{ $attributes->merge([
                'class' => "field w-full rounded-lg border border-stone-300 text-sm outline-none px-3 py-2 focus:border-primary focus:ring-1 focus:ring-[#2f5d3a]"
            ]) }}
            />

        @if ($type === 'password')
            <i id="{{ $name }}_toggle" class="fa-solid fa-eye-slash absolute right-3 top-1/2 -translate-y-1/2"></i>
        @endif

    </div>
    @error($name)
        <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
    @enderror
</div>