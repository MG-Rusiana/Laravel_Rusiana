<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Log In Page</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>


<body>
	<div class="container row justify-content-center form-group">
	<h1>Login</h1>	
	<form method="POST" action="loginConfirmation.php">
	<table class="table">
		<div class="form-group">
		<tr>
			<td>Username:</td>
			<td><input type="text" class="form-control" name="uname"></td>
		</tr>
		</div>
		<div class="form-group">
		<tr>
			<td>Password:</td>
			<td><input type="text" class="form-control" name="pwd"></td></tr>
		</tr>
			<td colspan="1"><a href='index.php'><input type='button' class="btn btn-danger" value='Back'/></a></td>
			<td colspan="1" align="center"><input type="submit" class="btn btn-info" name="btn_login" value="login"></td>
		</div>
	</div>
</body>

</html>