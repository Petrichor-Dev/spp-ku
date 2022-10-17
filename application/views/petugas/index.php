Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Table Daftar
      <small>Petugas</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Petugas</a></li>
      <li><a href="#">Tables Transaksi</a></li>
      <li class="active">Data Siswa</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">

        <div class="box">
          <div class="box-header">
            <a href="<?= base_url()?>admin/tambah" class="btn btn-primary"><b >Tambah Petugas</b> </a><?= $this->session->flashdata('pesan');?>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped text-center">
              <thead>
              <tr>
                <th>#</th>
                <th>Gambar</th>
                <th>Username</th>
                <th>Nama Petugas</th>
                <th>Password</th>
                <th class="hilang">Kode Petugas</th>
                <th></th>
              </tr>
              </thead>
              <tbody class="text-center">
              <?php $n = 1;?>
              <?php foreach ($data as $d) :?>
              <tr>
                <td><b><?= $n; ?></b> </td>
                <td>
                  <img style="width:50px; border-radius:50%; disp" src="<?= base_url()?>assets/img/img_profiles/<?= $d["gambar"]?>" alt="gadis mutia ayumi">
                </td>
                <td><?= $d["username"]?></td>
                <td><?= $d["nama_petugas"]?></td>
                <td><?= $d["password"]?></td>
                <td class="hilang"><b><?= $d["kode_petugas"]?></b></td>
                <td class="text-right">
                  <a href="<?= base_url()?>admin/edit_profile/<?= $d["id_petugas"]?>" style="border-radius:5px" class="btn btn-warning"><b>Edit Profil</b> </a>
                  
                  <a onclick="confem('yakin ?')" href="<?= base_url()?>admin/hapus/<?= $d["id_petugas"]?>" style="border-radius:5px" class="btn btn-danger"><b>Hapus</b> </a>
                  
                  <!-- <a href="<?= base_url()?>admin/jadikanPetugas/<?= $d["id_petugas"]?>" style="border-radius:5px" class="btn btn-primary">Jadikan Sebagai Petugas</a> -->
                  
                </td>
              </tr>
              <?php $n++?>
            <?php endforeach;?>
          </tbody>
              <!-- <tfoot>
              <tr>
                <th>#</th>
                <th>Gambar</th>
                <th>Username</th>
                <th>Nama Petugas</th>
                </tr>
              </tfoot> -->
            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper
