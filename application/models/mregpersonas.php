<?php
class Mregpersonas extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getEventos($s)
    {
        $s = $this->db->get_where('evento', array('esteve' => $s));
        return $s->result();
    }

    public function getSubEventos($c)
    {
        $this->db->select('*');
        $this->db->from('subevento s');
        $this->db->WHERE('s.codeve', $c);
        $this->db->WHERE('s.estsubeve', 1);
        $c = $this->db->get();

        return $c->result();
    }

    public function getAsistencias()
    {
      $q = " SELECT p.codper rownum, p.codper, p.dniper, p.nomper, p.appper, p.apmper, s.nomsubeve, a.horasis
                 FROM asistencia a
                 LEFT JOIN persona p ON a.codper = p.codper
                 LEFT JOIN subevento s ON a.codsubeve = s.codsubeve
           ";

      $r = $this->db->query($q);

      return $r->result();
    }

    // public function getAsistencias($start, $length, $search)
    // {
    //     //-------$search----------
    //     $srch = "";
    //     if ($search) {
    //         $srch = "WHERE (p.dniper LIKE '%$search%' OR
    //           p.nomper LIKE '%$search%' OR
    //           p.appper LIKE '%$search%' OR
    //           p.apmper LIKE '%$search%' OR
    //           s.nomsubeve LIKE '%$search%' OR
    //           a.horasis LIKE '%$search%')";
    //     }
    //
    //     //-------------------
    //     $qnr = "SELECT count(1) cant
    //             FROM asistencia a
    //             INNER JOIN persona p ON a.codper = p.codper
    //             INNER JOIN subevento s ON a.codsubeve = s.codsubeve
    //     ".$srch;
    //
    //     $qnr = $this->db->query($qnr);
    //     $qnr = $qnr->row();
    //     $qnr = $qnr->cant;
    //
    //     $q = " SELECT p.codper rownum, p.codper, p.dniper, p.nomper, p.appper, p.apmper, s.nomsubeve, a.horasis
    //           FROM asistencia a
    //           LEFT JOIN persona p ON a.codper = p.codper
    //           LEFT JOIN subevento s ON a.codsubeve = s.codsubeve
    //     ".$srch."LIMIT $start,$length";
    //
    //     $r = $this->db->query($q);
    //
    //     $retornar = array(
    //                 'numDataTotal' => $qnr,
    //                 'datos'        => $r
    //                 );
    //
    //     return $retornar;
    // }
}
