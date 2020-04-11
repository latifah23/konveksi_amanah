<?php
class Grafik extends CI_Controller{
    function __construct(){
      parent::__construct();
      //load chart_model dari model
      $this->load->model('model_grafik');
    }
 
    function index(){
     //  $data = $this->model_grafik->get_data()->result();
     //  $x['data'] = json_encode($data);
      $this->load->view('grafik');
    }
}