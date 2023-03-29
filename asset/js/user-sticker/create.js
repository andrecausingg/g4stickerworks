$(document).ready(function() {
    $('#createStickerForm').submit(function(event) {
        event.preventDefault(); // prevent default form submission

        var width = $('#width').val().trim();
        var height = $('#height').val().trim();
        var quantity = $('#quantity').val().trim();
        var image = $('#imageSticker').val().trim();
        var cover = $('#cover').val().trim();


        if(width != "" && validateWidth() &&
            height != "" && validateHeight() &&
            quantity != "" && validateQuantity() &&
            image != "" && validateUploadImage() && 
            cover != "" && validateCover()
        ){
            var formData = new FormData(this); // create form data object
            $.ajax({
            url: '../../../../g4stickerworks/asset/php/user-sticker/create.php',
              type: 'POST',
              data: formData,
              processData: false,
              contentType: false,
              success: function(response) {
                var responseVar = response.trim();
                console.log(responseVar);
                if(responseVar == "created"){
                    resetForm();
                }else if(responseVar == 'imagetoolarge'){
                    hideErrImgTooBig();
                }else if(responseVar == 'errorUploadingimage'){
                    hideErroruploadingimage();
                }else if(responseVar == 'invalidfiletype'){
                    hideInvalidfiletype();
                }
    
              },
              error: function(jqXHR, textStatus, errorThrown) {
                console.log(errorThrown); // handle error response from server
              }
            });
        }else{
            validateWidth();
            validateHeight();
            validateQuantity();
            validateUploadImage();
            validateCover();
        }


        // Function Width
        function validateWidth(){
            var width = $('#width').val().trim();

            if(width == ""){
                $("#emptyErrWidth").show();
                $('#width').css('border-color', 'hsl(4, 95%, 56%)');
                return false;
            }else{
                $("#emptyErrWidth").hide();
                $('#width').css('border-color', 'hsl(122, 39%, 49%)');
                return true;
            }
        }

        // Function Height
        function validateHeight(){
            var height = $('#height').val().trim();

            if(height == ""){
                $("#emptyErrHeight").show();
                $('#height').css('border-color', 'hsl(4, 95%, 56%)');
                return false;

            }else{
                $("#emptyErrHeight").hide();
                $('#height').css('border-color', 'hsl(122, 39%, 49%)');
                return true;
            }
        }

        // Function Quantity
        function validateQuantity(){
            var quantity = $('#quantity').val().trim();

            if(quantity == ""){
                $("#emptyErrQuantity").show();
                $('#quantity').css('border-color', 'hsl(4, 95%, 56%)');
                return false;
            }else{
                $("#emptyErrQuantity").hide();
                $('#quantity').css('border-color', 'hsl(122, 39%, 49%)');
                return true;
            }
        }

        // Function Image
        function validateUploadImage(){
            var image = $('#imageSticker').val().trim();

            if(image == ""){
                $("#emptyErrImage").show();
                $('#imageSticker').css('border-color', 'hsl(4, 95%, 56%)');
                return false;
            }else{
                $("#emptyErrImage").hide();
                $('#imageSticker').css('border-color', 'hsl(122, 39%, 49%)');
                return true;
            }
        }

        // Function Cover
        function validateCover(){
            var cover = $('#cover').val().trim();

            if(cover == ""){
                $("#emptyErrCover").show();
                $('#cover').css('border-color', 'hsl(4, 95%, 56%)');
                return false;
            }else{
                $("#emptyErrCover").hide();
                $('#cover').css('border-color', 'hsl(122, 39%, 49%)');
                return true;
            }
        }
    });

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
        console.log(height);
        console.log(laminateOption);

        // Define price variable before using it in conditions
        var price = 0;
    
        // Calculate the price based on the provided rules
        if (width >= 0 && height <= 2.5) {
            if (quantity < 100) {
                if (laminateOption === "YES") {
                    price = 10.0;
                    console.log(price);
                } else if (laminateOption === "NO") {
                    price = 8.0;
                }
            } else if (quantity >= 100 && quantity <= 299) {
                if (laminateOption === "YES") {
                    price = 5.0;
                } else if (laminateOption === "NO") {
                    price = 4.0;
                }
            } else {
                if (laminateOption === "YES") {
                    price = 3.0;
                } else if (laminateOption === "NO") {
                    price = 2.5;
                }
            }
        } else if (width >= 2.6 && height <= 3) {
            if (quantity < 100) {
                if (laminateOption === "YES") {
                    price = 15.0;
                } else if (laminateOption === "NO") {
                    price = 13.0;
                }
            } else if (quantity >= 100 && quantity <= 299) {
                if (laminateOption === "YES") {
                    price = 6.0;
                } else if (laminateOption === "NO") {
                    price = 5.0;
                }
            } else {
                if (laminateOption === "YES") {
                    price = 3.5;
                } else if (laminateOption === "NO") {
                    price = 3.0;
                }
            }
        } else if (width >= 3.1 && height <= 4) {
            if (quantity < 100) {
                if (laminateOption === "YES") {
                    price = 20.0;
                } else if (laminateOption === "NO") {
                    price = 18.0;
                }
            } else if (quantity >= 100 && quantity <= 299) {
                if (laminateOption === "YES") {
                    price = 7.0;
                } else if (laminateOption === "NO") {
                    price = 6.0;
                }
            } else {
                if (laminateOption === "YES") {
                    price = 4.0;
                } else if (laminateOption === "NO") {
                    price = 3.5;
                }
            }
        }else {
            // If the size is NOt valid, set the price to 0
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
    $('#imageSticker').change(validateUploadImage);
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

    // Function Image
    function validateUploadImage(){
        var image = $('#imageSticker').val().trim();

        if(image == ""){
            $("#emptyErrImage").show();
            $('#imageSticker').css('border-color', 'hsl(4, 95%, 56%)');
        }else{
            $("#emptyErrImage").hide();
            $('#imageSticker').css('border-color', 'hsl(122, 39%, 49%)');
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

    // Upload Image Sticker
    $('#imageSticker').change(function() {
        var file = this.files[0];
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#displayImageSticker').html('<img src="' + e.target.result + '">');
        }
        reader.readAsDataURL(file);
    });

    $("#createSuccessAlertCloseIcon").click(function(){
        $("#createSuccessAlert").hide();
    });
    

    function resetForm(){
        // Clear image display
       $('#displayImageSticker').html('');
       
       $("#totalPrice").html("0.00");
       $("#createSuccessAlert").show();
       setTimeout(function() {
           $("#createSuccessAlert").hide(); // Show the element after 10 seconds
       }, 10000); // 10000 milliseconds = 10 seconds
       $('#width, #height, #quantity, #image, #message, #imageSticker, #cover').val("");
       $('#width, #height, #quantity, #image, #message, #imageSticker, #cover').css('border-color', 'hsl(207, 90%, 54%)');
   }

   function hideErrImgTooBig(){
       $('#errorImagetoolargeAlert').show();
       $('#image').css('border-color', 'hsl(4, 95%, 56%)');
       setTimeout(function(){
           $('#errorImagetoolargeAlert').hide();
       }, 5000);
   }

   function hideErroruploadingimage(){
       $('#errorUploadingimageAlert').show();
       $('#image').css('border-color', 'hsl(4, 95%, 56%)');
       setTimeout(function(){
           $('#errorUploadingimageAlert').hide();
       }, 5000);
   }

   function hideInvalidfiletype(){
       $('#invalidfiletypeAlert').show();
       $('#image').css('border-color', 'hsl(4, 95%, 56%)');
       setTimeout(function(){
           $('#invalidfiletypeAlert').hide();
       }, 5000);
   }

   $(".alertCloseIcon").click(function(){
       $('#errorImagetoolargeAlert').hide();
       $('#errorUploadingimageAlert').hide();
       $('#invalidfiletypeAlert').hide();
   });

    // Allow Number Width Height Quanity
    $("#width, #height, #quantity").on("input", function() {
        var regex = /[^0-9]/g;
        if ($(this).val().match(regex)) {
            $(this).val($(this).val().replace(regex, ''));
        }
    });
});