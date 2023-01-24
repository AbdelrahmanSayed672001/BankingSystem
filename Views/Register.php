
<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Banking System</title>
    <link href="../assets/css/LoginForm.css" rel="stylesheet"/>
        <link href="../assets/css/Icon.png" rel="shortcut icon" />

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

</head>
<body>

       <div class="container" >
			<div class="d-flex justify-content-center h-100">
				<div class="card" style="margin-top: 40px; padding-bottom: 15px; height: auto;width: 550px;">
					<div class="card-header">
						<h3 style="margin-left: 200px;">Sign Up</h3>
						
					</div>
					<div class="card-body">
						<form method="post" action="../Controller/RegisterControl.php">
                            <div class="input-group form-group">
								
								<input type="text" class="form-control" name="FullName" placeholder="FullName" style="margin-top:20px;" required="">
						
							</div>
                            <div class="input-group form-group">
								
								<input type="text" class="form-control" name="Address" placeholder="Address" style="margin-top:20px;" required="">
							</div>
                            <div class="input-group form-group">
								
								<input type="text" class="form-control" name="Age" placeholder="Age" style="margin-top:20px;" required="">
							</div>
                            <div class="input-group form-group">
								
								<input type="text" class="form-control" name="BankID" placeholder="Bank ID" style="margin-top:20px;" required="">
							</div>
                            <div class="input-group form-group">

								<select  name="Gender" id="Gender" class="custom-select" style="margin-top: 20px;">
                                    <option value="">Gender</option>
                                    <option name="Male" value="Male">Male</option>
                                    <option name="Female" value="Female">Female</option>
                                </select>
							</div>                            
							<div class="input-group form-group">
								
								<input type="email" class="form-control" name="Email"  placeholder="email" style="margin-top:20px;" required="">
						
							</div>
							<div class="input-group form-group">
								
								<input type="password" class="form-control" name="Password" placeholder="password" style="margin-top:20px;" required="">
							</div>

							<div class="form-group">
								<input type="submit" value="Register"  class="btn float-right login_btn">
							</div>
						</form>
					</div>
		</div>
	</div>
		</div>
    </body>
</html>



	


