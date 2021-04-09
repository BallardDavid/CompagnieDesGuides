<?php
class Abris_model extends CI_Model{
  public function __construct(){
    $this->load->database();
  }

  public function getAll(){
    $sql = 'SELECT * FROM abris;';
    $query = $this->db->query($sql);
    return $query->result();
  }

  public function getById($id){
    $id =  mysql_real_escape_string($id);
    $sql = "SELECT * FROM employes WHERE matricule = ".$id.";";
    $query = $this->db->query($sql);
    return $query->result();
  }

  public function create($nom, $type_Abris, $altitude, $places_Abris, $prixNuit, $prixRepas, $telGardien, $codeVallee){
    $data = array('nom_Abris'=>$nom, 'type_Abris'=>$type_Abris, 'altitude_Abris'=>$altitude, 'places_Abris'=>$places_Abris, 'prixNuit_Abris'=>$prixNuit, 'prixRepas_Abris'=>$prixRepas, 'telGardien_Abris'=>$telGardien, 'code_Vallees'=>$codeVallee);
    return $this->db->insert('abris', $data);
  }

  public function update($id, $nom, $type_Abris, $altitude, $places_Abris, $prixNuit, $prixRepas, $telGardien, $codeVallee){
    $data = array('nom_Abris'=>$nom, 'type_Abris'=>$type_Abris, 'altitude_Abris'=>$altitude, 'places_Abris'=>$places_Abris, 'prixNuit_Abris'=>$prixNuit, 'prixRepas_Abris'=>$prixRepas, 'telGardien_Abris'=>$telGardien, 'code_Vallees'=>$codeVallees);
    $this->db->where('code_Abris',$id);
    return $this->db->update('abris',$data);
  }

  public function delete($id){
    return $this->db->delete('abris',array('code_Abris'=>$id));
  }
}
?>
