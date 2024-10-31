<?php 

	//include header file
	include ('include/header.php');

	if(isset($_POST['adminLogin'])){

			// USERNAME INPUT CHECK
			if(isset($_POST['username'])  && !empty($_POST['username'])) {

					$username = $_POST['username'];

			}else{
	   			$usernameError ='<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Please fill in the username feild.</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>';
				}

			// PASSWORD INPUT CHECK
			if(isset($_POST['password'])  && !empty($_POST['password'])) {

				$password = $_POST['password'];

				$password = md5($password);

			}else{
			   $passwordError ='<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Please fill in the password feild.</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>';
				}


				//Login Query
				if(isset($username) && isset($password)){

						$sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
						$result = mysqli_query($connection, $sql);

						if(mysqli_num_rows($result)>0){
								
								while($row = mysqli_fetch_assoc($result)){

									$_SESSION['admin_id'] = $row['id'];
									$_SESSION['username'] = $row['username'];

									header('Location: admin/panel.php');
								}
						}else{

								$submitError ='<div class="alert alert-danger alert-dismissible fade show" role="alert">
								<strong>Sorry no record found. Please enter valid username or password.</strong>
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
								</button>
								</div>';
						}
				}
	}
?>

<style>
	.size{
		min-height: 0px;
		padding: 60px 0 60px 0;

	}
	h1{
		color: white;
	}
	.form-group{
		text-align: left;
	}
	h3{
		color: #e74c3c;
		text-align: center;
	}
	.red-bar{
		width: 25%;
	}
	.form-container{
		background-color: white;
		border: .5px solid #eee;
		border-radius: 5px;
		padding: 20px 10px 20px 30px;
		-webkit-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
-moz-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
	}
</style>
<div class="conatiner size ">
	<div class="row">
		<div class="col-md-6 offset-md-3 form-container">
		<h3>Admin Login</h3>
		<hr class="red-bar">
		
		<?php if(isset($submitError)) echo $submitError; ?>
		<!-- Erorr Messages -->

			<form action="" method="post" >
				<div class="form-group">
					<label for="username">Username</label>
					<input type="text" name="username" class="form-control" placeholder="Username" required>
					<?php if(isset($usernameError)) echo $usernameError; ?>
				</div>
				
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" name="password" placeholder="Password" required class="form-control">
					<?php if(isset($passwordError)) echo $passwordError; ?>
				</div>
				<div class="form-group">
					<button class="btn btn-danger btn-lg center-aligned" type="submit" name="adminLogin">Login</button>
				</div>
			</form>
		</div>
	</div>
</div>