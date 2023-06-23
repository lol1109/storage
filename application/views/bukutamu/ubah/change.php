      <div class="page-wrapper">
        <!-- Page body -->
        <div class="page-body justify-content-center">
          <div class="container-xl d-flex flex-column justify-content-center ">
            <?php foreach($tamu as $dt) : ?>
          	<form action="<?= base_url('Fungsi/Ubah/'.$dt->id_tamu); ?>" method="post">
          	<div class="row">
              <div class="col-md-12">
                <div class="card justify-content-center">
                  <div class="card-header bg-primary text-white">
                    <div class="col-md-3">
                    <h3 class="card-title">Ubah Data Tamu</h3>
                    </div>
                    <div class="col-md-8"></div>
                     <a class="btn btn-success" href="<?= base_url('Tamu'); ?>">Kembali</a>
                  </div>
                  <div class="card-body">
                    <input type="hidden" name="id_tamu" value="<?= $dt->id_tamu; ?>">
                    <div class="row"> 
                  			
                      <div class="col-md-3">
                  	 		<div class="mb-3">
                              	<label class="form-label">Nama</label>
                              	<input type="text" class="form-control" name="Nama" value="<?= $dt->Nama; ?>">
                                 <div class="text-red"><?= form_error('Nama'); ?></div>
                            </div>

                      		<div class="mb-3">
                             	<label class="form-label">Kontak</label>
                              	<input type="text" class="form-control" name="Kontak" value="<?= $dt->Kontak; ?>">
                                <div class="text-red"><?= form_error('Kontak'); ?></div>
                            </div>

                             <div class="mb-3">
                             	<label class="form-label">Kontak WhatsApp</label>
                              	<input type="text" class="form-control" name="noWa" value="<?= $dt->noWa; ?>">
                                <div class="text-red"><?= form_error('noWa'); ?></div>
                            </div>
                      </div>
                          <div class="col-md-3">
                            <div class="mb-3">
                            <div class="form-label">Bidang </div>
                            <div>
                              <label class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="Bidang"  value="<?= $dt->Bidang; ?>" checked>
                                <span class="form-check-label">Default</span>
                              </label>
                              <label class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="Bidang"  value="Elang Property">
                                <span class="form-check-label">Elang Property</span>
                              </label>
                              <label class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="Bidang" value="Elang Motor">
                                <span class="form-check-label">Elang Motor</span>
                              </label>
                            </div>
                            </div>

                            <div class="mb-3">
                            <div class="form-label">Tujuan </div>
                            <div>
                               <label class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="Tujuan"  value="<?= $dt->Tujuan; ?>" checked>
                                <span class="form-check-label">Default</span>
                              </label>
                              <label class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="Tujuan"  value="Pengajuan">
                                <span class="form-check-label">Pengajuan</span>
                              </label>
                              <label class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="Tujuan"  value="Konsultasi">
                                <span class="form-check-label">Konsultasi</span>
                              </label>

                              <label class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="Tujuan" value="Non Pengajuan">
                                <span class="form-check-label">Non Pengajuan</span>
                              </label>
                            </div>
                            </div>
                          </div>

                            <div class="col-md-3">
                              <div class="mb-3">
                              	<label class="form-label">Jenis Informasi</label>
                              	<input type="text" class="form-control" name="JenisInformasi" value="<?= $dt->JenisInformasi; ?>">
                                <div class="text-red"><?= form_error('JenisInformasi'); ?></div>
                              </div>

                      		    <div class="mb-3">
                              <div class="form-label">Informasi</div>
                              <select name="Informasi" class="form-select">
                                <option value="<?= $dt->Informasi; ?>">Default</option>
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
                              <div class="form-label">Cabang</div>
                              <select name="cabang" class="form-select">
                                <option value="<?= $dt->cabang; ?>">Default</option>
                                 <?php foreach ($cabang as $dt) : //dt = data ?>
                                 <option value="<?= $dt->id_cabang; ?>"><?= $dt->nama_cabang; ?></option>
                                <?php endforeach; ?>
                              </select>
                                </div>
                              </div>

                            <div class="col-md-3">
                            <div class="mb-3">
                              <div class="form-label">Petugas</div>
                              <select name="petugas" class="form-select">
                                  <?php foreach ($tamu as $dt) : //dt = data ?>
                                  <option value="<?= $dt->petugas; ?>">Default</option>
                                <?php endforeach; ?>
                                 <?php foreach ($petugas as $dt) : //dt = data ?>
                                  <option value="<?= $dt->id_petugas; ?>"><?= $dt->nama_petugas; ?></option>
                                <?php endforeach; ?>
                              </select>
                            </div> 


                             <div class="mb-3">
                              <label class="form-label">Kesimpulan</label>
                              <?php foreach ($tamu as $dt) : //dt = data ?>
                                   <textarea class="form-control" name="Kesimpulan" rows="5" placeholder="Content.." value="<?= $dt->Kesimpulan; ?>"></textarea>
                                <?php endforeach; ?>
                            </div>
                            </div> 

                             <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-6">
                            <button type="submit" name="kirim" class="btn btn-primary w-75">
                                Tambah
                            </button>
                            </div>
                            </div>
                        <?php endforeach; ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
         </form>
        </div>
       </div>
      </div>