 <?php
    defined('BASEPATH') OR exit('No direct script access allowed');
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
    <title>Daftar Tamu</title>
    <!-- CSS files -->
     <!-- CSS files -->
    <link rel="stylesheet" href="<?= base_url('dist/css/tabler.min.css?1674944402') ?> "/>
    <link rel="stylesheet" href="<?= base_url('dist/css/tabler-flags.min.css?1674944402') ?>" />
    <link rel="stylesheet" href="<?= base_url('dist/css/tabler-payments.min.css?1674944402') ?>" />
    <link rel="stylesheet" href="<?= base_url('dist/css/tabler-vendors.min.css?1674944402') ?>"/>
    <link rel="stylesheet" href="<?= base_url('dist/css/demo.min.css?1674944402') ?>" />
    <link rel="stylesheet" href="<?= base_url('dist/dt/datatables.min.css') ?>" />
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
  <body >
    <script src="<?= base_url('dist/dt/datatables.js') ?>"></script>
    <script src="<?= base_url('dist/dt/datatables.min.js') ?>"></script>
    <script src="<?= base_url('dist/dt/DataTables/js/jquery.dataTables.js') ?>"></script>
    <script src="<?= base_url('dist/dt/DataTables/js/jquery.dataTables.min.js') ?>"></script>
    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
    <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
        <div class="page">