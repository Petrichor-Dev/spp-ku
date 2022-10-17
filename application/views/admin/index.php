<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Selamat Datang
      <small><b><?= $data[0]["status"]?></b></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> <?= $data[0]["status"]?></a></li>
      <li><a href="#">Tables <?= $data[0]["status"]?></a></li>
      <li class="active">Data <?= $data[0]["status"]?></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">

        <div class="box">
          <div class="box-header">
            <!-- <a href="<?= base_url()?>admin/tambah" class="btn btn-primary" onclick="return confirm('Kami tidak menyarankan anda untuk menambah admin');">Tambah Admin</a><?= $this->session->flashdata('pesan');?> -->
            <?= $this->session->flashdata('pesan');?>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped text-center">
              <thead>
              <tr>
              <th>#</th>
                <th>GAMBAR</th>
                <th>USERNAME</th>
                <th>NAMA PETUGAS</th>
                <th class="hilang">KODE PETUGAS</th>
                <th></th>
              </tr>
              </thead>
              <tbody class="text-center">
              <?php $n = 1;?>
              <?php foreach ($data as $d) :?>
              <tr>
                <td><b><?= $n; ?></b> </td>
                <td>
                  <img style="width:50px; border-radius:50%;" src="<?= base_url()?>assets/img/img_profiles/<?= $d["gambar"]?>" alt="gadis mutia ayumi">
                </td>
                <td><?= $d["username"]?></td>
                <td><?= $d["nama_petugas"]?></td>
                <td class="hilang"><b><?= $d["kode_petugas"]?></b></td>
                <td class="text-right">
                  <a href="<?= base_url()?>admin/edit_profile/<?= $d["id_level"]?>/<?= $d["id_petugas"]?>" style="border-radius:5px" class="btn btn-warning"><img style="width:22px; margin-top:-7px; margin-right:2px; height:18px;" src="<?= base_url()?>assets/img/edit_user.png"><b>Edit</b> </a>
                  <!-- cek apakah jumlah admin tinggal 1 atau tidak -->
                  
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
<!-- /.content-wrapper -->
