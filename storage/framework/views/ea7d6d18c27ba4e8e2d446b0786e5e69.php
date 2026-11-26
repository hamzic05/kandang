<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['header' => '', 'title' => '']));

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

foreach (array_filter((['header' => '', 'title' => '']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<header class="flex flex-col items-start justify-between gap-4 sm:flex-row sm:items-end">
    <div>
    <p class="text-sm text-teks-redup"><?php echo e($header); ?></p>
    <h1 class="mt-1 font-display text-[26px] leading-tight font-bold text-tinta sm:text-[32px]"><?php echo e($title); ?></h1>
    </div>
    <div data-dash="tanggal" class="rounded-[10px] border border-garis-tua bg-white px-4 py-2.5 text-sm whitespace-nowrap"></div>
</header><?php /**PATH /home/hamidjumasa/Documents/kandang/src/resources/views/components/partials/admin/header.blade.php ENDPATH**/ ?>