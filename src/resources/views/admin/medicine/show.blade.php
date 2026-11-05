@extends('admin.index')

@section('content')
    <x-partials.admin.header>
        <x-slot:page_header>Informasi lengkap persediaan obat</x-slot:page_header>
        <x-slot:page_title>Detail obat</x-slot:page_title>
    </x-partials.admin.header>

    <div class="p-6 md:p-8 rounded-2xl border border-garis bg-white shadow-[0_2px_16px_rgba(0,0,0,0.08)] overflow-hidden">
        <div class="flex flex-col gap-10">
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-5">
                <div class="flex items-center gap-4">
                    <div class="w-[76px] h-[76px] shrink-0 rounded-2xl bg-hijau-muda flex items-center justify-center">
                        <i class="fa-solid fa-capsules text-4xl text-hijau"></i>
                    </div>
    
                    <div class="">
                        <h2 id="name" class="text-xl md:text-2xl font-bold text-tinta">Vitamin B Complex</h2>
                        <p id="code" class="mt-1 text-sm text-teks-lembut">Kode obat: MDC-001</p>
                    </div>
                </div>
    
                <span id="status"
                    class="inline-flex items-center gap-2 w-fit rounded-full border border-garis-tua bg-hijau-muda px-4 py-2 text-sm font-semibold text-hijau">
                    Tersedia
                </span>
            </div>
    
            <div class="border-garis">
                <h3 class="text-lg font-bold text-tinta">Ringkasan persediaan</h3>
    
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-4">
                    <div class="rounded-xl border border-garis p-5">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-lg bg-hijau-muda flex items-center justify-center">
                                <i class="fa-solid fa-boxes-stacked text-hijau"></i>
                            </div>
    
                            <div>
                                <p class="text-sm text-teks-lembut">Stok tersedia</p>
                                <div class="flex items-baseline gap-2 mt-1">
                                    <span class="text-2xl font-bold text-tinta">10</span>
                                    <span class="text-sm text-teks-lembut">kemasan</span>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="rounded-xl border border-garis p-5">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-lg bg-hijau-muda flex items-center justify-center">
                                <i class="fa-solid fa-tag text-hijau"></i>
                            </div>
    
                            <div>
                                <p class="text-sm text-teks-lembut">Kategori obat</p>
                                <p class="mt-1 text-lg font-bold text-tinta">Vitamin</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="flex flex-col gap-5">
                <div class="">
                    <h3 class="text-lg font-bold text-tinta">Informasi obat</h3>
                    <p class="text-sm text-teks-lembut mt-1">
                        Detail mengenai identitas dan karakteristik obat.
                    </p>
                </div>
    
                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-5">
                    <div class="border-b border-garis">
                        <span class="text-sm text-teks-lembut mb-1">Nama obat</span>
                        <p class="font-semibold text-tinta">Vitamin B Complex</p>
                    </div>
    
                    <div class="border-b border-garis">
                        <span class="text-sm text-teks-lembut mb-1">Tipe obat</span>
                        <p class="font-semibold text-tinta">Vitamin</p>
                    </div>
    
                    <div class="border-b border-garis">
                        <span class="text-sm text-teks-lembut mb-1">Bentuk obat</span>
                        <p class="font-semibold text-tinta">Bubuk</p>
                    </div>
    
                    <div class="border-b border-garis">
                        <span class="text-sm text-teks-lembut mb-1">Brand</span>
                        <p class="font-semibold text-tinta">Vitachik</p>
                    </div>
                </div>
    
                <div class="">
                    <p class="text-sm text-teks-lembut mb-2">Deskripsi</p>
                    <p class="text-sm leading-7 text-tinta bg-krem/40 border border-garis rounded-xl p-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa voluptatum laudantium minus! Harum dolorem sit cupiditate porro culpa nisi odio, repudiandae veritatis aspernatur soluta iure hic itaque optio, ullam nesciunt.</p>
                </div>
            </div>
    
            <div class="">
                <div class="flex flex-col-reverse sm:flex-row sm:justify-between gap-3">
                    <a href="{{ route('admin.medicine.inventory') }}"
                        class="flex items-center justify-center gap-2 rounded-[10px] px-4 py-3 text-sm font-semibold text-stone-700 bg-white border border-stone-300 hover:bg-stone-50 hover:border-stone-400 transition-colors">
                        <i class="fa-solid fa-arrow-left text-xs"></i>
                        Halaman inventaris
                    </a>
    
                    <a href="{{ route('admin.medicine.edit', 1) }}"
                        class="flex items-center justify-center gap-2 bg-hijau text-white rounded-[10px] px-5 py-3 text-sm font-semibold hover:bg-tinta transition-colors">
                        <i class="fa-solid fa-pen-to-square"></i>
                        Edit Obat
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection