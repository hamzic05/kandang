@props([
    'number' => '',
    'title' => '',
    'icon' => '',
    'icon_color' => 'text-hijau'
])

<div class="flex flex-col items-center justify-between">
    <div class="flex">
        <span class="py-0.8 px-2.5 rounded-full bg-hijau text-white">{{ $number }}</span>
        <h4 class="ml-2 text-xl font-bold text-tinta">{{ $title }}</h4>
    </div>

    <div class="w-full flex-1 shrink-0 rounded-2xl flex items-center justify-center mt-5 lg:mt-1">
        <i class="fa-solid {{ $icon }} text-7xl {{ $icon_color }}"></i>
    </div>
</div>