      <div class="page-wrapper">
        <!-- Page body -->
        <div class="page-body justify-content-center">
          <div class="container-xl d-flex flex-column justify-content-center ">
          	<div class="row">
          		<div class="col-md-12">
                <div class="card justify-content-center">
                  <div class="card-header bg-primary text-white">
                    <h3 class="card-title">Upload Data Akad</h3>
                    <div class="card-actions">
                     <a class="btn btn-success" href="<?= base_url('Akad'); ?>">Kembali</a>
                   </div>
                  </div>
                  <div class="card-body">
                            
                          <?= form_open_multipart('Fungsi/upload') ?>
                            <div class="row">
                                <div class="mb-3">
                              <div class="form-label">Nama</div>
                              <select name="Nama" class="form-select">
                                 <?php foreach ($tamu as $dt) : //dt = data ?>
                                <option value="<?= $dt->id_tamu; ?>"><?= $dt->Nama; ?></option>
                                <?php endforeach; ?>
                              </select>
                            </div>
                              <input type="hidden" name="tanggal" value=" <?= date('Y-m-d'); ?>">
                              <div class="mb-3">
                                <label class="form-label">merek</label>
                                <input type="text" class="form-control" name="merek" placeholder="VARIO" value="<?= set_value('merek') ?>">
                                <div class="text-red"><?= form_error('merek'); ?></div>
                            </div>
                              <div class="mb-3">
                                <label class="form-label">Gambar</label>
                                <input type="file" name="gambar">
                                <?php echo @$eror; ?>
                            </div>
                            <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-6">
                            <button type="submit" name="kirim" class="btn btn-primary w-75">
                                Tambah
                            </button>
                            </div>
                            </div>
                         </form>
                  </div>
                </div>
                </div>
              </div>
          	</div>
          </div>
      </div>
      <script src="<?= base_url('dist/libs/dropzone/dist/dropzone-min.js?1674944402'); ?>" defer=""></script>
      <script>
      // @formatter:off
      document.addEventListener("DOMContentLoaded", function() {
        new Dropzone("#dropzone-multiple")
      })
    </script>