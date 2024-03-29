
<html>
    <head>

        <title>Banking System</title>
        <link href="../assets/css/LoginForm.css" rel="stylesheet"/>
        <link href="../assets/css/Icon.png" rel="shortcut icon" />

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    </head>
    <body>

       <div class="container">
			<div class="d-flex justify-content-center h-100">
				<div class="card">
					<div class="card-header">
						<h3>Sign In</h3>
						
					</div>
					<div class="card-body">
						<form method="POST" action="../Controller/Login.php" >
							<div class="input-group form-group">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fas fa-user"></i></span>
								</div>
								<input type="email" name="Email" class="form-control"  placeholder="email" style="margin-top:20px;" required="">
						
							</div>
							<div class="input-group form-group">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fas fa-key"></i></span>
								</div>
								<input type="password" name="Password" class="form-control"  placeholder="password" style="margin-top:20px;" required="">
							</div>
							
							<div class="form-group">
								<input type="submit" name="signin" value="Login"  class="btn float-right login_btn">
							</div>
						</form>
					</div>
					<div class="card-footer">
						<div class="d-flex justify-content-center links">
							Don't have an account?<a href="../Views/Register.php">Sign Up</a>
						</div>
						
					</div>
		</div>
	</div>
		</div>
    </body>


</html>

