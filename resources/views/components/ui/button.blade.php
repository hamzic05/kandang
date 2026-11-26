@props([
    'label' => "Button"
])

<Button {{ $attributes->except('icon')->merge([
        'class' => "cursor-pointer flex items-center gap-2 rounded-[10px] px-3.5 py-[11px] text-[15px] font-medium text-stone-700 shadow-sm teks-lembut hover:bg-jalur transition-colors"   
    ])}}
    >

    @if ($attributes->has('icon'))
        <i class="fa-solid {{ $attributes->get('icon') }}"></i>
    @endif
    <span>{{ $label }}</span>
</Button>