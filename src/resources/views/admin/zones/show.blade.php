@extends('admin.index')

@section('content')
    <x-partials.admin.header header="Informasi Detail Zona Kandang Ayam" title="Detail Zona Kandang Ayam"/>
    <x-partials.admin.breadcrumb />

    <section data-inventory aria-label="Kandang" class="p-[18px] border border-garis rounded-2xl overflow-hidden bg-white">
        <header class="mb-5">
            <div class="grid w-full grid-cols-1 gap-4 sm:grid-cols-[minmax(0,1fr)_auto] sm:items-center">

                           </div>
        </header>

        <div class="overflow-hidden rounded-xl border border-garis bg-white">

            <div class="overflow-x-auto">
                <table class="w-full min-w-[900px] border-collapse text-sm">

                    <thead class="bg-krem/60">
                        <tr>
                            <th class="px-5 py-3 text-left text-xs font-semibold uppercase tracking-wide text-teks-redup">
                                Kode Kandang
                            </th>
                            <th class="px-5 py-3 text-left text-xs font-semibold uppercase tracking-wide text-teks-redup">
                                Kandang
                            </th>
                            <th class="px-5 py-3 text-left text-xs font-semibold uppercase tracking-wide text-teks-redup">
                                Kode Zona
                            </th>
                            <th class="px-4 py-3 text-left text-xs font-semibold uppercase tracking-wide text-teks-redup">
                                Zona Kandang
                            </th>
                            <th class="px-4 py-3 text-left text-xs font-semibold uppercase tracking-wide text-teks-redup">
                                Kapasitas
                            </th>
                            <th class="px-4 py-3 text-left text-xs font-semibold uppercase tracking-wide text-teks-redup">
                                Status 
                            </th>
                            <th class="px-4 py-3 text-center text-xs font-semibold uppercase tracking-wide text-teks-redup">
                                Deskripsi
                            </th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-garis">

                        @forelse ($houses as $house)
                       
                            <tr class="hover:bg-krem/30">

                                <td class="px-5 py-4">
                                    {{ $house->houses->code }}
                                                                         
                                </td>

                                <td class="px-4 py-4 text-teks-lembut">
                                    {{ $house->houses->name }}
                                </td>

                                <td class="px-4 py-4">
                                 {{ $house->kode }}
                                </td>

                                <td class="px-4 py-4">
                                    {{ $house->nama }}
                                </td>
                                </td>
                                <td class="px-4 py-4">
                                    {{ $house->capacity}}
                                </td>
                                <td class="px-4 py-4">
                                    {{ $house->status}}
                                </td>
                                <td class="px-4 py-4">
                                    {{ $house->description}}
                                </td>
                            </tr>

                        @empty
                            <p>Data tidak ditemukan</p>
                        @endforelse

                    </tbody>
                </table>
            </div>

            {{-- Footer tabel --}}
            <div class="flex items-center justify-between border-t border-garis bg-white px-5 py-3">
                <span class="text-xs text-teks-redup">
                    Menampilkan {{ $count }} kandang
                </span>
                <span class="text-xs font-medium text-teks-lembut">
                    Data kandang
                </span>
            </div>

        </div>

    </section>
@endsection