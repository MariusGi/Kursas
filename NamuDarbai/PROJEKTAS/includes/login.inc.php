<!--Checking rules for user to login. If There are no errors, user logs in and gets a feedback message with a new navbar content, else user is redirected to index.php with an error message.-->
<?php
    session_start(); //creates txt file in order to keep user logged in in all pages.
    if(isset($_POST['logInSubmit'])) {
        include_once 'db.inc.php';
        $username = mysqli_real_escape_string($conn, $_POST['logInUsername']);
        $password = mysqli_real_escape_string($conn, $_POST['logInPassword']);
        
        if(empty($username) || empty($password)) {
            header("Location: ../index.php?login=empty");
            exit();
        } else {
            $sql = "SELECT * FROM users WHERE username = '$username'";
            $result = mysqli_query($conn, $sql);
            $result_check = mysqli_num_rows($result);
            if($result_check < 1) {
                header("Location: ../index.php?login=no_user_found");
                exit();
            } else {
                if($row = mysqli_fetch_assoc($result)) {
                    $hashedPwdCheck = password_verify($password, $row['password']);
                    if($hashedPwdCheck == false) {
                        header("Location: ../index.php?login=incorrect_password");
                        exit();
                    } elseif($hashedPwdCheck == true) {
                        $_SESSION['u_id'] = $row['id'];
                        $_SESSION['u_first'] = $row['firstname'];
                        $_SESSION['u_last'] = $row['lastname'];
                        $_SESSION['u_email'] = $row['email'];
                        $_SESSION['u_uid'] = $row['username'];
                        header("Location: ../index.php?login=success");
                        exit();
                    }
                }
            }
        }
    } else {
        header("Location: ../index.php?login=error");
        exit();
    }
?>