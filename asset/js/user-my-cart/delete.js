$(document).ready(function(){

    $(document).on("click", ".cancelOrder", function() {
        const id = $(this).attr("data-id");

        if(id != ""){
            $.ajax({
                type: "POST",
                url: "../../../../g4stickerworks/asset/php/user-my-cart/delete.php", // replace with the URL of your form processing script
                data: { 
                    id: id
                },
                success: function(response) {
                    const responseVar = response.trim();
                    if(responseVar == "deleted"){
                        resetForm();
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.error("Form submission failed: " + textStatus, errorThrown); // log error message to the console
                    // do something to handle the error (e.g. display an error message to the user)
                }
            });
        }
    });

    // Close Success Delete
    $("#successAlertCloseIconDelete").click(function(){
        $("#successAlertDelete").hide();
    });

    // Reset All Delete
    function resetForm(){
        $("#successAlertDelete").show();
        setTimeout(function() {
            $("#successAlertDelete").hide(); // Show the element after 10 seconds
        }, 10000); // 10000 milliseconds = 10 seconds

        // Display Data
        $("#displayCartList").load("../../../../../g4stickerworks/asset/php/user-my-cart/display/d-data.php");
        $("#displayTotalPrice").load("../../../../../g4stickerworks/asset/php/user-my-cart/display/d-total-price.php");

        // Sticker All Orders Id
        $("#allOrdersIdSticker").load("../../../../../g4stickerworks/asset/php/user-my-cart/display/d-id-sticker.php", function() {
            // callback function to be executed after the content is loaded
            var orderMainIdSticker = $("#orderMainIdSticker").val();
            localStorage.setItem("orderMainIdSticker", orderMainIdSticker);
        });

        // Tarpaulin All Orders Id
        $("#allOrdersIdTarpaulin").load("../../../../../g4stickerworks/asset/php/user-my-cart/display/d-id-tarpaulin.php", function() {
            // callback function to be executed after the content is loaded
            var orderMainIdTarpaulin = $("#orderMainIdTarpaulin").val();
            localStorage.setItem("orderMainIdTarpaulin", orderMainIdTarpaulin);
        });

        // Temporary Plate All Orders Id
        $("#allOrdersIdTemporaryPlate").load("../../../../../g4stickerworks/asset/php/user-my-cart/display/d-id-temporary-plate.php", function() {
            // callback function to be executed after the content is loaded
            var orderMainIdTemporaryPlate = $("#orderMainIdTemporaryPlate").val();
            localStorage.setItem("orderMainIdTemporaryPlate", orderMainIdTemporaryPlate);
        });
    }
});