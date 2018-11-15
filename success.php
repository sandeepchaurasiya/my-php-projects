<?php
session_start();
if(isset($_SESSION["emails"]))
{
	
}
else
{
	header("location:login.php");
}
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Welcome Page</title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/additional-methods.min.js"></script>
  <style type="text/css">
  .error{
	  color:red;
  }
  </style>
</head>
<body>
	<h1 class="text-center">Welcome Page</h1>
	<div class="container">
		<div class="row">
			<label for="">Welcome :- <?php echo $_SESSION["emails"];?></label>
			<div class="row text-center">
				<a href="logout.php">Logout</a>
			</div>	
		</div>
	</div>
</body>
</html>