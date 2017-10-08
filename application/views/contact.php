<!DOCTYPE html>
	<html>
		<head>
			<title>Contact</title>

			<?= link_tag(base_url('assets/css/mainPage.css')) ?>
			<script src="<?= base_url('assets/javascript/login_signup.js') ?>">  
            </script>
			<!-- For font -->
			<link href='https://fonts.googleapis.com/css?family=Courgette' rel='stylesheet'>
			<!-- For Icons -->
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		</head>

		<body>
			<div id="container">
				<div id="nav-bar">
					<?php include('navbar1.php'); ?>
				</div>
				<div id="get-in-touch">
					<div id="get-in-touch-head">
						<i class="fa fa-envelope" style="font-size:35px; text-align:center; color:#609cec; margin: 50px 0 30px 0;"></i>
						<h2 >Get In Touch</h2>
						<div class="temp">
						</div>
						<p style="font-size:18px;">Get in touch with us for anything and everything</p>
					</div>

					<div id="get-in-touch-content">
						<div id="get-in-touch-content-holder">
							<div class="contacts">
								<i class="fa fa-map-marker" ></i>
								<h2 style=" font-size: 22px; line-height:60px;">Address</h2><hr style="width:90px; color:hostWhite; margin:0 auto 10px auto; opacity: 0.2;">
								<p>
									TestYourSelf<br>
									Hall-3 Room-316<br>
									NIT Durgapur<br>
									West Bengal 713209
								</p>
							</div>

							<div class="contacts">
								<i class="fa fa-envelope-o"" ></i>
								<h2 style=" font-size: 22px; line-height:60px;">E-mail</h2><hr style="width:75px; color:GhostWhite; margin:0 auto 10px auto; opacity: 0.2;">
								<p>suport@testyourself.com</p>
							</div>
							<div class="contacts">
								<i class="fa fa-phone" ></i>
								<h2 style=" font-size: 22px; line-height:60px;">Call</h2>
								<hr style="width:50px; color:GhostWhite; margin:0 auto 10px auto; opacity: 0.2;">
								<p>
									+91-9308656986<br>
									Availavle Monday <br>to friday between <br>9am to 6pm
								</p>
							</div>
							<div class="contacts">
								<i class="fa fa-question" ></i>
								<h2 style=" font-size: 22px; line-height:60px;">FAQ</h2>
								<hr style="width:50px; color:GhostWhite; margin:0 auto 10px auto; opacity: 0.2;">
								<p>
									Answers to the most<br> frequently asked<br>questions about <br><a href="#" style="text-decoration: none; color:#609cec;">TestYourSelf</a>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>

		</body>
	</html>