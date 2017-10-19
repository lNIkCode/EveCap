<?php

class Mlogin extends CI_model
{

  public function ingresar($usu,$pass)
  {
    $this->db->select('u.codusu, u.codper, p.nomper, p.appper, p.apmper');
    $this->db->from('usuario u');
    $this->db->join('persona p','p.codper = u.codper');
    $this->db->where('u.user',$usu);
    $this->db->where('u.pass',$pass);

    $resultado = $this->db->get();
    if($resultado->num_rows() == 1)
    {
      $r = $resultado->row();
      $s_usuario = array(
        's_idpersona' => $r->codper,
        's_idusuario' => $r->codusu,
        's_usuario' => $r->nomper.", ".$r->appper.", ".$r->apmper
       );

       $this->session->set_userdata($s_usuario);
       return 1;
    }else{
       return 0;
    }

  }
}
