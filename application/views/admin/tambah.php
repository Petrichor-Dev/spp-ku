

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tambah Data
        <small><b>Petugas</b> </small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
        <li><a href="#">Data Petugas</a></li>
        <li class="active">Tambah Petugas</li>
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
                  <!-- <label for="namaAdmin">Nama Admin</label> -->
                  <input autocomplete="off"
                         style="border-radius:7px; height:41px"
                         type="text"
                         class="form-control"
                         id="namaAdmin"
                         placeholder="Nama Admin"
                         name="namaAdmin"
                         value="<?= set_value('namaAdmin')?>">

                         <?= form_error("namaAdmin", "<small class='text-danger ml-3'><i>", "</i></small>");?>
                </div>

                <div class="form-group">
                  <!-- <label for="username">Username</label> -->
                  <input autocomplete="off"
                         style="border-radius:7px; height:41px"
                         type="text"
                         class="form-control"
                         id="username"
                         placeholder="Username"
                         name="username"
                         value="<?= set_value('username')?>">

                  <?= form_error("username", "<small class='text-danger ml-3'><i>", "</i></small>");?>
                </div>

                <div class="form-group">
                  <!-- <label for="password">Password</label> -->
                  <input autocomplete="off"
                         style="border-radius:7px; height:41px"
                         type="password"
                         class="form-control"
                         id="password"
                         placeholder="Password"
                         name="password"
                         value="<?= set_value('password')?>">

                  <?= form_error("password", "<small class='text-danger ml-3'><i>", "</i></small>");?>
                </div>

                <div class="form-group">
                  <!-- <label for="kodeAdmin">Kode Admin</label> -->
                  <input autocomplete="off"
                         style="border-radius:7px; height:41px"
                         type="text"
                         class="form-control"
                         id="kodeAdmin"
                         placeholder="Kode Admin"
                         name="kodeAdmin"
                         value="<?= set_value('kodeAdmin')?>">

                  <?= form_error("kodeAdmin", "<small class='text-danger ml-3'><i>", "</i></small>");?>
                </div>

                <div class="form-group">
                  <!-- <label for="gambar">Gambar</label> -->
                  <input autocomplete="off"
                         style="border-radius:7px; height:41px"
                         type="file"
                         class="form-control"
                         id="gambar"
                         placeholder="Gambar"
                         name="gambar">

                  <?= form_error("gambar", "<small class='text-danger ml-3'><i>", "</i></small>");?>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">

                <a href="<?= base_url()?>admin/p" class="btn btn-danger">
                <img style="width:22px; margin-top:-7px; margin-right:2px; height:18px;" src="<?= base_url()?>assets/img/back4.png">
                Kembali</a>

                <button type="submit" name="submit" class="btn btn-primary">
                <img style="width:22px; margin-top:-7px; margin-right:2px; height:18px;" src="<?= base_url()?>assets/img/submit.png">  
                Submit</button>
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
