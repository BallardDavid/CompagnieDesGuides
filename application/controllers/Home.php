<?php
class Home extends CI_Controller{
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
}

?>
