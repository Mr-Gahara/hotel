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
      <a href="<?php echo base_url('pemesanan_kamar'); ?>" class="nav-link">Pemesanan</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="<?= base_url('pembayaran_kamar'); ?>" class="nav-link">Pembayaran</a>
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
                Data pemesanan <strong >Berhasil</strong> <?= $this->session->flashdata('flash'); ?>
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
        <h3 class="card-title">Pemesanan Kamar</h3>
        <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
                <div class="row m-2">   
                    <a href="<?php echo base_url();?>pemesanan_kamar/TambahPemesanan" class="btn btn-primary">tambah</a>   
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
              <th>User</th>
              <th>Tanggal CheckIn</th>
              <th>Tanggal CheckOut</th>
              <th>Sarapan</th>
              <th>Harga Sarapan</th>
              <th>Total Harga</th>
            </tr>
          </thead>
          <tbody>
            <?php if (!empty($pemesanan)) : ?>
              <?php foreach($pemesanan as $pesan) : ?>
                <tr>
                  <td><?= $pesan['id']; ?></td>
                  <td><?= $pesan['nomor_nomor_kamar']; ?></td>
                  <td><?= $pesan['tipe_kamar_tipe']; ?></td>
                  <td><?= $pesan['nama_id_user']; ?></td>
                  <td><?= $pesan['tgl_check_in']; ?></td>
                  <td><?= $pesan['tgl_check_out']; ?></td>
                  <td><?= $pesan['sarapan']; ?></td>
                  <td><?= $pesan['harga_sarapan']; ?></td>
                  <td><?= $pesan['total_harga']; ?></td>

                  <td>
                    <a href="<?= base_url('pemesanan_kamar/HapusPemesanan/' . $pesan['id']); ?>" class="badge text-bg-danger float-end text-decoration-none" onclick="return confirm('Anda yakin ingin menghapus data?');">hapus</a>
                    <a href="<?= base_url('pemesanan_kamar/UpdatePemesanan/' . $pesan['id']); ?>" class="me-3 badge text-bg-success float-end text-decoration-none">update</a>
                  </td>
                </tr>
              <?php endforeach; ?>
            <?php else : ?>
              <tr>
                <td colspan="9" class="text-center">Data not available</td>
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
