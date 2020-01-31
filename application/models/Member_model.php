<?php

	/**
	 * 
	 */
	class Member_model extends CI_Model
	{
		
		public function insert_entry()
		{

			$this->name=$_POST["name"];
			$this->email=$_POST["email"];
			$this->password=$_POST["password"];
			$this->photo=$_POST["photo"];
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
	}

?>