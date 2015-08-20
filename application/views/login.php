<html>
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<title>Login and Registration</title>
	<style>
		.error {color: #FF0000;}
		.invalid { border: 2px solid #FF0000 }
		.container{margin: 20px auto; max-width: 400px; border-radius: 20px;}
		.register{
			background-color: #69D2E7;
		}
		.login{
			background-color: #00C8F8;
		}
		.alert {
			width: 500px;
			text-align: center;
			margin: 0 auto;
		}
	</style>
</head>
<body>
<?php 
        if ($this->session->userdata('error'))
        {
          ?><div class="alert alert-danger">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Error!</strong>
          <?php echo $this->session->userdata('error');
           $this->session->unset_userdata('error');
        }
?>
</div>
	<div class="container register">
  		<h2 class="text-center">Register</h2>
		<form class="text-center form-horizontal" roll='form' action='/login/register' method='post'>
			<input type='hidden' name='action' value='register'>
			<div class="form-group form-group-lg">
	    		<div class="col-sm-12">
	    			<input type="text" class="form-control " name="first_name" placeholder="Enter First Name" required>
	    		</div>
			</div>
			<div class="form-group form-group-lg">
	    		<div class="col-sm-12">
	    			<input type="text" class="form-control" name="last_name" placeholder="Enter Last Name" required>
	    		</div>
			</div>
			<div class="form-group form-group-lg">
	    		<div class="col-sm-12">
	    			<input type="email" class="form-control" name="email" placeholder="Enter Email Address" required>
	    		</div>	
			</div>
			<div class="form-group form-group-lg">
	    		<div class="col-sm-12">
	    			<input type="password" class="form-control" name="password" placeholder="Enter Password" required>
	    		</div>
			</div>
			<div class="form-group form-group-lg">
				<div class="col-sm-12">
	    			<input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" required>
	    		</div>
			</div>
			<div class="form-group form-group-lg">
				<div class="col-sm-12">
					<button type="submit" class="btn btn-lg btn-primary">Register</button>
				</div>
			</div>
		</form>
	</div>
	<div class="container login">
		<h2 class="text-center">Login</h2>
		<form class="text-center form-horizontal" roll='form' action='/login/logging_in' method='post'>
			<input type='hidden' name='action' value='login'>
			<div class="form-group">
	    		<div class="col-sm-12">
	    			<input type="email" class="form-control" name="email" placeholder="Enter Email Address" required>
	    		</div>	
			</div>
			<div class="form-group">
	    		<div class="col-sm-12">
	    			<input type="password" class="form-control" name="password" placeholder="Enter Password" required>
	    		</div>
			</div>
			<div class="form-group">
				<div class="col-sm-12">
					<button type="submit" class="btn btn-lg btn-primary">Login</button>
			</div>
		</div>
		</form>
	</div>
</body>
</html>