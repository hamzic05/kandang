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
<?php $component->withAttributes(['header' => 'Informasi Zona Kandang Ayam','title' => 'Zona Kandang Ayam']); ?>
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

  <section data-inventory aria-label="Zona" class="rounded-2xl border border-garis bg-white p-[18px]">

    
    <form id="form-zona" action="<?php echo e(route('admin.zones.store')); ?>" method="post" novalidate class="w-full space-y-6">
      <?php echo csrf_field(); ?>

      <!-- 1. Data zona -->
      <div class="space-y-4">
        <h3 class="font-display text-xl font-semibold text-tinta">Tambah Zona Dalam Kandang</h3>
        <div>
    <label for="zona-house" class="mb-1.5 block text-sm font-semibold text-teks">Kandang</label>

    <select id="zona-house" name="house_id" data-wajib
        aria-invalid="<?php echo e($errors->has('house_id') ? 'true' : 'false'); ?>"
        class="block w-full rounded-[10px] border border-garis-tua bg-white px-3.5 py-2.5 text-sm text-teks
               placeholder:text-teks-redup/70
               focus:border-hijau focus:outline-2 focus:outline-hijau/25
               aria-invalid:border-red-400">
        <option value="">Pilih kandang</option>

        <?php $__currentLoopData = $houses_id; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $house): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php $terpakai = in_array((string) $house->id, $checkZone, true); ?>

            <option value="<?php echo e($house->id); ?>"
                <?php if($terpakai): echo 'disabled'; endif; ?>
                <?php if(! $terpakai && (string) old('house_id') === (string) $house->id): echo 'selected'; endif; ?>>
                <?php echo e($house->code); ?> · <?php echo e($house->name); ?><?php echo e($terpakai ? ' (sudah diisi)' : ''); ?>

            </option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>

    <p data-galat="zona-house" hidden class="mt-1 text-xs font-medium text-merah">Pilih kandang untuk zona ini.</p>

    <?php $__errorArgs = ['house_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <p class="mt-1 text-xs font-medium text-merah"><?php echo e($message); ?></p>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

    <p class="mt-1 text-xs text-teks-redup">Zona (kamar) adalah satu bagian di dalam kandang.</p>
</div>

        <div class="grid gap-4 sm:grid-cols-6 lg:grid-cols-12">
          <div class="sm:col-span-2 lg:col-span-3">
            <label for="zona-code" class="mb-1.5 block text-sm font-semibold text-teks">Kode</label>
            <input id="zona-code" name="code" value="<?php echo e(old('code')); ?>" maxlength="10" data-wajib placeholder="A"
              aria-invalid="<?php echo e($errors->has('code') ? 'true' : 'false'); ?>"
              class="block w-full rounded-[10px] border border-garis-tua bg-white px-3.5 py-2.5 text-sm text-teks uppercase
              placeholder:text-teks-redup/70
              focus:border-hijau focus:outline-2 focus:outline-hijau/25
              aria-invalid:border-red-400">
            <p data-galat="zona-code" hidden class="mt-1 text-xs font-medium text-merah">Kode wajib diisi.</p>
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
            <p class="mt-1 text-xs text-teks-redup">Huruf kamar: A sampai F.</p>
          </div>
          <div class="sm:col-span-4 lg:col-span-9">
            <label for="zona-name" class="mb-1.5 block text-sm font-semibold text-teks">Nama zona</label>
            <input id="zona-name" name="name" value="<?php echo e(old('name')); ?>" maxlength="60" data-wajib placeholder="Contoh: Kamar A"
              aria-invalid="<?php echo e($errors->has('name') ? 'true' : 'false'); ?>"
              class="block w-full rounded-[10px] border border-garis-tua bg-white px-3.5 py-2.5 text-sm text-teks
              placeholder:text-teks-redup/70
              focus:border-hijau focus:outline-2 focus:outline-hijau/25
              aria-invalid:border-red-400">
            <p data-galat="zona-name" hidden class="mt-1 text-xs font-medium text-merah">Nama wajib diisi.</p>
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

        <div class="sm:max-w-xs">
          <label for="zona-capacity" class="mb-1.5 block text-sm font-semibold text-teks">Kapasitas</label>
          <div class="flex">
            <input id="zona-capacity" type="number" min="1" name="capacity" value="<?php echo e(old('capacity', 100)); ?>" data-wajib placeholder="100"
              aria-invalid="<?php echo e($errors->has('capacity') ? 'true' : 'false'); ?>"
              class="block w-full rounded-[10px] border border-garis-tua bg-white px-3.5 py-2.5 text-sm text-teks rounded-r-none
              placeholder:text-teks-redup/70
              focus:border-hijau focus:outline-2 focus:outline-hijau/25
              aria-invalid:border-red-400">
            <span class="grid place-items-center rounded-r-[10px] border border-l-0 border-garis-tua bg-jalur px-3 text-sm text-teks-redup">ekor</span>
          </div>
          <p data-galat="zona-capacity" hidden class="mt-1 text-xs font-medium text-merah">Kapasitas minimal 1 ekor.</p>
        <?php $__errorArgs = ['capacity'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
          <p class="mt-1 text-xs font-medium text-merah"><?php echo e($message); ?></p>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
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
            aria-invalid="<?php echo e($errors->has('description') ? 'true' : 'false'); ?>"
            class="block w-full rounded-[10px] border border-garis-tua bg-white px-3.5 py-2.5 text-sm text-teks
              placeholder:text-teks-redup/70
              focus:border-hijau focus:outline-2 focus:outline-hijau/25
              aria-invalid:border-red-400"><?php echo e(old('description')); ?></textarea>
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

        <div class="space-y-2.5">
          
          <input type="hidden" name="status" value="0">
          <label class="flex items-center gap-2.5 text-sm">
            <input type="checkbox" name="status" value="1" <?php if((string) old('status', '1') === '1'): echo 'checked'; endif; ?> class="size-4 accent-hijau">
            Zona aktif (bisa menerima ayam)
          </label>

          <input type="hidden" name="generate_slots" value="0">
          <label class="flex items-start gap-2.5 text-sm">
            <input type="checkbox" name="generate_slots" value="1" <?php if((string) old('generate_slots', '1') === '1'): echo 'checked'; endif; ?> class="mt-0.5 size-4 accent-hijau">
            <span>
              Buat slot otomatis
              <span class="block text-xs text-teks-redup">Slot bernomor 1 sampai <b id="zona-jumlah-slot"><?php echo e(old('capacity', 100)); ?></b>, satu slot untuk satu ekor. Slot yang sudah ada tidak dihapus.</span>
            </span>
          </label>
        </div>
      </div>

      <!-- Tombol -->
      <div class="flex items-center justify-between gap-3 border-t border-garis pt-4">
        <a href="<?php echo e(route('admin.zones.index')); ?>" class="inline-flex items-center justify-center rounded-[10px] px-4 py-2.5 text-sm font-semibold transition-colors focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-hijau border border-garis-tua bg-white text-teks-lembut hover:bg-jalur">Batal</a>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.index', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/hamidjumasa/Documents/kandang/src/resources/views/admin/zones/create.blade.php ENDPATH**/ ?>