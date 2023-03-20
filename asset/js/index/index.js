$(document).ready(function(){
    localStorage.setItem("timeLeft", 30);

    // Show Log In Form
    $(".logInSpan").click(function(){
        $('body').css('overflow', 'hidden'); 
        $("#logInContainer").show();
        $("#signUpContainer").hide();
        $("#forgotPasswordContainer").hide();
    });  

    // Show Sign Up Form
    $(".signUpSpan").click(function(){
        $('body').css('overflow', 'hidden'); 
        $("#logInContainer").hide();
        $("#signUpContainer").show();
        $("#forgotPasswordContainer").hide();
    });  

    // Show Forgot Password Form
    $(".forgotPasswordSpan").click(function(){
        $('body').css('overflow', 'hidden'); 
        $("#logInContainer").hide();
        $("#signUpContainer").hide();
        $("#forgotPasswordContainer").show();
    });  

    // Hide Forgot Password Form
    $("#closeForgotPassword").click(function(){
        $('body').css('overflow', 'auto'); 
        $(".bgLogInSignUp").hide();
        $("#forgotPasswordContainer").hide();
    });
    
    // Sign Up Form Show
    $(".signUpBtn").click(function(){
        $('body').css('overflow', 'hidden'); 
        $(".bgLogInSignUp").show();
        $("#signUpContainer").show();
    });

    // Sign Up Form Hide
    $("#closeSignUpIcon").click(function(){
        $('body').css('overflow', 'auto'); 
        $(".bgLogInSignUp").hide();
        $("#signUpContainer").hide();
    });

    // Login Form Show
    $(".logInBtn").click(function(){
        $('body').css('overflow', 'hidden'); 
        $(".bgLogInSignUp").show();
        $("#logInContainer").show();
    });

    // Login Form Hide
    $("#closeLogInIcon").click(function(){
        $('body').css('overflow', 'auto'); 
        $(".bgLogInSignUp").hide();
        $("#logInContainer").hide();
    });
    
});