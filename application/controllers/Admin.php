<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// admin

class Admin extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->library('session');
  }

  public function index() {
    if($this->session->userdata('username')) redirect('home');

    $this->load->library('form_validation');
    $this->form_validation->set_rules('user_name', 'Identifiant', 'required');
    $this->form_validation->set_rules('user_password', 'Mot de passe', 'required|min_length[4]');

    if ( $this->form_validation->run() !== false ) {
        $this->load->model('User');
        $res = $this
                 ->user
                 ->verify_user(
                    $this->input->post('user_name'),
                    $this->input->post('user_password')
                 );
        echo $res;
        if ( $res !== false ) { // @todo controle isadmin
          $this->session->set_userdata('isadmin', true);
          $this->session->set_userdata('username', 'admin');
          redirect('home');
        }
    }

    $this->load->view('header');
    $this->load->view('login_view');
    $this->load->view('footer');
  }

  public function logout() {
    $this->session->sess_destroy();
    redirect('admin');
  }
}