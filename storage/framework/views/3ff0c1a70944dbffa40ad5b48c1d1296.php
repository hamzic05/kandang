<nav aria-label="Breadcrumb">
    <ol class="flex items-center gap-2 text-sm">

        <?php $__currentLoopData = $breadcrumbs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <?php if($index > 0): ?>
                <li class="text-teks-lembut">/</li>
            <?php endif; ?>

            <li>
                <?php if($item['url']): ?>
                    <a href="<?php echo e($item['url']); ?>"
                       class="text-teks-lembut hover:text-tinta transition-colors">
                        <?php echo e($item['title']); ?>

                    </a>
                <?php else: ?>
                    <span
                        class="font-semibold text-tinta"
                        aria-current="page">
                        <?php echo e($item['title']); ?>

                    </span>
                <?php endif; ?>
            </li>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </ol>
</nav><?php /**PATH /home/hamidjumasa/Documents/kandang/src/resources/views/components/partials/admin/breadcrumb.blade.php ENDPATH**/ ?>