<?php $__env->startSection('content'); ?>


<div class="container">
    <h4>Data kategori</h4>
    <a href="<?php echo e(route('kategori.create')); ?>" class="btn btn-outline-primary">Tambah Data</a>
    <p></p>
    <table class="table">
        <thead>
            <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Action</th>
                  
            </tr>
        </thead>
        <tbody>
            <?php $no =0; ?>

            <?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                    $no++
                ?>

            <tr>
            <td scope="row"><?php echo e($no); ?></td>
                <td><?php echo e($data->nama); ?></td>
                <td>
                    <form action="<?php echo e(route('kategori.destroy', ['id'=>$data->id])); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('delete'); ?>

                        <a href="<?php echo e(route('kategori.edit', ['id'=>$data->id])); ?>" class="btn btn-outline-info">Edit</a>
                        <button type="submit" class="btn btn-outline-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\prakerin\resources\views/backend/kategori/index.blade.php ENDPATH**/ ?>