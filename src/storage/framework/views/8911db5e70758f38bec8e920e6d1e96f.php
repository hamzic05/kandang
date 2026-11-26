<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'number' => '',
    'title' => '',
    'icon' => '',
    'icon_color' => 'text-hijau'
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
    'number' => '',
    'title' => '',
    'icon' => '',
    'icon_color' => 'text-hijau'
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<div class="flex flex-col items-center justify-between">
    <div class="flex">
        <span class="py-0.8 px-2.5 rounded-full bg-hijau text-white"><?php echo e($number); ?></span>
        <h4 class="ml-2 text-xl font-bold text-tinta"><?php echo e($title); ?></h4>
    </div>

    <div class="w-full flex-1 shrink-0 rounded-2xl flex items-center justify-center mt-5 lg:mt-1">
        <i class="fa-solid <?php echo e($icon); ?> text-7xl <?php echo e($icon_color); ?>"></i>
    </div>
</div><?php /**PATH /home/hamidjumasa/Documents/kandang/src/resources/views/components/admin/medicine/section_header.blade.php ENDPATH**/ ?>