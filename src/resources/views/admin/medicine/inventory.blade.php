<section data-inventory aria-label="Persediaan Obat" class="p-[18px] border border-garis rounded-2xl overflow-hidden bg-white">
    <div class="flex flex-col gap-4.5">
        <div class="flex items-center justify-between">
            <h2 class="text-xl font-semibold text-tinta">Persediaan obat</h2>
        </div>

        @include('admin.medicine.category')
        @include('admin.medicine.search')
        <div class="p-[18px] border border-hijau rounded-2xl">
            <form id="inventory_form" class=""  action="" method="POST">
                @csrf
                @method('DELETE')
                <div class="flex justify-between mb-5">
                    <div data-dash="kpi-total" class="rounded-[10px] border border-garis-tua px-4 py-2.5 text-sm whitespace-nowrap bg-hijau-muda text-hijau">0 items</div>

                    <div id="dc_container" class="flex gap-3.5">
                        <x-ui.div_button id="delete_btn" icon="fa-trash-can" name="Hapus" class="whitespace-nowrap bg-red-700 hover:bg-red-800 text-white transition-all duration-100 ease-out transform opacity-0 pointer-events-none"/>
                        
                        <x-ui.div_button id="toggle_mode" icon="fa-list-check" icon_id="icon_mode" text_id="text_mode" name="Pilih obat" class="whitespace-nowrap bg-hijau text-white hover:bg-tinta"/>
                    </div>
                </div>

                <div id="select_all_wrapper" class="hidden">
                    <div class="flex justify-end items-center gap-1">
                        <input 
                            type="checkbox"
                            id="select_all_checkbox"  
                            class="w-4 h-4 text-emerald-600 bg-white border-stone-300 rounded focus:ring-emerald-500 cursor-pointer"
                        >
                        <label for="select_all_checkbox" class="text-sm font-semibold text-stone-700 cursor-pointer">
                            Pilih Semua
                        </label>
                    </div>
                </div>

                <div id="medicine_container" class="">
                    <div data-dash="medicines" class="flex flex-col">
                        <x-admin.medicine.item :id="1" name="Vitamin B Complex" type="Vitamin" stock="12 botol" :is_active="true"/>
                        <x-admin.medicine.item :id="2" name="Vitamin C Complex" type="Vitamin" stock="0 botol" :is_active="false"/>
                    </div>
                </div>
                <x-globals.confirm_del/>
            </form>
        </div>
    </div>
</section>
            