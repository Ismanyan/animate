<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    // Constructor function
    function __construct()
    {
        parent::__construct();
        $this->load->model('product_models');
        $this->load->model('admin_models');
    }

    // Dashboard Page
    function index()
    {
        // Data for this page
        $data['title'] = "Admin Page | Animate";
        $data['anime'] = $this->product_models->getProduct(1);
        $data['manga'] = $this->product_models->getProduct(2);
        $data['novel'] = $this->product_models->getProduct(3);

        // Load this page views
        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/navbar');
        $this->load->view('admin/index');
        $this->load->view('layouts/footer');
    }

    // Add new product
    function add()
    {
        $this->form_validation->set_rules('product_price', 'Price', 'required|numeric');

        // Check If error or not
        if ($this->form_validation->run() == FALSE) {
            // Data for this page
            $data['title'] = "Admin Page | Animate";
            $data['manga'] = $this->home_models->getProduct(2);
            $data['novel'] = $this->home_models->getProduct(3);
            $data['anime'] = $this->home_models->getProduct(1);

            echo "<script>
                alert('Add product failed');
            </script>";

            // Load this page views
            $this->load->view('layouts/header', $data);
            $this->load->view('layouts/navbar');
            $this->load->view('admin/index');
            $this->load->view('layouts/footer');
        } else {
            // Data File
            $upload_dir = 'assets/images/produk';
            $temp = explode(".", $_FILES["image"]["name"]);
            $newfilename = round(microtime(true)) . '.' . end($temp);
            $target = basename($newfilename);
            move_uploaded_file($_FILES['image']['tmp_name'], "$upload_dir/$target");
            $input = [
                'product_name' => $this->input->post('product_name'),
                'product_price' => $this->input->post('product_price'),
                'product_star' => 0,
                'product_category' => $this->input->post('product_category'),
                'product_img' => $newfilename
            ];
            $this->admin_models->addProduct($input);
            
            echo "<script>
                alert('Add product success ');
                document.location.href='" . base_url('admin') . "';
            </script>";
        }
    }
}