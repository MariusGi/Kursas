<?php
    session_start();

    include_once 'partials/head.html';

    echo '<body class="contactBackground">
            <header>
                <nav class="navbar navbar-expand-lg navbar-dark bg-light contactNav">
         ';

    include_once 'partials/header.php';

//If email is successfully sent, pop up message appears.
    if (isset($_GET['email'])) {
        if( $_GET['email'] == 'success'):
          echo "<script>
                $('.fadeInMessage').text('Your message has been sent!');
                $('.fadeInMessage').fadeIn(1000).delay(3000).fadeOut();
              </script>";
        endif;
    }
?>

<!--Contact Me Form-->
        </nav>
    </header>
    <div class="contactFormWrapper">
        <form action="includes/send-email.inc.php" method="post">
            <div class="container w-75">
                <div class="form-group">
                    <label><i class="fas fa-info-circle"></i> Personal information</label>
                    <input type="text" name="contactFirstName" class="form-control" id="contactFirstName" aria-describedby="contactFirstName" placeholder="First Name" required>
                </div>
                <div class="form-group">
                    <input type="email" name="contactEmail" class="form-control" id="contactEmail" placeholder="Email" required>
                </div>
                <div class="form-group"
                    <label><i class="fas fa-envelope-open"></i> <label>Your message</label>
                </div>
                <div>
                    <textarea name="contactMessage" placeholder="Enter Your Message ..." required></textarea>           
                </div>
                <div>
                    <button type="submit" name="contactSubmit" class="btn btn-success">Submit</button>
                </div>
            </div>
        </form>
    </div>

<?php
    include_once 'partials/footer.html';
?>