@props(['icon', 'label', 'unit', 'current' => '',
    'target' => 0,
    'route' => null, 'params' => [],
    'tone' => 'default'
    ])

@php
    $tones = [
        'default' => ['icon' => 'text-hijau', 'value' => 'text-tinta', 'border' => 'border-garis'],
        'warning' => ['icon' => 'text-orange-600', 'value' => 'text-orange-600', 'border' => 'border-orange-200', 'text' => 'border-orange-200'],
        'danger' => ['icon' => 'text-[#DC2626]', 'value' => 'text-[#DC2626]', 'border' => 'border-[#F2D0D0]']
    ][$tone];
@endphp

<div {{ $attributes->merge([
    'class' => "kartu {$tones['border']} p-[18px] flex flex-col justify-between gap-3"])}}>
    <div class="flex justify-between items-center">
       <div class="">
           <i class="fa-solid {{ $icon }} {{ $tones['icon'] }}"></i>
           <span class="ml-1 text-[13px] text-teks-redup">{{ $label }}</span>
        </div> 

        @if ($route)
            <x-ui.a_button :route="$route" :params="$params" icon="fa-arrow-right" class="gap-2 rounded-full bg-hijau text-white hover:bg-tinta"/>
        @endif
    </div>

    <div class="flex flex-col gap-2 h-[8rem]">
        <div class="angka-judul text-[34px] leading-tight {{ $tones['value'] }}">
                {{ $target > 0 ? "$current/$target" : "$current"}}
            <span class="text-teks-redup text-sm">{{ $unit }}</span>
        </div>

        @if ($target > 0)
            <x-ui.progresbar :current="$current" :target="$target"/>
        @endif

        <div class="h-full overflow-y-auto">
            <div class="h-fit w-full space-y-1">
                {{ $slot }}
            </div>
        </div>
    </div>

    @if ($route)
        <div class="border-t-2 {{ $tones['border'] }} text-sm text-hijau font-semibold hover:underline transition-colors pt-2">
            <a href="{{ route($route, $params) }}">Lihat {{ $label }}</a>
        </div>
    @endif
</div>