$(document).ready(function(){
    // Attach submit event listener to the form
    $("#createFormContent").submit(function(e) {
        e.preventDefault(); // prevent the default form submission
        
        // Sanitize user input
        var firstName = $("#firstName").val().trim();
        var lastName = $("#lastName").val().trim(); 
        var phoneNumber = $("#phoneNumber").val().trim(); 

        if(firstName != "" && validateFirstName(firstName) &&
            lastName != "" && validateLastName(lastName) &&
            phoneNumber != "" && validatePhoneNumber(phoneNumber)){
            // send the form data to the server with AJAX
            $.ajax({
                type: "POST", // use the POST method
                // url: "../../../../g4stickerworks/asset/php/new-user/new-user.php", // replace with the URL of your form processing script
                data: { 
                    firstName: firstName, 
                    lastName: lastName, 
                    phoneNumber: phoneNumber, 
                }, // send the Content field value as data
                success: function(response) {
                    console.log(response);
                    // const responseVarChar = response.trim();                
                    // if(responseVarChar == "created"){
                    //     $("#createFormContent").trigger("reset");
                    //     $("#createSuccessAlert").show();

                    //     setTimeout(function() {
                    //         $("#createSuccessAlert").hide(); // Show the element after 10 seconds
                    //     }, 10000); // 10000 milliseconds = 10 seconds

                    //     // $("#displayContent").load("../../../../../g4stickerworks/asset/php/services-page/display/d-data-content.php");
                    //     // $("#updateDisplayContainerContent").load("../../../../../g4stickerworks/asset/php/services-page/display/d-update-content.php");
                    //     // $("#deleteDisplayContainerContent").load("../../../../../g4stickerworks/asset/php/services-page/display/d-delete-content.php");
                    // }
                    // do something with the server response (e.g. show a success message)
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.error("Form submission failed: " + textStatus, errorThrown); // log error message to the console
                    // do something to handle the error (e.g. display an error message to the user)
                }
            });
        }else{
            validateFirstName();
            validateLastName();
            validatePhoneNumber();
        }
    });


    // Attach event listeners to the first name and last name fields
    
    $("#firstName").on("input", validateFirstName);
    $("#lastName").on("input", validateLastName);

    // Attach event listener to the phone number field
    $("#phoneNumber").on("input", validatePhoneNumber);

    function validateFirstName(){
        var firstName = ($("#firstName").val().trim());
        var regex = /^[a-zA-Z]+$/;
        
        if (!regex.test(firstName)){
            $('#firstName').css('border-color', 'hsl(4, 95%, 56%)');
            $("#firstNameErr").show();
        }else{
            $('#firstName').css('border-color', 'hsl(122, 39%, 49%)');
            $("#firstNameErr").hide();
        }
    }

    function validateLastName() {
        var lastName = $("#lastName").val().trim();
        var regex = /^[a-zA-Z]+$/;
        
        if (!regex.test(lastName)) {
            $('#lastName').css('border-color', 'hsl(4, 95%, 56%)');
            $("#lastNameErr").show();
        }else{
            $('#lastName').css('border-color', 'hsl(122, 39%, 49%)');
            $("#lastNameErr").hide();
        }
    }

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