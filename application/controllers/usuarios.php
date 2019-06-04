<?php
  if( ! defined('BASEPATH')) exit('No direct script acess allowed');
  class usuarios extends CI_Controller {
    public function novo(){
      $usuario = array(
        "nome" => $this->input->post("nome"),
        "email" => $this->input->post("email"),
        "senha" => md5($this->input->post("senha"))
      );
      $this->load->database();
      $this->load->model("usuarios_model");
      $this->usuarios_model->salva($usuario);
      $this->load->view("usuarios/novo");
    }
  }