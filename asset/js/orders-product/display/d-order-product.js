$(document).ready(function(){
    $("#displayProduct").load("../../../../../g4stickerworks/asset/php/orders-product/display/d-data.php");

    $(".displayNotPaid").load("../../../../../g4stickerworks/asset/php/orders-product/display/d-not-paid.php");
    $(".displayPending").load("../../../../../g4stickerworks/asset/php/orders-product/display/d-pending.php");
    $(".displayVerified").load("../../../../../g4stickerworks/asset/php/orders-product/display/d-verified.php");
    $(".displayReject").load("../../../../../g4stickerworks/asset/php/orders-product/display/d-reject.php");
    $(".displayReady").load("../../../../../g4stickerworks/asset/php/orders-product/display/d-ready.php");
    $(".displayDone").load("../../../../../g4stickerworks/asset/php/orders-product/display/d-done.php");
});