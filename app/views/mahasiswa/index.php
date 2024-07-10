<div class="container mt-3">
  <div class="row">
    <div class="col-6">
      <?php Flasher::flash(); ?>
    </div>
  </div>
  <div class="row">
      <div class="col-6">
          <button type="button" class="btn btn-primary tombolTambah" data-bs-toggle="modal" data-bs-target="#formModal">
              tambah data mahasiswa
          </button>

          <br><br>

          <h3>Data Mahasiswa</h3>
          <ul class="list-group">
              <?php foreach($data['mhs'] as $mhs) :?>
                  <li class="list-group-item ">
                      <?= $mhs['nama'] ?>
                      <a href="<?= BASEURL;?>/mahasiswa/delete/<?= $mhs['id'];?>" 
                        class="badge text-bg-danger float-end ms-2 link-underline link-underline-opacity-0"
                        onclick="return confirm('Yakin Dek?');">
                        Delete
                      </a>
                      <a href="<?= BASEURL;?>/mahasiswa/update/<?= $mhs['id'];?>" 
                        class="badge text-bg-secondary float-end ms-2 link-underline link-underline-opacity-0 editDataMhs"
                        data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?=$mhs['id'];?>">
                        Update
                      </a>
                      <a href="<?= BASEURL;?>/mahasiswa/detail/<?= $mhs['id'];?>" 
                        class="badge text-bg-primary float-end ms-2 link-underline link-underline-opacity-0">
                        Detail
                      </a>
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
        <h1 class="modal-title fs-5" id="judulModalLabel">Tambah Data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL;?>/mahasiswa/tambah" method="post">
        <input type="hidden" name="id" id="id">

        <div class="mb-3">
            <label for="nama" id>Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" autocomplete="off">
        </div>
        <div class="mb-3">
            <label for="absen">Absen</label>
            <input type="number" class="form-control" id="absen" name="absen" autocomplete="off">
        </div>
        <div class="mb-3">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" autocomplete="off">
        </div>
        <label for="jurusan">Jurusan</label>
        <select class="form-select" aria-label="jurusan" id="jurusan" name="jurusan">
            <option selected>Pilih Jurusan</option>
            <option value="Teknik Informatika">Teknik Informatika</option>
            <option value="Psikologi">Psikologi</option>
            <option value="Teknik Mesin">Teknik Mesin</option>
            <option value="Teknik Sipil">Teknik Sipil</option>
            <option value="Teknik Elektro">Teknik Elektro</option>
        </select>

      </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
      </div>
    </div>
  </div>
</div>
