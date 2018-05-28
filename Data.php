<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data extends CI_Model
{
    public function add_volunteer($arg=array())
    {
        $this->db->insert('volunteers', $arg);
    }
}
