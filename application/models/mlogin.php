<?php


class mlogin extends CI_Model
{

	public function ingresar ($usu,$pass){

		$this->db->select('p.codper, u.codusu, p.nomper, p.appper, p.apmper');
		$this->db->from('usuario u');
		$this->db->join('persona p','p.codper = u.codper');
		$this->db->WHERE('u.user', $usu);
		$this->db->WHERE('u.pass', $pass);

		$resultado = $this->db->get();
		if($resultado-> num_rows() == 1)
    {
			$r         = $resultado-> row();
			$s_usuario = array(
				'$_codper'   => $r->codper,
				'$s_codusu'  => $r->codusu,
				'$s_usuario' => $r->nomper.", ".$r->appper." ".$r->apmper
      );

			$this->session->set_userdata($s_usuario);
      return 1;
		}else{
			return 0;
		}

	}
}
