<?php
// admin
class User extends CI_Model {
  function __construct() {
    $this->load->database();
   }

  public function verify_user($user_name, $password) {

    $sql = "SELECT * FROM users WHERE user_name = ?";
    $q = $this->db->query($sql, array($user_name));
    if(empty($q->result())){
      return false;
    }
    else{
      $hash = $q->result()[0]->user_password;
      if(password_verify($password, $hash)){
        return true;
      }else{
        return false;
      }
    }

      if ( $q->result() > 0 ) {
         // person has account with us
         return $q->row();
      }
      return false;
  }
}