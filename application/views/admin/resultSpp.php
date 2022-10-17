<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Table Daftar
      <small>SPP</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Table SPP</a></li>
      <li class="active">Data SPP</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">

        <div class="box">
          <div class="box-header">
            <a href="<?= base_url()?>admin/tambah/spp" class="btn btn-primary">
            <img style="width:22px; margin-top:-7px; margin-right:2px; height:18px;" src="<?= base_url()?>assets/img/tambah_data.png">
            <b >Tambah SPP</b> </a><?= $this->session->flashdata('pesan');?>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>#</th>
                <th>NOMINAL / BULAN</th>
                <th></th>
                <th>NOMINAL / TAHUN</th>
                <th></th>
                
              </tr>
              </thead>
              <tbody>
              <?php $n = 1;?>
              <?php foreach ($data as $d) :?>
              <tr>
                <td><b><?= $n; ?></b> </td>
                <td>
                  <b><i> Rp. <?= number_format($d["nominal/bulan"]) ?>, x 12 Bulan</i></b> 
                </td>
                <td><b>=</b></td>
                <td>
                  <b><i> Rp. <?= number_format($d["nominal/tahun"]) ?>,- / Tahun</i></b> 
                </td>

               
                
                <td class="text-right">
                <a href="<?= base_url()?>admin/edit_profile/5/<?= $d["id_spp"]?>" style="border-radius:5px" class="btn btn-warning">
                <img style="width:22px; margin-top:-7px; margin-right:2px; height:18px;" src="<?= base_url()?>assets/img/edit_data.png">
                  <b>Edit</b>
                </a>

                <a onclick="return confirm('Apakah Anda Yakin ?');" href="<?= base_url()?>admin/hapus/5/<?= $d["id_spp"]?>" style="border-radius:5px" class="btn btn-danger">
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
