<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pegawai_model extends CI_Model
{

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function tampilPegawai()
    {
        $query = $this->db->get('tbl_pegawaiincomben');
        return $query;
    }
}
