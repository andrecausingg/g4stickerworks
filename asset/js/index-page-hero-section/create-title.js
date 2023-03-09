$(document).ready(function(){
    $("#createFormTitle").submit(function(e) {
        e.preventDefault(); // prevent the default form mission
        
        var title = $("#title").val().trim(); // get the value of the Title field
        
        if(title != ""){
            // send the form data to the server with AJAX
            $.ajax({
                type: "POST", // use the POST method
                url: "../../../../g4stickerworks/asset/php/services-page/create--Title.php", // replace with the URL of your form processing script
                data: { Title: Title }, // send the Title field value as data
                success: function(response) {
                    console.log(response);
                    const responseVarChar = response.trim();                
                    if(responseVarChar == "created"){
                        $("#createFormTitle").trigger("reset");
                        $("#createSuccessAlert").show();

                        setTimeout(function() {
                            $("#createSuccessAlert").hide(); // Show the element after 10 seconds
                        }, 10000); // 10000 milliseconds = 10 seconds

                        // $("#displayTitle").load("../../../../../g4stickerworks/asset/php/services-page/display/d-data.php");
                        // $("#updateDisplayContainerTitle").load("../../../../../g4stickerworks/asset/php/services-page/display/d-update--Title.php");
                        // $("#deleteDisplayContainerTitle").load("../../../../../g4stickerworks/asset/php/services-page/display/d-delete--Title.php");
                    }
                    // do something with the server response (e.g. show a success message)
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.error("Form mission failed: " + textStatus, errorThrown); // log error message to the console
                    // do something to handle the error (e.g. display an error message to the user)
                }
            });
        }

    });
    
    // Show the Selected Form Container
    $("#selectOptionTitle").change(function() {
        var selectedValue = $(this).val(); // get the value of the selected option
        var containers = ["create", "update", "delete"];
        var captions = ["CREATE", "UPDATE", "DELETE"];
        // put the container IDs into an array in the same order as the options in the select element
        // put the captions into an array in the same order as the options in the select element
        
        // loop through the containers array and hide all containers except the one corresponding to the selected option
        for (var i = 0; i < containers.length; i++) {
            var containerID = containers[i] + "DisplayContainerTitle"; // get the ID of the container
            if (selectedValue == containers[i]) {
                $("#" + containerID).show(); // show the corresponding container
                $("#titleCaption").text(captions[i]); // change the Title caption to match the selected option
            } else {
                $("#" + containerID).hide(); // hide the other containers
            }
        }
        if (selectedValue == "create") {
            $("#createDisplayContainerTitle").show(); // show the create container
            $("#updateDisplayContainerTitle").hide(); // hide the update container
            $("#deleteDisplayContainerTitle").hide(); // hide the delete container
        } else if (selectedValue == "update") {
            $("#createDisplayContainerTitle").hide(); // hide the create container
            $("#updateDisplayContainerTitle").show(); // show the update container
            $("#deleteDisplayContainerTitle").hide(); // hide the delete container
        } else if (selectedValue == "delete") {
            $("#createDisplayContainerTitle").hide(); // hide the create container
            $("#updateDisplayContainerTitle").hide(); // hide the update container
            $("#deleteDisplayContainerTitle").show(); // show the delete container
        }
    });
 
    // Show Create Container Title
    $("#titleBtn").click(function(){
        $("#createBgContainerTitle").show();
        $("#createFormContainerTitle").show();
    });

    // Hide Create Container Title
    $("#createCloseFormIconTitle").click(function(){
        $("#createBgContainerTitle").hide();
        $("#createFormContainerTitle").hide();
    });

    // Hide Create Success Alert
    $("#createSuccessAlertCloseIcon").click(function(){
        $("#createSuccessAlert").hide();
    });
});