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
            validateFieldsEmail();
        }

        // Function validate Email
        function validateFieldsEmail(){
            var email = $('#emailProfile').val().trim();
            var trustedDomains = ['gmail.com', 'yahoo.com', 'outlook.com', 'aol.com', 'triots.com', 'valanides.com'];

            if(!validateEmail(email)){
                $('#validateEmailErrProfile').show();
                $('#emailProfile').css('border-color', 'hsl(4, 95%, 56%)');
                return false;
            }
            
            if(!validateEmailDomain(email)){
                $('#domainEmailErrProfile').show();
                $('#emailProfile').css('border-color', 'hsl(4, 95%, 56%)');
                return false;
            }

            if(validateEmail(email) && validateEmailDomain(email)){
                $('#validateEmailErrProfile, #domainEmailErrProfile').hide();
                $('#emailProfile').css('border-color', 'hsl(122, 39%, 49%)');
                return true;
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
    });

    // Show Form Update Email
    $(document).on("click", "#iconEmail", function(){
        $('body').css('overflow', 'hidden'); 
        $("#updateBgContainerForm").show();
        $("#updateContainerFormEmail").show();
    });

    // Hide Form Update Email
    $(document).on("click", "#updateCloseFormIconEmail", function(){
        $('body').css('overflow', 'auto'); 
        $("#updateBgContainerForm").hide();
        $("#updateContainerFormEmail").hide();
    });

    $(document).on("input", "#emailProfile", validateFieldsEmail);

    // Function validate Email
    function validateFieldsEmail(){
        var email = $('#emailProfile').val().trim();
        var trustedDomains = ['gmail.com', 'yahoo.com', 'outlook.com', 'aol.com', 'triots.com', 'valanides.com'];

        if(!validateEmail(email)){
            $('#validateEmailErrProfile').show();
            $('#emailProfile').css('border-color', 'hsl(4, 95%, 56%)');
        }
        
        if(!validateEmailDomain(email)){
            $('#domainEmailErrProfile').show();
            $('#emailProfile').css('border-color', 'hsl(4, 95%, 56%)');
        }

        if(validateEmail(email) && validateEmailDomain(email)){
            $('#validateEmailErrProfile, #domainEmailErrProfile').hide();
            $('#emailProfile').css('border-color', 'hsl(122, 39%, 49%)');
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
});