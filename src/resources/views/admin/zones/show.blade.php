@extends('admin.index')

@section('content')
    <x-partials.admin.header header="Informasi Detail Zona Kandang Ayam" title="Detail Zona Kandang Ayam" />
    <x-partials.admin.breadcrumb />
    @if(session('success'))
        <div class="mb-4 rounded-lg bg-hijau/10 px-4 py-3 text-sm font-medium text-hijau">
            {{ session('success') }}
        </div>
    @endif
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
                                            <!--<td class="px-4 py-4">
                                                                                                @if ($house->status == 1)
                                                                                                <span
                                                                                                        class="inline-flex items-center gap-2 rounded-full bg-hijau/10 px-3 py-1 text-xs font-medium text-hijau">
                                                                                                        <i class="fa-solid fa-layer-group"></i>
                                                                                                    {{ "Aktif" }}
                                                                                                    </span>
                                                                                                @else
                                                                                                <span
                                                                                                        class="inline-flex items-center gap-2 rounded-full bg-merah/10 px-3 py-1 text-xs font-medium text-merah">
                                                                                                        <i class="fa-solid fa-layer-group"></i>
                                                                                                    {{ "Tidak Aktif" }}
                                                                                                    </span>
                                                                                                @endif
                                                                                            </td>-->
                                            <td class="px-4 py-4">
                                                <form action="{{ route('admin.zones.changeStatus', $house->id) }}" method="POST"
                                                    class="form-status">
                                                    @csrf
                                                    @method('PATCH')

                                                    <select name="status" class="status-select cursor-pointer rounded-full border-0
                                                                            px-3 py-1 text-xs font-medium shadow-sm
                                                                            focus:ring-2 focus:ring-hijau/30
                                                                            {{ $house->status == 1
                            ? 'bg-hijau/10 text-hijau'
                            : 'bg-merah/10 text-merah' }}" onchange="ubahStatus(this)">

                                                        <option value="1" {{ $house->status == 1 ? 'selected' : '' }}>
                                                            Aktif
                                                        </option>

                                                        <option value="0" {{ $house->status == 0 ? 'selected' : '' }}>
                                                            Tidak Aktif
                                                        </option>

                                                    </select>
                                                </form>
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
    <script>
        function ubahStatus(select) {

            const form = select.closest('form');

            const konfirmasi = confirm(
                'Apakah Anda yakin ingin mengubah status zona kandang?'
            );

            if (konfirmasi) {
                form.submit();
            } else {
                location.reload();
            }
        }
    </script>
@endsection