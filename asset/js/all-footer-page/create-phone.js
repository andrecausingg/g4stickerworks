$(document).ready(function(){
    // Create Form Phone
    $('#createFormPhone').submit(function(e){
        e.preventDefault();

        const phone = $('input[name="phone"]').val().trim();

        if(phone != ""){
            // validate phone number
            if(isValidPhone(phone)){
                $.ajax({
                    type: "POST",
                    url: "../../../../web-code/asset/php/all-footer-page/create-phone.php", // replace with the URL of your form processing script
                    data: { 
                        phone: phone
                    },
                    success: function(response) {
                        const responseVar = response.trim();
                        if(responseVar == "created"){
                            $("#createFormPhone").trigger("reset");
                            $("#successAlertInsert").show();
                            setTimeout(function() {
                                $("#successAlertInsert").hide(); // Show the element after 10 seconds
                            }, 10000); // 10000 milliseconds = 10 seconds
                            $("#phoneContainer").load("../../../../../web-code/asset/php/all-footer-page/display/d-phone.php")
                            $('#phone').css('border-color', 'hsl(207, 90%, 54%)');
                        }
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.error("Form submission failed: " + textStatus, errorThrown); // log error message to the console
                        // do something to handle the error (e.g. display an error message to the user)
                    }
                });
            } else {
                $("#invalidPhoneErr").show();
                $('#phone').css('border-color', 'hsl(4, 95%, 56%)');
            }
        } else {
            $("#invalidPhoneErr").show();
            $('#phone').css('border-color', 'hsl(4, 95%, 56%)');
        }
    });

    // Validation
    $('#phone').on('input', function() {
        const phone = $(this).val().trim();
        if(phone == ""){
            $("#invalidPhoneErr").html("Please enter a phone number");
            $("#invalidPhoneErr").show();
            $(this).css('border-color', 'hsl(4, 95%, 56%)');
        } else if(isValidPhone(phone)){
            $("#invalidPhoneErr").hide();
            $(this).css('border-color', 'hsl(122, 39%, 49%)');
        } else {
            $("#invalidPhoneErr").html("Please enter a valid phone number");
            $("#invalidPhoneErr").show();
            $(this).css('border-color', 'hsl(4, 95%, 56%)');
        }
    });

    function isValidPhone(phone) {
        const phoneRegex = /^\d{11}$/;
        return phoneRegex.test(phone);
    }
});