<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Board_m extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_lists($table='ci_board')
    {
        $sql="SELECT * FROM ".$table." ORDER BY board_id DESC";
        $query=$this->db->query($sql);
        $result=$query->result();
        return $result;
    }

}
