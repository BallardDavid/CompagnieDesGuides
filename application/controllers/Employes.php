<?php
class Employes extends CI_Controller{
  public function __construct(){
    parent::__construct();
  }

  public function tous(){
    $this->load->model('employes_model');
    $data['employes'] = $this->employes_model->get();
    $data['titre'] = 'Les employes sont';

    $this->load->view('header', $data);
    $this->load->view('employes/tous', $data);
    $this->load->view('footer');
  }

  public function parId($id){
    $this->load->model('employes_model');
    $data['employes'] = $this->employes_model->find($id);
    $data['titre'] = "L'employé ".$id." est : ";

    $this->load->view('header', $data);
    $this->load->view('employes/tous', $data);
    $this->load->view('footer');
  }

  public function creer(){
    $this->load->model('employes_model');
    $this->load->helper('form');
    $this->load->library('form_validation');

    $data['titre'] = 'Creer un employé';

    $this->form_validation->set_rules('nom', 'Nom', 'required');
    $this->form_validation->set_rules('prenom', 'Prenom', 'required');

    if ($this->form_validation->run() === TRUE){
      $nom = $this->input->post('nom');
      $prenom = $this->input->post('prenom');
      $this->employes_model->create($nom, $prenom);
    }

    $data['employes'] = $this->employes_model->get();

    $this->load->view('header', $data);
    $this->load->view('employes/creer', $data);
    $this->load->view('footer');
  }

  public function withCompetences(){
    $this->load->model('employes_model');
    $this->load->model('competences_model');
    $employes = $this->employes_model->get();

    $details = array();
    foreach($employes as $e){
      $details[$e->matricule]['competences'] = $this->competences_model->findWithEmploye($e->matricule);
    }

    $data['employes'] = $employes;
    $data['details'] = $details;
    $data['titre'] = 'Les employes sont';

    $this->load->view('header', $data);
    $this->load->view('employes/competences', $data);
    $this->load->view('footer');
  }
}
?>
