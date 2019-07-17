<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah data kategori</div>

                <div class="card-body">
                <form action="<?php echo e(route('artikel.store')); ?>" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="id" value="<?php echo e(Auth::user()->id); ?>">
                <div class="form-group">
                    <label for="">Judul</label>
                    <input class="form-control" type="text" name="judul">
                </div>

                <div class="input-group">
                    <textarea name="konten" id="" class="form-control ckeditor" cols="30" rows="10"></textarea>
                </div>
                <div class="form-group">
              <label for="">Nama kategori</label>
                <select name="kategori_id" class="form-control">
                  <?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($data->id); ?>"><?php echo e($data->nama); ?></option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="form-group">
              <label for="">Tag</label>
                <select id="select2" name="tag[]" class="form-control tag" multiple="multiple">
                  <?php $__currentLoopData = $tag; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($data->id); ?>">
                      <?php echo e($data->nama); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
                <div class="form-group">
                    <label for="">Foto</label>
                    <input class="form-control" type="file" name="foto" id="foto">
                </div>
                <div class="form-group">
                   <button type="submit" class="btn btn-outline-primary">Simpan Data</button>
                    <a href="<?php echo e(route('artikel.index')); ?>" class="btn btn sm btn-danger">Back</a>
                </div>
                </form>
                        </div>


                </div>
            </div>
        </div>
    </div>
     <script>
      $(document).ready(function(){
          $('#select2').select2();
       });
    </script>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\prakerin\resources\views/backend/artikel/create.blade.php ENDPATH**/ ?>