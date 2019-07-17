<?php $__env->startSection('content'); ?>

    <div class = "container">
        <h4>Data kategori</h4>
        <a href="<?php echo e(route ('tag.create')); ?>" class="btn btn-outline-info">Tambah Data</a>
        <p></p>
       <table class ="table table-hover table-dark">
            <thead>
                <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama Tag</th>
                                        <th scope="col">Slug</th>
                                        <th colspan="2" class="text-center">Aksi</th>
                                    </tr>
                                    </thead>
                                    <?php $no = 1; ?>
                                    <?php $__currentLoopData = $tag; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($no++); ?></td>
                                        <td><?php echo e($data->nama); ?></td>
                                        <td><?php echo e($data->slug); ?></td>

                                        <td>
                                            <a href="<?php echo e(route('tag.edit',$data->id)); ?>"
                                           class="btn btn-outline-info">Edit Data</a>
                                        </td>
                                        <td>
                                            <form action="<?php echo e(route('tag.destroy',$data->id)); ?>" method="post">
                                            <?php echo e(csrf_field()); ?>

                                                <input type="hidden" name="_method" value="DELETE">
                                                <button class="btn btn-outline-info" type="submit">
                                                    Hapus Data
                                                </button>
                                            </form>
                                        </td>
                                    </tr>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
        </table>
    </div>
    <script>
        $(document).ready(function(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
           var alamat = "http://sephiyani.herokuapp.com/api/tag";

           $.ajax({
               url: alamat,
               method:"GET",
               dataType: "json",
               success: function(berhasil){
                   console.log(berhasil)
                   $.each(berhasil.data,function (key, val){
                       $('.data-tag').append(
                           `
                           <tr>
                                <td>${val.nama_tag}</td>
                                <td>
                                    <button type="button" class="btn btn-primary" data-id="${val.id}" data-nama="${val-nama_tag}" >Edit</button>
                                    <button type="button" class="btn btn-danger" data-id="${val.id}">Hapus</button>
                                    </td>
                            </tr>
                            `
                       )
                   })
               }
           });
           $('.simpan-tag').on('click', function (e){
               e.preventDefault();

               var nama_tag = $('.nama_tag').val();
           })
        })
    </script>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\prakerin\resources\views/backend/tag/index.blade.php ENDPATH**/ ?>