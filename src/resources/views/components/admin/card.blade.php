@props(['icon' => '', 'label' => '', 'value' => '0', 'desc' => '', 'icon_color' => 'text-hijau', 'value_color' => 'text-tinta'])

<div {{ $attributes->except('icon_color', 'value_color')->merge([
    'class' => "kartu p-[18px] flex flex-col gap-1"
])}}>
    <i class="fa-solid {{ $icon }} {{ $icon_color }}"></i>
    <div class="text-[13px] text-teks-redup">{{ $label }}</div>
    <div data-dash="kpi-total" class="angka-judul text-[34px] leading-tight {{ $value_color }}">{{ $value }}</div>
    <div class="text-[13px] text-teks-redup">{{ $value }} {{ $desc }}</div>
</div>