<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper(['form', 'url']);
    }

    public function login() {
        $this->load->view('auth/login');
    }

    public function login_action() {

        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $super_email = "admin123@gmail.com";
        $super_password = "Admin@123";

        if ($email === $super_email && $password === $super_password) {

            $session_data = [
                'user_email' => $email,
                'role' => 'super_admin',
                'logged_in' => TRUE
            ];

            $this->session->set_userdata($session_data);

            redirect('dashboard'); 

        } else {
            $this->session->set_flashdata('error', 'Invalid Email or Password');
            redirect('auth/login');
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('auth/login');
    }
}