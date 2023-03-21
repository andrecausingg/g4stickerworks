$(document).ready(function(){
    // Attach submit event listener to the form
    $(document).on("submit", "#updateFormPhoneNumber", function(e){
        e.preventDefault(); // prevent the default form submission
        
        // Sanitize user input
        var phoneNumber = $("#phoneNumber").val().trim();

        if(phoneNumber != "" && validatePhoneNumber(phoneNumber)){

            // send the form data to the server with AJAX
            $.ajax({
                type: "POST", // use the POST method
                url: "../../../../g4stickerworks/asset/php/profile/update-phone-number.php", // replace with the URL of your form processing script
                data: { 
                    phoneNumber: phoneNumber, 
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
            validatePhoneNumber();
        }

        function validatePhoneNumber() {
            var phoneNumber = $("#phoneNumber").val().trim();
            var regex = /^\d{11}$/;
            
            if (!regex.test(phoneNumber)) {
                $('#phoneNumber').css('border-color', 'hsl(4, 95%, 56%)');
                $("#phoneNumErr").show();
                return false;
            }else{
                $('#phoneNumber').css('border-color', 'hsl(122, 39%, 49%)');
                $("#phoneNumErr").hide();
                return true;
            }
        }
    });

    // Show Form Update First name and Last Name
    $(document).on("click", "#iconPhone", function(){
        $('body').css('overflow', 'hidden'); 
        $("#updateBgContainerForm").show();
        $("#updateContainerFormPhoneNumber").show();
    });

    // Hide Form Update First name and Last Name
    $(document).on("click", "#updateCloseFormIconPhoneNumber", function(){
        $('body').css('overflow', 'auto'); 
        $("#updateBgContainerForm").hide();
        $("#updateContainerFormPhoneNumber").hide();
    });

    $(document).on("input", "#phoneNumber", validatePhoneNumber);

    function validatePhoneNumber() {
        var phoneNumber = $("#phoneNumber").val().trim();
        var regex = /^\d{11}$/;
        
        if (!regex.test(phoneNumber)) {
            $('#phoneNumber').css('border-color', 'hsl(4, 95%, 56%)');
            $("#phoneNumErr").show();
        }else{
            $('#phoneNumber').css('border-color', 'hsl(122, 39%, 49%)');
            $("#phoneNumErr").hide();
        }
    }
});