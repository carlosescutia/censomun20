<?php
class Economia_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_economia($cve_mun) {
        $sql = 'select * from economia where cve_mun = ?;';
        $query = $this->db->query($sql, array($cve_mun));
        return $query->row_array();
    }

}
