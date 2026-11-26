@props([
    'route' => '#',
    'params' => [],
    'icon' => '',
    'name' => ''
])

<a href="{{ route($route, $params) }}"
    {{ $attributes->merge([
        'class' => "flex items-center justify-center rounded-[10px] px-3.5 py-[11px] text-[15px] font-medium text-stone-700 shadow-sm teks-lembut hover:bg-jalur transition-colors"
    ])}}
    >
    <i class="fa-solid {{ $icon }} text-xs"></i>
    {{ $name }}
</a>