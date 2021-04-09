<?php
class Guides_model extends CI_Model{
  public function __construct(){
    $this->load->database();
  }
  public function getAll(){
    //SQL standard
    $sql = 'select * from guides;';
    $query = $this->db->query($sql);
    return $query->result();
  }
  public function get($id){
    //SQL standard
    $sql = "select * from guides where code_Guides = ".$id.";";
    $query = $this->db->query($sql);
    return $query->result();
  }
  public function delete($id){
    return $this->db->delete('guides',array('code_Guides'=>$id));
  }
  public function create($nom_Guides, $prenom_Guides, $email_Guides,$motdepasse_Guides){
    $data = array('nom_Guides'=>$nom_Guides,'prenom_Guides'=>$prenom_Guides,'email_Guides'=>$email_Guides,'motdepasse_Guides'=>$motdepasse_Guides);
    return $this->db->insert('guides', $data);
  }
  public function update($id,$nom_Guides, $prenom_Guides, $email_Guides,$motdepasse_Guides){
    $data = array('nom_Guides'=>$nom_Guides,'prenom_Guides'=>$prenom_Guides,'email_Guides'=>$email_Guides,'motdepasse_Guides'=>$motdepasse_Guides);
    $this->db->where('code_Guides',$id);
    return $this->db->update('guides',$data);
  }
}
?>
