    <div class="navbarLinks">
        <a class="navbar-brand" href="index.php"><img class="navbarImg img-fluid" src="images/world-306020_960_720.svg" alt="Find Your World"> <span class="pageLogoAnchor">Find Your World</span></a>
    </div>
    <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link ml-3" href="contact.php"><span class="contactMeAnchor">Contact Me</span></a>
        </li>
    </ul>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">      
<!--                -->
<!-- PHP INCLUDE-->
<!--                -->
<!--If user is logged in survey,logout and welcome messages are shown, else login and signup buttons are shown in navbar.-->
<?php
    if(isset($_SESSION['u_uid'])) {
        echo
            '<ul class = "navbar-nav ml-auto">';
                include_once 'includes/survey-check.inc.php';
            echo
                '<li>       
                    <form action="includes/logout.inc.php" method="post">
                        <button class="btn btn-outline-light my-2 my-sm-0 mr-3 logOut" type="submit" name="logOutSubmit"><i class="fas fa-sign-out-alt"></i> Logout</button>
                    </form>
                </li>
            </ul>
            <span class="navbar-text">
                <span class="welcomeMessage">Welcome ' . $_SESSION['u_uid'] .
            '</span>';
    } else {
        echo                     
        '<ul class="navbar-nav ml-auto">
            <li>
                <form class="form-inline my-2 my-lg-0">
                    <button class="btn btn-outline-light my-2 my-sm-0 mr-3 logIn" type="submit"><i class="fas fa-user"></i> Log In</button>
                </form>
            </li>
            <li>
                <form>
                    <button class="btn btn-outline-light my-2 my-sm-0 signUp" type="submit"><i class="fas fa-user-plus"></i> Sign Up</button>
                </form>
            </li>
        </ul>';
    }
?>