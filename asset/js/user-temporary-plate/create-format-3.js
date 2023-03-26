$(document).ready(function(){
    $('#createFormFormatThree').submit(function(e){
        e.preventDefault();

        var typeOfPlateFormatThree = $('#typeOfPlateFormatThree').val().trim().toUpperCase();
        var quantityFormatThree = $('#quantityFormatThree').val().trim();
        var registeredNumFormatThree = $('#registeredNumFormatThree').val().trim();

        if(typeOfPlateFormatThree != "" && validateTypeOfPlateFormatThree() &&
            quantityFormatThree != "" && validateQuantityFormatThree() &&
            registeredNumFormatThree != "" && validateRegisteredNumFormatThree()
        ){
            // send the form data to the server with AJAX
            $.ajax({
                type: "POST", // use the POST method
                url: "../../../../g4stickerworks/asset/php/user-temporary-plate/create-format-three.php", // replace with the URL of your form processing script
                data: { 
                    typeOfPlateFormatThree: typeOfPlateFormatThree,
                    quantityFormatThree: quantityFormatThree,
                    registeredNumFormatThree: registeredNumFormatThree,

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
            validateTypeOfPlateFormatThree();
            validateQuantityFormatThree();
            validateRegisteredNumFormatThree();
        }

        // Function Type of Plate
        function validateTypeOfPlateFormatThree(){
            var typeOfPlateFormatThree = $('#typeOfPlateFormatThree').val().trim();

            if(typeOfPlateFormatThree == ""){
                $("#emptyErrTypeOfPlateFormatThree").show();
                $('#typeOfPlateFormatThree').css('border-color', 'hsl(4, 95%, 56%)');
                return false;
            }else{
                $("#emptyErrTypeOfPlateFormatThree").hide();
                $('#typeOfPlateFormatThree').css('border-color', 'hsl(122, 39%, 49%)');
                return true;
            }
        }

        // Function Quantity
        function validateQuantityFormatThree(){
            computeTotalPrice();
            var quantityFormatThree = $('#quantityFormatThree').val().trim();

            if(quantityFormatThree == ""){
                $("#emptyErrQuantityFormatThree").show();
                $('#quantityFormatThree').css('border-color', 'hsl(4, 95%, 56%)');
                return false;
            }else{
                $("#emptyErrQuantityFormatThree").hide();
                $('#quantityFormatThree').css('border-color', 'hsl(122, 39%, 49%)');
                return true;
            }
        }

        // Function Registered No
        function validateRegisteredNumFormatThree(){
            var registeredNumFormatThree = $('#registeredNumFormatThree').val().trim();

            if(registeredNumFormatThree == ""){
                $("#emptyErrRegisteredNumFormatThree").show();
                $('#registeredNumFormatThree').css('border-color', 'hsl(4, 95%, 56%)');
                return false;
            }else{
                $("#emptyErrRegisteredNumFormatThree").hide();
                $('#registeredNumFormatThree').css('border-color', 'hsl(122, 39%, 49%)');
                return true;
            }
        }
    });

    // Validation
    $('#typeOfPlateFormatThree').change(validateTypeOfPlateFormatThree);
    $('#quantityFormatThree').keyup(validateQuantityFormatThree);
    $('#registeredNumFormatThree').keyup(validateRegisteredNumFormatThree);

    // Function Type of Plate
    function validateTypeOfPlateFormatThree(){
        var typeOfPlateFormatThree = $('#typeOfPlateFormatThree').val().trim();

        if(typeOfPlateFormatThree == ""){
            $("#emptyErrTypeOfPlateFormatThree").show();
            $('#typeOfPlateFormatThree').css('border-color', 'hsl(4, 95%, 56%)');
        }else{
            $("#emptyErrTypeOfPlateFormatThree").hide();
            $('#typeOfPlateFormatThree').css('border-color', 'hsl(122, 39%, 49%)');
        }
    }

    // Function Quantity
    function validateQuantityFormatThree(){
        computeTotalPrice();
        var quantityFormatThree = $('#quantityFormatThree').val().trim();

        if(quantityFormatThree == ""){
            $("#emptyErrQuantityFormatThree").show();
            $('#quantityFormatThree').css('border-color', 'hsl(4, 95%, 56%)');
        }else{
            $("#emptyErrQuantityFormatThree").hide();
            $('#quantityFormatThree').css('border-color', 'hsl(122, 39%, 49%)');
        }
    }

    // Function Registered No
    function validateRegisteredNumFormatThree(){
        var registeredNumFormatThree = $('#registeredNumFormatThree').val().trim();

        if(registeredNumFormatThree == ""){
            $("#emptyErrRegisteredNumFormatThree").show();
            $('#registeredNumFormatThree').css('border-color', 'hsl(4, 95%, 56%)');
        }else{
            $("#emptyErrRegisteredNumFormatThree").hide();
            $('#registeredNumFormatThree').css('border-color', 'hsl(122, 39%, 49%)');
        }
    }

    // Show Format Three Form
    $("#formatThreeBtn").click(function(){
        $("#bgCreateContainer").show();
        $("#createFormContainerFormatThree").show();
    });

    // Hide Format Three Form
    $("#closeFormatThreeFormIcon").click(function(){
        $("#bgCreateContainer").hide();
        $("#createFormContainerFormatThree").hide();
    });

    computeTotalPrice();

    function resetForm(){
        $("#totalPriceFormatThree").html("0.00");
        $("#createSuccessAlert").show();
        setTimeout(function() {
            $("#createSuccessAlert").hide(); // Show the element after 10 seconds
        }, 10000); // 10000 milliseconds = 10 seconds
        $('#typeOfPlateFormatThree, #quantityFormatThree, #registeredNumFormatThree').val("");
        $('#typeOfPlateFormatThree, #quantityFormatThree, #registeredNumFormatThree').css('border-color', 'hsl(207, 90%, 54%)');
    }

    function computeTotalPrice() {
        var quantityFormatThree = parseFloat($('#quantityFormatThree').val().trim());
        var totalPrice = (250.00 * quantityFormatThree).toFixed(2);
        if(isNaN(totalPrice)){
            totalPrice = 0.00;
        }
        $("#totalPriceFormatThree").html(totalPrice);
    }
});