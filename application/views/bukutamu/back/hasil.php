      <div class="page-wrapper">
        <!-- Page body -->
        <div class="page-body justify-content-center">
          <div class="container-xl d-flex flex-column justify-content-center ">
            <div class="row">
                <div class="col-md-12">
                <div class="card justify-content-center">
                  <div class="card-header bg-primary text-white">
                    <h3 class="card-title">Tampil Data Akad</h3>
                    <div class="card-actions">
                     <a class="btn btn-success" href="<?= base_url('Akad'); ?>">Kembali</a>
                   </div>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                        <table id="data" class="table card-table table-vcenter text-nowrap datatable ">
                      <thead>
                        <tr>
                          <th><span class="btn btn-primary" onclick="hide()">Hide</span></th>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Tanggal</th>
                          <th>Merek</th>
                          <th>Gambar</th>
                          <th>Klik Hide sebelum melakukan action dibawah ini</th>
                        </tr>
                      </thead>
                      <form id="b1" class="t-show" action="<?= base_url('Fungsi/deleteAll'); ?>" method="post">
                      <tbody>
                        <?php
                        $no = 1;
                        foreach ($akad as $dt) : //dt = datatamu 
                      ?>
                        <tr>
                          <td><input id="b2" type="checkbox" class="form-check-input" name="hapus[]" value="<?= $dt->id; ?>"></td>
                          <td><?= $no; ?></td>
                          <td><?= $dt->Nama; ?></td>
                          <td><?= $dt->tanggal; ?></td>
                          <td><?= $dt->merek; ?></td>
                          <td><img width="50px" height="50px" src="<?= base_url("upload/akad/resize/".$dt->gambar); ?>"></td>
                          <td>
                            <?= anchor('Fungsi/edit_akad/'.base64_encode($dt->id), '<button class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file-plus" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                                <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z"></path>
                                <path d="M12 11l0 6"></path>
                                <path d="M9 14l6 0"></path>
                            </svg>
                            <span>
                              Edit
                            </span>
                          </button>'); ?>
                           <?= anchor('Fungsi/resizeImg1/'.$dt->gambar, '<button class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file-plus" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                                <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z"></path>
                                <path d="M12 11l0 6"></path>
                                <path d="M9 14l6 0"></path>
                            </svg>
                            <span>
                              Resize
                            </span>
                          </button>'); ?> <?= anchor('Fungsi/hapus_akad/'.$dt->id,
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
                        <?php $no++; ?>
                    <?php endforeach; ?>
                          <tr>
                            <td>
                              <input id="b3" class="btn btn-danger" type="submit" name="kirim" value="hapus">
                            </td>
                          </tr>
                      </tbody>
                    </form> 
                    </table>
                  </div>
                  </div>
                </div>
                </div>
              </div>
            </div>
          </div>
      </div>
<script type="text/javascript">
  function hide(){
    var elements = document.getElementsByTagName("form");
    while (elements.length > 0) {
    elements[0].parentNode.removeChild(elements[0]);
    }

    var elements1 = document.getElementsByTagName("input");
    while (elements1.length > 0) {
    elements1[0].parentNode.removeChild(elements1[0]);
    }
    document.getElementById('b3').style.display = "none";
  }
</script>