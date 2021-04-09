<?php
class Guides extends CI_Controller{
  public function __construct(){
    parent::__construct();
    $this->load->model('Guides_model');
  }

  public function tous(){
    $data['guides'] = $this->Guides_model->getAll();
    $data['titre'] = 'Les guides sont';

    $this->load->view('header', $data);
    $this->load->view('guides/tous', $data);
    $this->load->view('footer');
  }

  public function parId($id){
    $data['guides'] = $this->Guides_model->get($id);
    $data['titre'] = "Le guide ".$id." est : ";

    $this->load->view('header', $data);
    $this->load->view('guides/tous', $data);
    $this->load->view('footer');
  }

  public function creer(){
    $this->load->helper('form');
    $this->load->library('form_validation');

    $data['titre'] = 'Creer un guide';

    $this->form_validation->set_rules('nom', 'Nom', 'required');
    $this->form_validation->set_rules('prenom', 'Prenom', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required');
    $this->form_validation->set_rules('mdp', 'Mdp', 'required');
    if ($this->form_validation->run() === TRUE){
      $nom = $this->input->post('nom');
      $prenom = $this->input->post('prenom');
      $email = $this->input->post('email');
      $mdp = $this->input->post('mdp');
      $this->Guides_model->create($nom,$prenom,$email,$mdp);
    }

    $data['guides'] = $this->Guides_model->getAll();

    $this->load->view('header', $data);
    $this->load->view('guides/creer', $data);
    $this->load->view('footer');
  }

  public function modifier($id){
    $this->load->helper('form');
    $this->load->library('form_validation');

    $data['titre'] = 'Creer un guide';
    $this->form_validation->set_rules('code_Guides', 'Code_Guides', 'required');
    $this->form_validation->set_rules('nom', 'Nom', 'required');
    $this->form_validation->set_rules('prenom', 'Prenom', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required');
    $this->form_validation->set_rules('mdp', 'Mdp', 'required');
    if ($this->form_validation->run() === TRUE){
      $id = $this->input->post('code_Guides');
      $nom = $this->input->post('nom');
      $prenom = $this->input->post('prenom');
      $email = $this->input->post('email');
      $mdp = $this->input->post('mdp');
      $this->Guides_model->update($id,$nom,$prenom,$email,$mdp);
    }
    $data['guides'] = $this->Guides_model->get($id);
    $this->load->view('header', $data);
    $this->load->view('guides/modifier', $data);
    $this->load->view('footer');
  }
}
?>
