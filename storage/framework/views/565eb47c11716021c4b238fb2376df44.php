<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard | Kandang Harian</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,600;9..144,700&family=Public+Sans:wght@400;500;600&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>

<body>
    <div class="flex min-h-screen flex-col md:flex-row">

        <!-- Sidebar -->
        <?php echo $__env->make('admin.partials.sidebar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

        <!-- Akar halaman. Untuk memuat dari server, ganti script JSON dengan data-url="/dashboard/data" -->
        <div class="flex min-w-0 flex-1 flex-col">
            <main data-dashboard data-refresh="0" class="flex flex-1 flex-col gap-[22px] p-4 sm:p-6 xl:px-10 xl:py-8">

                

                <?php echo $__env->yieldContent('content'); ?>

            </main>

            <?php echo $__env->make('admin.partials.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>


        </div>
    </div>
</body>
    <script data-dash="data" type="applicaton/json">{"tanggal": "<?php echo e(now('Asia/Jakarta')->format('Y-m-d')); ?>"}</script>


</html><?php /**PATH /home/hamidjumasa/Documents/kandang/src/resources/views/admin/index.blade.php ENDPATH**/ ?>