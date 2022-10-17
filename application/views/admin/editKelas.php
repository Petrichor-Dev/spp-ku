

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tambah Data
        <small><b>Kelas</b> </small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
        <li><a href="#">Data Kelas</a></li>
        <li class="active">Edit Kelas</li>
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
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="jurusan">JURUSAN</label>
                  <input autocomplete="off"
                         style="border-radius:7px; height:41px"
                         type="text"
                         class="form-control"
                         id="jurusan  "
                         placeholder="Nama Jurusan"
                         name="jurusan"
                         value="<?= $jurusan[0]["kompetensi_keahlian"]?>">

                  <?= form_error("jurusan", "<small class='text-danger ml-3'><i>", "</i></small>");?>
                </div>

                <div class="form-group">
                <label for="kelas">KELAS</label>
                <select class="form-control select2" 
                        style="width: 100%;border-radius:7px; height:41px"
                        name="kelas"
                        id="kelas">
                    
                      <?php if($jurusan[0]["tingkatan_kelas"]):?>
                        <option selected disabled value="<?= $jurusan[0]['tingkatan_kelas']?>">Kelas <?= $jurusan[0]['tingkatan_kelas']?></option>
                        <option value="10">Kelas 10</option>
                        <option value="11">Kelas 11</option>
                        <option value="12">Kelas 12</option>
                      <?php else:?>
                        <option value="10">Kelas 10</option>
                        <option value="11">Kelas 11</option>
                        <option value="12">Kelas 12</option>
                      <?php endif;?>
                    
                </select>
                <?= form_error("kelas", "<small class='text-danger ml-3'><i>", "</i></small>");?>
              </div>

                <div class="form-group">
                  <label for="kode">KODE JURUSAN</label>
                  <input autocomplete="off"
                         style="border-radius:7px; height:41px"
                         type="text"
                         class="form-control"
                         id="kode"
                         placeholder="Kode Jurusan"
                         name="kode"
                         value="<?= $jurusan[0]["kode"]?>">

                  <?= form_error("kode", "<small class='text-danger ml-3'><i>", "</i></small>");?>
                </div>

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                

                <a href="<?= base_url()?>admin/k" class="btn btn-danger"><img style="width:22px; margin-top:-7px; margin-right:2px; height:18px;" src="<?= base_url()?>assets/img/back4.png">  
                <b>Kembali</b> </a>

                <button type="submit" name="submit" class="btn btn-primary">
                <img style="width:22px; margin-top:-7px; margin-right:2px; height:18px;" src="<?= base_url()?>assets/img/submit.png">  
                <b>Submit</b> </button>
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
