  <?php $this->load->view('bukutamu/side/heading.php'); ?>
   <script type="text/javascript" src="jquery.js"></script>
    <div class="page-center">
      <div class="container container-tight py-4">
        <div class="card card-md">
          <div class="card-body">
            <h2 class="h2 text-center mb-4">Forgot Password</h2>
            <?= form_open('Auth/forgotpassword'); ?>
              <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" class="form-control <?= form_error('username') ? 'invalid' : '' ?>" name="username" id="username" placeholder="your" value="<?= set_value('username') ?>">
                <div class="text-red"><?= form_error('username'); ?></div> <br>
                <div>Masukan Username anda diatas dan kirimkan ke admin sehinga andmin bisa mereset password anda</div>
              </div>
              <div class="form-footer">
                <button type="submit" name="login" class="btn btn-primary w-100">Send</button>

              </div>
            </form>
          </div>
        </div>
        <div class="text-center text-muted mt-3">
          Back to login page? <a href="<?= base_url('Auth/index') ?>" tabindex="-1">Sing in</a>
        </div>
      </div>
    </div>
    <!-- Tabler Core -->
    <script src="<?= base_url('dist/js/tabler.min.js?1674944402') ?>" defer></script>
    <script src="<?= base_url('dist/js/demo.min.js?1674944402') ?>" defer></script>
  </body>
</html>