<html>
<head>
	<meta charset="UTF-8">
	<title>Welcome <?php echo $first_name; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  	<style>
  		body {
  			text-align: center;
  		}
  	</style>
</head>
<body>
  <div class="header">
  	<h5>Welcome <?php echo $first_name; ?></h5>
  	<h5 id="logoff"> <a href="/login/logoff">logoff</a></h5>
  </div>
  <div class="container">
	  <h3>User Information</h3>
	  <h4>First Name: <?php echo $first_name ?></h4>
	  <h4>Last Name: <?php echo $last_name ?></h4>
	  <h4>Email: <?php echo $email ?></h4>
  </div>
</html