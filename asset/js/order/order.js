$(document).ready(function(){
    // Open Hamburger Stats Order
    $("#statsIconOrder").click(function(){
        $("#statsIconOrder").hide();
        $("#hamburgerCloseOrder").show();
        $("#overlayMobileOrderStatsBg").show();
        $("#overlayMobileOrder").show();
        $('body').css('overflowY', 'hidden'); 
    });
    // Close Hamburger  Stats Order
    $("#hamburgerCloseOrder").click(function(){
        $("#statsIconOrder").show();
        $("#hamburgerCloseOrder").hide();
        $("#overlayMobileOrderStatsBg").hide();
        $("#overlayMobileOrder").hide();
        $('body').css('overflowY', 'auto'); 
    });
    
});