<?php $__env->startSection('right_panel'); ?>
    <div class="bg-white w-[23.5rem] rounded-2xl shadow-sm py-[2rem] px-[2rem] h-fit">
        <div class="flex flex-col justify-between">
            <?php if (isset($component)) { $__componentOriginaldf6df202980409a9d3ce131fec366a73 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldf6df202980409a9d3ce131fec366a73 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.auth.form_header','data' => ['heading' => 'Login','subheading' => 'Pengguna baru?','route' => 'register','routeLabel' => 'Buat akun baru']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('auth.form_header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['heading' => 'Login','subheading' => 'Pengguna baru?','route' => 'register','route_label' => 'Buat akun baru']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaldf6df202980409a9d3ce131fec366a73)): ?>
<?php $attributes = $__attributesOriginaldf6df202980409a9d3ce131fec366a73; ?>
<?php unset($__attributesOriginaldf6df202980409a9d3ce131fec366a73); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldf6df202980409a9d3ce131fec366a73)): ?>
<?php $component = $__componentOriginaldf6df202980409a9d3ce131fec366a73; ?>
<?php unset($__componentOriginaldf6df202980409a9d3ce131fec366a73); ?>
<?php endif; ?>

            <div class="mt-3">
                <form id="form_container" action="<?php echo e(route('login.store')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="field_container">
                        <?php if (isset($component)) { $__componentOriginal65bd7e7dbd93cec773ad6501ce127e46 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal65bd7e7dbd93cec773ad6501ce127e46 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.input','data' => ['label' => 'Nama Pengguna','name' => 'name','autocomplete' => 'name','dataRequired' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Nama Pengguna','name' => 'name','autocomplete' => 'name','data-required' => true]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal65bd7e7dbd93cec773ad6501ce127e46)): ?>
<?php $attributes = $__attributesOriginal65bd7e7dbd93cec773ad6501ce127e46; ?>
<?php unset($__attributesOriginal65bd7e7dbd93cec773ad6501ce127e46); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal65bd7e7dbd93cec773ad6501ce127e46)): ?>
<?php $component = $__componentOriginal65bd7e7dbd93cec773ad6501ce127e46; ?>
<?php unset($__componentOriginal65bd7e7dbd93cec773ad6501ce127e46); ?>
<?php endif; ?>
                        <?php if (isset($component)) { $__componentOriginal65bd7e7dbd93cec773ad6501ce127e46 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal65bd7e7dbd93cec773ad6501ce127e46 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.input','data' => ['label' => 'Kata sandi','name' => 'password','type' => 'password','autocomplete' => 'current-password','dataRequired' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Kata sandi','name' => 'password','type' => 'password','autocomplete' => 'current-password','data-required' => true]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal65bd7e7dbd93cec773ad6501ce127e46)): ?>
<?php $attributes = $__attributesOriginal65bd7e7dbd93cec773ad6501ce127e46; ?>
<?php unset($__attributesOriginal65bd7e7dbd93cec773ad6501ce127e46); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal65bd7e7dbd93cec773ad6501ce127e46)): ?>
<?php $component = $__componentOriginal65bd7e7dbd93cec773ad6501ce127e46; ?>
<?php unset($__componentOriginal65bd7e7dbd93cec773ad6501ce127e46); ?>
<?php endif; ?>
                    </div>

                    <div class="flex justify-between mb-3.5">
                        <label class="flex items-center gap-2 text-xs text-stone-700">
                            <input type="checkbox" name="remember" class="size-3 rounded accent-primary" />
                            Ingat saya
                        </label>

                        <a href="#" class="font-semibold text-xs text-secondary hover:underline">Lupa kata sandi?</a>
                    </div>

                    <?php if (isset($component)) { $__componentOriginala8bb031a483a05f647cb99ed3a469847 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala8bb031a483a05f647cb99ed3a469847 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.button','data' => ['name' => 'btn_submit','value' => 'login','type' => 'submit','label' => 'Login','class' => 'w-full justify-center bg-hijau hover:bg-tinta text-white']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'btn_submit','value' => 'login','type' => 'submit','label' => 'Login','class' => 'w-full justify-center bg-hijau hover:bg-tinta text-white']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala8bb031a483a05f647cb99ed3a469847)): ?>
<?php $attributes = $__attributesOriginala8bb031a483a05f647cb99ed3a469847; ?>
<?php unset($__attributesOriginala8bb031a483a05f647cb99ed3a469847); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala8bb031a483a05f647cb99ed3a469847)): ?>
<?php $component = $__componentOriginala8bb031a483a05f647cb99ed3a469847; ?>
<?php unset($__componentOriginala8bb031a483a05f647cb99ed3a469847); ?>
<?php endif; ?>
                </form>
            </div>

            <div class="divider">
                <div class="flex items-center gap-1">
                    <div class="border border-stone-500 flex-1 h-0"></div>
                    <p class="text-md">atau</p>
                    <div class="border border-stone-500 flex-1 h-0"></div>
                </div>
            </div>

            <a href="<?php echo e(route('register.google')); ?>" class="block h-11">
                <div class="h-full bg-secondary rounded-lg hover:bg-primary transition-colors">
                    <div
                        class="h-full w-full flex justify-center py-2.5 bg-secondary rounded-lg hover:bg-primary transition-colors  cursor-pointer">
                        <div class="h-full w-fit flex gap-2 items-center">
                            <div class="w-fit h-full overflow-hidden">
                                <img src="<?php echo e(asset('images/brands/google.svg.svg')); ?>" alt=""
                                    class="w-full h-full object-cover">
                            </div>

                            <p class=" text-md font-bold tracking-tight text-white">Lanjut dengan Google</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('auth.auth', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/hamidjumasa/Documents/kandang/src/resources/views/auth/login.blade.php ENDPATH**/ ?>