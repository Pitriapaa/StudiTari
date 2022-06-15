<div class="main-content">
  <div class="section__content section__content--p30">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-lg-9">
          <div class="card">
            <div class="card-header text-center">
              <strong>Form </strong> Tambah Data Tarian
            </div>
            <div class="card-body card-block">
              <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                <div class="row form-group">
                  <div class="col col-md-3">
                    <label for="nama_tari" class=" form-control-label">Nama Tarian </label>
                  </div>
                  <div class="col-12 col-md-9">
                    <input type="text" id="nama_tari" name="nama_tari" class="form-control">
                    <small class="form-text text-danger"><?= form_error('nama_tari'); ?></small>
                  </div>
                </div>
                <div class="row form-group">
                  <div class="col col-md-3">
                    <label for="asal_tari" class=" form-control-label">Asal Tarian </label>
                  </div>
                  <div class="col-12 col-md-9">
                    <input type="text" id="asal_tari" name="asal_tari" class="form-control">
                    <small class="form-text text-danger"><?= form_error('asal_tari'); ?></small>
                  </div>
                </div>
                <div class="row form-group">
                  <div class="col col-md-3">
                    <label for="jenis_tari" class=" form-control-label">Jenis Tarian </label>
                  </div>
                  <div class="col-12 col-md-9">
                    <input type="text" id="jenis_tari" name="jenis_tari" class="form-control">
                    <small class="form-text text-danger"><?= form_error('jenis_tari'); ?></small>
                  </div>
                </div>
                <div class="row form-group">
                  <div class="col col-md-3">
                    <label for="jumlah_penari" class=" form-control-label">Jumlah Penari </label>
                  </div>
                  <div class="col-12 col-md-9">
                    <input type="number" id="jumlah_penari" name="jumlah_penari" class="form-control">
                    <small class="form-text text-danger"><?= form_error('jumlah_penari'); ?></small>
                  </div>
                </div>
                <div class="row form-group">
                  <div class="col col-md-3">
                    <label for="gambar" class=" form-control-label">Gambar</label>
                  </div>
                  <div class="col-12 col-md-9">
                    <input type="file" id="gambar" name="gambar" class="form-control-file">
                  </div>
                </div>
            </div>
            <div class="card-footer">
              <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                <i class="fa fa-fw fa-plus fa-lg"></i>&nbsp;
                <span id="payment-button-amount">Tambah Data</span>
              </button>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>