<?php
  class Produtos_model extends CI_Model {

    public function buscaTodos(){
      return $this->db->get("produtos")->result_array();

      $this->load->model("produtos_model");
      $produtos = $this->produtos_model->buscaTodos();
    }
  }