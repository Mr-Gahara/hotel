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
    <li class="nav-item">
      <a class="nav-link"><?= $this->session->userdata('nama'); ?></a>
    </li>
    <li class="nav-item">
      <a href="<?= base_url('logout'); ?>" class="nav-link">Log out</a>
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

  


<div class="container m-0">
    <?php if ($this->session->flashdata('flash') ) : ?>
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data kamar <strong >Berhasil</strong> <?= $this->session->flashdata('flash'); ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    </div>

    <?php endif; ?>

</div>


<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Nomor Kamar</h3>
        <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
                <div class="row m-2">   
                    <a href="<?php echo base_url();?>nomor_kamar/TambahNomorKamar" class="btn btn-primary">tambah</a>   
                </div>
            </div>
        </div>
      </div>
      <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nomor Kamar</th>
              <th>Tipe Kamar</th>
              <th>Status</th>
              <th>Created At</th>
              <th>Updated At</th>
            </tr>
          </thead>
          <tbody>
            <?php if (!empty($kamar)) : ?>
              <?php foreach($kamar as $kmr) : ?>
                <tr>
                  <td><?= $kmr['id']; ?></td>
                  <td><?= $kmr['no_kamar']; ?></td>
                  <td><?= $kmr['tipe_kamar_tipe']; ?></td>
                  <td><?= $kmr['status']; ?></td>
                  <td><?= $kmr['created_at']; ?></td>
                  <td><?= $kmr['updated_at']; ?></td>
                  <td>
                    <a href="<?= base_url('nomor_kamar/hapusNomorKamar/' . $kmr['id']); ?>" class="badge text-bg-danger float-end text-decoration-none" onclick="return confirm('Anda yakin ingin menghapus data?');">hapus</a>
                    <a href="<?= base_url('nomor_kamar/UpdateNomorKamar/' . $kmr['id']); ?>" class="me-3 badge text-bg-success float-end text-decoration-none">update</a>
                  </td>
                </tr>
              <?php endforeach; ?>
            <?php else : ?>
              <tr>
                <td colspan="7" class="text-center">Data not available</td>
              </tr>
            <?php endif; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>


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
