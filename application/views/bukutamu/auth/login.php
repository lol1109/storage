<?php 
  defined('BASEPATH') OR exit('No direct script access allowed');
 ?>


<!doctype html>
<!--
* Created By Afandy
* @version 1.0.0
-->
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Log In</title>
    <!-- CSS files -->
    <link rel="stylesheet" href="<?= base_url('dist/css/tabler.min.css?1674944402') ?> "/>
    <link rel="stylesheet" href="<?= base_url('dist/css/tabler-flags.min.css?1674944402') ?>" />
    <link rel="stylesheet" href="<?= base_url('dist/css/tabler-payments.min.css?1674944402') ?>" />
    <link rel="stylesheet" href="<?= base_url('dist/css/tabler-vendors.min.css?1674944402') ?>"/>
    <link rel="stylesheet" href="<?= base_url('dist/css/demo.min.css?1674944402') ?>" />
    <style>
      @import url('https://rsms.me/inter/inter.css');
      :root {
      	--tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
      }
      body {
      	font-feature-settings: "cv03", "cv04", "cv11";
      }
    </style>
  </head>
  <body  class=" d-flex flex-column">
    <div class="page page-center">
      <div class="container container-tight py-4">
        <div class="text-center mb-4">
        </div>
        <div class="card card-md">
          <div class="card-body">
            <h2 class="h2 text-center mb-4">Login to your account</h2>
            <form action="<?= base_url('index.php/Auth/login_akun') ?>"  method="post" autocomplete="off">
              <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" class="form-control" name="username" id="username" placeholder="your">
              </div>
              <div class="mb-2">
                <label class="form-label">
                  Password
                  <span class="form-label-description">
                    <a href="./forgot-password.html">I forgot password</a>
                  </span>
                </label>
                <div class="input-group input-group-flat">
                  <input type="password" class="form-control" name="password" id="password" placeholder="Your password">
                  <span class="input-group-text">
                    <a href="#" class="link-secondary" title="Show password" data-bs-toggle="tooltip"><!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" /></svg>
                    </a>
                  </span>
                </div>
              </div>
              <div class="form-footer">
                <button type="submit" name="login" class="btn btn-primary w-100">Sign in</button>
              </div>
            </form>
          </div>
        </div>
        <div class="text-center text-muted mt-3">
          Don't have account yet? <a href="<?= base_url('index.php/Auth/registrasi') ?>" tabindex="-1">Sign up</a>
        </div>
      </div>
    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="<?= base_url('dist/js/tabler.min.js?1674944402') ?>" defer></script>
    <script src="<?= base_url('dist/js/demo.min.js?1674944402') ?>" defer></script>
  </body>
</html>