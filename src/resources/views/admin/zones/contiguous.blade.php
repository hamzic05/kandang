@extends('admin.index')

@section('content')
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
@endsection