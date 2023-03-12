$(document).ready(function(){
    // Listen for form submit event
    $('#createFormTarpauline').submit(function(event) {
        event.preventDefault(); // Prevent default form submission behavior
        // Create form data object
        var formData = new FormData(this);

        // Send AJAX request to server
        $.ajax({
            type: 'POST',
            url: '../../../../g4stickerworks/asset/php/product-page/create-tarpauline.php',
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                console.log(response);
                const responseVar = response.trim();
                if(responseVar == "created"){
                    resetForm();
                }else if(responseVar == 'imagetoolarge'){
                    hideErrImgTooBig();
                }else if(responseVar == 'errorUploadingimage'){
                    hideErroruploadingimage();
                }else if(responseVar == 'invalidfiletype'){
                    hideInvalidfiletype();
                }
                // Handle success response here
            },
            error: function(xhr, status, error) {
                console.error(error); // Log error
                // Handle error response here
            }
        });
    });

    // Show the Selected Form Container
    $("#selectOptionTarpauline").change(function() {
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
                $("#titleCaptionTarpauline").text(captions[i]); // change the title caption to match the selected option
            } else {
                $("#" + containerID).hide(); // hide the other containers
            }
        }
        if (selectedValue == "create") {
            $("#mainFormContainerTarpauline").removeClass("yot-overlay-mid-container-form-tablet-size-up");
            $("#createDisplayContainerTarpauline").show(); // show the create container
            $("#updateDisplayContainerTarpauline").hide(); // hide the update container
            $("#deleteDisplayContainerTarpauline").hide(); // hide the delete container
        } else if (selectedValue == "update") {
            $("#mainFormContainerTarpauline").addClass("yot-overlay-mid-container-form-tablet-size-up");
            $("#createDisplayContainerTarpauline").hide(); // hide the create container
            $("#updateDisplayContainerTarpauline").show(); // show the update container
            $("#deleteDisplayContainerTarpauline").hide(); // hide the delete container
        } else if (selectedValue == "delete") {
            $("#mainFormContainerTarpauline").addClass("yot-overlay-mid-container-form-tablet-size-up");
            $("#createDisplayContainerTarpauline").hide(); // hide the create container
            $("#updateDisplayContainerTarpauline").hide(); // hide the update container
            $("#deleteDisplayContainerTarpauline").show(); // show the delete container
        }
    });

    // Show Create Bg and Form
    $("#tarpaulineFormBtn").click(function(){
        $("#createBgContainerTarpauline").show();
        $("#createFormContainerTarpauline").show();
    });

    // Hide Create Bg and Form
    $("#createCloseFormIconTarpauline").click(function(){
        $("#createBgContainerTarpauline").hide();
        $("#createFormContainerTarpauline").hide();
    });

    // Hide All Alert
    $(".alertCloseIcon").click(function(){
        $('#errorImagetoolargeAlert').hide();
        $('#errorUploadingimageAlert').hide();
        $('#invalidfiletypeAlert').hide();
    });

    // Reset All Create
    function resetForm(){
        $("#createSuccessAlert").show();
        setTimeout(function() {
            $("#createSuccessAlert").hide(); // Show the element after 10 seconds
        }, 10000); // 10000 milliseconds = 10 seconds
        
        // Create select tag
        $('#imageTarpauline').val('');
        
        $("#updateDisplayContainerTarpauline").load("../../../../../g4stickerworks/asset/php/product-page/display/d-update-tarpauline.php");
        $("#deleteDisplayContainerTarpauline").load("../../../../../g4stickerworks/asset/php/product-page/display/d-delete-tarpauline.php");
    }

    function hideErrImgTooBig(){
        $('#errorImagetoolargeAlert').show();
        setTimeout(function(){
            $('#errorImagetoolargeAlert').hide();
        }, 5000);
    }

    function hideErroruploadingimage(){
        $('#errorUploadingimageAlert').show();
        setTimeout(function(){
            $('#errorUploadingimageAlert').hide();
        }, 5000);
    }

    function hideInvalidfiletype(){
        $('#invalidfiletypeAlert').show();
        setTimeout(function(){
            $('#invalidfiletypeAlert').hide();
        }, 5000);
    }
});