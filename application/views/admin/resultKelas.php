<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Table Daftar
      <small><b>Kelas</b> </small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
      <li><a href="#">Table Kelas</a></li>
      <li class="active">Data Kelas</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">

        <div class="box">
          <div class="box-header">
            <a href="<?= base_url()?>admin/tambah/4" class="btn btn-primary">
            <img style="width:22px; margin-top:-7px; margin-right:2px; height:18px;" src="<?= base_url()?>assets/img/tambah_data2.png">
            <b >Tambah Kelas</b> </a><?= $this->session->flashdata('pesan');?>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>#</th>
                <th>JURUSAN</th>
                <th class="text-center">KODE JURUSAN</th>
                <th></th>
                
              </tr>
              </thead>
              <tbody>
              <?php $n = 1;?>
              <?php foreach ($data as $d) :?>
              <tr>
                <td><b><?= $n; ?></b> </td>
                <td>
                  <b><i> Kelas <?= $d["tingkatan_kelas"]?> :</i></b> 
                  <?= $d["kompetensi_keahlian"]?>
                </td>

                <td class="text-center">
                  <b><?= $d["kode"]?></b>
                </td>
                
                <td class="text-right">
                <a href="<?= base_url()?>admin/edit_profile/4/<?= $d["id_kelas"]?>" style="border-radius:5px" class="btn btn-warning">
                <img style="width:22px; margin-top:-7px; margin-right:2px; height:18px;" src="<?= base_url()?>assets/img/edit_data.png">
                  <b>Edit</b>
                </a>

                <a onclick="return confirm('Apakah Anda Yakin ?');" href="<?= base_url()?>admin/hapus/4/<?= $d["id_kelas"]?>" style="border-radius:5px" class="btn btn-danger">
                <img style="width:22px; margin-top:-7px; margin-right:2px; height:18px;" src="<?= base_url()?>assets/img/hapus_data.png">
                <b>Hapus</b> </a>
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
