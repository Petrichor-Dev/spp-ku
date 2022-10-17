<?php
class Admin extends CI_Controller
{

  public function __construct()
  {
      parent::__construct();
      $this->load->database();
      $this->load->model('Admin_model');
      $this->load->library('form_validation');
  }

  public function index()
  {
    if ($this->session->userdata('id_level')&&$this->session->userdata("idPetugas"))
      {
        if ( $this->session->userdata('id_level') == 1 )
          {

              $data = 
                ["cont" => $this->uri->segment(1),
                 "method" => $this->uri->segment(2)
                ];
                $this->session->set_userdata($data);

              $idPetugas = $this->session->userdata("idPetugas");
              $id_level = $this->session->userdata("id_level");
              
              $resultHeader["data"] = $this->Admin_model->ambilSatuData("id_petugas", $idPetugas, "petugas");
              
              $resultIndex["data"] = $this->Admin_model->ambilSemuaData("id_level", $id_level, "petugas", null, null);

              $this->load->view('templates/admin/header', $resultHeader);
              $this->load->view('templates/admin/sidebar', $resultHeader);
              $this->load->view('admin/index', $resultIndex);
              $this->load->view('templates/admin/sidebarKanan');
              $this->load->view('templates/admin/footer');
          } else {

              $this->load->view('blank/index');

          }

      } else {
          redirect('auth/petugas');
          die;
      }
  }


