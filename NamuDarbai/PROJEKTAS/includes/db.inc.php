<!--Including database connection-->
<?php
    $dbServer = "localhost:3307";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "projectform";

    $conn = mysqli_connect($dbServer, $dbUsername, $dbPassword, $dbName);
?>