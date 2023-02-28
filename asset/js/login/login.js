$(document).ready(function(){
    // Open Log In Form
    $(".logInBtn").click(function(){
        $(".bgLogInSignUp").show();
        $("#logInContainer").show();
        $("#signUpContainer").hide();
        $('body').css('overflow', 'hidden'); 
    });

    // Close Log In Form
    $("#closeLogInIcon").click(function(){
        $(".bgLogInSignUp").hide();
        $("#logInContainer").hide();
        $('body').css('overflow', 'auto'); 
    });

    // Open Sign Up Form
    $(".signUpBtn").click(function(){
        $(".bgLogInSignUp").show();
        $("#signUpContainer").show();
        $("#logInContainer").hide();
        $('body').css('overflow', 'hidden'); 
    });

    // Close Log In Form
    $("#closeSignUpIcon").click(function(){
        $(".bgLogInSignUp").hide();
        $("#signUpContainer").hide();
        $('body').css('overflow', 'auto'); 
    });

    // Open Log In Form
    $("#logInSpan").click(function(){
        $("#logInContainer").show();
        $("#signUpContainer").hide();
        $('body').css('overflow', 'hidden'); 
    });

    // Open Sign Up Form
    $("#signUpSpan").click(function(){
        $("#logInContainer").hide();
        $("#signUpContainer").show();
        $('body').css('overflow', 'hidden'); 
    });
});