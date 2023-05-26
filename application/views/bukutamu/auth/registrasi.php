  <?php $this->load->view('bukutamu/side/heading.php'); ?>
    <div class="page page-center">
      <div class="container container-tight py-4">
        <div class="text-center mb-4">
        </div>
        <form action="<?= base_url('Auth/registrasi_akun') ?>" class="card card-md" method="post" autocomplete="off" validate>
          <div class="card-body">
            <h2 class="card-title text-center mb-4">Create new account</h2>

            <div class="mb-3">
                <label class="form-label">Email Adress</label>
                <input type="text" class="form-control <?= form_error('email') ? 'invalid' : '' ?>" name="email" id="email" placeholder="your" value="<?= set_value('email') ?>">
                <div class="text-red"><?= form_error('email'); ?></div>
              </div>

             <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" class="form-control <?= form_error('username') ? 'invalid' : '' ?>" name="username" id="username" placeholder="your" value="<?= set_value('username') ?>">
                <div class="text-red"><?= form_error('username'); ?></div>
              </div>

            <div class="mb-3">
              <label class="form-label">Password</label>
              <div class="input-group input-group-flat">
               <input type="password" class="form-control <?= form_error('password') ? 'invalid' : '' ?>" name="password" id="password" placeholder="Your password" value="<?= set_value('password') ?>">
                <span class="input-group-text">
                  <a href="#" class="link-secondary" title="Show password" data-bs-toggle="tooltip"><!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" /></svg>
                  </a>
                </span>
              </div>
              <div class="text-red text-muted"><?= form_error('password'); ?></div>
            </div>
            
            <div class="mb-3">
              <label class="form-check">
                <input type="checkbox" class="form-check-input" required/>
                <span class="form-check-label">Agree the <a href="./terms-of-service.html" tabindex="-1">terms and policy</a>.</span>
              </label>
            </div>
            <div class="form-footer">
              <button type="submit"  name="regis" class="btn btn-primary w-100">Create new account</button>
            </div>
          </div>
        </form>
        <div class="text-center text-muted mt-3">
          Already have account? <a href="<?= base_url('Auth/index') ?>" tabindex="-1">Sign in</a>
        </div>
      </div>
    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="<?= base_url('dist/js/tabler.min.js?1674944402') ?>" defer></script>
    <script src="<?= base_url('dist/js/demo.min.js?1674944402') ?>" defer></script>
  </body>
</html>