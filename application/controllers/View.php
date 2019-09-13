<?php
defined('BASEPATH') or exit('No direct script access allowed');

class View extends CI_Controller
{
    // Constructor function
    function __construct()
    {
        parent::__construct();
        $this->load->model('product_models');
    }

    // View Product
    public function product($id)
    {
        // Data for this page
        $data['title'] = "Toko Action Figure | Animate";
        $data['product'] = $this->product_models->getProductId($id);
        $data['category'] = $this->product_models->getCategory();

        // Load this page views
        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/navbar', $data);
        $this->load->view('view/banner');
        $this->load->view('view/side_category',$data);
        $this->load->view('view/index');
        $this->load->view('view/related_product');
        $this->load->view('layouts/footer');
    }

    // View sort by category
    public function category($id)
    {
        // Data for this page
        $data['title'] = "Toko Action Figure | Animate";
        $data['product'] = $this->product_models->getProductCategori($id);
        $data['category'] = $this->product_models->getCategory();

        // Load this page views
        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/navbar', $data);
        $this->load->view('view/banner_category',$data);
        $this->load->view('view/side_category', $data);
        $this->load->view('view/category');
        $this->load->view('view/related_product');
        $this->load->view('layouts/footer');
    }
}
