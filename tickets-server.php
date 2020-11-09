<?php

session_start();

$succes = array();
$errors = array();

$possibleSeats = [
    "E1","E2","E3","E4","E5","E6","E7","E8","E9","E10","E11","E12","E13","E14","E15","E16","E17","E18","E19","E20",
    "F1","F2","F3","F4","F5","F6","F7","F8","F9","F10","F11","F12",
    "A1","A2","A3","A4","A5","A6","A7","A8","A9","A10",
    "B1","B2","B3","B4","B5","B6",
    "D1","D2","D3","D4",
    "G1","G2","G3","G4"
];

$db = mysqli_connect('localhost', 'deb85590_heerenveen1', 'hS5LCDkkR@kHK4', 'deb85590_heerenveen1');

if(isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
    $phone = mysqli_real_escape_string($db, $_POST['phone']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $seat = mysqli_real_escape_string($db, $_POST['seat']);
    $amount = mysqli_real_escape_string($db, $_POST['amount']);

    if(empty($name)) {
        array_push($errors, "vul uw naam in");
    }
    if(empty($lastname)) {
        array_push($errors, "vul uw achternaam in");
    }
    if(empty($phone)) {
        array_push($errors, "vul uw telefoon nummer in");
    }
    if(empty($email)) {
        array_push($errors, "vul uw e-mail adres in");
    }
    if(empty($seat)) {
        array_push($errors, "kies uw zitvak");
    } else {
        if (array_search(strtoupper($seat), $possibleSeats) == false) {
            array_push($errors, "vul een geldig zitvak in");
        }     
    }
    if($amount > 10) {
        array_push($errors, "maximaal 10 tickets per keer");
    }
    if($amount == 0) {
        array_push($errors, "minimaal 1 ticket bestellen");
    }
    
    
    if(count($errors) == 0) {
        $sql = "INSERT INTO tickets (name, lastname, phone, email, seat, amount)
        VALUES ('$name', '$lastname', '$phone', '$email', '$seat', '$amount')";

        mysqli_query($db, $sql);

        $_SESSION['$name'] = $name;
        $_SESSION['succes'] = "uw bestelling is een succes <br> u heeft voor vak " . $seat . ": " . $amount . " kaarten bestelt";
        header('location: tickets-succes.php');
    }
    
}

?>