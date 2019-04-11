<!--Checking rules for user to sign up. If There are no errors, user signs up and gets a feedback message, else user is redirected to index.php with an error message.-->
<?php
    if(isset($_POST['signUpSubmit'])) {
        include_once 'db.inc.php';
        $firstname = mysqli_real_escape_string($conn, $_POST['signUpFirstname']);
        $lastname = mysqli_real_escape_string($conn, $_POST['signUpLastname']);
        $email = mysqli_real_escape_string($conn, $_POST['signUpEmail']);
        $username = mysqli_real_escape_string($conn, $_POST['signUpUsername']);
        $password = mysqli_real_escape_string($conn, $_POST['signUpPassword']);
        
        if(empty($firstname) || empty($lastname) || empty($email) || empty($username) || empty($password)) {
            header("Location: ../index.php?signup=empty"); 
            exit();
        } else {
            if(!preg_match("/^[a-zA-Z]*$/", $firstname) || !preg_match("/^[a-zA-Z]*$/", $lastname)) {
                header("Location: ../index.php?signup=invalid");
                exit();
            } else {
                if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    header("Location: ../index.php?signup=invalidemail");
                    exit();
                } else {
                    $sql = "SELECT * FROM users WHERE username = '$username'";
                    $result = mysqli_query($conn, $sql);
                    $result_check = mysqli_num_rows($result);
                    if($result_check > 0) {
                        header("Location: ../index.php?signup=usertaken");
                        exit();
                    } else {
                        $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
                        
                        $sql = "INSERT INTO users (firstname, lastname, email, username, password)
                        VALUES('$firstname', '$lastname', '$email', '$username', '$hashedPwd');";
                        mysqli_query($conn, $sql);
                        header("Location: ../index.php?signup=success");
                        exit();
                    }
                }
            }
        }
    } else {
        header("Location: ../index.php");
        exit();
    }
?>