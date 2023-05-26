      <div class="page-wrapper">
        <!-- Page body -->
        <div class="page-body">
          <div class="container-xl d-flex flex-column justify-content-center">
            <br>
          <br>
            <div class="col-12">
              <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Daftar Cabang</h3>
                  </div>
                  <!-- <div class="card-body border-bottom py-3">
                     <div class="input-icon">
                      <form action="<?= base_url('Fungsi/cari') ?>" method="get" autocomplete="off">
                      <div class="input-group mb-0">
                      <input type="text" name="S" class="form-control" placeholder="Search…">
                      <button class="btn btn-primary" name="cari" value="search" type="submit">Cari</button>
                     </div>
                   </form>
                 </div>
                  </div> -->

                  <div class="table-responsive">
                    <table id="data" class="table card-table table-vcenter text-nowrap datatable ">
                      <thead>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Kontak</th>
                          <th class="w-5"></th>
                        </tr>
                        </tr>
                      </thead>
                      <?php
                        $no = 1;
                        foreach ($cabang as $dt) : //dt = datatamu 
                      ?>
                      <tbody>
                        <tr>
                          <td><?= $no; ?></td>
                          <td><?= $dt->nama_cabang; ?></td>
                          <td><?= $dt->kontak; ?></td>
                          <td>
                            <?= anchor('Cabang/Edit/'.$dt->id_cabang, '<button class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file-plus" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                                <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z"></path>
                                <path d="M12 11l0 6"></path>
                                <path d="M9 14l6 0"></path>
                            </svg>
                            <span>
                              Edit
                            </span>
                          </button>'); ?> <a style="color: white;" href="#" class="btn btn-danger " data-bs-toggle="modal" data-bs-target="#modal-small">
                                              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file-x " width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                              <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                                              <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z"></path>
                                              <path d="M10 12l4 4m0 -4l-4 4"></path>
                                              </svg>
                                              <span>
                                                Hapus
                                              </span>
                                            </a>
                          </td>
                        </tr>
                      </tbody>
                    <?php $no++; ?>
                    <?php endforeach; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
                </div>
                <br>
              </div>
            </div>
          </div>
        </div>
        <div class="modal modal-blur fade" id="modal-small" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <div class="modal-title">hapus data?</div>
            <div>apakah anda yakin menghapus data ini</div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-link link-secondary me-auto" data-bs-dismiss="modal">batal</button>
            <?= anchor('Cabang/hapus_cabang/'.$dt->id_cabang, '<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Ya, hapus data ini</button>'); ?>
            
          </div>
        </div>
      </div>
    </div>