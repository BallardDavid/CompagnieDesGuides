<?php
class Rando extends CI_Controller{
  public function __construct(){
    parent::__construct();
    $this->load->model('Rando_model');
  }

  public function tous(){
    $data['rando'] = $this->Rando_model->getAll();

    $this->load->view('header', $data);
    $this->load->view('rando/tous', $data);
    $this->load->view('footer');
  }

  public function parId($id){
    $data['rando'] = $this->Rando_model->get($id);
    $data['titre'] = "La rando numéro ".$id." : ";

    $this->load->view('header', $data);
    $this->load->view('rando/spec', $data);
    $this->load->view('footer');
  }

}
?>
