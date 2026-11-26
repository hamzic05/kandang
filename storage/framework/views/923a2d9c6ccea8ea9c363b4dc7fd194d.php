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
         <?php $__env->slot('page_header', null, []); ?> Informasi Zona Kandang Ayam <?php $__env->endSlot(); ?>
         <?php $__env->slot('page_title', null, []); ?> Zona Kandang Ayam <?php $__env->endSlot(); ?>
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

               
                <a href="<?php echo e(route('admin.zones.create')); ?>" class="inline-flex shrink-0 items-center justify-center gap-2
                      rounded-[10px] bg-hijau px-4 py-3
                      text-sm font-semibold text-white
                      whitespace-nowrap transition-colors hover:bg-tinta
                      sm:justify-self-end">

                    <i class="fa-solid fa-plus"></i>
                    <span>Tentukan Zona Kandang</span>

                </a>

            </div>
        </header>

        <div class="overflow-hidden rounded-xl border border-garis bg-white">
            <div class="overflow-x-auto">
                <table class="w-full min-w-[900px] border-collapse text-sm">

                    <thead class="bg-krem/60">
                        <tr>
                            <th class="px-4 py-3 text-left text-xs font-semibold uppercase tracking-wide text-teks-redup">
                                Kode Zona
                            </th>
                            <th class="px-4 py-3 text-left text-xs font-semibold uppercase tracking-wide text-teks-redup">
                                Nama
                            </th>
                            <th
                                class="w-64 px-4 py-3 text-left text-xs font-semibold uppercase tracking-wide text-teks-redup">
                                Nomor Kandang
                            </th>
                            <th
                                class="w-64 px-4 py-3 text-left text-xs font-semibold uppercase tracking-wide text-teks-redup">
                                Kapasitas Kandang
                            </th>
                            <th class="px-4 py-3 text-center text-xs font-semibold uppercase tracking-wide text-teks-redup">
                                Status
                            </th>
                            <th class="px-5 py-3 text-right text-xs font-semibold uppercase tracking-wide text-teks-redup">
                                Aksi
                            </th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-garis">

                        <?php $__empty_1 = true; $__currentLoopData = $zoneChicken; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $zone): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr class="hover:bg-krem/30">

                                <td class="px-5 py-4">
                                    <?php echo e($zone->code); ?>

                                </td>
                                <td class="px-4 py-4 text-teks-lembut">
                                    <?php echo e($zone->name); ?>

                                </td>
                                <td class="px-4 py-4 text-teks-lembut">
                                    <span class="lencana bg-hijau-muda text-hijau">
                                        <div class="font-semibold text-tinta"> <?php echo e($zone->houses->code ?? 'N/A'); ?></div>
                                        <div class="mt-1 text-xs text-teks-redup">
                                            <?php echo e($zone->houses->name ?? 'N/A'); ?>

                                        </div>
                                    </span>
                                </td>
                                <td class="px-4 py-4 text-teks-lembut">
                                    <?php echo e($zone->capacity); ?>

                                </td>
                                <td class="px-4 py-4 text-center">
                                    <?php if($zone->status == 1): ?>
                               <span class="bg-green-100 text-green-700 px-2 py-1 rounded font-medium">
    Aktif
                               </span>
                                
                            <?php else: ?>
                            <span class="bg-red-100 text-red-700 px-2 py-1 rounded font-medium">
Tidak Aktif
                            </span>    
                            
                            <?php endif; ?>
                        
                            
                        </span>
                    </td>

                                <td class="px-5 py-4">
                                    <div class="flex items-center justify-end gap-2">
                                        <a href="#" title="Detail kandang"
                                            class="flex h-8 w-8 items-center justify-center rounded-lg text-teks-redup hover:bg-krem hover:text-hijau">
                                            <i class="fa-solid fa-eye"></i>
                                        </a>
                                        <a href="#" title="Ubah kandang"
                                            class="flex h-8 w-8 items-center justify-center rounded-lg text-teks-redup hover:bg-krem hover:text-hijau">
                                            <i class="fa-solid fa-pen"></i>
                                        </a>
                                        <form action="#" method="POST"
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
                            <tr>
                                <td colspan="7" class="px-5 py-4 text-center text-teks-redup">
                                    Tidak ada data kandang tersedia.
                                </td>
                            </tr>
                        <?php endif; ?>

                    </tbody>
                </table>
            </div>

            
            <div class="flex items-center justify-between border-t border-garis bg-white px-5 py-3">
                <span class="text-xs text-teks-redup">
                    Menampilkan <?php echo e($zoneCount); ?> kandang
                </span>
                <span class="text-xs font-medium text-teks-lembut">
                    Data kandang
                </span>
            </div>

        </div>

    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.index', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/hamidjumasa/Documents/kandang/src/resources/views/admin/zone/index.blade.php ENDPATH**/ ?>