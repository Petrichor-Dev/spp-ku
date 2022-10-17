<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Pilih Jurusan :
      <!-- <small>Kelas</small> -->
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
      <li><a href="#">Data Kela</a></li>
      <li class="active">Select</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">

        <div class="box">
          <div class="box-header">
            <!-- <a href="<?= base_url()?>admin/tambah/4" class="btn btn-primary"><b >Tambah Kelas</b> </!--><?= $this->session->flashdata('pesan');?> 
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                
                <th>JURUSAN</th>
                <th class="text-center">KODE JURUSAN</th>
                
                
              </tr>
              </thead>
              <tbody>
              <?php foreach ($data as $d) :?>
              <tr>
                
                <td>
                  <a href="<?= base_url()?>admin/select_siswa/<?= $d["id_kelas"]?>">
                     
                    <b>
                      <i> Kelas <?= $d["tingkatan_kelas"]?> :</i> 
                      <?= $d["kompetensi_keahlian"]?>
                    </b>
                  </a>
                </td>
                <td class="text-center">
                  <b><?= $d["kode"]?></b>
                </td>
               
              </tr>
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