  // method untuk mengedit data petugas
  public function edit_profile($id_level, $param)
  {
    if ($this->session->userdata('id_level') == 1)
      {

        $data = [
          "cont" => $this->uri->segment(1),
          "method" => $this->uri->segment(2)
          ];
        $this->session->set_userdata($data);

        
        switch ($id_level) {

          //JIKA ADMIN
          case 1:

              $idPetugas = $this->session->userdata("idPetugas");
              $resultHeader["data"] = $this->Admin_model->ambilSatuData("id_petugas", $idPetugas, "petugas");

              $resultIndex["data"] = $this->Admin_model->ambilSatuData("id_petugas", $param, "petugas");


              #form form_validation
              $this->form_validation->set_rules("username", "Username",
                "required|trim|alpha_numeric|min_length[6]|max_length[14]",

                ["required" => "Isi username terlebih dahulu",
                 "alpha_numeric" => "Username hanya boleh berupa angka dan huruf",
                 "min_length" => "Username minimal 6 karakter",
                 "max_length" => "Username maksimal 14 karakter"]
                );

              $this->form_validation->set_rules("namaAdmin", "NamaAdmin",
                "required|trim|alpha_numeric_spaces|min_length[3]|max_length[50]",

                ["required" => "Isi nama admin terlebih dahulu",
                 "alpha_numeric_spaces" => "hanya boleh mengandung huruf",
                 "min_length" => "Nama minimal 3 karakter",
                 "max_length" => "Nama maksimal 50 karakter"]
                );

              $this->form_validation->set_rules("password", "Password",
                "required|trim|min_length[7]",

                ["required" => "Isi password terlebih dahulu",
                "min_length" => "Nama minimal 7 karakter"]
              );

              $this->form_validation->set_rules("kodeAdmin", "KodeAdmin",
                "required|trim|alpha|min_length[2]|max_length[4]",

                ["required" => "Isi kode Admin terlebih dahulu",
                "min_length" => "Nama minimal 2 karakter",
                "max_length" => "Nama maksimal 4 karakter",
                "alpha" => "Hanya boleh menginputkan huruf"]
              );


              if ( $this->form_validation->run() == false )
              {
                $this->load->view('templates/admin/header', $resultHeader);
                $this->load->view('templates/admin/sidebar', $resultHeader);
                $this->load->view('admin/edit', $resultIndex);
                $this->load->view('templates/admin/sidebarKanan');
                $this->load->view('templates/admin/footer');
              }

              else
              {
                $this->Admin_model->formEdit_model($id_level, $param);
              }
            break;
          

            //JIKA PETUGAS
            case 2:
              $idPetugas = $this->session->userdata("idPetugas");
              $resultHeader["data"] = $this->Admin_model->ambilSatuData("id_petugas", $idPetugas, "petugas");

              $resultIndex["data"] = $this->Admin_model->ambilSatuData("id_petugas", $param, "petugas");


              #form form_validation
              $this->form_validation->set_rules("username", "Username",
                "required|trim|alpha_numeric|min_length[6]|max_length[14]",

                ["required" => "Isi username terlebih dahulu",
                 "alpha_numeric" => "Username hanya boleh berupa angka dan huruf",
                 "min_length" => "Username minimal 6 karakter",
                 "max_length" => "Username maksimal 14 karakter"]
                );

              $this->form_validation->set_rules("namaAdmin", "NamaAdmin",
                "required|trim|alpha_numeric_spaces|min_length[3]|max_length[50]",

                ["required" => "Isi nama admin terlebih dahulu",
                 "alpha_numeric_spaces" => "hanya boleh mengandung huruf",
                 "min_length" => "Nama minimal 3 karakter",
                 "max_length" => "Nama maksimal 50 karakter"]
                );

              // $this->form_validation->set_rules("password", "Password",
              //   "required|trim|min_length[7]",

              //   ["required" => "Isi password terlebih dahulu",
              //   "min_length" => "Nama minimal 7 karakter"]
              // );

              $this->form_validation->set_rules("kodeAdmin", "KodeAdmin",
                "required|trim|alpha|min_length[2]|max_length[4]",

                ["required" => "Isi kode Admin terlebih dahulu",
                "min_length" => "Nama minimal 2 karakter",
                "max_length" => "Nama maksimal 4 karakter",
                "alpha" => "Hanya boleh menginputkan huruf"]
              );


              if ( $this->form_validation->run() == false )
              {
                $this->load->view('templates/admin/header', $resultHeader);
                $this->load->view('templates/admin/sidebar', $resultHeader);
                $this->load->view('admin/edit', $resultIndex);
                $this->load->view('templates/admin/sidebarKanan');
                $this->load->view('templates/admin/footer');
              }

              else
              {
                $this->Admin_model->formEdit_model($id_level, $param);
              }
            break;


            //JIKA SISWA
            case 3:
              $idPetugas = $this->session->userdata("idPetugas");
              $resultHeader["data"] = $this->Admin_model->ambilSatuData("id_petugas", $idPetugas, "petugas");

              $resultIndex["siswa"] = $this->Admin_model->ambilSatuData("nisn", $param, "siswa");
              $resultIndex["jurusan"] = $this->Admin_model->ambilSemuaData(null, null, "kelas", null, null);
              $resultIndex["spp"] = $this->Admin_model->ambilSemuaData(null, null, "spp", null, null);

              #form form_validation
              $this->form_validation->set_rules("nama_siswa", "Nama_siswa",
                "required|trim|alpha_numeric_spaces|min_length[2]|max_length[30]",

                ["required" => "Nama siswa wajib di isi",
                 "alpha_numeric_spaces" => "Nama tidak boleh mengandung angka",
                 "min_length" => "Nama siswa mininal 2 huruf",
                 "max_length" => "Nama siswa maksimal 30 huruf"]
                );

              $this->form_validation->set_rules("nisn", "Nisn",
                "required|trim|numeric|min_length[10]|max_length[10]",

                ["required" => "Nisn wajib di isi",
                 "numeric" => "Pastikan inputan anda hanya berupa angka",
                 "min_length" => "NISN minimal 10 digit",
                 "max_length" => "NISN maksimal 10 digit"]
                );

                $this->form_validation->set_rules("nis", "Nis",
                "required|trim|numeric|min_length[8]|max_length[8]",

                ["required" => "Nis wajib di isi",
                 "numeric" => "Pastikan inputan anda hanya berupa angka",
                 "min_length" => "NIS minimal 8 digit",
                 "max_length" => "NIS maksimal 8 digit"]
                );

              $this->form_validation->set_rules("kelas", "Kelas",
                "required|trim",

                ["required" => "Isi kelas dan jurusan terlebih dahulu"]
              );

              $this->form_validation->set_rules("alamat", "Alamat",
                "required|trim|min_length[10]|max_length[100]",

                ["required" => "Alamat rumah wajib di isi",
                "min_length" => "Tuliskan alamat lengkap anda",
                "max_length" => "Jumlah karakter terlalu banyak"
                ]
              );

              $this->form_validation->set_rules("nomor_telpon", "Nomor_telpon",
                "required|trim|numeric|min_length[10]|max_length[12]",

                ["required" => "Nomor telpon wajib di isi",
                 "numeric" => "Pastikan inputan anda hanya berupa angka",
                 "min_length" => "Nomor telpon minimal 10 digit",
                 "max_length" => "Nomor telpon maksimal 12 digit"]
                );

              $this->form_validation->set_rules("spp", "Spp",
                "required|trim",

                ["required" => "Nominal SPP wajid di isi"]
                );

              
              if ( $this->form_validation->run() == false )
              {
                $this->load->view('templates/admin/header', $resultHeader);
                $this->load->view('templates/admin/sidebar', $resultHeader);
                $this->load->view('admin/editSiswa', $resultIndex);
                $this->load->view('templates/admin/sidebarKanan');
                $this->load->view('templates/admin/footer');
                // var_dump($resultIndex["data"]);

              } else {
                $this->Admin_model->formEdit_model($id_level, $param);
              }


            break;

            case 4:
              $data = [
                "cont" => $this->uri->segment(1),
                "method" => $this->uri->segment(2)
                ];
                $this->session->set_userdata($data);
  
                $idPetugas = $this->session->userdata("idPetugas");
                $resultHeader["data"] = $this->Admin_model->ambilSatuData("id_petugas", $idPetugas, "petugas");
  
                $result["jurusan"] = $this->Admin_model->ambilSatuData("id_kelas", $param, "kelas");
                $result["kelas"] = $this->Admin_model->ambilSemuaData(null, null, "kelas", null, null);
  
                #form form_validation
                $this->form_validation->set_rules("jurusan", "Jurusan",
                  "required|trim|alpha_numeric_spaces|min_length[4]|max_length[50]",
  
                  ["required" => "Nama jurusan wajib di isi",
                   "alpha_numeric_spaces" => "Nama tidak boleh mengandung angka",
                   "min_length" => "Nama jurusan mininal 4 huruf",
                   "max_length" => "Nama jurusan maksimal 50 huruf"]
                  );
  
                $this->form_validation->set_rules("kelas", "Kelas",
                  "required|trim",
  
                  ["required" => "Kelas wajib di isi"]
                  );
  
                  $this->form_validation->set_rules("kode", "Kode",
                  "required|trim|alpha|min_length[2]|max_length[5]",
  
                  ["required" => "Kode jurusan wajib di isi",
                   "alpha" => "Hanya menginputkan huruf",
                   "min_length" => "Kode jurusan minimal 2 digit",
                   "max_length" => "Kode jurusan maksimal 5 digit"]
                  );
  
                
                if ( $this->form_validation->run() == false )
                {
                  $this->load->view('templates/admin/header', $resultHeader);
                  $this->load->view('templates/admin/sidebar', $resultHeader);
                  $this->load->view('admin/editKelas', $result);
                  $this->load->view('templates/admin/sidebarKanan');
                  $this->load->view('templates/admin/footer');
  
                } else {
                  $this->Admin_model->formEdit_model(4, $param);
                }
              break;

              case 5:
                $data = [
                  "cont" => $this->uri->segment(1),
                  "method" => $this->uri->segment(2)
                  ];
                  $this->session->set_userdata($data);
    
                  $idPetugas = $this->session->userdata("idPetugas");
                  $resultHeader["data"] = $this->Admin_model->ambilSatuData("id_petugas", $idPetugas, "petugas");
    
                  $result["spp"] = $this->Admin_model->ambilSatuData("id_spp", $param, "spp");
    
                  #form form_validation
                  $this->form_validation->set_rules("spp", "Spp",
                    "required|trim|numeric|min_length[5]|max_length[8]",
    
                    ["required" => "Spp wajib di isi",
                     "numeric" => "Hanya boleh menginputkan angka",
                     "min_length" => "Nominal tidak boleh kurang dari Rp 10.000,-",
                     "max_length" => "Nominal tidak boleh lebih dari Rp 10juta,-"]
                    );
    
                  
                  if ( $this->form_validation->run() == false )
                  {
                    $this->load->view('templates/admin/header', $resultHeader);
                    $this->load->view('templates/admin/sidebar', $resultHeader);
                    $this->load->view('admin/editSpp', $result);
                    $this->load->view('templates/admin/sidebarKanan');
                    $this->load->view('templates/admin/footer');
    
                  } else {
                    $this->Admin_model->formEdit_model(5, $param);
                  }
                break;
           
        }

      } else
      {
          redirect('auth/petugas');
          die;
      }
  }


