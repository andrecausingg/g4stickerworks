$(document).ready(function(){
    // ID on form signUp
    $('#signUpForm').submit(function(e){
        e.preventDefault();

        // Values
        var email = $('#emailSignUp').val().trim();
        var password = $('#passwordSignUp').val().trim();
        var confirmPassword = $('#confirmPasswordSignUp').val().trim();

        // 
        var trustedDomains = ['gmail.com', 'yahoo.com', 'outlook.com', 'aol.com', 'triots.com'];


        if(email != "" && validateEmail(email) && validateEmailDomain(email) && 
            password.length >= 8 && password != "" && 
            confirmPassword.length >= 8 && confirmPassword != "" &&
            password == confirmPassword
        ){

        // send the form data to the server with AJAX
        $.ajax({
            type: "POST", // use the POST method
            url: "../../../../g4stickerworks/asset/php/services-page/create-content.php", // replace with the URL of your form processing script
            data: { 
                email: email,
                password: password,
                confirmPassword: confirmPassword,
            }, // send the Content field value as data
            success: function(response){
                console.log(response);
                var responseVarChar = response.trim();                
                
                if(responseVarChar == "created"){

                }
                // do something with the server response (e.g. show a success message)
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.error("Form submission failed: " + textStatus, errorThrown); // log error message to the console
                // do something to handle the error (e.g. display an error message to the user)
            }
        });
    }

        validateFieldsEmail();
        validateFieldsPassword();
        validateFieldsConfirmPassword();

        // Function validate Email
        function validateFieldsEmail(){
            if(!validateEmail(email)){
                $('#validateEmailErrSignUp').show();
                $('#emailSignUp').css('border-color', 'hsl(4, 95%, 56%)');
            }
            
            if(!validateEmailDomain(email)){
                $('#domainEmailErrSignUp').show();
                $('#emailSignUp').css('border-color', 'hsl(4, 95%, 56%)');
            }
            
            if(validateEmail(email) && validateEmailDomain(email)){
                $('#validateEmailErrSignUp, #domainEmailErrSignUp').hide();
                $('#emailSignUp').css('border-color', 'hsl(122, 39%, 49%)');
            }

            // Invalid Function
            function validateEmail(email) {
                var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                return regex.test(email);
            }

            // Trusted Domain Only
            function validateEmailDomain(email) {
                var domain = email.split('@')[1];
                return trustedDomains.includes(domain);
            }
        }

        // Function validate Password
        function validateFieldsPassword(){
            if (password.length < 8) {
                $('#less8CharPassErrSignUp').show();
                $('#passwordSignUp').css('border-color', 'hsl(4, 95%, 56%)');
            }else if(password != confirmPassword){
                $("#passwordAndConfirmPasswordErr").show();
                $('#passwordSignUp').css('border-color', 'hsl(4, 95%, 56%)');
                $('#confirmPasswordSignUp').css('border-color', 'hsl(4, 95%, 56%)');
            }else{
                $("#passwordAndConfirmPasswordErr").hide();
                $('#less8CharConfirmPassErrSignUp').hide();
                $('#less8CharPassErrSignUp').hide();
                $('#passwordSignUp').css('border-color', 'hsl(122, 39%, 49%)');
                $('#confirmPasswordSignUp').css('border-color', 'hsl(122, 39%, 49%)');
            }
        }

        // Function validate Confirm Password
        function validateFieldsConfirmPassword(){
            if (confirmPassword.length < 8) {
                $('#less8CharConfirmPassErrSignUp').show();
                $('#confirmPasswordSignUp').css('border-color', 'hsl(4, 95%, 56%)');
            }else if(password != confirmPassword){
                $("#passwordAndConfirmPasswordErr").show();
                $('#passwordSignUp').css('border-color', 'hsl(4, 95%, 56%)');
                $('#confirmPasswordSignUp').css('border-color', 'hsl(4, 95%, 56%)');
            }else{
                $("#passwordAndConfirmPasswordErr").hide();
                $('#less8CharConfirmPassErrSignUp').hide();
                $('#less8CharPassErrSignUp').hide();
                $('#passwordSignUp').css('border-color', 'hsl(122, 39%, 49%)');
                $('#confirmPasswordSignUp').css('border-color', 'hsl(122, 39%, 49%)');
            }
        }

        // Invalid Function
        function validateEmail(email) {
            var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            return regex.test(email);
        }

        // Trusted Domain Only
        function validateEmailDomain(email) {
            var domain = email.split('@')[1];
            return trustedDomains.includes(domain);
        }
    });

    // Show password Sign Up
    $('#showPasswordSignUp').click(function() {
        var passwordInput = $('#passwordSignUp');
        var icon = $(this);
        
        if (passwordInput.attr('type') === 'password') {
            passwordInput.attr('type', 'text');
            icon.toggleClass('fa-eye-slash fa-eye');
        } else {
            passwordInput.attr('type', 'password');
            icon.toggleClass('fa-eye fa-eye-slash');
        }
    });

    // Show password Sign Up
    $('#showConfirmPasswordSignUp').click(function() {
        var passwordInput = $('#confirmPasswordSignUp');
        var icon = $(this);
        
        if (passwordInput.attr('type') === 'password') {
            passwordInput.attr('type', 'text');
            icon.toggleClass('fa-eye-slash fa-eye');
        } else {
            passwordInput.attr('type', 'password');
            icon.toggleClass('fa-eye fa-eye-slash');
        }
    });

    // Validation
    $('#emailSignUp').keyup(validateFieldsEmail);
    $('#passwordSignUp').keyup(validateFieldsPassword);
    $('#confirmPasswordSignUp').keyup(validateFieldsConfirmPassword);

    // Function validate Email
    function validateFieldsEmail(){
        var email = $('#emailSignUp').val().trim();
        var trustedDomains = ['gmail.com', 'yahoo.com', 'outlook.com', 'aol.com', 'triots.com'];

        if(!validateEmail(email)){
            $('#validateEmailErrSignUp').show();
            $('#emailSignUp').css('border-color', 'hsl(4, 95%, 56%)');
        }
        
        if(!validateEmailDomain(email)){
            $('#domainEmailErrSignUp').show();
            $('#emailSignUp').css('border-color', 'hsl(4, 95%, 56%)');
        }
        
        if(validateEmail(email) && validateEmailDomain(email)){
            $('#validateEmailErrSignUp, #domainEmailErrSignUp').hide();
            $('#emailSignUp').css('border-color', 'hsl(122, 39%, 49%)');
        }

        // Invalid Function
        function validateEmail(email) {
            var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            return regex.test(email);
        }

        // Trusted Domain Only
        function validateEmailDomain(email) {
            var domain = email.split('@')[1];
            return trustedDomains.includes(domain);
        }
    }

    // Function validate Password
    function validateFieldsPassword(){
        var password = $('#passwordSignUp').val().trim();
        var confirmPassword = $('#confirmPasswordSignUp').val().trim();
        
        if (password.length < 8) {
            $('#less8CharPassErrSignUp').show();
            $('#passwordSignUp').css('border-color', 'hsl(4, 95%, 56%)');
        }else if(password != confirmPassword){
            $("#passwordAndConfirmPasswordErr").show();
            $('#passwordSignUp').css('border-color', 'hsl(4, 95%, 56%)');
            $('#confirmPasswordSignUp').css('border-color', 'hsl(4, 95%, 56%)');
        }else{
            $("#passwordAndConfirmPasswordErr").hide();
            $('#less8CharConfirmPassErrSignUp').hide();
            $('#less8CharPassErrSignUp').hide();
            $('#passwordSignUp').css('border-color', 'hsl(122, 39%, 49%)');
            $('#confirmPasswordSignUp').css('border-color', 'hsl(122, 39%, 49%)');
        }
    }

    // Function validate Confirm Password
    function validateFieldsConfirmPassword(){
        var password = $('#passwordSignUp').val().trim();
        var confirmPassword = $('#confirmPasswordSignUp').val().trim();
        
        if (confirmPassword.length < 8) {
            $('#less8CharConfirmPassErrSignUp').show();
            $('#confirmPasswordSignUp').css('border-color', 'hsl(4, 95%, 56%)');
        }else if(password != confirmPassword){
            $("#passwordAndConfirmPasswordErr").show();
            $('#passwordSignUp').css('border-color', 'hsl(4, 95%, 56%)');
            $('#confirmPasswordSignUp').css('border-color', 'hsl(4, 95%, 56%)');
        }else{
            $("#passwordAndConfirmPasswordErr").hide();
            $('#less8CharConfirmPassErrSignUp').hide();
            $('#less8CharPassErrSignUp').hide();
            $('#passwordSignUp').css('border-color', 'hsl(122, 39%, 49%)');
            $('#confirmPasswordSignUp').css('border-color', 'hsl(122, 39%, 49%)');
        }
    }
});