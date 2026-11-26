@extends('admin.index')

@section('content')
  @php
    $prefix = rtrim($houses->code, '0123456789');          // A1 → A
    $nomorTerakhir = (int) preg_replace('/\D+/', '', (string) $endnumber);   // "A100" atau 100 → 100
  @endphp

  <x-partials.admin.header header="Informasi Zona Kandang Ayam" title="Zona Kandang Ayam" />
  <x-partials.admin.breadcrumb />

  <section data-inventory aria-label="Tambah jumlah zona" class="rounded-2xl border border-garis bg-white p-[18px]">

  <header class="mb-5 flex flex-wrap items-center justify-between gap-3">
    <div>
      <h3 class="font-display text-xl font-semibold text-tinta">Tambah Zona Dalam Kandang</h3>
      <p class="mt-0.5 text-sm text-teks-redup">{{ $houses->houses->code }} · {{ $houses->houses->name }}</p>
    </div>
  </header>

  <form id="form-tambah-zona" action="{{ route('admin.houses.zones.additionalZone', $houses->house_id) }}" method="post" novalidate class="w-full space-y-6">
    @csrf

    <!-- 1. Pilih kamar -->
    <div class="space-y-4">
      <h3 class="font-display text-xl font-semibold text-tinta">1. Pilih kamar</h3>

      <div class="sm:max-w-sm">
        <label for="tz-prefix" class="mb-1.5 block text-sm font-semibold text-teks">Kamar</label>
        <select id="tz-prefix" name="prefix"
          aria-invalid="{{ $errors->has('prefix') ? 'true' : 'false' }}"
          class="block w-full rounded-[10px] border border-garis-tua bg-white px-3.5 py-2.5 text-sm text-teks
                 focus:border-hijau focus:outline-2 focus:outline-hijau/25
                 aria-invalid:border-red-400">
          <option value="{{ $prefix }}">Kamar {{ $prefix }}</option>
        </select>
        @error('prefix') <p class="mt-1 text-xs font-medium text-merah">{{ $message }}</p> @enderror
      </div>

      <div data-ringkasan="{{ $prefix }}" data-nama="Kamar {{ $prefix }}" data-terakhir="{{ $nomorTerakhir }}"
           class="grid grid-cols-2 gap-3 lg:grid-cols-4">
        <div class="rounded-kartu border border-garis bg-white px-4 py-3">
          <div class="text-sm text-teks-redup">Total posisi</div>
          <div class="angka-judul text-[28px] leading-tight text-tinta">{{ $count }}</div>
        </div>
        <div class="rounded-kartu border border-garis bg-white px-4 py-3">
          <div class="text-sm text-teks-redup">Aktif</div>
          <div class="angka-judul text-[28px] leading-tight text-hijau">{{ $active }}</div>
        </div>
        <div class="rounded-kartu border px-4 py-3 {{ $nonactive > 0 ? 'border-kuning-batang/50 bg-kuning-muda' : 'border-garis bg-white' }}">
          <div class="text-sm text-teks-redup">Nonaktif</div>
          <div class="angka-judul text-[28px] leading-tight {{ $nonactive > 0 ? 'text-kuning-tua' : 'text-tinta' }}">{{ $nonactive }}</div>
        </div>
        <div class="rounded-kartu border border-garis bg-white px-4 py-3">
          <div class="text-sm text-teks-redup">Nomor terakhir</div>
          <div class="angka-judul text-[28px] leading-tight text-tinta">{{ $prefix }}{{ $nomorTerakhir }}</div>
        </div>
      </div>
    </div>

    <!-- 2. Jumlah posisi baru -->
    <div class="space-y-4 border-t border-garis pt-6">
      <h3 class="font-display text-xl font-semibold text-tinta">2. Lanjutkan nomor</h3>
      <p class="-mt-2 text-sm text-teks-redup">Posisi baru dibuat setelah nomor terakhir. Data yang sudah ada tidak diubah.</p>

      <div>
        <label for="tz-jumlah" class="mb-1.5 block text-sm font-semibold text-teks">Jumlah posisi baru</label>
        <div class="flex sm:max-w-xs">
          <input id="tz-jumlah" type="number" min="1" max="500" name="jumlah" value="{{ old('jumlah') }}" placeholder="Contoh: 20" inputmode="numeric"
            aria-invalid="{{ $errors->has('jumlah') ? 'true' : 'false' }}"
            class="block w-full rounded-[10px] rounded-r-none border border-garis-tua bg-white px-3.5 py-2.5 text-sm text-teks
              placeholder:text-teks-redup/70
              focus:border-hijau focus:outline-2 focus:outline-hijau/25
              aria-invalid:border-red-400">
          <span class="grid place-items-center rounded-r-[10px] border border-l-0 border-garis-tua bg-jalur px-3 text-sm text-teks-redup">posisi</span>
        </div>
        <p data-galat="tz-jumlah" hidden class="mt-1 text-xs font-medium text-merah">Isi jumlah 1 sampai 500.</p>
        @error('jumlah') <p class="mt-1 text-xs font-medium text-merah">{{ $message }}</p> @enderror
        <p class="mt-1 text-xs text-teks-redup">Maksimal 500 sekali tambah.</p>

        <div class="mt-3 flex flex-wrap gap-2" aria-label="Pilihan cepat">
            <button type="button" data-tambah="10" class="rounded-full border border-garis-tua bg-white px-3.5 py-1.5 text-sm font-medium text-teks-lembut transition-colors hover:border-hijau hover:text-hijau focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-hijau">+10</button>
            <button type="button" data-tambah="20" class="rounded-full border border-garis-tua bg-white px-3.5 py-1.5 text-sm font-medium text-teks-lembut transition-colors hover:border-hijau hover:text-hijau focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-hijau">+20</button>
            <button type="button" data-tambah="50" class="rounded-full border border-garis-tua bg-white px-3.5 py-1.5 text-sm font-medium text-teks-lembut transition-colors hover:border-hijau hover:text-hijau focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-hijau">+50</button>
            <button type="button" data-tambah="100" class="rounded-full border border-garis-tua bg-white px-3.5 py-1.5 text-sm font-medium text-teks-lembut transition-colors hover:border-hijau hover:text-hijau focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-hijau">+100</button>
        </div>
      </div>


      <!-- Catatan (opsional, tersembunyi sampai tombol diklik) -->
      <div>
        <button type="button" id="tz-catatan-tombol" aria-controls="tz-catatan"
          aria-expanded="{{ old('description') ? 'true' : 'false' }}"
          class="rounded-full border border-garis-tua bg-white px-3.5 py-1.5 text-sm font-medium text-teks-lembut transition-colors hover:border-hijau hover:text-hijau focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-hijau">
          {{ old('description') ? '− Sembunyikan catatan' : '+ Tambah catatan' }}
        </button>

        <div id="tz-catatan" @if (! old('description') && ! $errors->has('description')) hidden @endif class="mt-3 sm:max-w-md">
          <label for="tz-description" class="mb-1.5 block text-sm font-semibold text-teks">
            Catatan posisi baru <span class="font-normal text-teks-redup">(opsional)</span>
          </label>
          <textarea id="tz-description" name="description" rows="3" maxlength="255" placeholder="Contoh: Dekat pintu masuk"
            aria-invalid="{{ $errors->has('description') ? 'true' : 'false' }}"
            class="block w-full resize-y rounded-[10px] border border-garis-tua bg-white px-3.5 py-2.5 text-sm text-teks
                   placeholder:text-teks-redup/70
                   focus:border-hijau focus:outline-2 focus:outline-hijau/25
                   aria-invalid:border-red-400">{{ $houses->description }}</textarea>
          <p class="mt-1 text-xs text-teks-redup">Dipakai untuk semua posisi baru. Maksimal 255 karakter.</p>
          @error('description') <p class="mt-1 text-xs font-medium text-merah">{{ $message }}</p> @enderror
        </div>
      </div>

      <div class="rounded-[10px] bg-krem px-4 py-3 sm:max-w-md">
        <div class="text-xs text-teks-redup">Yang akan dibuat</div>
        <div id="tz-preview" class="font-display text-lg font-bold tabular-nums text-tinta">—</div>
        <div id="tz-total" class="mt-0.5 text-xs text-teks-redup"></div>
      </div>
    </div>

    <!-- Tombol -->
    <div class="flex items-center justify-between gap-3 border-t border-garis pt-4">
      <a href="{{ route('admin.zones.index') }}" class="inline-flex items-center justify-center rounded-[10px] px-4 py-2.5 text-sm font-semibold transition-colors focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-hijau border border-garis-tua bg-white text-teks-lembut hover:bg-jalur">Batal</a>
      <button type="submit" class="inline-flex items-center justify-center rounded-[10px] px-4 py-2.5 text-sm font-semibold transition-colors focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-hijau bg-hijau text-white hover:bg-tinta">Tambahkan</button>
    </div>
  </form>

  <script>
    (function () {
      const form = document.getElementById('form-tambah-zona');
      const prefix = form.querySelector('#tz-prefix');
      const jumlah = form.querySelector('#tz-jumlah');
      const preview = form.querySelector('#tz-preview');
      const total = form.querySelector('#tz-total');
      const galat = form.querySelector('[data-galat="tz-jumlah"]');

      const ringkasan = function () { return form.querySelector('[data-ringkasan="' + prefix.value + '"]'); };

      function pratinjau() {
        const r = ringkasan();
        const n = parseInt(jumlah.value, 10);
        if (!r || !(n >= 1)) { preview.textContent = '—'; total.textContent = ''; return; }
        const awal = parseInt(r.dataset.terakhir, 10) + 1;
        const akhir = awal + n - 1;
        preview.textContent = n === 1 ? prefix.value + awal : prefix.value + awal + ' – ' + prefix.value + akhir;
        total.textContent = r.dataset.nama + ' menjadi ' + akhir + ' posisi';
      }

      function tampilkanKamar() {
        form.querySelectorAll('[data-ringkasan]').forEach(function (el) { el.hidden = el.dataset.ringkasan !== prefix.value; });
        pratinjau();
      }

      prefix.addEventListener('change', tampilkanKamar);
      jumlah.addEventListener('input', pratinjau);

      // Pilihan cepat: menambah ke isian yang sudah ada
      form.querySelectorAll('[data-tambah]').forEach(function (tombol) {
        tombol.addEventListener('click', function () {
          jumlah.value = (parseInt(jumlah.value, 10) || 0) + parseInt(tombol.dataset.tambah, 10);
          pratinjau();
        });
      });

      // Validasi sebelum kirim
      form.addEventListener('submit', function (e) {
        const n = parseInt(jumlah.value, 10);
        const salah = !(n >= 1 && n <= 500);
        jumlah.setAttribute('aria-invalid', salah);
        galat.hidden = !salah;
        if (salah) { e.preventDefault(); jumlah.focus(); }
      });

      // Catatan: tampil / sembunyi
      const catatanTombol = form.querySelector('#tz-catatan-tombol');
      const catatan = form.querySelector('#tz-catatan');
      const deskripsi = form.querySelector('#tz-description');

      catatanTombol.addEventListener('click', function () {
        const buka = catatan.hidden;
        catatan.hidden = !buka;
        catatanTombol.setAttribute('aria-expanded', String(buka));
        catatanTombol.textContent = buka ? '− Sembunyikan catatan' : '+ Tambah catatan';
        if (buka) deskripsi.focus();
      });

      tampilkanKamar();   // juga menghitung ulang pratinjau dari isian lama (old)
    })();
  </script>
</section>
@endsection