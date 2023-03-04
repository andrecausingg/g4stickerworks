$(document).ready(function(){
    // Update
    $(document).on("click", ".updateIconContent", function() {
        const id = $(this).attr("data-id").trim();
        const content = $('textarea[data-id="' + id + '"]').val();

        if(id != "" && content != ""){
            // send the form data to the server with AJAX
            $.ajax({
                type: "POST", // use the POST method
                url: "../../../../g4stickerworks/asset/php/services-page/update-content.php", // replace with the URL of your form processing script
                data: { 
                    id:id,
                    content: content,
                }, // send the subTitle field value as data
                success: function(response) {
                    console.log(response);
                    const responseVarChar = response.trim();                
                    if(responseVarChar == "updated"){
                        $("#updateSuccessAlert").show();
                        $("#deleteSuccessAlert").hide();
                        $("#createSuccessAlert").hide();

                        setTimeout(function() {
                            $("#updateSuccessAlert").hide(); // Show the element after 10 seconds
                        }, 10000); // 10000 milliseconds = 10 seconds

                        $("#displayContent").load("../../../../../g4stickerworks/asset/php/services-page/display/d-data-content.php");
                        $("#updateDisplayContainerContent").load("../../../../../g4stickerworks/asset/php/services-page/display/d-update-content.php");
                        $("#deleteDisplayContainerContent").load("../../../../../g4stickerworks/asset/php/services-page/display/d-delete-content.php");
                    }
                    // do something with the server response (e.g. show a success message)
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.error("Form submission failed: " + textStatus, errorThrown); // log error message to the console
                    // do something to handle the error (e.g. display an error message to the user)
                }
            });
        }
    });
    
    $(document).on("click", "#updateSuccessAlertCloseIcon", function(){
        $("#updateSuccessAlert").hide();
    });
});