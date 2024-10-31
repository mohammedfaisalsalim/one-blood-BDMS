<?php 

	//include header file
	include ('include/header.php');

?>


<div class="container-fluid header-img">
				<div class="row">
					<div class="col-md-6 offset-md-3">

						<div class="header">
							<h1 class="text-center">Saving Lives Matter!</h1>
						<p class="text-center">Donate Your blood Now To Save Lives.</p>
						</div>


						<h1 class="text-center">Search For Donors</h1>
						<hr class="white-bar text-center">

						<form action="search.php" method="get" class="form-inline text-center" style="padding: 40px 0px 0px 5px;">
							<div class="form-group text-center justify-content-center">
							
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
	<option value="Wakaf Bharu" >Wakaf Bharu</option>
</select>
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
								<button type="submit" class="btn btn-lg btn-danger">Search</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- header ends -->

			<!-- donate section -->
			<div class="container-fluid red-background">
				<div class="row">
					<div class="col-md-12">
						<h1 class="text-center"  style="color: white; font-weight: 700;padding: 10px 0 0 0;">One Blood</h1>
						<hr class="white-bar">
						<p class="text-center pera-text">
						The services of blood donation and transfusion are essential components of modern medicine and healthcare. 
						Owing to the life-threatening nature of blood products, punctilious administration is essential due to their perishable nature, 
						which calls for prompt processing. Blood management has been acknowledged as a difficult undertaking since it also saves lives.
							
						</p>
						<a href="donate.php" class="btn btn-default btn-lg text-center center-aligned">Become a Life Saver!</a>
					</div>
				</div>
			</div>
			<!-- end doante section -->
			

			<div class="container">
				<div class="row">
    				<div class="col">
    					<div class="card">
     						<h3 class="text-center red">Our Vission</h3>
								<img src="img/binoculars.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
								<p class="text-center">
									We are an organisation which aim to provide blood and services to the people who need it the most; through our strong networks of volunteers and
									parters. We want to put comapassion into practice. 
									All disaster victims in the nation and throughout the world are given care, shelter hope.
								</p>
						</div>
    				</div>
    				
    				<div class="col">
    					<div class="card">
      							<h3 class="text-center red">Our Goal</h3>
								<img src="img/target.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
								<p class="text-center">
								To eliminate the shortage of blood and ensure that safe, high-quality blood and other blood components are always available, year-round. 
								Human suffering will be lessened as a result, even in the most remote and farthest parts of the nation.
								</p>
						</div>
    				</div>
    			
    				<div class="col">
    					<div class="card">
      						<h3 class="text-center red">Our Mission</h3>
								<img src="img/goal.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
								<p class="text-center">
								Preserving life by giving blood.
								In addition to providing clients all over the world with the highest level of technological know-how we also 
								link individuals in need of blood with the kind volunteers who are willing to donate. Continual development is also one of our mission.
								</p>
							</div>
   			 		</div>
 			</div>
 		</div>

			<!-- end aboutus section -->


<?php
//include footer file
include ('include/footer.php');
 ?>