      <div class="page-wrapper">
        <!-- Page body -->
        <div class="page-body justify-content-center">
          <div class="container-xl d-flex flex-column justify-content-center ">
            <div class="row">
                <div class="col-md-12">
                  <div class="card">
                  <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs" data-bs-toggle="tabs" role="tablist">
                      <li class="nav-item" role="presentation">
                        <a href="#tabs-1" class="nav-link active" data-bs-toggle="tab" aria-selected="false" tabindex="-1" role="tab">Akad</a>
                      </li>
                      <li class="nav-item" role="presentation">
                        <a href="#tabs-2" class="nav-link" data-bs-toggle="tab" aria-selected="false" tabindex="-1" role="tab">Syarat</a>
                      </li>
                      <li class="nav-item" role="presentation">
                        <a href="#tabs-3" class="nav-link " data-bs-toggle="tab" aria-selected="true" role="tab">Home</a>
                      </li>
                       <li class="nav-item" role="presentation">
                        <a href="#tabs-4" class="nav-link" data-bs-toggle="tab" aria-selected="false" tabindex="-1" role="tab">Tahapan</a>
                      </li>
                       <li class="nav-item" role="presentation">
                        <a href="#tabs-5" class="nav-link" data-bs-toggle="tab" aria-selected="false" tabindex="-1" role="tab">Tanya</a>
                      </li>
                      <li class="nav-item ms-auto">
                        <a href="<?= base_url('akad/tambah') ?>" class="nav-link" title="tambah akad"><!-- Download SVG icon from http://tabler-icons.io/i/settings -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-clipboard-plus" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                              <path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2"></path>
                              <path d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z"></path>
                              <path d="M10 14h4"></path>
                             <path d="M12 12v4"></path>
                          </svg>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a id="delete" class="nav-link" title="Hapus Akad">
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file-x text-red" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                             <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                             <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                             <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z"></path>
                             <path d="M10 12l4 4m0 -4l-4 4"></path>
                             </svg>
                        </a>
                      </li>
                    </ul>
                  </div>
                  <div class="card-body">
                    <div class="tab-content">
                      <div class="tab-pane active show" id="tabs-1" role="tabpanel">
                        <div>
                          <div class="table-responsive">
                         <form id="deleteAll" action="<?= base_url('Fungsi/deleteAll'); ?>" method="post">
                        <table id="data" class="table card-table table-vcenter text-nowrap datatable ">
                      <thead>
                        <tr>
                          <th><input type="checkbox" class="form-check-input" id="check-all"></th>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Tanggal</th>
                          <th>Merek</th>
                          <th>Gambar</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      
                      <tbody>
                        <?php
                        $no = 1;
                        foreach ($akad as $dt) : //dt = datatamu 
                      ?>
                        <tr>
                          <td style="width: 10px;"><input type="checkbox" class="check-item form-check-input " name="hapus[]" value="<?= $dt->id; ?>"></td>
                          <td><?= $no; ?></td>
                          <td><?= $dt->Nama; ?></td>
                          <td><?= $dt->tanggal; ?></td>
                          <td><?= $dt->merek; ?></td>
                          <td><img id="dis-img" class="img" value="<?= base_url("upload/akad/resize/".$dt->gambar); ?>" width="50px" height="50px" src="<?= base_url("upload/akad/resize/".$dt->gambar); ?>"></td>
                          <td><a class="btn btn-primary" href="#navbar-third" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false">
                              <span class="nav-link-title">
                               ACTION
                              </span>
                            </a>
                           <div class="dropdown-menu dropdown-menu-arrow bg-dark text-white" id="navbar-third">
                              <a class="dropdown-item" href="<?= base_url('Fungsi/edit_akad/'.base64_encode($dt->id)); ?>">
                                 <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file-plus text-blue" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                                <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z"></path>
                                <path d="M12 11l0 6"></path>
                                <path d="M9 14l6 0"></path>
                            </svg>
                            <span>
                              Edit
                              </a>
                               <a class="dropdown-item" href="<?= base_url('Fungsi/resizeImg1/'.$dt->gambar); ?>">
                                 <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file-plus text-blue" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                                <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z"></path>
                                <path d="M12 11l0 6"></path>
                                <path d="M9 14l6 0"></path>
                            </svg>
                            <span>
                              Resize
                              </a>
                            <a class="dropdown-item" href="<?= base_url('Fungsi/hapus_akad/'.$dt->id);?>">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file-x text-red" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                             <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                             <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                             <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z"></path>
                             <path d="M10 12l4 4m0 -4l-4 4"></path>
                             </svg>
                             Hapus
                            </a>
                           </div>
                          </td>
                        </tr> 
                        <?php $no++; ?>
                    <?php endforeach; ?>
                      </tbody>
                    </table>
                  </form> 
                  </div>
                        </div>
                      </div>
                      <div class="tab-pane" id="tabs-2" role="tabpanel">
                        <div>
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
                      <div class="tab-pane" id="tabs-3" role="tabpanel">
                        <div>
                          <div class="table-responsive">
                        <table id="data" class="table card-table table-vcenter text-nowrap datatable ">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Judul</th>
                          <th>deskripsi</th>
                          <th>action</th>
                          <th>Image</th>
                          <th></th>
                        </tr>
                      </thead>
                      <?php
                        $no = 1;
                        foreach ($home as $dt) : //dt = datatamu 
                      ?>
                      <tbody>
                        <tr>
                          <td><?= $no; ?></td>
                          <td><?= $dt->judul_besar; ?></td>
                          <td><?= $dt->desc; ?></td>
                          <td><?= $dt->action; ?></td>
                          <!-- <td><?= $dt->image; ?></td> -->
                          <td><img width="50px" height="50px" src="<?= base_url("upload/home/".$dt->image); ?>"></td>
                          <td>
                            <?= anchor('Fungsi/edit_home/'.base64_encode($dt->id), '<button class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file-plus" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
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
                      <div class="tab-pane" id="tabs-4" role="tabpanel">
                        <div>
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
                        foreach ($tahapan as $dt) : //dt = datatamu 
                      ?>
                      <tbody>
                        <tr>
                          <td><?= $no; ?></td>
                          <td><?= $dt->judul; ?></td>
                          <td><?= $dt->desc; ?></td>
                          <td><img width="50px" height="50px" src="<?= base_url("upload/icon/".$dt->icon); ?>"></td>
                          <td>
                            <?= anchor('Fungsi/edit_tahapan/'.base64_encode($dt->id), '<button class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file-plus" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
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
                           <?= anchor('Fungsi/resizeImg/'.$dt->icon, '<button class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file-plus" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                                <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z"></path>
                                <path d="M12 11l0 6"></path>
                                <path d="M9 14l6 0"></path>
                            </svg>
                            <span>
                              Resize
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
                      </div><div class="tab-pane" id="tabs-5" role="tabpanel">
                        <div>
                          <div class="table-responsive">
                        <table id="data" class="table card-table table-vcenter text-nowrap datatable ">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Judul</th>
                          <th>Button</th>
                          <th></th>
                        </tr>
                      </thead>
                      <?php
                        $no = 1;
                        foreach ($tanya as $dt) : //dt = datatamu 
                      ?>
                      <tbody>
                        <tr>
                          <td><?= $no; ?></td>
                          <td><?= $dt->judul; ?></td>
                          <td><?= $dt->button; ?></td>
                          <td>
                            <?= anchor('Fungsi/edit_tanya/'.base64_encode($dt->id), '<button class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file-plus" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
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
            </div>
          </div>
      </div>
      <style type="text/css">
        .mg {
          position: absolute;
          width: 100%;
          height: 100%;
        }

        .gm {
          width: 512px;
          height: 512px;
        }

        .close {
          display: absolute;
          color: black;
          font-size: 50px;
          left: 10px;
        }
      </style>
      <div id="display" class="mg" style="display: none;">
        <div id="close" class="row" style="height: 100%;">
          <div class="col-md-2"></div>
          <div class="col-md-8" style="display: flex; justify-content: center; align-items: center;">
            <img id="img1" class="gm">
          </div>
        </div>
      </div>
      <script type="text/javascript">

         $(document).ready(function(){ // Ketika halaman sudah siap (sudah selesai di load)
    $("#check-all").click(function(){ // Ketika user men-cek checkbox all
      if($(this).is(":checked")) // Jika checkbox all diceklis
        $(".check-item").prop("checked", true); // ceklis semua checkbox siswa dengan class "check-item"
      else // Jika checkbox all tidak diceklis
        $(".check-item").prop("checked", false); // un-ceklis semua checkbox siswa dengan class "check-item"
    });

    $(".img").click(function(){
      var img = $(".img").attr('value');
      var modal = document.getElementById('display');
      modal.style.display = "block";
      document.getElementById('img1').src = img;
    });

    $("#close").click(function(){
      var modal = document.getElementById('display');
      modal.style.display = "none";
    });
    
    $("#delete").click(function(){ // Ketika user mengklik tombol delete
      if ($(".check-item").is(":checked")) {
        var confirm = window.confirm("Apakah Anda yakin ingin menghapus data-data ini?"); // Buat sebuah alert konfirmasi
      
      if(confirm) // Jika user mengklik tombol "Ok"
        $("#deleteAll").submit(); // Submit form
      } else {
        window.alert("centang data yang ingin dipilih terlebih dahulu!");
      }
    });
  });
      </script>