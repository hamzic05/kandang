@extends('admin.index')

@section('content')
    <x-partials.admin.header header="Manajemen kesehatan" title="Vitamin dan obat"/>

    @include('admin.medicine.sumcard')

    <section aria-label="Persediaan Obat" class="p-[18px] border border-garis bg-white rounded-2xl">
        <div class="flex flex-col gap-4.5">
            <div class="flex items-center justify-between">
                <h2 class="text-xl font-semibold text-tinta">Persediaan obat</h2>
                <div data-dash="kpi-total" class="rounded-[10px] border border-garis-tua px-4 py-2.5 text-sm whitespace-nowrap bg-hijau-muda text-hijau">0 items</div>
            </div>

            {{-- @include('admin.medicine.category') --}}
            {{-- @include('admin.medicine.search') --}}
            @include('admin.medicine.prev_inventory')
        </div>
    </section>

    <script data-dash="data" type="applicaton/json">{"tanggal": "{{ now('Asia/Jakarta')->format('Y-m-d') }}"}</script>
@endsection
            