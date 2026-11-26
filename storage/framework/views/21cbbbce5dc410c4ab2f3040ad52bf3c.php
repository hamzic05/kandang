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
<?php $component->withAttributes(['header' => 'Lengkapi informasi obat untuk menambah persediaan','title' => 'Tambah obat']); ?>
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
    
    <form id="create_form" data-create action="" method="POST">
        <?php echo csrf_field(); ?>
        <div class="flex flex-col gap-[20px]">
            <section class="p-[18px] flex flex-col gap-10 rounded-2xl border bg-white border-gray-100 shadow-[0_2px_16px_rgba(0,0,0,0.10)]">
                <div class="grid grid-cols-1 lg:flex gap-y-5 gap-x-20">
                    <?php if (isset($component)) { $__componentOriginala5960e5be800068f1400c66c4b3baeab = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala5960e5be800068f1400c66c4b3baeab = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.medicine.section_header','data' => ['number' => '1','title' => 'Informasi dasar','icon' => 'fa-kit-medical']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.medicine.section_header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['number' => '1','title' => 'Informasi dasar','icon' => 'fa-kit-medical']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala5960e5be800068f1400c66c4b3baeab)): ?>
<?php $attributes = $__attributesOriginala5960e5be800068f1400c66c4b3baeab; ?>
<?php unset($__attributesOriginala5960e5be800068f1400c66c4b3baeab); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala5960e5be800068f1400c66c4b3baeab)): ?>
<?php $component = $__componentOriginala5960e5be800068f1400c66c4b3baeab; ?>
<?php unset($__componentOriginala5960e5be800068f1400c66c4b3baeab); ?>
<?php endif; ?>
                    
                    <div class="flex-1">
                        <div class="grid grid-cols-2 gap-2.5">
                            <?php if (isset($component)) { $__componentOriginal65bd7e7dbd93cec773ad6501ce127e46 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal65bd7e7dbd93cec773ad6501ce127e46 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.input','data' => ['label' => 'Kode','name' => 'code']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Kode','name' => 'code']); ?> <?php echo $__env->renderComponent(); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.input','data' => ['label' => 'Nama obat','name' => 'name']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Nama obat','name' => 'name']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal65bd7e7dbd93cec773ad6501ce127e46)): ?>
<?php $attributes = $__attributesOriginal65bd7e7dbd93cec773ad6501ce127e46; ?>
<?php unset($__attributesOriginal65bd7e7dbd93cec773ad6501ce127e46); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal65bd7e7dbd93cec773ad6501ce127e46)): ?>
<?php $component = $__componentOriginal65bd7e7dbd93cec773ad6501ce127e46; ?>
<?php unset($__componentOriginal65bd7e7dbd93cec773ad6501ce127e46); ?>
<?php endif; ?>
                            <?php if (isset($component)) { $__componentOriginal231e2c645bf8af0c5c05a5dc5a94c862 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal231e2c645bf8af0c5c05a5dc5a94c862 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.select','data' => ['label' => 'Tipe','name' => 'type']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Tipe','name' => 'type']); ?>
                                 <?php $__env->slot('options', null, []); ?> 
                                    <option value="" disabled selected>Pilih tipe</option>
                                    <option value="madicine">Obat</option>
                                    <option value="vitamine">Vitamin</option>
                                    <option value="vaccine">Vaksin</option>
                                    <option value="supplement">Suplemen</option>
                                 <?php $__env->endSlot(); ?>
                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal231e2c645bf8af0c5c05a5dc5a94c862)): ?>
<?php $attributes = $__attributesOriginal231e2c645bf8af0c5c05a5dc5a94c862; ?>
<?php unset($__attributesOriginal231e2c645bf8af0c5c05a5dc5a94c862); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal231e2c645bf8af0c5c05a5dc5a94c862)): ?>
<?php $component = $__componentOriginal231e2c645bf8af0c5c05a5dc5a94c862; ?>
<?php unset($__componentOriginal231e2c645bf8af0c5c05a5dc5a94c862); ?>
<?php endif; ?>
                            <?php if (isset($component)) { $__componentOriginal231e2c645bf8af0c5c05a5dc5a94c862 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal231e2c645bf8af0c5c05a5dc5a94c862 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.select','data' => ['label' => 'Bentuk','name' => 'form']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Bentuk','name' => 'form']); ?>
                                 <?php $__env->slot('options', null, []); ?> 
                                    <option value="" disabled selected>Pilih bentuk</option>
                                    <option value="powder">Bubuk</option>
                                    <option value="liquid">Cair</option>
                                    <option value="tablet">Tablet</option>
                                    <option value="injection">Suntik</option>
                                 <?php $__env->endSlot(); ?>
                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal231e2c645bf8af0c5c05a5dc5a94c862)): ?>
