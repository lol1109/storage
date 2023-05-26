      <div class="page-wrapper">
        <!-- Page body -->
        <div class="page-body">
          <div class="container-xl">
            <?php foreach($tamu as $dt) : ?>
          	<form action="<?= base_url('Cabang/Ubah') ?>" method="post">
          	<div class="row">
          		<div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Ubah Data Tamu</h3>
                  </div>
                  <div class="card-body">
                    
                  			<input type="hidden" name="id_cabang" value="<?= $dt->id_cabang; ?>">

                  	 		<div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" class="form-control" name="Nama" placeholder="Budi" value="<?= $dt->nama_cabang; ?>" required>
                          </div>

                        <div class="mb-3">
                             <label class="form-label">Kontak</label>
                            <input type="text" class="form-control" name="Kontak" placeholder="081122334455" value="<?= $dt->kontak; ?>" required>
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