<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">Edit data Artikel</div>

                <div class="card-body">
                <form action="<?php echo e(route('artikel.update', $artikel->id )); ?>"
                    method="POST">
                    <input name="_method" type="hidden" value="PATCH">
                    <?php echo e(csrf_field()); ?>

                    <input type="hidden" name="id" value="<?php echo e(Auth::user()->id); ?>">
                    <div class="form-group">
                        <label for="">Judul</label>
                    <input class="form-control" value="<?php echo e($artikel->judul); ?>"
                    type="text" name="judul">
                    </div>
                     <div class="form-group">
                        <label for="">Konten</label>
                        <textarea class="form-control ckeditor" cols="30" rows="10" name="konten"><?php echo $artikel->konten; ?></textarea>
                    </div>
                    <select name="kategori_id" class="form-control ">
                    <?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($data->id); ?>" <?php echo e(($data->id == $artikel->kategori_id) ? 'selected' : ''); ?>>
                        <?php echo e($data->nama); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                     <div class="form-group">
                        <label for="">Tag</label>
                   <select id="select22" name="tag[]" class="form-control " multiple="multiple">
                  <?php $__currentLoopData = $tag; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($data->id); ?>"<?php echo e((in_array($data->id, $selectTag)) ? 'selected' : ''); ?>>
                      <?php echo e($data->nama); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                    </div>
                     <div class="form-group">
                        <label for="">Foto</label>
                    <input class="form-control" value="<?php echo e($artikel->foto); ?>"
                    type="file" name="foto">
                    <p></p>
                    <img src="<?php echo e(asset('assets/img/artikel/'.$artikel->foto)); ?>" alt="" width="200px" height="200px">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-outline-info">
                            Simpan data
                        </button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
      $(document).ready(function(){
          $('#select22').select2();
       });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\prakerin\resources\views/backend/artikel/edit.blade.php ENDPATH**/ ?>