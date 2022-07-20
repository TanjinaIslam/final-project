<?php
//variable declaration
$name = $nameErr = "";
$gender = $genderErr = "";
$email = $emailErr = "";
$password = $passwordErr = "";
$address = $addressErr = "";
$phone = $phoneErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //name
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = $_POST["name"];
    }

    //email
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = $_POST["email"];
    }


    //phone
    if (empty($_POST["phone"])) {
        $phoneErr = "Phone is required";
    } else {
        $phone = $_POST["phone"];
    }

    //address
    if (empty($_POST["address"])) {
        $addressErr = "Adress is required";
    } else {
        $address = $_POST["address"];
    }


    //password
    if (empty($_POST["password"])) {
        $passwordErr = "Password is required";
    }

}


