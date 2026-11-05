@php
    $categories = [
        "all" => "Semua",
        "medicine" => "Obat",
        "vitamin" => "Vitamin",
        "vaccine" => "Vaksin",
        "supplement" => "Suplemen"
    ];
    $activeCategory = request('category', 'all');
@endphp
<div class="flex justify-between items-center">
    <nav class="flex flex-wrap gap-2.5">
        @foreach ($categories as $category => $label)
            <a href="{{ route('admin.medicine.inventory', ['category' => $category]) }}"
                data-category="{{ $category }}"
                @if ($activeCategory === $category)
                    aria-current="page"
                @endif
                class="category block rounded-[10px] px-3.5 py-[11px] text-[15px] font-medium transition-colors aria-[current=page]:bg-hijau-muda aria-[current=page]:text-hijau shadow-sm teks-lembut hover:bg-jalur hover:text-tinta">
                {{ $label }}
            </a>
        @endforeach
    </nav>

    <a href="{{ route('admin.medicine.create') }}" class="ml-5 flex items-center gap-2 bg-hijau text-white rounded-[10px] px-3.5 py-[11px] text-[15px] font-medium transition-colors hover:bg-tinta">
        <i class="fa-solid fa-plus"></i>
        <span class="hidden lg:block">Tambah obat</span>
    </a>
</div>