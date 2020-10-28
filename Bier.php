<?php
       // The code betweeen the php open tag and the php closing tag contains code to:
      // - connect to the database
       // - write the query
      //  - execute the query
      //  - debugging info
      //  - close the connection
    
    
    // Set the connection variables
    $servername = "localhost";
    $username = "Boerderij";
    $password = "1209";
    $dbname = "contactformulier";
    
    // Open the connection with the database
    $connection = mysqli_connect($servername, $username, $password, $dbname);
   
    // Check if connection is successful
   if (!$connection){
        die("Connection failed: " . mysqli_connect_error());
    }else{
       echo "connection succeeded!";
    }
    
    // prepare the query to be excecuted. Replace the values (John and 13. with variables of your choise. Don't mess it up!
   $aantal = $_POST['aantal'];
   $achternaam = $_POST['firstname'];
   $voornaam = $_POST['lastname'];
   $volwassen = $_POST["adult"];
  /* 
   if(empty('submit')) {
       echo "nee";

   }
   */ 
   if($volwassen != 1) {
     header('location: ' . $_SERVER["HTTP_REFERER"]);
   } 
   






    $query = "INSERT INTO klanten  (aantal, achternaam, voornaam) VALUES ('$aantal', '$achternaam', '$voornaam')";
    
    // Let's excecute the query and do some magic!
    if (mysqli_query($connection, $query)) {
        // If the line below appears in your browser, it was a succes!
         echo "A new user has been added!";
    }else{
        // If you get the message below, you made an error somewhere..
        // To debug we will print your query in the browser
        echo "We ran into a problem!: " . $query . "<br>" . mysqli_error($connection);
    }
    
    // When the query has been succesfully excecuted, or it has failed; always close the connection with the line below.
    mysqli_close($connection);

  // return to page
  header('location: ' . $_SERVER["HTTP_REFERER"]);
  
?>