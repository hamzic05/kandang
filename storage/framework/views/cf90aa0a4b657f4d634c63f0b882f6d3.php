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
<?php $component->withAttributes(['header' => 'Semua kamar, data hari ini','title' => 'Ringkasan produksi']); ?>
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
<?php if (isset($component)) { $__componentOriginal6e3fb2d6bdca1fd6806c3247c6496e87 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6e3fb2d6bdca1fd6806c3247c6496e87 = $attributes; } ?>
<?php $component = App\View\Components\Partials\Admin\Breadcrumb::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('partials.admin.breadcrumb'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Partials\Admin\Breadcrumb::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6e3fb2d6bdca1fd6806c3247c6496e87)): ?>
<?php $attributes = $__attributesOriginal6e3fb2d6bdca1fd6806c3247c6496e87; ?>
<?php unset($__attributesOriginal6e3fb2d6bdca1fd6806c3247c6496e87); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6e3fb2d6bdca1fd6806c3247c6496e87)): ?>
<?php $component = $__componentOriginal6e3fb2d6bdca1fd6806c3247c6496e87; ?>
<?php unset($__componentOriginal6e3fb2d6bdca1fd6806c3247c6496e87); ?>
<?php endif; ?>

<div data-dash="error" role="alert" class="hidden rounded-[10px] bg-merah-muda px-3.5 py-3 text-sm text-merah-tua">
</div>

<!-- Bagian angka ringkas / KPI-->
<?php echo $__env->make('admin.dashboard.kpi', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<!-- Bagian kamar -->
<?php echo $__env->make('admin.dashboard.rooms', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<section class="flex flex-col items-stretch gap-4 xl:flex-row xl:items-start">
  <!-- Bagian grafik -->
  <?php echo $__env->make('admin.dashboard.chart', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

  <!-- Bagian peringatan -->
  <?php echo $__env->make('admin.dashboard.alert', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

  <script type="application/json" data-dash="data">
    {
      "tanggal": "<?php echo e(now('Asia/Jakarta')->format('Y-m-d')); ?>",
      "target_hd": 85, "batas_mati": 3,
      "status": [
        {"kamar":"A","hd_pct":91,"populasi":2410,"total_telur":2193,"ayam_mati":0},
        {"kamar":"B","hd_pct":89,"populasi":2398,"total_telur":2134,"ayam_mati":1},
        {"kamar":"C","hd_pct":87,"populasi":2402,"total_telur":2090,"ayam_mati":0},
        {"kamar":"D","hd_pct":85,"populasi":2391,"total_telur":2032,"ayam_mati":2},
        {"kamar":"E","hd_pct":81,"populasi":2387,"total_telur":1933,"ayam_mati":1},
        {"kamar":"F","hd_pct":74,"populasi":2352,"total_telur":1740,"ayam_mati":4}
      ],
      "grafik": [
        {"tanggal":"2026-10-09","hd":78},{"tanggal":"2026-10-10","hd":80},{"tanggal":"2026-10-11","hd":79},
        {"tanggal":"2026-10-12","hd":82},{"tanggal":"2026-10-13","hd":84},{"tanggal":"2026-10-14","hd":83},
        {"tanggal":"2026-10-15","hd":85},{"tanggal":"2026-10-16","hd":86},{"tanggal":"2026-10-17","hd":82},
        {"tanggal":"2026-10-18","hd":76},{"tanggal":"2026-10-19","hd":73},{"tanggal":"2026-10-20","hd":78},
        {"tanggal":"2026-10-21","hd":84},{"tanggal":"2026-10-22","hd":85}
      ],
      "peringatan": [
        {"kamar":"F","tingkat":"kritis","pesan":"4 ekor mati hari ini (batas 3)"},
        {"kamar":"E","tingkat":"waspada","pesan":"Produksi 81% turun dua hari berturut-turut (target 85%)"}
      ]
    }

    </script>

</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.index', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/hamidjumasa/Documents/kandang/src/resources/views/admin/dashboard/dashboard.blade.php ENDPATH**/ ?>