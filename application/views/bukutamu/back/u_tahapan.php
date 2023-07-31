      <div class="page-wrapper">
        <!-- Page body -->
        <div class="page-body justify-content-center">
            <div class="container-xl d-flex flex-column justify-content-center ">
            <div class="row">
              <div class="col-md-3"></div>
              <div class="col-md-6">
                <div class="card justify-content-center">
                  <div class="card-header bg-primary text-white">
                    <h3 class="card-title">Ubah Data Home</h3>
                    <div class="card-actions">
                     <a class="btn btn-success" href="<?= base_url('Fungsi/back'); ?>">Kembali</a>
                   </div>
                  </div>
                  <div class="card-body">
                   <?php foreach($tahapan as $dt) : ?>
                     <?= form_open_multipart('Fungsi/ubah_tahapan/'.base64_encode($dt->id)); ?>
                     <input type="hidden" name="id" value="<?= $dt->id; ?>">
                            <div class="row">
                                  <div class="mb-3">
                                <label class="form-label">Judul</label>
                                <input type="text" class="form-control" name="judul" placeholder="VARIO" value="<?= $dt->judul ?>">
                                <div class="text-red"><?= form_error('judul'); ?></div>
                            </div>
                              <div class="mb-3">
                                <label class="form-label">deskripsi</label>
                              <textarea class="form-control" name="example-textarea-input" rows="6" placeholder="Content.." style="height: 98px;"><?= $dt->desc; ?></textarea>
                                <div class="text-red"><?= form_error('desc'); ?></div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Gambar</label>
                                <input type="file" name="gambar">
                                <?php echo @$eror; ?>
                            </div>
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