<?php
defined('BASEPATH') or exit('No direct script access allowed');

class after_shop extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('aftershop_model');
    }
    public function index()
    {

        $data['product'] = $this->aftershop_model->getallproduct();
        $this->load->view('after_shop/asheader');
        $this->load->view('after_shop/ascontent', $data);
        $this->load->view('after_shop/asfooter');
    }
}
