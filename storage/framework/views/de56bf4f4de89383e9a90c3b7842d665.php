<?php $__env->startSection('content'); ?>
<?php if (isset($component)) { $__componentOriginaldc4ffa4a9c338c8b3260a41e70a07ae4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldc4ffa4a9c338c8b3260a41e70a07ae4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.partials.admin.header','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('partials.admin.header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('page_header', null, []); ?> Semua kamar, data hari ini <?php $__env->endSlot(); ?>
     <?php $__env->slot('page_title', null, []); ?> Ringkasan produksi <?php $__env->endSlot(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaldc4ffa4a9c338c8b3260a41e70a07ae4)): ?>
<?php $attributes = $__attributesOriginaldc4ffa4a9c338c8b3260a41e70a07ae4; ?>
<?php unset($__attributesOriginaldc4ffa4a9c338c8b3260a41e70a07ae4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldc4ffa4a9c338c8b3260a41e70a07ae4)): ?>
<?php $component = $__componentOriginaldc4ffa4a9c338c8b3260a41e70a07ae4; ?>
<?php unset($__componentOriginaldc4ffa4a9c338c8b3260a41e70a07ae4); ?>
<?php endif; ?>

<div data-dash="error" role="alert" class="hidden rounded-[10px] bg-merah-muda px-3.5 py-3 text-sm text-merah-tua">
</div>

<!-- Bagian angka ringkas / KPI-->
<?php echo $__env->make('admin.partials.kpi', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<!-- Bagian kamar -->
<?php echo $__env->make('admin.partials.rooms', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<section class="flex flex-col items-stretch gap-4 xl:flex-row xl:items-start">
  <!-- Bagian grafik -->
  <?php echo $__env->make('admin.partials.chart', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

  <!-- Bagian peringatan -->
  <?php echo $__env->make('admin.partials.alert', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

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
<?php echo $__env->make('admin.index', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/hamidjumasa/Documents/kandang/src/resources/views/admin/partials/dashboard.blade.php ENDPATH**/ ?>