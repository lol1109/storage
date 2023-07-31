  <?php $this->load->view('bukutamu/side/heading.php'); ?>
  	  <?php $this->load->view('bukutamu/side/navbar.php'); ?>
  	 <div class="page-wrapper">
        <!-- Page body -->
        <div class="page-body">
          <div class="container-xl d-flex flex-column justify-content-center">
            <div class="col-lg-12">
              <div class="card">
                  <div class="card-header bg-primary">
                    <h3 class="card-title">Rekap Data Tamu</h3>
                    <div class="card-actions">
                     <a class="btn btn-success" href="<?= base_url('Tamu'); ?>">Kembali</a>
                     <button type="button" class="btn btn-success" onclick="javascript:window.print();">
                  <!-- Download SVG icon from http://tabler-icons.io/i/printer -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M17 17h2a2 2 0 0 0 2 -2v-4a2 2 0 0 0 -2 -2h-14a2 2 0 0 0 -2 2v4a2 2 0 0 0 2 2h2"></path><path d="M17 9v-4a2 2 0 0 0 -2 -2h-6a2 2 0 0 0 -2 2v4"></path><path d="M7 13m0 2a2 2 0 0 1 2 -2h6a2 2 0 0 1 2 2v4a2 2 0 0 1 -2 2h-6a2 2 0 0 1 -2 -2z"></path></svg>
                  Print 
                </button>
                    </div>
                    </div>
                    <div class="card-body">
                    <div class="row row-deck row-cards"> 
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-body">
                                <div class="d-flex align-items-center">
                                <div class="subheader">Sales</div>
                                <div class="ms-auto lh-1">
                                <div class="dropdown">
                                    <a class="dropdown-toggle text-muted" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <?= $active_m; ?></a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="<?= base_url('Rekap/motor_perminggu') ?>">Last 1 weeks</a>
                                    <a class="dropdown-item" href="<?= base_url('Rekap/motor_perbulan') ?>">Last 1 months</a>
                                    <a class="dropdown-item" href="<?= base_url('Rekap/motor_pertahun') ?>">Last 1 years</a>
                                    <a class="dropdown-item" id="motorAl" href="#" data-bs-toggle="modal" data-bs-target="#modal-team">Costum</a>
                                </div>
                                </div>
                                </div>
                                </div>
                                <div class="h1 mb-3"> <?= $hasil1; ?></div>
                                <div class="d-flex mb-2">
                                <div>Motor</div>
                                <div class="ms-auto">
                                <span class="text-green d-inline-flex align-items-center lh-1">
                                   <?= $hasil1; ?>
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M3 17l6 -6l4 4l8 -8"></path><path d="M14 7l7 0l0 7"></path></svg>
                                </span>
                                </div>
                                </div>
                                <div class="progress progress-sm">
                                <div class="progress-bar bg-primary" style="width:  <?= $hasil1; ?>%" role="progressbar" aria-valuenow=" <?= $hasil1; ?>" aria-valuemin="0" aria-valuemax="100" aria-label="75% Complete">
                                </div>
                                </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-body">
                                <div class="d-flex align-items-center">
                                <div class="subheader">Sales</div>
                                <div class="ms-auto lh-1">
                                <div class="dropdown">
                                    <a class="dropdown-toggle text-muted" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?= $active_p; ?></a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="<?= base_url('Rekap/property_perminggu') ?>">Last 1 weeks</a>
                                    <a class="dropdown-item" href="<?= base_url('Rekap/property_perbulan') ?>">Last 1 months</a>
                                    <a class="dropdown-item" href="<?= base_url('Rekap/property_pertahun') ?>">Last 1 years</a>
                                    <a class="dropdown-item" id="propertyAl" href="#" data-bs-toggle="modal" data-bs-target="#modal-team">Costum</a>
                                </div>
                                </div>
                                </div>
                                </div>
                                <div class="h1 mb-3"> <?= $hasil; ?></div>
                                <div class="d-flex mb-2">
                                <div>Property</div>
                                <div class="ms-auto">
                                <span class="text-green d-inline-flex align-items-center lh-1">
                                   <?= $hasil; ?>
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M3 17l6 -6l4 4l8 -8"></path><path d="M14 7l7 0l0 7"></path></svg>
                                </span>
                                </div>
                                </div>
                                <div class="progress progress-sm">
                                <div class="progress-bar bg-primary" style="width:  <?= $hasil; ?>%" role="progressbar" aria-valuenow=" <?= $hasil; ?>" aria-valuemin="0" aria-valuemax="100" aria-label="75% Complete">
                                </div>
                                </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-body">
                                <div class="d-flex align-items-center">
                                <div class="subheader">Sales</div>
                                <div class="ms-auto lh-1">
                                <div class="dropdown">
                                    <a class="dropdown-toggle text-muted" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?= $active_s; ?></a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="<?= base_url('Rekap/semua_perminggu') ?>">Last 1 weeks</a>
                                    <a class="dropdown-item" href="<?= base_url('Rekap/semua_perbulan') ?>">Last 1 months</a>
                                    <a class="dropdown-item" href="<?= base_url('Rekap/semua_pertahun') ?>">Last 1 years</a>
                                    <a class="dropdown-item" id="semuaAl" href="#" data-bs-toggle="modal" data-bs-target="#modal-team">Costum</a>
                                </div>
                                </div>
                                </div>
                                </div>
                                <div class="h1 mb-3"> <?= $hasil2; ?></div>
                                <div class="d-flex mb-2">
                                <div>Semua</div>
                                <div class="ms-auto">
                                <span class="text-green d-inline-flex align-items-center lh-1">
                                   <?= $hasil2; ?>
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M3 17l6 -6l4 4l8 -8"></path><path d="M14 7l7 0l0 7"></path></svg>
                                </span>
                                </div>
                                </div>
                                <div class="progress progress-sm">
                                <div class="progress-bar bg-primary" style="width:  <?= $hasil2; ?>%" role="progressbar" aria-valuenow=" <?= $hasil2; ?>" aria-valuemin="0" aria-valuemax="100" aria-label="75% Complete">
                                </div>
                                </div>
                                </div>
                            </div>
                        </div>
                        <!-- grafik sumber informasi terbanyak -->
                <div class="row g-1">
                    <div class="col-sm-12">
                        <div class="bg-light text-center rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Sumber Informasi</h6>
                                <a href="">Show All</a>
                            </div>
                            <canvas id="chinfor"></canvas>
                        </div>
                    </div>
                    <?php if ($akses == "admin") { ?>
                        
                     <div class="col-sm-12">
                        <div class="bg-light text-center rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Data Cabang</h6>
                                <a href="">Show All</a>
                            </div>
                            <canvas id="cbgtb"></canvas>
                        </div>
                    </div>

                    <?php } ?>

                </div>
              </div>
            </div>
            </div>
        </div>
    </div>