  //result semua data petugas
  public function p()
  {

      if ($this->session->userdata('idPetugas')&&$this->session->userdata('id_level'))
      {
          if ( $this->session->userdata('id_level') == 1 )
          {

              $data = [
                  "cont" => $this->uri->segment(1),
                  "method" => $this->uri->segment(2)
                ];

              $this->session->set_userdata($data);

              $idPetugas = $this->session->userdata("idPetugas");
              $id_level = 2;

              $resultHeader["data"] = $this->Admin_model->ambilSatuData("id_petugas", $idPetugas, "petugas");

              $resultIndex["data"] = $this->Admin_model->ambilSemuaData("id_level", $id_level, "petugas", null, null);

              $this->load->view('templates/admin/header', $resultHeader);
              $this->load->view('templates/admin/sidebar', $resultHeader);
              $this->load->view('admin/resultPetugas', $resultIndex);
              $this->load->view('templates/admin/sidebarKanan');
              $this->load->view('templates/admin/footer');
          } else {

              $this->load->view('blank/index');

          }

      } else {
          redirect('auth/petugas');
          die;
      }
  }




  public function s()
  {

      if ($this->session->userdata('idPetugas')&&$this->session->userdata('id_level'))
      {
          if ( $this->session->userdata('id_level') == 1 )
          {

              $data = [
                  "cont" => $this->uri->segment(1),
                  "method" => $this->uri->segment(2)
                ];

              $this->session->set_userdata($data);

              $idPetugas = $this->session->userdata("idPetugas");
              $id_level = 3;

              $resultHeader["data"] = $this->Admin_model->ambilSatuData("id_petugas", $idPetugas, "petugas");

              $resultIndex["data"] = $this->Admin_model->ambilSemuaData(null, null, "siswa", null, null);

              $this->load->view('templates/admin/header', $resultHeader);
              $this->load->view('templates/admin/sidebar', $resultHeader);
              $this->load->view('admin/resultSiswa', $resultIndex);
              $this->load->view('templates/admin/sidebarKanan');
          } else {

              $this->load->view('blank/index');

          }

      } else {
          redirect('auth/petugas');
          die;
      }
  }


