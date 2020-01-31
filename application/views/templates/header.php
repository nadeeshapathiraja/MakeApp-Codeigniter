<!DOCTYPE html>
<html>
	<head>
		<title>My YouTube</title>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

		<link rel="stylesheet" type="text/css" href="<?php base_url()?>assets/css/main.css">
	</head>

	<body>
		<div class="container-fluid">
			<!--row 1-->
			<div class="row">
				<div class="col-md-2 padding-xs">
					<img class="logo" src="<?=base_url() ?>assets/images/logo1.png" width='100' />
				</div>
				<div class="col-md-8">
					<form>
						<input type="search" name="search" class="form-control text" />
						<a class="btn btn-default sbtn"><i class="glyphicon glyphicon-search"></i></a>

					</form>
				</div>				
				<div class="col-md-2">
					<div style="padding: 0.5em">
						<a href="<?=base_url()?>index.php/movie/add" class="btn btn-default">
							<i class="glyphicon glyphicon-circle-arrow-up"></i>
						</a>
						<a href="<?=base_url()?>index.php/member/dashboard" class="btn btn-default">
							<i class="glyphicon glyphicon-th"></i>
						</a>
						<a href="<?=base_url()?>index.php/member/login" class="btn btn-defaul">
							<i class="glyphicon glyphicon-bell"></i>
						</a>
						<img src="<?=base_url()?>assets/images/user.png" width="20" height="20"/>
					</div>					
				</div>
			</div>

			<!--row 2-->
			<div class="row">
				<div class="col-md-2">
				<ul class="list-group">
					<li class="list-group-item">
						<a href="/" class="btn">
							<i class="glyphicon glyphicon-home"></i>HOME
						</a>
					</li>
					<li class="list-group-item">
						<a href="/" class="btn">
							<i class="glyphicon glyphicon-fire"></i>Trending
						</a>
					</li>
					<li class="list-group-item">
						<a href="/" class="btn">
							<i class="glyphicon glyphicon-inbox"></i>Subscriptions
						</a>
					</li>							

				</ul>
				</div>
                