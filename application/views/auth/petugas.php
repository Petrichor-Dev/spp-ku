<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login Page</title>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url()?>assets/lib/font-awesomeV5/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= base_url()?>assets/css/auth/sb-admin-2.min.css" rel="stylesheet">
  <style media="screen">
    .container {
      margin-top: 120px;

    }

    @media (max-width: 414px) {
      .garis{
        display: none;
      }

      .small {
        display: block;
      }
    }
  </style>

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-lg-5">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">

              <div class="col-lg">
                <div class="p-5">
                  <div class="text-center">
                    <p class="h5 text-gray-900 mb-4">Silahkan Login</p>
                  </div>

                  <?= $this->session->flashdata('pesan');?>
                  <?= $this->session->flashdata('sandiSalah');?>

                  <form class="user" method="post" action="">

                    <div class="form-group">
                      <input type="text"
                             class="form-control form-control-user"
                             placeholder="Username"
                             value="<?= set_value('username');?>"
                             autocomplete="off"
                             name="username"><?= form_error("username", "<small class='text-danger ml-3'><i>", "</i></small>");?>
                    </div>

                    <div class="form-group">
                      <input type="password"
                             class="form-control form-control-user"
                             placeholder="Password"
                             value="<?= set_value('password');?>"
                             autocomplete="off"
                             name="password"><?= form_error("password", "<small class='text-danger ml-3'><i>", "</i></small>");?>
                    </div>

                    <!-- <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" name="rememberMe" autocomplete="off" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember Me ?</label>
                      </div>
                    </div> -->

                    <div class="row">
                    <div class="col-7 mx-auto">
                      <button type="submit" class="btn mx-auto btn-outline-primary btn-user btn-block" style="padding:5px 0 5px 0; width:80px;"><b>Masuk</b></button>
                    </div>

                  </div>
                  </form>
                  <hr>
                  <div class="text-center">
                    <!-- <a class="small" href="<?= base_url()?>auth">
                      Masuk Sebagai Siswa ?
                    </a>

                    <span class="garis" style="color:#2b52c4; margin: 0 5px;">|</span> -->

                    <a class="small" href="<?= base_url()?>auth">
                      Kembali ke Login Siswa ?
                    </a>
                  </div>


                </div>
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
