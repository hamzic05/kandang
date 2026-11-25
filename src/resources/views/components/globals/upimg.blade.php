@props(['name' => 'image', 'current_img' => null])

<label data-wrapper="{{ $name }}" for="{{ $name }}" class="group relative flex aspect-[4/3] w-full cursor-pointer items-center justify-center overflow-hidden rounded-2xl border-2 border-dashed border-garis bg-white transition hover:border-hijau peer-focus-visible:ring-2 peer-focus-visible:ring-hijau">
    <div id="xmark" class="hidden absolute top-0 right-0 px-2 py-0.5 rounded-full hover:bg-black/4 transition-colors cursor-pointer z-50">
        <i class="fa-solid fa-xmark"></i>
    </div>

    <img data-prevw="{{ $name }}" data-origin="{{ $current_img ? asset('images/brands/' . $current_img) : '' }}" src="{{ $current_img ? asset('images/brands/' . $current_img) : '' }}" alt="" class="{{ $current_img ? '' : 'hidden' }} absolute inset-0 h-full w-full object-contain p-3">

    <div data-placeholder="{{ $name }}" class="{{ $current_img ? 'hidden' : 'flex'}} flex-col justify-center items-center text-sm text-teks-redup">
        <i class="fa-solid fa-cloud-arrow-up text-3xl text-hijau"></i>
        <span>Klik atau seret foto kesini</span>
    </div>

    <label for="{{ $name }}" data-change-btn="{{ $name }}" class="{{ $current_img ? '' : 'hidden' }} absolute bottom-0 right-0 rounded-xl px-2 py-1 bg-hijau text-sm text-white shadow-sm teks-lembut hover:bg-tinta transition-colors cursor-pointer">Ganti foto</label>
</label>
