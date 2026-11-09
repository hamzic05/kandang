@props([
    'icon' => '',
    'name' => 'button'
])

<div {{ $attributes->except('icon_id', 'text_id')->merge([
        'class' => "cursor-pointer flex items-center gap-2 rounded-[10px] px-3.5 py-[11px] text-[15px] font-medium text-stone-700 shadow-sm teks-lembut hover:bg-jalur transition-colors"
    ])}}
    >
    <i @if ($attributes->has('icon_id'))
        id ="{{ $attributes->get('icon_id') }}"
    @endif
    class="fa-solid {{ $icon }}"></i>

    <span @if ($attributes->has('text_id'))
        id="{{ $attributes->get('text_id') }}"
    @endif>{{ $name }}</span>
</div>