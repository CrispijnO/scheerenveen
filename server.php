<?php

session_start();

$errors = array();
$sended = array();

$db = mysqli_connect('localhost', 'deb85590_heerenveen1', 'hS5LCDkkR@kHK4', 'deb85590_heerenveen1');

if(isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $message = mysqli_real_escape_string($db, $_POST['message']);

    if(empty($name)) {
        array_push($errors, "vul uw naam in");
    }
    if(empty($lastname)) {
        array_push($errors, "vul uw achternaam in");
    }
    if(empty($email)) {
        array_push($errors, "vul uw e-mail adres in");
    }
    if(empty($message)) {
        array_push($errors, "vul uw bericht in");
    }
    if(count($errors) == 0) {
        $sql = "INSERT INTO contact (name, last, email, message)
        VALUES ('$name', '$lastname', '$email', '$message')";

        mysqli_query($db, $sql);

        $_SESSION['$name'] = $name;
        $_SESSION['succes'] = "uw bericht is verzonden";
        header('location: succes.php');
    }
    
}

?>