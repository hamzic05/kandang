<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'label' => "Button"
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
    'label' => "Button"
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<Button <?php echo e($attributes->except('icon')->merge([
        'class' => "cursor-pointer flex items-center gap-2 rounded-[10px] px-3.5 py-[11px] text-[15px] font-medium text-stone-700 shadow-sm teks-lembut hover:bg-jalur transition-colors"   
    ])); ?>

    >

    <?php if($attributes->has('icon')): ?>
        <i class="fa-solid <?php echo e($attributes->get('icon')); ?>"></i>
    <?php endif; ?>
    <span><?php echo e($label); ?></span>
</Button><?php /**PATH /home/hamidjumasa/Documents/kandang/src/resources/views/components/ui/button.blade.php ENDPATH**/ ?>