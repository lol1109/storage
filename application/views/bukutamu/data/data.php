      <div class="page-wrapper">
        <!-- Page body -->
        <div class="page-body">
          <div class="container-xl d-flex flex-column justify-content-center">
            <div class="row row-cards">
                  <div class="col-6 row-sm-1 col-sm-6 col-md-3">
                    <div class="card card-sm">
                      <div class="card-body">
                        <div class="row align-items-center">
                          <div class="col-auto">
                            <span class="bg-primary text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/currency-dollar -->
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M16.7 8a3 3 0 0 0 -2.7 -2h-4a3 3 0 0 0 0 6h4a3 3 0 0 1 0 6h-4a3 3 0 0 1 -2.7 -2"></path><path d="M12 3v3m0 12v3"></path></svg>
                            </span>
                          </div>
                          <div class="col">
                            <div class="font-weight-medium">
                              Total
                            </div>
                            <div class="text-muted">
                              <?= $hasil2; ?>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 row-sm-1 col-sm-6 col-md-3">
                    <div class="card card-sm">
                      <div class="card-body">
                        <div class="row align-items-center">
                          <div class="col-auto">
                            <span class="bg-green text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/shopping-cart -->
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path><path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path><path d="M17 17h-11v-14h-2"></path><path d="M6 5l14 1l-1 7h-13"></path></svg>
                            </span>
                          </div>
                          <div class="col">
                            <div class="font-weight-medium">
                              Bulan ini
                            </div>
                            <div class="text-muted">
                                <?= $hasil3; ?>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 col-sm-1 col-sm-6 col-md-3">
                    <div class="card card-sm">
                      <div class="card-body">
                        <div class="row align-items-center">
                          <div class="col-auto">
                            <span class="bg-twitter text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/brand-twitter -->
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M22 4.01c-1 .49 -1.98 .689 -3 .99c-1.121 -1.265 -2.783 -1.335 -4.38 -.737s-2.643 2.06 -2.62 3.737v1c-3.245 .083 -6.135 -1.395 -8 -4c0 0 -4.182 7.433 4 11c-1.872 1.247 -3.739 2.088 -6 2c3.308 1.803 6.913 2.423 10.034 1.517c3.58 -1.04 6.522 -3.723 7.651 -7.742a13.84 13.84 0 0 0 .497 -3.753c0 -.249 1.51 -2.772 1.818 -4.013z"></path></svg>
                            </span>
                          </div>
                          <div class="col">
                            <!-- property -->
                            <div class="font-weight-medium">
                                Property
                            </div>
                            <div class="text-muted">
                              <?= $hasil; ?>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 col-sm-1 col-sm-6 col-md-3">
                    <div class="card card-sm">
                      <div class="card-body">
                        <div class="row align-items-center">
                          <div class="col-auto">
                            <span class="bg-facebook text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/brand-facebook -->
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3"></path></svg>
                            </span>
                          </div>
                          <div class="col">
                            <!-- motor -->
                            <div class="font-weight-medium">
                              Motor
                            </div>
                            <div class="text-muted">
                              <?= $hasil1; ?>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div> 
            <br>
            <div class="col-lg-12">
              <div class="card">
                  <div class="card-header">
                      <h3 class="card-title">Daftar Tamu</h3>
                    <div class="card-actions"></div>
                      <a class="btn btn-primary" style="margin-right: 10px" href="<?= base_url('tamu/tambah'); ?>">Tambah</a>
                      <a class="btn btn-success" href="<?= base_url('Fungsi/cetak_pdf'); ?>">Print</a>
                  </div>
                  <div class="table-responsive">
                    <table id="data" class="table card-table table-vcenter border-dark text-nowrap">
                      <thead class="thead-dark">
                          <th>No</th>
                          <th>Name</th>
                          <th>Kontak</th>
                          <th>Cabang</th>
                          <th>Informasi</th>
                          <th>Petugas</th>
                          <th>Action</th>
                        </tr>
                        </tr>
                      </thead>
                      <?php
                        $no = 1;
                        foreach ($tamu as $dt) : //dt = datatamu 
                      ?>
                      <tbody>
                        <tr>
                          <td rowspan="2"><?= $no; ?></td>
                          <td><?= $dt->Nama; ?><br><?= $dt->Tujuan; ?></td>
                          <td><?= $dt->Kontak; ?><br><?php  if($dt->Kontak == $dt->noWa) { echo "-"; } else {?>
                            <?= $dt->noWa; }?></td>
                          <td><?= $dt->nama_cabang; ?><br><?= $dt->Bidang; ?></td>
                          <td><?= $dt->JenisInformasi; ?><br><?= $dt->Informasi; ?></td>
                          <td><?= $dt->nama_petugas; ?><br><?= date('Y-M-d', strtotime($dt->tanggal)); ?></td>
                          <td><a class="btn btn-primary" href="#navbar-third" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false">
                              <span class="nav-link-title">
                               ACTION
                              </span>
                            </a>
                           <div class="dropdown-menu dropdown-menu-arrow bg-dark text-white" id="navbar-third">
                              <a class="dropdown-item" href="<?= base_url('Fungsi/Edit/'.base64_encode($dt->id_tamu)); ?>">
                                 <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file-plus text-blue" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                                <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z"></path>
                                <path d="M12 11l0 6"></path>
                                <path d="M9 14l6 0"></path>
                            </svg>
                            <span>
                              EDIT
                              </a>
                            <a class="dropdown-item" href="<?= base_url('Fungsi/delate/'.base64_encode($dt->id_tamu));?>">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file-x text-red" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                             <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                             <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                             <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z"></path>
                             <path d="M10 12l4 4m0 -4l-4 4"></path>
                             </svg>
                             HAPUS
                            </a>
                           </div>
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
              </div>
            </div>
          </div>
        </div>
         <div class="modal modal-blur fade" id="modal-small" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <div class="modal-title">action?</div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-link link-secondary me-auto" data-bs-dismiss="modal">batal</button>
            <?= anchor('Fungsi/Edit/'.$dt->id_tamu, '<button type="button" class="btn btn-primary" data-bs-dismiss="modal">edit data ini</button>'); ?>
            <?= anchor('Fungsi/hapus/'.$dt->id_tamu, '<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Ya, hapus data ini</button>'); ?>
            
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
            <?= anchor('Petugas/hapus_petugas/'.$dt->id_petugas, '<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Ya, hapus data ini</button>'); ?>
            
          </div>
        </div>
      </div>
    </div>