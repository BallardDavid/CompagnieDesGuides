<?php
class Employes_model extends CI_Model{
  public function __construct(){
    $this->load->database();
  }

  public function get(){
    //SQL standard
    $sql = 'select * from employes;';
    $query = $this->db->query($sql);
    return $query->result();
  }

  public function find($id){
    //SQL standard
    $sql = "select * from employes where matricule = ".$id.";";
    $query = $this->db->query($sql);
    return $query->result();
  }

  public function create($nom, $prenom){
    $data = array('nom'=>$nom, 'prenom'=>$prenom);
    return $this->db->insert('employes', $data);
  }
}
?>
