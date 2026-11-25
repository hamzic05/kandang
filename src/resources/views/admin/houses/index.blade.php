@extends('admin.index')

@section('content')
    <x-partials.admin.header header="Informasi Kandang Ayam" title="Kandang Ayam"/>
    <x-partials.admin.breadcrumb />

    @if(session('success'))
        <div class="mb-4 rounded-lg bg-hijau/10 px-4 py-3 text-sm font-medium text-hijau">
            {{ session('success') }}
        </div>
    @endif
    <section data-inventory aria-label="Kandang" class="p-[18px] border border-garis rounded-2xl overflow-hidden bg-white">
        <header class="mb-5">
            <div class="grid w-full grid-cols-1 gap-4 sm:grid-cols-[minmax(0,1fr)_auto] sm:items-center">

                <a href="{{ route('admin.houses.create') }}" class="inline-flex shrink-0 items-center justify-center gap-2
                              rounded-[10px] bg-hijau px-4 py-3
                              text-sm font-semibold text-white
                              whitespace-nowrap transition-colors hover:bg-tinta
                              sm:justify-self-end">

                    <i class="fa-solid fa-plus"></i>
                    <span>Tambah Kandang</span>

                </a>

            </div>
        </header>

        <div class="overflow-hidden rounded-xl border border-garis bg-white">

            <div class="overflow-x-auto">
                <table class="w-full min-w-[900px] border-collapse text-sm">

                    <thead class="bg-krem/60">
                        <tr>
                            <th class="px-5 py-3 text-left text-xs font-semibold uppercase tracking-wide text-teks-redup">
                                Kode
                            </th>
                            <th class="px-4 py-3 text-left text-xs font-semibold uppercase tracking-wide text-teks-redup">
                                Nama
                            </th>
                            <th class="px-4 py-3 text-left text-xs font-semibold uppercase tracking-wide text-teks-redup">
                                Ukuran
                            </th>
                            <th class="px-4 py-3 text-left text-xs font-semibold uppercase tracking-wide text-teks-redup">
                                Jenis Kandang
                            </th>
                            <th class="px-4 py-3 text-center text-xs font-semibold uppercase tracking-wide text-teks-redup">
                                Deskripsi
                            </th>
                            <th class="px-5 py-3 text-right text-xs font-semibold uppercase tracking-wide text-teks-redup">
                                Aksi
                            </th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-garis">

                        @forelse ($houses as $house)
                            <tr class="hover:bg-krem/30">

                                <td class="px-5 py-4">
                                    <div class="font-semibold text-tinta">{{ $house->code }}</div>
                                    <div class="mt-1 text-xs text-teks-redup">
                                        {{ $house->name }}
                                    </div>
                                </td>

                                <td class="px-4 py-4 text-teks-lembut">
                                    {{ $house->location }}
                                </td>

                                <td class="px-4 py-4">
                                    <div class="font-medium text-tinta">{{ $house->dimensions }}</div>
                                    <div class="mt-1 text-xs text-teks-redup">{{ $house->total_area }}</div>
                                </td>

                                <td class="px-4 py-4">
                                    @if($house->coop_type === '1')
                                        <span
                                            class="inline-flex items-center gap-2 rounded-full bg-hijau/10 px-3 py-1 text-xs font-medium text-hijau">
                                            <i class="fa-solid fa-layer-group"></i>
                                            Baterai (Sangkar)
                                        </span>
                                    @elseif($house->coop_type === '2')
                                        <span
                                            class="inline-flex items-center gap-2 rounded-full bg-hijau/10 px-3 py-1 text-xs font-medium text-hijau">
                                            <i class="fa-solid fa-layer-group"></i>
                                            Lantai (Litter)
                                        </span>
                                    @elseif($house->coop_type === '3')
                                        <span
                                            class="inline-flex items-center gap-2 rounded-full bg-hijau/10 px-3 py-1 text-xs font-medium text-hijau">
                                            <i class="fa-solid fa-layer-group"></i>
                                            Umbaran
                                        </span>
                                    @endif
                                </td>
                                </td>
                                <td class="px-4 py-4">
                                    {{ $house->description }}
                                </td>
                                <td class="px-5 py-4">
                                    <div class="flex items-center justify-end gap-2">

                                        <a href="{{ route('admin.houses.edit', $house->id) }}" title="Ubah Kandang"
   class="flex h-8 w-8 items-center justify-center rounded-lg text-teks-redup hover:bg-krem hover:text-hijau">
    <i class="fa-solid fa-pen"></i>
</a>
                                        <form action="{{ route('admin.houses.destroy', $house->id) }}" method="POST"
                                            onsubmit="return confirm('Hapus kandang ini?')">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" title="Hapus Kandang"
                                                class="flex h-8 w-8 items-center justify-center rounded-lg text-teks-redup hover:bg-krem hover:text-hijau">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
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