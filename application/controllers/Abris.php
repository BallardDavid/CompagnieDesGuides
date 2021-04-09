<?php
class Abris extends CI_Controller{
  public function __construct(){
    parent::__construct();
    $this->load->model('Abris_model');
  }

  public function tous(){
    $data['abris'] = $this->Abris_model->getAll();
    $data['titre'] = 'Les abris sont';

    $this->load->view('header', $data);
    $this->load->view('abris/tous', $data);
    $this->load->view('footer');
  }

  public function parId($id){
    $data['abris'] = $this->Abris_model->get($id);
    $data['titre'] = "Le guide ".$id." est : ";

    $this->load->view('header', $data);
    $this->load->view('abris/tous', $data);
    $this->load->view('footer');
  }

  public function add(){
    $this->load->view('header');
    $this->load->view('abris/creer');
    $this->load->view('footer');
  }

  public function creer(){
    $this->load->helper('form');
    $this->load->library('form_validation');

    $this->form_validation->set_rules('nom', 'Nom de l\'abris', 'required|max_length[24]');
    $this->form_validation->set_rules('type_abris', 'Type d\'abris', 'callback_isAbri');
    $this->form_validation->set_rules('altitude', 'Altitude', 'required|is_natural');
    $this->form_validation->set_rules('nb_places', 'Nombre de places', 'required|is_natural');
    $this->form_validation->set_rules('prix_nuit', 'Prix d\'une nuit', 'required|numeric');
    $this->form_validation->set_rules('prix_repas', 'Prix d\'un repas', 'callback_isRefuge|numeric');
    $this->form_validation->set_rules('tel_gardien', 'Téléphone du gardien', 'callback_isRefuge');
    $this->form_validation->set_rules('code_vallee', 'Code de la Vallée', 'required|max_length[3]');

    if ($this->form_validation->run() === TRUE){
      $nom = $this->input->post('nom');
      $type = $this->input->post('type_abris');
      $altitude = $this->input->post('altitude');
      $nb_places = $this->input->post('nb_places');
      $prix_nuit = $this->input->post('prix_nuit');
      $prix_repas = $this->input->post('prix_repas');
      $tel_gardien = $this->input->post('tel_gardien');
      $code_vallee = $this->input->post('code_vallee');
      $this->Abris_model->create($nom, $type, $altitude, $nb_places, $prix_nuit, $prix_repas, $tel_gardien, $code_vallee);

      $data['abris'] = $this->Abris_model->getAll();

        $this->load->view('header', $data);
        $this->load->view('abris/tous', $data);
        $this->load->view('footer');

    }
    else{
      $this->load->view('header');
      $this->load->view('abris/creer');
      $this->load->view('footer');
    }
  }

  public function isAbri($str){
    if ($str == 'cabane'){
      return TRUE;
    }
    if ($str == 'refuge'){
      return TRUE;
    }
    else{
      $this->form_validation->set_message('isAbri', 'Le type d\'abri ne peut pas être autre chose que "cabane" ou "refuge" ');
      return FALSE;
    }
  }

  public function isRefuge($str){
    if ($str === null AND $this->input->post('type_Abris') === "refuge"){
      $this->form_validation->set_message('isRefuge', 'Si c\'est un refuge, il doit y avoir un repas/gardien ');
      return FALSE;
    }
   else{
      return TRUE;
    }
  }

  public function modifier($id){
    $this->load->helper('form');
    $this->load->library('form_validation');

    $data['titre'] = 'Modifier un guide';
    $this->form_validation->set_rules('code_Abris', 'Code_Abris', 'required');
    $this->form_validation->set_rules('nom', 'Nom', 'required');
    $this->form_validation->set_rules('prenom', 'Prenom', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required');
    $this->form_validation->set_rules('mdp', 'Mdp', 'required');
    if ($this->form_validation->run() === TRUE){
      $id = $this->input->post('code_Abris');
      $nom = $this->input->post('nom');
      $prenom = $this->input->post('prenom');
      $email = $this->input->post('email');
      $mdp = $this->input->post('mdp');
      $this->Abris_model->update($id,$nom,$prenom,$email,$mdp);
    }
    $data['abris'] = $this->Abris_model->get($id);
    $this->load->view('header', $data);
    $this->load->view('abris/modifier', $data);
    $this->load->view('footer');
  }
  public function effacer($id){
    $this->Abris_model->delete($id);
    $data['abris'] = $this->Abris_model->getAll();
    $data['titre'] = 'Les abris sont';

    $this->load->view('header', $data);
    $this->load->view('abris/tous', $data);
    $this->load->view('footer');
  }
}
?>
