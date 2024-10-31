<?php 

	include 'include/header.php'; 
		if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){

			if(isset($_POST['date'])){

				$showForm = '
				
						<div class="alert alert-danger alert-dismissible fade show"role="alert">
			<strong>Are you sure, you want to update your record?</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			<form target=""method="post">
			<br>
			<input type="hidden" name="userID" value="'.$_SESSION['user_id'].'">
			<button type="submit" name="updateSave" class="btn btn-danger">Yes</button>
			<button type="button" class="btn btn-info" data-dismiss="alert">
			<span aria-hidden="true">Oops!No</span>
			</button>
		 </form>
		 </div>

				';
		}

		if(isset($_POST['userID'])){

			$userID = $_POST['userID'];

			$crntDate = date_create();
			$crntDate = date_format($crntDate, 'Y-m-d');

			$sql = "UPDATE donor SET save_life_date = '$crntDate' WHERE id = '$userID'";

			if(mysqli_query($connection, $sql)){
				$_SESSION['save_life_date'] = $crntDate;
				header("Location: index.php");
			}else{
				$submitError ='      <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                 <strong>Oops..! Data not inserted.Try again.</strong>
                                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                                 </button>
                                 </div>';
			}
		}

?>


<style>
	h1,h3{
		display: inline-block;
		padding: 10px;
	}

	.name{
		color: #e74c3c;
		font-size: 22px;
		font-weight: 700;
	}
	.donors_data{
		background-color: white;
		border-radius: 5px;
		margin:20px 5px 0px 5px;
		-webkit-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
		-moz-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
		box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
		padding: 20px;
	}
</style>

			<div class="container" style="padding: 60px 0;">
			<div class="row">
				<div class="col-md-12 col-md-push-1">
					<div class="panel panel-default" style="padding: 20px;">
						<div class="panel-body">
							<?php if(isset($submitError)) echo $submitError; ?>
								<div class="alert alert-danger alert-dismissable" style="font-size: 18px; display: none;">
    						
    								<strong>Warning!</strong> Are you sure you want a save life? If you press yes, then you will not be able to donate before 3 months.
    							
    							<div class="buttons" style="padding: 20px 10px;">
    								<input type="text" value="" hidden="true" name="today">
    								<button class="btn btn-primary" id="yes" name="yes" type="submit">Yes</button>
    								<button class="btn btn-info" id="no" name="no">No</button>
    							</div>
  							</div>
							<div class="heading text-center">
								<h3>Welcome </h3> <h1><?php if(isset($_SESSION['name'])) echo $_SESSION['name']; ?></h1>
							</div>
							<p class="text-center">Here you can mennage your account, update your profile</p>
							
							<div class="test-success text-center" id="data" style="margin-top: 20px;"><?php if(isset($showForm)) echo $showForm ?><!-- Display Message here--></div>


							<?php 
							
								$safeDate = $_SESSION['save_life_date'];
									echo $safeDate;


								if($safeDate == '0'){

									echo '<form target="" method="post">
									<button style="margin-top: 20px;" name="date" id="save_the_life" 
									type = "submit" class="btn btn-lg btn-danger center-aligned ">Save A Life</button>
								
									</form>';
								}else{

									$start = date_create("$safeDate");
									$end   = date_create();
									$diff  = date_diff( $start, $end );
									
				
									$diffMonth = $diff->m;
									

									
									if( $diffMonth >=3){

											echo '<form target="" method="post">
										<button style="margin-top: 20px;" name="date" id="save_the_life" 
										type = "submit" class="btn btn-lg btn-danger center-aligned ">Save A 
										Life</button>
										</form>';
									
									}else{
										
											echo '<div class="donors_data">
										<span class="name">Congratulations!</span>
										<span>You have already donated blood and saved a life.You may donate blood again after three months.
										Your cooperation is highly valued.</span>
									</div>';
									}		
								}
							?>

							<form target="" method="POST">
								<span class="name" 
									<?php 
										if(isset($_SESSION['user_id'])) {
											$sql = "SELECT * FROM donor WHERE id='$_SESSION[user_id]'";
											$result = mysqli_query($connection, $sql);

											if(mysqli_num_rows($result) > 0) {
												while($row = mysqli_fetch_assoc($result)) {
													$request = $row['request'];
												}
											}
										} 
										if($request == 0 or $request == 2) { 
											?> hidden="hidden" <?php } ?>
									>You have already requested for blood!
								</span>
								
								<span 
								<?php 
									if(isset($_SESSION['user_id'])) {
										$sql = "SELECT * FROM donor WHERE id='$_SESSION[user_id]'";
										$result = mysqli_query($connection, $sql);

										if(mysqli_num_rows($result) > 0) {
											while($row = mysqli_fetch_assoc($result)) {
												$request = $row['request'];
											}
										}
									} 
									if($request == 0 or $request == 2) { 
										?> hidden="hidden" <?php } ?>
									>We will notify you as soon as a donor is found. Your cooperation is highly valued.
								</span>

								<span class="name" 
								<?php 
									if(isset($_SESSION['user_id'])) {
										$sql = "SELECT * FROM donor WHERE id='$_SESSION[user_id]'";
										$result = mysqli_query($connection, $sql);

										if(mysqli_num_rows($result) > 0) {
											while($row = mysqli_fetch_assoc($result)) {
												$request = $row['request'];
												$city = $row['city'];
											}
										}
									} 
									if($request == 0 or $request == 1) { 
										?> hidden="hidden" <?php } ?>
									
									>Congratulations!
								</span>

								<span class="name" 
								<?php 
									if(isset($_SESSION['user_id'])) {
										$sql = "SELECT * FROM donor WHERE id='$_SESSION[user_id]'";
										$result = mysqli_query($connection, $sql);

										if(mysqli_num_rows($result) > 0) {
											while($row = mysqli_fetch_assoc($result)) {
												$request = $row['request'];
												$city = $row['city'];
											}
										}
									} 
									if($request == 0 or $request == 1) { 
										?> hidden="hidden" <?php } ?>
									>Your request has been accepted. You can now pickup your designated blood from any hospital or bloodbank around <?php echo $city; ?>.
								</span>
								
								<input style="margin-top: 20px" 
									<?php 
										if(isset($_SESSION['user_id'])) {
											$sql = "SELECT * FROM donor WHERE id='$_SESSION[user_id]'";
											$result = mysqli_query($connection, $sql);

											if(mysqli_num_rows($result) > 0) {
												while($row = mysqli_fetch_assoc($result)) {
													$request = $row['request'];
												}
											}
										} 
										if($request == 1 or $request == 2) {
											?> disabled="disabled" <?php } ?> 
								type="submit" name="req" class="btn btn-lg btn-danger center-aligned" value="Request Blood"/>
							
							</form>

							<?php
								$ID = $_SESSION['user_id'];
								
								if(isset($_SESSION['user_id'])) {
									$sql = "SELECT * FROM donor WHERE id='$_SESSION[user_id]'";
									$result = mysqli_query($connection, $sql);

									if(mysqli_num_rows($result) > 0) {
										while($row = mysqli_fetch_assoc($result)) {
											$request = $row['request'];
										}
									}
								}
								
								if(isset($_POST['req'])) {
									if($request == 0) {
										$request++;
										$sql = "UPDATE donor SET request='$request' WHERE id='$ID'";
										$run = mysqli_query($connection, $sql);

										if($run) {
											echo '
												<script type=text/JavaScript>
													window.location = "../index.php"
												</script>
											';
										}
									}
								}
							?>
								
						</div>
					</div>
				</div>
			</div>
		</div>
<?php

}else{
	header("Location: ../index.php");
	}

include 'include/footer.php'; 
?>