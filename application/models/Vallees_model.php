<?php
class Vallees_model extends CI_Model{
  public function __construct(){
    $this->load->database();
  }

  public function getAll(){
    //SQL standard
    $sql = 'select * from vallees;';
    $query = $this->db->query($sql);
    return $query->result();
  }
  public function delete($id){
    return $this->db->delete('vallees',array('code_vallees'=>$id));
  }
  public function get($id){
    //SQL standard
    $sql = "select * from vallees where code_vallees = ".$id.";";
    $query = $this->db->query($sql);
    return $query->result();
  }
  public function create($nom_vallees){
    $data = array('nom_vallees'=>$nom_vallees);
    return $this->db->insert('vallees', $data);
  }
  public function update($id,$nom_vallees){
    $data = array('nom_vallees'=>$nom_vallees);
    $this->db->where('code_vallees',$id);
    return $this->db->update('vallees',$data);
  }
}
?>
