$(document).ready(function(){
    // Attach submit event listener to the form
    $(document).on("submit", "#updateFormEmail", function(e){
        e.preventDefault(); // prevent the default form submission
        
        // Sanitize user input
        var emailProfile = $("#emailProfile").val().trim();

        if(emailProfile != "" && validateFieldsEmail(emailProfile)){
            // send the form data to the server with AJAX
            $.ajax({
                type: "POST", // use the POST method
                url: "../../../../g4stickerworks/asset/php/profile/update-email.php", // replace with the URL of your form processing script
                data: { 
                    emailProfile: emailProfile, 
                }, // send the Content field value as data
                success: function(response) {
                    console.log(response);
                    const responseVarChar = response.trim();     
                    if(responseVarChar == "updated"){
                        $("#updateSuccessAlert").show();

                        setTimeout(function() {
                            $("#updateSuccessAlert").hide(); // Show the element after 10 seconds
                        }, 10000); // 10000 milliseconds = 10 seconds

                        $("#displayProfileInfo").load("../../../../../g4stickerworks/asset/php/profile/display/d-profile.php");
                        $("#updateDisplayContainerFNameAndLName").load("../../../../../g4stickerworks/asset/php/profile/display/d-fname-lname.php");
                        $("#updateDisplayContainerPhoneNumber").load("../../../../../g4stickerworks/asset/php/profile/display/d-phone-number.php");
                        $("#updateDisplayContainerEmail").load("../../../../../g4stickerworks/asset/php/profile/display/d-email.php");
                    }           
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.error("Form submission failed: " + textStatus, errorThrown); // log error message to the console
                    // do something to handle the error (e.g. display an error message to the user)
                }
            });
        }else{
            validateFieldsPassword();
        }

        // Function validate Password
        function validateFieldsPassword(){
            var password = $('#passwordUpdatePasswordProfile').val().trim();
            var confirmPassword = $('#confirmPasswordUpdatePasswordProfile').val().trim();
            
            if (password.length < 8) {
                $('#less8CharPassErrUpdatePasswordProfile').show();
                $('#passwordUpdatePasswordProfile').css('border-color', 'hsl(4, 95%, 56%)');
            }else if(password != confirmPassword){
                $("#passwordAndConfirmPasswordErr").show();
                $('#passwordUpdatePasswordProfile').css('border-color', 'hsl(4, 95%, 56%)');
                $('#confirmPasswordUpdatePasswordProfile').css('border-color', 'hsl(4, 95%, 56%)');
            }else{
                $("#passwordAndConfirmPasswordErr").hide();
                $('#less8CharConfirmPassErrUpdatePasswordProfile').hide();
                $('#less8CharPassErrUpdatePasswordProfile').hide();
                $('#passwordUpdatePasswordProfile').css('border-color', 'hsl(122, 39%, 49%)');
                $('#confirmPasswordUpdatePasswordProfile').css('border-color', 'hsl(122, 39%, 49%)');
            }
        }

        // Function validate Confirm Password
        function validateFieldsConfirmPassword(){
            var password = $('#passwordUpdatePasswordProfile').val().trim();
            var confirmPassword = $('#confirmPasswordUpdatePasswordProfile').val().trim();
            
            if (confirmPassword.length < 8) {
                $('#less8CharConfirmPassErrUpdatePasswordProfile').show();
                $('#confirmPasswordUpdatePasswordProfile').css('border-color', 'hsl(4, 95%, 56%)');
            }else if(password != confirmPassword){
                $("#passwordAndConfirmPasswordErr").show();
                $('#passwordUpdatePasswordProfile').css('border-color', 'hsl(4, 95%, 56%)');
                $('#confirmPasswordUpdatePasswordProfile').css('border-color', 'hsl(4, 95%, 56%)');
            }else{
                $("#passwordAndConfirmPasswordErr").hide();
                $('#less8CharConfirmPassErrUpdatePasswordProfile').hide();
                $('#less8CharPassErrUpdatePasswordProfile').hide();
                $('#passwordUpdatePasswordProfile').css('border-color', 'hsl(122, 39%, 49%)');
                $('#confirmPasswordUpdatePasswordProfile').css('border-color', 'hsl(122, 39%, 49%)');
            }
        }
    });

    // Show Form Update Password
    $(document).on("click", "#iconPassword", function(){
        $('body').css('overflow', 'hidden'); 
        $("#updateBgContainerForm").show();
        $("#updateContainerFormPassword").show();
    });

    // Hide Form Update Password
    $(document).on("click", "#updateCloseFormIconPassword", function(){
        $('body').css('overflow', 'auto'); 
        $("#updateBgContainerForm").hide();
        $("#updateContainerFormPassword").hide();
    });

    // Show Password Sign Up
    $(document).on("click", "#showPasswordUpdatePasswordProfile", function(){
        var passwordInput = $('#passwordUpdatePasswordProfile');
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
    $(document).on("click", "#showConfirmPasswordUpdatePasswordProfile", function(){
        var passwordInput = $('#confirmPasswordUpdatePasswordProfile');
        var icon = $(this);
        
        if (passwordInput.attr('type') === 'password') {
            passwordInput.attr('type', 'text');
            icon.toggleClass('fa-eye-slash fa-eye');
        } else {
            passwordInput.attr('type', 'password');
            icon.toggleClass('fa-eye fa-eye-slash');
        }
    });

    $(document).on("input", "#passwordUpdatePasswordProfile", validateFieldsPassword);
    $(document).on("input", "#confirmPasswordUpdatePasswordProfile", validateFieldsConfirmPassword);

    // Function validate Password
    function validateFieldsPassword(){
        var password = $('#passwordUpdatePasswordProfile').val().trim();
        var confirmPassword = $('#confirmPasswordUpdatePasswordProfile').val().trim();
        
        if (password.length < 8) {
            $('#less8CharPassErrUpdatePasswordProfile').show();
            $('#passwordUpdatePasswordProfile').css('border-color', 'hsl(4, 95%, 56%)');
        }else if(password != confirmPassword){
            $("#passwordAndConfirmPasswordErr").show();
            $('#passwordUpdatePasswordProfile').css('border-color', 'hsl(4, 95%, 56%)');
            $('#confirmPasswordUpdatePasswordProfile').css('border-color', 'hsl(4, 95%, 56%)');
        }else{
            $("#passwordAndConfirmPasswordErr").hide();
            $('#less8CharConfirmPassErrUpdatePasswordProfile').hide();
            $('#less8CharPassErrUpdatePasswordProfile').hide();
            $('#passwordUpdatePasswordProfile').css('border-color', 'hsl(122, 39%, 49%)');
            $('#confirmPasswordUpdatePasswordProfile').css('border-color', 'hsl(122, 39%, 49%)');
        }
    }

    // Function validate Confirm Password
    function validateFieldsConfirmPassword(){
        var password = $('#passwordUpdatePasswordProfile').val().trim();
        var confirmPassword = $('#confirmPasswordUpdatePasswordProfile').val().trim();
        
        if (confirmPassword.length < 8) {
            $('#less8CharConfirmPassErrUpdatePasswordProfile').show();
            $('#confirmPasswordUpdatePasswordProfile').css('border-color', 'hsl(4, 95%, 56%)');
        }else if(password != confirmPassword){
            $("#passwordAndConfirmPasswordErr").show();
            $('#passwordUpdatePasswordProfile').css('border-color', 'hsl(4, 95%, 56%)');
            $('#confirmPasswordUpdatePasswordProfile').css('border-color', 'hsl(4, 95%, 56%)');
        }else{
            $("#passwordAndConfirmPasswordErr").hide();
            $('#less8CharConfirmPassErrUpdatePasswordProfile').hide();
            $('#less8CharPassErrUpdatePasswordProfile').hide();
            $('#passwordUpdatePasswordProfile').css('border-color', 'hsl(122, 39%, 49%)');
            $('#confirmPasswordUpdatePasswordProfile').css('border-color', 'hsl(122, 39%, 49%)');
        }
    }
});