<?php
class Siswa extends CI_Controller
{

  public function __construct()
  {
      parent::__construct();
      $this->load->database();
      $this->load->model('Admin_model');
  }

  public function history($nisn)
  {

      if ($this->session->userdata('nisn')&&$this->session->userdata('id_level'))
      {
        if ( $this->session->userdata('id_level') == 3)
          {

            

            $data = [
                  "cont" => $this->uri->segment(1),
                  "method" => $this->uri->segment(2)
                ];

              $this->session->set_userdata($data);

              $nisn = $this->session->userdata("nisn");

              $resultIndex["data"] = $this->Admin_model->ambilSatuData("nisn", $nisn, "siswa");

              //DATA PEMBAYARAN
              $resultIndex["pembayaran"] = $this->Admin_model->ambilSemuaData("nisn", $nisn, "pembayaran", null, null);

              
              //DATA SISWA
              $resultIndex["siswa"] = $this->Admin_model->ambilSemuaData("nisn", $nisn, "siswa", null, null);

              //DATA TUNGGAKAN
              $result = $this->db->get_where("pembayaran", ["nisn" => $nisn])->result_array();

              $resultIndex["tunggakan"] = array_sum($this->Admin_model->array_column_ext($result,'tengat_waktu'));

              $this->load->view('templates/siswa/header', $resultIndex);
              $this->load->view('templates/siswa/sidebar', $resultIndex);
              $this->load->view('siswa/history', $resultIndex);
              $this->load->view('templates/siswa/footer');
          } else {

              $this->load->view('blank/index');

          }

      } else {
          redirect('auth');
          die;
      }
  }
}
?>