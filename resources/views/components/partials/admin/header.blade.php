@props(['header' => '', 'title' => ''])

<header class="flex flex-col items-start justify-between gap-4 sm:flex-row sm:items-end">
    <div>
    <p class="text-sm text-teks-redup">{{ $header }}</p>
    <h1 class="mt-1 font-display text-[26px] leading-tight font-bold text-tinta sm:text-[32px]">{{ $title }}</h1>
    </div>
    <div data-dash="tanggal" class="rounded-[10px] border border-garis-tua bg-white px-4 py-2.5 text-sm whitespace-nowrap"></div>
</header>