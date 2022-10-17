<?php

class Admin_model extends CI_Model
{

  //UNTUK MENGAMBIL DATA UNTUK SATU KOLOM
  public function ambilSatuData($selec, $param, $tabel)
  {
    return $this->db->get_where($tabel, [$selec => $param])->result_array();
  }

  // UNTUK MENGAMBIL SEMUA DATA PETUGAS
  // nama variabel $aod di ambil dari ASC or DESC 
  public function ambilSemuaData($selec, $param, $tabel, $urut, $aod)
  {
    if (empty($param) && empty($select)) {
      $this->db->order_by($urut, $aod);
      return $this->db->get($tabel)->result_array();
    } else {
      $this->db->order_by($urut, $aod);
      return $this->db->get_where($tabel, [$selec => $param])->result_array();
    }
  }

  public function editPetugas_model($id)
  {
    return $this->db->get_where("petugas", ["id_petugas" => $id])->result_array();
  }

  public function formEdit_model($id_level, $param)
  {
    switch ($id_level) {
      case 1:

        $gambar = $_FILES["gambar"];

        $result = $this->db->get_where("petugas", ["id_petugas" => $param])->result_array();
        $username = $this->input->post("username", true);
        $namaAdmin = $this->input->post("namaAdmin", true);
        $password = $this->input->post("password", true);
        $kodeAdmin = $this->input->post("kodeAdmin", true);
        $gambar = $_FILES["gambar"];

        if (!empty($gambar["name"])) {

          $config['upload_path']    = './assets/img/img_profiles/';
          $config['allowed_types']  = 'gif|jpg|png';
          $config['max_size']       = 2048;
          $config['max_width']      = 1024;
          $config['max_height']     = 768;

          $this->load->library('upload', $config);

          //upload gambar ke folder yang sudah di tentukan
          if ($this->upload->do_upload("gambar")) {
            $gambarLama = $result[0]["gambar"];
            if ($gambarLama != "profiles.png") {
              $file_path = $this->upload->data("file_path");
              unlink($file_path . $gambarLama);
            }

            $gambar = $this->upload->data("file_name");
            $this->db->set("gambar", $gambar);
          } else {

            $err = $this->upload->display_errors();

            $this->session->set_flashdata("pesan", "
          <h5 class='text-danger'>
            <i>
              <b>
                Jenis file yang anda coba unggah tidak diizinkan. Silahkan pilih gambar lain.
              </b>
            </i>
          </h5>");
            redirect("admin/edit_profile/" . $result[0]['id_petugas']);
            die;
          }
        }

        $this->db->set("username", $username);
        $this->db->set("password", password_hash($password, PASSWORD_DEFAULT));
        $this->db->set("nama_petugas", $namaAdmin);
        $this->db->set("kode_petugas", $kodeAdmin);
        $this->db->where("id_petugas", $param);
        $this->db->update("petugas");


        $this->session->set_flashdata('pesan', "<h4 style='display:inline-block; margin-left:40%;' class='text-success'>Akun Anda Berhasil Di <b>di Edit</b></h4>");
        redirect("admin");
        break;

      case 2:

        $gambar = $_FILES["gambar"];

        $result = $this->db->get_where("petugas", ["id_petugas" => $param])->result_array();
        $username = $this->input->post("username", true);
        $namaAdmin = $this->input->post("namaAdmin", true);
        $password = $this->input->post("password", true);
        $kodeAdmin = $this->input->post("kodeAdmin", true);
        $gambar = $_FILES["gambar"];

        if (!empty($gambar["name"])) {

          $config['upload_path']    = './assets/img/img_profiles/';
          $config['allowed_types']  = 'gif|jpg|png';
          $config['max_size']       = 2048;
          $config['max_width']      = 1024;
          $config['max_height']     = 768;

          $this->load->library('upload', $config);

          //upload gambar ke folder yang sudah di tentukan
          if ($this->upload->do_upload("gambar")) {
            $gambarLama = $result[0]["gambar"];
            if ($gambarLama != "profiles.png") {
              $file_path = $this->upload->data("file_path");
              unlink($file_path . $gambarLama);
            }

            $gambar = $this->upload->data("file_name");
            $this->db->set("gambar", $gambar);
          } else {

            $err = $this->upload->display_errors();

            $this->session->set_flashdata("pesan", "
            <h5 class='text-danger'>
              <i>
                <b>
                  Jenis file yang anda coba unggah tidak diizinkan. Silahkan pilih gambar lain.
                </b>
              </i>
            </h5>");
            redirect("admin/edit_profile/" . $result[0]['id_petugas']);
            die;
          }
        }

        $this->db->set("username", $username);
        $this->db->set("password", password_hash($password, PASSWORD_DEFAULT));
        $this->db->set("nama_petugas", $namaAdmin);
        $this->db->set("kode_petugas", $kodeAdmin);
        $this->db->where("id_petugas", $param);
        $this->db->update("petugas");


        $this->session->set_flashdata('pesan', "<h4 style='display:inline-block; margin-left:20%;' class='text-success'>Akun Dengan Username <b>" . $username . "</b> Telah Berhasil <b>di Edit</b></h4>");
        redirect("admin/p");
        break;

      case 3:

        $nama_siswa = $this->input->post("nama_siswa", true);
        $nisn = $this->input->post("nisn", true);
        $nis = $this->input->post("nis", true);
        $kls = $this->input->post("kelas", true);
        $alamat = $this->input->post("alamat", true);
        $nomor_telpon = $this->input->post("nomor_telpon", true);
        $spp = $this->input->post("spp", true);
        $gambar = $_FILES["gambar"];

        $resultSpp = $this->db->get_where("spp", ["id_spp" => $spp])->result_array();
        $nominal = $resultSpp[0]["nominal/bulan"];
        $tahun = $resultSpp[0]["tahun"];

        $resultKelas = $this->db->get_where("kelas", ["id_kelas" => $kls])->result_array();
        $kelas = $resultKelas[0]["tingkatan_kelas"];
        $jurusan = $resultKelas[0]["kompetensi_keahlian"];

        if (!empty($gambar["name"])) {

          $config['upload_path']    = './assets/img/img_profiles/';
          $config['allowed_types']  = 'gif|jpg|png';
          $config['max_size']       = 2048;
          $config['max_width']      = 1024;
          $config['max_height']     = 768;

          $this->load->library('upload', $config);

          //upload gambar ke folder yang sudah di tentukan
          if ($this->upload->do_upload("gambar")) {
            $gambarLama = $result[0]["gambar"];
            if ($gambarLama != "profiles.png") {
              $file_path = $this->upload->data("file_path");
              unlink($file_path . $gambarLama);
            }

            $gambar = $this->upload->data("file_name");
            $this->db->set("gambar", $gambar);
          } else {

            $err = $this->upload->display_errors();

            $this->session->set_flashdata("pesan", "
          <h5 class='text-danger'>
            <i>
              <b>
                Jenis file yang anda coba unggah tidak diizinkan. Silahkan pilih gambar lain.
              </b>
            </i>
          </h5>");
            redirect("admin/edit_profile/" . $result[0]['id_petugas']);
            die;
          }
        }

        $data = [
          "nisn" => $nisn,
          "nis" => $nis,
          "id_kelas" => $kls,
          "id_spp" => $spp,
          "id_level" => $id_level,
          "nama" => $nama_siswa,
          "alamat" => $alamat,
          "nomor_telpon" => $nomor_telpon,
          "status" => "Siswa",
          "nominal/bulan" => $nominal,
          "tahun" => $tahun,
          "kelas" => $kelas,
          "jurusan" => $jurusan
        ];

        $this->db->where("nisn", $param);
        $this->db->update("siswa", $data);
        $this->session->set_flashdata('pesan', "<h4 style='display:inline-block; margin-left:20%;' class='text-success'>Akun Dengan Nama <b>" . $nama_siswa . "</b> Telah Berhasil <b>di Edit</b></h4>");
        redirect("admin/s");
        break;

      case 4:
        $jurusan = $this->input->post("jurusan", true);
        $kelas = $this->input->post("kelas", true);
        $kode = strtoupper($this->input->post("kode", true));

        $data = [
          "tingkatan_kelas" => $kelas,
          "kompetensi_keahlian" => $jurusan,
          "kode" => $kode
        ];

        $this->db->where("id_kelas", $param);
        $this->db->update("kelas", $data);

        $this->session->set_flashdata('pesan', "<h4 style='display:inline-block; margin-left:20%;' class='text-success'>Jurusan <b>" . $jurusan . "</b> berhasil <b>di Edit</b></h4>");
        redirect("admin/k");
        break;


      case 5:
        $nb = $this->input->post("spp", true);
        $np = $nb * 12;

        $data = [
          "nominal/bulan" => $nb,
          "nominal/tahun" => $np
        ];

        $this->db->where("id_spp", $param);
        $this->db->update("spp", $data);

        $this->session->set_flashdata('pesan', "<h4 style='display:inline-block; margin-left:20%;' class='text-success'>Data SPP dengan nominal <b>Rp." . number_format($nb) . ",- / Bulan</b> berhasil <b>di Edit</b></h4>");
        redirect("admin/spp");
        break;
    }
  }


  public function formTambah_model($id_level)
  {
    switch ($id_level) {
      case 2:

        $username = $this->input->post("username", true);
        $namaAdmin = $this->input->post("namaAdmin", true);
        $password = $this->input->post("password", true);
        $kodeAdmin = $this->input->post("kodeAdmin", true);
        $gambar = $_FILES["gambar"];


        if (empty($gambar["name"])) {
          $gambar = "profile.png";
        } else {

          $config['upload_path']    = './assets/img/img_profiles/';
          $config['allowed_types']  = 'gif|jpg|png';
          $config['max_size']       = 2048;
          $config['max_width']      = 1024;
          $config['max_height']     = 768;


          $this->load->library('upload', $config);

          //upload gambar ke folder yang sudah di tentukan
          if ($this->upload->do_upload("gambar")) {

            $gambar = $this->upload->data("file_name");
          } else {

            $err = $this->upload->display_errors();

            $this->session->set_flashdata("pesan", "
          <h5 class='text-danger'>
            <i>
              <b>
                Jenis file yang anda coba unggah tidak diizinkan. Silahkan pilih gambar lain.
              </b>
            </i>
          </h5>");
            redirect("admin/tambah");
            die;
          }
        }


        $data = [
          "username" => $username,
          "password" => password_hash($password, PASSWORD_DEFAULT),
          "nama_petugas" => $namaAdmin,
          "gambar" => $gambar,
          "kode_petugas" => $kodeAdmin,
          "id_level" => 2,
          "status" => "Petugas"
        ];

        // $this->db->set('name', $name);
        $this->db->insert("petugas", $data);

        $this->session->set_flashdata('pesan', "<h4 style='display:inline-block; margin-left:20%;' class='text-success'>Akun Dengan Username <b>" . $username . "</b> Berhasil <b>di Tambahkan</b></h4>");
        redirect("admin/p");

        break;



        //JIKA siswa
      case 3:

        $nama_siswa = $this->input->post("nama_siswa", true);
        $nisn = $this->input->post("nisn", true);
        $nis = $this->input->post("nis", true);
        $kls = $this->input->post("kelas", true);
        $alamat = $this->input->post("alamat", true);
        $nomor_telpon = $this->input->post("nomor_telpon", true);
        $spp = $this->input->post("spp", true);
        $gambar = $_FILES["gambar"];

        $resultSpp = $this->db->get_where("spp", ["id_spp" => $spp])->result_array();
        $nominal = $resultSpp[0]["nominal/bulan"];
        $tahun = $resultSpp[0]["tahun"];

        $resultKelas = $this->db->get_where("kelas", ["id_kelas" => $kls])->result_array();
        $kelas = $resultKelas[0]["tingkatan_kelas"];
        $jurusan = $resultKelas[0]["kompetensi_keahlian"];


        if (empty($gambar["name"])) {
          $this->session->set_flashdata("gambar_kosong", "
          <h5 class='text-danger'>
            <i>
              <b>
                Gambar Siswa Wajib di Isi
              </b>
            </i>
          </h5>");
          redirect("admin/tambah/3");
          die;
        } else {

          $config['upload_path']    = './assets/img/img_siswa/';
          $config['allowed_types']  = 'gif|jpg|png';
          $config['max_size']       = 2048;
          $config['max_width']      = 1024;
          $config['max_height']     = 768;


          $this->load->library('upload', $config);

          //upload gambar ke folder yang sudah di tentukan
          if ($this->upload->do_upload("gambar")) {

            $gambar = $this->upload->data("file_name");
          } else {

            $err = $this->upload->display_errors();

            $this->session->set_flashdata("pesan", "
          <h5 class='text-danger'>
            <i>
              <b>
                Jenis file yang anda coba unggah tidak diizinkan. Silahkan pilih gambar lain.
              </b>
            </i>
          </h5>");
            redirect("admin/tambah");
            die;
          }
        }

        $data = [
          "nisn" => $nisn,
          "nis" => $nis,
          "id_kelas" => $kls,
          "id_spp" => $spp,
          "id_level" => 3,
          "nama" => $nama_siswa,
          "alamat" => $alamat,
          "nomor_telpon" => $nomor_telpon,
          "gambar" => $gambar,
          "status" => "Siswa",
          "nominal/bulan" => $nominal,
          "tahun" => $tahun,
          "kelas" => $kelas,
          "jurusan" => $jurusan
        ];

        // $this->db->set('name', $name);
        $this->db->insert("siswa", $data);

        $this->session->set_flashdata('pesan', "<h4 style='display:inline-block; margin-left:20%;' class='text-success'>Akun dengan nama <b>" . $nama_siswa . "</b> berhasil <b>di Tambahkan</b></h4>");
        redirect("admin/s");

        break;


      case 4:
        $jurusan = $this->input->post("jurusan", true);
        $kelas = $this->input->post("kelas", true);
        $kode = strtoupper($this->input->post("kode", true));

        $data = [
          "tingkatan_kelas" => $kelas,
          "kompetensi_keahlian" => $jurusan,
          "kode" => $kode
        ];

        $this->db->insert("kelas", $data);

        $this->session->set_flashdata('pesan', "<h4 style='display:inline-block; margin-left:20%;' class='text-success'>Jurusan <b>" . $jurusan . "</b> berhasil <b>di Tambahkan</b></h4>");
        redirect("admin/k");
        break;

      case 5:
        $nb = $this->input->post("spp", true);
        $np = $nb * 12;

        $data = [
          "nominal/bulan" => $nb,
          "nominal/tahun" => $np
        ];

        $this->db->insert("spp", $data);

        $this->session->set_flashdata('pesan', "<h4 style='display:inline-block; margin-left:20%;' class='text-success'>Data SPP dengan nominal <b>Rp." . number_format($nb) . ",- / Bulan</b> berhasil <b>di Tambahkan</b></h4>");
        redirect("admin/spp");
        break;
    }
  }



  // UNTUK MENGHAPUS DATA PETUGAS
  public function hapusPetugas_model($id_level, $param)
  {

    switch ($id_level) {
      case 2:

        $result = $this->db->get_where("petugas", ["id_petugas" => $param])->result_array();


        $this->db->delete("petugas", ["id_petugas" => $param]);

        $this->session->set_flashdata('pesan', "<h4 style='display:inline-block; margin-left:20%;' class='text-success'>Akun Dengan Username <b>" . $result[0]["nama_petugas"] . "</b> Berhasil <b>di Hapus</b> </h4>");
        redirect("admin/p");

        break;

      case 3:

        $result = $this->db->get_where("siswa", ["nisn" => $param])->result_array();

        $this->db->delete("siswa", ["nisn" => $param]);

        $this->session->set_flashdata('pesan', "<h4 style='display:inline-block; margin-left:20%;' class='text-success'>Akun Dengan Username <b>" . $result[0]["nama"] . "</b> Berhasil <b>di Hapus</b> </h4>");
        redirect("admin/s");

        break;

      case 4:
        $result = $this->db->get_where("kelas", ["id_kelas" => $param])->result_array();

        $this->db->delete("kelas", ["id_kelas" => $param]);

        $this->session->set_flashdata('pesan', "<h4 style='display:inline-block; margin-left:20%;' class='text-success'>Kelas <b>" . $result[0]["tingkatan_kelas"] . "</b> Jurusan <b>" . $result[0]["kompetensi_keahlian"] . "</b> Berhasil <b>di Hapus</b> </h4>");
        redirect("admin/k");
        break;

      case 5:
        $result = $this->db->get_where("spp", ["id_spp" => $param])->result_array();

        $this->db->delete("spp", ["id_spp" => $param]);

        $this->session->set_flashdata('pesan', "<h4 style='display:inline-block; margin-left:20%;' class='text-success'>Data SPP dengan nominal <b>Rp." . number_format($result[0]["nominal/bulan"]) . ",- / Bulan</b> berhasil <b>di Hapus</h4>");
        redirect("admin/spp");
        break;
    }
  }

  public function transaksi()
  {
    $id_siswa = $this->input->post("id_siswa", true);
    $id_spp = $this->input->post("id_spp", true);
    $id_petugas = $this->input->post("id_petugas", true);
    $nama = $this->input->post("nama", true);
    $nisn2 = $this->input->post("nisn", true);
    $bulanan = $this->input->post("bulanan", true);
    $tanggalTransaksi = $this->input->post("tanggal", true);
    $tengatWaktu = $this->input->post("tengatWaktu", true);

    $cek = $this->db->get_where("siswa", ["nisn" => $nisn2])->result_array();
    $nama_petugas = $this->db->get_where("petugas", ["id_petugas" => $id_petugas])->result_array();

    if (empty($tanggalTransaksi)) {
      $this->session->set_flashdata('tanggal', "<p style='display:inline-block;' class='text-danger'>Isi tanggal terlebih dahulu</p>");
      redirect("admin/transaksi/" . $id_spp . "/" . $nisn2);
    } else {


      $data = [
        "id_petugas" => $id_petugas,
        "id_spp" => $id_spp,
        "id_siswa" => $id_siswa,
        "nisn" => $nisn2,
        "tanggal_pembayaran" => $tanggalTransaksi,
        "tengat_waktu" => $tengatWaktu,
        "nama_siswa" => $nama,
        "nama_petugas" => $nama_petugas[0]["nama_petugas"],
        "bulanan" => $bulanan
      ];

      $this->db->insert("pembayaran", $data);
      $this->session->set_flashdata('pesan', "<h4 style='display:inline-block; margin-left:20%;' class='text-success'>Siswa atas nama <b>" . $nama . " </b>berhasil melakukan <b>Pembayaran SPP</b></h4>");
      redirect("admin/select_siswa/" . $cek[0]["id_kelas"]);
    }
  }


  public function array_column_ext($array, $columnkey, $indexkey = null)
  {
    $result = array();
    foreach ($array as $subarray => $value) {
      if (array_key_exists($columnkey, $value)) {
        $val = $array[$subarray][$columnkey];
      } else if ($columnkey === null) {
        $val = $value;
      } else {
        continue;
      }

      if ($indexkey === null) {
        $result[] = $val;
      } elseif ($indexkey == -1 || array_key_exists($indexkey, $value)) {
        $result[($indexkey == -1) ? $subarray : $array[$subarray][$indexkey]] = $val;
      }
    }
    return $result;
  }
}
