@props(['id', 'img' => '', 'name' => '', 'type' => '', 'stock' => '', 'is_active' => true])

<div data-dash="medicine" class="flex justify-between items-center border-b py-5">
    <div class="">
        <div class="border border-tinta aspect-[4/3] max-w-[8rem] md:max-w-[10rem] items-center justify-center overflow-hidden rounded-2xl">
            <img src="{{ asset('images/brands/' . $img) }}" alt="" class="h-full w-full object-contain">
        </div>
        <a href="{{ route('admin.medicine.show', $id) }}" class="text-base text-hijau font-bold hover:underline transition-colors">{{ $name }}</a>
        <p class="mt-1.5 text-sm teks-lembut">{{ $type }}</p>
    </div>

    <div class="flex gap-3 md:gap-8 items-center">
        <div class="flex items-center gap-3.5">
            <a class="edit text-hijau" 
            href="{{ route('admin.medicine.edit', $id) }}">
                <i class="fa-solid fa-pen-to-square"></i>
            </a>
            <div class="max-w-[4.1rem]">
                <h4 class="text-md text-hijau font-bold">{{ $stock }}</h4>
                <p class="mt-1.5 text-sm teks-lembut">{{ $is_active ? 'tersedia' : 'tidak tersedia' }}</p>
            </div>
        </div>

        <input type="checkbox" name="selected_medicines[]" value="{{ $id }}" class="item_checkbox hidden w-4 h-4 text-emerald-600 bg-white border-stone-300 rounded focus:ring-emerald-500 cursor-pointer">
    </div>
</div>