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

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url());
	}

	public function ingresar (){

		$usu  = $this->input->post('txtusuario');
		$pass = $this->input->post('txtpass');

		$res  = $this->mlogin->ingresar($usu,$pass);

		if ($res == 1){
			$this->load->view('layout/header');
			$this->load->view('layout/menu');
			$this->load->view('vprincipal');
			$this->load->view('layout/footer');
		}
		else{
			$data['mensaje']= "Usuario o Contraseña Erronea";
			$this->load->view('login/vlogin',$data);
		}
	}

}
