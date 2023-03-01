$(document).ready(function(){
    // Update
    $(document).on("click", ".updateIcon", function() {
        const id = $(this).attr("data-id").trim();
        const caption = $('textarea[data-id="' + id + '"]').val();

        if(id != ""){
            // send the form data to the server with AJAX
            $.ajax({
                type: "POST", // use the POST method
                url: "../../../../g4stickerworks/asset/php/gallery-page/update.php", // replace with the URL of your form processing script
                data: { caption: caption }, // send the caption field value as data
                success: function(response) {
                    const responseVarChar = response.trim();                
                    if(responseVarChar == "updated"){
                        $("#createFormCaption").trigger("reset");
                        $("#successAlertInsert").show();

                        setTimeout(function() {
                            $("#successAlertInsert").hide(); // Show the element after 10 seconds
                        }, 10000); // 10000 milliseconds = 10 seconds

                        $("#displayCaption").load("../../../../../g4stickerworks/asset/php/gallery-page/display/d-caption.php");
                        $("#updateDisplayContainer").load("../../../../../g4stickerworks/asset/php/gallery-page/display/d-update-caption.php");
                        $("#deleteDisplayContainer").load("../../../../../g4stickerworks/asset/php/gallery-page/display/d-delete-caption.php");
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
    
});