      <div class="page-wrapper">
        <!-- Page body -->
        <div class="page-body justify-content-center">
            <div class="container-xl d-flex flex-column justify-content-center ">
          	<div class="row">
              <div class="col-md-3"></div>
              <div class="col-md-6">
                <div class="card justify-content-center">
                  <div class="card-header bg-primary text-white">
                    <h3 class="card-title">Ubah Data akad</h3>
                    <div class="card-actions">
                     <a class="btn btn-success" href="<?= base_url('Fungsi/back'); ?>">Kembali</a>
                   </div>
                  </div>
                  <div class="card-body">
                   <?php foreach($akad as $dt) : ?>
                     <?= form_open_multipart('Fungsi/ubah_akad/'.base64_encode($dt->id)); ?>
                     <input type="hidden" name="id" value="<?= $dt->id; ?>">
                    
                            <div class="row">
                              <div class="mb-3">
                                <label class="form-label">merek</label>
                                <input type="text" class="form-control" name="merek" placeholder="VARIO" value="<?= $dt->merek ?>">
                                <div class="text-red"><?= form_error('merek'); ?></div>
                            </div> 
                            <input type="hidden" name="tanggal" value=" <?= date('Y-m-d'); ?>">
                              <div class="mb-3">
                                <label class="form-label">Gambar</label>
                                <input type="file" name="gambar" value="<?= $dt->gambar ?>">
                                <?php echo @$eror; ?>
                            </div>
                               <div class="mb-3">
                              <div class="form-label">Nama</div>
                              <select name="Nama" class="form-select">
                                 <?php foreach ($akad as $dt) : //dt = data ?>
                                <option value="<?= $dt->nama; ?>">default</option>
                                <?php endforeach; ?>
                                <?php foreach ($tamu as $dt) : //dt = data ?>
                                <option value="<?= $dt->id_tamu; ?>"><?= $dt->Nama; ?></option>
                                <?php endforeach; ?>
                              </select>
                            </div>
                            <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-6">
                            <button type="submit" name="kirim" class="btn btn-primary w-75">
                                Update
                            </button>
                            </div>
                            </div>
                         </form>
                        <?php endforeach; ?>
                      </div>
                     </div>
                    <div class="col-md-3"></div>
                  </div>
          	     </div>
                </form>
              </div>
            </div>
          </div>
        </div>