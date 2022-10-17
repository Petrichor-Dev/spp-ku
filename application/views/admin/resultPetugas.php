<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Table Daftar
      <small><b><?= (isset($data)) ? " " : $data[0]["status"] ?></b> </small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
      <li><a href="#">Table <?= (isset($data)) ? " " : $data[0]["status"] ?></a></li>
      <li class="active">Data <?= (isset($data)) ? " " : $data[0]["status"] ?></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">

        <div class="box">
          <div class="box-header">
            <a href="<?= base_url() ?>admin/tambah/2" class="btn btn-primary">
              <img style="width:22px; margin-top:-7px; margin-right:2px; height:18px;" src="<?= base_url() ?>assets/img/tambah_user.png">
              <b>Tambah Petugas</b> </a><?= $this->session->flashdata('pesan'); ?>
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
                  <th>KODE PETUGAS</th>
                  <th></th>
                </tr>
              </thead>
              <tbody class="text-center">
                <?php $n = 1; ?>
                <?php if (isset($data)) : ?>
                  <?php foreach ($data as $d) : ?>
                    <tr>
                      <td><b><?= $n; ?></b> </td>
                      <td>
                        <img style="width:50px; border-radius:50%; disp" src="<?= base_url() ?>assets/img/img_profiles/<?= $d["gambar"] ?>" alt="admin profile">
                      </td>
                      <td><?= $d["username"] ?></td>
                      <td><?= $d["nama_petugas"] ?></td>
                      <td><b><?= $d["kode_petugas"] ?></b></td>
                      <td class="text-right">
                        <a href="<?= base_url() ?>admin/edit_profile/<?= $d["id_level"] ?>/<?= $d["id_petugas"] ?>" style="border-radius:5px" class="btn btn-warning"><img style="width:22px; margin-top:-7px; margin-right:2px; height:18px;" src="<?= base_url() ?>assets/img/edit_user.png"><b>Edit</b> </a>

                        <a onclick="return confirm('Apakah Anda Yakin ?');" href="<?= base_url() ?>admin/hapus/2/<?= $d["id_petugas"] ?>" style="border-radius:5px" class="btn btn-danger">
                          <img style="width:22px; margin-top:-7px; margin-right:2px; height:18px;" src="<?= base_url() ?>assets/img/hapus_user.png">
                          <b>Hapus</b> </a>

                        <!-- <a href="<?= base_url() ?>admin/jadikanPetugas/<?= $d["id_petugas"] ?>" style="border-radius:5px" class="btn btn-primary">Jadikan Sebagai Petugas</a> -->

                      </td>
                    </tr>
                    <?php $n++ ?>
                  <?php endforeach; ?>
                <?php endif; ?>
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