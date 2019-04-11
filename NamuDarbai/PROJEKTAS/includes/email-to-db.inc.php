<!--Form data which user submit in contact.php page is saved in database.-->
<?php
    define("DB_SERVER", "localhost:3307");
    define("DB_USER", "root");
    define("DB_PASSWORD", "");
    define("DB_NAME", "projectform");

    $mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
    if($mysqli->connect_error) {
        echo "We are sorry, the site is not currently available.\n";
        echo 'Error. ' . $mysqli->connect_error . '\n';
        exit();
    }
    mysqli_query($mysqli, "INSERT INTO messages (name, email, message) VALUES('$_POST[contactFirstName]', '$_POST[contactEmail]', '$_POST[contactMessage]')");

    header('Location: ../contact.php?email=success');
    
?>