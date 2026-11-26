<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['id', 'name' => '', 'type' => '', 'stock' => '', 'is_active' => true]));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['id', 'name' => '', 'type' => '', 'stock' => '', 'is_active' => true]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<div data-dash="medicine" class="flex justify-between items-center border-b py-5">
    <div class="">
        <a href="<?php echo e(route('admin.medicine.show', $id)); ?>" class="text-base text-hijau font-bold hover:underline transition-colors"><?php echo e($name); ?></a>
        <p class="mt-1.5 text-sm teks-lembut"><?php echo e($type); ?></p>
    </div>

    <div class="flex gap-8 items-center">
        <div class="flex items-center gap-3.5">
            <a class="edit text-hijau" 
            href="<?php echo e(route('admin.medicine.edit', $id)); ?>">
                <i class="fa-solid fa-pen-to-square"></i>
            </a>
            <div class="">
                <h4 class="text-md text-hijau font-bold"><?php echo e($stock); ?></h4>
                <p class="max-w-2.5  mt-1.5 text-sm teks-lembut"><?php echo e($is_active ? 'tersedia' : 'tidak tersedia'); ?></p>
            </div>
        </div>

        <input type="checkbox" name="selected_medicines[]" value="<?php echo e($id); ?>" class="item_checkbox hidden w-4 h-4 text-emerald-600 bg-white border-stone-300 rounded focus:ring-emerald-500 cursor-pointer">
    </div>
</div><?php /**PATH /home/hamidjumasa/Documents/kandang/src/resources/views/components/admin/medicine/item.blade.php ENDPATH**/ ?>