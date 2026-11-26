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

    <?php if(session('success')): ?>
        <div class="mb-4 rounded-lg bg-hijau/10 px-4 py-3 text-sm font-medium text-hijau">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>
    <section data-inventory aria-label="Kandang" class="p-[18px] border border-garis rounded-2xl overflow-hidden bg-white">
        <header class="mb-5">
            <div class="grid w-full grid-cols-1 gap-4 sm:grid-cols-[minmax(0,1fr)_auto] sm:items-center">

                <a href="<?php echo e(route('admin.houses.create')); ?>" class="inline-flex shrink-0 items-center justify-center gap-2
                                  rounded-[10px] bg-hijau px-4 py-3
                                  text-sm font-semibold text-white
                                  whitespace-nowrap transition-colors hover:bg-tinta
                                  sm:justify-self-end">

                    <i class="fa-solid fa-plus"></i>
                    <span>Tambah Kandang</span>

                </a>

            </div>
        </header>

        <div class="overflow-hidden rounded-xl border border-garis bg-white">

            <div class="overflow-x-auto">
                <table class="w-full min-w-[900px] border-collapse text-sm">

                    <thead class="bg-krem/60">
                        <tr>
                            <th class="px-5 py-3 text-left text-xs font-semibold uppercase tracking-wide text-teks-redup">
                                Kode
                            </th>
                            <th class="px-4 py-3 text-left text-xs font-semibold uppercase tracking-wide text-teks-redup">
                                Nama
                            </th>
                            <th class="px-4 py-3 text-left text-xs font-semibold uppercase tracking-wide text-teks-redup">
                                Ukuran
                            </th>
                            <th class="px-4 py-3 text-left text-xs font-semibold uppercase tracking-wide text-teks-redup">
                                Jenis Kandang
                            </th>
                            <th class="px-4 py-3 text-center text-xs font-semibold uppercase tracking-wide text-teks-redup">
                                Deskripsi
                            </th>
                            <th class="px-5 py-3 text-right text-xs font-semibold uppercase tracking-wide text-teks-redup">
                                Aksi
                            </th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-garis">

                        <?php $__empty_1 = true; $__currentLoopData = $houses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $house): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr class="hover:bg-krem/30">

                                <td class="px-5 py-4">
                                    <div class="font-semibold text-tinta"><?php echo e($house->code); ?></div>
                                    <div class="mt-1 text-xs text-teks-redup">
                                        <?php echo e($house->name); ?>

                                    </div>
                                </td>

                                <td class="px-4 py-4 text-teks-lembut">
                                    <?php echo e($house->location); ?>

                                </td>

                                <td class="px-4 py-4">
                                    <div class="font-medium text-tinta"><?php echo e($house->dimensions); ?></div>
                                    <div class="mt-1 text-xs text-teks-redup"><?php echo e($house->total_area); ?></div>
                                </td>

                                <td class="px-4 py-4">
                                    <?php if($house->coop_type === '1'): ?>
                                        <span
                                            class="inline-flex items-center gap-2 rounded-full bg-hijau/10 px-3 py-1 text-xs font-medium text-hijau">
                                            <i class="fa-solid fa-layer-group"></i>
                                            Baterai (Sangkar)
                                        </span>
                                    <?php elseif($house->coop_type === '2'): ?>
                                        <span
                                            class="inline-flex items-center gap-2 rounded-full bg-hijau/10 px-3 py-1 text-xs font-medium text-hijau">
                                            <i class="fa-solid fa-layer-group"></i>
                                            Lantai (Litter)
                                        </span>
                                    <?php elseif($house->coop_type === '3'): ?>
                                        <span
                                            class="inline-flex items-center gap-2 rounded-full bg-hijau/10 px-3 py-1 text-xs font-medium text-hijau">
                                            <i class="fa-solid fa-layer-group"></i>
                                            Umbaran
                                        </span>
                                    <?php endif; ?>
                                </td>
                                </td>
                                <td class="px-4 py-4">
                                    <?php echo e($house->description); ?>

                                </td>
                                <td class="px-5 py-4">
                                    <div class="flex items-center justify-end gap-2">

                                        <a href="<?php echo e(route('admin.houses.edit', $house->id)); ?>" title="Ubah Kandang"
                                            class="flex h-8 w-8 items-center justify-center rounded-lg text-teks-redup hover:bg-krem hover:text-hijau">
                                            <i class="fa-solid fa-pen"></i>
                                        </a>
                                        <form action="<?php echo e(route('admin.houses.destroy', $house->id)); ?>" method="POST"
                                            onsubmit="return confirm('Hapus kandang ini?')">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>

                                            <button type="submit" title="Hapus Kandang"
                                                class="flex h-8 w-8 items-center justify-center rounded-lg text-teks-redup hover:bg-krem hover:text-hijau">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tr class="hover:bg-krem/30">
                                <td class="px-4 py-4">
                                    <p>Data tidak ditemukan</p>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.index', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/hamidjumasa/Documents/kandang/src/resources/views/admin/houses/index.blade.php ENDPATH**/ ?>