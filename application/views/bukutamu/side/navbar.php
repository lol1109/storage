 <!-- Navbar -->
      <header class="navbar navbar-expand-md navbar-dark d-print-none">
                  <div class="container-xl">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu" aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
                      <a href="<?= base_url('admin') ?>">
                        APLIKASI BUKU TAMU
                      </a>
                    </h1>
                    <div class="navbar-nav flex-row order-md-last">
                      <div class="d-none d-md-flex">
                        <a href="?theme=dark" class="nav-link px-0 hide-theme-dark" data-bs-toggle="tooltip" data-bs-placement="bottom" aria-label="Enable dark mode" data-bs-original-title="Enable dark mode">
                          <!-- Download SVG icon from http://tabler-icons.io/i/moon -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z"></path></svg>
                        </a>
                        <a href="?theme=light" class="nav-link px-0 hide-theme-light" data-bs-toggle="tooltip" data-bs-placement="bottom" aria-label="Enable light mode" data-bs-original-title="Enable light mode">
                          <!-- Download SVG icon from http://tabler-icons.io/i/sun -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"></path><path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7"></path></svg>
                        </a>
                      </div>
                      <div class="nav-item dropdown">
                        <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
                          <span class="avatar avatar-sm" style="background-image: url(<?= base_url('./dist/img/profile/fandy.webp') ?>)"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                          <a class="dropdown-item"><?= $this->input->cookie('user', true); ?></a>
                          <a href="<?= base_url('logout') ?>" class="dropdown-item">Log out</a>
                        </div>
                      </div>
                    </div>
                    <div class="collapse navbar-collapse" id="navbar-menu">
                      <div class="d-flex flex-column flex-md-row flex-fill align-items-stretch align-items-md-center">
                        <ul class="navbar-nav">
                          <li class="nav-item active">
                            <a class="nav-link" href="<?= base_url('admin') ?>" >
                              <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l-2 0l9 -9l9 9l-2 0" /><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" /><path d="M9 21v-6a2 /2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" /></svg>
                              </span>
                              <span class="nav-link-title">
                                Home
                              </span>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('landing-page'); ?>">Landing Page</a>
                          </li>
                          
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#navbar-third" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false">
                              <span class="nav-link-title">
                                Rekap
                              </span>
                            </a>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="<?= base_url('grafik') ?>">
                                grafik
                              </a>
                              <?php if ($this->session->userdata('akses') == "admin") { ?>
                              <a class="dropdown-item" href="<?= base_url('data-cabang') ?>">
                                cabang
                              </a>
                              <a class="dropdown-item" href="<?= base_url('petugas') ?>">
                                petugas
                              </a>
                            </div>
                          </li>
                          <?php } ?>
                        </ul>
                      </div>
                    </div>
                  </div>
                </header>