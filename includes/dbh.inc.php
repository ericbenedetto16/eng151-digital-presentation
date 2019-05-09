<?php
    $servername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "eng151quiz";

    $conn = new mysqli($servername, $dbUsername, $dbPassword, $dbname);

    if(!$conn) {
        die("Connection failed: ".mysqli_connect_error());
    }
?>