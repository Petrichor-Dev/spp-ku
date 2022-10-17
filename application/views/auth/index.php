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
                    <p class="h5 text-gray-900 mb-4">Selamat Datang Siswa</p>
                  </div>

                  <?= $this->session->flashdata('pesan');?>
                  <?= $this->session->flashdata('passwordSalah');?>

                  <form class="user" method="post" action="">

                    <div class="form-group">
                      <input
                        type="text"
                        class="form-control form-control-user"
                        placeholder="Masukan NISN"
                        value="<?= set_value('nisn');?>"
                        autocomplete="off"
                        name="nisn"><?= form_error("nisn", "<small class='text-danger ml-3'><i>", "</i></small>");?>
                    </div>

                    <div class="row">
                    <div class="col-7 mx-auto">
                      <button type="submit" class="btn mx-auto btn-outline-primary btn-user btn-block" style="padding:5px 0 5px 0; width:80px;"><b>Masuk</b></button>
                    </div>

                  </div>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="<?= base_url()?>auth/petugas">
                      Masuk Sebagai Petugas/Admin ?
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
