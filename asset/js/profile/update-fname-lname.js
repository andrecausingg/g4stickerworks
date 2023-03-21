$(document).ready(function(){
    // // Attach submit event listener to the form
    $("#createFormNewUser").submit(function(e) {
        e.preventDefault(); // prevent the default form submission
        
        // Sanitize user input
        var firstName = $("#firstName").val().trim();
        var lastName = $("#lastName").val().trim(); 

        if(firstName != "" && validateFirstName(firstName) &&
            lastName != "" && validateLastName(lastName)){

            // send the form data to the server with AJAX
            $.ajax({
                type: "POST", // use the POST method
                url: "../../../../g4stickerworks/asset/php/new-user/new-user.php", // replace with the URL of your form processing script
                data: { 
                    firstName: firstName, 
                    lastName: lastName, 
                    phoneNumber: phoneNumber, 
                }, // send the Content field value as data
                success: function(response) {
                    console.log(response);
                    const responseVarChar = response.trim();     
                    if(responseVarChar == "updated"){
                        window.location.href = '../../../../g4stickerworks/user-product.html';
                    }           
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.error("Form submission failed: " + textStatus, errorThrown); // log error message to the console
                    // do something to handle the error (e.g. display an error message to the user)
                }
            });
        }else{
            validateFirstName();
            validateLastName();
        }

        function validateFirstName(firstName) {
            var regex = /^[a-zA-Z]+$/;
        
            if (!regex.test(firstName)){
                $('#firstName').css('border-color', 'hsl(4, 95%, 56%)');
                $("#firstNameErr").show();
                return false;
            } else {
                $('#firstName').css('border-color', 'hsl(122, 39%, 49%)');
                $("#firstNameErr").hide();
                return true;
            }
        }
        
        function validateLastName(lastName) {
            var regex = /^[a-zA-Z]+$/;
        
            if (!regex.test(lastName)) {
                $('#lastName').css('border-color', 'hsl(4, 95%, 56%)');
                $("#lastNameErr").show();
                return false;
            } else {
                $('#lastName').css('border-color', 'hsl(122, 39%, 49%)');
                $("#lastNameErr").hide();
                return true;
            }
        }
    });

    // Show Form Update First name and Last Name
    $(document).on("click", "#iconFNameAndLName", function(){
        $('body').css('overflow', 'hidden'); 
        $("#updateBgContainerForm").show();
        $("#updateContainerFormFNameAndLName").show();
    });

    $(document).on("click", "#updateCloseFormIconFNameAndLName", function(){
        $('body').css('overflow', 'auto'); 
        $("#updateBgContainerForm").hide();
        $("#updateContainerFormFNameAndLName").hide();
    });

    $(document).on("input", "#firstName", validateFirstName);
    $(document).on("input", "#lastName", validateLastName);

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
});