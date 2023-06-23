<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Elang Motor Pekanbaru</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url('source/public/assets/img/itme/icon.png'); ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('source/public/assets/img/item/icon.png'); ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('source/public/assets/img/item/icon.png'); ?>">
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('source/public/assets/img/item/icon.png'); ?>">
    <link rel="manifest" href="<?= base_url('source/public/assets/img/item/icon.png'); ?>">
    <meta name="msapplication-TileImage" content="<?= base_url('source/public/assets/img/item/icon.png'); ?>">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="<?= base_url('source/public/assets/css/theme.css'); ?>" rel="stylesheet" />

  </head>


  <body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <nav class="navbar navbar-expand-lg navbar-light fixed-top py-5 d-block" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container"><a class="navbar-brand" href="index.html"><img  src="<?= base_url('source/public/assets/img/item/logo.png'); ?>" height="50" alt="logo" /></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"> </span></button>
          <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto pt-2 pt-lg-0 font-base align-items-lg-center align-items-start">
              <li class="nav-item px-3 px-xl-4"><a class="nav-link fw-medium" aria-current="page" href="#service">Tahapan</a></li>
              <li class="nav-item px-3 px-xl-4"><a class="nav-link fw-medium" aria-current="page" href="#destination">Akad</a></li>
              <li class="nav-item px-3 px-xl-4"><a class="nav-link fw-medium" aria-current="page" href="#booking">Persayratan</a></li>
              <li class="nav-item px-3 px-xl-4"><a class="nav-link fw-medium" aria-current="page" href="#testimonial">Testimoni</a></li>
          <!--<li class="nav-item px-3 px-xl-4"><a class="nav-link fw-medium" aria-current="page" href="#!">Login</a></li>
              <li class="nav-item px-3 px-xl-4"><a class="btn btn-outline-dark order-1 order-lg-0 fw-medium" href="#!">Sign Up</a></li>
              <li class="nav-item dropdown px-3 px-lg-0"> <a class="d-inline-block ps-0 py-2 pe-3 text-decoration-none dropdown-toggle fw-medium" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">EN</a>
                <ul class="dropdown-menu dropdown-menu-end border-0 shadow-lg" style="border-radius:0.3rem;" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#!">EN</a></li>
                  <li><a class="dropdown-item" href="#!">BN</a></li>
                </ul>
              </li> -->
            </ul>
          </div>
        </div>
      </nav>
      <section style="padding-top: 7rem;">
        <div class="bg-holder" style="background-image:url(<?= base_url('source/public/assets/css/theme.css'); ?>);">
        </div>
        <!--/.bg-holder-->
        <?php foreach($home as $dt) : ?>
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-5 col-lg-6 order-0 order-md-1 text-end"><img style="border-radius: 15px;" class="pt-7 pt-md-0 hero-img" src="<?= base_url('upload/home/'.$dt->image); ?>" alt="hero-header" /></div>
            <div class="col-md-7 col-lg-6 text-md-start text-center py-6">
              <h4 class="fw-bold text-danger mb-3">Elang Motor</h4>
              <h1 class="hero-title"><?= $dt->judul_besar ?></h1>
              <p class="mb-4 fw-medium"> <?= $dt->desc ?> </p>
              <div class="text-center text-md-start"> <a class="btn btn-primary btn-lg me-md-4 mb-3 mb-md-0 border-0 primary-btn-shadow" href="#!" role="button"><?= $dt->action ?></a>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
      </section>


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="pt-5 pt-md-9" id="service">

        <div class="container">
          <div class="position-absolute z-index--1 end-0 d-none d-lg-block"><img src="<?= base_url('source/public/assets/img/category/shape.svg'); ?>" style="max-width: 200px" alt="service" /></div>
          <div class="mb-7 text-center">
            <h5 class="text-secondary"> TAHAPAN </h5>
            <h3 class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive text-capitalize">Kenapa Memilih Kami?</h3>
          </div>
          <div class="row">
            <div class="col-lg-3 col-sm-6 mb-6">
              <div class="card service-card shadow-hover rounded-3 text-center align-items-center">
                <div class="card-body p-xxl-5 p-4"> <img src="<?= base_url('source/public/assets/img/item/jualbeli.png'); ?>" width="75" alt="Service" />
                  <h4 class="mb-3">Akad</h4>
                  <p class="mb-0 fw-medium">Melakukan Akad saat Transaksi Jual Beli.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 mb-6">
              <div class="card service-card shadow-hover rounded-3 text-center align-items-center">
                <div class="card-body p-xxl-5 p-4"> <img src="<?= base_url('source/public/assets/img/item/asuransi.png'); ?>" width="75" alt="Service" />
                  <h4 class="mb-3">Tanpa Asuransi</h4>
                  <p class="mb-0 fw-medium">Tanpa Asuransi apapun.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 mb-6">
              <div class="card service-card shadow-hover rounded-3 text-center align-items-center">
                <div class="card-body p-xxl-5 p-4"> <img src="<?= base_url('source/public/assets/img/item/denda.png'); ?>" width="75" alt="Service" />
                  <h4 class="mb-3">Tanpa Denda</h4>
                  <p class="mb-0 fw-medium">Tanpa denda.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 mb-6">
              <div class="card service-card shadow-hover rounded-3 text-center align-items-center">
                <div class="card-body p-xxl-5 p-4"> <img src="<?= base_url('source/public/assets/img/item/bunga.png'); ?>" width="75" alt="Service" />
                  <h4 class="mb-3">Tanpa Bunga</h4>
                  <p class="mb-0 fw-medium">Tanpa Bunga</p>
                </div>
              </div>
            </div>
          </div>
        </div><!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="pt-5" id="destination">

        <div class="container">
          <div class="position-absolute start-100 bottom-0 translate-middle-x d-none d-xl-block ms-xl-n4"><img src="<?= base_url('source/public/assets/img/dest/shape.svg'); ?>" alt="destination" /></div>
          <div class="mb-7 text-center">
            <h5 class="text-secondary">AKAD </h5>
            <h3 class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive text-capitalize">Mereka Yang Akad</h3>
          </div>
          <style type="text/css">
            .scrollmenu{
              overflow: auto;
              white-space: nowrap;
            }

            .items{
              display: inline-block;
              margin-right: 25px;
            }
          </style>
          <div class="scrollmenu">
            <!-- mengulang div -->
            <?php foreach($akad as $dt) : ?>
            <div class="col-md-5 mb-5 items">
              <div class="card overflow-hidden shadow"> <img class="card-img-top" src="<?= base_url("upload/akad/".$dt->gambar); ?>" alt="gambar" />
                <div class="card-body py-4 px-3">
                  <div class="d-flex flex-column flex-lg-row justify-content-between mb-3">
                    <h4 class="text-secondary fw-medium"><a class="link-900 text-decoration-none stretched-link" href="#!"><?= $cabang ?></a></h4><span class="fs-1 fw-medium"><?= $dt->merek; ?></span>
                  </div>
                  <div class="d-flex align-items-center"> <img src="<?= base_url('source/public/assets/img/dest/navigation.svg'); ?>" style="margin-right: 14px" width="20" alt="navigation" /><span class="fs-0 fw-medium"><?= $dt->tanggal; ?></span></div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
          </div>
        </div><!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section id="booking">
        <?php foreach($syarat as $dt) : ?>
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6">
              <div class="mb-4 text-start">
                <h5 class="text-secondary">Persyaratan</h5>
                <h3 class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive text-capitalize"><?= $dt->judul_besar ?></h3>
              </div>
              <div class="d-flex align-items-start mb-5">
                <div class="flex-1">
                  <p><?= $dt->desc ?></p>
                </div>
              </div>
            </div>
            <div class="col-lg-6 d-flex justify-content-center align-items-start">
              <div class="card position-relative shadow" style="max-width: 370px;">
                <div class="position-absolute z-index--1 me-10 me-xxl-0" style="right:-60px;top:-210px;"> <img src="<?= base_url('source/public/assets/img/steps/bg.png'); ?>" style="max-width:550px;" alt="shape" /></div>
                <div class="card-body p-3"> <img class="mb-4 mt-2 rounded-2" id="syarat" src="<?= base_url('upload/syarat/'.$dt->image) ?>" alt="booking" />
                </div>
              </div>
            </div>
          </div>
        </div><!-- end of .container-->
      <?php endforeach; ?>

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section id="testimonial">

        <div class="container">
          <div class="row">
            <div class="col-lg-5">
              <div class="mb-8 text-start">
                <h5 class="text-secondary">Testimoni</h5>
                <h3 class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive text-capitalize">Apa Kata Mereka?</h3>
              </div>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-6">
              <div class="pe-7 ps-5 ps-lg-0">
                <div class="carousel slide carousel-fade position-static" id="testimonialIndicator" data-bs-ride="carousel">
                  <div class="carousel-indicators">
                    <button class="active" type="button" data-bs-target="#testimonialIndicator" data-bs-slide-to="0" aria-current="true" aria-label="Testimonial 0"></button>
                    <button class="false" type="button" data-bs-target="#testimonialIndicator" data-bs-slide-to="1" aria-current="true" aria-label="Testimonial 1"></button>
                    <button class="false" type="button" data-bs-target="#testimonialIndicator" data-bs-slide-to="2" aria-current="true" aria-label="Testimonial 2"></button>
                  </div>
                  <div class="carousel-inner">
                    <!-- satu -->
                    <div class="carousel-item position-relative active">
                      <div class="card shadow" style="border-radius:10px;">
                        <div class="position-absolute start-0 top-0 translate-middle"> <img class="rounded-circle fit-cover" alt="foto client" src="<?= base_url('source/public/assets/img/testimonial/author.png'); ?>" height="65" width="65" alt="" /></div>
                        <div class="card-body p-4">
                          <p class="fw-medium mb-4">&quot;Bagus.&quot;</p>
                          <h5 class="text-secondary" ><h5 id="nama1"></h5></h5>
                          <p class="fw-medium fs--1 mb-0">Pekanbaru</p>
                        </div>
                      </div>
                      <div class="card shadow-sm position-absolute top-0 z-index--1 mb-3 w-100 h-100" style="border-radius:10px;transform:translate(25px, 25px)"> </div>
                    </div>

                    <!-- dua -->
                    <div class="carousel-item position-relative">
                      <div class="card shadow" style="border-radius:10px;">
                        <div class="position-absolute start-0 top-0 translate-middle"> <img class="rounded-circle fit-cover" alt="foto client" src="<?= base_url('source/public/assets/img/testimonial/author.png'); ?>" height="65" width="65" alt="" /></div>
                        <div class="card-body p-4">
                          <p class="fw-medium mb-4">&quot;qutes.&quot;</p>
                          <h5 class="text-secondary" id="nama2"></h5>
                          <p class="fw-medium fs--1 mb-0">Location</p>
                        </div>
                      </div>
                      <div class="card shadow-sm position-absolute top-0 z-index--1 mb-3 w-100 h-100" style="border-radius:10px;transform:translate(25px, 25px)"> </div>
                    </div>

                      <!-- tiga -->
                    <div class="carousel-item position-relative">
                      <div class="card shadow" style="border-radius:10px;">
                        <div class="position-absolute start-0 top-0 translate-middle"> <img class="rounded-circle fit-cover" alt="foto client" src="<?= base_url('source/public/assets/img/testimonial/author.png'); ?>" height="65" width="65" alt="" /></div>
                        <div class="card-body p-4">
                          <p class="fw-medium mb-4">&quot;qutes.&quot;</p>
                          <h5 class="text-secondary" id="nama3"></h5>
                          <p class="fw-medium fs--1 mb-0">Location</p>
                        </div>
                      </div>
                      <div class="card shadow-sm position-absolute top-0 z-index--1 mb-3 w-100 h-100" style="border-radius:10px;transform:translate(25px, 25px)"> </div>
                    </div>
                   
                  <div class="carousel-navigation d-flex flex-column flex-between-center position-absolute end-0 top-lg-50 bottom-0 translate-middle-y z-index-1 me-3 me-lg-0" style="height:60px;width:20px;">
                    <button class="carousel-control-prev position-static" type="button" data-bs-target="#testimonialIndicator" data-bs-slide="prev"><img src="<?= base_url('source/public/assets/img/icons/up.svg'); ?>" width="16" alt="icon" /></button>
                    <button class="carousel-control-next position-static" type="button" data-bs-target="#testimonialIndicator" data-bs-slide="next"><img src="<?= base_url('source/public/assets/img/icons/down.svg'); ?>" width="16" alt="icon" /></button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->


      <div class="position-relative pt-9 pt-lg-8 pb-6 pb-lg-8">
        <div class="container">
          <div class="row row-cols-lg-5 row-cols-md-3 row-cols-2 flex-center">
           <!--  <div class="col">
              <div class="card shadow-hover mb-4" style="border-radius:10px;">
                <div class="card-body text-center"> <img src="<?= base_url('source/public/assets/img/item/logo-putih.png'); ?>" alt="" /></div>
              </div>
            </div> -->
            <div class="col">
              <div class="card shadow-hover mb-4" style="border-radius:10px;">
                <div class="card-body text-center"> <img class="img-fluid" src="<?= base_url('source/public/assets/img/item/logo.png'); ?>" alt="" /></div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="pt-6">

        <div class="container">
          <div class="py-8 px-5 position-relative text-center" style="background-color: rgba(223, 215, 249, 0.199);border-radius: 129px 20px 20px 20px;">
            <div class="position-absolute start-100 top-0 translate-middle ms-md-n3 ms-n4 mt-3"> <img src="<?= base_url('source/public/assets/img/cta/send.png'); ?>" style="max-width:70px;" alt="send icon" /></div>
            <div class="position-absolute end-0 top-0 z-index--1"> <img src="<?= base_url('source/public/assets/img/cta/shape-bg2.png'); ?>" width="264" alt="cta shape" /></div>
            <div class="position-absolute start-0 bottom-0 ms-3 z-index--1 d-none d-sm-block"> <img src="<?= base_url('source/public/assets/img/cta/shape-bg1.png'); ?>" style="max-width: 340px;" alt="cta shape" /></div>
            <div class="row justify-content-center">
              <div class="col-lg-8 col-md-10">
                <h2 class="text-secondary lh-1-7 mb-7">Butuh Informasi Lebih Lanjut? Tentang Beli Motor Tanpa Riba</h2>
                  <div class="col-sm-auto">
                    <button class="btn btn-success grenn-gradient-btn fs--1">Hubungi Kami</button>
                  </div>
              </div>
            </div>
          </div>
        </div><!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="pb-0 pb-lg-4 bg-dark">

        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-7 col-12 mb-4 mb-md-6 mb-lg-0 order-0"> <img class="mb-4" height="40px" width="100%" src="<?= base_url('source/public/assets/img/item/logo-putih.png'); ?>" width="150" alt="jadoo" />
              <p class="fs--1 text-white mb-0 fw-medium">Tempat Kredit Motor Tanpa Riba.</p>
            </div>
            <div class="col-auto col-lg-4 col-md-4 mb-4 mb-lg-0 order-lg-3 order-md-4">
              <h4 class="text-white  fw-bold font-sans-serif mb-3 mb-lg-4">Alamat</h4>
              <ul class="list-unstyled mb-0">
                <li class="mb-2"><p class="text-muted">Cosmo Terrace – Thamrin City Lantai 10<br class="d-none d-sm-block"> No. 1 Jl. K.H. Mas Mansyur, Kec. Tanah Abang, Jakarta Pusat</p></li>
              </ul>
            </div>
            <div class="col-auto col-lg-4 col-md-4 mb-4 mb-lg-0 order-lg-2 order-md-3">
              <h4 class="text-white fw-bold font-sans-serif mb-3 mb-lg-4">Contact</h4>
              <ul class="list-unstyled mb-0 text-white">
                <li class="mb-2"><a class="text-white fs-1 text-decoration-none" href="#!">Help/FAQ</a></li>
                <li class="mb-2"><a class="text-white fs-1 fw-medium text-decoration-none" href="#!">Press</a></li>
                <li class="mb-2"><a class="text-white fs-1 fw-medium text-decoration-none" href="#!">Affiliate</a></li>
              </ul>
            </div>
            
          </div>
        </div><!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->


      <div class="py-5 text-center bg-dark">
        <p class="mb-0 text-white fs--1 fw-medium">All rights reserved@ELang Motor Pekanbaru |©<?= date('Y') ?> </p>
      </div>
    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->
    <!-- ===============================================-->
    <!--    JavaScripts-->
    <script type="text/javascript">
     document.getElementById('nama1').innerHTML = "Fandy";
     document.getElementById('nama2').innerHTML = "afadny";
      document.getElementById('nama3').innerHTML = "afadny";

      function setImg(){
        if (x.matches) {
          document.getElementById('syarat').style.width = "300px";
          document.getElementById('syarat').style.height = "300px";
         
        } else {
          document.getElementById('syarat').style.width = "500px";
          document.getElementById('syarat').style.height = "500px";
         
        }
      }
        var x = window.matchMedia("(max-width: 800px)");
        setImg(x);
        x.addListener(setImg);
      
    </script>
    <!-- ===============================================-->
    <script src="<?= base_url('source/public/vendors/@popperjs/popper.min.js'); ?>"></script>
    <script src="<?= base_url('source/public/vendors/bootstrap/bootstrap.min.js'); ?>"></script>
    <script src="<?= base_url('source/public/vendors/is/is.min.js'); ?>"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="<?= base_url('vendors/fontawesome/all.min.js'); ?>"></script>
    <script src="<?= base_url('source/public/assets/js/theme.js'); ?>"></script>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&amp;family=Volkhov:wght@700&amp;display=swap" rel="stylesheet">
  </body>

</html>