  public function k()
  {

      if ($this->session->userdata('idPetugas')&&$this->session->userdata('id_level'))
      {
          if ( $this->session->userdata('id_level') == 1 )
          {

              $data = [
                  "cont" => $this->uri->segment(1),
                  "method" => $this->uri->segment(2)
                ];

              $this->session->set_userdata($data);

              $idPetugas = $this->session->userdata("idPetugas");
              $id_level = 3;

              $resultHeader["data"] = $this->Admin_model->ambilSatuData("id_petugas", $idPetugas, "petugas");

              $resultIndex["data"] = $this->Admin_model->ambilSemuaData(null, null, "kelas", "tingkatan_kelas", "ASC");

              $this->load->view('templates/admin/header', $resultHeader);
              $this->load->view('templates/admin/sidebar', $resultHeader);
              $this->load->view('admin/resultKelas', $resultIndex);
              $this->load->view('templates/admin/sidebarKanan');
              $this->load->view('templates/admin/footer');
          } else {

              $this->load->view('blank/index');

          }

      } else {
          redirect('auth/petugas');
          die;
      }
  }


  public function spp()
  {

      if ($this->session->userdata('idPetugas')&&$this->session->userdata('id_level'))
      {
          if ( $this->session->userdata('id_level') == 1 )
          {

              $data = [
                  "cont" => $this->uri->segment(1),
                  "method" => $this->uri->segment(2)
                ];

              $this->session->set_userdata($data);

              $idPetugas = $this->session->userdata("idPetugas");
              $id_level = 3;

              $resultHeader["data"] = $this->Admin_model->ambilSatuData("id_petugas", $idPetugas, "petugas");

              $resultIndex["data"] = $this->Admin_model->ambilSemuaData(null, null, "spp", "nominal/bulan", "ASC");

              $this->load->view('templates/admin/header', $resultHeader);
              $this->load->view('templates/admin/sidebar', $resultHeader);
              $this->load->view('admin/resultSpp', $resultIndex);
              $this->load->view('templates/admin/sidebarKanan');
              $this->load->view('templates/admin/footer');
          } else {

              $this->load->view('blank/index');

          }

      } else {
          redirect('auth/petugas');
          die;
      }
  }



