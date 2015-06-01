<?php

class Departments extends CI_Model{
    function get_departments_tests() {
        $query = $this->db->get('departments', 10);
        return $query->result();
    }
}
