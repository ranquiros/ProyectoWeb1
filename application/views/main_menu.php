<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to Jacamar Guides</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" /> 
	
	<style type="text/css">

	.principal {
		margin: 0 auto;
		position: absolute;
		left:40%;

	}
	#button {
		padding: 0;
		
	}

	#button li {
		display: inline;

	}

	#button li a {
		font-family: Arial;
		font-size:12px;
		text-decoration: none;
		float:center;
		padding: 12px;
		background-color: #2175bc;
		color: #fff;

	}

	#button li a:hover {
		background-color: #2586d7;
		margin-top:-2px;
		padding-bottom:12px;
	}
	p {
		font-family: Arial;
		font-size:12px;
		text-decoration: none;
		float:center;
		padding: 12px;
		color: #2175bc;
		};
	</style>
</head>
<body>
	<br>
	<div class="principal">
		<ul id="button">
			<li><a href="<?php echo base_url()?>welcome">Home</a></li>
			<li><a href="<?php echo base_url()?>login">Login</a></li>
			<li><a href="<?php echo base_url()?>search">Search</a></li>
			<li><a href="<?php echo base_url()?>contact">Contact</a></li>
		</ul>
	</div>
	<br>
	<div align=center>
	<p>What do you want to do?</p>
</div>
</body>
</html>
