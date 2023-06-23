      <div class="page-wrapper">
        <!-- Page body -->
        <div class="page-body">
          <div class="container-xl d-flex flex-column justify-content-center">
          	<form action="<?= base_url('Cabang/tambah_data_cabang') ?>" method="post">
          	<div class="row">
              <div class="col-md-3"></div>
          		<div class="col-md-6">
                <div class="card">
                  <div class="card-header bg-primary text-white">
                    <h3 class="card-title">Tambah Data Cabang</h3>
                    <div class="card-actions">
                     <a class="btn btn-success" href="<?= base_url('Cabang'); ?>">Kembali</a>
                   </div>
                  </div>
                    <div class="card-body">
                  	 		<div class="mb-3">
                                <label class="form-label">Nama</label>
                                <input type="text" class="form-control" name="Nama" placeholder="Elang Motor Pekanbaru" value="<?= set_value('Nama') ?>">
                                <div class="text-red"><?= form_error('Nama'); ?></div>
                            </div>


                      	<div class="mb-3">
                              <label class="form-label">Kontak</label>
                                <input type="text" class="form-control" name="Kontak" placeholder="081122334455" value="<?= set_value('Kontak') ?>">
                                <div class="text-red"><?= form_error('Kontak'); ?></div>
                            </div>

                        <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                        		<button type="submit" name="kirim" class="btn btn-primary w-100"> Tambah </button>
                      	</div>
                    </div>
                </div>
              </div>
              <div class="col-md-3"></div>
          	</div>
         </form>
        </div>
      </div>