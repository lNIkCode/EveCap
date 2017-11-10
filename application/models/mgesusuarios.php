<?php

class Mgesusuarios extends CI_model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function Registrarpersona($param)
    {
        $campos = array(
            'dniper'  => $param['dniper'],
            'nomper'  => $param['nomper'],
            'appper'  => $param['appper'],
            'apmper'  => $param['apmper'],
            'telper'  => $param['telper'],
            'email'   => $param['email'],
            'fnacper' => date('y-m-d', strtotime(str_replace('/', '-', $param['fnacper']))),
            'codperf' => $param['codperf'],
        );

        $this->db->insert('persona', $campos);
      //  return $this->db->insert_id();

    }

    public function getPerfiles($s)
    {

          $s = $this->db->get_where('perfil', array('estperf' => $s));
          return $s->result();


    }
}
