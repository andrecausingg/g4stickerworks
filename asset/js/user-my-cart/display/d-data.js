$(document).ready(function(){
    // Display Data
    $("#displayCartList").load("../../../../../g4stickerworks/asset/php/user-my-cart/display/d-data.php");

    // // Total Price
    // $("#displayTotalPrice").load("../../../../../g4stickerworks/asset/php/user-my-cart/display/d-total-price.php", function() {
    //     // callback function to be executed after the content is loaded
    //     var totalPrice = $("#totalPrice").text();
    //     localStorage.setItem("totalPrice", totalPrice);
    // });

    // // Sticker All Orders Id
    // $("#allOrdersIdSticker").load("../../../../../g4stickerworks/asset/php/user-my-cart/display/d-id-sticker.php", function() {
    //     // callback function to be executed after the content is loaded
    //     var orderMainIdSticker = $("#orderMainIdSticker").val();
    //     localStorage.setItem("orderMainIdSticker", orderMainIdSticker);
    // });

    // // Tarpaulin All Orders Id
    // $("#allOrdersIdTarpaulin").load("../../../../../g4stickerworks/asset/php/user-my-cart/display/d-id-tarpaulin.php", function() {
    //     // callback function to be executed after the content is loaded
    //     var orderMainIdTarpaulin = $("#orderMainIdTarpaulin").val();
    //     localStorage.setItem("orderMainIdTarpaulin", orderMainIdTarpaulin);
    // });

    // // Temporary Plate All Orders Id
    // $("#allOrdersIdTemporaryPlate").load("../../../../../g4stickerworks/asset/php/user-my-cart/display/d-id-temporary-plate.php", function() {
    //     // callback function to be executed after the content is loaded
    //     var orderMainIdTemporaryPlate = $("#orderMainIdTemporaryPlate").val();
    //     localStorage.setItem("orderMainIdTemporaryPlate", orderMainIdTemporaryPlate);
    // });

    // Total Price
    $("#displayTotalPrice").load("../../../../../g4stickerworks/asset/php/user-my-cart/display/d-total-price.php");

    // Sticker All Orders Id
    $("#allOrdersIdSticker").load("../../../../../g4stickerworks/asset/php/user-my-cart/display/d-id-sticker.php");

    // Tarpaulin All Orders Id
    $("#allOrdersIdTarpaulin").load("../../../../../g4stickerworks/asset/php/user-my-cart/display/d-id-tarpaulin.php");

    // Temporary Plate All Orders Id
    $("#allOrdersIdTemporaryPlate").load("../../../../../g4stickerworks/asset/php/user-my-cart/display/d-id-temporary-plate.php");
});