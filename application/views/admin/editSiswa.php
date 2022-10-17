

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Data
        <small><b>Siswa</b> </small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
        <li><a href="#">Data Siswa</a></li>
        <li class="active">Edit Data</li>
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
                  <label for="nama">NAMA SISWA</label>
                  <input autocomplete="off"
                         style="border-radius:7px; height:41px"
                         type="text"
                         class="form-control"
                         id="nama"
                         placeholder="Nama Siswa"
                         name="nama_siswa"
                         value="<?= $siswa[0]['nama']?>">

                  <?= form_error("nama_siswa", "<small class='text-danger ml-3'><i>", "</i></small>");?>
                </div>

                <div class="form-group">
                  <label for="nisn">NISN</label>
                  <input autocomplete="off"
                         style="border-radius:7px; height:41px"
                         type="number"
                         class="form-control"
                         id="nisn"
                         placeholder="NISN"
                         name="nisn"
                         value="<?= $siswa[0]['nisn']?>">

                  <?= form_error("nisn", "<small class='text-danger ml-3'><i>", "</i></small>");?>
                </div>

                <div class="form-group">
                  <label for="nis">NIS</label>
                  <input autocomplete="off"
                         style="border-radius:7px; height:41px"
                         type="number"
                         class="form-control"
                         id="nis"
                         placeholder="NIS"
                         name="nis"
                         value="<?= $siswa[0]['nis']?>">

                  <?= form_error("nis", "<small class='text-danger ml-3'><i>", "</i></small>");?>
                </div>

                <div class="form-group">
                <label for="kelas">KELAS</label>
                <select class="form-control select2" 
                        style="width: 100%;border-radius:7px; height:41px"
                        name="kelas"
                        id="kelas">
                  <?php foreach ($jurusan as $j) : ?>
                    <?php if($j["id_kelas"] === $siswa[0]["id_kelas"] ) :?>
                        <option selected value="<?= $j['id_kelas']?>">Kelas <?= $j['tingkatan_kelas']?> : <?= $j['kompetensi_keahlian']?></option>
                        <?php else :?>
                        <option value="<?= $j['id_kelas']?>">Kelas <?= $j['tingkatan_kelas']?> : <?= $j['kompetensi_keahlian']?></option>
                    <?php endif;?>
                  <?php endforeach;?>
                </select>
                <?= form_error("kelas", "<small class='text-danger ml-3'><i>", "</i></small>");?>
              </div>

                

                <div class="form-group">
                  <label for="alamat">ALAMAT RUMAH</label>
                  <input autocomplete="off"
                         style="border-radius:7px; height:41px"
                         type="text"
                         class="form-control"
                         id="alamat"
                         placeholder="Alamat Rumah"
                         name="alamat"
                         value="<?= $siswa[0]['alamat']?>">

                  <?= form_error("alamat", "<small class='text-danger ml-3'><i>", "</i></small>");?>
                </div>


                <div class="form-group">
                  <label for="nomor_telpon">NOMOR TELPON</label>
                  <input autocomplete="off"
                         style="border-radius:7px; height:41px"
                         type="number"
                         class="form-control"
                         id="nomor_telpon"
                         placeholder="Nomor Telepon"
                         name="nomor_telpon"
                         value="<?= $siswa[0]['nomor_telpon']?>">

                  <?= form_error("nomor_telpon", "<small class='text-danger ml-3'><i>", "</i></small>");?>
                </div>


                <div class="form-group">
                  <label for="nominal_spp">NOMINAL</label>
                  <select class="form-control select2" 
                        style="width: 100%;border-radius:7px; height:41px"
                        name="spp"
                        id="nominal_spp">
                  <?php foreach ($spp as $s) : ?>
                    <?php if($s["nominal/bulan"] == $siswa[0]["nominal/bulan"] ) :?>
                        <option selected value="<?= $s['id_spp']?>">Rp. <?= number_format($s['nominal/bulan']) ?> / Bulan</option>
                        <?php else :?>
                        <option value="<?= $s['id_spp']?>">Rp. <?= number_format($s['nominal/bulan']) ?> / Bulan</option>
                    <?php endif;?>
                  <?php endforeach;?>
                </select>
                <?= form_error("spp", "<small class='text-danger ml-3'><i>", "</i></small>");?>

              </div>


                <div class="form-group">
                  <label for="foto">
                  <img style="width:100px; border-radius:15%;"
                        src="<?=base_url()?>assets/img/img_profiles/<?= $siswa[0]["gambar"]?>" 
                          alt="<?= $data[0]["nama_petugas"]?>">
                  </label>
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
