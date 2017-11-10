<?php
class Cgesusuarios extends ci_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('mgesusuarios');
        $this->load->library('encryption');
    }

    public function index()
    {
        $this->load->view('layout/header');
        $this->load->view('layout/menu');
        $this->load->view('vgesusuarios');
        $this->load->view('layout/footer');
    }
    public function Registrarpersona()
    {
        $param['dniper']  = $this->input->post('txtdniper');
        $param['nomper']  = $this->input->post('txtnomper');
        $param['appper']  = $this->input->post('txtappper');
        $param['apmper']  = $this->input->post('txtapmper');
        $param['telper']  = $this->input->post('txttelper');
        $param['email']   = $this->input->post('txtemailper');
        $param['fnacper'] = $this->input->post('txtfnacpe');
        $param['codperf'] = $this->input->post('cboperfil');

        $paramusu['userper'] = $this->input->post('txtuserper');
        $paramusu['pass']    = sha1($this->input->post('txtupassper'));

        //$lastId =
        $this->mgesusuarios->Registrarpersona($param);
        // if ($lastId > 0) {
        //     $paramusu['codper'] = $lastId;
        //     $this->musuario->guardarusuario($paramusu);
        //
        // }

    }

    public function getPerfiles()
    {

          $s = $this->input->post('estperf');
          $resultado = $this->mgesusuarios->getPerfiles($s);

          echo json_encode($resultado);

    }

}
