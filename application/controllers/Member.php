<?php

class Member extends CI_Controller{
    
    public function index(){

        $this->load->view('templates/header');
        $this->load->view('welcome_message');
        $this->load->view('templates/footer');

    }

    public function login(){
        
        $this->load->view('templates/header');
        $this->load->view('login_message');
        $this->load->view('templates/footer');
    }

    public function register(){
        $this->load->view('templates/header');
        $this->load->view('register_message');
        $this->load->view('templates/footer');
    }

    public function register_action(){
        $this->load->model('Member_model');
        $this->Member_model->insert_entry();
        echo "Succes";
    }

    public function all(){

         $data["name"]="Namdeesha Pathiraja";
         $data["age"]="25";

         $this->load->model('Member_model');
         $data["member"] = $this->Member_model->list_entries();

        $this->load->view('templates/header');
        $this->load->view('members_message',$data);
        $this->load->view('templates/footer');
    }
}
    

?>