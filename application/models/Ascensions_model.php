<?php
class Ascensions_model extends CI_Model{
  public function __construct(){
    $this->load->database();
  }

  public function getAll(){
    //SQL standard
    $sql = 'select * from ascension, sommets, abris where abris.code_abris = ascension.code_abris AND sommets.code_sommets = ascension.code_sommets;';
    $query = $this->db->query($sql);
    return $query->result();
  }
  public function delete($id_S,$id_A){
    return $this->db->delete('ascension',array('code_Sommets'=>$id_S, 'code_Abris'=>$id_A));
  }
  public function get($id_S,$id_A){
    //SQL standard
    $sql = "select * from ascension, sommets, abris where abris.code_abris = ascension.code_abris AND sommets.code_sommets = ascension.code_sommets AND ascension.code_Sommets = ".$id_S." and ascension.code_Abris = ".$id_A.";";
    $query = $this->db->query($sql);
    return $query->result();
  }

  public function create($code_Sommets,$code_Abris,$difficulte_ascensions, $duree_Ascension){
    $data = array('code_Sommets'=>$code_Sommets,'code_Abris'=>$code_Abris,'difficulte_ascension'=>$difficulte_ascensions,'duree_Ascension'=>$duree_Ascension);
    return $this->db->insert('ascension', $data);
  }
  public function update($id_S,$id_A,$difficulte_ascensions, $duree_Ascension){
    $this->db->delete('ascension',array('code_Sommets'=>$id_S, 'code_Abris'=>$id_A));
    $data = array('code_Sommets'=>$id_S,'code_Abris'=>$id_A,'difficulte_ascension'=>$difficulte_ascensions,'duree_Ascension'=>$duree_Ascension);
    return $this->db->insert('ascension', $data);
  }
}
?>
