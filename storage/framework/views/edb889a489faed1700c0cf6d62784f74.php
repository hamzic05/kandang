<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'heading' => '',
    'subheading' => '',
    'route' => null,
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
    'heading' => '',
    'subheading' => '',
    'route' => null,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<div class="">
    <h1 class="font-serif text-3xl font-bold text-primary mb-1"><?php echo e($heading); ?></h1>
    <div class="flex gap-1.5 items-center">
        <p class="text-sm  text-stone-500"><?php echo e($subheading); ?></p>

        <?php if($route && $attributes->has('route_label')): ?>
            <a href="<?php echo e(route($route)); ?>" class=" underline text-sm"><?php echo e($attributes->get('route_label')); ?></a>
        <?php endif; ?>
    </div>
</div><?php /**PATH /home/hamidjumasa/Documents/kandang/src/resources/views/components/auth/form_header.blade.php ENDPATH**/ ?>