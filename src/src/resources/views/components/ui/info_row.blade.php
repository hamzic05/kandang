@props([
    'label', 'text' => '',
    'label_size' => 'text-sm',
    'text_weight' => 'font-semibold',
])

<div {{ $attributes->merge([
    'class' => 'border-b border-garis mt-2'
])}}>
    <span class="{{ $label_size }} text-teks-lembut mb-1">{{ $label }}</span>
    <p class="{{ $text_weight }} text-tinta">{{ $text }}</p>
</div>