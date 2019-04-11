//My Javascript

//Adding event listener to "Submit the survey" button. Showing survey form and changing inner html of a button.
$(".survey").on('click', function(){
    if ($(".surveyFormWrapper").css("display") == "none") {
        $(".surveyFormWrapper").css("display","flex");
        $(".surveyFormWrapper").css("position","absolute");
        $(this).html('<i class="fas fa-poll"></i> Hide Survey');
        $(this).removeClass('btn btn-outline-primary');
        $(this).addClass('btn btn-outline-success');
    } else {
        $(".surveyFormWrapper").css("display","none");
        $(this).html('<i class="fas fa-poll"></i> Take a Survey');
        $(this).removeClass('btn btn-outline-success');
        $(this).addClass('btn btn-outline-primary');
    }
    return false; //this needed for page not to refresh so that form keeps showing.
});

//Adding event listener to "Sign Up" button. Hiding Log In form, showing Sign Up form and changing inner html of a button.
$(".signUp").on('click', function(){
    if ($(".signUpFormWrapper").css("display") == "none") {
        $(".logInFormWrapper").css("display","none");
        $(".logIn").html('<i class="fas fa-user"></i> Log In');
        $(".logIn").removeClass('btn btn-outline-success');
        $(".logIn").addClass('btn btn-outline-primary');
        
        $(".signUpFormWrapper").css("display","flex");
        $(".signUpFormWrapper").css("position","absolute");
        $(this).html('<i class="fas fa-user-plus"></i> Hide Sign Up');
        $(this).removeClass('btn btn-outline-primary');
        $(this).addClass('btn btn-outline-success');
    } else {
        $(".signUpFormWrapper").css("display","none");
        $(this).html('<i class="fas fa-user-plus"></i> Sign Up');
        $(this).removeClass('btn btn-outline-success');
        $(this).addClass('btn btn-outline-primary');
    }
    return false; //this needed for page not to refresh so that form keeps showing.
});

//Adding event listener to "Log In" button. Hiding Sign Up form showing Log In form and changing inner html of a button.
$(".logIn").on('click', function(){
    if ($(".logInFormWrapper").css("display") == "none") {
        $(".signUpFormWrapper").css("display","none");
        $(".signUp").html('<i class="fas fa-user-plus"></i> Sign Up');
        $(".signUp").removeClass('btn btn-outline-success');
        $(".signUp").addClass('btn btn-outline-primary');
        
        $(".logInFormWrapper").css("display","flex");
        $(".logInFormWrapper").css("position","absolute");
        $(this).html('<i class="fas fa-user"></i> Hide Log In');
        $(this).removeClass('btn btn-outline-primary');
        $(this).addClass('btn btn-outline-success');
    } else {
        $(".logInFormWrapper").css("display","none");
        $(this).html('<i class="fas fa-user"></i> Log In');
        $(this).removeClass('btn btn-outline-success');
        $(this).addClass('btn btn-outline-primary');
    }
    return false; //this needed for page not to refresh so that form keeps showing.
});

//Adding event listener to "Show Surver Results" button. Showing survey results pop-up and changing inner html of a button.
$(".surveyResults").on('click', function(){
    if ($(".surveyResultsWrapper").css("display") == "none") {
        $(".surveyResultsWrapper").css("display","flex");
        $(".surveyResultsWrapper").css("position","absolute");
        $(this).html('<i class="fas fa-poll"></i> Hide Survey Results');
        $(this).removeClass('btn btn-outline-primary');
        $(this).addClass('btn btn-outline-success');
    } else {
        $(".surveyResultsWrapper").css("display","none");
        $(this).html('<i class="fas fa-poll"></i> Show Survey Results');
        $(this).removeClass('btn btn-outline-success');
        $(this).addClass('btn btn-outline-primary');
    }
    return false; //this needed for page not to refresh so that form keeps showing.
});
