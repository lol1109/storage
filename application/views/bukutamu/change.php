      <div class="page-wrapper">
        <!-- Page body -->
        <div class="page-body">
          <div class="container-xl">
            <?php foreach($tamu as $dt) : ?>
          	<form action="<?= base_url('index.php/Fungsi/Ubah') ?>" method="post">
          	<div class="row">
          		<div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Ubah Data Tamu</h3>
                  </div>
                  <div class="card-body">
                    
                  			<input type="hidden" name="id_tamu" value="<?= $dt->id_tamu; ?>">

                  	 		<div class="col-mb-3">
                              	<label class="form-label">Nama</label>
                              	<input type="text" class="form-control" name="Nama" value="<?= $dt->Nama; ?>">
                            </div>

                      		<div class="mb-3">
                             	<label class="form-label">Kontak</label>
                              	<input type="text" class="form-control" name="Kontak" value="<?= $dt->Kontak; ?>">
                            </div>

                             <div class="mb-3">
                             	<label class="form-label">Kontak WhatsApp</label>
                              	<input type="text" class="form-control" name="noWa" value="<?= $dt->noWa; ?>">
                            </div>

                            <div class="mb-3">
                            <div class="form-label">Bidang </div>
                            <div>
                              <label class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" 
	       name="Bidang"  value="Elang Property" checked>
                                <span class="form-check-label">Elang Property</span>
                              </label>
                              <label class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" 
	       name="Bidang" value="Elang Motor">
                                <span class="form-check-label">Elang Motor</span>
                              </label>
                            </div>
                            </div>

                            <div class="mb-3">
                            <div class="form-label">Tujuan </div>
                            <div>
                              <label class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" 
	       name="Tujuan"  value="Pengajuan" checked>
                                <span class="form-check-label">Pengajuan</span>
                              </label>

                              <label class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" 
	       name="Tujuan"  value="Konsultasi" checked>
                                <span class="form-check-label">Konsultasi</span>
                              </label>

                              <label class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" 
	       name="Tujuan" value="Non Pengajuan">
                                <span class="form-check-label">Non Pengajuan</span>
                              </label>
                            </div>
                            </div>

                            <div class="mb-3">
                              	<label class="form-label">Jenis Informasi</label>
                              	<input type="text" class="form-control" name="JenisInformasi" value="<?= $dt->JenisInformasi; ?>">
                            </div>

                      		<div class="mb-3">
                              <div class="form-label">Informasi</div>
                              <select name="Informasi" class="form-select">
                                <option value="Postingan Instargam">Postingan Instargam</option>
                                <option value="Iklan facebook">Iklan facebook</option>
                                <option value="iklan Instargam">iklan Instargam</option>
                                <option value="iklan google">iklan google</option>
                                <option value="Pencarian google">Pencarian google</option>
                                <option value="Website">Website</option>
                                <option value="Brosur">Brosur</option>
                                <option value="Marketing Freelance">Marketing Freelance</option>
                                <option value="Youtube">Youtube</option>
                                <option value="Teman kantor">Teman kantor</option>
                                <option value="Teman kajian">Teman kajian</option>
                                <option value="Teman suami">Teman suami</option>
                                <option value="Teman istri">Teman istri</option>
                                <option value="Keluarga/saudara">Keluarga/saudara</option>
                                <option value="WhatsApp">WhatsApp</option>
                                <option value="Teman Konsumen Elang">Teman Konsumen Elang</option>
                              </select>
                            </div>


                              <div class="mb-3">
                             	<label class="form-label">Kesimpulan</label>
                              	<input type="text" class="form-control" name="Kesimpulan" value="<?= $dt->Kesimpulan; ?>">
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