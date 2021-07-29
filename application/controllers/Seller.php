<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Seller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->library('form_validation');
    }
    public function index()
    {

        $this->tambah_product();
    }
    public function tambah_product()
    {

        $this->form_validation->set_rules(
            'product_name',
            'Product name',
            'required',
            ['required' => 'Enter your product name !']
        );
        $this->form_validation->set_rules(
            'stok',
            'Stok',
            'required',
            ['required' => ' We need to know your available product !']
        );
        $this->form_validation->set_rules(
            'product_price',
            'Price',
            'required|trim',
            ['required' => 'Your product need a price!']
        );
        $this->form_validation->set_rules(
            'product_deskripsi',
            'Description',
            'required',
            ['required' => 'Describe your product !']
        );
        $config['upload_path']          = './assets/upload/product/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 100000000;
        $config['max_width']            = 100000000;
        $config['max_height']           = 100000000;
        $this->load->library('upload', $config); // libary upload
        if ($this->form_validation->run() == false) {
            $this->load->view('Seller/sell');
        } else {
            if (!$this->upload->do_upload('userfile')) { //kondisi klo ga bisa up
                $error = array('error' => $this->upload->display_errors()); // nampilin error klo ga bisa up
                $this->load->view('Seller/sell', $error);
            } else {
                $foto = $this->upload->data(); //upload ke variabel foto
                $foto = $foto['file_name']; // ngambil filename dari foto tsb
                $data = [
                    'id_user' => $this->session->userdata('id'),
                    'nama_product' => $this->input->post('product_name'),
                    'product_deskripsi' => $this->input->post('product_deskripsi'),
                    'harga_product' => $this->input->post('product_price'),
                    'stok' => $this->input->post('stok'),
                    'gambar' => $foto
                ];
                $this->db->insert('product', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success p-3" role="alert">
                Produk sudah terdaftar.</div>');
                redirect('Seller');
            }
        }
    }
}
