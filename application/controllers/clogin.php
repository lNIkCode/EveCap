<?php

class Clogin extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('mlogin');
  }

  public function index()
  {
    $data['mensaje'] = '';
    $this->load->view('login/vheaderlogin');
    $this->load->view('login/vlogin');
  }

  public function ingresar()
  {
    $usu = $this->input->post('txtusuario');
    $pass = $this->input->post('txtpassword');
    $res = $this->mlogin->ingresar($usu,$pass);

    if ($res == 1) {
        $this->load->view('inicio/vprincipal');
    }else{
        $data['mensaje'] = "usuario o contraseña incorrecta";
        $this->load->view('login/vheaderlogin');
        $this->load->view('login/vlogin');
        }
  }
}
