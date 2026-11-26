@props([
    'route' => '#',
    'params' => [],
    'icon' => '',
    'name' => ''
])

<a href="{{ route($route, $params) }}"
    {{ $attributes->except('src')->merge([
        'class' => "flex items-center justify-center rounded-[10px] px-3 py-[11px] text-[15px] font-medium text-stone-700 shadow-sm teks-lembut hover:bg-jalur transition-colors"
    ])}}
    >

    @if ($icon !== '')
        <i class="fa-solid {{ $icon }} text-xs"></i>
    @endif

    @if($attributes->has('src'))
        <div class="w-fit h-[1.4rem] overflow-hidden">
            <img src="{{ asset($attributes->get('src')) }}" alt=""
                class="w-full h-full object-cover">
        </div>
    @endif
    {{ $name }}
</a>