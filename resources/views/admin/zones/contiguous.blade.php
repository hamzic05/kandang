@extends('admin.index')

@section('content')
<<<<<<< HEAD:src/resources/views/admin/zones/contiguous.blade.php
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
=======
  <x-partials.admin.header header="Informasi Zona Kandang Ayam" title="Zona Kandang Ayam" />
  <x-partials.admin.breadcrumb />

  <section data-inventory aria-label="Zona" class="rounded-2xl border border-garis bg-white p-[18px]">

    {{-- Lebar form mengikuti kartu: tidak ada max-w-* di sini --}}
    <form id="form-zona" action="{{ route('admin.zones.store') }}" method="post" novalidate class="w-full space-y-6">
      @csrf

      <!-- 1. Data zona -->
      <div class="space-y-4">
        <h3 class="font-display text-xl font-semibold text-tinta">Tambah Zona Dalam Kandang</h3>
        <div>
    <label for="zona-house" class="mb-1.5 block text-sm font-semibold text-teks">Kandang</label>
    <select id="zona-house" name="house_id" data-wajib
        aria-invalid="{{ $errors->has('house_id') ? 'true' : 'false' }}"
        class="block w-full rounded-[10px] border border-garis-tua bg-white px-3.5 py-2.5 text-sm text-teks
               placeholder:text-teks-redup/70
               focus:border-hijau focus:outline-2 focus:outline-hijau/25
               aria-invalid:border-red-400">
            <option value="{{ $houses->id }}">
                 {{ $houses->code }} · {{ $houses->name }}
            </option>
    </select>

    <p data-galat="zona-house" hidden class="mt-1 text-xs font-medium text-merah">Pilih kandang untuk zona ini.</p>

    @error('house_id')
        <p class="mt-1 text-xs font-medium text-merah">{{ $message }}</p>
    @enderror

    <p class="mt-1 text-xs text-teks-redup">Zona (kamar) adalah satu bagian di dalam kandang.</p>
