$(document).ready(function() {
    

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