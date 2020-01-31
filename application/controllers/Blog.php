<?php

class Blog extends CI_Controller{

	//Optional Parameter
	public function index($name="Guest"){
		echo "All Blog Posts Here.. Welcome ".$name;
	}

	//Required Parameter
	public function view($id){

		echo "Blog Page ".$i;
	}

	
}


?>