$(document).ready(function() {

    $('#width, #height, #quantity').on('keyup propertychange paste', function(){
        if ($("#width").val() === "" || $("#height").val() === "" || $("#quantity").val() === "" || $("#cover").val() === "") {
            $("#totalPrice").html("0.00");
            return;
        }
        calculatePrice();
    });
    
    $('#cover').on('change', function(){
        calculatePrice();
        if ($("#width").val() === "" || $("#height").val() === "" || $("#quantity").val() === "" || $("#cover").val() === "") {
            $("#totalPrice").html("0.00");
            return;
        }
    });

    function calculatePrice(){
        // Get the selected options from the select tag
        var laminateOption = $("#cover").val();
    
        // Get the values from the input fields
        var width = parseFloat($("#width").val());
        var height = parseFloat($("#height").val());
        var quantity = parseInt($("#quantity").val());

        console.log(width);
        console.log(height);
        console.log(quantity);

        // Define price variable before using it in conditions
        var price = 0;
    
        // Calculate the price based on the provided rules
        if (width >= 0 && height <= 2.5) {
            if (quantity < 100) {
                if (laminateOption === "yes") {
                    price = 10.0;
                } else if (laminateOption === "no") {
                    price = 8.0;
                }
            } else if (quantity >= 100 && quantity <= 299) {
                if (laminateOption === "yes") {
                    price = 5.0;
                } else if (laminateOption === "no") {
                    price = 4.0;
                }
            } else {
                if (laminateOption === "yes") {
                    price = 3.0;
                } else if (laminateOption === "no") {
                    price = 2.5;
                }
            }
        } else if (width >= 2.6 && height <= 3) {
            if (quantity < 100) {
                if (laminateOption === "yes") {
                    price = 15.0;
                } else if (laminateOption === "no") {
                    price = 13.0;
                }
            } else if (quantity >= 100 && quantity <= 299) {
                if (laminateOption === "yes") {
                    price = 6.0;
                } else if (laminateOption === "no") {
                    price = 5.0;
                }
            } else {
                if (laminateOption === "yes") {
                    price = 3.5;
                } else if (laminateOption === "no") {
                    price = 3.0;
                }
            }
        } else if (width >= 3.1 && height <= 4) {
            if (quantity < 100) {
                if (laminateOption === "yes") {
                    price = 20.0;
                } else if (laminateOption === "no") {
                    price = 18.0;
                }
            } else if (quantity >= 100 && quantity <= 299) {
                if (laminateOption === "yes") {
                    price = 7.0;
                } else if (laminateOption === "no") {
                    price = 6.0;
                }
            } else {
                if (laminateOption === "yes") {
                    price = 4.0;
                } else if (laminateOption === "no") {
                    price = 3.5;
                }
            }
        }else {
            // If the size is not valid, set the price to 0
            price = 0;
        }

        // Calculate the total price by multiplying the price per  by the quantity
        var totalPrice = price * quantity;

        if(!isNaN(totalPrice)){
            $("#totalPrice").html(totalPrice.toFixed(2));
        }
    }

    // Validation
    $('#width').keyup(validateWidth);
    $('#height').keyup(validateHeight);
    $('#quantity').keyup(validateQuantity);
    $('#cover').change(validateCover);

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
    
    // Function Cover
    function validateCover(){
        var cover = $('#cover').val().trim();

        if(cover == ""){
            $("#emptyErrCover").show();
            $('#cover').css('border-color', 'hsl(4, 95%, 56%)');
        }else{
            $("#emptyErrCover").hide();
            $('#cover').css('border-color', 'hsl(122, 39%, 49%)');
        }
    }

    // Upload Image 
    $('#uploadImageButton').on('click', function() {
        $('<input type="file" accept="image/*">').on('change', function() {
        var file = this.files[0];
        var reader = new FileReader();
        reader.onload = function() {
            var image = $('<img>').attr('src', reader.result);
            $('#displayImage').html(image);
        }
        reader.readAsDataURL(file);
        }).click();
    });
});