<?php 
	//jangan lupa kalau makai PASSWORD_HASH panjang password di databasenya juga besar.
	require "koneksi.php";

	if (isset($_POST["login"])) {
		$username = $_POST["username"];
		$password = $_POST["password"];

		$result = mysqli_query($con, "SELECT * FROM user WHERE gmail = '$username'");

		//cek username
		if ( mysqli_num_rows($result) === 1) {

			//cek password
			$row = mysqli_fetch_assoc($result);

			if( password_verify($password, $row["password"]) ) {
				header("Location: data.php?");
				exit;
			}

		}

	}

 ?>


<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-beta17
* @link https://tabler.io
* Copyright 2018-2023 The Tabler Authors
* Copyright 2018-2023 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Log In</title>
    <!-- CSS files -->
    <link href="./css/tabler.min.css?1674944402" rel="stylesheet"/>
    <link href="./css/tabler-flags.min.css?1674944402" rel="stylesheet"/>
    <link href="./css/tabler-payments.min.css?1674944402" rel="stylesheet"/>
    <link href="./css/tabler-vendors.min.css?1674944402" rel="stylesheet"/>
    <link href="./css/demo.min.css?1674944402" rel="stylesheet"/>
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
            <form method="post">
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
              <div class="mb-2">
                <label class="form-check">
                  <span style="color: red;"><?php // if (isset($error)) {
                  	 //    echo "Gmail/Password salah";
                 // } ?></span>
                </label>
              </div>
              <div class="form-footer">
                <button type="submit" name="login" class="btn btn-primary w-100">Sign in</button>
              </div>
            </form>
          </div>
          <div class="hr-text">or</div>
          <div class="card-body">
            <div class="row">
              <div class="col"><a href="#" class="btn w-100">
                  <!-- Download SVG icon from http://tabler-icons.io/i/brand-github -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon text-github" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 19c-4.3 1.4 -4.3 -2.5 -6 -3m12 5v-3.5c0 -1 .1 -1.4 -.5 -2c2.8 -.3 5.5 -1.4 5.5 -6a4.6 4.6 0 0 0 -1.3 -3.2a4.2 4.2 0 0 0 -.1 -3.2s-1.1 -.3 -3.5 1.3a12.3 12.3 0 0 0 -6.2 0c-2.4 -1.6 -3.5 -1.3 -3.5 -1.3a4.2 4.2 0 0 0 -.1 3.2a4.6 4.6 0 0 0 -1.3 3.2c0 4.6 2.7 5.7 5.5 6c-.6 .6 -.6 1.2 -.5 2v3.5" /></svg>
                  Login with Github
                </a></div>
              <div class="col"><a href="#" class="btn w-100">
                  <!-- Download SVG icon from http://tabler-icons.io/i/brand-twitter -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon text-twitter" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M22 4.01c-1 .49 -1.98 .689 -3 .99c-1.121 -1.265 -2.783 -1.335 -4.38 -.737s-2.643 2.06 -2.62 3.737v1c-3.245 .083 -6.135 -1.395 -8 -4c0 0 -4.182 7.433 4 11c-1.872 1.247 -3.739 2.088 -6 2c3.308 1.803 6.913 2.423 10.034 1.517c3.58 -1.04 6.522 -3.723 7.651 -7.742a13.84 13.84 0 0 0 .497 -3.753c0 -.249 1.51 -2.772 1.818 -4.013z" /></svg>
                  Login with Twitter
                </a></div>
            </div>
          </div>
        </div>
        <div class="text-center text-muted mt-3">
          Don't have account yet? <a href="registrasi.php" tabindex="-1">Sign up</a>
        </div>
      </div>
    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="./dist/js/tabler.min.js?1674944402" defer></script>
    <script src="./dist/js/demo.min.js?1674944402" defer></script>
  </body>
</html>