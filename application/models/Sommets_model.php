<?php
class Sommets_model extends CI_Model{
  public function __construct(){
    $this->load->database();
  }

  public function getAll(){
    //SQL standard
    $sql = 'select * from sommets;';
    $query = $this->db->query($sql);
    return $query->result();
  }
  public function delete($id){
    return $this->db->delete('sommets',array('code_Sommets'=>$id));
  }
  public function get($id){
    //SQL standard
    $sql = "select * from sommets where code_Sommets = ".$id.";";
    $query = $this->db->query($sql);
    return $query->result();
  }

  public function create($nom_Sommets, $altitude_Sommets){
    $data = array('nom_Sommets'=>$nom_Sommets, 'altitude_Sommets'=>$altitude_Sommets);
    return $this->db->insert('sommets', $data);
  }
  public function update($id,$nom_Sommets, $altitude_Sommets){
    $data = array('nom_Sommets'=>$nom_Sommets, 'altitude_Sommets'=>$altitude_Sommets);
    $this->db->where('code_Sommets',$id);
    return $this->db->update('sommets',$data);
  }
}
?>
