<?php 

	include 'include/header.php'; 
		if(isset($_SESSION['admin_id']) && !empty($_SESSION['admin_id'])){

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

?>

<style>
	h1{
		display: inline-block;
		padding: 10px;
		color: white;
		text-align: center;
	}

	.size{
		min-height: 0px;
		padding: 60px 0px 40px 300px;
		
	}

	table {
		border-collapse: collapse;
		width: 100%;
		color: #e74c3c;
		font-family: monospace;
		font-size: 25px;
		text-align: left;
	}

	th {
		background-color: #e74c3c;
		color: white;
		text-align: center;
	}

	.size{
		min-height: 0px;
		padding: 60px 0 40px 0;
		
	}
	.loader{
		display:none;
		width:69px;
		height:89px;
		position:absolute;
		top:25%;
		left:50%;
		padding:2px;
		z-index: 1;
	}
	.loader .fa{
		color: #e74c3c;
		font-size: 52px !important;
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
	span{
		display: block;
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

	.form-group{
		text-align: left;
	}
	
	.form-container{
		padding: 20px 10px 20px 30px;
	}
</style>

<div class="container-fluid red-background size">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<h1 class="text-center">Welcome <?php if(isset($_SESSION['username'])) echo $_SESSION['username']; ?></h1>
		</div>
	</div>
</div>

<div class="container" style="padding: 60px 0;">
	<div class="row data">

		<?php 
		
			$sql = "SELECT * FROM donor";

			$result = mysqli_query($connection, $sql);

			if(mysqli_num_rows($result)>0){

				while($row = mysqli_fetch_assoc($result)){
					if($row['save_life_date']=='0'){

							echo '
							
						<div class="col-md-3 col-sm-12 col-lg-3 donors_data">
							<span class="name">'.$row['name'].'</span>
							<span>ID: '.$row['id'].'</span>
							<span>GENDER: '.$row['gender'].'</span>
							<span>EMAIL: '.$row['email'].'</span>
							<span>CITY: '.$row['city'].'</span>
							<span>D.O.B: '.$row['dob'].'</span>
							<span>CONTACT NO: '.$row['contact_no'].'</span>
							<span>DONATION DATE: '.$row['save_life_date'].'</span>
							<span>BLOOD GROUP: '.$row['blood_group'].'</span>
							<span>BLOOD REQUEST: '.$row['request'].'</span>
						</div>
							
							';
					}else{
							$date = $row['save_life_date'];
							$start = date_create("$date");
							$end = date_create();
							$diff  = date_diff( $start, $end );
						
	
									$diffMonth = $diff->m;
						

						
									if( $diffMonth >=3){
											echo '
							
										<div class="col-md-3 col-sm-12 col-lg-3 donors_data">
											<span class="name">'.$row['name'].'</span>
											<span>ID: '.$row['id'].'</span>
											<span>GENDER: '.$row['gender'].'</span>
											<span>EMAIL: '.$row['email'].'</span>
											<span>CITY: '.$row['city'].'</span>
											<span>D.O.B: '.$row['dob'].'</span>
											<span>CONTACT NO: '.$row['contact_no'].'</span>
											<span>DONATION DATE: '.$row['save_life_date'].'</span>
											<span>BLOOD GROUP: '.$row['blood_group'].'</span>
											<span>BLOOD REQUEST: '.$row['request'].'</span>
										</div>
											
											';
									}else{
										echo '
							
						<div class="col-md-3 col-sm-12 col-lg-3 donors_data">
							<span class="name">'.$row['name'].'</span>
							<span>ID: '.$row['id'].'</span>
							<span>GENDER: '.$row['gender'].'</span>
							<span>EMAIL: '.$row['email'].'</span>
							<span>CITY: '.$row['city'].'</span>
							<span>D.O.B: '.$row['dob'].'</span>
							<span>CONTACT NO: '.$row['contact_no'].'</span>
							<span>DONATION DATE: '.$row['save_life_date'].'</span>
							<span>BLOOD GROUP: '.$row['blood_group'].'</span>
							<span>BLOOD REQUEST: '.$row['request'].'</span>
							<h4 class="name text-center">Donated</h4>
						</div>
							
							';
									}
							
					}
				}

			}else{
					echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
							<strong>Data Not Found</strong>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					  		<span aria-hidden="true">&times;</span>
							</button>
				  			</div>';
			}	
		?>
	</div>
</div>	

<div class="container" style="padding: 60px 0;">
	<div class="row">
		<div class=" card col-md-6 offset-md-3">
			<div class="panel panel-default" style="padding: 20px;">
				<form class="form-group" action="" method="post" novalidate="">
          			
					<div class="form-group">
            			<label for="fullname">Full Name</label>
            			<input type="text" name="name" id="fullname" placeholder="Full Name" required pattern="[A-Za-z/\s]+" title="Only lower and upper case and space" class="form-control">
          			</div><!--full name-->

					<div class="form-group">
						<label for="id">ID</label>
						<input type="number" name="id" id="ID" placeholder="" class="form-control" value="1">
					</div>
          
					<div class="form-group">
              			<label for="name">Blood Group</label><br>
              			<select class="form-control demo-default" id="blood_group" name="blood_group" required>
							<option value="">---Select Your Blood Group---</option>
							<option value="A+">A+</option>
							<option value="A-">A-</option>
							<option value="B+">B+</option>
							<option value="B-">B-</option>
							<option value="O+">O+</option>
							<option value="O-">O-</option>
							<option value="AB+">AB+</option>
							<option value="AB-">AB-</option>
              			</select>

					</div><!--End form-group-->
            
          			<div class="form-group">
						<label for="gender">Gender</label><br>
						Male<input type="radio" name="gender" id="gender" value="Male" style="margin-left:10px; margin-right:10px; <?php if(!isset($_POST['gender'])) {?> checked <?php } ?>">
						Female<input type="radio" name="gender" id="gender" value="Female" style="margin-left:10px;">
            		</div><!--gender-->
             
            		<div class="form-inline">
              			<label for="dob">Date of Birth</label><br>
              				<select class="form-control demo-default" id="day" name="dayDOB" style="margin-bottom:10px;" required>
								<option value="">---Date---</option>
								<option value="01" >01</option>
								<option value="02" >02</option>
								<option value="03" >03</option>
								<option value="04" >04</option>
								<option value="05" >05</option>
								<option value="06" >06</option>
								<option value="07" >07</option>
								<option value="08" >08</option>
								<option value="09" >09</option>
								<option value="10" >10</option>
								<option value="11" >11</option>
								<option value="12" >12</option>
								<option value="13" >13</option>
								<option value="14" >14</option>
								<option value="15" >15</option>
								<option value="16" >16</option>
								<option value="17" >17</option>
								<option value="18" >18</option>
								<option value="19" >19</option>
								<option value="20" >20</option>
								<option value="21" >21</option>
								<option value="22" >22</option>
								<option value="23" >23</option>
								<option value="24" >24</option>
								<option value="25" >25</option>
								<option value="26" >26</option>
								<option value="27" >27</option>
								<option value="28" >28</option>
								<option value="29" >29</option>
								<option value="30" >30</option>
								<option value="31" >31</option>
              				</select>
              
							<select class="form-control demo-default" name="monthDOB" id="month" style="margin-bottom:10px;" required>
                				<option value="">---Month---</option>
                				<option value="01" >January</option>
								<option value="02" >February</option>
								<option value="03" >March</option>
								<option value="04" >April</option>
								<option value="05" >May</option>
								<option value="06" >June</option>
								<option value="07" >July</option>
								<option value="08" >August</option>
								<option value="09" >September</option>
								<option value="10" >October</option>
								<option value="11" >November</option>
								<option value="12" >December</option>
              				</select>
              
							<select class="form-control demo-default" id="year" name="yearDOB" style="margin-bottom:10px;" required>
								<option value="">---Year---</option>
								<option value="2004" >2004</option>
								<option value="2003" >2003</option>
								<option value="2002" >2002</option>
								<option value="2001" >2001</option>
								<option value="2000" >2000</option>
								<option value="1999" >1999</option>
								<option value="1998" >1998</option>
								<option value="1997" >1997</option>
								<option value="1996" >1996</option>
								<option value="1995" >1995</option>
								<option value="1994" >1994</option>
								<option value="1993" >1993</option>
								<option value="1992" >1992</option>
								<option value="1991" >1991</option>
								<option value="1990" >1990</option>
								<option value="1989" >1989</option>
								<option value="1988" >1988</option>
								<option value="1987" >1987</option>
								<option value="1986" >1986</option>
								<option value="1985" >1985</option>
								<option value="1984" >1984</option>
								<option value="1983" >1983</option>
								<option value="1982" >1982</option>
								<option value="1981" >1981</option>
								<option value="1980" >1980</option>
								<option value="1979" >1979</option>
								<option value="1978" >1978</option>
								<option value="1977" >1977</option>
								<option value="1976" >1976</option>
								<option value="1975" >1975</option>
								<option value="1974" >1974</option>
								<option value="1973" >1973</option>
								<option value="1972" >1972</option>
								<option value="1971" >1971</option>
								<option value="1970" >1970</option>
								<option value="1969" >1969</option>
								<option value="1968" >1968</option>
								<option value="1967" >1967</option>
								<option value="1966" >1966</option>
								<option value="1965" >1965</option>
								<option value="1964" >1964</option>
								<option value="1963" >1963</option>
								<option value="1962" >1962</option>
              				</select>
					</div><!--End form-group-->
           
					<div class="form-group">
						<label for="fullname">Email</label>
						<input type="text" name="email" id="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Please write correct email" class="form-control" value="<?php if(isset($email)) echo $email; ?>">
					</div>
          
          			<div class="form-group">
						<label for="contact_no">Contact No</label>
						<input type="text" name="contact_no" placeholder="03********" class="form-control" required pattern="^\d{11}$" title="11 numeric characters only" maxlength="11" value="<?php if(isset($contact_no)) echo $contact_no; ?>">
					</div><!--End form-group-->
            
					<div class="form-group">
						<label for="city">City</label>
						<select name="city" id="city" class="form-control demo-default" required>
							<option value="">-- Select --</option><optgroup title="Johor" label="&raquo; Johor"> <?php if(isset($city))  echo '<option selected="" value="'.$city.'">'.$city.'</option>'; ?></optgroup>
							<option value="Johor Baru" >Johor Baru</option>
							<option value=" Batu Pahat" > Batu Pahat</option>
							<option value="Muar" >Muar</option>
							<option value="Pontian" >Pontian</option>
							<option value="Kulaijaya" >Kulaijaya</option>
							<option value="Kota Tinggi" >Kota Tinggi</option>
							<option value="Kluang" >Kluang</option><option value="Mersing" >Mersing</option>
						
							<optgroup title="Selangor" label="&raquo; Selangor"></optgroup>
							<option value="Cyberjaya" >Cyberjaya</option>
							<option value="Klang" >Klang</option>
							<option value="Kuala Selangor" >Kuala Selangor</option>
							<option value="Kuang" >Kuang</option>
							<option value="Petaling Jaya" >Petaling Jaya</option>
							<option value="Puchong" >Puchong</option>
							<option value="Rawang" >Rawang</option>
							<option value="Selayang" >Selayang</option>
							<option value="Serendah" >Serendah</option>
							<option value="Seri Kembangan" >Seri Kembangan</option>
							<option value="Shah Alam" >Shah Alam</option>
							<option value="Subang" >Subang</option>
							<option value="Subang Jaya" >Subang Jaya</option>
							<option value="Sungai Besar" >Sungai Besar</option>
							<option value="Sungai Pelek" >Sungai Pelek</option>
							<option value="Tanjung Karang" >Tanjung Karang</option>
							<option value="Tanjung Sepat" >Tanjung Sepat</option>
						
							<optgroup title="Terengganu" label="&raquo; Terengganu"></optgroup>
							<option value="Ajil" >Ajil</option>
							<option value="Ayer Puteh" >Ayer Puteh</option>
							<option value="Bukit Besi" >Bukit Besi</option>
							<option value="Bukit Payong" >Bukit Payong</option>
							<option value="Ceneh" >Ceneh</option>
							<option value="Kerteh" >Kerteh</option>
							<option value="Kuala Berang" >Kuala Berang</option>
						
							<optgroup title="Kuala Lumpur" label="&raquo; Kuala Lumpur"></optgroup>
							<option value="Kuala Lumpur" >Kuala Lumpur</option>
						
							<optgroup title="Kedah" label="&raquo; Kedah"></optgroup>
							<option value="Alor Setar" >Alor Setar</option>
							<option value="Ayer Hitam" >Ayer Hitam</option>
							<option value="Bandar Baharu" >Bandar Baharu</option>
							<option value="Bedong" >Bedong</option>
							<option value="Changloon" >Changloon</option>
							<option value="Gurun" >Gurun</option>
							<option value="Jeniang" >Jeniang</option>
							<option value="Karangan" >Karangan</option>
							<option value="Kepala Batas" >Kepala Batas</option>
							<option value="Kodiang" >Kodiang</option>
							<option value="Kota Kuala Muda" >Kota Kuala Muda</option>
							<option value="Kuala Nerang" >Kuala Nerang</option>
							<option value="Kuala Pegang" >Kuala Pegang</option>
							<option value="Langkawi" >Langkawi</option>
							<option value="Padang Serai" >Padang Serai</option>
							<option value="Pendang" >Pendang</option>
							<option value="Pokok Sena" >Pokok Sena</option>
							<option value="Serdang" >Serdang</option>
							<option value="Sungai Petani" >Sungai Petani</option>
							<option value="Universiti Utara Malaysia" >Universiti Utara Malaysia</option>
							<option value="Yan" >Yan</option>
						
							<optgroup title="Malacca" label="&raquo; Malacca"></optgroup>
							<option value="Alor Gajah" >Alor Gajah</option>
							<option value="Ayer Keroh" >Ayer Keroh</option>
							<option value="Batu Berendam" >Batu Berendam</option>
							<option value="Bemban" >Bemban</option>
							<option value="Bukit Baru" >Bukit Baru</option>
							<option value="Bukit Rambai" >Bukit Rambai</option>
							<option value="Jasin" >Jasin</option>
							<option value="Klebang Besar" >Klebang Besar</option>
							<option value="Kuala Sungai Baru" >Kuala Sungai Baru</option>
							<option value="Masjid Tanah" >Masjid Tanah</option>
							<option value="Melaka" >Melaka</option>
							<option value="Pulau Sebang" >Pulau Sebang</option>
							<option value="Sungai Udang" >Sungai Udang</option>
						
							<optgroup title="Kelantan" label="&raquo; Kelantan"></optgroup>
							<option value="Ayer Lanas" >Ayer Lanas</option>
							<option value="Bachok" >Bachok</option>
							<option value="Cherang Ruku" >Cherang Ruku</option>
							<option value="Dabong" >Dabong</option>
							<option value="Gua Musang" >Gua Musang</option>
							<option value="Jeli" >Jeli</option>
							<option value="Kem Desa Pahlawan" >Kem Desa Pahlawan</option>
							<option value="Ketereh" >Ketereh</option>
							<option value="Kota Bharu" >Kota Bharu</option>
							<option value="Kuala Balah" >Kuala Balah</option>
							<option value="Kuala Krai" >Kuala Krai</option>
							<option value="Machang" >Machang</option>
							<option value="Pasir Mas" >Pasir Mas</option>
							<option value="Pasir Puteh" >Pasir Puteh</option>
							<option value="Pulai Chondong" >QPulai Chondong</option>
							<option value="Rantau Panjang" >Rantau Panjang</option>
							<option value="Selising" >Selising</option>
							<option value="Tanah Merah" >Tanah Merah</option>
							<option value="Temangan" >Temangan</option>
							<option value="Tumpat" >Tumpat</option>
							<option value="Wakaf Bharu" >Wakaf Bharu</option>
						</select>
					</div>

					<div class="form-inline">
              			<label for="donation">Date of Donation</label><br>
              			<select class="form-control demo-default" id="day" name="dayDon" style="margin-bottom:10px;" required>
							<option value="0">---Date---</option>
							<option value="01" >01</option>
							<option value="02" >02</option>
							<option value="03" >03</option>
							<option value="04" >04</option>
							<option value="05" >05</option>
							<option value="06" >06</option>
							<option value="07" >07</option>
							<option value="08" >08</option>
							<option value="09" >09</option>
							<option value="10" >10</option>
							<option value="11" >11</option>
							<option value="12" >12</option>
							<option value="13" >13</option>
							<option value="14" >14</option>
							<option value="15" >15</option>
							<option value="16" >16</option>
							<option value="17" >17</option>
							<option value="18" >18</option>
							<option value="19" >19</option>
							<option value="20" >20</option>
							<option value="21" >21</option>
							<option value="22" >22</option>
							<option value="23" >23</option>
							<option value="24" >24</option>
							<option value="25" >25</option>
							<option value="26" >26</option>
							<option value="27" >27</option>
							<option value="28" >28</option>
							<option value="29" >29</option>
							<option value="30" >30</option>
							<option value="31" >31</option>
              			</select>
              
						<select class="form-control demo-default" name="monthDon" id="month" style="margin-bottom:10px;" required>
							<option value="0">---Month---</option>
							<option value="01" >January</option>
							<option value="02" >February</option>
							<option value="03" >March</option>
							<option value="04" >April</option>
							<option value="05" >May</option>
							<option value="06" >June</option>
							<option value="07" >July</option>
							<option value="08" >August</option>
							<option value="09" >September</option>
							<option value="10" >October</option>
							<option value="11" >November</option>
							<option value="12" >December</option>
						</select>
			
						<select class="form-control demo-default" id="year" name="yearDon" style="margin-bottom:10px;" required>
							<option value="0">---Year---</option>
							<option value="2004" >2004</option>
							<option value="2003" >2003</option>
							<option value="2002" >2002</option>
							<option value="2001" >2001</option>
							<option value="2000" >2000</option>
							<option value="1999" >1999</option>
							<option value="1998" >1998</option>
							<option value="1997" >1997</option>
							<option value="1996" >1996</option>
							<option value="1995" >1995</option>
							<option value="1994" >1994</option>
							<option value="1993" >1993</option>
							<option value="1992" >1992</option>
							<option value="1991" >1991</option>
							<option value="1990" >1990</option>
							<option value="1989" >1989</option>
							<option value="1988" >1988</option>
							<option value="1987" >1987</option>
							<option value="1986" >1986</option>
							<option value="1985" >1985</option>
							<option value="1984" >1984</option>
							<option value="1983" >1983</option>
							<option value="1982" >1982</option>
							<option value="1981" >1981</option>
							<option value="1980" >1980</option>
							<option value="1979" >1979</option>
							<option value="1978" >1978</option>
							<option value="1977" >1977</option>
							<option value="1976" >1976</option>
							<option value="1975" >1975</option>
							<option value="1974" >1974</option>
							<option value="1973" >1973</option>
							<option value="1972" >1972</option>
							<option value="1971" >1971</option>
							<option value="1970" >1970</option>
							<option value="1969" >1969</option>
							<option value="1968" >1968</option>
							<option value="1967" >1967</option>
							<option value="1966" >1966</option>
							<option value="1965" >1965</option>
							<option value="1964" >1964</option>
							<option value="1963" >1963</option>
							<option value="1962" >1962</option>
						</select>
					</div><!--End form-group-->

					<div class="form-group">
						<label for="request">Blood Request</label><br>
						0<input type="radio" name="req" id="req" value="0" style="margin-left:10px; margin-right:10px; <?php if(!isset($_POST['req'])) {?> checked <?php } ?>">
						1<input type="radio" name="req" id="req" value="1" style="margin-left:10px; margin-right:10px;">
						2<input type="radio" name="req" id="req" value="2" style="margin-left:10px;">
            		</div><!--gender-->

					<div class="form-group">
						<input style="margin-top: 20px;" type="submit" name="update" class="btn btn-lg btn-danger center-aligned" value="UPDATE"/>
						<input style="margin-top: 20px;" type="submit" name="delete" class="btn btn-lg btn-danger center-aligned" value="DELETE"/>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
					
<?php
	if(isset($_POST['update'])) {
	
		$donorDOB = $_POST['yearDOB']."-".$_POST['monthDOB']."-".$_POST['dayDOB'];
		
		if(($_POST['yearDon'] == '0') && ($_POST['monthDon'] == '0') && ($_POST['dayDon'] == '0')) {
			$donorDonation = '0';
		}
		else {
			$donorDonation = $_POST['yearDon']."-".$_POST['monthDon']."-".$_POST['dayDon'];
		}
		
		$sql = "UPDATE donor SET name='$_POST[name]', gender='$_POST[gender]', email='$_POST[email]', city='$_POST[city]', dob='$donorDOB', contact_no='$_POST[contact_no]', save_life_date='$donorDonation', blood_group='$_POST[blood_group]', request='$_POST[req]' WHERE id='$_POST[id]'";
		$run = mysqli_query($connection, $sql);

		if($run) {
			echo '<script type=text/JavaScript>alert("Record Updated")</script>';
		}
		else {
			echo '<script type=text/JavaScript>alert("Record was not Updated!")</script>';
		}
	}

	if(isset($_POST['delete'])) {
		$sql = "DELETE FROM donor WHERE id='$_POST[id]'";
		$run = mysqli_query($connection, $sql);

		if($run) {
			echo '<script type=text/JavaScript>alert("Record Deleted")</script>';
		}
		else {
			echo '<script type=text/JavaScript>alert("Record was not Deleted!")</script>';
		}
	}
?>

<?php
}else{
	header("Location: ../index.php");
	}
?>