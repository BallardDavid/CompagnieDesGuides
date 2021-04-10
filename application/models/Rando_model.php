<?php
class Rando_model extends CI_Model{
  public function __construct(){
    $this->load->database();
  }

  public function getAll(){
    //SQL standard
    $sql = 'SELECT * FROM randonnees;';
    $query = $this->db->query($sql);
    return $query->result();
  }

  public function get($id){
    //SQL standard
    $sql = "SELECT * FROM randonnees,concerner,reserver WHERE randonnees.code_Randonnees = ".$id." AND concerner.code_Randonnees = randonnees.code_Randonnees AND reserver.code_Randonnees = randonnees.code_Randonnees AND reserver.date_Reserver = concerner.date_Concerner ORDER BY date_Reserver;";
    $query = $this->db->query($sql);
    return $query->result();
  }

}
?>
