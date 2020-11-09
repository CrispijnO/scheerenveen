<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta http-equiv="Content-Type"
        content="text/html";
        charset="UTF-8">
        <link rel="stylesheet" href="">
        <link rel="stylesheet" type="text/css" href="BierCs.css">
        <link rel="stylesheet" type="text/css" href="footerheader.css">
        <meta name="robots" content="all">
        <meta name="language" content="Dutch">
        <meta name="author" content="inowhare">
        <meta name="description" content="sc hereveen">
        <meta name="keywords" content="voetbal, hereveen, abe lenstra stadion">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" >
        <title>ABE-bier</title>
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
    <main class="main">
      <div class="bestel">
        <form action="bier.php" method="POST">
            <div class="input">
              <label>aantal:</label>
              <input type="number" name="aantal" required/><br />
    
              <label>achternaam:</label>
              <input type="text" name="firstname" required/><br />
    
              <label>voornaam:</label>
              <input type="text" name="lastname" required/><br />
    
              <label>bent u 18+?:</label>
              <select name="adult" id="18">
                  <option value="1">ja</option>
                  <option value="0">nee</option>
              </select>
              <button type="submit" name="submit" id="sub">Submit</button>
            </div>
        <img src="images/map.png" id="kaart">       
      </div>
      <div class="informatie">
        <h1>Abe Bier</h1>
        <h3>Wij bij SC Heerenveen verkopen ABE-bier, wat is dat nou dat ABE-bier? Het ABE-bier is een fris blond bier van zes procent alcohol, met daarin een hele lichte groene tint van het gras van het Abe Lenstra Stadion.</h3>
          <h1>informatie over het verkoop van bier</h1>
          <h3> wij mogen alleen alcohol verkopen aan jongeren van 18 jaar of ouder. Daarom moeten wij de leeftijd van een jongere controleren. Iedereen die jonger is dan 18 jaar mag geen bier kopen en er wordt dus geen transactie doorgevoerd als u jonger bent.</h3>
          <img width="340" src="images/nix18.png" class="nix">
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