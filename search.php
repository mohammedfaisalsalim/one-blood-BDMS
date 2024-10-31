<?php 

	//include header file
	include ('include/header.php');

?>
<style>
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
	h1{
		color: white;
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
		margin: 25px;
		-webkit-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
		-moz-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
		box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
		padding: 20px 10px 20px 30px;
	}
</style>
<div class="container-fluid red-background size">
	<div class="row">
		<div class="ccol-md-6 offset-md-3">
			<h1 class="text-center">Search Donors</h1>
			<hr class="white-bar">
			<br>
			<div class="form-inline text-center" style="padding: 40px 0px 0px 5px;">
							<div class="form-group text-center center-aligned">
								<select style="width: 220px; height: 45px;" name="city" id="city" class="form-control demo-default" required>
	<option value="">-- Select --</option><optgroup title="Johor" label="&raquo; Johor"></optgroup>
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
	<option value="Wakaf Bharu" >Wakaf Bharu</option></select>
							</div>
							<div class="form-group center-aligned">
								<select name="blood_group" id="blood_group" style="padding: 0 20px; width: 220px; height: 45px;" class="form-control demo-default text-center margin10px">

									<option value="A+">A+</option>
									<option value="A-">A-</option>
									<option value="B+">B+</option>
									<option value="B-">B-</option>
									<option value="AB+">AB+</option>
									<option value="AB-">AB-</option>
									<option value="O+">O+</option>
									<option value="O-">O-</option>

								</select>
							</div>
							<div class="form-group center-aligned">
								<button type="button" class="btn btn-lg btn-default" id="search">Search</button>
							</div>
						</div>
		</div>
	</div>
</div>
<div class="container" style="padding: 60px 0 60px 0;">
	<div class="row " id="data">

		<!-- Display The Search Result -->
	<?php
		if( ( isset($_GET['city']) && !empty($_GET['city']) ) && ( isset($_GET['blood_group']) && !empty($_GET['blood_group']))){
			
			$city = $_GET['city'];
			$blood_group = $_GET['blood_group'];

			$sql = "SELECT * FROM donor WHERE city='$city' OR blood_group='$blood_group' ";

			$result = mysqli_query($connection, $sql);

			if(mysqli_num_rows($result)>0){

				while($row = mysqli_fetch_assoc($result)){
					if($row['save_life_date']=='0'){

							echo '
							
						<div class="col-md-3 col-sm-12 col-lg-3 donors_data">
							<span class="name">'.$row['name'].'</span>
							<span>'.$row['city'].'</span>
							<span>'.$row['blood_group'].'</span>
							<span>'.$row['gender'].'</span>
							<span>'.$row['email'].'</span>
							<span>'.$row['contact_no'].'</span>
						</div>
							
							';
					}else{

							echo '
							
						<div class="col-md-3 col-sm-12 col-lg-3 donors_data">
							<span class="name">'.$row['name'].'</span>
							<span>'.$row['city'].'</span>
							<span>'.$row['blood_group'].'</span>
							<span>'.$row['gender'].'</span>
							<h4 class="name text-center">Donated</h4>
						</div>
							
							';
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
	}

	?>

</div>
</div>
<div class="loader" id="wait">
	<i class="fa fa-circle-o-notch fa-spin" aria-hidden="true"></i>
</div>
<?php 

	//include footer file
	include ('include/footer.php');

?>

<script type="text/javascript">

	$(function(){

		$("#search").on('click', function(){

			var city = $("#city").val();
			var blood_group = $("#blood_group").val();

			$.ajax({
						type: 'GET',
						url: 'ajaxsearch.php',
						data: {city:city,blood_group,blood_group},
						success: function(data){
							if(!data.error){
								$("#data").html(data);
							}
						}

			});
		});

	});


</script>