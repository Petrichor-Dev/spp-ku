<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      History Pembayaran Siswa
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
      <li><a href="#">History</a></li>
      <li class="active">Data Pembayaran</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">

        <div class="row" style="background-color: #F7F7F9; padding: 10px; width:100%; margin-left:1px; border-radius:10px; margin-bottom:10px">

          <div class="col-lg-10 col-sm-6">

            <p style="font-size: 15.5px"><b>Kelas : <?= $siswa[0]["kelas"] ?> <?= $siswa[0]["jurusan"] ?></b></p>
            <p style="font-size: 15.5px"><b>NISN : <?= $siswa[0]["nisn"] ?></b></p>
            <p style="font-size: 15.5px"><b>Nama : <?= $siswa[0]["nama"] ?></b></p>
            <p style="font-size: 15.5px"><b>Bulanan : Rp. <?= number_format($siswa[0]["nominal/bulan"]) ?>,-</b></p>
            <?php if ($tunggakan == 12) : ?>
              <p style="font-size: 15.5px"><b class="text-success">Tunggakan : LUNAS</b></p>
            <?php else : ?>
              <p style="font-size: 15.5px"><b class="text-danger">Sisa Tunggakan : <?= 12 - $tunggakan ?> Bulan</b></p>
            <?php endif; ?>
          </div>

          <div class="col-lg-2 col-sm-6" style="margin-top: 10px">
            <!-- <a href="" class="btn btn-danger">Kembali</a> -->
            <img style="width:120px; border-radius:20%; border:4px solid whitesmoke;" src="<?= base_url() ?>assets/img/img_profiles/<?= $siswa[0]["gambar"] ?>" alt="<?= $data[0]["nama"] ?>">
          </div>
        </div>

        <div class="box">
          <div class="box-header">

          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example1" class="table .table-bordered text-center">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Nama Petugas</th>
                  <th>Tanggal Pebayaran</th>
                  <th>Bulan Yang di Bayar</th>
                  <th>Total Nominal</th>
                  <th>Status Pembayaran</th>

                </tr>
              </thead>
              <tbody>
                <?php $n = 1; ?>
                <?php foreach ($pembayaran as $p) : ?>
                  <tr>
                    <td><b><?= $n; ?></b> </td>
                    <td>
                      <b><?= $p["nama_petugas"] ?></b>
                    </td>
                    <td>
                      <?= $p["tanggal_pembayaran"] ?>
                    </td>
                    <td><?= $p["tengat_waktu"] ?> bulan</td>
                    <td>Rp. <?= number_format($p["tengat_waktu"] * $siswa[0]["nominal/bulan"]) ?></td>
                    <td class="text-success"><b>LUNAS</b></td>


                  </tr>
                  <?php $n++ ?>
                <?php endforeach; ?>

              </tbody>

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