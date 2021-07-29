<!-- developed by iska -->
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class afterlogin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->load->view('afterlogin/a_header');
        $this->load->view('afterlogin/a_content');
        $this->load->view('afterlogin/a_footer');
    }
}
