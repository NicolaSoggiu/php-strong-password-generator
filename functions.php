<?php

// Function to generate a random pasword
function generatePassword($length)
{
    $characters = "rewgvgsdfbaffgraedlfmajefvlanv@3r43t.324asdfergr";
    $password = "";
    for ($i = 0; $i < $length; $i++) {
        $password .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $password;
}

$password_length = 0;
if (isset($_GET["password"])) {
    $password_length = $_GET["password"];
}


// Function to stamp the password in html
function stampPassword($password_length)
{
    if (isset($_GET["password"]) && ($password_length != 0 && $password_length != "")) {
        echo "Your random email is :" . " " . generatePassword($password_length);
    } else if (isset($_GET["password"]) && ($password_length === 0 || $password_length === "")) {
        echo "The entered value is not valid. Try again!";
    }
}
