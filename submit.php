<?php
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $date = $_POST["date"];
    $yearlvl = $_POST["year-level"];

    echo "checkbox". json_encode($_POST["checkbox"]) ."<br>";
    echo "first name: " .$fname ."<br>";
    echo "last name: " .$lname ."<br>";
    echo "email: " .$email ."<br>";
    echo "password: " .$password ."<br>";
    echo "date: " .$date ."<br>";
    echo "year-level: " .$yearlvl ."<br>";

?>