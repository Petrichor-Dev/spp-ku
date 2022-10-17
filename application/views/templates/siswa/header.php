<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Halaman Admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?= base_url()?>assets/lib/bootstrapV3/dist/css/bootstrap.min.css">
  <!-- <link rel="stylesheet" href="<?= base_url()?>assets/lib/bootstrapV4/css/bootsrap.min.css"> -->
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url()?>assets/lib/font-awesomeV4/css/font-awesome.min.css">

  <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url()?>assets/lib/datatables.net-bs/css/dataTables.bootstrap.min.css">

  <!-- Ionicons -->
  <link rel="stylesheet" href="<?= base_url()?>assets/lib/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url()?>assets/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?= base_url()?>assets/css/skins/_all-skins.min.css">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <style media="screen">
    @media (max-width:414px)
    {
      .hilang {
        display: none;
      }
    }
  </style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>SMK</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>SMKN</b> 1 BINJAI</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="
                    <?= base_url()?>assets/img/img_profiles/<?= $data[0]["gambar"];?>"
                   class="user-image"
                   alt="User Image">
              <span class="hidden-xs"><b><?= $data[0]["nama"];?></b></span>
            </a>
            <ul class="dropdown-menu">  
              <!-- User image -->
              <li class="user-header">
                <img src="<?= base_url()?>assets/img/img_profiles/<?= $data[0]["gambar"];?>" class="user-image" alt="User Image">

                <p style="display:block">
                <?= $data[0]["nama"];?> ~ <?= $data[0]["status"];?>
                  <small>Togather since Jun. 2017</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="pages/admin">Followers</a> <p><b>22</b></p>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Posts</a> <p><b>06</b></p>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a> <p><b>17</b></p>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?= base_url();?>auth/logout" class="btn btn-default">Logout</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <!-- <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li> -->
        </ul>
      </div>
    </nav>
  </header>