  public function tambah($id_level)
  {
    if ($this->session->userdata('id_level') == 1)
      {
        
        switch ($id_level) {
          case 2:

            $data = [
              "cont" => $this->uri->segment(1),
              "method" => $this->uri->segment(2)
              ];
              $this->session->set_userdata($data);

              $idPetugas = $this->session->userdata("idPetugas");
              $resultHeader["data"] = $this->Admin_model->ambilSatuData("id_petugas", $idPetugas, "petugas");


              #form form_validation
              $this->form_validation->set_rules("username", "Username",
                "required|trim|alpha_dash|min_length[6]|max_length[14]",

                ["required" => "Isi username terlebih dahulu",
                 "alpha_dash" => "Username hanya boleh berupa angka dan huruf",
                 "min_length" => "Username minimal 6 karakter",
                 "max_length" => "Username maksimal 14 karakter"]
                );

              $this->form_validation->set_rules("namaAdmin", "NamaAdmin",
                "required|trim|alpha_numeric_spaces|min_length[3]|max_length[50]",

                ["required" => "Isi nama admin terlebih dahulu",
                 "alpha_numeric_spaces" => "hanya boleh berupa huruf",
                 "min_length" => "Nama minimal 3 karakter",
                 "max_length" => "Nama maksimal 50 karakter"]
                );

              $this->form_validation->set_rules("password", "Password",
                "required|trim|min_length[7]",

                ["required" => "Isi password terlebih dahulu",
                "min_length" => "Nama minimal 7 karakter"]
              );

              $this->form_validation->set_rules("kodeAdmin", "KodeAdmin",
                "required|trim|alpha|min_length[2]|max_length[4]",

                ["required" => "Isi kode Admin terlebih dahulu",
                "min_length" => "Nama minimal 2 karakter",
                "max_length" => "Nama maksimal 4 karakter",
                "alpha" => "Hanya boleh menginputkan huruf"]
              );


              if ( $this->form_validation->run() == false )
              {
                $this->load->view('templates/admin/header', $resultHeader);
                $this->load->view('templates/admin/sidebar', $resultHeader);
                $this->load->view('admin/tambah');
                $this->load->view('templates/admin/sidebarKanan');
                $this->load->view('templates/admin/footer');

              } else {
                $this->Admin_model->formTambah_model(2);
              }


            break;
          

            // JIKA SISWA YANG MENAMBAHKAN DATA
            case 3:
            
            $data = [
              "cont" => $this->uri->segment(1),
              "method" => $this->uri->segment(2)
              ];
              $this->session->set_userdata($data);

              $idPetugas = $this->session->userdata("idPetugas");
              $resultHeader["data"] = $this->Admin_model->ambilSatuData("id_petugas", $idPetugas, "petugas");

              $result["jurusan"] = $this->Admin_model->ambilSemuaData(null, null, "kelas", null, null);
              $result["spp"] = $this->Admin_model->ambilSemuaData(null, null, "spp", null, null);

              #form form_validation
              $this->form_validation->set_rules("nama_siswa", "Nama_siswa",
                "required|trim|alpha_numeric_spaces|min_length[2]|max_length[30]",

                ["required" => "Nama siswa wajib di isi",
                 "alpha_numeric_spaces" => "Nama tidak boleh mengandung angka",
                 "min_length" => "Nama siswa mininal 2 huruf",
                 "max_length" => "Nama siswa maksimal 30 huruf"]
                );

              $this->form_validation->set_rules("nisn", "Nisn",
                "required|trim|numeric|min_length[10]|max_length[10]",

                ["required" => "Nisn wajib di isi",
                 "numeric" => "Pastikan inputan anda hanya berupa angka",
                 "min_length" => "NISN minimal 10 digit",
                 "max_length" => "NISN maksimal 10 digit"]
                );

                $this->form_validation->set_rules("nis", "Nis",
                "required|trim|numeric|min_length[8]|max_length[8]",

                ["required" => "Nis wajib di isi",
                 "numeric" => "Pastikan inputan anda hanya berupa angka",
                 "min_length" => "NIS minimal 8 digit",
                 "max_length" => "NIS maksimal 8 digit"]
                );

              $this->form_validation->set_rules("kelas", "Kelas",
                "required|trim",

                ["required" => "Isi kelas dan jurusan terlebih dahulu"]
              );

              $this->form_validation->set_rules("alamat", "Alamat",
                "required|trim|min_length[10]|max_length[100]",

                ["required" => "Alamat rumah wajib di isi",
                "min_length" => "Tuliskan alamat lengkap anda",
                "max_length" => "Jumlah karakter terlalu banyak"
                ]
              );

              $this->form_validation->set_rules("nomor_telpon", "Nomor_telpon",
                "required|trim|numeric|min_length[10]|max_length[12]",

                ["required" => "Nomor telpon wajib di isi",
                 "numeric" => "Pastikan inputan anda hanya berupa angka",
                 "min_length" => "Nomor telpon minimal 10 digit",
                 "max_length" => "Nomor telpon maksimal 12 digit"]
                );

              $this->form_validation->set_rules("spp", "Spp",
                "required|trim",

                ["required" => "Nominal SPP wajid di isi"]
                );

              
              if ( $this->form_validation->run() == false )
              {
                $this->load->view('templates/admin/header', $resultHeader);
                $this->load->view('templates/admin/sidebar', $resultHeader);
                $this->load->view('admin/tambahSiswa', $result);
                $this->load->view('templates/admin/sidebarKanan');
                $this->load->view('templates/admin/footer');

              } else {
                $this->Admin_model->formTambah_model(3);
              }

            break;

          case 4:
            $data = [
              "cont" => $this->uri->segment(1),
              "method" => $this->uri->segment(2)
              ];
              $this->session->set_userdata($data);

              $idPetugas = $this->session->userdata("idPetugas");
              $resultHeader["data"] = $this->Admin_model->ambilSatuData("id_petugas", $idPetugas, "petugas");

              $result["jurusan"] = $this->Admin_model->ambilSemuaData(null, null, "kelas", null, null);

              #form form_validation
              $this->form_validation->set_rules("jurusan", "Jurusan",
                "required|trim|alpha_numeric_spaces|min_length[4]|max_length[50]",

                ["required" => "Nama jurusan wajib di isi",
                 "alpha_numeric_spaces" => "Nama tidak boleh mengandung angka",
                 "min_length" => "Nama jurusan mininal 4 huruf",
                 "max_length" => "Nama jurusan maksimal 50 huruf"]
                );

              $this->form_validation->set_rules("kelas", "Kelas",
                "required|trim",

                ["required" => "Kelas wajib di isi"]
                );

                $this->form_validation->set_rules("kode", "Kode",
                "required|trim|alpha|min_length[2]|max_length[5]",

                ["required" => "Kode jurusan wajib di isi",
                 "alpha" => "Hanya menginputkan huruf",
                 "min_length" => "Kode jurusan minimal 2 digit",
                 "max_length" => "Kode jurusan maksimal 5 digit"]
                );

              
              if ( $this->form_validation->run() == false )
              {
                $this->load->view('templates/admin/header', $resultHeader);
                $this->load->view('templates/admin/sidebar', $resultHeader);
                $this->load->view('admin/tambahKelas', $result);
                $this->load->view('templates/admin/sidebarKanan');
                $this->load->view('templates/admin/footer');

              } else {
                $this->Admin_model->formTambah_model(4);
              }
            break;

          case "spp":
            $data = [
              "cont" => $this->uri->segment(1),
              "method" => $this->uri->segment(2)
              ];
              $this->session->set_userdata($data);

              $idPetugas = $this->session->userdata("idPetugas");
              $resultHeader["data"] = $this->Admin_model->ambilSatuData("id_petugas", $idPetugas, "petugas");

              $result["jurusan"] = $this->Admin_model->ambilSemuaData(null, null, "kelas", null, null);

              #form form_validation
              $this->form_validation->set_rules("spp", "Spp",
                "required|trim|numeric|min_length[5]|max_length[8]",

                ["required" => "Spp wajib di isi",
                 "numeric" => "Hanya boleh menginputkan angka",
                 "min_length" => "Nominal tidak boleh kurang dari Rp 10.000,-",
                 "max_length" => "Nominal tidak boleh lebih dari Rp 10juta,-"]
                );

              
              if ( $this->form_validation->run() == false )
              {
                $this->load->view('templates/admin/header', $resultHeader);
                $this->load->view('templates/admin/sidebar', $resultHeader);
                $this->load->view('admin/tambahSpp', $result);
                $this->load->view('templates/admin/sidebarKanan');
                $this->load->view('templates/admin/footer');

              } else {
                $this->Admin_model->formTambah_model(5);
              }
            break;
        }

      } else
      {
          redirect('auth/petugas');
          die;
      }
  }


