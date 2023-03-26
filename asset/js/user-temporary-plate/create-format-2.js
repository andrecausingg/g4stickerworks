$(document).ready(function(){
    $('#createFormFormatTwo').submit(function(e){
        e.preventDefault();

        var typeOfPlateFormatTwo = $('#typeOfPlateFormatTwo').val().trim().toUpperCase();
        var quantityFormatTwo = $('#quantityFormatTwo').val().trim();
        var registeredNumFormatTwo = $('#registeredNumFormatTwo').val().trim();
        var regionFormatTwo = $('#regionFormatTwo').val().trim();
        var dealerFormatTwo = $('#dealerFormatTwo').val().trim().toUpperCase();


        if(typeOfPlateFormatTwo != "" && validateTypeOfPlateFormatTwo() &&
            quantityFormatTwo != "" && validateQuantityFormatTwo() &&
            registeredNumFormatTwo != "" && validateRegisteredNumFormatTwo() &&
            regionFormatTwo != "" && validateRegionFormatTwo() &&
            dealerFormatTwo != "" && validateDealer()
        ){
            // send the form data to the server with AJAX
            $.ajax({
                type: "POST", // use the POST method
                url: "../../../../g4stickerworks/asset/php/user-temporary-plate/create-format-two.php", // replace with the URL of your form processing script
                data: { 
                    typeOfPlateFormatTwo: typeOfPlateFormatTwo,
                    quantityFormatTwo: quantityFormatTwo,
                    registeredNumFormatTwo: registeredNumFormatTwo,
                    regionFormatTwo: regionFormatTwo,
                    dealerFormatTwo: dealerFormatTwo,

                }, // send the Content field value as data
                success: function(response){
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
            validateTypeOfPlateFormatTwo();
            validateQuantityFormatTwo();
            validateRegisteredNumFormatTwo();
            validateRegionFormatTwo();
            validateDealer();
        }

            // Function Type of Plate
            function validateTypeOfPlateFormatTwo(){
                var typeOfPlateFormatTwo = $('#typeOfPlateFormatTwo').val().trim();

                if(typeOfPlateFormatTwo == ""){
                    $("#emptyErrTypeOfPlateFormatTwo").show();
                    $('#typeOfPlateFormatTwo').css('border-color', 'hsl(4, 95%, 56%)');
                    return false;
                }else{
                    $("#emptyErrTypeOfPlateFormatTwo").hide();
                    $('#typeOfPlateFormatTwo').css('border-color', 'hsl(122, 39%, 49%)');
                    return true;
                }
            }

            // Function Quantity
            function validateQuantityFormatTwo(){
                var quantityFormatTwo = $('#quantityFormatTwo').val().trim();
        
                if(quantityFormatTwo == ""){
                    $("#emptyErrQuantityFormatTwo").show();
                    $('#quantityFormatTwo').css('border-color', 'hsl(4, 95%, 56%)');
                    return false;
                }else{
                    $("#emptyErrQuantityFormatTwo").hide();
                    $('#quantityFormatTwo').css('border-color', 'hsl(122, 39%, 49%)');
                    return true;
                }
            }

            // Function Registered No
            function validateRegisteredNumFormatTwo(){
                var registeredNumFormatTwo = $('#registeredNumFormatTwo').val().trim();

                if(registeredNumFormatTwo == ""){
                    $("#emptyErrRegisteredNumFormatTwo").show();
                    $('#registeredNumFormatTwo').css('border-color', 'hsl(4, 95%, 56%)');
                    return false;
                }else{
                    $("#emptyErrRegisteredNumFormatTwo").hide();
                    $('#registeredNumFormatTwo').css('border-color', 'hsl(122, 39%, 49%)');
                    return true;
                }
            }

            // Function Region
            function validateRegionFormatTwo(){
                var regionFormatTwo = $('#regionFormatTwo').val().trim();

                if(regionFormatTwo == ""){
                    $("#emptyErrRegionFormatTwo").show();
                    $('#regionFormatTwo').css('border-color', 'hsl(4, 95%, 56%)');
                    return false;
                }else{
                    $("#emptyErrRegionFormatTwo").hide();
                    $('#regionFormatTwo').css('border-color', 'hsl(122, 39%, 49%)');
                    return true;
                }
            }

            // Function Dealer
            function validateDealer(){
                var dealerFormatTwo = $('#dealerFormatTwo').val().trim();

                if(dealerFormatTwo == ""){
                    $("#emptyErrDealerFormatTwo").show();
                    $('#dealerFormatTwo').css('border-color', 'hsl(4, 95%, 56%)');
                    return false;
                }else{
                    $("#emptyErrDealerFormatTwo").hide();
                    $('#dealerFormatTwo').css('border-color', 'hsl(122, 39%, 49%)');
                    return true;
                }
            }
    });

    // Validation
    $('#typeOfPlateFormatTwo').change(validateTypeOfPlateFormatTwo);
    $('#quantityFormatTwo').keyup(validateQuantityFormatTwo);
    $('#registeredNumFormatTwo').keyup(validateRegisteredNumFormatTwo);
    $('#regionFormatTwo').change(validateRegionFormatTwo);
    $('#dealerFormatTwo').keyup(validateDealer);

    // Show Format Two Form
    $("#formatTwoBtn").click(function(){
        $("#bgCreateContainer").show();
        $("#createFormContainerFormatTwo").show();
    });

    // Hide Format Two Form
    $("#closeFormatTwoFormIcon").click(function(){
        $("#bgCreateContainer").hide();
        $("#createFormContainerFormatTwo").hide();
    });

    // Allow Number Quantity
    $("#quantityFormatTwo").on("input", function() {
        var regex = /[^0-9]/g;
        if ($(this).val().match(regex)) {
            $(this).val($(this).val().replace(regex, ''));
        }
    });

    // Function Type of Plate
    function validateTypeOfPlateFormatTwo(){
        var typeOfPlateFormatTwo = $('#typeOfPlateFormatTwo').val().trim();

        if(typeOfPlateFormatTwo == ""){
            $("#emptyErrTypeOfPlateFormatTwo").show();
            $('#typeOfPlateFormatTwo').css('border-color', 'hsl(4, 95%, 56%)');
        }else{
            $("#emptyErrTypeOfPlateFormatTwo").hide();
            $('#typeOfPlateFormatTwo').css('border-color', 'hsl(122, 39%, 49%)');
        }
    }

    // Function Quantity
    function validateQuantityFormatTwo(){
        computeTotalPrice();
        var quantityFormatTwo = $('#quantityFormatTwo').val().trim();

        if(quantityFormatTwo == ""){
            $("#emptyErrQuantityFormatTwo").show();
            $('#quantityFormatTwo').css('border-color', 'hsl(4, 95%, 56%)');
        }else{
            $("#emptyErrQuantityFormatTwo").hide();
            $('#quantityFormatTwo').css('border-color', 'hsl(122, 39%, 49%)');
        }
    }

    // Function Registered No
    function validateRegisteredNumFormatTwo(){
        var registeredNumFormatTwo = $('#registeredNumFormatTwo').val().trim();

        if(registeredNumFormatTwo == ""){
            $("#emptyErrRegisteredNumFormatTwo").show();
            $('#registeredNumFormatTwo').css('border-color', 'hsl(4, 95%, 56%)');
        }else{
            $("#emptyErrRegisteredNumFormatTwo").hide();
            $('#registeredNumFormatTwo').css('border-color', 'hsl(122, 39%, 49%)');
        }
    }

    // Function Region
    function validateRegionFormatTwo(){
        var regionFormatTwo = $('#regionFormatTwo').val().trim();

        if(regionFormatTwo == ""){
            $("#emptyErrRegionFormatTwo").show();
            $('#regionFormatTwo').css('border-color', 'hsl(4, 95%, 56%)');
        }else{
            $("#emptyErrRegionFormatTwo").hide();
            $('#regionFormatTwo').css('border-color', 'hsl(122, 39%, 49%)');
        }
    }

    // Function Dealer
    function validateDealer(){
        var dealerFormatTwo = $('#dealerFormatTwo').val().trim();

        if(dealerFormatTwo == ""){
            $("#emptyErrDealerFormatTwo").show();
            $('#dealerFormatTwo').css('border-color', 'hsl(4, 95%, 56%)');
        }else{
            $("#emptyErrDealerFormatTwo").hide();
            $('#dealerFormatTwo').css('border-color', 'hsl(122, 39%, 49%)');
        }
    }

    loopRegionSelectTag();
    computeTotalPrice();

    function resetForm(){
        $("#totalPriceFormatTwo").html("0.00");
        $("#createSuccessAlert").show();
        setTimeout(function() {
            $("#createSuccessAlert").hide(); // Show the element after 10 seconds
        }, 10000); // 10000 milliseconds = 10 seconds
        $('#typeOfPlateFormatTwo, #quantityFormatTwo, registeredNumFormatTwo, #regionFormatTwo, #dealerFormatTwo').val("");
        $('#typeOfPlateFormatTwo, #quantityFormatTwo, registeredNumFormatTwo, #regionFormatTwo, #dealerFormatTwo').css('border-color', 'hsl(207, 90%, 54%)');
    }

    function loopRegionSelectTag(){
        var regions = [
            'REGION I',
            'REGION II',
            'REGION III',
            'REGION IV-A',
            'REGION IV-B',
            'REGION V',
            'REGION VI',
            'REGION VII',
            'REGION VIII',
            'REGION IX',
            'REGION X',
            'REGION XI',
            'REGION XII',
            'REGION XIII',
            'BARMM',
            'CAR',
            'NCR'
        ];
          
          $.each(regions, function(index, region) {
            $('#regionFormatTwo').append($('<option>', {
              value: region,
              text: region
            }));
          });
    }

    function computeTotalPrice() {
        var quantityFormatTwo = parseFloat($('#quantityFormatTwo').val().trim());
        var totalPrice = (250.00 * quantityFormatTwo).toFixed(2);
        if(isNaN(totalPrice)){
            totalPrice = 0.00;
        }
        $("#totalPriceFormatTwo").html(totalPrice);
    }
});