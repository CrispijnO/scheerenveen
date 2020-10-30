<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="ticket.css" />
		<link rel="stylesheet" href="footerheader.css" />
		<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />
		<title>Tickets</title>
	</head>
	<body>
		<header>
			<div class="header">
				<div class="heerenveen">
					<img src="images/heerenveen-logo.png" alt="logo" class="foto" />
					<div class="logo-text"> SC Heerenveen </div>
					<a href="#">
						<div class="sponsoren">
							<img src="images/Ausnutria-logo.png" alt="hoofdsponsor" class="foto-hoofdsponsor" />
						</div>
					</a>
				</div>
				<div class="background">
					<div class="nav">
						<div class="index"> NAVIGATIE </div>
						<a href="#">HOME</a>
						<a href="#">WEDSTRIJDEN</a>
						<a href="#">SPELERS</a>
						<a href="#">BIER</a>
						<a href="#">TICKETS</a>
						<a href="#">SPONSOREN</a>
						<a href="#">BESTUUR</a>
						<a href="#">OVER ONS</a>
						<a href="#">CONTACT</a>
					</div>
				</div>
			</div>
		</header>
		<main>
			<div class="container">
				<h1 class="tCenter">Ticket verkoop</h1>
				<p class="tCenter">Deze tickets zijn voor de eerst komende wedstrijd.</p>
				<div class="ticket-box">
					<div class="ticket-left">
						<h2 class="tCenter">Sc Heerenveen - Feyenoord</h2>
						<form action="ticket-backend.php" class="ticket-form" method="POST">
							<div class="input-row">
								<div class="input-group">
									<input type="text" name="firstName" placeholder="Voor naam" id="firstName" />
								</div>
								<div class="input-group">
									<input type="text" name="lastName" placeholder="Achternaam naam" />
								</div>
							</div>
							<div class="input-row">
								<div class="input-group">
									<input type="text" name="phoneNumber" placeholder="Telefoon nummer" />
								</div>
								<div class="input-group">
									<input type="email" name="email" placeholder="E-Mail" />
								</div>
							</div>
							<div class="input-row">
								<div class="input-group">
									<input type="text" name="seat" placeholder="Zit Plaats" />
								</div>
								<div class="input-group">
									<div class="dateInput">Date: 30/10/2020</div>
								</div>
							</div>
							<input class="submit-button" type="submit" id="submit" name="buy" value="Buy Now" />
						</form>
					</div>
					<div class="ticket-right">
						<img class="stadion-img" src="./images/stadion.png" />
					</div>
				</div>
			</div>
		</main>
		<footer>
			<div class="mapouter">
				<div class="gmap_canvas">
					<iframe
						width="100%"
						height="300"
						id="gmap_canvas"
						src="https://maps.google.com/maps?q=abe%20lenstra%20&t=&z=13&ie=UTF8&iwloc=&output=embed"
						frameborder="0"
						scrolling="no"
						marginheight="0"
						marginwidth="0"
					></iframe>
				</div>
			</div>
			<div class="contactGegevens">
				<h2>Contact</h2>
				<p>
					Email:
					<br />
					placeholder@email.com
					<br />
					<br />
					Telefoon:
					<br />
					0515-415131
					<br />
					<br />
					Plaats:
					<br />
					Heerenveen
				</p>
			</div>
			<div class="volgendeWedstrijd">
				<h2>Volgende Wedstrijd</h2>
				<p>
				<?php
              		echo "23 December 2020
              		<br />
              		14:00
              		<br />
              		Sc Heerenveen - Feyenoord
              		<br>
              		<img class='firstLogo' src='https://upload.wikimedia.org/wikipedia/en/thumb/e/e1/SC_Heerenveen_logo.svg/1200px-SC_Heerenveen_logo.svg.png' alt='SC Heerenveen logo'><img class='secondLogo' src='https://upload.wikimedia.org/wikipedia/en/thumb/e/e3/Feyenoord_logo.svg/1200px-Feyenoord_logo.svg.png' alt='Feyenoord logo'>"
            	?>
				</p>
			</div>
		</footer>
	</body>
</html>
