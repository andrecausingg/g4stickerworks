$(document).ready(function(){
    // Show Format Three Form
    $("#formatThreeBtn").click(function(){
        $("#bgCreateContainer").show();
        $("#createFormContainerFormatThree").show();
    });

    $("#closeFormatThreeFormIcon").click(function(){
        $("#bgCreateContainer").hide();
        $("#createFormContainerFormatThree").hide();
    });
});