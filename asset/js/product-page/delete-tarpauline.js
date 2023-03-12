$(document).ready(function(){
    // Delete All
    $(document).on("click", ".deleteIconTarpauline", function() {
        const id = $(this).attr("data-id");
        
        if(id != ""){
            $.ajax({
                type: "POST",
                url: "../../../../g4stickerworks/asset/php/product-page/delete-tarpauline.php", // replace with the URL of your form processing script
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
    $("#deleteSuccessAlertCloseIcon").click(function(){
        $("#deleteSuccessAlert").hide();
    });

    // Reset All Delete
    function resetForm(){
        $("#deleteSuccessAlert").show();
        setTimeout(function() {
            $("#deleteSuccessAlert").hide(); // Show the element after 10 seconds
        }, 10000); // 10000 milliseconds = 10 seconds

        $("#updateDisplayContainerTarpauline").load("../../../../../g4stickerworks/asset/php/product-page/display/d-update-tarpauline.php");
        $("#deleteDisplayContainerTarpauline").load("../../../../../g4stickerworks/asset/php/product-page/display/d-delete-tarpauline.php");
    }
});