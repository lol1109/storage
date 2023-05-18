      <div class="page-wrapper">
        <!-- Page body -->
        <div class="page-body">
          <div class="container-xl d-flex flex-column justify-content-center">
          	<form action="<?= base_url('index.php/Cabang/tambah_data_cabang') ?>" method="post">
          	<div class="row">
              <div class="col-md-3"></div>
          		<div class="col-md-6">
                <div class="card">
                  <div class="card-header bg-primary text-white">
                    <h3 class="card-title">Tambah Data Petugas </h3>
                  </div>
                    <div class="card-body">
                  	 		<div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" class="form-control" name="Nama" placeholder="Budi" required>
                          </div>

                      	<div class="mb-3">
                             <label class="form-label">Kontak</label>
                            <input type="text" class="form-control" name="Kontak" placeholder="081122334455" required>
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