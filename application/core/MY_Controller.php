<?php
// admin

class MY_Controller extends CI_Controller{

    public function __construct(){
        parent::__construct();

        if(!$this->verify_admin_level()){
            redirect("login");
        }
    }

    private function verify_admin_level(){
        return $this->session->userdata("isAdmin");
    }

}
?>