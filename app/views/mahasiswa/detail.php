
<div class="container">

    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $data['mhs']['nama']?></h5>
            <h6 class="card-subtitle mb-2 text-body-secondary"><?= $data['mhs']['absen']?></h6>
            <p class="card-text"><?= $data['mhs']['email']?></p>
            <p class="card-text"><?= $data['mhs']['jurusan']?></p>
            <a href="<?= BASEURL; ?>/mahasiswa" class="card-link">Back</a>
        </div>
    </div>

</div>