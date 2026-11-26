<?php $__env->startSection('content'); ?>
    <div class="h-screen grid grid-cols-1 lg:grid-cols-2">
        <?php echo $__env->make('auth.left_panel', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        
        <div class="right_panel bg-[#f5f1e8] flex justify-center items-center">
            <?php echo $__env->yieldContent('right_panel'); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('landing.index', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/hamidjumasa/Documents/kandang/src/resources/views/auth/auth.blade.php ENDPATH**/ ?>