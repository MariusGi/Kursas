<!--Getting survey data from database-->
<?php
    define("DB_SERVER", "localhost:3307");
    define("DB_USER", "root");
    define("DB_PASSWORD", "");
    define("DB_NAME", "projectform");

    $mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
    if($mysqli->connect_error) {
        echo "We are sorry website is currently unavailable.\n";
        echo 'Mistake. ' . $mysqli->connect_error . '\n';
        exit();
    }

    $sql = "SELECT count(gender) as maleCount 
            FROM survey
            WHERE gender='male'";
    $result = $mysqli->query($sql);
    $surveyMaleArray = $result->fetch_assoc();

    $sql = "SELECT count(gender) as femaleCount 
            FROM survey
            WHERE gender='female'";
    $result = $mysqli->query($sql);
    $surveyFemaleArray = $result->fetch_assoc();

    $sql = "SELECT count(gender) as otherCount 
            FROM survey
            WHERE gender='other'";
    $result = $mysqli->query($sql);
    $surveyOtherArray = $result->fetch_assoc();

    $sql = "SELECT round(sum(rating)/count(rating),1) as avgRating 
            FROM survey";
    $result = $mysqli->query($sql);
    $surveyAvgRating = $result->fetch_assoc(); 
?>