</div>
</div>
<script type="text/javascript">
    var ctx = document.getElementById('chinfor').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'bar',
        // The data for our dataset
        data: {
            labels: [<?php  
                foreach ($tamu as $dt) {
                    echo "'".$dt->Informasi."', ";
                    }
                 ?>],
            datasets: [{
                label:'Sumber Informasi ',
                backgroundColor: [
                    'rgb(255, 99, 132)',  //postingan instagram
                    'rgba(55, 119, 255)',  //Iklan facebook
                    'rgb(60, 179, 113)',  //Iklan instagram
                    'rgb(175, 238, 239)',  //Iklan google
                    'rgb(255, 225, 86)', //pencarian google
                    'rgb(255, 223, 206)', //website
                    'rgb(255, 181, 194)', //brosur
                    'rgb(50, 2, 31)', //marketing freelance
                    'rgb(75, 46, 57)', //youtube
                    'rgb(108, 89, 110)', //teman kantor
                    'rgb(111, 125, 140)', //teman kajian
                    'rgb(119, 160, 169)', //teman suami
                    'rgb(171, 23, 83)', //teman istri 
                    'rgb(83, 89, 154)', //Keluagra/saudara
                    'rgb(6, 141, 157)', //grup wa
                    'rgb(16, 150, 72)', //wa
                    'rgb(73, 67, 72)', //teman konsumen elang
                    ],
                borderColor: [
                    'rgb(44, 51, 51)'
                    ],
                data: [<?php  
                    foreach ($tamu as $dt) {
                    echo $dt->total.", ";
                    }
                    ?>]
            }]
        },
        // Configuration options go here
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });
      <?php if ($akses == "admin") { ?>
    var ctx = document.getElementById('cbgtb').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'bar',
        // The data for our dataset
        data: {
            labels: [<?php  
                foreach ($cabang as $dt) {
                    echo "'".$dt->nama_cabang."', ";
                    }
                 ?>],
            datasets: [{
                label:'Total penjualan',
                backgroundColor: [
                    'rgb(255, 99, 132)',  //postingan instagram
                    'rgba(55, 119, 255)',  //Iklan facebook
                    'rgb(60, 179, 113)',  //Iklan instagram
                    'rgb(175, 238, 239)',  //Iklan google
                    'rgb(255, 225, 86)', //pencarian google
                    'rgb(255, 223, 206)', //website
                    'rgb(255, 181, 194)', //brosur
                    'rgb(50, 2, 31)', //marketing freelance
                    'rgb(75, 46, 57)', //youtube
                    'rgb(108, 89, 110)', //teman kantor
                    'rgb(111, 125, 140)', //teman kajian
                    'rgb(119, 160, 169)', //teman suami
                    'rgb(171, 23, 83)', //teman istri 
                    'rgb(83, 89, 154)', //Keluagra/saudara
                    'rgb(6, 141, 157)', //grup wa
                    'rgb(16, 150, 72)', //wa
                    'rgb(73, 67, 72)', //teman konsumen elang
                    ],
                borderColor: [
                    'rgb(44, 51, 51)'
                    ],
                data: [<?php  
                    foreach ($cabang as $dt) {
                    echo $dt->total.", ";
                    }
                    ?>]
            }]
        },
        // Configuration options go here
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });
<?php } ?>
</script>
<style type="text/css">
    .hide {
        display: none;
    }
