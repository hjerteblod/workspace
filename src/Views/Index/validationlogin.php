<?php

$username_error = $password_error =  "";
$username = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["username"])) {
        $username_error = "Username fehlt";
    } else {
        $username = test_input($_POST["username"]);
        if (!preg_match("/[A-Za-z0-9]+/", $username)) {
            $username_error = "Nur Buchstaben und Leerzeichen";
        }
    }

    if (empty($_POST["password"])) {
        $password_error = "Passwort fehlt";
    } else {
        $password = test_input($_POST["password"]);
        if (!preg_match("/[A-Za-z0-9]+/", $password)) {
            $password_error = "Nur Buchstaben und Leerzeichen";
        }
    }


    $content = "0";
    $handle = fopen("test.txt", "w");
    fwrite($handle, $content);
    fclose($handle);
}


function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
