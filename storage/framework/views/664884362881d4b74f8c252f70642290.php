<header id="hero_section_header" class="fixed top-0 left-0 right-0 border border-white/5
         bg-primary_v2 lg:bg-primary_v2/85
         px-6 py-4
         backdrop-blur-xl
         shadow-[0_0_40px_rgba(74,222,128,0.08)] z-[99]">

    <div class="h-full flex items-center justify-between">
        <div class="hero_section_header_left_panel flex justify-between items-center gap-10">
            <div class="flex gap-4 items-center">
                <?php if (isset($component)) { $__componentOriginal9be45bbf864e63a5a24d8dcc30cfda6f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9be45bbf864e63a5a24d8dcc30cfda6f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.globals.logo','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('globals.logo'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9be45bbf864e63a5a24d8dcc30cfda6f)): ?>
<?php $attributes = $__attributesOriginal9be45bbf864e63a5a24d8dcc30cfda6f; ?>
<?php unset($__attributesOriginal9be45bbf864e63a5a24d8dcc30cfda6f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9be45bbf864e63a5a24d8dcc30cfda6f)): ?>
<?php $component = $__componentOriginal9be45bbf864e63a5a24d8dcc30cfda6f; ?>
<?php unset($__componentOriginal9be45bbf864e63a5a24d8dcc30cfda6f); ?>
<?php endif; ?>

                <h2 class=" text-lg tablet-lg:text-xl font-bold text-white">Kandang Harian</h2>
            </div>
        </div>

        <nav class="hero_section_header_navbar_panel">
            <div id="top_bar" class="hidden lg:block">
                <?php if (isset($component)) { $__componentOriginal972ba4503ce04ed35fa53f631778d9db = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal972ba4503ce04ed35fa53f631778d9db = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.navigation.nav_group','data' => ['class' => 'w-xs flex justify-between']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.navigation.nav_group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-xs flex justify-between']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal972ba4503ce04ed35fa53f631778d9db)): ?>
<?php $attributes = $__attributesOriginal972ba4503ce04ed35fa53f631778d9db; ?>
<?php unset($__attributesOriginal972ba4503ce04ed35fa53f631778d9db); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal972ba4503ce04ed35fa53f631778d9db)): ?>
<?php $component = $__componentOriginal972ba4503ce04ed35fa53f631778d9db; ?>
<?php unset($__componentOriginal972ba4503ce04ed35fa53f631778d9db); ?>
<?php endif; ?>
            </div>

            <div id="side_bar"
                class="absolute top-0 right-0 translate-x-full block w-[23rem] h-screen bg-primary_v2/80 shadow-[0_10px_10px_rgba(0,0,0,0.5)] backdrop-blur-[10px] py-8 px-8 transition-transform duration-300 ease-in-out lg:hidden">
                <div class="h-full space-y-10">
                    <div class="">
                        <button id="close_ham_btn"
                            class="block lg:hidden px-3 py-2 rounded-full hover:bg-white/4 transition-colors cursor-pointer text-lg text-white">
                            <i class="fa-solid fa-xmark"></i>
                        </button>
                    </div>

                    <?php if (isset($component)) { $__componentOriginal972ba4503ce04ed35fa53f631778d9db = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal972ba4503ce04ed35fa53f631778d9db = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.navigation.nav_group','data' => ['class' => 'flex flex-col gap-[1.7rem]']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.navigation.nav_group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'flex flex-col gap-[1.7rem]']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal972ba4503ce04ed35fa53f631778d9db)): ?>
<?php $attributes = $__attributesOriginal972ba4503ce04ed35fa53f631778d9db; ?>
<?php unset($__attributesOriginal972ba4503ce04ed35fa53f631778d9db); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal972ba4503ce04ed35fa53f631778d9db)): ?>
<?php $component = $__componentOriginal972ba4503ce04ed35fa53f631778d9db; ?>
<?php unset($__componentOriginal972ba4503ce04ed35fa53f631778d9db); ?>
<?php endif; ?>
                </div>
            </div>
        </nav>

        <div class="hero_section_header_right_panel flex items-center gap-5">
            <button class="px-3 py-2 rounded-full hover:bg-black/4 transition-colors cursor-pointer text-lg text-white">
                <i class="fa-regular fa-bell"></i>
            </button>
            <!-- pengecekan apabila berada di halaman login, register atau lupa password, tombol signup tidak muncul-->
            <?php if(!request()->routeIs('login') && !request()->routeIs('register')): ?>
                <a href="<?php echo e(route('login')); ?>"
                    class="rounded-full bg-white px-3 py-1 text-md font-semibold text-slate-900 transition-colors hover:bg-slate-100">
                    Sign up
                </a>
            <?php endif; ?>



            <button id="ham_btn"
                class="block lg:hidden px-3 py-2 rounded-full hover:bg-black/4 transition-colors cursor-pointer text-lg text-white">
                <i class="fa-solid fa-bars"></i>
            </button>
        </div>
    </div>
</header><?php /**PATH /home/hamidjumasa/Documents/kandang/src/resources/views/landing/partial/header.blade.php ENDPATH**/ ?>