</style>
 	<?php $this->load->view('bukutamu/side/footer.php'); ?>
    <div class="modal modal-blur fade" id="modal-team" tabindex="-1" style="display: none;" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">

        <!-- Motor -->
        <div id="modal1" class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Cari Data Penjualan</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form id="cariMotor" method="post" action="<?= base_url('Rekap/motor_ALL'); ?>" role="form">
              <div class="row">
                <div class="col-md-12">
                  <input type="hidden" id="id" name="id"> 
                  <div class="mb-12">
                    <label class="form-label">Tanggal Awal</label>
                    <input type="date" class="form-control" id="tanggal1" name="tanggal1">
                  </div>
                  <div class="mb-12">
                    <label class="form-label">Tanggal Akhir</label>
                    <input type="date" class="form-control" id="tanggal2" name="tanggal2">
                  </div>
                </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn me-auto" data-bs-dismiss="modal">Batal</button>
            <button type="button" id="cari1" class="btn btn-primary" data-bs-dismiss="modal">cari</button>
          </div>
          </div>

          <!-- property -->
        <div id="modal2" class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Cari Data Penjualan</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form id="cariProperty" method="post" action="<?= base_url('Rekap/property_ALL'); ?>" role="form">
              <div class="row">
                <div class="col-md-12">
                  <input type="hidden" id="id" name="id"> 
                  <div class="mb-12">
                    <label class="form-label">Tanggal Awal</label>
                    <input type="date" class="form-control" id="tanggal1" name="tanggal1">
                  </div>
                  <div class="mb-12">
                    <label class="form-label">Tanggal Akhir</label>
                    <input type="date" class="form-control" id="tanggal2" name="tanggal2">
                  </div>
                </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn me-auto" data-bs-dismiss="modal">Batal</button>
            <button type="button" id="cari2" class="btn btn-primary" data-bs-dismiss="modal">cari</button>
          </div>
          </div>

          <!-- Semua -->
        <div id="modal3" class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Cari Data Penjualan</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form id="cariSemua" method="post" action="<?= base_url('Rekap/semua_All'); ?>" role="form">
              <div class="row">
                <div class="col-md-12">
                  <input type="hidden" id="id" name="id"> 
                  <div class="mb-12">
                    <label class="form-label">Tanggal Awal</label>
                    <input type="date" class="form-control" id="tanggal1" name="tanggal1">
                  </div>
                  <div class="mb-12">
                    <label class="form-label">Tanggal Akhir</label>
                    <input type="date" class="form-control" id="tanggal2" name="tanggal2">
                  </div>
                </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn me-auto" data-bs-dismiss="modal">Batal</button>
            <button type="button" id="cari3" class="btn btn-primary" data-bs-dismiss="modal">cari</button>
          </div>
          </div>


          <script type="text/javascript">
            var modal1 = document.getElementById('modal1');
            var modal2 = document.getElementById('modal2'); 
            var modal3 = document.getElementById('modal3');
            $("#motorAl").click(function(){
                modal1.classList.remove('hide');
                modal2.classList.add('hide');
                modal3.classList.add('hide');
            });
            $("#propertyAl").click(function(){
                modal2.classList.remove('hide');
                modal1.classList.add('hide');
                modal3.classList.add('hide');
            });
             $("#semuaAl").click(function(){
                modal3.classList.remove('hide');
                modal1.classList.add('hide');
                modal2.classList.add('hide');
            });
            $("#cari1").click(function(){ // Ketika user mengklik tombol delete
                $("#cariMotor").submit(); // Submit form
            });
             $("#cari2").click(function(){ // Ketika user mengklik tombol delete
                $("#cariProperty").submit(); // Submit form
            });
            $("#cari3").click(function(){ // Ketika user mengklik tombol delete
                $("#cariSemua").submit(); // Submit form
            });

            $("#motorAl").submit(function(event){
                  event.preventDefault();
            })
          </script>