<?php
class Cregpersonas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mregpersonas');
    }

    public function index()
    {
        $this->load->view('layout/header');
        $this->load->view('layout/menu');
        $this->load->view('vregpersonas');
        $this->load->view('layout/footer');
    }

    public function getEventos()
    {
        $s = $this->input->post('esteve');
        $resultado = $this->mregpersonas->getEventos($s);

        echo json_encode($resultado);
    }

    public function getSubEventos()
    {
        $c = $this->input->post('codeve');
        $resultado = $this->mregpersonas->getSubEventos($c);

        echo json_encode($resultado);
    }

    public function getAsistencias()
    {
        echo json_encode($this->mregpersonas->getAsistencias());
    }

    // public function getAsistencias()
    // {
    //     $start  = $this->input->post('start');
    //     $length = $this->input->post('length');
    //     $search = $this->input->post('search')['value'];
    //
    //     $result = $this->mregpersonas->getAsistencias($start, $length, $search);
    //     $resultado = $result['datos'];
    //
    //     $totalDatos = $result['numDataTotal'];
    //
    //     $datos = array( );
    //     foreach ($resultado->result_array() as $row) {
    //         $array = array();
    //         $array ['rownum']    = $row['rownum'];
    //         $array ['dniper']    = $row['dniper'];
    //         $array ['nomper']    = $row['nomper'];
    //         $array ['appper']    = $row['appper'];
    //         $array ['apmper']    = $row['apmper'];
    //         $array ['nomsubeve'] = $row['nomsubeve'];
    //         $array ['horasis']   = $row['horasis'];
    //
    //         $datos[] = $array;
    //     }
    //
    //     $totalDatoObtenido = $resultado->num_rows();
    //
    //     $json_data = array(
    //     "draw"            => intval($this->input->post('draw')),
    //     "recordsTotal"    => intval($totalDatoObtenido),
    //     "recordsFiltered" => intval($totalDatos),
    //     "data"            => $datos
    //     );
    //
    //     echo json_encode($json_data);
    // }
}
