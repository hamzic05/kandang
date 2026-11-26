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
<?php $component->withAttributes(['header' => 'Informasi Detail Zona Kandang Ayam','title' => 'Detail Zona Kandang Ayam']); ?>
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
    <?php if(session('success')): ?>
        <div class="mb-4 rounded-lg bg-hijau/10 px-4 py-3 text-sm font-medium text-hijau">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>
    <section data-inventory aria-label="Kandang" class="p-[18px] border border-garis rounded-2xl overflow-hidden bg-white">
        <header class="mb-5">
            <div class="grid w-full grid-cols-1 gap-4 sm:grid-cols-[minmax(0,1fr)_auto] sm:items-center">

            </div>
        </header>

        <div class="overflow-hidden rounded-xl border border-garis bg-white">

            <div class="overflow-x-auto">
                <table class="w-full min-w-[900px] border-collapse text-sm">

                    <thead class="bg-krem/60">
                        <tr>
                            <th class="px-5 py-3 text-left text-xs font-semibold uppercase tracking-wide text-teks-redup">
                                No
                            </th>
                            <th class="px-5 py-3 text-left text-xs font-semibold uppercase tracking-wide text-teks-redup">
                                Kode Kandang
                            </th>
                            <th class="px-5 py-3 text-left text-xs font-semibold uppercase tracking-wide text-teks-redup">
                                Kandang
                            </th>
                            <th class="px-5 py-3 text-left text-xs font-semibold uppercase tracking-wide text-teks-redup">
                                Kode Zona
                            </th>
                            <th class="px-4 py-3 text-left text-xs font-semibold uppercase tracking-wide text-teks-redup">
                                Zona Kandang
                            </th>
                            <th class="px-4 py-3 text-left text-xs font-semibold uppercase tracking-wide text-teks-redup">
                                Kapasitas
                            </th>
                            <th class="px-4 py-3 text-left text-xs font-semibold uppercase tracking-wide text-teks-redup">
                                Status
                            </th>
                            <th class="px-4 py-3 text-center text-xs font-semibold uppercase tracking-wide text-teks-redup">
                                Deskripsi
                            </th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-garis">
                        <?php $no = 1; ?>
                        <?php $__empty_1 = true; $__currentLoopData = $houses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $house): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                                        <tr class="hover:bg-krem/30">

                                            <td class="px-4 py-4">
                                                <?php echo e($no++); ?>

                                            </td>
                                            <td class="px-5 py-4">
                                                <?php echo e($house->houses->code); ?>


                                            </td>

                                            <td class="px-4 py-4 text-teks-lembut">
                                                <?php echo e($house->houses->name); ?>

                                            </td>

                                            <td class="px-4 py-4">
                                                <?php echo e($house->kode); ?>

                                            </td>

                                            <td class="px-4 py-4">
                                                <?php echo e($house->nama); ?>

                                            </td>
                                            </td>
                                            <td class="px-4 py-4">
                                                <?php echo e($house->capacity); ?>

                                            </td>

                                            <td class="px-4 py-4">
                                                <form action="<?php echo e(route('admin.zones.changeStatus', $house->id)); ?>" method="POST"
                                                    class="form-status">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('PATCH'); ?>

                                                    <select name="status" class="status-select cursor-pointer rounded-full border-0
                                                                                                                    px-3 py-1 text-xs font-medium shadow-sm
                                                                                                                    focus:ring-2 focus:ring-hijau/30
                                                                                                                    <?php echo e($house->status == 1
                            ? 'bg-hijau/10 text-hijau'
                            : 'bg-merah/10 text-merah'); ?>" onchange="ubahStatus(this)">

                                                        <option value="1" <?php echo e($house->status == 1 ? 'selected' : ''); ?>>
                                                            Aktif
                                                        </option>

                                                        <option value="0" <?php echo e($house->status == 0 ? 'selected' : ''); ?>>
                                                            Tidak Aktif
                                                        </option>

                                                    </select>
                                                </form>
                                            </td>
                                            <td class="px-4 py-4">
                                                <?php echo e($house->description); ?>

                                            </td>
                                        </tr>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tr>
                                <td>
                                    <br>
                                    <p style="padding-left:20px;">Data tidak ditemukan</p>
                                    <br>
                                </td>
                            </tr>

                        <?php endif; ?>

                    </tbody>
                </table>
            </div>

            
            <div class="flex items-center justify-between border-t border-garis bg-white px-5 py-3">
                <span class="text-xs text-teks-redup">
                    Menampilkan <?php echo e($count); ?> kandang
                </span>
                <span class="text-xs font-medium text-teks-lembut">
                    Data kandang
                </span>
            </div>

        </div>

    </section>
    <script>
        function ubahStatus(select) {

            const form = select.closest('form');

            const konfirmasi = confirm(
                'Apakah Anda yakin ingin mengubah status zona kandang?'
            );

            if (konfirmasi) {
                form.submit();
            } else {
                location.reload();
            }
        }
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.index', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/hamidjumasa/Documents/kandang/src/resources/views/admin/zones/show.blade.php ENDPATH**/ ?>