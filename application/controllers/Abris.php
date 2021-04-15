<?php
class Abris extends MY_Controller{
  public function __construct(){
    parent::__construct();
    $this->load->model('Abris_model');
    $this->load->model('Vallees_model');
  }

  public function tous(){
    $data['abris'] = $this->Abris_model->getAll();
    $data['titre'] = 'Les abris sont';

    $this->load->view('header', $data);
    $this->load->view('abris/tous', $data);
    $this->load->view('footer');
  }

  public function modifier($id){ 
    
    $this->load->helper('form');
    $this->load->library('form_validation');

    if (!empty($_POST)){

    $this->form_validation->set_rules('nom', 'Nom de l\'abris', 'required|max_length[24]|alpha_numeric_spaces');
    $this->form_validation->set_rules('type_abris', 'Type d\'abris', 'in_list[refuge,cabane]');
    $this->form_validation->set_rules('altitude', 'Altitude', 'required|is_natural');
    $this->form_validation->set_rules('nb_places', 'Nombre de places', 'required|is_natural');
    $this->form_validation->set_rules('prix_nuit', 'Prix d\'une nuit', 'required|numeric'); 
    $this->form_validation->set_rules('prix_repas', 'Prix d\'un repas', 'numeric|callback_isRefuge');
    $this->form_validation->set_rules('tel_gardien', 'Téléphone du gardien', 'exact_length[10]|callback_isRefuge');
    $this->form_validation->set_rules('code_vallee', 'Code de la Vallée', 'required|max_length[3]|callback_isVallee');

    if ($this->form_validation->run() === TRUE){
      $nom = $this->input->post('nom');
      $type = $this->input->post('type_abris');
      $altitude = $this->input->post('altitude');
      $nb_places = $this->input->post('nb_places');
      $prix_nuit = $this->input->post('prix_nuit');
      if ($type == "cabane"){
        $prix_repas = null;
        $tel_gardien = null;
      }
      else{
        $prix_repas = $this->input->post('prix_repas');
        $tel_gardien = $this->input->post('tel_gardien');
      }
      $code_vallee = $this->input->post('code_vallee');
      $this->Abris_model->update($id, $nom, $type, $altitude, $nb_places, $prix_nuit, $prix_repas, $tel_gardien, $code_vallee);
      }
    }
      $data['abris'] = $this->Abris_model->getById($id);
      $data['vallees'] = $this->Vallees_model->getAll();
      $data['titre'] = "L'Abri' ".$id." est : ";
  
      $this->load->view('header', $data);
      $this->load->view('abris/modifier', $data);
      $this->load->view('footer');

  
  }

  public function add(){
    $data['vallees'] = $this->Vallees_model->getAll();

    $this->load->view('header');
    $this->load->view('abris/creer', $data);
    $this->load->view('footer');
  }

  public function creer(){
    $this->load->helper('form');
    $this->load->library('form_validation');

    $this->form_validation->set_rules('nom', 'Nom de l\'abris', 'required|max_length[24]', 
    array(
      'required'      => 'Vous devez mettre une valeur pour %s.',
      'max_length'     => 'La taille maximal pour le %s est 24 caractères'
));
    $this->form_validation->set_rules('type_abris', 'Type d\'abris', 'required|in_list[refuge,cabane]',
    array(
      'required'      => 'Vous devez mettre une valeur pour %s.'
));
    $this->form_validation->set_rules('altitude', 'Altitude', 'required|is_natural|max_length[4]',
    array(
      'required'      => 'Vous devez mettre une valeur pour %s.',
      'is_natural'     => 'Pour l\'%s, veuillez mettre une valeur naturel',
      'max_length'     => 'Pour l\'%s, veuillez mettre une valeur en dessous de 10000'
));
    $this->form_validation->set_rules('nb_places', 'Nombre de places', 'required|is_natural',
    array(
      'required'      => 'Vous devez mettre une valeur pour %s.',
      'is_natural'     => 'Pour l\'%s, veuillez mettre une valeur naturel'
));
    $this->form_validation->set_rules('prix_nuit', 'Prix d\'une nuit', 'required|numeric',
    array(
      'required'      => 'Vous devez mettre une valeur pour %s.',
      'is_natural'     => 'Pour l\'%s, veuillez mettre une valeur numérique'
)); 
    $this->form_validation->set_rules('prix_repas', 'Prix d\'un repas', 'numeric|callback_isRefuge');
    $this->form_validation->set_rules('tel_gardien', 'Téléphone du gardien', 'exact_length[10]|callback_isRefuge');
    $this->form_validation->set_rules('code_vallee', 'Code de la Vallée', 'required|max_length[3]|callback_isVallee');
    
    if ($this->form_validation->run() === TRUE){
      $nom = $this->input->post('nom');
      $type = $this->input->post('type_abris');
      $altitude = $this->input->post('altitude');
      $nb_places = $this->input->post('nb_places');
      $prix_nuit = $this->input->post('prix_nuit');
      if ($type == "cabane"){
        $prix_repas = null;
        $tel_gardien = null;
      }
      else{
        $prix_repas = $this->input->post('prix_repas');
        $tel_gardien = $this->input->post('tel_gardien');
      }
      $code_vallee = $this->input->post('code_vallee');
      $this->Abris_model->create($nom, $type, $altitude, $nb_places, $prix_nuit, $prix_repas, $tel_gardien, $code_vallee);

      $data['abris'] = $this->Abris_model->getAll();

        $this->load->view('header', $data);
        $this->load->view('abris/tous', $data);
        $this->load->view('footer');

    }
    else{
      $data['vallees'] = $this->Vallees_model->getAll();

      $this->load->view('header');
      $this->load->view('abris/creer', $data);
      $this->load->view('footer');
    }
  }

  public function isRefuge($str){
    if (empty($str) AND $this->input->post('type_abris') == "refuge"){
      $this->form_validation->set_message('isRefuge', 'Si c\'est un refuge, il doit y avoir un repas/gardien ');
      return FALSE;
    }
   else{
      return TRUE;
    }
  }

  public function isVallee($str){
    $val = $this->Vallees_model->getAll();
    foreach ($val as $v){
        if ($v->code_Vallees == $str){
          return TRUE;
        }
    }
      $this->form_validation->set_message('isVallee', 'Cette vallée ne correspond à aucune vallée dans la base de donnée');
      return FALSE;
  }

}
?>
