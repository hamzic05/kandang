@extends('admin.index')

@section('content')
    <x-partials.admin.header>
        <x-slot:page_header>Daftar inventaris obat yang ada</x-slot:page_header>
        <x-slot:page_title>Inventaris Obat</x-slot:page_title>
    </x-partials.admin.header>

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
                            <button id="delete_btn" class="rounded-[10px] border border-garis-tua px-4 py-2 text-sm whitespace-nowrap bg-red-700 hover:bg-red-800 text-white cursor-pointer transition-all duration-100 ease-out transform opacity-0 pointer-events-none">
                                <i class="fa-regular fa-trash-can"></i>
                                <span>Hapus</span>
                            </button>

                            <div id="toggle_mode" class="rounded-[10px] border border-garis-tua px-4 py-2 text-sm whitespace-nowrap bg-hijau text-white cursor-pointer">
                                <i id="icon_mode" class="fa-solid fa-list-check"></i>
                                <span id="text_mode">Pilih obat</span>
                            </div>
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
                            <div data-dash="medicine" class="flex justify-between border-b py-5">
                                <div class="">
                                    <a href="{{ route('admin.medicine.show', 1) }}" class="text-base text-hijau font-bold hover:underline transition-colors">Vitamin B Complex</a>
                                    <p class="mt-1.5 text-sm teks-lembut">Vitamin</p>
                                </div>
        
                                <div class="flex gap-8 items-center">
                                    <div class="flex items-center gap-3.5">
                                        <a class="edit text-hijau" 
                                        href="{{ route('admin.medicine.edit', 1) }}">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>
                                        <div class="">
                                            <h4 class="text-md text-hijau font-bold">12 Botol</h4>
                                            <p class="mt-1.5 text-sm teks-lembut">Tersedia</p>
                                        </div>
                                    </div>
    
                                    <input type="checkbox" name="selected_medicines[]" value="1" class="item_checkbox hidden w-4 h-4 text-emerald-600 bg-white border-stone-300 rounded focus:ring-emerald-500 cursor-pointer">
                                </div>
                            </div>
                        </div>
                    </div>
                    <x-globals.confirm_del/>
                </form>
            </div>
        </div>
    </section>
@endsection
            