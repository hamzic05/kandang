<?php if (isset($component)) { $__componentOriginal5863877a5171c196453bfa0bd807e410 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5863877a5171c196453bfa0bd807e410 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.app','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.app'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('content', null, []); ?> 
        <div class="h-screen grid grid-cols-1 lg:grid-cols-2">
            <div class="left_panel hidden lg:block bg-primary py-[6rem] px-[4rem]">
                <div class="h-full">
                    <div class="h-2/3 relative">
                        <div class=" space-y-6 absolute bottom-10">
                            <h2 class="font-serif text-[3rem] font-semibold leading-[0.98] tracking-[-0.01em] text-[#FCFCFC] text-balance md:text-[3.6rem] lg:pt-0 lg:text-[3rem]">Ayam sehat, tenang, dan rajin bertelur</h2>
                            <p class=" max-w-xs font-sans text-lg leading-relaxed lg:text-[1rem] text-[#B8C7B8]">Catat telur, pantau kesehatan, dan terima peringatan sebelum produksi turun</p>
                        </div>
                    </div>

                    <div class="relative h-1/3">
                        <div class="absolute bottom-0">
                            <p class="font-sans max-w-xs text-sm leading-relaxed lg:text-[1rem] text-[#B8C7B8]">Alat bantu pencatatan. Tidak menggantikan peran dokter hewan</p>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="right_panel bg-[#f5f1e8] flex justify-center items-center">
                <?php if (isset($component)) { $__componentOriginalfc4b74548194015575982b8b0f3f03ef = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfc4b74548194015575982b8b0f3f03ef = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.auth.auth_card','data' => ['attributes' => $attributes]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.auth.auth_card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attributes)]); ?>
                     <?php $__env->slot('auth_part', null, []); ?> 
                        <?php echo e($auth_part ?? ""); ?>

                     <?php $__env->endSlot(); ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfc4b74548194015575982b8b0f3f03ef)): ?>
<?php $attributes = $__attributesOriginalfc4b74548194015575982b8b0f3f03ef; ?>
<?php unset($__attributesOriginalfc4b74548194015575982b8b0f3f03ef); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfc4b74548194015575982b8b0f3f03ef)): ?>
<?php $component = $__componentOriginalfc4b74548194015575982b8b0f3f03ef; ?>
<?php unset($__componentOriginalfc4b74548194015575982b8b0f3f03ef); ?>
<?php endif; ?>
            </div>
        </div>
     <?php $__env->endSlot(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5863877a5171c196453bfa0bd807e410)): ?>
<?php $attributes = $__attributesOriginal5863877a5171c196453bfa0bd807e410; ?>
<?php unset($__attributesOriginal5863877a5171c196453bfa0bd807e410); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5863877a5171c196453bfa0bd807e410)): ?>
<?php $component = $__componentOriginal5863877a5171c196453bfa0bd807e410; ?>
<?php unset($__componentOriginal5863877a5171c196453bfa0bd807e410); ?>
<?php endif; ?><?php /**PATH /home/hamidjumasa/Documents/kandang/src/resources/views/components/layouts/auth.blade.php ENDPATH**/ ?>