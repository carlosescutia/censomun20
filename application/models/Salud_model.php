<?php
class Salud_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_salud($cve_mun) {
        $sql = 'select * from salud where cve_mun = ?;';
        $query = $this->db->query($sql, array($cve_mun));
        return $query->row_array();
    }

}
