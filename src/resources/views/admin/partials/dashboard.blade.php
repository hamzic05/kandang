@extends('admin.index')

@section('content')

<div data-dash="error" role="alert" class="hidden rounded-[10px] bg-merah-muda px-3.5 py-3 text-sm text-merah-tua">
</div>

<!-- Bagian angka ringkas / KPI-->
@include('admin.partials.kpi')

<!-- Bagian kamar -->
@include('admin.partials.rooms')

<section class="flex flex-col items-stretch gap-4 xl:flex-row xl:items-start">
  <!-- Bagian grafik -->
  @include('admin.partials.chart')

  <!-- Bagian peringatan -->
  @include('admin.partials.alert')

  <script type="application/json" data-dash="data">
    {
      "tanggal": "{{ now('Asia/Jakarta')->format('Y-m-d') }}",
      "target_hd": 85, "batas_mati": 3,
      "status": [
        {"kamar":"A","hd_pct":91,"populasi":2410,"total_telur":2193,"ayam_mati":0},
        {"kamar":"B","hd_pct":89,"populasi":2398,"total_telur":2134,"ayam_mati":1},
        {"kamar":"C","hd_pct":87,"populasi":2402,"total_telur":2090,"ayam_mati":0},
        {"kamar":"D","hd_pct":85,"populasi":2391,"total_telur":2032,"ayam_mati":2},
        {"kamar":"E","hd_pct":81,"populasi":2387,"total_telur":1933,"ayam_mati":1},
        {"kamar":"F","hd_pct":74,"populasi":2352,"total_telur":1740,"ayam_mati":4}
      ],
      "grafik": [
        {"tanggal":"2026-10-09","hd":78},{"tanggal":"2026-10-10","hd":80},{"tanggal":"2026-10-11","hd":79},
        {"tanggal":"2026-10-12","hd":82},{"tanggal":"2026-10-13","hd":84},{"tanggal":"2026-10-14","hd":83},
        {"tanggal":"2026-10-15","hd":85},{"tanggal":"2026-10-16","hd":86},{"tanggal":"2026-10-17","hd":82},
        {"tanggal":"2026-10-18","hd":76},{"tanggal":"2026-10-19","hd":73},{"tanggal":"2026-10-20","hd":78},
        {"tanggal":"2026-10-21","hd":84},{"tanggal":"2026-10-22","hd":85}
      ],
      "peringatan": [
        {"kamar":"F","tingkat":"kritis","pesan":"4 ekor mati hari ini (batas 3)"},
        {"kamar":"E","tingkat":"waspada","pesan":"Produksi 81% turun dua hari berturut-turut (target 85%)"}
      ]
    }

    </script>

</section>

@endsection