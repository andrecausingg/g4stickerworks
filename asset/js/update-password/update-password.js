$(document).ready(function(){
    // ID on form signUp
    $('#updatePasswordForm').submit(function(e){
        e.preventDefault();

        // Values
        var password = $('#passwordUpdatePassword').val().trim();
        var confirmPassword = $('#confirmPasswordUpdatePassword').val().trim();
        var urlParams = new URLSearchParams(window.location.search);
        var vKey = urlParams.get('vKey');

        if(
            password.length >= 8 && password != "" && 
            confirmPassword.length >= 8 && confirmPassword != "" &&
            password == confirmPassword
        ){
            $("#submitDisUpdatePasswordBtn").show();
            $("#submitUpdatePasswordBtn").hide();

            // send the form data to the server with AJAX
            $.ajax({
                type: "POST", // use the POST method
                url: "../../../../g4stickerworks/asset/php/update-password/update-password.php", // replace with the URL of your form processing script
                data: { 
                    vKey: vKey,
                    password: password,
                }, // send the Content field value as data
                success: function(response){
                    var responseVarChar = response.trim();      

                    if(responseVarChar == "updated"){
                        $("#successUpdatePassContainer").show();
                        $("#updatePassFormContainer").hide();
                    }
                    
                    // do something with the server response (e.g. show a success message)
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.error("Form submission failed: " + textStatus, errorThrown); // log error message to the console
                    // do something to handle the error (e.g. display an error message to the user)
                }
            });
        }
        validateFieldsPassword();
        validateFieldsConfirmPassword();


        // Function validate Password
        function validateFieldsPassword(){
            var password = $('#passwordUpdatePassword').val().trim();
            var confirmPassword = $('#confirmPasswordUpdatePassword').val().trim();
            
            if (password.length < 8) {
                $('#less8CharPassErrSignUp').show();
                $('#passwordUpdatePassword').css('border-color', 'hsl(4, 95%, 56%)');
            }else if(password != confirmPassword){
                $("#passwordAndConfirmPasswordErr").show();
                $('#passwordUpdatePassword').css('border-color', 'hsl(4, 95%, 56%)');
                $('#confirmPasswordUpdatePassword').css('border-color', 'hsl(4, 95%, 56%)');
            }else{
                $("#passwordAndConfirmPasswordErr").hide();
                $('#less8CharConfirmPassErrSignUp').hide();
                $('#less8CharPassErrSignUp').hide();
                $('#passwordUpdatePassword').css('border-color', 'hsl(122, 39%, 49%)');
                $('#confirmPasswordUpdatePassword').css('border-color', 'hsl(122, 39%, 49%)');
            }
        }

        // Function validate Confirm Password
    function validateFieldsConfirmPassword(){
        var password = $('#passwordUpdatePassword').val().trim();
        var confirmPassword = $('#confirmPasswordUpdatePassword').val().trim();
        
        if (confirmPassword.length < 8) {
            $('#less8CharConfirmPassErrSignUp').show();
            $('#confirmPasswordUpdatePassword').css('border-color', 'hsl(4, 95%, 56%)');
        }else if(password != confirmPassword){
            $("#passwordAndConfirmPasswordErr").show();
            $('#passwordUpdatePassword').css('border-color', 'hsl(4, 95%, 56%)');
            $('#confirmPasswordUpdatePassword').css('border-color', 'hsl(4, 95%, 56%)');
        }else{
            $("#passwordAndConfirmPasswordErr").hide();
            $('#less8CharConfirmPassErrSignUp').hide();
            $('#less8CharPassErrSignUp').hide();
            $('#passwordUpdatePassword').css('border-color', 'hsl(122, 39%, 49%)');
            $('#confirmPasswordUpdatePassword').css('border-color', 'hsl(122, 39%, 49%)');
        }
    }
    });

    // Show Password Sign Up
    $('#showPasswordUpdatePassword').click(function() {
        var passwordInput = $('#passwordUpdatePassword');
        var icon = $(this);
        
        if (passwordInput.attr('type') === 'password') {
            passwordInput.attr('type', 'text');
            icon.toggleClass('fa-eye-slash fa-eye');
        } else {
            passwordInput.attr('type', 'password');
            icon.toggleClass('fa-eye fa-eye-slash');
        }
    });

    // Show Confirm Password Sign Up
    $('#showconfirmPasswordUpdatePassword').click(function() {
        var passwordInput = $('#confirmPasswordUpdatePassword');
        var icon = $(this);
        
        if (passwordInput.attr('type') === 'password') {
            passwordInput.attr('type', 'text');
            icon.toggleClass('fa-eye-slash fa-eye');
        } else {
            passwordInput.attr('type', 'password');
            icon.toggleClass('fa-eye fa-eye-slash');
        }
    });

    $('#passwordUpdatePassword').keyup(validateFieldsPassword);
    $('#confirmPasswordUpdatePassword').keyup(validateFieldsConfirmPassword);

    // Function validate Password
    function validateFieldsPassword(){
        var password = $('#passwordUpdatePassword').val().trim();
        var confirmPassword = $('#confirmPasswordUpdatePassword').val().trim();
        
        if (password.length < 8) {
            $('#less8CharPassErrSignUp').show();
            $('#passwordUpdatePassword').css('border-color', 'hsl(4, 95%, 56%)');
        }else if(password != confirmPassword){
            $("#passwordAndConfirmPasswordErr").show();
            $('#passwordUpdatePassword').css('border-color', 'hsl(4, 95%, 56%)');
            $('#confirmPasswordUpdatePassword').css('border-color', 'hsl(4, 95%, 56%)');
        }else{
            $("#passwordAndConfirmPasswordErr").hide();
            $('#less8CharConfirmPassErrSignUp').hide();
            $('#less8CharPassErrSignUp').hide();
            $('#passwordUpdatePassword').css('border-color', 'hsl(122, 39%, 49%)');
            $('#confirmPasswordUpdatePassword').css('border-color', 'hsl(122, 39%, 49%)');
        }
    }

    // Function validate Confirm Password
    function validateFieldsConfirmPassword(){
        var password = $('#passwordUpdatePassword').val().trim();
        var confirmPassword = $('#confirmPasswordUpdatePassword').val().trim();
        
        if (confirmPassword.length < 8) {
            $('#less8CharConfirmPassErrSignUp').show();
            $('#confirmPasswordUpdatePassword').css('border-color', 'hsl(4, 95%, 56%)');
        }else if(password != confirmPassword){
            $("#passwordAndConfirmPasswordErr").show();
            $('#passwordUpdatePassword').css('border-color', 'hsl(4, 95%, 56%)');
            $('#confirmPasswordUpdatePassword').css('border-color', 'hsl(4, 95%, 56%)');
        }else{
            $("#passwordAndConfirmPasswordErr").hide();
            $('#less8CharConfirmPassErrSignUp').hide();
            $('#less8CharPassErrSignUp').hide();
            $('#passwordUpdatePassword').css('border-color', 'hsl(122, 39%, 49%)');
            $('#confirmPasswordUpdatePassword').css('border-color', 'hsl(122, 39%, 49%)');
        }
    }

    $("#loginNav").click(function(){
        window.location.href = '../../../../g4stickerworks/index';  
    });
});