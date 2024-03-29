$(document).ready(function(){
    $('#createFormFormatOne').submit(function(e){
        e.preventDefault();

        var typeOfPlateFormatOne = $('#typeOfPlateFormatOne').val().trim().toUpperCase();
        var quantityFormatOne = $('#quantityFormatOne').val().trim();
        var mvFileFourDigitFormatOne = $('#mvFileFourDigitFormatOne').val().trim();
        var mvFileSevenDigitFormatOne = $('#mvFileSevenDigitFormatOne').val().trim();
        var regionFormatOne = $('#regionFormatOne').val().trim();
        var dealerFormatOne = $('#dealerFormatOne').val().trim().toUpperCase();

        var mvFileFormatOne = mvFileFourDigitFormatOne + "-" + mvFileSevenDigitFormatOne;

        if(typeOfPlateFormatOne != "" && validateTypeOfPlateFormatOne() &&
            quantityFormatOne != "" && validateQuantityFormatOne() &&
            mvFileFourDigitFormatOne != "" && validateMvFileFourDigitFormatOne() &&
            mvFileSevenDigitFormatOne != "" && validateMvFileSevenDigitFormatOne() &&
            regionFormatOne != "" && validateRegionFormatOne() &&
            dealerFormatOne != "" && validateDealer()
        ){
            // send the form data to the server with AJAX
            $.ajax({
                type: "POST", // use the POST method
                url: "../../../../g4stickerworks/asset/php/user-temporary-plate/create-format-one.php", // replace with the URL of your form processing script
                data: { 
                    typeOfPlateFormatOne: typeOfPlateFormatOne,
                    quantityFormatOne: quantityFormatOne,
                    mvFileFormatOne: mvFileFormatOne,
                    regionFormatOne: regionFormatOne,
                    dealerFormatOne: dealerFormatOne,

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
            validateTypeOfPlateFormatOne();
            validateQuantityFormatOne();
            validateMvFileFourDigitFormatOne();
            validateMvFileSevenDigitFormatOne();
            validateRegionFormatOne();
            validateDealer();
        }

            // Function Type of Plate
            function validateTypeOfPlateFormatOne(){
                var typeOfPlateFormatOne = $('#typeOfPlateFormatOne').val().trim();

                if(typeOfPlateFormatOne == ""){
                    $("#emptyErrTypeOfPlateFormatOne").show();
                    $('#typeOfPlateFormatOne').css('border-color', 'hsl(4, 95%, 56%)');
                    return false;
                }else{
                    $("#emptyErrTypeOfPlateFormatOne").hide();
                    $('#typeOfPlateFormatOne').css('border-color', 'hsl(122, 39%, 49%)');
                    return true;
                }
            }

            // Function Quantity
            function validateQuantityFormatOne(){
                var quantityFormatOne = $('#quantityFormatOne').val().trim();
        
                if(quantityFormatOne == ""){
                    $("#emptyErrQuantityFormatOne").show();
                    $('#quantityFormatOne').css('border-color', 'hsl(4, 95%, 56%)');
                    return false;
                }else{
                    $("#emptyErrQuantityFormatOne").hide();
                    $('#quantityFormatOne').css('border-color', 'hsl(122, 39%, 49%)');
                    return true;
                }
            }

            // Function MvFile 4 DIgit
            function validateMvFileFourDigitFormatOne(){
                var mvFileFourDigitFormatOne = $('#mvFileFourDigitFormatOne').val().trim();

                if(mvFileFourDigitFormatOne == ""){
                    $("#emptyErrMvFileFourDigitFormatOne").show();
                    $('#mvFileFourDigitFormatOne').css('border-color', 'hsl(4, 95%, 56%)');
                    return false;
                }
                
                if(mvFileFourDigitFormatOne.length != 4){
                    $("#lessFourErrMvFileFourDigitFormatOne").show();
                    $('#mvFileFourDigitFormatOne').css('border-color', 'hsl(4, 95%, 56%)');
                    return false;
                }
                
                if(mvFileFourDigitFormatOne != "" && mvFileFourDigitFormatOne.length == 4){
                    $("#emptyErrMvFileFourDigitFormatOne, #lessFourErrMvFileFourDigitFormatOne").hide();
                    $('#mvFileFourDigitFormatOne').css('border-color', 'hsl(122, 39%, 49%)');
                    return true;
                }
            }

            // Function MvFile 7 DIgit
            function validateMvFileSevenDigitFormatOne(){
                var mvFileSevenDigitFormatOne = $('#mvFileSevenDigitFormatOne').val().trim();

                if(mvFileSevenDigitFormatOne == ""){
                    $("#emptyErrMvFileSevenDigitFormatOne").show();
                    $('#mvFileSevenDigitFormatOne').css('border-color', 'hsl(4, 95%, 56%)');
                    return false;
                }

                if(mvFileSevenDigitFormatOne.length != 7){
                    $("#lessSevenErrMvFileSevenDigitFormatOne").show();
                    $('#mvFileSevenDigitFormatOne').css('border-color', 'hsl(4, 95%, 56%)');
                    return false;
                }
                
                if(mvFileSevenDigitFormatOne != "" && mvFileSevenDigitFormatOne.length == 7){
                    $("#emptyErrMvFileSevenDigitFormatOne, #lessSevenErrMvFileSevenDigitFormatOne").hide();
                    $('#mvFileSevenDigitFormatOne').css('border-color', 'hsl(122, 39%, 49%)');
                    return true;
                }
            }

            // Function Region
            function validateRegionFormatOne(){
                var regionFormatOne = $('#regionFormatOne').val().trim();

                if(regionFormatOne == ""){
                    $("#emptyErrRegionFormatOne").show();
                    $('#regionFormatOne').css('border-color', 'hsl(4, 95%, 56%)');
                    return false;
                }else{
                    $("#emptyErrRegionFormatOne").hide();
                    $('#regionFormatOne').css('border-color', 'hsl(122, 39%, 49%)');
                    return true;
                }
            }

            // Function Dealer
            function validateDealer(){
                var dealerFormatOne = $('#dealerFormatOne').val().trim();

                if(dealerFormatOne == ""){
                    $("#emptyErrDealerFormatOne").show();
                    $('#dealerFormatOne').css('border-color', 'hsl(4, 95%, 56%)');
                    return false;
                }else{
                    $("#emptyErrDealerFormatOne").hide();
                    $('#dealerFormatOne').css('border-color', 'hsl(122, 39%, 49%)');
                    return true;
                }
            }
    });

    // Validation
    $('#typeOfPlateFormatOne').change(validateTypeOfPlateFormatOne);
    $('#quantityFormatOne').keyup(validateQuantityFormatOne);
    $('#mvFileFourDigitFormatOne').keyup(validateMvFileFourDigitFormatOne);
    $('#mvFileSevenDigitFormatOne').keyup(validateMvFileSevenDigitFormatOne);
    $('#regionFormatOne').change(validateRegionFormatOne);
    $('#dealerFormatOne').keyup(validateDealer);

    // Function Type of Plate
    function validateTypeOfPlateFormatOne(){
        var typeOfPlateFormatOne = $('#typeOfPlateFormatOne').val().trim();

        if(typeOfPlateFormatOne == ""){
            $("#emptyErrTypeOfPlateFormatOne").show();
            $('#typeOfPlateFormatOne').css('border-color', 'hsl(4, 95%, 56%)');
        }else{
            $("#emptyErrTypeOfPlateFormatOne").hide();
            $('#typeOfPlateFormatOne').css('border-color', 'hsl(122, 39%, 49%)');
        }
    }

    // Function Quantity
    function validateQuantityFormatOne(){
        computeTotalPrice();
        var quantityFormatOne = $('#quantityFormatOne').val().trim();

        if(quantityFormatOne == ""){
            $("#emptyErrQuantityFormatOne").show();
            $('#quantityFormatOne').css('border-color', 'hsl(4, 95%, 56%)');
        }else{
            $("#emptyErrQuantityFormatOne").hide();
            $('#quantityFormatOne').css('border-color', 'hsl(122, 39%, 49%)');
        }
    }
    
    // Function MvFile 4 DIgit
    function validateMvFileFourDigitFormatOne(){
        var mvFileFourDigitFormatOne = $('#mvFileFourDigitFormatOne').val().trim();

        if(mvFileFourDigitFormatOne == ""){
            $("#emptyErrMvFileFourDigitFormatOne").show();
            $('#mvFileFourDigitFormatOne').css('border-color', 'hsl(4, 95%, 56%)');
        }
        
        if(mvFileFourDigitFormatOne.length != 4){
            $("#lessFourErrMvFileFourDigitFormatOne").show();
            $('#mvFileFourDigitFormatOne').css('border-color', 'hsl(4, 95%, 56%)');
        }
        
        if(mvFileFourDigitFormatOne != "" && mvFileFourDigitFormatOne.length == 4){
            $("#emptyErrMvFileFourDigitFormatOne, #lessFourErrMvFileFourDigitFormatOne").hide();
            $('#mvFileFourDigitFormatOne').css('border-color', 'hsl(122, 39%, 49%)');
        }
    }

    // Function MvFile 7 DIgit
    function validateMvFileSevenDigitFormatOne(){
        var mvFileSevenDigitFormatOne = $('#mvFileSevenDigitFormatOne').val().trim();

        if(mvFileSevenDigitFormatOne == ""){
            $("#emptyErrMvFileSevenDigitFormatOne").show();
            $('#mvFileSevenDigitFormatOne').css('border-color', 'hsl(4, 95%, 56%)');
        }

        if(mvFileSevenDigitFormatOne.length != 7){
            $("#lessSevenErrMvFileSevenDigitFormatOne").show();
            $('#mvFileSevenDigitFormatOne').css('border-color', 'hsl(4, 95%, 56%)');
        }
        
        if(mvFileSevenDigitFormatOne != "" && mvFileSevenDigitFormatOne.length == 7){
            $("#emptyErrMvFileSevenDigitFormatOne, #lessSevenErrMvFileSevenDigitFormatOne").hide();
            $('#mvFileSevenDigitFormatOne').css('border-color', 'hsl(122, 39%, 49%)');
        }
    }

    // Function Region
    function validateRegionFormatOne(){
        var regionFormatOne = $('#regionFormatOne').val().trim();

        if(regionFormatOne == ""){
            $("#emptyErrRegionFormatOne").show();
            $('#regionFormatOne').css('border-color', 'hsl(4, 95%, 56%)');
        }else{
            $("#emptyErrRegionFormatOne").hide();
            $('#regionFormatOne').css('border-color', 'hsl(122, 39%, 49%)');
        }
    }

    // Function Dealer
    function validateDealer(){
        var dealerFormatOne = $('#dealerFormatOne').val().trim();

        if(dealerFormatOne == ""){
            $("#emptyErrDealerFormatOne").show();
            $('#dealerFormatOne').css('border-color', 'hsl(4, 95%, 56%)');
        }else{
            $("#emptyErrDealerFormatOne").hide();
            $('#dealerFormatOne').css('border-color', 'hsl(122, 39%, 49%)');
        }
    }

    // Allow Number Quantity
    $("#quantityFormatOne").on("input", function() {
        var regex = /[^0-9]/g;
        if ($(this).val().match(regex)) {
            $(this).val($(this).val().replace(regex, ''));
        }
    });

    // Allow Number Four Digit
    $("#mvFileFourDigitFormatOne").on("input", function() {
        var regex = /[^0-9]/g;
        if ($(this).val().match(regex)) {
            $(this).val($(this).val().replace(regex, ''));
        }
    });

    // Allow Number Seven Digit
    $("#mvFileSevenDigitFormatOne").on("input", function() {
        var regex = /[^0-9]/g;
        if ($(this).val().match(regex)) {
            $(this).val($(this).val().replace(regex, ''));
        }
    });

    // Show Format One Form
    $("#formatOneBtn").click(function(){
        $('body').css('overflow', 'hidden'); 
        $("#bgCreateContainer").show();
        $("#createFormContainerFormatOne").show();
    });

    // Hide Format One Form
    $("#closeFormatOneFormIcon").click(function(){
        $('body').css('overflow', 'auto'); 
        $("#bgCreateContainer").hide();
        $("#createFormContainerFormatOne").hide();
    });

    // Hide Success Add to Cart 
    $("#createSuccessAlertCloseIcon").click(function(){
        $("#createSuccessAlert").hide();
    });

    loopRegionSelectTag();
    computeTotalPrice();

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
            $('#regionFormatOne').append($('<option>', {
              value: region,
              text: region
            }));
          });
    }

    function resetForm(){
        $("#totalPrice").html("0.00");
        $("#createSuccessAlert").show();
        setTimeout(function() {
            $("#createSuccessAlert").hide(); // Show the element after 10 seconds
        }, 10000); // 10000 milliseconds = 10 seconds
        // $("#bgCreateContainer").hide();
        // $("#createFormContainerFormatOne").hide();
        $('#typeOfPlateFormatOne, #quantityFormatOne, #mvFileFourDigitFormatOne, #mvFileSevenDigitFormatOne, #regionFormatOne, #dealerFormatOne').val("");
        $('#typeOfPlateFormatOne, #quantityFormatOne, #mvFileFourDigitFormatOne, #mvFileSevenDigitFormatOne, #regionFormatOne, #dealerFormatOne').css('border-color', 'hsl(207, 90%, 54%)');
    }

    function computeTotalPrice() {
        var quantityFormatOne = parseFloat($('#quantityFormatOne').val().trim());
        var totalPrice = (250.00 * quantityFormatOne).toFixed(2);
        if(isNaN(totalPrice)){
            totalPrice = 0.00;
        }
        $("#totalPriceFormatOne").html(totalPrice);
    }
});