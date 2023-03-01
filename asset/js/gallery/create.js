$(document).ready(function(){
    $("#createFormCaption").submit(function(e) {
        e.preventDefault(); // prevent the default form submission
        
        var caption = $("#caption").val().trim(); // get the value of the caption field
        
        // send the form data to the server with AJAX
        $.ajax({
            type: "POST", // use the POST method
            url: "your_processing_script.php", // replace with the URL of your form processing script
            data: { caption: caption }, // send the caption field value as data
            success: function(response) {
                console.log(response); // log the server response to the console
                
                // do something with the server response (e.g. show a success message)
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.error("Form submission failed: " + textStatus, errorThrown); // log error message to the console
                // do something to handle the error (e.g. display an error message to the user)
            }
        });
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