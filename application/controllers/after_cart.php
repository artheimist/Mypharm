<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class after_cart extends CI_Controller {

    public function index() 
    {
        $this->load->view('after_cart/cartpage');
    }
    
}