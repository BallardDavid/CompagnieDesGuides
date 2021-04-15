<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// admin

class Admin extends CI_Controller{

  public function __construct() {
    parent::__construct();
  }

  public function index() {

    $this->load->library('form_validation');
    $this->form_validation->set_rules('user_name', 'Identifiant', 'required');
    $this->form_validation->set_rules('user_password', 'Mot de passe', 'required|min_length[4]');

    if ( $this->form_validation->run() !== false ) {
        $this->load->model('user');
        $res = $this
                 ->user
                 ->verify_user(
                    $this->input->post('user_name'),
                    $this->input->post('user_password')
                 );
        if ($res) {
          $this->session->set_userdata('isAdmin', true);
          $this->session->set_userdata('username', 'admin');
          redirect('home');
        }
    }

    $this->load->view('header');
    $this->load->view('login_view');
  }

  public function logout() {
    $this->session->sess_destroy();
    redirect('login');
  }
}