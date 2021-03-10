<?php
class Vivienda_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_vivienda($cve_mun) {
        $sql = 'select * from vivienda where cve_mun = ?;';
        $query = $this->db->query($sql, array($cve_mun));
        return $query->row_array();
    }

}
