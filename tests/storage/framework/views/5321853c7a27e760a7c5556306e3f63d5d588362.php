<?php $__env->startSection('content'); ?>
<title>Create Tag</title>
    <div class="container">
        <form action="<?php echo e(route('tag.update', $tag->id)); ?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="PATCH">
            <?php echo csrf_field(); ?>
            <div class="form-group">
              <label for="">Nama tag</label>
              <input type="text" name="nama" id="" class="form-control" value="<?php echo e($tag->nama); ?>">
            </div>
            <input type="hidden" name="id" value="<?php echo e(Auth::user()->id); ?>">
            <button type="submit" class="btn btn-outline-success">Simpan</button>
            <a name="" id=""class="btn btn-outline-info" href="<?php echo e(route('tag.index')); ?>" role="button">Kembali</a>


        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\prakerin\resources\views/backend/tag/edit.blade.php ENDPATH**/ ?>