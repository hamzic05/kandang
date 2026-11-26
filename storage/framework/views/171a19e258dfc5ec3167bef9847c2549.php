<?php
    $categories = [
        "all" => "Semua",
        "medicine" => "Obat",
        "vitamin" => "Vitamin",
        "vaccine" => "Vaksin",
        "supplement" => "Suplemen"
    ];
    $activeCategory = request('category', 'all');
?>
<div class="flex justify-between items-center">
    <nav class="flex flex-wrap gap-2.5">
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if (isset($component)) { $__componentOriginald9122bd51ea8eeb428efcfc324d53044 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald9122bd51ea8eeb428efcfc324d53044 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.a_button','data' => ['route' => 'admin.medicine.inventory','params' => ['category' => $category],'dataCategory' => ''.e($category).'','ariaCurrent' => $activeCategory === $category ? 'page' : null,'name' => $label,'class' => 'category block rounded-[10px] px-3.5 py-[11px] text-[15px] font-medium aria-[current=page]:bg-hijau-muda aria-[current=page]:text-hijau hover:bg-jalur hover:text-tinta']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.a_button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['route' => 'admin.medicine.inventory','params' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(['category' => $category]),'data-category' => ''.e($category).'','aria-current' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($activeCategory === $category ? 'page' : null),'name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($label),'class' => 'category block rounded-[10px] px-3.5 py-[11px] text-[15px] font-medium aria-[current=page]:bg-hijau-muda aria-[current=page]:text-hijau hover:bg-jalur hover:text-tinta']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald9122bd51ea8eeb428efcfc324d53044)): ?>
<?php $attributes = $__attributesOriginald9122bd51ea8eeb428efcfc324d53044; ?>
<?php unset($__attributesOriginald9122bd51ea8eeb428efcfc324d53044); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald9122bd51ea8eeb428efcfc324d53044)): ?>
<?php $component = $__componentOriginald9122bd51ea8eeb428efcfc324d53044; ?>
<?php unset($__componentOriginald9122bd51ea8eeb428efcfc324d53044); ?>
<?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </nav>

    <?php if (isset($component)) { $__componentOriginald9122bd51ea8eeb428efcfc324d53044 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald9122bd51ea8eeb428efcfc324d53044 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.a_button','data' => ['route' => 'admin.medicine.create','icon' => 'fa-plus','name' => 'Tambah obat','class' => 'gap-2 text-white bg-hijau hover:bg-tinta']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.a_button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['route' => 'admin.medicine.create','icon' => 'fa-plus','name' => 'Tambah obat','class' => 'gap-2 text-white bg-hijau hover:bg-tinta']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald9122bd51ea8eeb428efcfc324d53044)): ?>
<?php $attributes = $__attributesOriginald9122bd51ea8eeb428efcfc324d53044; ?>
<?php unset($__attributesOriginald9122bd51ea8eeb428efcfc324d53044); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald9122bd51ea8eeb428efcfc324d53044)): ?>
<?php $component = $__componentOriginald9122bd51ea8eeb428efcfc324d53044; ?>
<?php unset($__componentOriginald9122bd51ea8eeb428efcfc324d53044); ?>
<?php endif; ?>
</div><?php /**PATH /home/hamidjumasa/Documents/kandang/src/resources/views/admin/medicine/category.blade.php ENDPATH**/ ?>