<div class="wrapper">

<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item d-none d-sm-inline-block">
      <a href="<?php echo base_url(); ?>dashboard" class="nav-link">Home</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="<?php echo base_url(); ?>daftar_user" class="nav-link">users</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="<?= base_url(); ?>post" class="nav-link">post</a>
    </li>
  </ul>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <li>
    <select class="form-select" aria-label="Default select example" onchange="window.location.href=this.value">
      <option selected disabled><?= $this->session->userdata('nama'); ?></option>
      <option value="<?php echo site_url('home'); ?>">hotel page</option>
      <option value="<?php echo site_url('logout'); ?>">Log out</option>
    </select>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-widget="fullscreen" href="#" role="button">
        <i class="fas fa-expand-arrows-alt"></i>
      </a>
    </li>
  </ul>
</nav>
<!-- /.navbar -->

<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav mx-auto">
    <li class="nav-item d-none d-sm-inline-block">
      <a href="<?php echo base_url('tipe_kamar'); ?>" class="nav-link">Tipe Kamar</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="<?php echo base_url('nomor_kamar'); ?>" class="nav-link">Nomor Kamar</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="<?php echo base_url(); ?>daftar_user" class="nav-link">Pemesanan</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="<?= base_url(); ?>post" class="nav-link">Pembayaran</a>
    </li>
  </ul>
</nav>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">

        <h1 class="m-0">Admin Dashboard</h1>

      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
        
    </div><!-- /.container-fluid -->
        </div>
      <!-- /.content -->
        </div>
    <!-- /.content-wrapper -->
      
    <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
          <b>Version</b> 3.2.0
        </div>
        <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    </footer>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->
    </div>
  

<h1>hello! <?php echo $nama?></h1>

<footer class="main-footer">
        <div class="float-right d-none d-sm-block">
          <b>Version</b> 3.2.0
        </div>
        <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    </footer>
