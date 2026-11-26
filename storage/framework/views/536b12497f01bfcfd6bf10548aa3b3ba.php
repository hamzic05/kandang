<div class="p-[18px] border border-hijau rounded-2xl">
    <div data-dash="medicines" class="flex flex-col">
        <?php if (isset($component)) { $__componentOriginalaed84761345f1c02d116cf0ced053f4a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalaed84761345f1c02d116cf0ced053f4a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.medicine.item','data' => ['id' => 1,'name' => 'Vitamin B Complex','type' => 'Vitamin','stock' => '12 botol','isActive' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.medicine.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 1,'name' => 'Vitamin B Complex','type' => 'Vitamin','stock' => '12 botol','is_active' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalaed84761345f1c02d116cf0ced053f4a)): ?>
<?php $attributes = $__attributesOriginalaed84761345f1c02d116cf0ced053f4a; ?>
<?php unset($__attributesOriginalaed84761345f1c02d116cf0ced053f4a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalaed84761345f1c02d116cf0ced053f4a)): ?>
<?php $component = $__componentOriginalaed84761345f1c02d116cf0ced053f4a; ?>
<?php unset($__componentOriginalaed84761345f1c02d116cf0ced053f4a); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginalaed84761345f1c02d116cf0ced053f4a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalaed84761345f1c02d116cf0ced053f4a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.medicine.item','data' => ['id' => 2,'name' => 'Vitamin C Complex','type' => 'Vitamin','stock' => '12 botol','isActive' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.medicine.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 2,'name' => 'Vitamin C Complex','type' => 'Vitamin','stock' => '12 botol','is_active' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalaed84761345f1c02d116cf0ced053f4a)): ?>
<?php $attributes = $__attributesOriginalaed84761345f1c02d116cf0ced053f4a; ?>
<?php unset($__attributesOriginalaed84761345f1c02d116cf0ced053f4a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalaed84761345f1c02d116cf0ced053f4a)): ?>
<?php $component = $__componentOriginalaed84761345f1c02d116cf0ced053f4a; ?>
<?php unset($__componentOriginalaed84761345f1c02d116cf0ced053f4a); ?>
<?php endif; ?>
    </div>

    <div class="text-sm py-2 text-center font-semibold text-hijau
              transition-colors hover:text-tinta">
        <a href="<?php echo e(route('admin.medicine.inventory')); ?>">Lihat seluruh persediaan &raquo;</a>
    </div>
</div><?php /**PATH /home/hamidjumasa/Documents/kandang/src/resources/views/admin/medicine/prev_inventory.blade.php ENDPATH**/ ?>