  // method untuk menghapus data petugas
  public function hapus($id_level, $param)
  {
      if ($this->session->userdata('id_level'))
        {
          if ( $this->session->userdata('id_level') == 1 )
            {

              $data = [
                "cont" => $this->uri->segment(1),
                "method" => $this->uri->segment(2)
                ];
                $this->session->set_userdata($data);

                switch ($id_level) {
                  case 2:
                    $this->Admin_model->hapusPetugas_model($id_level, $param);
                    break;
                  
                  case 3:
                    $this->Admin_model->hapusPetugas_model($id_level, $param);
                    break;

                  case 4:
                    $this->Admin_model->hapusPetugas_model($id_level, $param);
                    break;
                  case 5:
                    $this->Admin_model->hapusPetugas_model($id_level, $param);
                    break;
                }
            } else
            {
                $this->load->view('blank/index');
            }

        } else
        {
            redirect('auth/petugas');
            die;
        }
    }

  
    public function select_kelas()
    {
  
        if ($this->session->userdata('idPetugas')&&$this->session->userdata('id_level'))
        {
            if ( $this->session->userdata('id_level') == 1 || $this->session->userdata('id_level') == 2 )
            {
  
                $data = [
                    "cont" => $this->uri->segment(1),
                    "method" => $this->uri->segment(2)
                  ];
  
                $this->session->set_userdata($data);
  
                $idPetugas = $this->session->userdata("idPetugas");
                $id_level = 3;
  
                $resultHeader["data"] = $this->Admin_model->ambilSatuData("id_petugas", $idPetugas, "petugas");
  
                $resultIndex["data"] = $this->Admin_model->ambilSemuaData(null, null, "kelas", "tingkatan_kelas", "ASC");
  
                $this->load->view('templates/admin/header', $resultHeader);

                //CEK TERLEBIH DAHULU SIAPA YANG LOGIN
              switch ($this->session->userdata('id_level')) {
                case 1:
                  $this->load->view('templates/admin/sidebar', $resultHeader);
                  break;

                case 2:
                  $this->load->view('templates/petugas/sidebar', $resultHeader);
                  break;
              }
                $this->load->view('admin/select_kelas', $resultIndex);
                $this->load->view('templates/admin/sidebarKanan');
                $this->load->view('templates/admin/footer');
            } else {
  
                $this->load->view('blank/index');
  
            }
  
        } else {
            redirect('auth/petugas');
            die;
        }
    }


