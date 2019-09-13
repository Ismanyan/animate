<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    // Constructor function
    function __construct()
    {
        parent::__construct();
        $this->load->model('auth_models');
        $this->load->model('product_models');
    }

    // Auth Page
    function index()
    {
        if ($this->session->userdata('logged_in') === TRUE) {
            redirect(base_url());
            exit;
        }

        $data['title'] = "Login | Animate";
        $data['category'] = $this->product_models->getCategory();

        $this->load->view('layouts/header',$data);
        $this->load->view('layouts/navbar');
        $this->load->view('auth/login',$data);
        $this->load->view('layouts/footer');
    }

    // Login System
    function login()
    {
        if ($this->session->userdata('logged_in') === TRUE) {
            redirect(base_url());
            exit;
        }

        // Check security
        if ($this->security->xss_clean($this->input->post(),true) !== false) {
            $input['username'] = html_escape($this->input->post('username'));
            $input['password'] = html_escape($this->input->post('password'));

            // Check user in database
            $validate = $this->auth_models->checkAccount($input);
            
            // If user true
            if ($validate->num_rows() === 1) {
                // If username & password equals 
                if ($input['username'] === $validate->row_array()['username'] && password_verify($input['password'] , $validate->row_array()['password'])) {
                    // Set session
                    $login = array(
                        'id'        => 1,
                        'username'  => $validate->row_array()['username'],
                        'email'     => $validate->row_array()['email'],
                        'role_id'   => $validate->row_array()['role_id'],
                        'logged_in' => TRUE
                    );
                    $this->session->set_userdata($login);

                    // Set session role
                    if ($validate->row_array()['role_id'] === '394053f0d6372f568209482af3f0bd36') {
                        $this->session->set_userdata('role_id','1');
                    } else {
                        $this->session->set_userdata('role_id','2');
                    }
                    redirect(base_url());
                    exit;
                } else{
                    echo "invalid account";
                }
            } else {
                echo "can't find account";
            }   
        }
    }

    // Logout System
    function logout()
    {
        $login = array(
            'id'        ,
            'username'  ,
            'email'     ,
            'role_id'   ,
            'logged_in'
        );

        $this->session->unset_userdata($login);

        redirect(base_url('auth'));
    }

    public function regist()
    {
        $this->form_validation->set_rules('password', 'Password', 'required|matches[confirm-password]|min_length[5]');
        $this->form_validation->set_rules('confirm-password', 'Confirm Password', 'required');
        
        // Check validation
        if ($this->form_validation->run() !== FALSE && $this->security->xss_clean($this->input->post(), true) !== false){
            $input['username'] = html_escape($this->input->post('username'));
            $input['email'] = html_escape($this->input->post('email'));
            $input['password'] = html_escape($this->input->post('password'));
            
            $validate = $this->auth_models->checkAvailable($input);
            
            // Check available
            if ($validate === 0) {
                $this->auth_models->addAccount($input);
            } else {
              echo "email already taken";  
            }
            
            redirect(base_url('auth'));
        } else {
            $this->index();
        }
    }
}