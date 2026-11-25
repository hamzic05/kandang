@extends('admin.index')

@section('content')
    <x-partials.admin.header header="Informasi Zona Kandang Ayam" title="Zona Kandang Ayam" />

    <x-partials.admin.breadcrumb />
    @if(session('success'))
        <div class="mb-4 rounded-lg bg-hijau/10 px-4 py-3 text-sm font-medium text-hijau">
            {{ session('success') }}
        </div>
    @endif
    <section data-inventory aria-label="Kandang" class="p-[18px] border border-garis rounded-2xl overflow-hidden bg-white">
        <header class="mb-5">
            <div class="grid w-full grid-cols-1 gap-4 sm:grid-cols-[minmax(0,1fr)_auto] sm:items-center">


                <a href="{{ route('admin.zones.create') }}" class="inline-flex shrink-0 items-center justify-center gap-2
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
                <div class="rounded-2xl border border-[#2f5d3a] bg-white px-[18px] py-6">
                    @forelse($zoneChicken as $zone)
                        <div class="flex items-center justify-between border-b border-[#26352b] py-4">
                            <div class="min-w-0">
                                <h4 class="font-bold text-[#2f5d3a]">
                                    <a href="{{ route('admin.zones.show', $zone->house_id) }}" class="text-base text-hijau font-bold hover:underline transition-colors">{{ $room_column . " " . Str::substr($zone->code, 0, 1) }}</a>                             
                                </h4>
                                <p class="mt-1 text-sm text-gray-700">
                                    {{ $zone_code . " " . Str::substr($zone->code, 0, 1) }}
                                </p>
                            </div>

                            <div class="ml-4 flex shrink-0 items-center gap-3">
                                <button type="button" class="text-[#2f5d3a] transition hover:text-[#07140C]"
                                    title="Edit persediaan">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor" stroke-width="2.5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M16.862 4.487l2.651 2.651M9 15l9.193-9.193a1.875 1.875 0 012.652 2.652L11.652 17.65 8 18l.348-3z" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M19 13v5a2 2 0 01-2 2H6a2 2 0 01-2-2V7a2 2 0 012-2h5" />
                                    </svg>
                                </button>

                                <div class="min-w-[80px] text-right">
                                    <p class="font-bold text-[#2f5d3a]">
                                        {{ $zone->total_capacity . " Slot Kandang Ayam" }}
                                    </p>

                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="flex items-center justify-between border-b border-[#26352b] py-4">
                            Tidak ada data kandang tersedia.
                        </div>


                    @endforelse

                    <a href="#"
                        class="mt-3 block text-center text-sm font-bold text-[#1D3B2A] transition hover:text-[#6b8e23]">
                        1 2  »
                    </a>
                    <div class="flex items-center justify-between border-t border-garis bg-white px-5 py-3">
                        <span class="text-xs text-teks-redup">
                            Menampilkan {{ $zoneCount }} kandang
                        </span>
                        <span class="text-xs font-medium text-teks-lembut">
                            Data kandang
                        </span>
                    </div>
                </div>
            </div>



        </div>

        <div class="w-full">

            {{-- Card Persediaan --}}

        </div>

    </section>
@endsection