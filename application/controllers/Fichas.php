<?php
class Fichas extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('municipios_model');
        $this->load->model('gobierno_model');
        $this->load->model('poblacion_model');
        $this->load->model('migracion_model');
        $this->load->model('educacion_model');
    }

    public function lista()
    {
        $data['municipios'] = $this->municipios_model->get_municipios();

        $this->load->view('templates/header', $data);
        $this->load->view('fichas/lista', $data);
        $this->load->view('templates/footer');
    }

    public function detalle($cve_mun)
    {
        $data['municipio'] = $this->municipios_model->get_municipio($cve_mun);
        $data['gobierno'] = $this->gobierno_model->get_gobierno($cve_mun);
        $data['poblacion'] = $this->poblacion_model->get_poblacion($cve_mun);
        $data['migracion'] = $this->migracion_model->get_migracion($cve_mun);
        $data['educacion'] = $this->educacion_model->get_educacion($cve_mun);

        $this->load->view('templates/header', $data);
        $this->load->view('fichas/detalle', $data);
        $this->load->view('templates/footer');
    }

}
