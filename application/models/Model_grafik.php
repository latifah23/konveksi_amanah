<?php
class Model_grafik extends CI_Model{
 
  //get data from database
  
 public function graph()
{
     $data = $this->db->query("SELECT * from pesan");
     return $data->result();
}
}