<!DOCTYPE html>

<html>
	<head>
		<title> My YouTube
		</title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

		<link rel = "stylesheet" type = "text/css" href="<?=base_url()?>assets/css/main.css">
	</head>

	<body>
		<div class = "container-fluid">
			<div class="row">
				<div class = "col-md-2">
					<img class="logo" src="<?=base_url()?>assets/images/logo.png" width="90"/>
				</div>
				<div class = "col-md-8">
					<form class="search">	
						<input type = "search" name = "search" class = "form-control text" placeholder = "search"/>
						<a class = "btn btn-defualt sbtn"><i class = "glyphicon glyphicon-search"></i></a>
					</form>
				</div>
					<div class = "col-md-2">
						<div style = "padding: 0.5em">

							<?php if($this->session->userdata("ID")){?>
								<a href = "<?=base_url()?>index.php/movie/add" class = "btn btn-default">
									<i class="glyphicon glyphicon-circle-arrow-up"></i>
								</a>
								<a href = "<?=base_url()?>index.php/member/dashboard" class = "btn btn-default">
									<i class = "glyphicon glyphicon-th"></i>
								</a>
								<?php 
									$photo = $this->session->userdata("PHOTO");
									if(!$photo){
										$photo = "assets/image/user.png";
									}
								?>
								<img src = "<?=base_url()?>.$photo"
									width="40" class= "img img-circle img-thumbnail"/>

								<a href = "<?=base_url()?>index.php/member/logout" class = "btn btn-default">
									LOGOUT
								</a>

								
							<!-- if You are Log Out -->
							<?php } else{ ?>

								<a href = "<?=base_url()?>index.php/member/login" class = "btn btn-default">
									LOGIN
								</a>
								<a href = "<?=base_url()?>index.php/member/register" class = "btn btn-default">
									REGISTER
								</a>

							<?php } ?>
							
					</div>
				</div>
		</div>
		<div class="row">
			<div class ="col-md-2">
				<ul class="list-group">
					<li class = "list-group-item">
							<a href = "/" class="btn">
								<i class = "glyphicon glyphicon-home"></i> HOME
							</a>
					</li>
					<li class = "list-group-item">
							<a href = "/" class="btn">
								<i class = "glyphicon glyphicon-fire"></i> Trending
							</a>
					</li>
					<li class = "list-group-item">
							<a href = "/" class="btn">
								<i class = "glyphicon glyphicon-inbox"></i> Subscription
							</a>
					</li>
					<hr/>
					<li class = "list-group-item">Library</li>
					<li class = "list-group-item">History</li>
				</ul>
			</div>