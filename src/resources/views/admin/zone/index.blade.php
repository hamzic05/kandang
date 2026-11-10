@extends('admin.index')

@section('content')
    <x-partials.admin.header header="Informasi Zona Kandang Ayam" title="Zona Kandang Ayam"/>
    <x-partials.admin.breadcrumb />
    <section data-inventory aria-label="Kandang" class="p-[18px] border border-garis rounded-2xl overflow-hidden bg-white">
        <header class="mb-5">
            <div class="grid w-full grid-cols-1 gap-4 sm:grid-cols-[minmax(0,1fr)_auto] sm:items-center">

               
                <a href="#" class="inline-flex shrink-0 items-center justify-center gap-2
                      rounded-[10px] bg-hijau px-4 py-3
                      text-sm font-semibold text-white
                      whitespace-nowrap transition-colors hover:bg-tinta
                      sm:justify-self-end">

                    <i class="fa-solid fa-plus"></i>
                    <span>Tentukan Zona Kandang</span>

                </a>

            </div>
        </header>

        <div class="overflow-hidden rounded-xl border border-garis bg-white">
            <div class="overflow-x-auto">
                <table class="w-full min-w-[900px] border-collapse text-sm">

                    <thead class="bg-krem/60">
                        <tr>
                            <th class="px-4 py-3 text-left text-xs font-semibold uppercase tracking-wide text-teks-redup">
                                Kode Zona
                            </th>
                            <th class="px-4 py-3 text-left text-xs font-semibold uppercase tracking-wide text-teks-redup">
                                Nama
                            </th>
                            <th
                                class="w-64 px-4 py-3 text-left text-xs font-semibold uppercase tracking-wide text-teks-redup">
                                Nomor Kandang
                            </th>
                            <th
                                class="w-64 px-4 py-3 text-left text-xs font-semibold uppercase tracking-wide text-teks-redup">
                                Kapasitas Kandang
                            </th>
                            <th class="px-4 py-3 text-center text-xs font-semibold uppercase tracking-wide text-teks-redup">
                                Status
                            </th>
                            <th class="px-5 py-3 text-right text-xs font-semibold uppercase tracking-wide text-teks-redup">
                                Aksi
                            </th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-garis">

                        @forelse($zoneChicken as $zone)
                            <tr class="hover:bg-krem/30">

                                <td class="px-5 py-4">
                                    {{ $zone->code }}
                                </td>
                                <td class="px-4 py-4 text-teks-lembut">
                                    {{ $zone->name }}
                                </td>
                                <td class="px-4 py-4 text-teks-lembut">
                                    <span class="lencana bg-hijau-muda text-hijau">
                                        <div class="font-semibold text-tinta"> {{ $zone->houses->code ?? 'N/A' }}</div>
                                        <div class="mt-1 text-xs text-teks-redup">
                                            {{ $zone->houses->name ?? 'N/A' }}
                                        </div>
                                    </span>
                                </td>
                                <td class="px-4 py-4 text-teks-lembut">
                                    {{ $zone->capacity }}
                                </td>
                                <td class="px-4 py-4 text-center">
                                    @if ($zone->status == 1)
                               <span class="bg-green-100 text-green-700 px-2 py-1 rounded font-medium">
    Aktif
                               </span>
                                
                            @else
                            <span class="bg-red-100 text-red-700 px-2 py-1 rounded font-medium">
Tidak Aktif
                            </span>    
                            
                            @endif
                        
                            
                        </span>
                    </td>

                                <td class="px-5 py-4">
                                    <div class="flex items-center justify-end gap-2">
                                        <a href="#" title="Tambah zona"
                                            class="flex h-8 w-8 items-center justify-center rounded-lg text-teks-redup hover:bg-krem hover:text-hijau">
                                            <i class="fa-solid fa-layer-group"></i>
                                        </a>
                                        <a href="#" title="Ubah kandang"
                                            class="flex h-8 w-8 items-center justify-center rounded-lg text-teks-redup hover:bg-krem hover:text-hijau">
                                            <i class="fa-solid fa-pen"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="px-5 py-4 text-center text-teks-redup">
                                    Tidak ada data kandang tersedia.
                                </td>
                            </tr>
                        @endforelse

                    </tbody>
                </table>
            </div>

            {{-- Footer tabel --}}
            <div class="flex items-center justify-between border-t border-garis bg-white px-5 py-3">
                <span class="text-xs text-teks-redup">
                    Menampilkan {{ $zoneCount }} kandang
                </span>
                <span class="text-xs font-medium text-teks-lembut">
                    Data kandang
                </span>
            </div>

        </div>

    </section>
@endsection