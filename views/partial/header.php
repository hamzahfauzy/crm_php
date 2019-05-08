<?php use vendor\zframework\Session; ?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Customer Relationship Management</title>
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?=$this->assets->get('font-awesome/css/fontawesome.css')?>">
	<link rel="stylesheet" href="<?=$this->assets->get('font-awesome/css/brands.css')?>">
	<link rel="stylesheet" href="<?=$this->assets->get('font-awesome/css/solid.css')?>">
	<!-- Bootstrap core CSS -->
	<link href="<?=$this->assets->get('css/bootstrap.min.css')?>" rel="stylesheet">
	<!-- Material Design Bootstrap -->
	<link href="<?=$this->assets->get('css/mdb.min.css')?>" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?=$this->assets->get('css/styles.css')?>">
	<script type="text/javascript" src="<?=$this->assets->get('js/site.js')?>"></script>
</head>
<body>

<?php if(Session::get('id')){ ?>

<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark success-color">
  <div class="container">
  <!-- Navbar brand -->
  <a class="navbar-brand" href="#"><i class="fas fa-motorcycle"></i> CV. PARNA MOTOR</a>

  <!-- Collapse button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
    aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Collapsible content -->
  <div class="collapse navbar-collapse" id="basicExampleNav">

  	
  	<ul class="navbar-nav ml-auto">
      <li class="nav-item <?= get_page() == 'Home' ? 'active' : '' ?>">
        <a class="nav-link" href="<?= base_url() ?>/admin">
          <i class="fas fa-home"></i> Home
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item <?= get_page() == 'Kategori' ? 'active' : '' ?>">
        <a class="nav-link" href="<?= base_url() ?>/admin/kategori">
          <i class="fas fa-list-alt"></i> Kategori</a>
      </li>
      <li class="nav-item <?= get_page() == 'Customer' ? 'active' : '' ?>">
        <a class="nav-link" href="<?= base_url() ?>/admin/customer">
          <i class="fab fa-typo3"></i> Kustomer
        </a>
      </li>
      <li class="nav-item <?= get_page() == 'Produk' ? 'active' : '' ?>">
        <a class="nav-link" href="<?= base_url() ?>/admin/produk">
          <i class="fas fa-bullseye"></i> Produk</a>
      </li>
      <li class="nav-item <?= get_page() == 'Transaksi' ? 'active' : '' ?>">
        <a class="nav-link" href="<?= base_url() ?>/admin/transaksi">
          <i class="fas fa-handshake"></i> Transaksi</a>
      </li>
      <li class="nav-item <?= get_page() == 'Payment' ? 'active' : '' ?>">
        <a class="nav-link" href="<?= base_url() ?>/admin/payment">
          <i class="fas fa-dollar-sign"></i> Pembayaran</a>
      </li>
      <li class="nav-item <?= get_page() == 'Tentang' ? 'active' : '' ?>">
        <a class="nav-link" href="<?= base_url() ?>/admin/tentang">
          <i class="fas fa-user"></i> Tentang</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url() ?>/logout">
          <i class="fas fa-sign-out-alt"></i> Logout</a>
      </li>
    </ul>

  </div>
  <!-- Collapsible content -->
  </div>

</nav>

<?php } ?>
<!--/.Navbar-->
<div style="padding-top: 20px;"></div>