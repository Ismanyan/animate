<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    // Constructor function
    function __construct()
    {
        parent::__construct();
        $this->load->model('product_models');
    }

    // Dashboard Page
    public function index()
    {
        // Data for this page
        $data['title'] = "Toko Action Figure | Animate";

        $data['anime'] = $this->product_models->getProduct(1);
        $data['manga'] = $this->product_models->getProduct(2);
        $data['novel'] = $this->product_models->getProduct(3);
        // Load this page views
        $this->load->view('layouts/header',$data);
        $this->load->view('layouts/navbar');
        $this->load->view('home/banner');
        $this->load->view('home/index');
        $this->load->view('home/product',$data);
        $this->load->view('home/brand');
        $this->load->view('home/newsletter');
        $this->load->view('layouts/footer');
    }

}
