<?php
    $servername = "localhost";
    $username = "6012231005";
    $password = "pw1005";
    $dbname = "6012231005";

    // Create Connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed" . mysqli_connect_error());
    }

?>
