<?php

    $connection = mysqli_connect('localhost', 'root', '', 'heerenveen');
   
   if (!$connection){
        die("Connection failed: " . mysqli_connect_error());
    }else{
       echo "connection succeeded!";
    }

   $aantal = $_POST['aantal'];
   $achternaam = $_POST['firstname'];
   $voornaam = $_POST['lastname'];
   $volwassen = $_POST["adult"];

   if($volwassen != 1) {
     header('location: ' . $_SERVER["HTTP_REFERER"]);
   } 

    $query = "INSERT INTO bier (aantal, achternaam, naam) VALUES ('$aantal', '$achternaam', '$voornaam')";
    
    if (mysqli_query($connection, $query)) {
         echo "A new user has been added!";
    }else{
        echo "We ran into a problem!: " . $query . "<br>" . mysqli_error($connection);
    }
    mysqli_close($connection);

  header('location: ' . $_SERVER["HTTP_REFERER"]);
  
?>