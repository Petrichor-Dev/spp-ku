

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Data
        <small><b>SPP</b> </small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
        <li><a href="#">Edit Data</a></li>
        <li class="active">Data SPP</li>
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
                  <label for="spp">MASUKAN NOMINAL / BULAN</label>
                  <input autocomplete="off"
                         style="border-radius:7px; height:41px"
                         type="number"
                         class="form-control"
                         id="spp  "
                         placeholder="Rp."
                         name="spp"
                         value="<?= $spp[0]['nominal/bulan']?>">

                  <?= form_error("spp", "<small class='text-danger ml-3'><i>", "</i></small>");?>
                </div>

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <a href="<?= base_url()?>admin/spp" class="btn btn-danger">
                <img style="width:22px; margin-top:-7px; margin-right:2px; height:18px;" src="<?= base_url()?>assets/img/back4.png">
                <b>Kembali</b>
                </a>

                <button type="submit" name="submit" class="btn btn-primary"><img style="width:22px; margin-top:-7px; margin-right:2px; height:18px;" src="<?= base_url()?>assets/img/submit.png">
                <b>Submit</b></button>

                
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
