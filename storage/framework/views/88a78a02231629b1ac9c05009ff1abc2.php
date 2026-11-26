<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['icon' => '', 'label' => '', 'value' => '0', 'desc' => '', 'icon_color' => 'text-hijau', 'value_color' => 'text-tinta']));

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

foreach (array_filter((['icon' => '', 'label' => '', 'value' => '0', 'desc' => '', 'icon_color' => 'text-hijau', 'value_color' => 'text-tinta']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<div <?php echo e($attributes->except('icon_color', 'value_color')->merge([
    'class' => "kartu p-[18px] flex flex-col gap-1"
])); ?>>
    <i class="fa-solid <?php echo e($icon); ?> <?php echo e($icon_color); ?>"></i>
    <div class="text-[13px] text-teks-redup"><?php echo e($label); ?></div>
    <div data-dash="kpi-total" class="angka-judul text-[34px] leading-tight <?php echo e($value_color); ?>"><?php echo e($value); ?></div>
    <div class="text-[13px] text-teks-redup"><?php echo e($value); ?> <?php echo e($desc); ?></div>
</div><?php /**PATH /home/hamidjumasa/Documents/kandang/src/resources/views/components/admin/card.blade.php ENDPATH**/ ?>