$(document).ready(function(){
    // Delete All
    $(document).on("click", ".deleteIconImage", function() {
        const id = $(this).attr("data-id");

        if(id != ""){
            $.ajax({
                type: "POST",
                url: "../../../../g4stickerworks/asset/php/gallery-page/delete-image.php", // replace with the URL of your form processing script
                data: { 
                    id: id
                },
                success: function(response) {
                    const responseVar = response.trim();
                    if(responseVar == "deleted"){
                        $("#deleteSuccessAlert").show();
                        setTimeout(function() {
                            $("#deleteSuccessAlert").hide(); // Show the element after 10 seconds
                        }, 10000); // 10000 milliseconds = 10 seconds

                        $("#displayImages").load("../../../../../g4stickerworks/asset/php/gallery-page/display/d-images.php");
                        $("#updateDisplayContainerImage").load("../../../../../g4stickerworks/asset/php/gallery-page/display/d-update-image.php");
                        $("#deleteDisplayContainerImage").load("../../../../../g4stickerworks/asset/php/gallery-page/display/d-delete-image.php");
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
    
});