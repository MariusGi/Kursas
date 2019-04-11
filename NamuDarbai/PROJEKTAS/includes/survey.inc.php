<!--Add survey results into database-->
<?php
    session_start();
    if(isset($_POST['surveySubmit'])) {
        include_once 'db.inc.php';
        $username = $_SESSION['u_uid'];
        $gender = mysqli_real_escape_string($conn, $_POST['surveyGender']);
        $rating = mysqli_real_escape_string($conn, $_POST['surveyRating']);
        $sql = "INSERT INTO survey (username, gender, rating)
                VALUES('$username', '$gender', '$rating');";
        mysqli_query($conn, $sql);
        header("Location: ../index.php?survey=success");
        exit();
    }
?>