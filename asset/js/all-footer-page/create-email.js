$(document).ready(function(){
    // Create Form Email
    $('#createFormEmail').submit(function(e){
        e.preventDefault();

        const email = $('input[name="email"]').val().trim();

        if(email != ""){
            // validate email
            if(isValidEmail(email)){
                $.ajax({
                    type: "POST",
                    url: "../../../../g4stickerworks/asset/php/all-footer-page/create-email.php", // replace with the URL of your form processing script
                    data: { 
                        email: email
                    },
                    success: function(response) {
                        const responseVar = response.trim();
                        if(responseVar == "created"){
                            $("#createFormEmail").trigger("reset");
                            $("#successAlertInsert").show();
                            setTimeout(function() {
                                $("#successAlertInsert").hide(); // Show the element after 10 seconds
                            }, 10000); // 10000 milliseconds = 10 seconds
                            $("#emailContainer").load("../../../../../g4stickerworks/asset/php/all-footer-page/display/d-email.php")
                            $('#email').css('border-color', 'hsl(207, 90%, 54%)');
                        }
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.error("Form submission failed: " + textStatus, errorThrown); // log error message to the console
                        // do something to handle the error (e.g. display an error message to the user)
                    }
                });
            } else {
                $("#invalidEmailErr").show();
                $('#email').css('border-color', 'hsl(4, 95%, 56%)');
            }
        } else {
            $("#invalidEmailErr").show();
            $('#email').css('border-color', 'hsl(4, 95%, 56%)');
        }
    });

    // Validation
    $('#email').on('input', function() {
        const email = $(this).val().trim();
        if(isValidEmail(email)){
            $("#invalidEmailErr").hide();
            $(this).css('border-color', 'hsl(122, 39%, 49%)');
        } else {
            $("#invalidEmailErr").show();
            $(this).css('border-color', 'hsl(4, 95%, 56%)');
        }
    });

    function isValidEmail(email) {
        // Regular expression for validating email
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }
});
