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
                     <!-- <button class="btn btn-success" onclick="window.print()">Print this page</button> -->
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
 	<?php $this->load->view('bukutamu/side/footer.php'); ?>