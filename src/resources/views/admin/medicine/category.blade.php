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
            <x-ui.a_button route="admin.medicine.index" 
            :params="['category' => $category]" 
            data-category="{{ $category }}"
            :aria-current="$activeCategory === $category ? 'page' : null"
            :name="$label"
            class="category block rounded-[10px] px-3.5 py-[11px] text-[15px] font-medium aria-[current=page]:bg-hijau-muda aria-[current=page]:text-hijau hover:bg-jalur hover:text-tinta"/>
        @endforeach
    </nav>

    <x-ui.a_button route="admin.medicine.create" icon="fa-plus" name="Tambah obat" class="gap-2 text-white bg-hijau hover:bg-tinta"/>
</div>