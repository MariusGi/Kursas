<!--Form which user submits in contact.php page is being sent by email to $to variable (which is currently marius.girnis@gmail.com-->
<?php
    if(isset($_POST['contactSubmit'])) {
        $firstName = $_POST['contactFirstName'];
        $email = $_POST['contactEmail'];
        $message = $_POST['contactMessage'];

        if(!empty($firstName) && !empty($email) && !empty($message)) {
            echo trim("<p>First Name: $firstName</p>");
            if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $from = "$email";
                $to = "marius.girnis@gmail.com";
                $subject = "New message";
                $autorius = 'From: ' . $firstName . ', ' . $email;
                $msgBody = htmlspecialchars($message);
                mail($to, $subject, $autorius, $msgBody, $from);

                echo trim("<p>Email: $email</p>");
            }
            echo trim('<p>Message: ' . htmlspecialchars($message) . '</p>');
        }
        include_once('email-to-db.inc.php');
    }