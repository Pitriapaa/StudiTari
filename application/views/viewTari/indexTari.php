<div class="main-content">
  <div class="section__content section__content--p30">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="overview-wrap mb-2">
            <a class="au-btn au-btn-icon au-btn--blue text-capitalize text-white rounded-4" href="<?= site_url('Tari/tambahData'); ?>">
              <i class="zmdi zmdi-plus"></i>Tambah Data</a>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <?php foreach ($dataTari as $dt) : ?>
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <i class="fa fa-user"></i>
                <strong class="card-title pl-2 text-capitalize "><?= $dt['nama_tari']; ?></strong>
              </div>
              <img class="card-img-top" src="<?= base_url('assets/images/gambarTari/') . $dt['gambar']; ?>" alt="Card image cap">
              <div class="card-body">
                <h4 class="card-title mb-3 text-capitalize"><?= $dt['jenis_tari']; ?></h4>
                <p class="card-text">Jumlah Penari : <?= $dt['jumlah_penari']; ?> Orang
                </p>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>
</div>

</div>