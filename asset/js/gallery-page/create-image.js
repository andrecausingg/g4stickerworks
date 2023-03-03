$(document).ready(function(){
    // Form Upload Image
    $("#createFormImage").on("submit", function(e){
        e.preventDefault();
        var formData = new FormData(this);

        $.ajax({
            url: "../../../../g4stickerworks/asset/php/gallery-page/create-image.php",
            type: "POST",
            data: formData,
            success: function(response){
                const responseVar = response.trim();

                if(responseVar == 'created'){
                    resetForm();
                    $("#displayImages").load("../../../../../g4stickerworks/asset/php/gallery-page/display/d-images.php");
                    $("#updateDisplayContainerImage").load("../../../../../g4stickerworks/asset/php/gallery-page/display/d-update-image.php");
                    $("#deleteDisplayContainerImage").load("../../../../../g4stickerworks/asset/php/gallery-page/display/d-delete-image.php");
                    
                }else if(responseVar == 'imagetoolarge'){
                    hideErrImgTooBig();
                }else if(responseVar == 'errorUploadingimage'){
                    hideErroruploadingimage();
                }else if(responseVar == 'invalidfiletype'){
                    hideInvalidfiletype();
                }
            },
            
            error: function(err) {
                console.log(err);
            },
            cache: false,
            contentType: false,
            processData: false
        });
    });

    // Show the Selected Form Container
    $("#selectOptionImage").change(function() {
        var selectedValue = $(this).val(); // get the value of the selected option
        var containers = ["create", "update", "delete"];
        var captions = ["CREATE", "UPDATE", "DELETE"];
        // put the container IDs into an array in the same order as the options in the select element
        // put the captions into an array in the same order as the options in the select element
        
        // loop through the containers array and hide all containers except the one corresponding to the selected option
        for (var i = 0; i < containers.length; i++) {
            var containerID = containers[i] + "DisplayContainerImage"; // get the ID of the container
            if (selectedValue == containers[i]) {
                $("#" + containerID).show(); // show the corresponding container
                $("#titleImage").text(captions[i]); // change the title caption to match the selected option
            } else {
                $("#" + containerID).hide(); // hide the other containers
            }
        }
        if (selectedValue == "create") {
            $("#createDisplayContainerImage").show(); // show the create container
            $("#updateDisplayContainerImage").hide(); // hide the update container
            $("#deleteDisplayContainerImage").hide(); // hide the delete container
        } else if (selectedValue == "update") {
            $("#createDisplayContainerImage").hide(); // hide the create container
            $("#updateDisplayContainerImage").show(); // show the update container
            $("#deleteDisplayContainerImage").hide(); // hide the delete container
        } else if (selectedValue == "delete") {
            $("#createDisplayContainerImage").hide(); // hide the create container
            $("#updateDisplayContainerImage").hide(); // hide the update container
            $("#deleteDisplayContainerImage").show(); // show the delete container
        }
    });

    // Hide Create Alert
    $("#successAlertCloseIconInsert").click(function(){
        $("#createSuccessAlert").hide();
    });

    // Hide Delete Alert
    $("#deleteSuccessAlertCloseIcon").click(function(){
        $("#deleteSuccessAlert").hide();
    });

    // Hide Update Alert
    $("#updateSuccessAlertCloseIcon").click(function(){
        $("#updateSuccessAlert").hide();
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
    $("#imagesBtn").click(function(){
        $("#createBgContainerImage").show();
        $("#createFormContainerImage").show();
    });

    $("#createCloseFormIconImage").click(function(){
        $("#createBgContainerImage").hide();
        $("#createFormContainerImage").hide();
    });

    // Hide Create Container
    $("#createCloseFormIcon").click(function(){
        $("#createBgContainer").hide();
        $("#createFormContainer").hide();
    });

    // Hide Alert Image Errors
    $("#alertCloseIcon").click(function(){
        $("#errorUploadingimageAlert").hide();
        $("#invalidfiletypeAlert").hide();
        $("#errorUploadingimageAlert").hide();
        $("#errorImagetoolargeAlert").hide();
    });

    // Functions
    function resetForm(){
        $("#createSuccessAlert").show();
        setTimeout(function() {
            $("#createSuccessAlert").hide(); // Show the element after 10 seconds
        }, 10000); // 10000 milliseconds = 10 seconds

        $('#imageGallery').val('');
    }

    function hideErrImgTooBig(){
        $('.errorImagetoolargeAlert').show();
        setTimeout(function(){
            $('.errorImagetoolargeAlert').hide();
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