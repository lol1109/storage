      <div class="page-wrapper">
        <!-- Page body -->
        <div class="page-body">
          <div class="container-xl d-flex flex-column justify-content-center">
          	<form action="<?= base_url('Petugas/tambah_data_petugas') ?>" method="post">
          	<div class="row">
              <div class="col-md-3"></div>
          		<div class="col-md-6">
                <div class="card">
                  <div class="card-header bg-primary text-white">
                    <h3 class="card-title">Tambah Data Petugas</h3>
                  </div>
                  <div class="card-body">

                  	 		  <div class="mb-3">
                                <label class="form-label">Nama</label>
                                <input type="text" class="form-control" name="Nama" placeholder="Budi" value="<?= set_value('Nama') ?>">
                                <div class="text-red"><?= form_error('Nama'); ?></div>
                            </div>

                      		 <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" class="form-control <?= form_error('username') ? 'invalid' : '' ?>" name="username" id="username" placeholder="your" value="<?= set_value('username') ?>">
                <div class="text-red"><?= form_error('username'); ?></div>
              </div>


                          <div class="mb-3">
                              <label class="form-label">password</label>
                                <input type="password" class="form-control <?= form_error('password') ? 'invalid' : '' ?>" name="password" id="password" placeholder="Your password" value="<?= set_value('password') ?>">
                                 <div class="text-red text-muted"><?= form_error('password'); ?></div>
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