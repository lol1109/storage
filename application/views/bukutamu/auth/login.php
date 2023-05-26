  <?php $this->load->view('bukutamu/side/heading.php'); ?>
  <script type="text/javascript" src="jquery.js"></script>
    <div class="page-center">
      <div class="container container-tight py-4">
        
        <div class="card card-md">
          <div class="card-body">
            <h2 class="h2 text-center mb-4">Login to your account</h2>
              <div class="text-center mb-4">
                <?= $this->session->flashdata('eror'); ?>
              </div>
            <?= form_open('Auth/login_akun'); ?>
              <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" class="form-control <?= form_error('username') ? 'invalid' : '' ?>" name="username" id="username" placeholder="your" value="<?= set_value('username') ?>">
                <div class="text-red"><?= form_error('username'); ?></div>
              </div>
              <div class="mb-2">
                <label class="form-label">
                  Password
                  <span class="form-label-description">
                    <a href="#">I forgot password</a>
                  </span>
                </label>
                <div class="input-group input-group-flat">
                  <input type="password" class="form-control <?= form_error('password') ? 'invalid' : '' ?>" name="password" id="password" placeholder="Your password">
                   <span id="mybutton" onclick="change()" class="input-group-text">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" /><path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" /></svg>
                </div>
                <div class="text-red text-muted"><?= form_error('password'); ?></div>
              </div>
              <div class="form-footer">
                <button type="submit" name="login" class="btn btn-primary w-100">Sign in</button>
              </div>
            </form>
          </div>
        </div>
        <div class="text-center text-muted mt-3">
          Don't have account yet? <a href="<?= base_url('Auth/registrasi') ?>" tabindex="-1">Sign up</a>
        </div>
      </div>
    </div>
    <!-- Libs JS -->
            <script>
            // membuat fungsi change
            function change() {
    
                // membuat variabel berisi tipe input dari id='pass', id='pass' adalah form input password 
                var x = document.getElementById('password').type;
    
                //membuat if kondisi, jika tipe x adalah password maka jalankan perintah di bawahnya
                if (x == 'password') {
    
                    //ubah form input password menjadi text
                    document.getElementById('password').type = 'text';
                    
                    //ubah icon mata terbuka menjadi tertutup
                    document.getElementById('mybutton').innerHTML = `<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-slash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M10.79 12.912l-1.614-1.615a3.5 3.5 0 0 1-4.474-4.474l-2.06-2.06C.938 6.278 0 8 0 8s3 5.5 8 5.5a7.029 7.029 0 0 0 2.79-.588zM5.21 3.088A7.028 7.028 0 0 1 8 2.5c5 0 8 5.5 8 5.5s-.939 1.721-2.641 3.238l-2.062-2.062a3.5 3.5 0 0 0-4.474-4.474L5.21 3.089z"/><path d="M5.525 7.646a2.5 2.5 0 0 0 2.829 2.829l-2.83-2.829zm4.95.708l-2.829-2.83a2.5 2.5 0 0 1 2.829 2.829z"/><path fill-rule="evenodd" d="M13.646 14.354l-12-12 .708-.708 12 12-.708.708z"/></svg>`;
                }
                else {
                 //ubah form input password menjadi text
                document.getElementById('password').type = 'password';
    
                //ubah icon mata terbuka menjadi tertutup
                document.getElementById('mybutton').innerHTML = `<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/><path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/></svg>`;
                }
            }
        </script>
    <!-- Tabler Core -->
    <script src="<?= base_url('dist/js/tabler.min.js?1674944402') ?>" defer></script>
    <script src="<?= base_url('dist/js/demo.min.js?1674944402') ?>" defer></script>
  </body>
</html>