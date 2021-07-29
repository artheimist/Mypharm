<?php

defined('BASEPATH') or exit('No direct script access allowed');

class artikel_model extends CI_Model
{
    public function getallartikel()
    {
        return $this->db->get('artikel')->result();
    }
    public function getartikelbyid($id)
    {
        return $this->db->get_where('artikel', array('id_artikel' => $id))->result();
    }
}
