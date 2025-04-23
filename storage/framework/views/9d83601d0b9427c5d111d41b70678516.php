<!DOCTYPE html> 
<html lang="id"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title><?php echo $__env->yieldContent('title', 'Sistem Informasi Mahasiswa'); ?></title> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" 
rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font
awesome/6.0.0/css/all.min.css">
</head> 
<body> 
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary"> 
        <div class="container"> 
            <a class="navbar-brand" href="<?php echo e(route('mahasiswa.index')); ?>">SI Mahasiswa</a> 
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs
target="#navbarNav"> 
                <span class="navbar-toggler-icon"></span> 
            </button> 
            <div class="collapse navbar-collapse" id="navbarNav"> 
                <ul class="navbar-nav"> 
                    <li class="nav-item"> 
                        <a class="nav-link" href="<?php echo e(route('mahasiswa.index')); ?>">Data Mahasiswa</a> 
                    </li> 
                    <li class="nav-item"> 
                        <a class="nav-link" href="<?php echo e(route('mahasiswa.create')); ?>">Tambah Mahasiswa</a> 
                    </li> 
                </ul> 
            </div> 
        </div> 
    </nav> 
 
    <div class="container mt-4"> 
        <?php if(session('success')): ?> 
            <div class="alert alert-success alert-dismissible fade show"> 
                <?php echo e(session('success')); ?> 
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button> 
            </div> 
        <?php endif; ?> 
 
        <?php echo $__env->yieldContent('content'); ?> 
    </div> 
     
    <footer class="bg-light text-center text-muted py-3 mt-5"> 
        <div class="container"> 
            &copy; <?php echo e(date('Y')); ?> Sistem Informasi Mahasiswa 
        </div> 
    </footer> 
 
    <script 
src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body> 
</html> <?php /**PATH C:\xampp\htdocs\Laravel11\mahasiswa-app\resources\views/layouts/app.blade.php ENDPATH**/ ?>