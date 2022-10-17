<?php

class Auth_model extends CI_Model
{

  public function loginSiswa()
  {
    $nisn = $this->input->post('nisn', true);

    $result = $this->db->get_where('siswa', ['nisn' => $nisn])->row_array();

    $resultKelas = $this->db->get_where('kelas', ['id_kelas' => $result['id_kelas']])->row_array();


    if ($result['nisn'] !== $nisn) {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger">Mohon maaf, <b>NISN</b> yang anda masukan salah.</div>');
      redirect('auth');
    } else {

      $data = [
        "id_level" => $result['id_level'],
        "nisn" => $result['nisn']
      ];

      $this->session->set_userdata($data);

      redirect("siswa/history/" . $result["nisn"]);
    }
  }



  public function loginPetugas()
  {
    $username = $this->input->post('username', true);
    $password = $this->input->post("password", true);

    $result = $this->db->get_where('petugas', ['username' => $username])->row_array();

    $resultLevel = $this->db->get_where("level", ["id_level" => $result["id_level"]])->row_array();


    if ($result['username'] !== $username) {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger">Mohon maaf, <b>Username</b> yang anda masukan salah.</div>');
      redirect('auth/petugas');
    } else {

      if (password_verify($password, $result['password'])) {

        $data = [
          "id_level" => $result["id_level"],
          "idPetugas" => $result["id_petugas"]
        ];
        $this->session->set_userdata($data);

        switch ($result['id_level']) {
          case 1;
            redirect('Admin');
            break;

          case 2;
            redirect('Admin/select_kelas');
            break;
        }
      } else {
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger">Mohon maaf, <b>Password</b> yang anda masukan salah.</div>');
        redirect('auth/petugas');
      }
    }
  }


  public function logout()
  {
    $this->session->unset_userdata('nisn');

    $this->session->unset_userdata('id_level');
    $this->session->unset_userdata('cont');
    $this->session->unset_userdata('method');
    $this->session->unset_userdata("idPetugas");
    $this->session->unset_userdata("king");
    $this->session->unset_userdata("back");
    session_unset();
    session_destroy();


    $this->session->set_flashdata('pesan', '<div class="alert alert-success">Anda berhasil <b>Logout</b>.</div>');

    echo "<script>alert('kamu berhasil logout')</script>";
    redirect('auth');
  }
}



  //   public function register(){
  //     date_default_timezone_set('asia/jakarta');
  //     $data = [
  //         'nama' => $this->input->post('nama', true),
  //         'email' => $this->input->post('email', true),
  //         'telpon' => $this->input->post('telpon', true),
  //         'foto_profil' => 'ini',
  //         'password' => password_hash($this->input->post('password1', true), PASSWORD_DEFAULT),
  //         'rule_id' => 2,
  //         'tanggal_login' => date('r | e')
  //     ];

  //     $this->db->insert('user', $data);
  //     $this->session->set_flashdata('pesan', '<div class="alert alert-success"><i>Selamat anda <b>berhasil</b> teregistrasi. Silahkan login!</i></div>');
  //     redirect('auth');
  // }
