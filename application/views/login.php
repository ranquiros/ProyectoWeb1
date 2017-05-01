
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to Jacamar Guides</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" /> 
	
</head>
<body>
 	<div class="container">  
        <br /><br /><br />  
           <form method="post" action="<?php echo base_url(); ?>login/login_validation">  
                <div class="form-group">  
                   <label>Enter Username</label>  
                   <input type="text" name="username" class="form-control" />  
                   <span class="text-danger"><?php echo form_error('username'); ?></span>                 
                </div>  
                <div class="form-group">  
                   <label>Enter Password</label>  
                   <input type="password" name="password" class="form-control" />  
                   <span class="text-danger"><?php echo form_error('password'); ?></span>  
                </div>  
                <div class="form-group">  
                   <input type="submit" name="insert" value="Login" class="btn btn-info" />  
                   <?php echo '<label class="text-danger">'.$this->session->flashdata("error").'</label>';?>  
                </div>  
           </form>  
    </div>  
<!-- <div id="container" align="center">
	<h1>Welcome to Jacamar Guides!</h1>
	<div id="body">
		<p>Please login with your credentials below</p>
		<div class="error"> </div>
		    <form class="" method="post" action="<?php echo base_url() ?> login/authenticate" >
			      Username: <input type="text" name="username" value="">
			      <br><br>
			      Password: <input type="password" name="password" value="">
			      <br><br>
		      <input type="submit" value="Login">
		      <br><br>
		    </form>
	</div>
</div> -->
</body>
</html>