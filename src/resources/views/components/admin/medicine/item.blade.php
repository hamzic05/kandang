@props(['id', 'name' => '', 'type' => '', 'stock' => '', 'is_active' => true])

<div data-dash="medicine" class="flex justify-between items-center border-b py-5">
    <div class="">
        <a href="{{ route('admin.medicine.show', $id) }}" class="text-base text-hijau font-bold hover:underline transition-colors">{{ $name }}</a>
        <p class="mt-1.5 text-sm teks-lembut">{{ $type }}</p>
    </div>

    <div class="flex gap-8 items-center">
        <div class="flex items-center gap-3.5">
            <a class="edit text-hijau" 
            href="{{ route('admin.medicine.edit', $id) }}">
                <i class="fa-solid fa-pen-to-square"></i>
            </a>
            <div class="">
                <h4 class="text-md text-hijau font-bold">{{ $stock }}</h4>
                <p class="max-w-2.5  mt-1.5 text-sm teks-lembut">{{ $is_active ? 'tersedia' : 'tidak tersedia' }}</p>
            </div>
        </div>

        <input type="checkbox" name="selected_medicines[]" value="{{ $id }}" class="item_checkbox hidden w-4 h-4 text-emerald-600 bg-white border-stone-300 rounded focus:ring-emerald-500 cursor-pointer">
    </div>
</div>