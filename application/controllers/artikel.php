<!-- developed by iska -->
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class artikel extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('artikel_model');
    }
    public function index()
    {
        $data['artikel'] = $this->artikel_model->getallartikel();
        $this->load->view('artikel/asheader');
        $this->load->view('artikel/ascontent', $data);
        $this->load->view('artikel/asfooter');
    }
    public function detailartikel()
    {
        $this->load->view('artikel/detail1');
    }
}
