<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Transaksi Pembayaran
      <small><b>SPP</b> </small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
      <li><a href="#">Transaksi</a></li>
      <li class="active">SPP</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <!-- left column -->
      <div class="col-lg-6">

        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">

          </div>

          <!-- /.box-header -->
          <!-- form start -->
          <form role="form" method="post" enctype="multipart/form-data">
            <div class="box-body">
              <img style="width:130px; border-radius:10%; border:4px solid whitesmoke; margin-left:38%;" src="<?= base_url() ?>assets/img/img_profiles/<?= $siswa[0]["gambar"] ?>" alt="<?= $data[0]["nama_petugas"] ?>">
              <div class="form-group">

                <div class="form-group">
                  <!-- <label for="id_spp">ID SPP</label> -->
                  <input autocomplete="off" style="border-radius:7px; height:41px" type="hidden" class="form-control" id="id_spp  " placeholder="ID SPP" name="id_spp" value="<?= $spp[0]["id_spp"] ?>" readonly>

                  <?= form_error("id_spp", "<small class='text-danger ml-3'><i>", "</i></small>"); ?>
                </div>


                <div class="form-group">
                  <!-- <label for="id_spp">ID SPP</label> -->
                  <input autocomplete="off" style="border-radius:7px; height:41px" type="hidden" class="form-control" id="id_siswa" placeholder="ID SPP" name="id_siswa" value="<?= $siswa[0]["id_siswa"] ?>" readonly>

                  <?= form_error("id_siswa", "<small class='text-danger ml-3'><i>", "</i></small>"); ?>
                </div>

                <!-- <label for="id_petugas">ID PETUGAS</label> -->
                <input autocomplete="off" style="border-radius:7px; height:41px" type="hidden" class="form-control" id="id_petugas" placeholder="ID PETUGAS" name="id_petugas" value="<?= $this->session->userdata('idPetugas') ?>" readonly>

                <?= form_error("id_petugas", "<small class='text-danger ml-3'><i>", "</i></small>"); ?>
              </div>





              <div class="form-group">
                <label for="nama">NAMA SISWA</label>
                <input autocomplete="off" style="border-radius:7px; height:41px" type="text" class="form-control" id="nama  " placeholder="Nama Siswa" name="nama" value="<?= $siswa[0]["nama"] ?>" readonly>

                <?= form_error("nama", "<small class='text-danger ml-3'><i>", "</i></small>"); ?>
              </div>

              <div class="form-group">
                <label for="nisn">NISN</label>
                <input autocomplete="off" style="border-radius:7px; height:41px" type="text" class="form-control" id="nisn  " placeholder="Nama Siswa" name="nisn" value="<?= $siswa[0]["nisn"] ?>" readonly>

                <?= form_error("nisn", "<small class='text-danger ml-3'><i>", "</i></small>"); ?>
              </div>

              <div class="form-group">
                <label for="bulanan">BULANAN</label>
                <input autocomplete="off" style="border-radius:7px; height:41px" type="text" class="form-control" id="bulanan  " placeholder="Bulanan" name="bulanan" value="<?= $spp[0]["nominal/bulan"] ?>" readonly> <?= $spp[0]["nominal/bulan"] ?>

                <?= form_error("bulanan", "<small class='text-danger ml-3'><i>", "</i></small>"); ?>
              </div>


              <div class="form-group">
                <label for="tanggal">TANGGAL PEMBAYARAN</label>
                <input autocomplete="off" style="border-radius:7px; height:41px" type="date" class="form-control" id="tanggal" placeholder="Tanggal" name="tanggal" value="<?= set_value('tanggal') ?>">

                <?= $this->session->flashdata('tanggal'); ?>
              </div>

              <div class="form-group">
                <label for="tengatWaktu" style="display:block;">TENGAT WAKTU</label>
                <select class="form-control select2" style="display:inline; width: 100%;border-radius:7px; height:41px; margin-right: 10px;" name="tengatWaktu" id="tengatWaktu">

                  <option selected disabled>Ingin bayar berapa bulan ?
                  </option>
                  <?php $sisaTunggakan = 13 - $lunas ?>
                  <?php for ($i = 1; $i < $sisaTunggakan; $i++) : ?>
                    <option value="<?= $i ?>"><?= $i ?> Bulan</option>
                  <?php endfor; ?>
                </select>
                <?= form_error("tengatWaktu", "<small class='text-danger ml-3'><i>", "</i></small>"); ?>
              </div>

            </div>
            <!-- /.box-body -->

            <div class="box-footer">
              <a href="<?= base_url() ?>admin/select_siswa/<?= $siswa[0]["id_kelas"] ?>" class="btn btn-danger">
                <img style="width:22px; margin-top:-7px; margin-right:2px; height:18px;" src="<?= base_url() ?>assets/img/back4.png">
                <b>Kembali</b>
              </a>

              <button type="submit" name="submit" class="btn btn-success">
                <img style="width:22px; margin-top:-7px; margin-right:2px; height:18px;" src="<?= base_url() ?>assets/img/transaksi2.png">
                <b>Bayar SPP</b>
              </button>


              <h5 class="pull-right text-success"><b>Lunas : <?= $lunas ?> Bulan</b></h5>
            </div>
          </form>
        </div>
        <!-- /.box -->


      </div>
      <!-- /.box -->
    </div>
    <!--/.col (right) -->
</div>
<!-- /.row -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->