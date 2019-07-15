$(document).ready(function(){
    
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    var alamat = '/api/kategori';

    // tampilkan semua data kategori
    $.ajax({
        url: alamat,
        method: 'GET',
        dataType: 'json',
        success:function(berhasil) {
            console.log(berhasil);
            
            $.each(berhasil.data, function(key,value){
                $('.nama-kategori').append(
                    `
                    <tr>
                        <td>${key}</td>
                        <td>${value.nama} </td>
                        <td>
                            <button class="btn btn-outline-danger hapus-kategori" data-id="${value.id}"> Hapus </button>
                            <button class="btn btn-outline-info edit-kategori" data-id="${value.id}"> Edit </button>
                        </td>
                    </tr>
                    `
                )
            });
        }
    })
    
    // Simpan data kategori
    $('#simpan-kategori').on('click', function(e){
        e.preventDefault();

        var nama=$('#nama-kategori').val();
        console.log(nama);
        
        $.ajax({
            url: alamat,
            method: 'POST',
            dataType: 'json',
            data: {
                nama: nama
            },
            success:function(berhasil) {
                console.log(berhasil.message);
                location.reload();
            }
        })
    })

    //hapus kategori
    $('.nama-kategori').on('click', '.hapus-kategori', function(){
        var id = $(this).data('id')

        $.ajax({
            url: alamat+'/'+id,
            method: 'DELETE',
            dataType: 'json',
            data: {
                id: id
            },
            success: function(berhasil) {
                console.log(berhasil.message);
                location.reload();
            },
            error: function(error) {
                console.log(error);

            },
        })
        
    })

    //edit kategori

      //hapus kategori
      $('.nama-kategori').on('click', '.edit-kategori', function(){
        var id = $(this).data('id')

        $.ajax({
            url: alamat+'/'+id,
            method: 'PUT',
            dataType: 'json',
            data: {
                    nama: nama
            },
            success: function(berhasil) {
                console.log(berhasil.message);
                location.reload();
            },
            error: function(error) {
                console.log(error);
                    
            },
        })
        
    })
})