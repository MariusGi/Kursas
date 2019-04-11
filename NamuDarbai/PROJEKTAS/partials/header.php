<?php
   include_once 'includes/navbar-content.inc.php';
   include_once 'includes/pop-up-forms.inc.html';
   include_once 'includes/survey-results.inc.php'; ?>
?>

<!--Getting results from the database and visualizing in the pop up.-->
                <div>
                    <i class="fas fa-male"></i>  Male: <?php echo $surveyMaleArray['maleCount']; ?>
                </div>            
                <div>
                    <i class="fas fa-female"></i>  Female: <?php echo $surveyFemaleArray['femaleCount']; ?>
                </div>            
                <div>
                    <i class="fas fa-question"></i>  Other: <?php echo $surveyOtherArray['otherCount']; ?>
                </div>            
                <div>
                    <i class="fas fa-star"></i>  Rating: <?php echo $surveyAvgRating['avgRating']; ?>
                </div>
            </div>
        </div>
    </header>
    <p class="fadeInMessage"></p>