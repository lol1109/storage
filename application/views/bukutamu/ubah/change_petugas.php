      <div class="page-wrapper">
        <!-- Page body -->
        <div class="page-body">
          <div class="container-xl">
            <?php foreach($tamu as $dt) : ?>
          	<form action="<?= base_url('index.php/Petugas/Ubah') ?>" method="post">
          	<div class="row">
          		<div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Ubah Data Tamu</h3>
                  </div>
                  <div class="card-body">
                    
                  			<input type="hidden" name="id_petugas" value="<?= $dt->id_petugas; ?>">

                  	 		<div class="mb-3">
                                <label class="form-label">Nama</label>
                                <input type="text" class="form-control" name="nama" placeholder="afandy" value="<?= $dt->nama_petugas; ?>" required>
                            </div>

                          <div class="mb-3">
                              <label class="form-label">username</label>
                                <input type="text" class="form-control" name="username" placeholder="fandy" value="<?= $dt->username; ?>" required>
                            </div>


                          <div class="mb-3">
                              <label class="form-label">password</label>
                                <input type="text" class="form-control" name="pass" placeholder="12345678" value="<?= $dt->password; ?>" required>
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
                        		<button type="submit" name="submit" class="btn btn-primary w-100">
                          			Ubah
                        		</button>
                      		</div>
                        <?php endforeach; ?>
                  </div>
                </div>
              </div>
          	</div>
         </form>
              </div>
            </div>
          </div>
        </div>