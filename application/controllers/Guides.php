<?php
class Guides extends MY_Controller{
  public function __construct(){
    parent::__construct();
    $this->load->model('Guides_model');
  }

  public function tous(){
    $data['guides'] = $this->Guides_model->getAll();
    $data['titre'] = 'Liste des guides';

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
    $this->form_validation->set_rules('nom', 'Nom', 'required|max_length[24]');
    $this->form_validation->set_rules('prenom', 'Prenom', 'required|max_length[24]');
    $this->form_validation->set_rules('email', 'Email', 'required|max_length[100]|is_unique[guides.email_Guides]|valid_email',array('is_unique'=>'%s existe déjà -  !'));
    $this->form_validation->set_rules('mdp', 'Mdp', 'required|max_length[24]');
    if ($this->form_validation->run() === TRUE){
      $nom = trim($this->input->post('nom'));
      $prenom = trim($this->input->post('prenom'));
      $email = trim($this->input->post('email'));
      $mdp = trim($this->input->post('mdp'));
      $this->Guides_model->create($nom,$prenom,$email,$mdp);
    }

    $data['guides'] = $this->Guides_model->getAll();
    $this->load->view('header', $data);
    $this->load->view('guides/creer', $data);
    $this->load->view('footer');
  }
  public function occModif($str,$an){
    $this->load->model('Guides_model');
    if ($this->Guides_model->nbOccurenceModif($str,$an)[0]->occ<1){
      return TRUE;
    } else {
      return FALSE;
    }
  }
  public function modifier($id){
    $this->load->model('Guides_model');
    $this->load->helper('form');
    $this->load->library('form_validation');
    //Faire verif présence mail, is_unique ne marchant pas ici
    $data['titre'] = 'Modifier un guide';
    $data['guides'] = $this->Guides_model->get($id);
    $data['erreur'] = "";
    $this->form_validation->set_rules('code_Guides', 'Code_Guides', 'required');
    $this->form_validation->set_rules('nom', 'Nom', 'required|max_length[24]');
    $this->form_validation->set_rules('prenom', 'Prenom', 'required|max_length[24]');
    $this->form_validation->set_rules('email', 'Email', 'required|max_length[24]|valid_email');
    $this->form_validation->set_rules('mdp', 'Mdp', 'required|max_length[24]');
    if ($this->form_validation->run() === TRUE){
      $id = $this->input->post('code_Guides');
      $nom = trim($this->input->post('nom'));
      $prenom = trim($this->input->post('prenom'));
      $email = trim($this->input->post('email'));
      $mdp = trim($this->input->post('mdp'));
      if($nom === $data['guides'][0]->nom_Guides && $email === $data['guides'][0]->email_Guides && $prenom === $data['guides'][0]->prenom_Guides && $mdp === $data['guides'][0]->motdepasse_Guides){
        $data['erreur'] = "Rien n'a changé ...";
      } else if($this->occModif($email,$data['guides'][0]->email_Guides)){
        $this->Guides_model->update($id,$nom,$prenom,$email,$mdp);
        $data['erreur'] = "Fait !";
      } else {
        $data['erreur'] = "Ce mail est déjà utilisé !";
      }
    }
    $data['guides'] = $this->Guides_model->get($id);
    $this->load->view('header', $data);
    $this->load->view('guides/modifier', $data);
    $this->load->view('footer');
  }
  public function effacer($id){
    $this->load->model('Guides_model');
    $this->Guides_model->delete($id);
    $data['titre'] = 'Les guides sont';
    $data['guides'] = $this->Guides_model->getAll();
    $this->load->view('header', $data);
    $this->load->view('guides/tous', $data);
    $this->load->view('footer');
  }
}
?>
