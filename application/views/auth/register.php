<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Register Page</title>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url()?>assets/lib/font-awesomeV5/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= base_url()?>assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my- col-lg-5 mx-auto" style="margin-top:95px;">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          
          <div class="col-lg">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Daftarkan Akun Anda!</h1>
              </div>

              <form class="user" method="post">
                
                  <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Nama Lengkap" autocomplete="off" name="nama" value="<?= set_value('nama')?>">
                    <?= form_error("nama", "<small class='text-danger ml-3'><i>", "</i></small>");?>
                  </div>

                  <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Nomor Telpon | +62" value="<?= set_value('telpon')?>" autocomplete="off" name="telpon">
                    <?= form_error("telpon", "<small class='text-danger ml-3'>", "</small>");?>
                  </div>
                
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email" value="<?= set_value('email')?>" autocomplete="off" name="email">
                  <?= form_error("email", "<small class='text-danger ml-3'><i>", "</i></small>");?>
                </div>
                
                  <div class="form-group">
                    <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" autocomplete="off" name="password1">
                    <?= form_error("password1", "<small class='text-danger ml-3'><i>", "</i></small>");?>
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-user pr-1" id="exampleRepeatPassword" placeholder="Konfirmasi Password" autocomplete="off" name="password2"><?= form_error("password2", "<small class='text-danger ml-3'><i>", "</i></small>");?>
                  </div>
                  

                  <div class="row">
                    <div class="col-7 mx-auto">
                      <button type="submit" class="btn btn-outline-primary btn-user btn-block"><b>Registrasi Akun Anda</b></button> 
                    </div>
                  </div>
                
                         
              </form>
              <hr>

              <div class="text-center">
                <a class="small" href="<?= base_url()?>auth">Sudah punya akun ? Silahkan Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url()?>assets/lib/jquery/jquery.min.js"></script>
  <script src="<?= base_url()?>assets/lib/bootstrapV4/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url()?>assets/lib/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url()?>assets/js/sb-admin-2.min.js"></script>

</body>

</html>
