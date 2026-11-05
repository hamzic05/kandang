@extends('admin.index')

@section('content')
    <x-partials.admin.header>
        <x-slot:page_header>Lengkapi informasi obat untuk menambah persediaan</x-slot:page_header>
        <x-slot:page_title>Tambah obat</x-slot:page_title>
    </x-partials.admin.header>

    <form id="create_form" data-create action="" method="POST">
        @csrf
        <div class="flex flex-col gap-[20px]">
            <div class="p-[18px] flex flex-col gap-10 rounded-2xl border bg-white border-gray-100 shadow-[0_2px_16px_rgba(0,0,0,0.10)]">
                <div class="grid grid-cols-1 lg:flex gap-y-5 gap-x-20">
                    <div class="flex flex-col items-center justify-between">
                        <div class="flex">
                            <span class="py-0.8 px-2.5 rounded-full bg-hijau text-white">1</span>
                            <h4 class="ml-2 text-xl font-bold text-tinta">Informasi dasar</h4>
                        </div>
        
                        <div class="w-full flex-1 shrink-0 rounded-2xl flex items-center justify-center mt-5 lg:mt-1">
                            <i class="fa-solid fa-kit-medical text-7xl text-hijau"></i>
                        </div>
                    </div>
        
                    <div class="flex-1">
                        <div class="grid grid-cols-2 gap-2.5">
                            <div class="code_field mb-3.5">
                                <label for="code" class="block text-xs font-semibold text-stone-800 mb-1.5">Kode</label>
                                <input id="code" name="code" type="text"
                                    class="field w-full rounded-lg border border-stone-300 text-sm outline-none px-3 py-1 focus:border-primary ring-1 focus:ring-1 focus:ring-[#2f5d3a]" />
                            </div>
    
                            <div class="name_field mb-3.5">
                                <label for="name" class="block text-xs font-semibold text-stone-800 mb-1.5">Nama obat</label>
                                <input id="name" name="name" type="text"
                                    class="field w-full rounded-lg border border-stone-300 text-sm outline-none px-3 py-1 focus:border-primary ring-1 focus:ring-1 focus:ring-[#2f5d3a]" />
                            </div>
    
                            <div class="type_field mb-3.5">
                                <label for="type" class="block text-xs font-semibold text-stone-800 mb-1.5">Tipe</label>
                                <select id="type" name="type" class="field w-full rounded-lg border border-stone-300 text-sm outline-none px-3 py-1 focus:border-primary ring-1 focus:ring-1 focus:ring-[#2f5d3a]">
                                    <option value="" disabled selected>Pilih tipe</option>
                                    <option value="madicine">Obat</option>
                                    <option value="vitamine">Vitamin</option>
                                    <option value="vaccine">Vaksin</option>
                                    <option value="supplement">Suplemen</option>
                                </select>
                            </div>
    
                            <div class="form_field mb-3.5">
                                <label for="form" class="block text-xs font-semibold text-stone-800 mb-1.5">Bentuk</label>
                                <select id="form" name="form" class="field w-full rounded-lg border border-stone-300 text-sm outline-none px-3 py-1 focus:border-primary ring-1 focus:ring-1 focus:ring-[#2f5d3a]">
                                    <option value="" disabled selected>Pilih bentuk</option>
                                    <option value="powder">Bubuk</option>
                                    <option value="liquid">Cair</option>
                                    <option value="tablet">Tablet</option>
                                    <option value="injection">Suntik</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
            <div class="p-[18px] flex flex-col gap-10 rounded-2xl border bg-white border-gray-100 shadow-[0_2px_16px_rgba(0,0,0,0.10)]">
                <div class="grid grid-cols-1 lg:flex gap-y-5 gap-x-20">
                    <div class="flex flex-col items-center justify-between">
                        <div class="flex">
                            <span class="py-0.8 px-2.5 rounded-full bg-hijau text-white">2</span>
                            <h4 class="ml-2 text-xl font-bold text-tinta">Informasi persediaan</h4>
                        </div>

                        <div class="w-full flex-1 shrink-0 rounded-2xl flex items-center justify-center mt-5 lg:mt-1">
                            <i class="fa-solid fa-cubes text-7xl text-amber-600"></i>
                        </div>
                    </div>
        
                    <div class="flex-1">
                        <div class="grid grid-cols-2 gap-2.5">
                            <div class="brand_field mb-3.5">
                                <label for="brand" class="block text-xs font-semibold text-stone-800 mb-1.5">Brand</label>
                                <input id="brand" name="brand" type="text"
                                    class="field w-full rounded-lg border border-stone-300 text-sm outline-none px-3 py-1 focus:border-primary ring-1 focus:ring-1 focus:ring-[#2f5d3a]" />
                            </div>
    
                            <div class="stock_field mb-3.5">
                                <label for="stock" class="block text-xs font-semibold text-stone-800 mb-1.5">Stock</label>
                                <input id="stock" name="stock_unit" type="number"
                                    class="field w-full rounded-lg border border-stone-300 text-sm outline-none px-3 py-1 focus:border-primary ring-1 focus:ring-1 focus:ring-[#2f5d3a]" />
                            </div>
    
                            <div class="isActive_field mb-3.5">
                                <label for="isActive" class="block text-xs font-semibold text-stone-800 mb-1.5">Ketersediaan</label>
                                <select id="isActive" name="isActive" class="field w-full rounded-lg border border-stone-300 text-sm outline-none px-3 py-1 focus:border-primary ring-1 focus:ring-1 focus:ring-[#2f5d3a]">
                                    <option value="" disabled selected>Ketersediaan</option>
                                    <option value="1">Tersedia</option>
                                    <option value="0">Tidak tersedia</option>
                                </select>
                            </div>
    
                            <div class="description_field mb-3.5">
                                <label for="description" class="block text-xs font-semibold text-stone-800 mb-1.5">Deskripsi</label>
                                <textarea name="description" id="description" rows="3" class="field w-full rounded-lg border border-stone-300 text-sm outline-none px-3 py-1 focus:border-primary ring-1 focus:ring-1 focus:ring-[#2f5d3a]"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
            <div id="act_btn_container" class="py-[18px] rounded-2xl transition-all duration-300 ease-out transform opacity-0 translate-y-2 pointer-events-none">
                <div class="flex justify-between">
                    <div id="cancle_btn" class=" cursor-pointer flex items-center gap-2 bg-white rounded-[10px] px-3.5 py-[11px] text-[15px] border-garis font-medium transition-colors hover:bg-stone-100 text-stone-700">
                        <i class="fa-solid fa-xmark"></i>
                        <span>Reset</span>
                    </div>
        
                    <Button type="submit" class="cursor-pointer flex items-center gap-2 bg-hijau text-white rounded-[10px] px-3.5 py-[11px] text-[15px] font-medium transition-colors hover:bg-tinta">
                        <i class="fa-solid fa-floppy-disk"></i>
                        <span>Simpan obat</span>
                    </Button>
                </div>
            </div>
        </div>
    </form>
@endsection