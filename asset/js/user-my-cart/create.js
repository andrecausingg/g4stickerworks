$(document).ready(function(){
    var idSticker = localStorage.getItem("orderMainIdSticker");
    var idTarpaulin = localStorage.getItem("orderMainIdTarpaulin");
    var idTemporaryPlate = localStorage.getItem("orderMainIdTemporaryPlate");
    
    console.log(idSticker);
    console.log(idTarpaulin);
    console.log(idTemporaryPlate);

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