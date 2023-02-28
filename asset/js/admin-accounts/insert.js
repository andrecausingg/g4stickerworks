$(document).ready(function(){
    // Create 
    $('#createFormAdminAccounts').submit(function(e){
        e.preventDefault();

        var email = $('#email').val().trim();
        var password = $('#password').val().trim();
        var trustedDomains = ['gmail.com', 'yahoo.com', 'outlook.com', 'aol.com', 'triots.com'];

        if(validateEmail(email) && validateEmailDomain(email) && email != '' && password != '' && password.length > 8){
            $.ajax({
                url: '../../../../web-code/asset/php/admin-accounts/insert.php',
                type: 'POST',
                data: { 
                    email: email,
                    password: password,
                },
                success: function (data){
                    console.log(data);
                    var dataVar = data.trim();
                    if(dataVar == "inserted"){

                        $("#createFormAdminAccounts").trigger("reset");
                        $("#successAlertInsert").show();
                        $("#successAlertEdit").hide();
                        $("#successAlertDelete").hide();

                        $('#email').css('border', '1px solid hsl(207deg, 90%, 54%)');
                        $('#password').css('border', '1px solid hsl(207deg, 90%, 54%)');

                        setTimeout(function() {
                            $("#successAlertInsert").hide(); // Show the element after 10 seconds
                        }, 10000); // 10000 milliseconds = 10 seconds

                        // Display The Data 
                        $("#displayDataTable").load("../../../../../web-code/asset/php/admin-accounts/display/d-admin-accounts.php");
                        // Display Total
                        $("#totalAdminAccounts").load("../../../../../web-code/asset/php/admin-accounts/display/d-total.php");
                    }else{
                        $("#emailExistErr").show();
                        $('#email').css('border-color', 'hsl(4, 95%, 56%)');
                    }
                }
            })
        }else{
            validateFieldsEmail();
            validateFieldsPassword();
            
            // Function validate Email
            function validateFieldsEmail(){
                var email = $('#email').val().trim();
                var trustedDomains = ['gmail.com', 'yahoo.com', 'outlook.com', 'aol.com', 'triots.com'];

                if(!validateEmail(email)){
                    $('#emailInvalidErr').show();
                    $('#email').css('border-color', 'hsl(4, 95%, 56%)');
                }
                
                if(!validateEmailDomain(email)){
                    $('#emailDomainEmailErr').show();
                    $('#email').css('border-color', 'hsl(4, 95%, 56%)');
                }
                
                if (email == ''){
                    $('#emailEmptyErr').show();
                    $('#email').css('border-color', 'hsl(4, 95%, 56%)');
                }

                if(email != ""){
                    $.ajax({
                        url: '../../../../web-code/asset/php/admin-accounts/display/d-email-exist.php',
                        type: 'POST',
                        data: { 
                            email: email,
                        },
                        success: function (data){
                            console.log(data);
                            var dataVar = data.trim();
                            if(dataVar == "emailExist"){
                                $("#emailExistErr").show();
                                $('#email').css('border-color', 'hsl(4, 95%, 56%)');
                            }else{
                                $("#emailExistErr").hide();
                                if(validateEmail(email) && validateEmailDomain(email) && email != '' && $("#emailExistErr").css("display") === "none"){
                                    $('#emailEmptyErr, #emailInvalidErr, #emailDomainEmailErr, #emailExistErr').hide();
                                    $('#email').css('border-color', 'hsl(122, 39%, 49%)');
                                }
                            }
                        }
                    })
                }

                if(validateEmail(email) && validateEmailDomain(email) && email != '' && $("#emailExistErr").css("display") === "none"){
                    $('#emailEmptyErr, #emailInvalidErr, #emailDomainEmailErr, #emailExistErr').hide();
                    $('#email').css('border-color', 'hsl(122, 39%, 49%)');
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
                var password = $('#password').val().trim();
                if (password == ''){
                    $('#passwordEmptyErr').show();
                    $('#password').css('border-color', 'hsl(4, 95%, 56%)');
                }
                
                if (password.length < 8) {
                    $('#passwordMin8Err').show();
                    $('#password').css('border-color', 'hsl(4, 95%, 56%)');
                }
                
                if(password != '' && password.length > 8){
                    $('#passwordEmptyErr, #passwordMin8Err').hide();
                    $('#password').css('border-color', 'hsl(122, 39%, 49%)');
                }
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

    // Display Form Create 
    $("#createBtn").click(function(){
        $("#createbgContainer").show();
        $("#createformContainer").show();
        $('body').css('overflow', 'hidden'); 
    });

    // Hide Form Create 
    $("#createCloseFormIcon").click(function(){
        $("#createbgContainer").hide();
        $("#createformContainer").hide();
        $('body').css('overflow', 'auto'); 
    });

    // Show password
    $('#showPassword').click(function() {
        var passwordInput = $('#password');
        var icon = $(this);
      
        if (passwordInput.attr('type') === 'password') {
          passwordInput.attr('type', 'text');
          icon.toggleClass('fa-eye-slash fa-eye');
        } else {
          passwordInput.attr('type', 'password');
          icon.toggleClass('fa-eye fa-eye-slash');
        }
    });
    
    // Hide Alert Success Container
    $("#successAlertCloseIconInsert").click(function(){
        $("#successAlertInsert").hide();
    });

    // Validation
    $('#email').keyup(validateFieldsEmail);
    $('#password').keyup(validateFieldsPassword);

    // Function validate Email
    function validateFieldsEmail(){
        var email = $('#email').val().trim();
        var trustedDomains = ['gmail.com', 'yahoo.com', 'outlook.com', 'aol.com', 'triots.com'];

        if(!validateEmail(email)){
            $('#emailInvalidErr').show();
            $('#email').css('border-color', 'hsl(4, 95%, 56%)');
        }
        
        if(!validateEmailDomain(email)){
            $('#emailDomainEmailErr').show();
            $('#email').css('border-color', 'hsl(4, 95%, 56%)');
        }
        
        if (email == ''){
            $('#emailEmptyErr').show();
            $('#email').css('border-color', 'hsl(4, 95%, 56%)');
        }

        if(email != ""){
            $.ajax({
                url: '../../../../web-code/asset/php/admin-accounts/display/d-email-exist.php',
                type: 'POST',
                data: { 
                    email: email,
                },
                success: function (data){
                    console.log(data);
                    var dataVar = data.trim();
                    if(dataVar == "emailExist"){
                        $("#emailExistErr").show();
                        $('#email').css('border-color', 'hsl(4, 95%, 56%)');
                    }else{
                        $("#emailExistErr").hide();
                        if(validateEmail(email) && validateEmailDomain(email) && email != '' && $("#emailExistErr").css("display") === "none"){
                            $('#emailEmptyErr, #emailInvalidErr, #emailDomainEmailErr, #emailExistErr').hide();
                            $('#email').css('border-color', 'hsl(122, 39%, 49%)');
                        }
                    }
                }
            })
        }

        if(validateEmail(email) && validateEmailDomain(email) && email != '' && $("#emailExistErr").css("display") === "none"){
            $('#emailEmptyErr, #emailInvalidErr, #emailDomainEmailErr, #emailExistErr').hide();
            $('#email').css('border-color', 'hsl(122, 39%, 49%)');
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
        var password = $('#password').val().trim();
        if (password == ''){
            $('#passwordEmptyErr').show();
            $('#password').css('border-color', 'hsl(4, 95%, 56%)');
        }
        
        if (password.length < 8) {
            $('#passwordMin8Err').show();
            $('#password').css('border-color', 'hsl(4, 95%, 56%)');
        }
        
        if(password != '' && password.length > 8){
            $('#passwordEmptyErr, #passwordMin8Err').hide();
            $('#password').css('border-color', 'hsl(122, 39%, 49%)');
        }
    }
});