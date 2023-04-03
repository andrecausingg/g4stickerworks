$(document).ready(function(){
    var dataId; // declare the variable outside of the click function

    // Show Payment Form
    $(document).on("click", ".payNowBtn", function(){
        dataId = $(this).data("id"); // get the data-id attribute value of the clicked button

        $("#createBgContainer").show();
        $("#createFormContainer").show();
    });

    // Close Payment Form
    $(document).on("click", "#createCloseFormIcon", function(){
        $("#createBgContainer").hide();
        $("#createFormContainer").hide();
    });

    // Form Payment Receipt
    $('#createPaymentForm').submit(function(event) {
        event.preventDefault(); // prevent default form submission

        var deliverMethod = $('#deliverMethod').val().trim();
        var referenceNum = $('#referenceNum').val().trim();
        var imageReceipt = $('#imageReceipt').val().trim();

        // create a new FormData object
        var formData = new FormData();
        formData.append('id', dataId);
        formData.append('deliverMethod', deliverMethod);
        formData.append('referenceNum', referenceNum);
        formData.append('imageReceipt', $('#imageReceipt')[0].files[0]);

        if( dataId != "" &&
            deliverMethod != "" && validateDeliverMethod() &&
            referenceNum != "" && validateReferenceNum() && 
            imageReceipt != "" && validateUploadImage()
        ){
            $.ajax({
                url: '../../../../g4stickerworks/asset/php/user-my-cart/payment.php',
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
            validateDeliverMethod();
            validateReferenceNum();
            validateUploadImage();
        }


        // Function Deliver Method
        function validateDeliverMethod(){
            var deliverMethod = $('#deliverMethod').val().trim();

            if(deliverMethod == ""){
                $("#emptyErrDeliverMethod").show();
                $('#deliverMethod').css('border-color', 'hsl(4, 95%, 56%)');
                return false;
            }else{
                $("#emptyErrDeliverMethod").hide();
                $('#deliverMethod').css('border-color', 'hsl(122, 39%, 49%)');
                return true;
            }
        }

        // Function Reference Num
        function validateReferenceNum(){
            var referenceNum = $('#referenceNum').val().trim();

            if(referenceNum == ""){
                $("#emptyErrReferenceNum").show();
                $('#referenceNum').css('border-color', 'hsl(4, 95%, 56%)');
                return false;
            }else{
                $("#emptyErrReferenceNum").hide();
                $('#referenceNum').css('border-color', 'hsl(122, 39%, 49%)');
                return true;
            }
        }

        // Function Image
        function validateUploadImage(){
            var imageReceipt = $('#imageReceipt').val().trim();

            if(imageReceipt == ""){
                $("#emptyErrReceipt").show();
                $('#imageReceipt').css('border-color', 'hsl(4, 95%, 56%)');
                return false;
            }else{
                $("#emptyErrReceipt").hide();
                $('#imageReceipt').css('border-color', 'hsl(122, 39%, 49%)');
                return true;
            }
        }
    });

    $('#deliverMethod').change(validateDeliverMethod);
    $('#referenceNum').keyup(validateReferenceNum);
    $('#imageReceipt').change(validateUploadImage);

    // Function Deliver Method
    function validateDeliverMethod(){
        var deliverMethod = $('#deliverMethod').val().trim();

        if(deliverMethod == ""){
            $("#emptyErrDeliverMethod").show();
            $('#deliverMethod').css('border-color', 'hsl(4, 95%, 56%)');
        }else{
            $("#emptyErrDeliverMethod").hide();
            $('#deliverMethod').css('border-color', 'hsl(122, 39%, 49%)');
        }
    }

    // Function Reference Num
    function validateReferenceNum(){
        var referenceNum = $('#referenceNum').val().trim();

        if(referenceNum == ""){
            $("#emptyErrReferenceNum").show();
            $('#referenceNum').css('border-color', 'hsl(4, 95%, 56%)');
        }else{
            $("#emptyErrReferenceNum").hide();
            $('#referenceNum').css('border-color', 'hsl(122, 39%, 49%)');
        }
    }

    // Function Image
    function validateUploadImage(){
        var imageReceipt = $('#imageReceipt').val().trim();

        if(imageReceipt == ""){
            $("#emptyErrReceipt").show();
            $('#imageReceipt').css('border-color', 'hsl(4, 95%, 56%)');
        }else{
            $("#emptyErrReceipt").hide();
            $('#imageReceipt').css('border-color', 'hsl(122, 39%, 49%)');
        }
    }

    // Hide Success Paid Message
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
       $('#deliverMethod, #referenceNum, #imageReceipt').val("");
       $('#deliverMethod, #referenceNum, #imageReceipt').css('border-color', 'hsl(207, 90%, 54%)');

        // Display Data
        $("#displayCartList").load("../../../../../g4stickerworks/asset/php/user-my-cart/display/d-data.php");

        // Total Price
        $("#displayTotalPrice").load("../../../../../g4stickerworks/asset/php/user-my-cart/display/d-total-price.php", function() {
            // callback function to be executed after the content is loaded
            var totalPrice = $("#totalPrice").text();
            localStorage.setItem("totalPrice", totalPrice);
        });
   }
});