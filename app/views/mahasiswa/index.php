<div class="container mt-5">

    <div class="row">
        <div class="col-6">
            

            <div class="row">
                <div class="col-lg-6">
                    <?php Flasher::flash(); ?>
                </div>
            </div>

                <button type="button" class="btn btn-primary my-4 btnTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
                Tambah Data Mahasiswa
                </button>
                <h3>Daftar Mahasiswa</h3>
            <ul class="list-group">
                <?php foreach( $data['mhs'] as $mhs ): ?>
                    <li class="list-group-item"><?= $mhs['Nama']; ?>
                        <a href="<?= BASEURL ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge bg-danger float-end text-decoration-none ms-2 tombol-hapus" onclick="return confirm('anda yakin ingin menghapus data?');">Hapus</a>
                        <a href="<?= BASEURL ?>/mahasiswa/ubah/<?= $mhs['id']; ?>" class="badge bg-success float-end text-decoration-none ms-2 modalUbah" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $mhs['id']; ?>" >Ubah</a>
                        <a href="<?= BASEURL ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge bg-primary float-end text-decoration-none ms-2">Details</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

</div>


<div class="modal fade" id="formModal" tabindex="-1"         aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="judulModal">Tambah Data Mahasiswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body"> 
        <form action="<?= BASEURL ?>/mahasiswa/tambah" method="post">
        <input type="hidden" name="id" id="id">
            <div class="mb-3">
                <label for="Nama" class="form-label">Nama</label>
                <input type="text" class="form-control"  autocomplete="off" id="Nama" name="Nama">
            </div>
            <div class="mb-3">
                <label for="NIM" class="form-label">NIM</label>
                <input type="text" class="form-control" autocomplete="off" id="NIM" name="NIM">
            </div>
            <div class="mb-3">
                <label for="Prodi" class="form-label">Prodi</label>
                <input type="text" class="form-control" autocomplete="off" id="Prodi" name="Prodi">
            </div>
            <div class="mb-3">
                <label for="Email" class="form-label">Email</label>
                <input type="text" class="form-control" autocomplete="off" id="Email" name="Email">
            </div>
      </div>
      <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>


