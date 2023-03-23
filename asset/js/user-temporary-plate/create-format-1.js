$(document).ready(function(){

    // Show Format One Form
    $("#formatOneBtn").click(function(){
        $("#bgCreateContainer").show();
        $("#createFormContainerFormatOne").show();
    });

    $("#closeFormatOneFormIcon").click(function(){
        $("#bgCreateContainer").hide();
        $("#createFormContainerFormatOne").hide();
    });
});