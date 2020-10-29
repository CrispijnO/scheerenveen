<?php
    // $host = "localhost";
    // $username = "deb85590_heerenveen1";
    // $password = "hS5LCDkkR@kHK4";
    // $dbname = "deb85590_heerenveen1";
    $connection = mysqli_connect("localhost", "root", "test", "school");
    // mysqli_connect($host, $username, $password, $dbname);
    if (!$connection){
        die("Connection failed: " . mysqli_connect_error() . "<br>");
    }else{
       echo "connection succeeded! <br>";
    }
    
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $phoneNumber = $_POST['phoneNumber'];
    $email = $_POST["email"];
    $seat = $_POST["seat"];
    
    echo $firstName . "<br>";
    echo $lastName . "<br>";
    echo $phoneNumber . "<br>";
    echo $email . "<br>";
    echo $seat . "<br>";
    
    $possibleSeats = [
      "E1","E2","E3","E4","E5","E6","E7","E8","E9","E10","E11","E12","E13","E14","E15","E16","E17","E18","E19","E20",
      "F1","F2","F3","F4","F5","F6","F7","F8","F9","F10","F11","F12",
      "A1","A2","A3","A4","A5","A6","A7","A8","A9","A10",
      "B1","B2","B3","B4","B5","B6",
      "D1","D2","D3","D4",
      "G1","G2","G3","G4",
    ];
    if (array_search(strtoupper($seat), $possibleSeats)) {
      echo "Seat is valid <Br>";
    } else {
      echo "seat is not valid <br>";
      // TODO
      die();
    };
    if (isset($firstName) || isset($lastName) || isset($phoneNumber) || isset($email) || isset($seat)) {
      echo "value is not declared.";
      // TODO
      die();
    };
    if (empty($firstName) || empty($lastName) || empty($phoneNumber) || empty($email) || empty($seat)) {
      echo "Value is empty.";
      // TODO
      die();
    };


    

    // if($volwassen != 1) {
    //   header('location: ' . $_SERVER["HTTP_REFERER"]);
    // } 

    // // php create table script

    // $createTable = "CREATE TABLE IF NOT EXISTS tickets (
    //   ID INT(11) NOT NULL KEY AUTO_INCREMENT,
    //   firstname VARCHAR(25) NOT NULL,
    //   lastname VARCHAR(25),
    //   phoneNumber VARCHAR(10) NOT NULL,
    //   email VARCHAR(50) NOT NULL,
    //   orderDate DATE NOT NULL
    //   )";
    //   if (isset($firstName))



    // $query = "INSERT INTO tickets  (firstname, lastname, phoneNumber, email, orderDate) VALUES ('$aantal', '$achternaam', '$voornaam')";
    
    // if (mysqli_query($connection, $query)) {

    // } else {
    //     echo "We ran into a problem!: " . $query . "<br>" . mysqli_error($connection);
    // }
    // mysqli_close($connection);

    // header('location: ' . $_SERVER["HTTP_REFERER"]);
  
?>