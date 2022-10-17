

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tambah Data
        <small><b>Siswa</b> </small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
        <li><a href="#">Data Siswa</a></li>
        <li class="active">Tambah Siswa</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-lg-9">

          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
            <?= $this->session->flashdata('pesan');?>
            <?= $this->session->flashdata('gambar_kosong');?>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <!-- <label for="nama">Nama Siswa</label> -->
                  <input autocomplete="off"
                         style="border-radius:7px; height:41px"
                         type="text"
                         class="form-control"
                         id="nama"
                         placeholder="Nama Siswa"
                         name="nama_siswa"
                         value="<?= set_value('nama_siswa')?>">

                  <?= form_error("nama_siswa", "<small class='text-danger ml-3'><i>", "</i></small>");?>
                </div>

                <div class="form-group">
                  <!-- <label for="nisn">NISN</label> -->
                  <input autocomplete="off"
                         style="border-radius:7px; height:41px"
                         type="number"
                         class="form-control"
                         id="nisn"
                         placeholder="NISN"
                         name="nisn"
                         value="<?= set_value('nisn')?>">

                  <?= form_error("nisn", "<small class='text-danger ml-3'><i>", "</i></small>");?>
                </div>

                <div class="form-group">
                  <!-- <label for="nis">NIS</label> -->
                  <input autocomplete="off"
                         style="border-radius:7px; height:41px"
                         type="number"
                         class="form-control"
                         id="nis"
                         placeholder="NIS"
                         name="nis"
                         value="<?= set_value('nis')?>">

                  <?= form_error("nis", "<small class='text-danger ml-3'><i>", "</i></small>");?>
                </div>

                <div class="form-group">
                <!-- <label for="kelas">Kelas</label> -->
                <select class="form-control select2" 
                        style="width: 100%;border-radius:7px; height:41px"
                        name="kelas"
                        id="kelas"
                        value="<?= set_value('kelas')?>">
                  <option selected disabled>Pilih Jurusan dan Kelas</option>
                  <?php foreach ($jurusan as $j) : ?>
                    <option value="<?= $j['id_kelas']?>"><?= $j['id_kelas']?>Kelas <?= $j['tingkatan_kelas']?> : <?= $j['kompetensi_keahlian']?></option>
                  <?php endforeach;?>
                </select>
                <?= form_error("kelas", "<small class='text-danger ml-3'><i>", "</i></small>");?>
              </div>

                

                <div class="form-group">
                  <!-- <label for="alamat">Alamat Rumah</label> -->
                  <input autocomplete="off"
                         style="border-radius:7px; height:41px"
                         type="text"
                         class="form-control"
                         id="alamat"
                         placeholder="Alamat Rumah"
                         name="alamat"
                         value="<?= set_value('alamat')?>">

                  <?= form_error("alamat", "<small class='text-danger ml-3'><i>", "</i></small>");?>
                </div>


                <div class="form-group">
                  <!-- <label for="nomor_telpon">nomor_telpon</label> -->
                  <input autocomplete="off"
                         style="border-radius:7px; height:41px"
                         type="number"
                         class="form-control"
                         id="nomor_telpon"
                         placeholder="Nomor Telepon"
                         name="nomor_telpon"
                         value="<?= set_value('nomor_telpon')?>">

                  <?= form_error("nomor_telpon", "<small class='text-danger ml-3'><i>", "</i></small>");?>
                </div>


                <div class="form-group">
                  <!-- <label for="nominal_spp">Nomimal</label> -->
                  <select class="form-control select2" 
                        style="width: 100%;border-radius:7px; height:41px"
                        name="spp"
                        id="nominal_spp"
                        value="<?= set_value('nominal_spp')?>">
                  <option selected disabled>Pilih Nominal Bulanan</option>
                  <?php foreach ($spp as $s) : ?>
                    <option value="<?= $s['id_spp']?>">Rp. <?= number_format($s['nominal/bulan']) ?> / Bulan</option>
                  <?php endforeach;?>
                </select>
                <?= form_error("spp", "<small class='text-danger ml-3'><i>", "</i></small>");?>

              </div>


                <div class="form-group">
                  <label for="foto">Pilih Foto :</label>
                  <input autocomplete="off"
                         style="border-radius:7px; height:41px"
                         type="file"
                         class="form-control"
                         id="foto"
                         placeholder="Foto"
                         name="gambar">

                  <?= form_error("gambar", "<small class='text-danger ml-3'><i>", "</i></small>");?>
                  <?= $this->session->flashdata('gambar_kosong');?>
                </div>

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
              <a href="<?= base_url()?>admin/s" class="btn btn-danger">
                <img style="width:22px; margin-top:-7px; margin-right:2px; height:18px;" src="<?= base_url()?>assets/img/back4.png">
                <b>Kembali</b>
                </a>

                <button type="submit" name="submit" class="btn btn-primary">
                <img style="width:22px; margin-top:-7px; margin-right:2px; height:18px;" src="<?= base_url()?>assets/img/submit.png">
                <b>Submit</b>
                </button>

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
