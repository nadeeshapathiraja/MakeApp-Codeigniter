<?php

class About extends CI_Controller{


	//http://localhost/codeigniter/youtube/index.php/about/
	//http://localhost/codeigniter/youtube/index.php/about/index
	public function index(){

		echo "About Page";
	}

	//http://localhost/codeigniter/youtube/index.php/about/mission
	public function mission(){

		echo "Mission Page";
	}

	//http://localhost/codeigniter/youtube/index.php/about/vision
	public function vision(){

		echo "Vision Page";
	}



}

?>