<!doctype html>
<html lang="id">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Dashboard | Kandang Harian</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,600;9..144,700&family=Public+Sans:wght@400;500;600&display=swap" rel="stylesheet">
@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<div class="flex min-h-screen flex-col md:flex-row">

<!-- Sidebar -->
@include('admin.partials.sidebar')

<!-- Akar halaman. Untuk memuat dari server, ganti script JSON dengan data-url="/dashboard/data" -->
  <div class="flex min-w-0 flex-1 flex-col">
  <main data-dashboard data-refresh="0" class="flex flex-1 flex-col gap-[22px] p-4 sm:p-6 xl:px-10 xl:py-8">

   @include('admin.partials.header')

    <div data-dash="error" role="alert" class="hidden rounded-[10px] bg-merah-muda px-3.5 py-3 text-sm text-merah-tua"></div>

    <!-- Bagian angka ringkas / KPI-->
@include('admin.partials.kpi')

<!-- Bagian kamar -->
@include('admin.partials.rooms')

    <section class="flex flex-col items-stretch gap-4 xl:flex-row xl:items-start">
      <!-- Bagian grafik -->
      @include('admin.partials.chart')

      <!-- Bagian peringatan -->
      @include('admin.partials.alert')

    </section>

    <script type="application/json" data-dash="data">
    {
      "tanggal": "2026-10-23", "target_hd": 85, "batas_mati": 3,
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
  </main>

  @include('admin.partials.footer')


  </div>
</div>
</body>
</html>