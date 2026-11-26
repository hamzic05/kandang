<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
    <title><?php echo e($title ?? ""); ?></title>
</head>
<body>
    <?php if (isset($component)) { $__componentOriginal4496cc5348a58740d2495b7b8f8911b3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4496cc5348a58740d2495b7b8f8911b3 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.partials.landing.header','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('partials.landing.header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4496cc5348a58740d2495b7b8f8911b3)): ?>
<?php $attributes = $__attributesOriginal4496cc5348a58740d2495b7b8f8911b3; ?>
<?php unset($__attributesOriginal4496cc5348a58740d2495b7b8f8911b3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4496cc5348a58740d2495b7b8f8911b3)): ?>
<?php $component = $__componentOriginal4496cc5348a58740d2495b7b8f8911b3; ?>
<?php unset($__componentOriginal4496cc5348a58740d2495b7b8f8911b3); ?>
<?php endif; ?>
    
    <main>
        <?php echo e($content ?? ""); ?>

    </main>
</body>
</html><?php /**PATH /home/hamidjumasa/Documents/kandang/src/resources/views/components/layouts/app.blade.php ENDPATH**/ ?>