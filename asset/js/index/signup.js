$(document).ready(function(){
    // ID on form signUp
    $('#formSignUp').submit(function(e){
        e.preventDefault();

        // Values
        var nickName = $('.nickName').val();
        var birthMonth = $('.birthMonth').val();
        var birthDay = $('.birthDay').val();
        var birthYear = $('.birthYear').val();
        var gender = $('.gender').val();
        var email = $('.emailSignUp').val();
        var password = $('.passwordSignUp').val();

        // Declare
        var trustedDomains = ['gmail.com', 'yahoo.com', 'outlook.com', 'aol.com', 'triots.com'];
        var $age = new Date().getFullYear() - 18;
        var birthDate = birthYear + '-' + birthMonth + '-' + birthDay;

        if(nickName.length != 0 && !(/[^a-zA-Z]/.test(nickName)) && 
            birthMonth != '' && birthDay != '' && birthYear != '' && birthYear < $age && 
            gender.length != '' &&
            email != '' && validateEmail(email) && validateEmailDomain(email) && 
            password != '' &&  password.length >= 8
        ){
            // Function
            showSTSignUp();
            
            $.ajax({
                url: '../../../../neydra2/assets/php/index/signup.php',
                // url: 'http://localhost/neydra2/assets/php/index/signup.php',
                
                type: 'POST', // Type POST 
                data: { 
                    nickName:nickName,
                    birthDate:birthDate,
                    gender:gender,
                    email:email,
                    password:password
                },
                
                success: function (data){
                    var dataVar = data.trim();
                    if(dataVar == 'EmailExist'){
                        hideSTSignUp();
                    }else{
                        window.location.href = 'email-verification';
                    }
                },
            });
            
            $('.errOnTop').hide();
        }else{
            $('.errOnTop').show();

            // Validation
            validateFieldsNickName();
            validateFieldsBirthMonth();
            validateFieldsBirthDay();
            validateFieldsBirthYear();
            validateFieldsGender();
            validateFieldsEmail();
            validateFieldsPassword();

            // Function validate Nick Name
            function validateFieldsNickName(){
                // Validate nickName field
                var nickName = $('.nickName').val().trim();
                if (/[^a-zA-Z]/.test(nickName)) {
                    $('.errSpecialCharNickName').show();
                    $('.nickName').css('border-color', 'hsl(4, 95%, 56%)');
                }
                
                if (nickName.length == 0) {
                    $('.errEmptyNickName').show();
                    $('.nickName').css('border-color', 'hsl(4, 95%, 56%)');
                }
            }

            // Function validate Birth Month
            function validateFieldsBirthMonth(){
                // Validate birthMonth field
                var birthMonth = $('.birthMonth').val();
                if(birthMonth == ''){
                    $('.errEmptyBirthMonth').show();
                    $('.birthMonth').css('border-color', 'hsl(4, 95%, 56%)');
                }
            }

            // Function validate Birth Day
            function validateFieldsBirthDay(){
                // Validate birthDay field
                var birthDay = $('.birthDay').val();
                if (birthDay == '') {
                    $('.errEmptyBirthDay').show();
                    $('.birthDay').css('border-color', 'hsl(4, 95%, 56%)');
                }
            }
            
            // Function validate Birth Year
            function validateFieldsBirthYear(){
                // Validate birthYear field
                var birthYear = $('.birthYear').val();
                if (birthYear == '') {
                    $('.errEmptyBirthYear').show();
                    $('.birthYear').css('border-color', 'hsl(4, 95%, 56%)');
                }
                
                if (birthYear > (new Date()).getFullYear() - 18) {
                    $('.err18Up').show();
                    $('.birthYear').css('border-color', 'hsl(4, 95%, 56%)');
                }
            }

            // Function validate Gender
            function validateFieldsGender(){
                // Validate birthYear field
                var gender = $('#gender').val();
                if (gender == ''){
                    $('.errEmptyGender').show();
                    $('.gender').css('border-color', 'hsl(4, 95%, 56%)');
                }
            }

            // Function validate Email
            function validateFieldsEmail(){
                // Validate birthYear field
                var email = $('.emailSignUp').val();
                var trustedDomains = ['gmail.com', 'yahoo.com', 'outlook.com', 'aol.com', 'triots.com'];
        
                if(!validateEmail(email)){
                    $('.errInvalidEmail').show();
                    $('.emailSignUp').css('border-color', 'hsl(4, 95%, 56%)');
                }
                
                if(!validateEmailDomain(email)){
                    $('.errDomainEmail').show();
                    $('.emailSignUp').css('border-color', 'hsl(4, 95%, 56%)');
                }
                
                if (email == ''){
                    $('.errEmptyEmail').show();
                    $('.emailSignUp').css('border-color', 'hsl(4, 95%, 56%)');
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
                // Validate birthYear field
                var password = $('.passwordSignUp').val();
                if (password == ''){
                    $('.errEmptyPass').show();
                    $('.passwordSignUp').css('border-color', 'hsl(4, 95%, 56%)');
                }
                
                if (password.length < 8) {
                    $('.errPass').show();
                    $('.passwordSignUp').css('border-color', 'hsl(4, 95%, 56%)');
                }
            }
        }

        // Show Something Sign Up
        function showSTSignUp(){
            $('.signUpLoader').show('signUpLoader');
            $('.btnSubmit').removeClass('yot-btn1');
            $('.btnSubmit').addClass('yot-btn-dis');
            $('.btnSubmit').prop('disabled', true); //disable clicked button
        }
        
            // Hide Something Sign Up
        function hideSTSignUp(){
            $('.errEmailExist').show();
            $('.email').css('border-color', 'hsl(4, 95%, 56%)');
            $('.signUpLoader').hide('signUpLoader');
            $('.btnSubmit').addClass('yot-btn1');
            $('.btnSubmit').removeClass('yot-btn-dis');
            $('.btnSubmit').prop('disabled', false); //disable clicked button
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

    // Validation
    $('#nickName').change(validateFieldsNickName);
    $('.birthMonth').change(validateFieldsBirthMonth);
    $('.birthDay').change(validateFieldsBirthDay);
    $('.birthYear').change(validateFieldsBirthYear);
    $('#gender').change(validateFieldsGender);
    $('.emailSignUp').change(validateFieldsEmail);
    $('.passwordSignUp').change(validateFieldsPassword);

    // Function validate Nick Name
    function validateFieldsNickName(){
        // Validate nickName field
        var nickName = $('#nickName').val().trim();
        if (/[^a-zA-Z]/.test(nickName)) {
            $('.errSpecialCharNickName').show();
            $('.nickName').css('border-color', 'hsl(4, 95%, 56%)');
        }else if (nickName.length == 0) {
            $('.errEmptyNickName').show();
            $('.nickName').css('border-color', 'hsl(4, 95%, 56%)');
        }else{
            $('.errSpecialCharNickName, .errEmptyNickName').hide();
            $('.nickName').css('border-color', 'hsl(122, 39%, 49%)').css('background-color', 'hsl(213, 27%, 6%)');
        }
    }


    // Function validate Birth Month
    function validateFieldsBirthMonth(){
        // Validate birthMonth field
        var birthMonth = $('.birthMonth').val().trim();
        if(birthMonth == ''){
            $('.errEmptyBirthMonth').show();
            $('.birthMonth').css('border-color', 'hsl(4, 95%, 56%)');
        }else{
            $('.errEmptyBirthMonth, .err18Up').hide();
            $('.birthMonth').css('border-color', 'hsl(122, 39%, 49%)').css('background-color', 'hsl(213, 27%, 6%)');
        }
    }

    // Function validate Birth Day
    function validateFieldsBirthDay(){
        // Validate birthDay field
        var birthDay = $('.birthDay').val().trim();
        if (birthDay == '') {
            $('.errEmptyBirthDay').show();
            $('.birthDay').css('border-color', 'hsl(4, 95%, 56%)');
        }else{
            $('.errEmptyBirthDay, .err18Up').hide();
            $('.birthDay').css('border-color', 'hsl(122, 39%, 49%)').css('background-color', 'hsl(213, 27%, 6%)');
        }
    }
    
    // Function validate Birth Year
    function validateFieldsBirthYear(){
        // Validate birthYear field
        var birthYear = $('.birthYear').val().trim();
        if (birthYear == '') {
            $('.errEmptyBirthYear').show();
            $('.birthYear').css('border-color', 'hsl(4, 95%, 56%)');
        }else if (birthYear > (new Date()).getFullYear() - 18) {
            $('.err18Up').show();
            $('.birthYear').css('border-color', 'hsl(4, 95%, 56%)');
        }else{
            $('.errEmptyBirthYear, .err18Up').hide();
            $('.birthYear').css('border-color', 'hsl(122, 39%, 49%)').css('background-color', 'hsl(213, 27%, 6%)');
        }
    }

    // Function validate Gender
    function validateFieldsGender(){
        // Validate birthYear field
        var gender = $('#gender').val().trim();
        if (gender == ''){
            $('.errEmptyGender').show();
            $('.gender').css('border-color', 'hsl(4, 95%, 56%)');
        }else{
            $('.errEmptyGender').hide();
            $('.gender').css('border-color', 'hsl(122, 39%, 49%)').css('background-color', 'hsl(213, 27%, 6%)');
        }
    }

    // Function validate Email
    function validateFieldsEmail(){
        // Validate birthYear field
        var email = $('.emailSignUp').val();
        var trustedDomains = ['gmail.com', 'yahoo.com', 'outlook.com', 'aol.com', 'triots.com'];

        if(!validateEmail(email)){
            $('.errInvalidEmail').show();
            $('.emailSignUp').css('border-color', 'hsl(4, 95%, 56%)');
        }else if(!validateEmailDomain(email)){
            $('.errDomainEmail').show();
            $('.emailSignUp').css('border-color', 'hsl(4, 95%, 56%)');
        }else if (email == ''){
            $('.errEmptyEmail').show();
            $('.emailSignUp').css('border-color', 'hsl(4, 95%, 56%)');
        }else{
            $('.errEmptyEmail, .errInvalidEmail, .errDomainEmail').hide();
            $('.emailSignUp').css('border-color', 'hsl(122, 39%, 49%)').css('background-color', 'hsl(213, 27%, 6%)');
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
        // Validate birthYear field
        var password = $('.passwordSignUp').val();
        if (password == ''){
            $('.errEmptyPass').show();
            $('.passwordSignUp').css('border-color', 'hsl(4, 95%, 56%)');
        }else if (password.length < 8) {
            $('.errPass').show();
            $('.passwordSignUp').css('border-color', 'hsl(4, 95%, 56%)');
        }else{
            $('.errEmptyPass, .errPass').hide();
            $('.passwordSignUp').css('border-color', 'hsl(122, 39%, 49%)').css('background-color', 'hsl(213, 27%, 6%)');
        }
    }
});