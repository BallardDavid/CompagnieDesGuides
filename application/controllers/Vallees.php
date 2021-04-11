<?php
class Vallees extends CI_Controller{
  public function __construct(){
    parent::__construct();
  }

  public function tous(){
    $this->load->model('Vallees_model');
    $data['vallees'] = $this->Vallees_model->getAll();
    $data['titre'] = 'Les Vallees sont';

    $this->load->view('header', $data);
    $this->load->view('vallees/tous', $data);
    $this->load->view('footer');
  }

  public function parId($id){
    $this->load->model('Vallees_model');
    $data['vallees'] = $this->Vallees_model->get($id);
    $data['titre'] = "Le sommet ".$id." est : ";

    $this->load->view('header', $data);
    $this->load->view('vallees/tous', $data);
    $this->load->view('footer');
  }

  public function creer(){
    $this->load->model('Vallees_model');
    $this->load->helper('form');
    $this->load->library('form_validation');

    $data['titre'] = 'Creer une vallee';

    $this->form_validation->set_rules('nom_Vallees', 'Nom_Vallees', 'required|max_length[24]|is_unique[vallees.nom_Vallees]',array('is_unique'=>'%s existe déjà -  !'));

    if ($this->form_validation->run() === TRUE){
      $nom = trim($this->input->post('nom_Vallees'));
      $this->Vallees_model->create($nom);
    }

    $data['vallees'] = $this->Vallees_model->getAll();
    $this->load->view('header', $data);
    $this->load->view('vallees/creer', $data);
    $this->load->view('footer');
  }
  public function modifier($id){
    $this->load->model('Vallees_model');
    $this->load->helper('form');
    $this->load->library('form_validation');

    $data['titre'] = 'Modifier une vallée';
    $this->form_validation->set_rules('code_Vallees', 'Code_Vallees', 'required');
    $this->form_validation->set_rules('nom_Vallees', 'Nom_Vallees', 'required|max_length[24]|is_unique[vallees.nom_Vallees]',array('is_unique'=>'%s existe déjà -  !'));
    if ($this->form_validation->run() === TRUE){
      $id = $this->input->post('code_Vallees');
      $nom = trim($this->input->post('nom_Vallees'));
      $this->Vallees_model->update($id,$nom);
    }
    $data['vallees'] = $this->Vallees_model->get($id);
    $this->load->view('header', $data);
    $this->load->view('vallees/modifier', $data);
    $this->load->view('footer');
  }
  public function effacer($id){
    $this->load->model('Vallees_model');
    $this->Vallees_model->delete($id);
    $data['vallees'] = $this->Vallees_model->getAll();
    $data['titre'] = 'Les Vallees sont';

    $this->load->view('header', $data);
    $this->load->view('vallees/tous', $data);
    $this->load->view('footer');
  }
}
?>
