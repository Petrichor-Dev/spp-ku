<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Table Daftar
      <small><b>Siswa</b> </small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
      <li><a href="#">Table Siswa</a></li>
      <li class="active">Data Siswa</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">

        <div class="box">
          <div class="box-header">
            <a href="<?= base_url()?>admin/tambah/3" class="btn btn-primary">
            <img style="width:22px; margin-top:-7px; margin-right:2px; height:18px;" src="<?= base_url()?>assets/img/tambah_user.png">
            <b >Tambah Siswa</b> </a><?= $this->session->flashdata('pesan');?>
          </div>
          <!-- .box-header -->
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped text-center">
              <thead>
              <tr>
                <th>#</th>
                <th>GAMBAR</th>
                <th>NAMA</th>
                <th>NISN</th>
                <th>NIS</th>
                <th>KELAS</th>
                <th>JURUSAN</th>
                <th>ALAMAT</th>
                <th>NOMOR TELPON</th>
                <th>SPP / THN</th>
                <th>AKSI</th>
              </tr>
              </thead>
              <tbody class="text-center">
              
                <?php $n = 1;?>
                <?php foreach ($data as $d) :?>
                  <tr>
                <td><b><?= $n?></b></td>
                <td>
                  <img style="width:50px; border-radius:50%; disp" src="<?= base_url()?>assets/img/img_profiles/<?= $d["gambar"]?>" alt="gadis mutia ayumi">
                </td>
                <td><?= $d["nama"]?></td>
                <td><?= $d["nisn"]?></td>
                <td><?= $d["nis"]?></td>
                <td><?= $d["kelas"]?></td>
                <?php if(empty($d["jurusan"])) : ?>
                  <td class="text-danger">Jurusan Telah di Hapus</td>
                  <?php else : ?>
                    <td><?= $d["jurusan"]?></td>
                <?php endif;?>
                <td><?= $d["alamat"]?></td>
                <td>0<?= $d["nomor_telpon"]?></td>
                <td>Rp. <?= number_format($d["nominal/bulan"] * 12)?>,-</td>
                <td>
                <a href="<?= base_url()?>admin/edit_profile/3/<?= $d["nisn"]?>" style="border-radius:5px; width: 94px; margin-bottom:2px;" class="btn btn-warning">
                <img style="width:22px; margin-top:-7px; margin-right:2px; height:18px;" src="<?= base_url()?>assets/img/edit_user.png">
                <b>Edit</b> </a>

                <a onclick="return confirm('Apakah Anda Yakin ?');" href="<?= base_url()?>admin/hapus/3/<?= $d["nisn"]?>" style="border-radius:5px" class="btn btn-danger">
                <img style="width:22px; margin-top:-7px; margin-right:2px; height:18px;" src="<?= base_url()?>assets/img/hapus_user.png">
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


<footer class="main-footer">
  <div class="pull-right hidden-xs">

  </div>
  <strong>Copyright &copy; 2019 by <a href="https://instagram.com/djoe_ankami">Ocan Web House</a>.</strong> All rights
  reserved.
</footer>


<!-- Add the sidebar's background. This div must be placed
     immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?= base_url()?>assets/lib/jquery/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?= base_url()?>assets/lib/bootstrapV3/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?= base_url()?>assets/lib/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?= base_url()?>assets/lib/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url()?>assets/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url()?>assets/js/demo.js"></script>

<!-- DataTables -->
<script src="<?= base_url()?>assets/lib/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url()?>assets/lib/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>

