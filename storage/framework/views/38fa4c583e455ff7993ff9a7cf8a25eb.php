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
<?php $component->withAttributes(['header' => 'Manajemen kesehatan','title' => 'Vitamin dan obat']); ?>
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

    <?php echo $__env->make('admin.medicine.sumcard', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <section aria-label="Persediaan Obat" class="p-[18px] border border-garis bg-white rounded-2xl">
        <div class="flex flex-col gap-4.5">
            <div class="flex items-center justify-between">
                <h2 class="text-xl font-semibold text-tinta">Persediaan obat</h2>
                <div data-dash="kpi-total" class="rounded-[10px] border border-garis-tua px-4 py-2.5 text-sm whitespace-nowrap bg-hijau-muda text-hijau">0 items</div>
            </div>

            
            
            <?php echo $__env->make('admin.medicine.prev_inventory', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        </div>
    </section>

    <script data-dash="data" type="applicaton/json">{"tanggal": "<?php echo e(now('Asia/Jakarta')->format('Y-m-d')); ?>"}</script>
<?php $__env->stopSection(); ?>
            
<?php echo $__env->make('admin.index', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/hamidjumasa/Documents/kandang/src/resources/views/admin/medicine/medicine.blade.php ENDPATH**/ ?>