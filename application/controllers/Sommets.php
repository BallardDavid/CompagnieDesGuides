<?php
class Sommets extends CI_Controller{
  public function __construct(){
    parent::__construct();
  }

  public function tous(){
    $this->load->model('Sommets_model');
    $data['sommets'] = $this->Sommets_model->getAll();
    $data['titre'] = 'Les sommets sont';

    $this->load->view('header', $data);
    $this->load->view('sommets/tous', $data);
    $this->load->view('footer');
  }

  public function parId($id){
    $this->load->model('Sommets_model');
    $data['sommets'] = $this->Sommets_model->get($id);
    $data['titre'] = "Le sommet ".$id." est : ";

    $this->load->view('header', $data);
    $this->load->view('sommets/tous', $data);
    $this->load->view('footer');
  }
  public function occ($str,$str1){
    $this->load->model('Sommets_model');
    if ($this->Sommets_model->nbOccurence($str,$str1)[0]->occ<1){
      return TRUE;
    } else {
      return FALSE;
    }
  }
  public function creer(){
    $this->load->model('Sommets_model');
    $this->load->helper('form');
    $this->load->library('form_validation');
    $data['erreur'] = "";
    $data['titre'] = 'Creer un sommet';
    $this->form_validation->set_rules('nom_Sommets', 'Nom du sommet', 'required|max_length[24]');
    $this->form_validation->set_rules('altitude_Sommets', 'Altitude du sommet', 'required|max_length[24]|is_natural');

    if ($this->form_validation->run() === TRUE){
      $nom = trim($this->input->post('nom_Sommets'));
      $altitude = $this->input->post('altitude_Sommets');
      if($this->occ($nom,$altitude)){
        $this->Sommets_model->create($nom,$altitude);
      } else {
        $data['erreur'] = "Ce couple sommet/altitude existe déjà !";
      }
    }

    $data['sommets'] = $this->Sommets_model->getAll();

    $this->load->view('header', $data);
    $this->load->view('sommets/creer', $data);
    $this->load->view('footer');
  }
  public function occModif($str,$str1,$an,$as){
    $this->load->model('Sommets_model');
    if ($this->Sommets_model->nbOccurenceModif($str,$str1,$an,$as)[0]->occ<1){
      return TRUE;
    } else {
      return FALSE;
    }
  }
  public function modifier($id){
    $this->load->model('Sommets_model');
    $this->load->helper('form');
    $this->load->library('form_validation');
    $data['sommets'] = $this->Sommets_model->get($id);
    $data['titre'] = 'Modifier un sommet';
    $data['erreur'] = "";
    $this->form_validation->set_rules('code_Sommets', 'Code_Sommets', 'required');
    $this->form_validation->set_rules('nom_Sommets', 'Nom_Sommets', 'required|max_length[24]');
    $this->form_validation->set_rules('altitude_Sommets', 'Altitude_Sommets', 'required|max_length[24]|is_natural');
    if ($this->form_validation->run() === TRUE){
      $id = $this->input->post('code_Sommets');
      $nom = trim($this->input->post('nom_Sommets'));
      $altitude = $this->input->post('altitude_Sommets');
      if($nom === $data['sommets'][0]->nom_Sommets && $altitude === $data['sommets'][0]->altitude_Sommets){
        $data['erreur'] = "Rien n'a changé ...";
      } else if($this->occModif($nom,$altitude,$data['sommets'][0]->nom_Sommets,$data['sommets'][0]->altitude_Sommets)){
        $this->Sommets_model->update($id,$nom,$altitude);
        $data['erreur'] = "Fait !";
      } else {
        $data['erreur'] = "Ce couple sommet/altitude existe déjà !";
      }
    }
    $data['sommets'] = $this->Sommets_model->get($id);
    $this->load->view('header', $data);
    $this->load->view('sommets/modifier', $data);
    $this->load->view('footer');
  }
  public function effacer($id){
    $this->load->model('Sommets_model');
    $this->Sommets_model->delete($id);
    $data['sommets'] = $this->Sommets_model->getAll();
    $data['titre'] = 'La liste des sommets';

    $this->load->view('header', $data);
    $this->load->view('sommets/tous', $data);
    $this->load->view('footer');
  }
}
?>
