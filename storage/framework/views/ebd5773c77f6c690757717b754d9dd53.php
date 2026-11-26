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
<?php $component->withAttributes(['header' => 'Informasi Kandang Ayam','title' => 'Kandang Ayam']); ?>
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

    
    <form id="form-kandang" action="<?php echo e(route('admin.houses.update', $house->id)); ?>" method="post" novalidate class="w-full space-y-6">
      <?php echo csrf_field(); ?>
      <?php echo method_field('PUT'); ?>

      <!-- 1. Data kandang -->
      <div class="space-y-4">
        <h3 class="font-display text-xl font-semibold text-tinta">Ubah Data Kandang Ayam</h3>

        <div class="grid gap-4 sm:grid-cols-6 lg:grid-cols-12">
          <div class="sm:col-span-2 lg:col-span-3">
            <label for="kandang-kode" class="mb-1.5 block text-sm font-semibold text-teks">Kode</label>
            <input id="kandang-kode" name="code" value="<?php echo e(old('code', $house->code)); ?>" maxlength="10" data-wajib placeholder="KDG-A"
              aria-invalid="<?php echo e($errors->has('code') ? 'true' : 'false'); ?>"
              class="block w-full rounded-[10px] border border-garis-tua bg-white px-3.5 py-2.5 text-sm text-teks uppercase
              placeholder:text-teks-redup/70
              focus:border-hijau focus:outline-2 focus:outline-hijau/25
              aria-invalid:border-red-400">
            <p data-galat="kandang-kode" hidden class="mt-1 text-xs font-medium text-merah">Kode wajib diisi.</p>
          <?php $__errorArgs = ['code'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="mt-1 text-xs font-medium text-merah"><?php echo e($message); ?></p>
          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            <p class="mt-1 text-xs text-teks-redup">Singkat, tanpa spasi.</p>
          </div>
          <div class="sm:col-span-4 lg:col-span-9">
            <label for="kandang-nama" class="mb-1.5 block text-sm font-semibold text-teks">Nama kandang</label>
            <input id="kandang-nama" name="name" value="<?php echo e(old('name', $house->name)); ?>" maxlength="60" data-wajib placeholder="Contoh: Kandang A (timur)"
              aria-invalid="<?php echo e($errors->has('name') ? 'true' : 'false'); ?>"
              class="block w-full rounded-[10px] border border-garis-tua bg-white px-3.5 py-2.5 text-sm text-teks
              placeholder:text-teks-redup/70
              focus:border-hijau focus:outline-2 focus:outline-hijau/25
              aria-invalid:border-red-400">
            <p data-galat="kandang-nama" hidden class="mt-1 text-xs font-medium text-merah">Nama wajib diisi.</p>
          <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="mt-1 text-xs font-medium text-merah"><?php echo e($message); ?></p>
          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
          </div>
        </div>

        <fieldset>
          <legend class="mb-1.5 block text-sm font-semibold text-teks">Jenis kandang</legend>
          <div class="flex flex-wrap gap-2">
        <label class="relative">
          <input type="radio" name="coop_type" value="1" class="peer absolute inset-0 size-full cursor-pointer opacity-0" <?php if((string) old('coop_type', $house->coop_type) === '1'): echo 'checked'; endif; ?>>
          <span class="block rounded-full border border-garis-tua bg-white px-4 py-2 text-sm font-medium
                       peer-checked:border-hijau peer-checked:bg-hijau peer-checked:text-white
                       peer-focus-visible:outline-2 peer-focus-visible:outline-offset-2 peer-focus-visible:outline-hijau">Baterai (sangkar)</span>
        </label>
        <label class="relative">
          <input type="radio" name="coop_type" value="2" class="peer absolute inset-0 size-full cursor-pointer opacity-0" <?php if((string) old('coop_type', $house->coop_type) === '2'): echo 'checked'; endif; ?>>
          <span class="block rounded-full border border-garis-tua bg-white px-4 py-2 text-sm font-medium
                       peer-checked:border-hijau peer-checked:bg-hijau peer-checked:text-white
                       peer-focus-visible:outline-2 peer-focus-visible:outline-offset-2 peer-focus-visible:outline-hijau">Lantai (litter)</span>
        </label>
        <label class="relative">
          <input type="radio" name="coop_type" value="3" class="peer absolute inset-0 size-full cursor-pointer opacity-0" <?php if((string) old('coop_type', $house->coop_type) === '3'): echo 'checked'; endif; ?>>
          <span class="block rounded-full border border-garis-tua bg-white px-4 py-2 text-sm font-medium
                       peer-checked:border-hijau peer-checked:bg-hijau peer-checked:text-white
                       peer-focus-visible:outline-2 peer-focus-visible:outline-offset-2 peer-focus-visible:outline-hijau">Umbaran</span>
        </label>
          </div>
          <?php $__errorArgs = ['coop_type'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="mt-1 text-xs font-medium text-merah"><?php echo e($message); ?></p>
          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </fieldset>

        <div>
          <label for="kandang-lokasi" class="mb-1.5 block text-sm font-semibold text-teks">Lokasi kandang</label>
          <input id="kandang-lokasi" name="location" value="<?php echo e(old('location', $house->location)); ?>" maxlength="255" data-wajib placeholder="Contoh: Kandang Area Timur"
            aria-invalid="<?php echo e($errors->has('location') ? 'true' : 'false'); ?>"
            class="block w-full rounded-[10px] border border-garis-tua bg-white px-3.5 py-2.5 text-sm text-teks
              placeholder:text-teks-redup/70
              focus:border-hijau focus:outline-2 focus:outline-hijau/25
              aria-invalid:border-red-400">
          <p data-galat="kandang-lokasi" hidden class="mt-1 text-xs font-medium text-merah">Lokasi wajib diisi.</p>
          <?php $__errorArgs = ['location'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="mt-1 text-xs font-medium text-merah"><?php echo e($message); ?></p>
          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
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
              <input id="kandang-panjang" type="number" step="any" min="0" name="panjang_m" value="<?php echo e(old('panjang_m', $house->panjang_m)); ?>"
                aria-invalid="<?php echo e($errors->has('panjang_m') ? 'true' : 'false'); ?>"
                class="block w-full rounded-[10px] border border-garis-tua bg-white px-3.5 py-2.5 text-sm text-teks rounded-r-none
              placeholder:text-teks-redup/70
              focus:border-hijau focus:outline-2 focus:outline-hijau/25
              aria-invalid:border-red-400">
              <span class="grid place-items-center rounded-r-[10px] border border-l-0 border-garis-tua bg-jalur px-3 text-sm text-teks-redup">m</span>
            </div>
          <?php $__errorArgs = ['panjang_m'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="mt-1 text-xs font-medium text-merah"><?php echo e($message); ?></p>
          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
          </div>
          <div>
            <label for="kandang-lebar" class="mb-1.5 block text-sm font-semibold text-teks">Lebar</label>
            <div class="flex">
              <input id="kandang-lebar" type="number" step="any" min="0" name="lebar_m" value="<?php echo e(old('lebar_m', $house->lebar_m)); ?>"
                aria-invalid="<?php echo e($errors->has('lebar_m') ? 'true' : 'false'); ?>"
                class="block w-full rounded-[10px] border border-garis-tua bg-white px-3.5 py-2.5 text-sm text-teks rounded-r-none
              placeholder:text-teks-redup/70
              focus:border-hijau focus:outline-2 focus:outline-hijau/25
              aria-invalid:border-red-400">
              <span class="grid place-items-center rounded-r-[10px] border border-l-0 border-garis-tua bg-jalur px-3 text-sm text-teks-redup">m</span>
            </div>
          <?php $__errorArgs = ['lebar_m'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="mt-1 text-xs font-medium text-merah"><?php echo e($message); ?></p>
          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
          </div>
          <div class="rounded-[10px] bg-krem px-4 py-2.5">
            <div class="text-xs text-teks-redup">Luas lantai</div>
            <div class="font-display text-xl font-bold tabular-nums text-tinta">
              <span id="kandang-luas">—</span>
              <span id="kandang-luas-satuan" class="hidden text-sm font-normal text-teks-redup">m²</span>
            </div>
          </div>
        </div>
        <p class="text-xs text-teks-redup">Luas dipakai untuk menghitung kepadatan (ekor per m²).</p>
      </div>

      <!-- 3. Catatan -->
      <div class="space-y-4 border-t border-garis pt-6">
        <div>
          <label for="kandang-catatan" class="mb-1.5 block text-sm font-semibold text-teks">
            Catatan <span class="font-normal text-teks-redup">(opsional)</span>
          </label>
          <textarea id="kandang-catatan" name="description" rows="3" placeholder="Contoh: atap seng, kipas di sisi barat"
            aria-invalid="<?php echo e($errors->has('description') ? 'true' : 'false'); ?>"
            class="block w-full rounded-[10px] border border-garis-tua bg-white px-3.5 py-2.5 text-sm text-teks
              placeholder:text-teks-redup/70
              focus:border-hijau focus:outline-2 focus:outline-hijau/25
              aria-invalid:border-red-400"><?php echo e(old('description', $house->description)); ?></textarea>
          <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="mt-1 text-xs font-medium text-merah"><?php echo e($message); ?></p>
          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
      </div>

      <!-- Tombol -->
      <div class="flex items-center justify-between gap-3 border-t border-garis pt-4">
        <a href="<?php echo e(route('admin.houses.index')); ?>" class="inline-flex items-center justify-center rounded-[10px] px-4 py-2.5 text-sm font-semibold transition-colors focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-hijau border border-garis-tua bg-white text-teks-lembut hover:bg-jalur">Batal</a>
        <button type="submit" class="inline-flex items-center justify-center rounded-[10px] px-4 py-2.5 text-sm font-semibold transition-colors focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-hijau bg-hijau text-white hover:bg-tinta">Simpan perubahan</button>
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
        hitungLuas();   // isi awal, mis. setelah validasi server gagal dan old() terisi

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
<?php echo $__env->make('admin.index', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/hamidjumasa/Documents/kandang/src/resources/views/admin/houses/edit.blade.php ENDPATH**/ ?>