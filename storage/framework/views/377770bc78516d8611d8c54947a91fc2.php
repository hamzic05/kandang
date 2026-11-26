<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'label' => '',
    'name' => ''
]));

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

foreach (array_filter(([
    'label' => '',
    'name' => ''
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<div class="mb-3.5">
    <label for="<?php echo e($name); ?>" class="block text-xs font-semibold text-stone-800 mb-1.5"><?php echo e($label); ?></label>
    <textarea id="<?php echo e($name); ?>" name="<?php echo e($name); ?>" rows="3"
    <?php echo e($attributes->merge([
        'class' => "field w-full rounded-lg border border-stone-300 text-sm outline-none px-3 py-2 focus:border-primary focus:ring-1 focus:ring-[#2f5d3a]"
    ])); ?>

    ></textarea>
</div><?php /**PATH /home/hamidjumasa/Documents/kandang/src/resources/views/components/ui/textarea.blade.php ENDPATH**/ ?>