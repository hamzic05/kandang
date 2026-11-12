@extends('admin.index')

@section('content')
    <x-partials.admin.header header="Perbarui informasi obat pada inventaris kandang" title="Edit obat"/>
    <x-partials.admin.breadcrumb />
    
    <form id="edit_form" data-edit action="" method="POST">
        @csrf
        @method('PUT')
        <div class="flex flex-col gap-[20px]">
            <section class="p-[18px] flex flex-col gap-10 rounded-2xl border bg-white border-gray-100 shadow-[0_2px_16px_rgba(0,0,0,0.10)]">
                <div class="grid grid-cols-1 lg:flex gap-y-5 gap-x-20">
                    <x-admin.medicine.section_header number="1" title="Informasi dasar" icon="fa-kit-medical"/>
                    
                    <div class="flex-1">
                        <div class="grid grid-cols-2 gap-2.5">
                            <x-ui.input label="Kode" name="code"></x-ui.input>
                            <x-ui.input label="Nama obat" name="name"></x-ui.input>
                            <x-ui.select label="Tipe" name="type">
                                <x-slot:options>
                                    <option value="" disabled selected>Pilih tipe</option>
                                    <option value="madicine">Obat</option>
                                    <option value="vitamine">Vitamin</option>
                                    <option value="vaccine">Vaksin</option>
                                    <option value="supplement">Suplemen</option>
                                </x-slot:options>
                            </x-ui.select>
                            <x-ui.select label="Bentuk" name="form">
                                <x-slot:options>
                                    <option value="" disabled selected>Pilih bentuk</option>
                                    <option value="powder">Bubuk</option>
                                    <option value="liquid">Cair</option>
                                    <option value="tablet">Tablet</option>
                                    <option value="injection">Suntik</option>
                                </x-slot:options>
                            </x-ui.select>
                        </div>
                    </div>
                </div>
            </section>
        
            <section class="p-[18px] flex flex-col gap-10 rounded-2xl border bg-white border-gray-100 shadow-[0_2px_16px_rgba(0,0,0,0.10)]">
                <div class="grid grid-cols-1 lg:flex gap-y-5 gap-x-20">
                    <x-admin.medicine.section_header number="2" title="Informasi persediaan" icon="fa-cubes" icon_color="text-amber-600"/>
        
                    <div class="flex-1">
                        <div class="grid grid-cols-2 gap-2.5">
                            <x-ui.input label="Brand" name="brand"></x-ui.input>
                            <x-ui.input label="Stok" name="stock" type="number"></x-ui.input>
                            <x-ui.select label="Ketersediaan" name="isActive">
                                <x-slot:options>
                                    <option value="" disabled selected>Ketersediaan</option>
                                    <option value="1">Tersedia</option>
                                    <option value="0">Tidak tersedia</option>
                                </x-slot:options>
                            </x-ui.select>
                            <x-ui.textarea label="Deskripsi" name="description"></x-ui.textarea>
                        </div>
                    </div>
                </div>
            </section>
    
            <div id="act_btn_container" class="py-[18px] rounded-2xl transition-all duration-300 ease-out transform opacity-0 translate-y-2 pointer-events-none">
                <div class="flex justify-between">
                    <x-ui.div_button id="cancle_btn" icon="fa-xmark" name="Batalkan perubahan"/>
                    <x-ui.button icon="fa-floppy-disk" name="Simpan perubahan"/>
                </div>
            </div>
        </div>
    </form>
@endsection