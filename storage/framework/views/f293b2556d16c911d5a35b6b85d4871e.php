 
 
<?php $__env->startSection('title', 'Daftar Mahasiswa'); ?> 
 
<?php $__env->startSection('content'); ?> 
<div class="card"> 
    <div class="card-header d-flex justify-content-between align-items-center"> 
        <h4 class="mb-0">Daftar Mahasiswa</h4> 
        <a href="<?php echo e(route('mahasiswa.create')); ?>" class="btn btn-primary"> 
            <i class="fas fa-plus"></i> Tambah Mahasiswa 
        </a> 
    </div> 
    <div class="card-body"> 
        <?php if($mahasiswas->count() > 0): ?> 
            <div class="table-responsive"> 
                <table class="table table-striped table-hover"> 
                    <thead> 
                        <tr> 
                            <th>No</th> 
                            <th>NIM</th> 
                            <th>Nama</th> 
                            <th>Jurusan</th> 
                            <th>Jenis Kelamin</th> 
                            <th>Email</th> 
                            <th>Aksi</th> 
                        </tr> 
                    </thead> 
                    <tbody> 
                        <?php $__currentLoopData = $mahasiswas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $mahasiswa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                            <tr> 
                                <td><?php echo e($mahasiswas->firstItem() + $index); ?></td> 
                                <td><?php echo e($mahasiswa->nim); ?></td> 
                                <td><?php echo e($mahasiswa->nama); ?></td> 
                                <td><?php echo e($mahasiswa->jurusan); ?></td> 
                                <td><?php echo e($mahasiswa->jenis_kelamin); ?></td> 
                                    <td><?php echo e($mahasiswa->email); ?></td> 
                                <td> 
                                    <div class="d-flex gap-1"> 
                                        <a href="<?php echo e(route('mahasiswa.show', $mahasiswa->id)); ?>" class="btn btn-info btn-sm"> 
                                            <i class="fas fa-eye"></i> 
                                        </a> 
                                        <a href="<?php echo e(route('mahasiswa.edit', $mahasiswa->id)); ?>" class="btn btn-warning btn-sm"> 
                                            <i class="fas fa-edit"></i> 
                                        </a> 
                                        <form action="<?php echo e(route('mahasiswa.destroy', $mahasiswa->id)); ?>" method="POST" class="d-inline"> 
                                            <?php echo csrf_field(); ?> 
                                            <?php echo method_field('DELETE'); ?> 
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"> 
                                                <i class="fas fa-trash"></i> 
                                            </button> 
                                        </form> 
                                    </div> 
                                </td> 
                            </tr> 
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                    </tbody> 
                </table> 
            </div> 
             
            <div class="d-flex justify-content-center mt-4"> 
                <?php echo e($mahasiswas->links()); ?> 
            </div> 
        <?php else: ?> 
            <p class="text-center">Tidak ada data mahasiswa.</p> 
        <?php endif; ?> 
    </div> 
</div> 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel11\mahasiswa-app\resources\views/mahasiswa/index.blade.php ENDPATH**/ ?>