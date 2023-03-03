$(document).ready(function(){
    $("#createFormCaption").submit(function(e) {
        e.preventDefault(); // prevent the default form submission
        
        var caption = $("#caption").val().trim(); // get the value of the caption field
        
        if(caption != ""){
            // send the form data to the server with AJAX
            $.ajax({
                type: "POST", // use the POST method
                url: "../../../../g4stickerworks/asset/php/gallery-page/create.php", // replace with the URL of your form processing script
                data: { caption: caption }, // send the caption field value as data
                success: function(response) {
                    const responseVarChar = response.trim();                
                    if(responseVarChar == "created"){
                        $("#createFormCaption").trigger("reset");
                        $("#createSuccessAlert").show();

                        setTimeout(function() {
                            $("#createSuccessAlert").hide(); // Show the element after 10 seconds
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
    
    // Show the Selected Form Container
    $("#selectOption").change(function() {
        var selectedValue = $(this).val(); // get the value of the selected option
        var containers = ["create", "update", "delete"];
        var captions = ["CREATE", "UPDATE", "DELETE"];
        // put the container IDs into an array in the same order as the options in the select element
        // put the captions into an array in the same order as the options in the select element
        
        // loop through the containers array and hide all containers except the one corresponding to the selected option
        for (var i = 0; i < containers.length; i++) {
            var containerID = containers[i] + "DisplayContainer"; // get the ID of the container
            if (selectedValue == containers[i]) {
                $("#" + containerID).show(); // show the corresponding container
                $("#titleCaption").text(captions[i]); // change the title caption to match the selected option
            } else {
                $("#" + containerID).hide(); // hide the other containers
            }
        }
        if (selectedValue == "create") {
            $("#createDisplayContainer").show(); // show the create container
            $("#updateDisplayContainer").hide(); // hide the update container
            $("#deleteDisplayContainer").hide(); // hide the delete container
        } else if (selectedValue == "update") {
            $("#createDisplayContainer").hide(); // hide the create container
            $("#updateDisplayContainer").show(); // show the update container
            $("#deleteDisplayContainer").hide(); // hide the delete container
        } else if (selectedValue == "delete") {
            $("#createDisplayContainer").hide(); // hide the create container
            $("#updateDisplayContainer").hide(); // hide the update container
            $("#deleteDisplayContainer").show(); // show the delete container
        }
    });

    // Show Create Container
    $("#captionBtn").click(function(){
        $("#createBgContainer").show();
        $("#createFormContainer").show();
    });

    // Hide Create Container
    $("#createCloseFormIcon").click(function(){
        $("#createBgContainer").hide();
        $("#createFormContainer").hide();
    });
});