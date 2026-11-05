<div class="p-[18px] border border-hijau rounded-2xl">
    <div data-dash="medicines" class="flex flex-col">
        <div data-dash="medicine" class="flex justify-between border-b py-5">
            <div class="">
                <a href="{{ route('admin.medicine.show', 1) }}" class="text-base text-hijau font-bold hover:underline transition-colors">Vitamin B Complex</a>
                <p class="mt-1.5 text-sm teks-lembut">Vitamin</p>
            </div>

            <div class="">
                <h4 class="text-md text-hijau font-bold">12 Botol</h4>
                <p class="mt-1.5 text-sm teks-lembut">Tersedia</p>
            </div>
        </div>
    </div>

    <div class="text-sm py-2 text-center font-semibold text-hijau
              transition-colors hover:text-tinta">
        <a href="{{ route('admin.medicine.inventory') }}">Lihat seluruh persediaan &raquo;</a>
    </div>
</div>