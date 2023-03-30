$(document).ready(function(){
    var totalPrice = localStorage.getItem("totalPrice");
    var idSticker = localStorage.getItem("orderMainIdSticker");
    var idTarpaulin = localStorage.getItem("orderMainIdTarpaulin");
    var idTemporaryPlate = localStorage.getItem("orderMainIdTemporaryPlate");
    var nameSticker = "sticker";
    var nameTarpaulin = "tarpaulin";
    var nameTemporaryPlate = "temporaryplate";

    console.log(totalPrice);
    console.log(nameSticker + idSticker);
    console.log(nameTarpaulin + idTarpaulin);
    console.log(nameTemporaryPlate + idTemporaryPlate);


    getBtnPayNow();

    function getBtnPayNow(){
        var totalPrice = localStorage.getItem("totalPrice");
        if(totalPrice == 0.00){
            $("#payNowContainer").hide();
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
});