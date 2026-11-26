<div class="p-[18px] border border-hijau rounded-2xl">
    <div data-dash="medicines" class="flex flex-col">
        <x-admin.medicine.item :id="1" name="Vitamin B Complex" type="Vitamin" stock="12 botol" :is_active="true"/>
        <x-admin.medicine.item :id="2" name="Vitamin C Complex" type="Vitamin" stock="12 botol" :is_active="true"/>
    </div>

    <div class="text-sm py-2 text-center font-semibold text-hijau
              transition-colors hover:text-tinta">
        <a href="{{ route('admin.medicine.inventory') }}">Lihat seluruh persediaan &raquo;</a>
    </div>
</div>