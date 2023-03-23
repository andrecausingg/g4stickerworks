$(document).ready(function(){

    // Show Format Two Form
    $("#formatTwoBtn").click(function(){
        $("#bgCreateContainer").show();
        $("#createFormContainerFormatTwo").show();
    });

    $("#closeFormatTwoFormIcon").click(function(){
        $("#bgCreateContainer").hide();
        $("#createFormContainerFormatTwo").hide();
    });
});