<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Table Siswa
      <?php if(empty($data[0]["kelas"]) && empty($data[0]["jurusan"])) :?>
        Kosong
      <?php else :?>
        <small><b>Kelas <?= $data[0]["kelas"]?> <?= $data[0]["jurusan"]?></b></small>
      <?php endif;?>

    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
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
          <?= $this->session->flashdata('pesan');?>
            <form method="post">
              <div class="form-group">
                <label for="kelas" style="display:block;">Cari Siswa Lainnya :</label>
                <select class="form-control select2" 
                        style="display:inline; width: 40%;border-radius:7px; height:41px; margin-right: 10px;"
                        name="kelas"
                        id="kelas">

                  <option selected disabled>Cari Berdasar Kelas</option>
                  <?php foreach ($jurusan as $j) :?>
                  <option value="<?= $j["id_kelas"]?>">
                    <b>Kelas <?= $j["tingkatan_kelas"]?></b> : <?= $j["kompetensi_keahlian"]?></option>
                  <?php endforeach;?>
                  
                    
                </select>
                <?= form_error("kelas", "<small class='text-danger ml-3'><i>", "</i></small>");?>
                

                
                <button type="submit" name="submit" class="btn btn-primary">
                <img style="width:19px; margin-top:-7px; margin-right:2px; height:17px;" src="<?= base_url()?>assets/img/cari.png">  
                <b>Cari</b>
              </button>
              </div>
            </form>
          </div>