      <div class="page-wrapper">
        <!-- Page body -->
        <div class="page-body justify-content-center">
          <div></div>
          <div class="container-xl d-flex flex-column justify-content-center ">
          	<form action="<?= base_url('Fungsi/tambah_data') ?>" method="post">
          	<div class="row">
              <div class="col-md-3"></div>
          		<div class="col-md-6">
                <div class="card justify-content-center">
                  <div class="card-header bg-primary text-white">
                    <h3 class="card-title">Tambah Data Tamu</h3>
                  </div>
                  <div class="card-body">

                  	 		<div class="mb-3">
                              	<label class="form-label">Nama</label>
                              	<input type="text" class="form-control" name="Nama" placeholder="Budi" value="<?= set_value('Nama') ?>">
                                <div class="text-red"><?= form_error('Nama'); ?></div>
                            </div>

                      		<div class="mb-3">
                             	<label class="form-label">Kontak</label>
                              	<input type="text" class="form-control" name="Kontak" placeholder="081122334455" value="<?= set_value('Kontak') ?>">
                                <div class="text-red"><?= form_error('Kontak'); ?></div>
                            </div>

                             <div class="mb-3">
                             	<label class="form-label">Kontak WhatsApp</label>
                              	<input type="text" class="form-control" name="noWa" placeholder="0812345678910" value="<?= set_value('noWa') ?>">
                                <div class="text-red"><?= form_error('noWa'); ?></div>
                            </div>

                            <div class="mb-3">
                            <div class="form-label">Bidang </div>
                            <div>
                              <label class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="Bidang"  value="Elang Property" checked>
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
                                <input class="form-check-input" type="radio" name="Tujuan"  value="Pengajuan" checked>
                                <span class="form-check-label">Pengajuan</span>
                              </label>

                              <label class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="Tujuan"  value="Konsultasi" checked>
                                <span class="form-check-label">Konsultasi</span>
                              </label>

                              <label class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="Tujuan" value="Non Pengajuan">
                                <span class="form-check-label">Non Pengajuan</span>
                              </label>
                            </div>
                            </div>

                            <div class="mb-3">
                              	<label class="form-label">Jenis Informasi</label>
                              	<input type="text" class="form-control" name="JenisInformasi" placeholder="apa yang ingin diajukan" value="<?= set_value('JenisInformasi') ?>">
                                <div class="text-red"><?= form_error('JenisInformasi'); ?></div>
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
                              <div class="form-label">Cabang</div>
                              <select name="cabang" class="form-select">
                                 <?php foreach ($cabang as $dt) : //dt = data ?>
                                <option value="<?= $dt->id_cabang; ?>"><?= $dt->nama_cabang; ?></option>
                                <?php endforeach; ?>
                              </select>
                            </div>

                            <div class="mb-3">
                              <div class="form-label">Petugas</div>
                              <select name="petugas" class="form-select">
                                 <?php foreach ($petugas as $dt) : //dt = data ?>
                                <option value="<?= $dt->id_petugas; ?>"><?= $dt->nama_petugas; ?></option>
                                <?php endforeach; ?>
                              </select>
                            </div>
                            
                              <div class="mb-3">
                              <label class="form-label">Kesimpulan <span class="form-label-description">-</span></label>
                              <textarea class="form-control" name="Kesimpulan" rows="6" placeholder="Content.." value="value="<?= set_value('Kesimpulan') ?>></textarea>
                            </div>

                            <input type="hidden" name="tanggal" value=" <?= date('Y-m-d'); ?>">

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