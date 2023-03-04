$(document).ready(function(){
    $("#createFormSubTitle").submit(function(e) {
        e.preventDefault(); // prevent the default form submission
        
        var subTitle = $("#subTitle").val().trim(); // get the value of the subTitle field
        
        if(subTitle != ""){
            // send the form data to the server with AJAX
            $.ajax({
                type: "POST", // use the POST method
                url: "../../../../g4stickerworks/asset/php/contact-us-page/create-sub-title.php", // replace with the URL of your form processing script
                data: { subTitle: subTitle }, // send the subTitle field value as data
                success: function(response) {
                    console.log(response);
                    const responseVarChar = response.trim();                
                    if(responseVarChar == "created"){
                        $("#createFormSubTitle").trigger("reset");
                        $("#createSuccessAlert").show();

                        setTimeout(function() {
                            $("#createSuccessAlert").hide(); // Show the element after 10 seconds
                        }, 10000); // 10000 milliseconds = 10 seconds

                        $("#displaySubTitle").load("../../../../../g4stickerworks/asset/php/contact-us-page/display/d-data.php");
                        $("#updateDisplayContainerSubTitle").load("../../../../../g4stickerworks/asset/php/contact-us-page/display/d-update-sub-title.php");
                        $("#deleteDisplayContainerSubTitle").load("../../../../../g4stickerworks/asset/php/contact-us-page/display/d-delete-sub-title.php");
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
    $("#selectOptionSubTitle").change(function() {
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
            $("#createDisplayContainerSubTitle").show(); // show the create container
            $("#updateDisplayContainerSubTitle").hide(); // hide the update container
            $("#deleteDisplayContainerSubTitle").hide(); // hide the delete container
        } else if (selectedValue == "update") {
            $("#createDisplayContainerSubTitle").hide(); // hide the create container
            $("#updateDisplayContainerSubTitle").show(); // show the update container
            $("#deleteDisplayContainerSubTitle").hide(); // hide the delete container
        } else if (selectedValue == "delete") {
            $("#createDisplayContainerSubTitle").hide(); // hide the create container
            $("#updateDisplayContainerSubTitle").hide(); // hide the update container
            $("#deleteDisplayContainerSubTitle").show(); // show the delete container
        }
    });
 
    // Show Create Container Sub Title
    $("#subTitleBtn").click(function(){
        $("#createBgContainerSubTitle").show();
        $("#createFormContainerSubtitle").show();
    });

    // Hide Create Container Sub Title
    $("#createCloseFormIconSubtitle").click(function(){
        $("#createBgContainerSubTitle").hide();
        $("#createFormContainerSubtitle").hide();
    });

    // Hide Create Success Alert
    $("#createSuccessAlertCloseIcon").click(function(){
        $("#createSuccessAlert").hide();
    });
});