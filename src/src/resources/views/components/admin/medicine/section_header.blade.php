@props([
    'number' => '', 'title', 
    'icon' => '', 'image' => '',
    'icon_color' => 'text-hijau',
    'image_width' => 'max-w-[160px]'
])

<div class="flex flex-col justify-between">
    <div class="flex">
        @if ($number !== '')
            <span class="py-0.8 px-2.5 rounded-full bg-hijau text-white">{{ $number }}</span>
        @endif
        <h4 class="ml-2 text-xl font-bold text-tinta">{{ $title }}</h4>
    </div>

    @if ($icon !== '')
        <div class="w-full flex-1 shrink-0 rounded-2xl flex items-center justify-center mt-5 lg:mt-1">
            <i class="fa-solid {{ $icon }} text-7xl {{ $icon_color }}"></i>
        </div>
    @endif

    @if ($image !== '')
        <div class="flex-1 p-6 md:p-8">
            <div class="flex aspect-[4/3] {{ $image_width }} items-center justify-center overflow-hidden rounded-2xl">
                <img src="{{ asset($image) }}" alt="" class="w-full h-full object-cover">
            </div>
        </div>
    @endif
</div>