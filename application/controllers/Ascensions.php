<?php
class Ascensions extends CI_Controller{
  public function __construct(){
    parent::__construct();
  }

  public function tous(){
    $this->load->model('Ascensions_model');
    $data['ascensions'] = $this->Ascensions_model->getAll();
    $data['titre'] = 'Liste des Ascensions';

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
  public function occ($str,$str1){
    $this->load->model('Ascensions_model');
    if ($this->Ascensions_model->nbOccurence($str,$str1)[0]->occ<1){
      return TRUE;
    } else {
      return FALSE;
    }
  }
  public function creer(){
    $this->load->model('Ascensions_model');
    $this->load->model('Sommets_model');
    $this->load->model('Abris_model');
    $this->load->helper('form');
    $this->load->library('form_validation');
    $tab_Sommet = $this->Sommets_model->getAll();
    $tab_Sommet_final = "";
    $i = 0;
    foreach($tab_Sommet as $ts){
      $i++;
      $tab_Sommet_final.=$ts->code_Sommets;
      if($i != count($tab_Sommet)){
        $tab_Sommet_final.=",";
      }  
    }
    $tab_Abris = $this->Abris_model->getAll();
    $tab_Abris_final = "";
    $i = 0;
    foreach($tab_Abris as $ts){
      $i++;
      $tab_Abris_final.=$ts->code_Abris;
      if($i != count($tab_Abris)){
        $tab_Abris_final.=",";
      }  
    }
    $data['titre'] = 'Creer une ascension';
    $data['erreur'] = "";
    $data['sommets'] = $this->Sommets_model->getAll();
    $data['abris'] = $this->Abris_model->getAll();
    //verifier existence des deux codes et aussi leurs doublons potentielles
    $this->form_validation->set_rules('code_Sommets', 'Code du sommet', 'required|in_list['.$tab_Sommet_final.']');
    $this->form_validation->set_rules('code_Abris', 'Code de l\'abris', 'required|in_list['.$tab_Abris_final.']');
    $this->form_validation->set_rules('difficulte_Ascension', 'Difficulté de l\'ascension', 'required|in_list[débutant,confirmé,expert]');
    $this->form_validation->set_rules('duree_Ascension', 'Durée de l\'ascension', 'required|is_natural');


    if ($this->form_validation->run() === TRUE){
      $code_Sommets = $this->input->post('code_Sommets');
      $code_Abris = $this->input->post('code_Abris');
      $difficulte_Ascension = trim($this->input->post('difficulte_Ascension'));
      $duree_Ascension = trim($this->input->post('duree_Ascension'));
      if($this->occ($code_Sommets,$code_Abris)){
        $this->Ascensions_model->create($code_Sommets,$code_Abris,$difficulte_Ascension,$duree_Ascension);
        $data['erreur'] = "Fait !";
      } else {
        $data['erreur'] = "Ce couple sommet/abris existe déjà !";
      }
    }
    
    $data['ascensions'] = $this->Ascensions_model->getAll();

    $this->load->view('header', $data);
    $this->load->view('ascensions/creer', $data);
    $this->load->view('footer');
  }
  public function occModif($str,$str1,$an,$as){
    $this->load->model('Ascensions_model');
    if ($this->Ascensions_model->nbOccurenceModif($str,$str1,$an,$as)[0]->occ<1){
      return TRUE;
    } else {
      return FALSE;
    }
  }
  public function modifier($code_Sommets,$code_Abris){
    $this->load->model('Ascensions_model');
    $this->load->model('Sommets_model');
    $this->load->model('Abris_model');
    $this->load->helper('form');
    $this->load->library('form_validation');
    $tab_Sommet = $this->Sommets_model->getAll();
    $tab_Sommet_final = "";
    $i = 0;
    foreach($tab_Sommet as $ts){
      $i++;
      $tab_Sommet_final.=$ts->code_Sommets;
      if($i != count($tab_Sommet)){
        $tab_Sommet_final.=",";
      }  
    }
    $tab_Abris = $this->Abris_model->getAll();
    $tab_Abris_final = "";
    $i = 0;
    foreach($tab_Abris as $ts){
      $i++;
      $tab_Abris_final.=$ts->code_Abris;
      if($i != count($tab_Abris)){
        $tab_Abris_final.=",";

      }  
    }
    $data['titre'] = 'Modifier une ascension';
    $data['erreur'] = ""; 
    $data['sommets'] = $this->Sommets_model->getAll();
    $data['abris'] = $this->Abris_model->getAll();
    //verifier existence des deux codes et aussi leurs doublons potentielle
    $this->form_validation->set_rules('code_Sommets', 'Code_Sommets', 'required|in_list['.$tab_Sommet_final.']');
    $this->form_validation->set_rules('code_Abris', 'Code_Abris', 'required|in_list['.$tab_Abris_final.']');
    $this->form_validation->set_rules('difficulte_Ascension', 'Difficulte_Ascension', 'required|in_list[débutant,confirmé,expert]');
    $this->form_validation->set_rules('duree_Ascension', 'Duree_Ascension', 'required|is_natural');
    
    $donnees = $this->Ascensions_model->get($code_Sommets,$code_Abris);

    if ($this->form_validation->run() === TRUE){
      $code_Sommets = $this->input->post('code_Sommets');
      $code_Abris = $this->input->post('code_Abris');
      $difficulte_Ascension = trim($this->input->post('difficulte_Ascension'));
      $duree_Ascension = trim($this->input->post('duree_Ascension'));
      if($code_Sommets === $donnees[0]->code_Sommets && $code_Abris === $donnees[0]->code_Abris){
        $data['erreur'] = "Rien n'a changé ...";
      } else if($this->occModif($code_Sommets,$code_Abris,$donnees[0]->code_Sommets,$donnees[0]->code_Abris)){
        $this->Ascensions_model->update($donnees[0]->code_Sommets,$donnees[0]->code_Abris,$code_Sommets,$code_Abris,$difficulte_Ascension,$duree_Ascension);
        $data['erreur'] = "Fait !";
      } else {
        $data['erreur'] = "Ce couple sommet/abris existe déjà !";
      }
    }
    
    $data['ascensions'] = $this->Ascensions_model->get($code_Sommets,$code_Abris);

    $this->load->view('header', $data);
    $this->load->view('ascensions/modifier', $data);
    $this->load->view('footer');
  }
  public function effacer($code_Sommets,$code_Abris){
    $this->load->model('Ascensions_model');
    $this->Ascensions_model->delete($code_Sommets,$code_Abris);
    $data['titre'] = 'Les ascensions sont';
    $data['ascensions'] = $this->Ascensions_model->getAll();
    $this->load->view('header', $data);
    $this->load->view('ascensions/tous', $data);
    $this->load->view('footer');
  }
}
?>
