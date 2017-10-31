<?php
class clogin extends ci_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('mlogin');
	}

	public function index (){

		$data['mensaje']= "";
		$this->load->view('login/vlogin',$data);

	}

	public function ingresar (){

		$usu  = $this->input->post('txtusuario');
		$pass = $this->input->post('txtpass');

		$res  = $this->mlogin->ingresar($usu,$pass);

		if ($res == 1){
			$this->load->view('Layout/header');
			$this->load->view('Layout/menu');
			$this->load->view('vsubeventos');
			$this->load->view('Layout/footer');
		}
		else{
			$data['mensaje']= "Usuario o Contraseña Erronea";
			$this->load->view('login/vlogin',$data);
		}
	}

}
