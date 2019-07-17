<?php $__env->startSection('content'); ?>
    <div class="container">
        <form action="<?php echo e(route('kategori.store')); ?>" method="post">
            <?php echo e(csrf_field()); ?>

            <div class="form-group">
              <label for="">Nama </label>
              <input type="text" name="nama" id="" class="form-control" placeholder="" aria-describedby="helpId">

            </div>
            <button type="submit" class="btn btn-outline-primary">Simpan</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\prakerin\resources\views/backend/kategori/create.blade.php ENDPATH**/ ?>