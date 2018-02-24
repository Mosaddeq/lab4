<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_POST['email'];
    if (empty($email)) {
        echo "mail is empty";
    } else {
        echo $email;


?>
