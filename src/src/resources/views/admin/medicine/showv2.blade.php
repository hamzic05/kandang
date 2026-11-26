@extends('admin.index')

@section('content')
    <x-partials.admin.header header="Informasi lengkap persediaan obat" title="Detail obat"/>
    <x-partials.admin.breadcrumb />

    <div class="p-6 md:p-8 rounded-2xl border-garis bg-white shadow-[0_2px_16px_rgba(0,0,0,0.08)] overflow-hidden">
        <div class="grid grid-cols-1 md:grid-cols-2 ">
            <x-admin.medicine.section_header title="Vitamin B Complex" image="images/brands/images (3).jpg" image_width="w-full"/>
    
            <div class="flex flex-col gap-2">
                <div class="border-b-4 pb-2 flex items-center">
                    <h3 class="text-lg font-bold text-tinta">Info obat</h3>
                </div>

                <div class="flex-1">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-5">
                        <x-ui.info_row label="Kode obat" text="MDC-001"/>
                        <x-ui.info_row label="Tipe" text="Vitamin"/>
                        <x-ui.info_row label="Brand" text="Vitachick"/>
                        <x-ui.info_row label="Bentuk" text="Bubuk"/>
                        <x-ui.info_row label="Stock" text="20"/>
                        <x-ui.info_row label="Ketersediaan" text="Tersedia"/>
                    </div>

                    <x-ui.info_row label="Deskrisi" text="Lorem ipsum dolor sit amet consectetur adipisicing elit. At repellat nam quae odio labore facilis unde tempore dolor. Dolorem et quas dolores, maxime ducimus illo! Nulla asperiores sunt iure eum." text_weight="font-normal"/>
                </div>
            </div>
        </div>

        <div class="">
            <div class="flex flex-col-reverse sm:flex-row sm:justify-between gap-3">
                <x-ui.a_button route="admin.medicine.index" icon="fa-arrow-left" name="Kembali" class="gap-2"/>
                <x-ui.a_button route="admin.medicine.edit" :params="[1]" icon="fa-pen-to-square" name="Edit obat" class="gap-2 text-white bg-hijau border border-tinta hover:bg-tinta hover:border-stone-400"/>
            </div>
        </div>
    </div>
@endsection