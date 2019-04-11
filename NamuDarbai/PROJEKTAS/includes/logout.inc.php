<!--Session variables are removed and page is redirected to index.php-->
<?php
    if(isset($_POST['logOutSubmit'])) {
        session_start();
        session_unset();
        session_destroy();
        header("Location: ../index.php");
        exit();
    }
?>