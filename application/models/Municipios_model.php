<?php
class Municipios_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_municipios() {
        $sql = 'select * from municipios order by cve_mun;';
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function get_municipio($cve_mun) {
        $sql = 'select * from municipios where cve_mun = ?;';
        $query = $this->db->query($sql, array($cve_mun));
        return $query->row_array();
    }

}
