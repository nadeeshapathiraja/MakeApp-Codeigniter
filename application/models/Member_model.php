<?php

	/**
	 * 
	 */
	class Member_model extends CI_Model
	{
		
		public function insert_entry()
		{

			$config['upload_path']          = './uploads/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 1000000;
            $config['max_width']            = 10240;
            $config['max_height']           = 76800;

            $this->load->library('upload', $config);

			if($this->upload->do_upload('photo'))
            {
                $this->photo="uploads/".$this->upload->data()["file_name"];
            }
            else
            {
                echo "Error= ".$this->upload->display_errors();
            }


			$this->name=$_POST["name"];
			$this->email=$_POST["email"];
			$this->password=$_POST["password"];
			//$this->photo=$_POST["photo"];//no photo in post array
			$this->date= time();
			$this->status=1;

			$this->db->insert('members',$this);
		}

		public function list_entries(){
			$query=$this->db->get('members',10);
			return $query->result();
		}
		public function update_entry(){
			
		}
		public function delete_entry(){
			
		}
		public function auth(){
			
			// $email= $_POST['email'];
			// $password=$_POST['password'];

			//this method in not secured then use

			// increse Security
			$email= $this->input->post('email');
			$password=$this->input->post('password');

			// Check db For This data in database or not
			$sql= "SELECT * FROM members WHERE email='$email' and password='$password'";

			$query= $this->db->query($sql);

			if($query->num_rows()>0){
				// Login Success
				$row=$query->row();
				$this->session->set_userdata("NAME",$row->name);
				$this->session->set_userdata("PHOTO",$row->photo);
				$this->session->set_userdata("ID",$row->id);
				return true;
			}else{
				// Login False
				return false;
			}


		}
	}

?>