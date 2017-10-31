<?php


class mlogin extends CI_model
{

	public function ingresar ($usu,$pass){

		$this->db->select('p.codper, u.codusu, p.nomper, p.appper, p.apmper, pf.desperf');
		$this->db->from('persona p');
		$this->db->join('usuario u','p.codper = u.codper');
		$this->db->join('perfil pf','p.codperf = pf.codperf');
		$this->db->WHERE('u.user', $usu);
		$this->db->WHERE('u.pass', $pass);

		$resultado = $this->db->get();
		if($resultado-> num_rows() == 1)
    {
			$r         = $resultado-> row();
			$s_usuario = array(
				's_codper'   => $r->codper,
				's_codusu'  => $r->codusu,
				's_usuario' => $r->nomper." ".$r->appper,
				's_perfil' => $r->desperf
      );

			$this->session->set_userdata($s_usuario);
      return 1;
		}else{
			return 0;
		}

	}
}
