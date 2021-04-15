<?php
class Home extends CI_Controller{
  function __construct() {
		parent::__construct();
    $this->load->library('session');
		if(!$this->session->userdata('username')) redirect('admin');
	  }

  public function view($page = 'menu'){
    //Vérifier si la page demandée existe
    if (!file_exists(APPPATH.'views/home/'.$page.'.php')){
      //La page n'existe pas
      show_404();
    }

    $data['titre'] = ucfirst($page);

    $this->load->view('header', $data);
    $this->load->view('home/'.$page, $data);
    $this->load->view('footer', $data);
  }

  public function index() {
		$this->load->view('header');
	
		if($this->session->userdata('isadmin')) $this->load->view('login_view');
		else $this->load->view('home');
	
		$this->load->view('footer');
	  }
}

?>