</div>

        <div class="grid gap-4 sm:grid-cols-6 lg:grid-cols-12">
          <div class="sm:col-span-2 lg:col-span-3">
            <label for="zona-code" class="mb-1.5 block text-sm font-semibold text-teks">Kode</label>
            <input id="zona-code" name="code" value="{{ old('code') }}" maxlength="10" data-wajib placeholder="A"
              aria-invalid="{{ $errors->has('code') ? 'true' : 'false' }}"
              class="block w-full rounded-[10px] border border-garis-tua bg-white px-3.5 py-2.5 text-sm text-teks uppercase
              placeholder:text-teks-redup/70
              focus:border-hijau focus:outline-2 focus:outline-hijau/25
              aria-invalid:border-red-400">
            <p data-galat="zona-code" hidden class="mt-1 text-xs font-medium text-merah">Kode wajib diisi.</p>
        @error('code')
          <p class="mt-1 text-xs font-medium text-merah">{{ $message }}</p>
        @enderror
            <p class="mt-1 text-xs text-teks-redup">Huruf kamar: A sampai F.</p>
          </div>
          <div class="sm:col-span-4 lg:col-span-9">
            <label for="zona-name" class="mb-1.5 block text-sm font-semibold text-teks">Nama zona</label>
            <input id="zona-name" name="name" value="{{ old('name') }}" maxlength="60" data-wajib placeholder="Contoh: Kamar A"
              aria-invalid="{{ $errors->has('name') ? 'true' : 'false' }}"
              class="block w-full rounded-[10px] border border-garis-tua bg-white px-3.5 py-2.5 text-sm text-teks
              placeholder:text-teks-redup/70
              focus:border-hijau focus:outline-2 focus:outline-hijau/25
              aria-invalid:border-red-400">
            <p data-galat="zona-name" hidden class="mt-1 text-xs font-medium text-merah">Nama wajib diisi.</p>
        @error('name')
          <p class="mt-1 text-xs font-medium text-merah">{{ $message }}</p>
        @enderror
          </div>
        </div>

        <div class="sm:max-w-xs">
          <label for="zona-capacity" class="mb-1.5 block text-sm font-semibold text-teks">Kapasitas</label>
          <div class="flex">
            <input id="zona-capacity" type="number" min="1" name="capacity" value="{{ old('capacity', 100) }}" data-wajib placeholder="100"
              aria-invalid="{{ $errors->has('capacity') ? 'true' : 'false' }}"
              class="block w-full rounded-[10px] border border-garis-tua bg-white px-3.5 py-2.5 text-sm text-teks rounded-r-none
              placeholder:text-teks-redup/70
              focus:border-hijau focus:outline-2 focus:outline-hijau/25
              aria-invalid:border-red-400">
            <span class="grid place-items-center rounded-r-[10px] border border-l-0 border-garis-tua bg-jalur px-3 text-sm text-teks-redup">ekor</span>
          </div>
          <p data-galat="zona-capacity" hidden class="mt-1 text-xs font-medium text-merah">Kapasitas minimal 1 ekor.</p>
        @error('capacity')
          <p class="mt-1 text-xs font-medium text-merah">{{ $message }}</p>
        @enderror
          <p class="mt-1 text-xs text-teks-redup">Jumlah ayam maksimum di kamar ini (misal, 1 kamar × 100 = 100 ekor).</p>
        </div>
      </div>

      <!-- 2. Catatan dan status -->
      <div class="space-y-4 border-t border-garis pt-6">
        <div>
          <label for="zona-description" class="mb-1.5 block text-sm font-semibold text-teks">
            Catatan <span class="font-normal text-teks-redup">(opsional)</span>
          </label>
          <textarea id="zona-description" name="description" rows="3" placeholder="Contoh: dekat pintu masuk, ventilasi kurang"
            aria-invalid="{{ $errors->has('description') ? 'true' : 'false' }}"
            class="block w-full rounded-[10px] border border-garis-tua bg-white px-3.5 py-2.5 text-sm text-teks
              placeholder:text-teks-redup/70
              focus:border-hijau focus:outline-2 focus:outline-hijau/25
              aria-invalid:border-red-400">{{ old('description') }}</textarea>
        @error('description')
          <p class="mt-1 text-xs font-medium text-merah">{{ $message }}</p>
        @enderror
        </div>

        <div class="space-y-2.5">
          {{-- input tersembunyi bernilai 0: checkbox yang tidak dicentang tetap terkirim sebagai 0 --}}
          <input type="hidden" name="status" value="0">
          <label class="flex items-center gap-2.5 text-sm">
            <input type="checkbox" name="status" value="1" @checked((string) old('status', '1') === '1') class="size-4 accent-hijau">
            Zona aktif (bisa menerima ayam)
          </label>

          <input type="hidden" name="generate_slots" value="0">
          <label class="flex items-start gap-2.5 text-sm">
            <input type="checkbox" name="generate_slots" value="1" @checked((string) old('generate_slots', '1') === '1') class="mt-0.5 size-4 accent-hijau">
            <span>
              Buat slot otomatis
              <span class="block text-xs text-teks-redup">Slot bernomor 1 sampai <b id="zona-jumlah-slot">{{ old('capacity', 100) }}</b>, satu slot untuk satu ekor. Slot yang sudah ada tidak dihapus.</span>
            </span>
          </label>
        </div>
      </div>

      <!-- Tombol -->
      <div class="flex items-center justify-between gap-3 border-t border-garis pt-4">
        <a href="{{ route('admin.zones.index') }}" class="inline-flex items-center justify-center rounded-[10px] px-4 py-2.5 text-sm font-semibold transition-colors focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-hijau border border-garis-tua bg-white text-teks-lembut hover:bg-jalur">Batal</a>
        <button type="submit" class="inline-flex items-center justify-center rounded-[10px] px-4 py-2.5 text-sm font-semibold transition-colors focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-hijau bg-hijau text-white hover:bg-tinta">Simpan zona</button>
      </div>
    </form>

    <script>
      (function () {
        const form = document.getElementById('form-zona');

        // Teks "slot 1 sampai N" mengikuti isian kapasitas
        const kapasitas = form.querySelector('#zona-capacity');
        const jumlah = form.querySelector('#zona-jumlah-slot');
        kapasitas.addEventListener('input', function () {
          jumlah.textContent = kapasitas.value || 0;
        });

        // Validasi: tandai kolom wajib yang kosong (gaya merah dari aria-invalid)
        form.addEventListener('submit', function (e) {
          let pertama = null;
          form.querySelectorAll('[data-wajib]').forEach(function (el) {
            const salah = el.value.trim() === '' || (el.min !== '' && parseFloat(el.value) < parseFloat(el.min));
            el.setAttribute('aria-invalid', salah);
            form.querySelector('[data-galat="' + el.id + '"]').hidden = !salah;
            if (salah && !pertama) pertama = el;
          });
          if (pertama) { e.preventDefault(); pertama.focus(); }
        });
      })();
    </script>
  </section>
>>>>>>> d8ddcb266eba85fe43b142d7a058fd4ea90071d7:resources/views/admin/zones/contiguous.blade.php
@endsection