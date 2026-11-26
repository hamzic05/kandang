<?php $__env->startSection('content'); ?>
    <?php if (isset($component)) { $__componentOriginal7e271ae6dc54e16e60ca8c92e53cb8f2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7e271ae6dc54e16e60ca8c92e53cb8f2 = $attributes; } ?>
<?php $component = App\View\Components\Partials\Admin\Header::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('partials.admin.header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Partials\Admin\Header::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['header' => 'Daftar inventaris obat yang ada','title' => 'Inventaris Obat']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7e271ae6dc54e16e60ca8c92e53cb8f2)): ?>
<?php $attributes = $__attributesOriginal7e271ae6dc54e16e60ca8c92e53cb8f2; ?>
<?php unset($__attributesOriginal7e271ae6dc54e16e60ca8c92e53cb8f2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7e271ae6dc54e16e60ca8c92e53cb8f2)): ?>
<?php $component = $__componentOriginal7e271ae6dc54e16e60ca8c92e53cb8f2; ?>
<?php unset($__componentOriginal7e271ae6dc54e16e60ca8c92e53cb8f2); ?>
<?php endif; ?>

    <section data-inventory aria-label="Persediaan Obat" class="p-[18px] border border-garis rounded-2xl overflow-hidden bg-white">
        <div class="flex flex-col gap-4.5">
            <div class="flex items-center justify-between">
                <h2 class="text-xl font-semibold text-tinta">Persediaan obat</h2>
            </div>

            <?php echo $__env->make('admin.medicine.category', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            <?php echo $__env->make('admin.medicine.search', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            <div class="p-[18px] border border-hijau rounded-2xl">
                <form id="inventory_form" class=""  action="" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <div class="flex justify-between mb-5">
                        <div data-dash="kpi-total" class="rounded-[10px] border border-garis-tua px-4 py-2.5 text-sm whitespace-nowrap bg-hijau-muda text-hijau">0 items</div>

                        <div id="dc_container" class="flex gap-3.5">
                            <?php if (isset($component)) { $__componentOriginalde1872620e6a544d7e036887066a0f2b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalde1872620e6a544d7e036887066a0f2b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.div_button','data' => ['id' => 'delete_btn','icon' => 'fa-trash-can','name' => 'Hapus','class' => 'whitespace-nowrap bg-red-700 hover:bg-red-800 text-white transition-all duration-100 ease-out transform opacity-0 pointer-events-none']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.div_button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'delete_btn','icon' => 'fa-trash-can','name' => 'Hapus','class' => 'whitespace-nowrap bg-red-700 hover:bg-red-800 text-white transition-all duration-100 ease-out transform opacity-0 pointer-events-none']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalde1872620e6a544d7e036887066a0f2b)): ?>
<?php $attributes = $__attributesOriginalde1872620e6a544d7e036887066a0f2b; ?>
<?php unset($__attributesOriginalde1872620e6a544d7e036887066a0f2b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalde1872620e6a544d7e036887066a0f2b)): ?>
<?php $component = $__componentOriginalde1872620e6a544d7e036887066a0f2b; ?>
<?php unset($__componentOriginalde1872620e6a544d7e036887066a0f2b); ?>
<?php endif; ?>
                            
                            <?php if (isset($component)) { $__componentOriginalde1872620e6a544d7e036887066a0f2b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalde1872620e6a544d7e036887066a0f2b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.div_button','data' => ['id' => 'toggle_mode','icon' => 'fa-list-check','iconId' => 'icon_mode','textId' => 'text_mode','name' => 'Pilih obat','class' => 'whitespace-nowrap bg-hijau text-white hover:bg-tinta']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.div_button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'toggle_mode','icon' => 'fa-list-check','icon_id' => 'icon_mode','text_id' => 'text_mode','name' => 'Pilih obat','class' => 'whitespace-nowrap bg-hijau text-white hover:bg-tinta']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalde1872620e6a544d7e036887066a0f2b)): ?>
<?php $attributes = $__attributesOriginalde1872620e6a544d7e036887066a0f2b; ?>
<?php unset($__attributesOriginalde1872620e6a544d7e036887066a0f2b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalde1872620e6a544d7e036887066a0f2b)): ?>
<?php $component = $__componentOriginalde1872620e6a544d7e036887066a0f2b; ?>
<?php unset($__componentOriginalde1872620e6a544d7e036887066a0f2b); ?>
<?php endif; ?>
                        </div>
                    </div>

                    <div id="select_all_wrapper" class="hidden">
                        <div class="flex justify-end items-center gap-1">
                            <input 
                                type="checkbox"
                                id="select_all_checkbox"  
                                class="w-4 h-4 text-emerald-600 bg-white border-stone-300 rounded focus:ring-emerald-500 cursor-pointer"
                            >
                            <label for="select_all_checkbox" class="text-sm font-semibold text-stone-700 cursor-pointer">
                                Pilih Semua
                            </label>
                        </div>
                    </div>
    
                    <div id="medicine_container" class="">
                        <div data-dash="medicines" class="flex flex-col">
                            <?php if (isset($component)) { $__componentOriginalaed84761345f1c02d116cf0ced053f4a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalaed84761345f1c02d116cf0ced053f4a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.medicine.item','data' => ['id' => 1,'name' => 'Vitamin B Complex','type' => 'Vitamin','stock' => '12 botol','isActive' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.medicine.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 1,'name' => 'Vitamin B Complex','type' => 'Vitamin','stock' => '12 botol','is_active' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalaed84761345f1c02d116cf0ced053f4a)): ?>
<?php $attributes = $__attributesOriginalaed84761345f1c02d116cf0ced053f4a; ?>
<?php unset($__attributesOriginalaed84761345f1c02d116cf0ced053f4a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalaed84761345f1c02d116cf0ced053f4a)): ?>
<?php $component = $__componentOriginalaed84761345f1c02d116cf0ced053f4a; ?>
<?php unset($__componentOriginalaed84761345f1c02d116cf0ced053f4a); ?>
<?php endif; ?>
                            <?php if (isset($component)) { $__componentOriginalaed84761345f1c02d116cf0ced053f4a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalaed84761345f1c02d116cf0ced053f4a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.medicine.item','data' => ['id' => 2,'name' => 'Vitamin C Complex','type' => 'Vitamin','stock' => '0 botol','isActive' => false]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.medicine.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 2,'name' => 'Vitamin C Complex','type' => 'Vitamin','stock' => '0 botol','is_active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(false)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalaed84761345f1c02d116cf0ced053f4a)): ?>
<?php $attributes = $__attributesOriginalaed84761345f1c02d116cf0ced053f4a; ?>
<?php unset($__attributesOriginalaed84761345f1c02d116cf0ced053f4a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalaed84761345f1c02d116cf0ced053f4a)): ?>
<?php $component = $__componentOriginalaed84761345f1c02d116cf0ced053f4a; ?>
<?php unset($__componentOriginalaed84761345f1c02d116cf0ced053f4a); ?>
<?php endif; ?>
                        </div>
                    </div>
                    <?php if (isset($component)) { $__componentOriginal6a56ca2919c007cae46f4d69c07fc615 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6a56ca2919c007cae46f4d69c07fc615 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.globals.confirm_del','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('globals.confirm_del'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6a56ca2919c007cae46f4d69c07fc615)): ?>
<?php $attributes = $__attributesOriginal6a56ca2919c007cae46f4d69c07fc615; ?>
<?php unset($__attributesOriginal6a56ca2919c007cae46f4d69c07fc615); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6a56ca2919c007cae46f4d69c07fc615)): ?>
<?php $component = $__componentOriginal6a56ca2919c007cae46f4d69c07fc615; ?>
<?php unset($__componentOriginal6a56ca2919c007cae46f4d69c07fc615); ?>
<?php endif; ?>
                </form>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
            
<?php echo $__env->make('admin.index', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/hamidjumasa/Documents/kandang/src/resources/views/admin/medicine/inventory.blade.php ENDPATH**/ ?>