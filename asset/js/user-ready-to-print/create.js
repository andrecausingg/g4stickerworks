$(document).ready(function(){
    $('#createReadyToPrintForm').submit(function(event) {
        event.preventDefault(); // prevent default form submission
        var formData = new FormData(this); // create form data object
        $.ajax({
        url: '../../../../g4stickerworks/asset/php/user-ready-to-print/create.php',
          type: 'POST',
          data: formData,
          processData: false,
          contentType: false,
          success: function(response) {
            var responseVar = response;

            if(responseVar == "created"){
                resetForm();
            }

          },
          error: function(jqXHR, textStatus, errorThrown) {
            console.log(errorThrown); // handle error response from server
          }
        });
    });
    
    // Validation
    $('#width').keyup(validateWidth);
    $('#height').keyup(validateHeight);
    $('#quantity').keyup(validateQuantity);

    // Function Width
    function validateWidth(){
        var width = $('#width').val().trim();

        if(width == ""){
            $("#emptyErrWidth").show();
            $('#width').css('border-color', 'hsl(4, 95%, 56%)');
        }else{
            $("#emptyErrWidth").hide();
            $('#width').css('border-color', 'hsl(122, 39%, 49%)');
        }
    }

    // Function Height
    function validateHeight(){
        var height = $('#height').val().trim();

        if(height == ""){
            $("#emptyErrHeight").show();
            $('#height').css('border-color', 'hsl(4, 95%, 56%)');
        }else{
            $("#emptyErrHeight").hide();
            $('#height').css('border-color', 'hsl(122, 39%, 49%)');
        }
    }

    // Function Quantity
    function validateQuantity(){
        var quantity = $('#quantity').val().trim();

        if(quantity == ""){
            $("#emptyErrQuantity").show();
            $('#quantity').css('border-color', 'hsl(4, 95%, 56%)');
        }else{
            $("#emptyErrQuantity").hide();
            $('#quantity').css('border-color', 'hsl(122, 39%, 49%)');
        }
    }

    // Calculate the Price
    $('#width, #height, #quantity').on('keyup propertychange paste', function(){
        // Get the values from the input fields
        var width = parseFloat($("#width").val());
        var height = parseFloat($("#height").val());
        var quantity = parseInt($("#quantity").val());
    
        // Define price variable before using it in conditions
        var price = 15.00;
    
        if($("#width").val() === '' || $("#height").val() === '' || $("#quantity").val() === ''){
            totalPrice = 0;
        }
        else {
            totalPrice = width * height * price * quantity;
        }
    
        // Update the price element with the calculated total price
    
        if(!isNaN(totalPrice)){
            $("#totalPrice").html(totalPrice.toFixed(2));
        }
    });

    // Upload Image Sticker
    $('#image').change(function() {
        var file = this.files[0];
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#displayImageTarpReadyToPrint').html('<img src="' + e.target.result + '">');
        }
        reader.readAsDataURL(file);
    });

    $("#createSuccessAlertCloseIcon").click(function(){
        $("#createSuccessAlert").hide();
    });

    function resetForm(){
         // Clear image display
        $('#displayImageTarpReadyToPrint').html('');
        
        $("#totalPrice").html("0.00");
        $("#createSuccessAlert").show();
        setTimeout(function() {
            $("#createSuccessAlert").hide(); // Show the element after 10 seconds
        }, 10000); // 10000 milliseconds = 10 seconds
        $('#width, #height, #quantity, #image, #message').val("");
        $('#width, #height, #quantity, #image, #message').css('border-color', 'hsl(207, 90%, 54%)');
    }
});