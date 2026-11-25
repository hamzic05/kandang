@extends('admin.index')

@section('content')
    <x-partials.admin.header header="Manajemen kesehatan" title="Vitamin dan obat"/>
    <x-partials.admin.breadcrumb />

    @include('admin.medicine.sumcard')

    @include('admin.medicine.inventory')

    <script data-dash="data" type="applicaton/json">{"tanggal": "{{ now('Asia/Jakarta')->format('Y-m-d') }}"}</script>
@endsection
            