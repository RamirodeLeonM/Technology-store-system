<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search_Model extends CI_Model {
public function GetSearchdata()
  {
    $this->db->select("*");  
    $this->db->like('tutorial_name',$this->input->get('search'));
    $query = $this->db->get("tutorial_name"); 
    return $query->result();
  }
}