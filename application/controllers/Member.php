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

    public function logout(){
        $this->session->sess_destroy();
        header("Location: ".base_url()."index.php");
    }

    public function login_action(){
        //A.Validation must be Here
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        if($this->form_validation->run()==FALSE){
            //Faild(If faild rediret again)
            $this->load->view('templates/header');
            $this->load->view('login_message');
            $this->load->view('templates/footer');

        }else{
            //Success
            $this->load->model('Member_model');
            //insert data to database
            

            if($this->Member_model->auth()){
                header("Location:".base_url()."index.php");
            }else{
                $this->session->set_flashdata("MSG","UserName / Password Invaild.");
                header("Location:".base_url()."index.php/member/login");
            }
            
        }
    }

    public function register(){
        $this->load->view('templates/header');
        $this->load->view('register_message');
        $this->load->view('templates/footer');
    }

    public function register_action(){

        //A.Validation must be Here
        $this->form_validation->set_rules('name', 'Name', 'required|min_length[5]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[members.email]'); 

        //B.Validation Condition
        if($this->form_validation->run()==FALSE){
        //Faild(If faild rediret again)
            $this->load->view('templates/header');
            $this->load->view('register_message');
            $this->load->view('templates/footer');
        }else{
        //Success
            $this->load->model('Member_model');
            //insert data to database
            $this->Member_model->insert_entry();
            //display thank you message
            $this->load->view('templates/header');
            $this->load->view('thanku_message');
            $this->load->view('templates/footer');
        }
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