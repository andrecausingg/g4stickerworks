$(document).ready(function(){
    $(document).on('click', ".addToCart",function(){
        var dataIdValue = $(this).data("id");
        var quantity = parseInt($('.quantityProduct[quantity-count-id="' + dataIdValue + '"]').text());

        if(dataIdValue != "" && quantity != ""){
            $.ajax({
                url: '../../../../g4stickerworks/asset/php/user-product/create.php',
                type: 'POST',
                data: { 
                    id: dataIdValue,
                    quantity: quantity,
                },
                success: function (response){
                    var responseVarChar = response.trim();
                    if(response == "created"){
                        resetForm();
                    }
                }
            })
        }
    });

    $(document).on('click', '.plusIcon', function() {
        // Get the ID of the corresponding quantity element
        var quantityId = $(this).attr('quantity-id');
        // Get the current value of the quantity element
        var quantity = parseInt($('.quantityProduct[quantity-count-id="' + quantityId + '"]').text()) || 1; // Set default value to 1 if the text is not a valid number
        // Increase the quantity by 1
        quantity += 1;
        // Update the quantity element with the new value
        $('.quantityProduct[quantity-count-id="' + quantityId + '"]').text(quantity);
    });
    
    $(document).on('click', '.minusIcon', function() {
        // Get the ID of the corresponding quantity element
        var quantityId = $(this).attr('quantity-id');
        // Get the current value of the quantity element
        var quantity = parseInt($('.quantityProduct[quantity-count-id="' + quantityId + '"]').text()) || 1; // Set default value to 1 if the text is not a valid number
        // Decrease the quantity by 1, but make sure it doesn't go below 1
        quantity = Math.max(1, quantity - 1);
        // Update the quantity element with the new value
        $('.quantityProduct[quantity-count-id="' + quantityId + '"]').text(quantity);
    });
    
    // Close Add to Cart
    $("#createSuccessAlertCloseIcon").click(function(){
        $("#createSuccessAlert").hide();
    });

    function resetForm(){
       $("#createSuccessAlert").show();
       setTimeout(function() {
           $("#createSuccessAlert").hide(); // Show the element after 10 seconds
       }, 10000); // 10000 milliseconds = 10 seconds
    }
});