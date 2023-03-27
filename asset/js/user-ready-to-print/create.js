$(document).ready(function(){
    $('#createReadyToPrintForm').submit(function(e){
        e.preventDefault();
        var width = $('#width').val().trim();
        var height = $('#height').val().trim();
        var quantity = $('#quantity').val().trim();
        var imageData = $('#displayImageTarpReadyToPrint img').attr('src');
        
        // create form data object
        var formData = new FormData();
        formData.append('width', width);
        formData.append('height', height);
        formData.append('quantity', quantity);
        formData.append('imageData', imageData);
        
        // send AJAX request
        $.ajax({
            url: 'your_backend_endpoint_url',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                // handle success response
            },
            error: function(jqXHR, textStatus, errorThrown) {
                // handle error response
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
        var totalWH = 0;
    
        if($("#width").val() === '' || $("#height").val() === '' || $("#quantity").val() === ''){
            totalPrice = 0;
        }
        else {
            totalWH = width * height;
            totalPrice = totalWH * price * quantity;
        }
    
        console.log("widht:" + width);
        console.log("height:" + height);
        console.log("quantity:" + quantity);
        console.log("totalPrice:" + totalPrice);
    
        // Update the price element with the calculated total price
    
        if(!isNaN(totalPrice)){
            $("#totalPrice").html(totalPrice.toFixed(2));
        }
    });

    // Upload Image Sticker
    $('#uploadImageButton').on('click', function() {
        $('<input type="file" accept="image/*">').on('change', function() {
        var file = this.files[0];
        var reader = new FileReader();
        reader.onload = function() {
            var image = $('<img>').attr('src', reader.result);
            $('#displayImageTarpReadyToPrint').html(image);
        }
        reader.readAsDataURL(file);
        }).click();
    });
});