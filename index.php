<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="footerheader.css">
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto&display=swap"
      rel="stylesheet"
    />
    <title>SC Heerenveen Home</title>
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
                <a href="wedstrijden.php">WEDSTRIJDEN</a>
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
    <main>
        <div class="welkom">
          <h2>
            Welkom op de site van SC Heerenveen
          </h2>
          <p>
            Wij zijn SC Heerenveen. Op deze site kan je allerlei informatie vinden over de huidige selectie van ons team, meer informatie over waar, waneer en tegen wie wij spelen. Ook kan je informatie krijgen over SC Heerenveen de organisatie en het bestuur dat deze organisatie boven alles zet! Verder kan je op de site tickets bestellen voor de aankomende wedstrijd. Voor degenen boven de 18 verkopen we ook ons speciale Abe-bier. Natuurlijk kan je ook naar onze sponsoren kijken die deze organisatie mogelijk maken te bestaan. Tenslotte kan je een bericht voor ons achter laten als je een suggestie hebt of als je iets wilt laten weten.
          </p>
        </div>
        <div class="ticketHighlight">
          <a href="tickets.php" class="ticketLink">
            <p>Bestel hier <br>uw ticket voor deze wedstrijd!</p>
          </a>
        </div>
        <div class="aankomendeWedstrijd">
          <img class='firstLogo' src='https://upload.wikimedia.org/wikipedia/en/thumb/e/e1/SC_Heerenveen_logo.svg/1200px-SC_Heerenveen_logo.svg.png' alt='SC Heerenveen logo'>
          <div class="aankomendeWedstrijdText">
            <h2>Aankomende Wedstrijd</h2>
            <p>23 December 2020</p>
            <p>14:00</p>
            <p>Sc Heerenveen - Feyenoord</p>
          </div>
          <img class='secondLogo' src='https://upload.wikimedia.org/wikipedia/en/thumb/e/e3/Feyenoord_logo.svg/1200px-Feyenoord_logo.svg.png' alt='Feyenoord logo'>
        </div>
        <div class="bierAdvertentie">
          <a href="bier-home.php" class="bierLink">
            <p>
              Bier hier!<br>Nu 2 voor de prijs van 2!
            </p>
          </a>
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