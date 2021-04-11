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
  public function nbOccurenceModif($mail,$as){
    //SQL standard
    $sql = "select count(*) as occ from guides where email_Guides = '".$mail."' and email_Guides != '".$as."';";
    $query = $this->db->query($sql);
    return $query->result();
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
