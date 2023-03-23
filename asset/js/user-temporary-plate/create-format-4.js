$(document).ready(function(){

    // Show Format Four Form
    $("#formatFourBtn").click(function(){
        $("#bgCreateContainer").show();
        $("#createFormContainerFormatFour").show();
    });

    $("#closeFormatFourFormIcon").click(function(){
        $("#bgCreateContainer").hide();
        $("#createFormContainerFormatFour").hide();
    });
});