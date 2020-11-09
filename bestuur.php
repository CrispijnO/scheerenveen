<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta http-equiv="Content-Type"
        content="text/html";
        charset="UTF-8">
        <link rel="stylesheet" href="bestuur.css">
        <link rel="stylesheet" href="footerheader.css">
        <meta name="robots" content="all">
        <meta name="language" content="Dutch">
        <meta name="author" content="inowhare">
        <meta name="description" content="sc hereveen">
        <meta name="keywords" content="voetbal, hereveen, abe lenstra stadion">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" >
        <title>sc hereveen</title>
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
                <a href="bestuur.php">BESTUUR</a>
                <a href="over-ons.php">OVER ONS</a>
                <a href="contact.php">CONTACT</a>
            </div>
            </div>
        </div>
        <!-- header end -->
        <main class="pagina">
            <div class="voortekst">
                <h2>Wij als club hebben veel functies en bestaan uit veel verschillende hoofden. Met talloze vrijwilligers, 
                trainers en ander personeel zijn wij trots op de mensen die onze club draaiende houden.
                <br> Wij zijn de vier bleangrijkste hoofden van sc heerenveen en leiden de club op verschillende vlakken 
                tot wat er maximaal mogelijk is.
                </h2>
            </div>
            <div class="personen">
                <figure>
                <img src="images/cees.jpg" class="bestuur">
                <br> Cees Roozemond: Algemeen directeur
                </figure>
                <figure>
                <img src="images/gerry.jpg" class="bestuur">
                <br>Gerry Hamstra:
                Technisch manager
                </figure>
                <figure>
                <img src="images/martin.jpg" class="bestuur">
                <br>Gerry Hamstra:
                Technisch manager
                </figure>
                <figure>
                <img src="images/danny.jpg" class="bestuur">
                <br>Gerry Hamstra:
                Technisch manager
                </figure>
            </div>
            <div class="andere">
               <div class="boxstr">
                    <img src="images/structuur.png" class="structuur">
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