<?php $attributes = $__attributesOriginal231e2c645bf8af0c5c05a5dc5a94c862; ?>
<?php unset($__attributesOriginal231e2c645bf8af0c5c05a5dc5a94c862); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal231e2c645bf8af0c5c05a5dc5a94c862)): ?>
<?php $component = $__componentOriginal231e2c645bf8af0c5c05a5dc5a94c862; ?>
<?php unset($__componentOriginal231e2c645bf8af0c5c05a5dc5a94c862); ?>
<?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>
        
            <section class="p-[18px] flex flex-col gap-10 rounded-2xl border bg-white border-gray-100 shadow-[0_2px_16px_rgba(0,0,0,0.10)]">
                <div class="grid grid-cols-1 lg:flex gap-y-5 gap-x-20">
                    <?php if (isset($component)) { $__componentOriginala5960e5be800068f1400c66c4b3baeab = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala5960e5be800068f1400c66c4b3baeab = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin.medicine.section_header','data' => ['number' => '2','title' => 'Informasi persediaan','icon' => 'fa-cubes','iconColor' => 'text-amber-600']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin.medicine.section_header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['number' => '2','title' => 'Informasi persediaan','icon' => 'fa-cubes','icon_color' => 'text-amber-600']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala5960e5be800068f1400c66c4b3baeab)): ?>
<?php $attributes = $__attributesOriginala5960e5be800068f1400c66c4b3baeab; ?>
<?php unset($__attributesOriginala5960e5be800068f1400c66c4b3baeab); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala5960e5be800068f1400c66c4b3baeab)): ?>
<?php $component = $__componentOriginala5960e5be800068f1400c66c4b3baeab; ?>
<?php unset($__componentOriginala5960e5be800068f1400c66c4b3baeab); ?>
<?php endif; ?>
        
                    <div class="flex-1">
                        <div class="grid grid-cols-2 gap-2.5">
                            <?php if (isset($component)) { $__componentOriginal65bd7e7dbd93cec773ad6501ce127e46 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal65bd7e7dbd93cec773ad6501ce127e46 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.input','data' => ['label' => 'Brand','name' => 'brand']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Brand','name' => 'brand']); ?> <?php echo $__env->renderComponent(); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.input','data' => ['label' => 'Stok','name' => 'stock','type' => 'number']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Stok','name' => 'stock','type' => 'number']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal65bd7e7dbd93cec773ad6501ce127e46)): ?>
<?php $attributes = $__attributesOriginal65bd7e7dbd93cec773ad6501ce127e46; ?>
<?php unset($__attributesOriginal65bd7e7dbd93cec773ad6501ce127e46); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal65bd7e7dbd93cec773ad6501ce127e46)): ?>
<?php $component = $__componentOriginal65bd7e7dbd93cec773ad6501ce127e46; ?>
<?php unset($__componentOriginal65bd7e7dbd93cec773ad6501ce127e46); ?>
<?php endif; ?>
                            <?php if (isset($component)) { $__componentOriginal231e2c645bf8af0c5c05a5dc5a94c862 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal231e2c645bf8af0c5c05a5dc5a94c862 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.select','data' => ['label' => 'Ketersediaan','name' => 'isActive']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Ketersediaan','name' => 'isActive']); ?>
                                 <?php $__env->slot('options', null, []); ?> 
                                    <option value="" disabled selected>Ketersediaan</option>
                                    <option value="1">Tersedia</option>
                                    <option value="0">Tidak tersedia</option>
                                 <?php $__env->endSlot(); ?>
                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal231e2c645bf8af0c5c05a5dc5a94c862)): ?>
<?php $attributes = $__attributesOriginal231e2c645bf8af0c5c05a5dc5a94c862; ?>
<?php unset($__attributesOriginal231e2c645bf8af0c5c05a5dc5a94c862); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal231e2c645bf8af0c5c05a5dc5a94c862)): ?>
<?php $component = $__componentOriginal231e2c645bf8af0c5c05a5dc5a94c862; ?>
<?php unset($__componentOriginal231e2c645bf8af0c5c05a5dc5a94c862); ?>
<?php endif; ?>
                            <?php if (isset($component)) { $__componentOriginal62d1193389a71cd99ff302a00abbf991 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal62d1193389a71cd99ff302a00abbf991 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.textarea','data' => ['label' => 'Deskripsi','name' => 'description']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.textarea'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Deskripsi','name' => 'description']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal62d1193389a71cd99ff302a00abbf991)): ?>
<?php $attributes = $__attributesOriginal62d1193389a71cd99ff302a00abbf991; ?>
<?php unset($__attributesOriginal62d1193389a71cd99ff302a00abbf991); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal62d1193389a71cd99ff302a00abbf991)): ?>
<?php $component = $__componentOriginal62d1193389a71cd99ff302a00abbf991; ?>
<?php unset($__componentOriginal62d1193389a71cd99ff302a00abbf991); ?>
<?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>
    
            <div id="act_btn_container" class="py-[18px] rounded-2xl transition-all duration-300 ease-out transform opacity-0 translate-y-2 pointer-events-none">
                <div class="flex justify-between">
                    <?php if (isset($component)) { $__componentOriginalde1872620e6a544d7e036887066a0f2b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalde1872620e6a544d7e036887066a0f2b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.div_button','data' => ['id' => 'cancle_btn','icon' => 'fa-xmark','name' => 'Reset','class' => 'bg-white']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.div_button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'cancle_btn','icon' => 'fa-xmark','name' => 'Reset','class' => 'bg-white']); ?>
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
                    <?php if (isset($component)) { $__componentOriginala8bb031a483a05f647cb99ed3a469847 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala8bb031a483a05f647cb99ed3a469847 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.button','data' => ['icon' => 'fa-floppy-disk','label' => 'Simpan obat','class' => 'bg-hijau hover:bg-tinta text-white']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => 'fa-floppy-disk','label' => 'Simpan obat','class' => 'bg-hijau hover:bg-tinta text-white']); ?>
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
                </div>
            </div>
        </div>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.index', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/hamidjumasa/Documents/kandang/src/resources/views/admin/medicine/create.blade.php ENDPATH**/ ?>