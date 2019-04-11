<!--Checking if user has already submited a survey. If he is then Take a survey button will be shown, else survey results button.-->
<?php
    include_once 'db.inc.php';

    $username = $_SESSION['u_uid'];
    $sql = "SELECT * FROM survey WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);
    $result_check = mysqli_num_rows($result);

    if($result_check > 0) { echo
        '<li>
            <form>
                <button class="btn btn-outline-light my-2 my-sm-0 mr-3 surveyResults" type="submit" name="surveyResults"><i class="fas fa-poll-h"></i> Show Survey Results</button>
            </form>
        </li>';
    } else { echo
        '<li>
            <form>
                <button class="btn btn-outline-light my-2 my-sm-0 mr-3 survey" type="submit" name="surveySubmit"><i class="fas fa-poll-h"></i> Take a survey</button>
            </form>
        </li>';
    }
?>