$(function() {

    $('.btnTambahData').on('click', function(){

        $('#judulModal').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Tambah Data Mahasiswa');
        $('#Nama').val('');
        $('#NIM').val('');
        $('#Prodi').val('');
        $('#Email').val('');

    });

    $('.modalUbah').on('click', function(){

        $('#judulModal').html('Ubah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/php/phpMVC/public/mahasiswa/ubah');

        const id = $(this).data('id');

        $.ajax({

            url: 'http://localhost/php/phpMVC/public/mahasiswa/getUbah',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data){
                $('#Nama').val(data.Nama);
                $('#NIM').val(data.NIM);
                $('#Prodi').val(data.Prodi);
                $('#Email').val(data.Email);
                $('#id').val(data.id);
            }

        });

    });

});