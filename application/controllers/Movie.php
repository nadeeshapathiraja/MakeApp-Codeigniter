<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function add()
	{
		
		$this->load->view('templates/header');
        $this->load->view('movie_message');
        $this->load->view('templates/footer');
	}
	public function add_action(){
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
}
