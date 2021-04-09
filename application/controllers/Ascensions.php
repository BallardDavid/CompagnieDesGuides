<?php
class Ascensions extends CI_Controller{
  public function __construct(){
    parent::__construct();
  }

  public function tous(){
    $this->load->model('Ascensions_model');
    $data['ascensions'] = $this->Ascensions_model->getAll();
    $data['titre'] = 'Les Ascensions sont';

    $this->load->view('header', $data);
    $this->load->view('ascensions/tous', $data);
    $this->load->view('footer');
  }

  public function parId($id_S,$id_A){
    $this->load->model('Ascensions_model');
    $data['ascensions'] = $this->Ascensions_model->get($id_S,$id_A);
    $data['titre'] = "L'ascension ".$id_S . " - " .$id_A." est : ";

    $this->load->view('header', $data);
    $this->load->view('ascensions/tous', $data);
    $this->load->view('footer');
  }

  public function creer(){
    $this->load->model('Ascensions_model');
    $this->load->helper('form');
    $this->load->library('form_validation');

    $data['titre'] = 'Creer une ascension';

    $this->form_validation->set_rules('nom_Ascensions', 'Nom_Ascensions', 'required');

    if ($this->form_validation->run() === TRUE){
      $nom = $this->input->post('nom_Ascensions');
      $this->Ascensions_model->create($nom);
    }

    $data['ascensions'] = $this->Ascensions_model->getAll();

    $this->load->view('header', $data);
    $this->load->view('ascensions/creer', $data);
    $this->load->view('footer');
  }
  public function modifier($id){
    $this->load->model('Ascensions_model');
    $this->load->helper('form');
    $this->load->library('form_validation');

    $data['titre'] = 'Modifier une vallée';
    $this->form_validation->set_rules('code_Ascensions', 'Code_Ascensions', 'required');
    $this->form_validation->set_rules('nom_Ascensions', 'Nom_Ascensions', 'required');
    if ($this->form_validation->run() === TRUE){
      $id = $this->input->post('code_Ascensions');
      $nom = $this->input->post('nom_Ascensions');
      $this->Ascensions_model->update($id,$nom);
    }
    $data['ascensions'] = $this->Ascensions_model->get($id);
    $this->load->view('header', $data);
    $this->load->view('ascensions/modifier', $data);
    $this->load->view('footer');
  }
  public function effacer($id){
    $this->load->model('Ascensions_model');
    $this->Ascensions_model->delete($id);
    $data['ascensions'] = $this->Ascensions_model->getAll();
    $data['titre'] = 'Les Ascensions sont';

    $this->load->view('header', $data);
    $this->load->view('ascensions/tous', $data);
    $this->load->view('footer');
  }
}
?>
