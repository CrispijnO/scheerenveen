<?php include('tickets-server.php') ?>

<!DOCTYPE html>
<html>
    <head>
    <meta http-equiv="Content-Type"
        content="text/html";
        charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="footerheader.css">
        <link rel="stylesheet" type="text/css" href="tickets.css">
        <meta name="robots" content="all">
        <meta name="language" content="Dutch">
        <meta name="author" content="inowhare">
        <meta name="description" content="sc hereveen">
        <meta name="keywords" content="voetbal, hereveen, abe lenstra stadion">
        <title>sc hereveen</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" >
        <title>ticket</title>
    </head>
    <body>
    <div class="header">
            <div class="heerenveen">
                <img src="images/heerenveen-logo.png" alt="logo" class="foto">
                <div class="logo-text">
                SC Heerenveen
                </div>
                <a href="sponsor.php">
                <div class="sponsoren">
                    <img src="images/Ausnutria-logo.png" alt="hoofdsponsor" class="foto-hoofdsponsor">
                </div>
                </a>
            </div>
            <div class="background">
            <div class="nav">
                <div class="index">NAVIGATIE</div>
                <a href="index.php">HOME</a>
                <a href="#">WEDSTRIJDEN</a>
                <a href="spelers.php">SPELERS</a>
                <a href="bier-home.php">BIER</a>
                <a href="tickets.php">TICKETS</a>
                <a href="sponsor.php">SPONSOREN</a>
                <a href="#">BESTUUR</a>
                <a href="over-ons.php">OVER ONS</a>
                <a href="contact.php">CONTACT</a>
            </div>
            </div>
        </div>
        <div class="container">
            <div class="input-box">
                <p class="warning">let op!<br>uw bestelt tickets voor de eerst volgende wedstrijd!</p>
                <?php include('errors.php') ?>
                <form action="tickets.php" method="POST">
                    <div class="textbox">
                      <input type="text" autocomplete="given-name" placeholder="naam" name="name">
                    </div>
                    <div class="textbox">
                      <input type="text" autocomplete="family-name" placeholder="achternaam" name="lastname">
                    </div>
                    <div class="textbox">
                      <input type="tel" placeholder="telefoon nummer" name="phone">
                    </div>
                    <div class="textbox">
                      <input type="text" autocomplete="email" placeholder="e-mail adres" name="email">
                    </div>
                    <div class="textbox">
                      <input type="text" placeholder="uw zitvak ?" name="seat" maxlength="2">
                    </div>
                    <button type="submit" name="submit" class="button">bestel</button>
                </form>
            </div>
            <div class="field-img">
              <img src="images/stadion.png">
            </div>
        </div>
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
          <br>
          placeholder@email.com
          <br>
          <br />
          Telefoon: 
          <br>
          0515-415131 
          <br>
          <br />
          Plaats:
          <br>
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