$(document).ready(function(){
    var totalPrice = localStorage.getItem("totalPrice");
    var idSticker = localStorage.getItem("orderMainIdSticker");
    var idTarpaulin = localStorage.getItem("orderMainIdTarpaulin");
    var idTemporaryPlate = localStorage.getItem("orderMainIdTemporaryPlate");
    var nameSticker = "sticker";
    var nameTarpaulin = "tarpaulin";
    var nameTemporaryPlate = "temporaryplate";

    $('#createPaymentForm').submit(function(event) {
        event.preventDefault(); // prevent default form submission

        
    });

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