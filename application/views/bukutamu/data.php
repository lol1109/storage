      <div class="page-wrapper">
        <!-- Page body -->
        <div class="page-body">
          <div class="container-xl d-flex flex-column justify-content-center">
            <div class="row row-cards">
                  <div class="col-sm-6 col-lg-3">
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
                              12 waiting payments
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-lg-3">
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
                              Total Bulan Ini
                            </div>
                            <div class="text-muted">
                                <?= $hasil2; ?>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-lg-3">
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
                  <div class="col-sm-6 col-lg-3">
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
            <div class="row g-2 align-items-center">
            </div>
          <br>
            <div class="col-12">
              <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Daftar Tamu</h3>
                  </div>
                  <!-- <div class="card-body border-bottom py-3">
                     <div class="input-icon">
                      <form action="<?= base_url('index.php/Fungsi/cari') ?>" method="get" autocomplete="off">
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
                          <th>Name</th>
                          <th>Kontak</th>
                          <th>No Wa</th>
                          <th>Bidang</th>
                          <th>Tujuan</th>
                          <th>Jenis Informasi</th>
                          <th>Informasi</th>
                          <th>Kesimpulan</th>
                          <th>Tanggal</th>
                          <th class="w-5"></th>
                        </tr>
                        </tr>
                      </thead>
                      <?php
                        $no = 1;
                        foreach ($tamu as $dt) : //dt = datatamu 
                      ?>
                      <tbody>
                        <tr>
                          <td><?= $no; ?></td>
                          <td><?= $dt->Nama; ?></td>
                          <td><?= $dt->Kontak; ?></td>
                          <td><?= $dt->noWa; ?></td>
                          <td><?= $dt->Bidang; ?></td>
                          <td><?= $dt->Tujuan; ?></td>
                          <td><?= $dt->JenisInformasi; ?></td>
                          <td><?= $dt->Informasi; ?></td>
                          <td><?= $dt->Kesimpulan; ?></td>
                          <td><?= date('Y-M-d', strtotime($dt->tanggal)); ?></td>
                          <td>
                            <?= anchor('Fungsi/Edit/'.$dt->id_tamu, 'Edit'); ?> | <?= anchor('Fungsi/hapus/'.$dt->id_tamu, 'Hapus'); ?>
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