  public function select_siswa($id_kelas)
  {

      if ($this->session->userdata('idPetugas')&&$this->session->userdata('id_level'))
      {
          if ( $this->session->userdata('id_level') == 1 || $this->session->userdata('id_level') == 2 )
          {

            $data = [
                  "cont" => $this->uri->segment(1),
                  "method" => $this->uri->segment(2)
                ];

              $this->session->set_userdata($data);

              $idPetugas = $this->session->userdata("idPetugas");
              

              $resultHeader["data"] = $this->Admin_model->ambilSatuData("id_petugas", $idPetugas, "petugas");

              $resultIndex["jurusan"] = $this->Admin_model->ambilSemuaData(null, null, "kelas", "tingkatan_kelas", "ASC");

              $id_kelas2 = $this->input->post("kelas", true);
              if(empty($id_kelas2))
              {

                $resultIndex["data"] = $this->Admin_model->ambilSemuaData("id_kelas", $id_kelas, "siswa", "nama", "ASC");
              } else {

                $resultIndex["data"] = $this->Admin_model->ambilSemuaData("id_kelas", $id_kelas2, "siswa", "nama", "ASC");
              }

              $this->load->view('templates/admin/header', $resultHeader);
              
              //CEK TERLEBIH DAHULU SIAPA YANG LOGIN
              switch ($this->session->userdata('id_level')) {
                case 1:
                  $this->load->view('templates/admin/sidebar', $resultHeader);
                  break;

                case 2:
                  $this->load->view('templates/petugas/sidebar', $resultHeader);
                  break;
              }

              $this->load->view("templates/header_siswa/index", $resultIndex);
              $this->load->view('admin/select_siswa', $resultIndex);
              $this->load->view('templates/admin/sidebarKanan');
              $this->load->view('templates/admin/footer');
          } else {

              $this->load->view('blank/index');

          }

      } else {
          redirect('auth/petugas');
          die;
      }
  }

  public function transaksi($id_spp, $nisn)
  {
    if ($this->session->userdata('id_level') == 1 || $this->session->userdata('id_level') == 2)
      {
        
        $data = [
          "cont" => $this->uri->segment(1),
          "method" => $this->uri->segment(2)
          ];
          $this->session->set_userdata($data);

        $idPetugas = $this->session->userdata("idPetugas");

        $resultHeader["data"] = $this->Admin_model->ambilSatuData("id_petugas", $idPetugas, "petugas");

        $idPetugas = $this->session->userdata("idPetugas");
        $resultHeader["data"] = $this->Admin_model->ambilSatuData("id_petugas", $idPetugas, "petugas");

        $back = $this->db->get_where("siswa", ["nisn" => $nisn])->result_array();
        
        $result = $this->db->get_where("pembayaran", ["nisn" => $nisn])->result_array();

        $tunggakan = array_sum($this->Admin_model->array_column_ext($result,'tengat_waktu'));

        if($tunggakan > 12 || $tunggakan == 12)
        {
          
          $this->session->set_flashdata('pesan', "<h4 style='display:inline-block; margin-left:30%;' class='text-success'>Siswa atas nama <b>" . $back[0]["nama"] . "</b> telah melunasi pembayaran SPP</telah></h4>");
          redirect("admin/select_siswa/" . $back[0]["id_kelas"]);
        } else {

        $result["spp"] = $this->Admin_model->ambilSemuaData("id_spp", $id_spp, "spp", null, null);

        $result["siswa"] = $this->Admin_model->ambilSemuaData("nisn", $nisn, "siswa", null, null);

        $result["lunas"] = $tunggakan;


          $this->form_validation->set_rules("tengatWaktu", "TengatWaktu",
          "required",

          ["required" => "Tengat waktu wajib di isi"]
          );

        
        if ( $this->form_validation->run() == false )
        {
          $this->load->view('templates/admin/header', $resultHeader);
          
          //CEK TERLEBIH DAHULU SIAPA YANG LOGIN
          switch ($this->session->userdata('id_level')) {
            case 1:
              $this->load->view('templates/admin/sidebar', $resultHeader);
              break;

            case 2:
              $this->load->view('templates/petugas/sidebar', $resultHeader);
              break;
          }

          $this->load->view('admin/transaksi', $result);
          $this->load->view('templates/admin/sidebarKanan');
          $this->load->view('templates/admin/footer');

        } else {
          $this->Admin_model->transaksi();
        }

        }
          
      }
      else
      {
      redirect('auth/petugas');
      die;
      }
  }


