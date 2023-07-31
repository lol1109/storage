      <div class="page-wrapper">
        <!-- Page body -->
        <div class="page-body justify-content-center">
          <div class="container-xl d-flex flex-column justify-content-center ">
          	<div class="row">
          		<div class="col-md-12">
                <div class="card justify-content-center">
                  <div class="card-header bg-primary text-white">
                    <h3 class="card-title">Upload Data syarat</h3>
                    <div class="card-actions">
                     <a class="btn btn-success" href="<?= base_url('Fungsi/back'); ?>">Kembali</a>
                   </div>
                  </div>
                  <div class="card-body">
                            
                          <?= form_open_multipart('Fungsi/tambah_syarat') ?>
                            <div class="row">
                              <div class="mb-3">
                                <label class="form-label">Judul</label>
                                <input type="text" class="form-control" name="judul" placeholder="VARIO" value="<?= set_value('judul') ?>">
                                <div class="text-red"><?= form_error('judul'); ?></div>
                            </div>
                              <div class="mb-3">
                                <label class="form-label">deskripsi</label>
                                <input type="text" class="form-control" name="desc" placeholder="VARIO" value="<?= set_value('desc') ?>">
                                <div class="text-red"><?= form_error('desc'); ?></div>
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