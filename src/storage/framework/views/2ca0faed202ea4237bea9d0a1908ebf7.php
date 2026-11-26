<?php $__env->startSection('content'); ?>
    <?php if (isset($component)) { $__componentOriginal7e271ae6dc54e16e60ca8c92e53cb8f2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7e271ae6dc54e16e60ca8c92e53cb8f2 = $attributes; } ?>
<?php $component = App\View\Components\Partials\Admin\Header::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('partials.admin.header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Partials\Admin\Header::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
         <?php $__env->slot('page_header', null, []); ?> Informasi Kandang Ayam <?php $__env->endSlot(); ?>
         <?php $__env->slot('page_title', null, []); ?> Kandang Ayam <?php $__env->endSlot(); ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7e271ae6dc54e16e60ca8c92e53cb8f2)): ?>
<?php $attributes = $__attributesOriginal7e271ae6dc54e16e60ca8c92e53cb8f2; ?>
<?php unset($__attributesOriginal7e271ae6dc54e16e60ca8c92e53cb8f2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7e271ae6dc54e16e60ca8c92e53cb8f2)): ?>
<?php $component = $__componentOriginal7e271ae6dc54e16e60ca8c92e53cb8f2; ?>
<?php unset($__componentOriginal7e271ae6dc54e16e60ca8c92e53cb8f2); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginal6e3fb2d6bdca1fd6806c3247c6496e87 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6e3fb2d6bdca1fd6806c3247c6496e87 = $attributes; } ?>
<?php $component = App\View\Components\Partials\Admin\Breadcrumb::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('partials.admin.breadcrumb'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Partials\Admin\Breadcrumb::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6e3fb2d6bdca1fd6806c3247c6496e87)): ?>
<?php $attributes = $__attributesOriginal6e3fb2d6bdca1fd6806c3247c6496e87; ?>
<?php unset($__attributesOriginal6e3fb2d6bdca1fd6806c3247c6496e87); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6e3fb2d6bdca1fd6806c3247c6496e87)): ?>
<?php $component = $__componentOriginal6e3fb2d6bdca1fd6806c3247c6496e87; ?>
<?php unset($__componentOriginal6e3fb2d6bdca1fd6806c3247c6496e87); ?>
<?php endif; ?>

    <section data-inventory aria-label="Kandang" class="rounded-2xl border border-garis bg-white p-[18px]">
  <form id="form-kandang" action="<?php echo e(route('admin.houses.store')); ?>" method="post" novalidate class="max-w-2xl space-y-6">

    <!-- 1. Data kandang -->
    <div class="space-y-4">
      <h3 class="font-display text-xl font-semibold text-tinta">Tambah Data kandang Ayam</h3>

      <div class="grid gap-4 sm:grid-cols-6">
        <div class="sm:col-span-2">
          <label for="kandang-kode" class="mb-1.5 block text-sm font-semibold text-teks">Kode</label>
          <input id="kandang-kode" name="code" maxlength="10" data-wajib placeholder="KDG-A"
            class="block w-full rounded-[10px] border border-garis-tua bg-white px-3.5 py-2.5 text-sm text-teks uppercase
              placeholder:text-teks-redup/70
              focus:border-hijau focus:outline-2 focus:outline-hijau/25
              aria-invalid:border-red-400">
          <p data-galat="kandang-kode" hidden class="mt-1 text-xs font-medium text-merah">Kode wajib diisi.</p>
          <p class="mt-1 text-xs text-teks-redup">Singkat, tanpa spasi.</p>
        </div>
        <div class="sm:col-span-4">
          <label for="kandang-nama" class="mb-1.5 block text-sm font-semibold text-teks">Nama kandang</label>
          <input id="kandang-nama" name="name" maxlength="60" data-wajib placeholder="Contoh: Kandang A (timur)"
            class="block w-full rounded-[10px] border border-garis-tua bg-white px-3.5 py-2.5 text-sm text-teks
              placeholder:text-teks-redup/70
              focus:border-hijau focus:outline-2 focus:outline-hijau/25
              aria-invalid:border-red-400">
          <p data-galat="kandang-nama" hidden class="mt-1 text-xs font-medium text-merah">Nama wajib diisi.</p>
        </div>
      </div>

      <fieldset>
        <legend class="mb-1.5 block text-sm font-semibold text-teks">Jenis kandang</legend>
        <div class="flex flex-wrap gap-2">
            <label class="relative">
              <input type="radio" name="coop_type" value="1" class="peer absolute inset-0 size-full cursor-pointer opacity-0" checked>
              <span class="block rounded-full border border-garis-tua bg-white px-4 py-2 text-sm font-medium
                           peer-checked:border-hijau peer-checked:bg-hijau peer-checked:text-white
                           peer-focus-visible:outline-2 peer-focus-visible:outline-offset-2 peer-focus-visible:outline-hijau">Baterai (sangkar)</span>
            </label>
            <label class="relative">
              <input type="radio" name="coop_type" value="2" class="peer absolute inset-0 size-full cursor-pointer opacity-0">
              <span class="block rounded-full border border-garis-tua bg-white px-4 py-2 text-sm font-medium
                           peer-checked:border-hijau peer-checked:bg-hijau peer-checked:text-white
                           peer-focus-visible:outline-2 peer-focus-visible:outline-offset-2 peer-focus-visible:outline-hijau">Lantai (litter)</span>
            </label>
            <label class="relative">
              <input type="radio" name="coop_type" value="3" class="peer absolute inset-0 size-full cursor-pointer opacity-0">
              <span class="block rounded-full border border-garis-tua bg-white px-4 py-2 text-sm font-medium
                           peer-checked:border-hijau peer-checked:bg-hijau peer-checked:text-white
                           peer-focus-visible:outline-2 peer-focus-visible:outline-offset-2 peer-focus-visible:outline-hijau">Umbaran</span>
            </label>
        </div>
      </fieldset>

      <div class="grid-cols-8">
        <div class="sm:col-span-2">
          <label for="kandang-lokasi" class="mb-1.5 block text-sm font-semibold text-teks">Lokasi Kandang</label>
          <input id="kandang-lokasi" name="location" maxlength="255" data-wajib placeholder="Contoh: Kandang Area Timur"
            class="block w-full rounded-[10px] border border-garis-tua bg-white px-3.5 py-2.5 text-sm text-teks uppercase
              placeholder:text-teks-redup/70
              focus:border-hijau focus:outline-2 focus:outline-hijau/25
              aria-invalid:border-red-400">
          <p data-galat="kandang-lokasi" hidden class="mt-1 text-xs font-medium text-merah">Lokasi wajib diisi.</p>
        </div>
        
      </div>
    </div>

    <!-- 2. Ukuran -->
    <div class="space-y-4 border-t border-garis pt-6">
      <h3 class="font-display text-xl font-semibold text-tinta">
        Ukuran <span class="text-sm font-normal text-teks-redup">(opsional)</span>
      </h3>

      <div class="grid gap-4 sm:grid-cols-3">
        <div>
          <label for="kandang-panjang" class="mb-1.5 block text-sm font-semibold text-teks">Panjang</label>
          <div class="flex">
            <input id="kandang-panjang" type="number" step="any" min="0" name="panjang_m"
              class="block w-full rounded-[10px] border border-garis-tua bg-white px-3.5 py-2.5 text-sm text-teks rounded-r-none
              placeholder:text-teks-redup/70
              focus:border-hijau focus:outline-2 focus:outline-hijau/25
              aria-invalid:border-red-400">
            <span class="grid place-items-center rounded-r-[10px] border border-l-0 border-garis-tua bg-jalur px-3 text-sm text-teks-redup">m</span>
          </div>
        </div>
        <div>
          <label for="kandang-lebar" class="mb-1.5 block text-sm font-semibold text-teks">Lebar</label>
          <div class="flex">
            <input id="kandang-lebar" type="number" step="any" min="0" name="lebar_m"
              class="block w-full rounded-[10px] border border-garis-tua bg-white px-3.5 py-2.5 text-sm text-teks rounded-r-none
              placeholder:text-teks-redup/70
              focus:border-hijau focus:outline-2 focus:outline-hijau/25
              aria-invalid:border-red-400">
            <span class="grid place-items-center rounded-r-[10px] border border-l-0 border-garis-tua bg-jalur px-3 text-sm text-teks-redup">m</span>
          </div>
        </div>
        <div class="rounded-[10px] bg-krem px-4 py-2.5">
          <div class="text-xs text-teks-redup">Luas lantai</div>
          <div class="font-display text-xl font-bold tabular-nums text-tinta">
            <span id="kandang-luas">—</span>
            <span id="kandang-luas-satuan" class="hidden text-sm font-normal text-teks-redup">m²</span>
          </div>
        </div>
      </div>
      <p class="mt-1 text-xs text-teks-redup">Luas dipakai untuk menghitung kepadatan (ekor per m²).</p>
    </div>

    <!-- 3. Catatan dan status -->
    <div class="space-y-4 border-t border-garis pt-6">
      <div>
        <label for="kandang-catatan" class="mb-1.5 block text-sm font-semibold text-teks">
          Catatan <span class="font-normal text-teks-redup">(opsional)</span>
        </label>
        <textarea id="kandang-catatan" name="description" rows="2" placeholder="Contoh: atap seng, kipas di sisi barat"
          class="block w-full rounded-[10px] border border-garis-tua bg-white px-3.5 py-2.5 text-sm text-teks
              placeholder:text-teks-redup/70
              focus:border-hijau focus:outline-2 focus:outline-hijau/25
              aria-invalid:border-red-400"></textarea>
      </div>

    </div>

    <!-- Tombol -->
    <div class="flex items-center justify-between gap-3 border-t border-garis pt-4">
      <a href="#" class="inline-flex items-center justify-center rounded-[10px] px-4 py-2.5 text-sm font-semibold transition-colors focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-hijau border border-garis-tua bg-white text-teks-lembut hover:bg-jalur">Batal</a>
      <button type="submit" class="inline-flex items-center justify-center rounded-[10px] px-4 py-2.5 text-sm font-semibold transition-colors focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-hijau bg-hijau text-white hover:bg-tinta">Simpan kandang</button>
    </div>
  </form>

  <script>
    (function () {
      const form = document.getElementById('form-kandang');

      // Luas lantai = panjang x lebar
      const panjang = form.querySelector('#kandang-panjang');
      const lebar = form.querySelector('#kandang-lebar');
      const luas = form.querySelector('#kandang-luas');
      const satuan = form.querySelector('#kandang-luas-satuan');

      function hitungLuas() {
        const hasil = parseFloat(panjang.value) * parseFloat(lebar.value);
        luas.textContent = hasil > 0 ? hasil.toLocaleString('id-ID', { maximumFractionDigits: 1 }) : '—';
        satuan.classList.toggle('hidden', !(hasil > 0));
      }
      panjang.addEventListener('input', hitungLuas);
      lebar.addEventListener('input', hitungLuas);

      // Validasi: tandai kolom wajib yang kosong (gaya merah dari aria-invalid)
      form.addEventListener('submit', function (e) {
        let pertama = null;
        form.querySelectorAll('[data-wajib]').forEach(function (el) {
          const salah = el.value.trim() === '';
          el.setAttribute('aria-invalid', salah);
          form.querySelector('[data-galat="' + el.id + '"]').hidden = !salah;
          if (salah && !pertama) pertama = el;
        });
        if (pertama) { e.preventDefault(); pertama.focus(); }
      });
    })();
  </script>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.index', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/hamidjumasa/Documents/kandang/src/resources/views/admin/houses/create.blade.php ENDPATH**/ ?>