$(document).ready(function(){
    $("#createFormContent").submit(function(e) {
        e.preventDefault(); // prevent the default form submission
        
        var content = $("#content").val().trim(); // get the value of the Content field
        
        if(content != ""){
            // send the form data to the server with AJAX
            $.ajax({
                type: "POST", // use the POST method
                url: "../../../../g4stickerworks/asset/php/services-page/create-content.php", // replace with the URL of your form processing script
                data: { content: content }, // send the Content field value as data
                success: function(response) {
                    console.log(response);
                    const responseVarChar = response.trim();                
                    if(responseVarChar == "created"){
                        $("#createFormContent").trigger("reset");
                        $("#createSuccessAlert").show();

                        setTimeout(function() {
                            $("#createSuccessAlert").hide(); // Show the element after 10 seconds
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
    
    // Show the Selected Form Container
    $("#selectOptionContent").change(function() {
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
            $("#createDisplayContainerContent").show(); // show the create container
            $("#updateDisplayContainerContent").hide(); // hide the update container
            $("#deleteDisplayContainerContent").hide(); // hide the delete container
        } else if (selectedValue == "update") {
            $("#createDisplayContainerContent").hide(); // hide the create container
            $("#updateDisplayContainerContent").show(); // show the update container
            $("#deleteDisplayContainerContent").hide(); // hide the delete container
        } else if (selectedValue == "delete") {
            $("#createDisplayContainerContent").hide(); // hide the create container
            $("#updateDisplayContainerContent").hide(); // hide the update container
            $("#deleteDisplayContainerContent").show(); // show the delete container
        }
    });
 
    // Show Create Container Sub Title
    $("#contentBtn").click(function(){
        $("#createBgContainerContent").show();
        $("#createFormContainerContent").show();
    });

    // Hide Create Container Sub Title
    $("#createCloseFormIconContent").click(function(){
        $("#createBgContainerContent").hide();
        $("#createFormContainerContent").hide();
    });

    // Hide Create Success Alert
    $("#createSuccessAlertCloseIcon").click(function(){
        $("#createSuccessAlert").hide();
    });
});