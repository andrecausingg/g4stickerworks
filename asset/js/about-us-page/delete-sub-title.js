$(document).ready(function(){
    // Delete All
    $(document).on("click", ".deleteIcon", function() {
        const id = $(this).attr("data-id");
        
        if(id != ""){
            $.ajax({
                type: "POST",
                url: "../../../../g4stickerworks/asset/php/about-us-page/delete-sub-title.php", // replace with the URL of your form processing script
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

                        $("#displaySubTitle").load("../../../../../g4stickerworks/asset/php/about-us-page/display/d-data.php");
                        $("#updateDisplayContainerSubTitle").load("../../../../../g4stickerworks/asset/php/about-us-page/display/d-update-sub-title.php");
                        $("#deleteDisplayContainerSubTitle").load("../../../../../g4stickerworks/asset/php/about-us-page/display/d-delete-sub-title.php");
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