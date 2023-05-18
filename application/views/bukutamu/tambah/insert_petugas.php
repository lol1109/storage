      <div class="page-wrapper">
        <!-- Page body -->
        <div class="page-body">
          <div class="container-xl d-flex flex-column justify-content-center">
          	<form action="<?= base_url('index.php/Petugas/tambah_data_petugas') ?>" method="post">
          	<div class="row">
              <div class="col-md-3"></div>
          		<div class="col-md-6">
                <div class="card">
                  <div class="card-header bg-primary text-white">
                    <h3 class="card-title">Tambah Data Cabang</h3>
                  </div>
                  <div class="card-body">

                  	 		<div class="mb-3">
                              	<label class="form-label">Nama</label>
                              	<input type="text" class="form-control" name="nama" placeholder="afandy" required>
                            </div>

                      		<div class="mb-3">
                             	<label class="form-label">username</label>
                              	<input type="text" class="form-control" name="username" placeholder="fandy" required>
                            </div>


                          <div class="mb-3">
                              <label class="form-label">password</label>
                                <input type="text" class="form-control" name="pass" placeholder="12345678" required>
                            </div>

                            
                              <div class="mb-3">
                              <div class="form-label">cabang</div>
                              <select name="id_cabang" class="form-select">
                                 <?php foreach ($cabang as $dt) : //dt = datatamu ?>
                                <option value="<?= $dt->id_cabang; ?>"><?= $dt->nama_cabang; ?></option>
                                <?php endforeach; ?>
                              </select>
                            </div>
                               

                            <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                        		<button type="submit" name="kirim" class="btn btn-primary w-100">
                          			Tambah
                        		</button>
                      		</div>
                  </div>
                </div>
              </div>
              <div class="col-md-3"></div>
          	</div>
         </form>
        </div>
      </div>