  public function history($nisn)
  {

      if ($this->session->userdata('idPetugas')&&$this->session->userdata('id_level'))
      {
        if ( $this->session->userdata('id_level') == 1 || $this->session->userdata('id_level') == 2 || $this->session->userdata('id_level') == 3 )
          {

            $data = [
                  "cont" => $this->uri->segment(1),
                  "method" => $this->uri->segment(2)
                ];

              $this->session->set_userdata($data);

              $idPetugas = $this->session->userdata("idPetugas");
              

              $resultHeader["data"] = $this->Admin_model->ambilSatuData("id_petugas", $idPetugas, "petugas");

              //DATA PEMBAYARAN
              $resultIndex["pembayaran"] = $this->Admin_model->ambilSemuaData("nisn", $nisn, "pembayaran", null, null);

              
              //DATA SISWA
              $resultIndex["siswa"] = $this->Admin_model->ambilSemuaData("nisn", $nisn, "siswa", null, null);

              //DATA TUNGGAKAN
              $result = $this->db->get_where("pembayaran", ["nisn" => $nisn])->result_array();

              $resultIndex["tunggakan"] = array_sum($this->Admin_model->array_column_ext($result,'tengat_waktu'));

              $this->load->view('templates/admin/header', $resultHeader);

              //CEK TERLEBIH DAHULU SIAPA YANG LOGIN
              switch ($this->session->userdata('id_level')) {
                case 1:
                  $this->load->view('templates/admin/sidebar', $resultHeader);
                  break;

                case 2:
                  $this->load->view('templates/petugas/sidebar', $resultHeader);
                  break;
                
                case 3:
                  $this->load->view('templates/siswa/sidebar', $resultHeader);
                  break;
              }
              $this->load->view('admin/history', $resultIndex);
              $this->load->view('templates/admin/sidebarKanan');
              $this->load->view('templates/admin/footer');
          } else {

              $this->load->view('blank/index');

          }

      } else {
          redirect('auth/petugas');
          die;
      }
  }


  
  public function laporan($nisn)
  {

      if ($this->session->userdata('idPetugas')&&$this->session->userdata('id_level'))
      {
        if ( $this->session->userdata('id_level') == 1 || $this->session->userdata('id_level') == 2 || $this->session->userdata('id_level') == 3 )
          {

            $data = [
                  "cont" => $this->uri->segment(1),
                  "method" => $this->uri->segment(2)
                ];

              $this->session->set_userdata($data);

              $idPetugas = $this->session->userdata("idPetugas");
              

              $resultHeader["data"] = $this->Admin_model->ambilSatuData("id_petugas", $idPetugas, "petugas");

              //DATA PEMBAYARAN
              $resultIndex["pembayaran"] = $this->Admin_model->ambilSemuaData("nisn", $nisn, "pembayaran", null, null);

              
              //DATA SISWA
              $resultIndex["siswa"] = $this->Admin_model->ambilSemuaData("nisn", $nisn, "siswa", null, null);

              //DATA TUNGGAKAN
              $result = $this->db->get_where("pembayaran", ["nisn" => $nisn])->result_array();

              $resultIndex["tunggakan"] = array_sum($this->Admin_model->array_column_ext($result,'tengat_waktu'));

              $this->load->view('templates/admin/header', $resultHeader);

              //CEK TERLEBIH DAHULU SIAPA YANG LOGIN
              switch ($this->session->userdata('id_level')) {
                case 1:
                  $this->load->view('templates/admin/sidebar', $resultHeader);
                  break;

                case 2:
                  $this->load->view('templates/petugas/sidebar', $resultHeader);
                  break;
                
                case 3:
                  $this->load->view('templates/siswa/sidebar', $resultHeader);
                  break;
              }
              $this->load->view('admin/history', $resultIndex);
              $this->load->view('templates/admin/sidebarKanan');
              $this->load->view('templates/admin/footer');
          } else {

              $this->load->view('blank/index');

          }

      } else {
          redirect('auth/petugas');
          die;
      }
  }

  // "SELECT siswa.nama , spp.tahun FROM siswa INNER JOIN spp ON siswa.id_spp = spp.id_spp WHERE spp.status LIKE 'lunas' AND spp.bulan LIKE 'maret'";



  




  






  // method untuk mengubah petugas menjadi admin
  // public function jadikanPetugas($param)
  // {
  //   if ($this->session->userdata('id_level'))
  //     {
  //       if ( $this->session->userdata('id_level') == 1 )
  //         {

  //           $data = [
  //             "cont" => $this->uri->segment(1),
  //             "method" => $this->uri->segment(2)
  //             ];
  //             $this->session->set_userdata($data);

  //             $this->Admin_model->jadikanPetugas_model($param);
  //         } else {

  //             $this->load->view('blank/index');

  //         }

  //     } else {
  //         redirect('auth/petugas');
  //         die;
  //     }
  // }

  


  


  












































}
