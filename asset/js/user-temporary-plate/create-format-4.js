$(document).ready(function(){
    $('#createFormFormatFour').submit(function(e){
        e.preventDefault();

        var typeOfPlateFormatFour = $('#typeOfPlateFormatFour').val().trim().toUpperCase();
        var quantityFormatFour = $('#quantityFormatFour').val().trim();
        var registeredNumFormatFour = $('#registeredNumFormatFour').val().trim();

        if(typeOfPlateFormatFour != "" && validateTypeOfPlateFormatFour() &&
            quantityFormatFour != "" && validateQuantityFormatFour() &&
            registeredNumFormatFour != "" && validateRegisteredNumFormatFour()
        ){
            // send the form data to the server with AJAX
            $.ajax({
                type: "POST", // use the POST method
                url: "../../../../g4stickerworks/asset/php/user-temporary-plate/create-format-four.php", // replace with the URL of your form processing script
                data: { 
                    typeOfPlateFormatFour: typeOfPlateFormatFour,
                    quantityFormatFour: quantityFormatFour,
                    registeredNumFormatFour: registeredNumFormatFour,

                }, // send the Content field value as data
                success: function(response){
                    console.log(response);
                    var responseVarChar = response.trim();     
                    if(responseVarChar == "created"){
                        resetForm();
                    }
                    // do something with the server response (e.g. show a success message)
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.error("Form submission failed: " + textStatus, errorThrown); // log error message to the console
                    // do something to handle the error (e.g. display an error message to the user)
                }
            });
        }else{
            validateTypeOfPlateFormatFour();
            validateQuantityFormatFour();
            validateRegisteredNumFormatFour();
        }

        // Function Type of Plate
        function validateTypeOfPlateFormatFour(){
            var typeOfPlateFormatFour = $('#typeOfPlateFormatFour').val().trim();

            if(typeOfPlateFormatFour == ""){
                $("#emptyErrTypeOfPlateFormatFour").show();
                $('#typeOfPlateFormatFour').css('border-color', 'hsl(4, 95%, 56%)');
                return false;
            }else{
                $("#emptyErrTypeOfPlateFormatFour").hide();
                $('#typeOfPlateFormatFour').css('border-color', 'hsl(122, 39%, 49%)');
                return true;
            }
        }

        // Function Quantity
        function validateQuantityFormatFour(){
            computeTotalPrice();
            var quantityFormatFour = $('#quantityFormatFour').val().trim();

            if(quantityFormatFour == ""){
                $("#emptyErrQuantityFormatFour").show();
                $('#quantityFormatFour').css('border-color', 'hsl(4, 95%, 56%)');
                return false;
            }else{
                $("#emptyErrQuantityFormatFour").hide();
                $('#quantityFormatFour').css('border-color', 'hsl(122, 39%, 49%)');
                return true;
            }
        }

        // Function Registered No
        function validateRegisteredNumFormatFour(){
            var registeredNumFormatFour = $('#registeredNumFormatFour').val().trim();

            if(registeredNumFormatFour == ""){
                $("#emptyErrRegisteredNumFormatFour").show();
                $('#registeredNumFormatFour').css('border-color', 'hsl(4, 95%, 56%)');
                return false;
            }else{
                $("#emptyErrRegisteredNumFormatFour").hide();
                $('#registeredNumFormatFour').css('border-color', 'hsl(122, 39%, 49%)');
                return true;
            }
        }
    });

    // Validation
    $('#typeOfPlateFormatFour').change(validateTypeOfPlateFormatFour);
    $('#quantityFormatFour').keyup(validateQuantityFormatFour);
    $('#registeredNumFormatFour').keyup(validateRegisteredNumFormatFour);

    // Function Type of Plate
    function validateTypeOfPlateFormatFour(){
        var typeOfPlateFormatFour = $('#typeOfPlateFormatFour').val().trim();

        if(typeOfPlateFormatFour == ""){
            $("#emptyErrTypeOfPlateFormatFour").show();
            $('#typeOfPlateFormatFour').css('border-color', 'hsl(4, 95%, 56%)');
        }else{
            $("#emptyErrTypeOfPlateFormatFour").hide();
            $('#typeOfPlateFormatFour').css('border-color', 'hsl(122, 39%, 49%)');
        }
    }

    // Function Quantity
    function validateQuantityFormatFour(){
        computeTotalPrice();
        var quantityFormatFour = $('#quantityFormatFour').val().trim();

        if(quantityFormatFour == ""){
            $("#emptyErrQuantityFormatFour").show();
            $('#quantityFormatFour').css('border-color', 'hsl(4, 95%, 56%)');
        }else{
            $("#emptyErrQuantityFormatFour").hide();
            $('#quantityFormatFour').css('border-color', 'hsl(122, 39%, 49%)');
        }
    }

    // Function Registered No
    function validateRegisteredNumFormatFour(){
        var registeredNumFormatFour = $('#registeredNumFormatFour').val().trim();

        if(registeredNumFormatFour == ""){
            $("#emptyErrRegisteredNumFormatFour").show();
            $('#registeredNumFormatFour').css('border-color', 'hsl(4, 95%, 56%)');
        }else{
            $("#emptyErrRegisteredNumFormatFour").hide();
            $('#registeredNumFormatFour').css('border-color', 'hsl(122, 39%, 49%)');
        }
    }

    // Show Format Four Form
    $("#formatFourBtn").click(function(){
        $("#bgCreateContainer").show();
        $("#createFormContainerFormatFour").show();
    });

    // Hide Format Four Form
    $("#closeFormatFourFormIcon").click(function(){
        $("#bgCreateContainer").hide();
        $("#createFormContainerFormatFour").hide();
    });

    computeTotalPrice();

    function resetForm(){
        $("#totalPriceFormatFour").html("0.00");
        $("#createSuccessAlert").show();
        setTimeout(function() {
            $("#createSuccessAlert").hide(); // Show the element after 10 seconds
        }, 10000); // 10000 milliseconds = 10 seconds
        $('#typeOfPlateFormatFour, #quantityFormatFour, #registeredNumFormatFour').val("");
        $('#typeOfPlateFormatFour, #quantityFormatFour, #registeredNumFormatFour').css('border-color', 'hsl(207, 90%, 54%)');
    }

    function computeTotalPrice() {
        var quantityFormatFour = parseFloat($('#quantityFormatFour').val().trim());
        var totalPrice = (250.00 * quantityFormatFour).toFixed(2);
        if(isNaN(totalPrice)){
            totalPrice = 0.00;
        }
        $("#totalPriceFormatFour").html(totalPrice);
    }
});