<div class="container mt-3">
    <div class="row">
        <div class="col-6">

            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formModal">
                tambah data mahasiswa
            </button>

            <br><br>

            <h3>Data Mahasiswa</h3>
            <ul class="list-group">
                <?php foreach($data['mhs'] as $mhs) :?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <?= $mhs['nama'] ?>
                        <a href="<?= BASEURL;?>/mahasiswa/detail/<?= $mhs['id'];?>" class="badge text-bg-primary">Detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="judulModal">Tambah Data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="">

        <div class="mb-3">
            <label for="nama" class="form-label" id="nama" name="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama"  placeholder="nama">
        </div>
        <div class="mb-3">
            <label for="absen" class="form-label" id="absen" name="absen">Absen</label>
            <input type="number" class="form-control" id="absen" name="absen"  placeholder="absen">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label" id="email" name="email">Email</label>
            <input type="email" class="form-control" id="email" name="email"  placeholder="email">
        </div>
        

      </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Tambah</button>
        </form>
      </div>
    </div>
  </div>
</div>
