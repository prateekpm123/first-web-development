<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register</title>
 
	<!-- Bootstrap 4 CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
		<div class="row"></div>		
			<div class="col-md-4 offset-md-4 form-div">
				<form action="signup.php" method="post">
					<h3 class="text-center">Register</h3>

					<div class="form-group">
						<label for="username">Username</label>
						  <input type="text" name="username" class="form-control form-control lg">
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						  <input type="email" name="email" class="form-control form-control lg">
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						  <input type="password" name="password" class="form-control form-control lg">
					</div>
					<div class="form-group">
						<label for="passwordconf">Confirm Password</label>
						  <input type="password" name="passwordconf" class="form-control form-control lg">
					</div>					
					<div class="form-group">
						<button class="submit btn btn-primary btn-block btn-lg" name="signup-btn">Sign up</button>
					</div>
						
					<p class="text-center">Already a member? <a href="login.php">Sign In</a></p>
				</form>

			</div>
	</div>
</body>
</html>