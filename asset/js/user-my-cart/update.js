$(document).ready(function(){
    var totalPrice = localStorage.getItem("totalPrice");
    var idSticker = localStorage.getItem("orderMainIdSticker");
    var idTarpaulin = localStorage.getItem("orderMainIdTarpaulin");
    var idTemporaryPlate = localStorage.getItem("orderMainIdTemporaryPlate");
    var nameSticker = "sticker";
    var nameTarpaulin = "tarpaulin";
    var nameTemporaryPlate = "temporaryplate";

    // Form Payment Receipt
    $('#createPaymentForm').submit(function(event) {
        event.preventDefault(); // prevent default form submission
        
        var deliverMethod = $('#deliverMethod').val().trim();
        var referenceNum = $('#referenceNum').val().trim();
        var imageReceipt = $('#imageReceipt').val().trim();

        if(deliverMethod != "" && validateDeliverMethod() &&
            referenceNum != "" && validateReferenceNum() && 
            imageReceipt != "" && validateUploadImage()
        ){

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

    // Close Payment Form
    $("#payNowBtn").click(function(){
        $("#createBgContainer").show();
        $("#createFormContainer").show();
    });

    // Close Payment Form
    $("#createCloseFormIcon").click(function(){
        $("#createBgContainer").hide();
        $("#createFormContainer").hide();
    });

    // getBtnPayNow();

    // function getBtnPayNow(){
    //     var totalPrice = localStorage.getItem("totalPrice");
    //     if(totalPrice == 0.00 || totalPrice == null){
    //         $("#payNowContainer").hide();
    //     }
    // }
});