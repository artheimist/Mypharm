<?php
defined('BASEPATH') or exit('No direct script access allowed');

class detail extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('aftershop_model');
        $this->load->library('form_validation');
    }
    public function index($id)
    {
        $this->form_validation->set_rules(
            'rating',
            'Rating',
            'required',
            ['required' => 'Give this product a rate !']
        );
        $this->form_validation->set_rules(
            'review',
            'Review',
            'required|callback_review_validate',
            // ['check_default' => 'Give this product a review !']
        );
        $data['detail'] = $this->aftershop_model->getproductbyid($id);
        $data['review'] = $this->aftershop_model->getreview($id);
        $data['jumlah'] = $this->aftershop_model->countallreview($id);
        $data['avg'] = $this->aftershop_model->totalreview($id);
        $this->load->view('detail/details', $data);
    }
    public function tambahreview($id)
    {
        if ($this->session->has_userdata('email')) {
            $data = [
                'id_user' => $this->session->userdata('id'),
                'id_product' => $id,
                'review' => $this->input->post('review'),
                'rating' => $this->input->post('rating')
            ];
            $this->aftershop_model->tambahreview($data);
            $this->session->set_flashdata('message', ' <div class="alert alert-success" role="alert">
                Review Submitted</div> ');
            redirect('detail/index/' . $id);
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Login terlebih dahulu</div>');
            redirect('auth');
        }
    }
    public function addcart()
    {
        $redirect = $this->input->post('redirect');
        $data = [
            'id'      => $this->input->post('id'),
            'qty'     => $this->input->post('qty'),
            'price'   => $this->input->post('price'),
            'name'    => $this->input->post('nama'),
            'toko'    => $this->input->post('toko'),
            'gambar'  => $this->input->post('gambar')
        ];
        $this->cart->insert($data);
        $this->session->set_flashdata('message', ' <div class="alert alert-success" role="alert"> Added to cart</div> ');
        redirect($redirect);
    }

    public function removecart($id)
    {
        $data = array(
            'rowid' => $id,
            'qty' => $this->input->post('qty1') - 1
        );

        $this->cart->update($data);
        redirect('after_cart');
    }
}
