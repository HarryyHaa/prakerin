<?php $__env->startSection('content'); ?>

    <div class = "container">
        <h4>Data Artikel</h4>
        <a href="<?php echo e(route ('artikel.create')); ?>" class="btn btn-outline-primary">Tambah Data</a>
        <p></p>
       <table class ="table table-hover table-dark">
            <thead>
                <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Judul Artikel</th>
                                        <th scope="col">Foto</th>
                                        <th scope="col">Konten</th>
                                        <th scope="col">Penulis</th></th>
                                        <th scope="col">kategori</th>
                                        <th scope="col">Slug</th>
                                        <th scope="col">Tag</th>
                                        <th colspan="2" class="text-center">Aksi</th>
                                    </tr>
                                    </thead>
                                    <?php $no = 1; ?>
                                    <?php $__currentLoopData = $artikel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($no++); ?></td>
                                        <td><?php echo e($data->judul); ?></td>
                                        <td><img  src="<?php echo e(asset('assets/img/artikel/'.$data->foto)); ?>" width="100%"></td>
                                        <td><?php echo $data->konten; ?></td>
                                        <td><?php echo e($data->user->name); ?></td>
                                        <td><?php echo e($data->kategori->nama); ?></td>
                                        <td><?php echo e($data->slug); ?></td>
                                        <td>
                                            <ol>
                                                <?php $__currentLoopData = $data->tag; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $isi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <li><?php echo e($isi->nama); ?></li>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </ol>
                                        </td>
                                        <td>
                                            <a href="<?php echo e(route('artikel.edit',$data->id)); ?>"
                                           class="btn btn-outline-info">Edit Data</a>
                                        </td>
                                        <td>
                                            <form action="<?php echo e(route('artikel.destroy',$data->id)); ?>" method="post">
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
$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('#datatable').dataTable({
        dataType: "json",
        ajax: {
                url: '/api/article/',
                dataType: "json",
                type: "GET",
                stateSave : true,
                serverSide: true,
                processing: true,
        },
        responsive:true,
        columns: [
                { data: 'judul', name: 'judul' },
                { data: 'slug', name: 'slug' },
                { data: 'konten', name: 'konten' },
                { data: 'kategori.nama', name: 'kategori.nama' },
                { data: 'user.name', name: 'user.name' },
                { data: 'tag', render :  function(tag){
                    console.log(tag)
                    }
                },
                { data: 'foto', render :  function(foto){
                        return '<img src="/assets/img/foto/artikel/'+foto+'" style="width:150px; height:100px;" alt="foto">';
                    }
                },
                { data: 'id', render : function (id) {
                    return  '<a class="btn btn-warning btn-sm" onclick="kategoritEdit('+id+')" id="kategoritEdit">Edit</a>'+
                        ' <a class="btn btn-danger btn-sm" onclick="kategoritDelete('+id+')" id="kategoritDelete">Hapus</a>';
                    }
                }
            ]
        });
        // Get Kategori
        $.ajax({
            url: '/api/category',
            method: "GET",
            dataType: "json",
            success: function (berhasil) {
                console.log(berhasil)
                $.each(berhasil.data, function (key, value) {
                    $("#kategori").append(
                        `
                            <option value="${value.id}">${value.nama}</option>
                        `
                    )
                })
            },
            error: function () {
                console.log('data tidak ada');
            }
        });
        // Get Tag
        $('.tag').select2({});
        $.ajax({
            url: '/api/tag',
            method: "GET",
            dataType: "json",
            success: function (berhasil) {
                console.log(berhasil)
                $.each(berhasil.data, function (key, value) {
                    $(".tag").append(
                        `
                        <option value="${value.id}">${value.nama_tag}</option>
                        `
                    )
                })
            },
            error: function () {
                console.log('data tidak ada');
            }
        });
        // Store Data
        $('#createData').submit(function(e){
        var formData    = new FormData($('#createData')[0]);
        e.preventDefault();
        $.ajax({
            url: '/api/article',
            type:'POST',
            data:formData,
            cache: true,
            contentType: false,
            processData: false,
            async:false,
            dataType: 'json',
            success:function(formData){
                $('#datatable').DataTable().ajax.reload();
                alert(formData.message)
            },
            complete: function() {
                $("#indexKategori").show();
                $("#createData")[0].reset();

                $(document).ready(function() {

            });
            }
        });
    });
    $('#select22').select2({});
});
</script>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\prakerin\resources\views/backend/artikel/index.blade.php ENDPATH**/ ?>