      <div class="page-wrapper">
        <!-- Page body -->
        <div class="page-body justify-content-center">
          <div class="container-xl d-flex flex-column justify-content-center ">
            <div class="row">
                <div class="col-md-12">
                <div class="card justify-content-center">
                  <div class="card-header bg-primary text-white">
                    <h3 class="card-title">Tampil Data Home</h3>
                    <div class="card-actions">
                     <a class="btn btn-success" href="<?= base_url('Persyaratan'); ?>">Kembali</a>
                   </div>
                  </div>
                  <div class="card-body">
                  	<div class="table-responsive">
                        <table id="data" class="table card-table table-vcenter text-nowrap datatable ">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Judul</th>
                          <th>deskripsi</th>
                          <th>Image</th>
                          <th></th>
                        </tr>
                      </thead>
                      <?php
                        $no = 1;
                        foreach ($syarat as $dt) : //dt = datatamu 
                      ?>
                      <tbody>
                        <tr>
                          <td><?= $no; ?></td>
                          <td><?= $dt->judul_besar; ?></td>
                          <td><?= $dt->desc; ?></td>
                          <!-- <td><?= $dt->image; ?></td> -->
                          <td><img width="50px" height="50px" src="<?= base_url("upload/syarat/".$dt->image); ?>"></td>
                          <td>
                            <?= anchor('Fungsi/edit_syarat/'.base64_encode($dt->id), '<button class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file-plus" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                                <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z"></path>
                                <path d="M12 11l0 6"></path>
                                <path d="M9 14l6 0"></path>
                            </svg>
                            <span>
                              Edit
                            </span>
                          </button>'); ?> <?= anchor('Fungsi/hapus_syarat/'.$dt->id,
                                             '<button class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file-x " width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                              <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                                              <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z"></path>
                                              <path d="M10 12l4 4m0 -4l-4 4"></path>
                                              </svg>
                                              <span>
                                                Hapus
                                              </span>
                                            </button>'); ?>
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
      </div>