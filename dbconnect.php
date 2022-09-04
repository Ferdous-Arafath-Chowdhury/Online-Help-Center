
<?php

    $servername = "localhost";
    $uname = "root";
    $pass = "123456";
    $db = "hc";

    $conn = mysqli_connect($servername, $uname, $pass, $db);

    if(!$conn)
    {
        die("connection failed");
    }

?>