<!-- SIDE BAR YANG SEBELAH KIRI -->
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?= base_url()?>assets/img/img_profiles/<?= $data[0]["gambar"];?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?= $data[0]["nama_petugas"];?></p>

          <a href="#"><i class="fa fa-circle text-success"></i> Online ~ <?= $data[0]["status"];?></a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU NAVIGASI</li>
        <li class="">
          <a href="<?= base_url()?>admin">
          <img style="width:22px; margin-top:-7px; margin-right:2px; height:18px;" src="<?= base_url()?>assets/img/admin.png">
            <!-- <i class="fa fa-user-circle"></i>  -->
            <span>ADMIN</span>
            <!-- <i class=""></i> <span>ADMIN</span> -->
          </a>
        </li>

        <li>
          <a href="<?= base_url()?>admin/p">
          <img style="width:22px; margin-top:-7px; margin-right:2px; height:18px;" src="<?= base_url()?>assets/img/pegawai.png">
            <!-- <i class="fa fa-user-circle"></i>  -->
            <span>PETUGAS</span>
            <!-- <i class=""></i> <span>PETUGAS</spa> -->
          </a>
        </li>

        <li>
          <a href="<?= base_url()?>admin/s">
            <img style="width:22px; margin-top:-7px; margin-right:2px; height:18px;" src="<?= base_url()?>assets/img/siswa.png"> 
            <!-- <i class="fa fa-user-circle"></i>  -->
            <span>SISWA</span>
            <!-- <i class=""></i> <span>SISWA</span> -->
          </a>
        </li>

        <li>
          <a href="<?= base_url()?>admin/k">
            <img style="width:22px; margin-top:-7px; margin-right:2px; height:18px;" src="<?= base_url()?>assets/img/kelas.png">
            <!-- <i class="fa fa-user-circle"></i>  -->
            <span>KELAS</span>
            <!-- <i class=""></i> <span>SISWA</span> -->
          </a>
        </li>

        <li>
          <a href="<?= base_url()?>admin/spp">
            <img style="width:22px; margin-top:-7px; margin-right:2px; height:18px;" src="<?= base_url()?>assets/img/transaksi2.png">
            <!-- <i class="fa fa-user-circle"></i>  -->
            <span>SPP</span>
            <!-- <i class=""></i> <span>SPP</span>  -->
          </a>
        </li>

        <li>
          <a href="<?= base_url()?>admin/select_kelas">
            <img style="width:22px; margin-top:-7px; margin-right:2px; height:18px;" src="<?= base_url()?>assets/img/transaksi.png">
            <!-- <i class="fa fa-user-circle"></i>  -->
            <span>TRANSAKSI</span>
            <!-- <i class=""></i> <span>TRANSAKSI PEMBAYARAN -->
          </a>
        </li>

        <li>
          <a href="<?= base_url()?>Auth/logout">
            <i style="font-size:20px;" class="fa fa-sign-out"></i> <span>LOGOUT</span>

          </a>
        </li>


    </section>
    <!-- /.sidebar -->
  </aside>
<!-- AKHIR SIDE BAR YANG SEBELAH KIRI -->
