<!--fading information/errors messages which are triggered by URL.-->
<?php
    if (isset($_GET['signup'])) {
        if( $_GET['signup'] == 'empty'):
            echo "<script>
                    $('.fadeInMessage').text('Error: Empty Sign Up.');
                    $('.fadeInMessage').fadeIn(1000).delay(3000).fadeOut();
                  </script>";
        endif;
    }
    if (isset($_GET['signup'])) {
        if( $_GET['signup'] == 'invalid'):
            echo "<script>
                    $('.fadeInMessage').text('Error: Invalid Sign Up.');
                    $('.fadeInMessage').fadeIn(1000).delay(3000).fadeOut();
                  </script>";
        endif;
    }
    if (isset($_GET['signup'])) {
        if( $_GET['signup'] == 'invalidemail'):
            echo "<script>
                    $('.fadeInMessage').text('Error: Invalid Email.');
                    $('.fadeInMessage').fadeIn(1000).delay(3000).fadeOut();
                  </script>";
        endif;
    }
    if (isset($_GET['signup'])) {
        if( $_GET['signup'] == 'usertaken'):
            echo "<script>
                    $('.fadeInMessage').text('Error: User taken.');
                    $('.fadeInMessage').fadeIn(1000).delay(3000).fadeOut();
                  </script>";
        endif;
    }
    if (isset($_GET['signup'])) {
        if( $_GET['signup'] == 'success'):
            echo "<script>
                    $('.fadeInMessage').text('You have been successfully registered!');
                    $('.fadeInMessage').fadeIn(1000).delay(3000).fadeOut();
                  </script>";
        endif;
    }
    if (isset($_GET['login'])) {
        if( $_GET['login'] == 'empty'):
            echo "<script>
                    $('.fadeInMessage').text('Error: Login empty.');
                    $('.fadeInMessage').fadeIn(1000).delay(3000).fadeOut();
                  </script>";
        endif;
    }
    if (isset($_GET['login'])) {
        if( $_GET['login'] == 'no_user_found'):
            echo "<script>
                    $('.fadeInMessage').text('Error: No user found.');
                    $('.fadeInMessage').fadeIn(1000).delay(3000).fadeOut();
                  </script>";
        endif;
    }
    if (isset($_GET['login'])) {
        if( $_GET['login'] == 'incorrect_password'):
            echo "<script>
                    $('.fadeInMessage').text('Error: Incorrect Password.');
                    $('.fadeInMessage').fadeIn(1000).delay(3000).fadeOut();
                  </script>";
        endif;
    }
    if (isset($_GET['login'])) {
        if( $_GET['login'] == 'success'):
            echo "<script>
                    $('.fadeInMessage').text('You are successfully logged in !');
                    $('.fadeInMessage').fadeIn(1000).delay(3000).fadeOut();
                  </script>";
        endif;
    }
    if (isset($_GET['login'])) {
        if( $_GET['login'] == 'error'):
            echo "<script>
                    $('.fadeInMessage').text('Login error.');
                    $('.fadeInMessage').fadeIn(1000).delay(3000).fadeOut();
                  </script>";
        endif;
    }
    if (isset($_GET['survey'])) {
        if( $_GET['survey'] == 'success'):
            echo "<script>
                    $('.fadeInMessage').text('Thank you for completing the survey!');
                    $('.fadeInMessage').fadeIn(1000).delay(3000).fadeOut();
                  </script>";
        endif;
    }
?>