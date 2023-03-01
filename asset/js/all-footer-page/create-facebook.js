$(document).ready(function(){
    // Create Form Facebook
    $('#createFormFacebook').submit(function(e){
        e.preventDefault();

        const facebookUrl = $('input[name="facebookUrl"]').val().trim();

        if(facebookUrl != ""){
            // validate url
            if(isValidUrl(facebookUrl)){
                $.ajax({
                    type: "POST",
                    url: "../../../../g4stickerworks/asset/php/all-footer-page/create-facebook.php", // replace with the URL of your form processing script
                    data: { 
                        facebookUrl: facebookUrl
                    },
                    success: function(response) {
                        const responseVar = response.trim();
                        if(responseVar == "created"){
                            $("#createFormFacebook").trigger("reset");
                            $("#successAlertInsert").show();
                            setTimeout(function() {
                                $("#successAlertInsert").hide(); // Show the element after 10 seconds
                            }, 10000); // 10000 milliseconds = 10 seconds
                            $("#facebookUrlContainer").load("../../../../../g4stickerworks/asset/php/all-footer-page/display/d-facebook.php")
                            $('#facebookUrl').css('border-color', 'hsl(207, 90%, 54%)');

                            deleteSelect();
                            updateSelect();
                        }
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.error("Form submission failed: " + textStatus, errorThrown); // log error message to the console
                        // do something to handle the error (e.g. display an error message to the user)
                    }
                });
            } else {
                $("#invalidUrlFacebookErr").show();
                $('#facebookUrl').css('border-color', 'hsl(4, 95%, 56%)');
            }
        } else {
            $("#invalidUrlFacebookErr").show();
            $('#facebookUrl').css('border-color', 'hsl(4, 95%, 56%)');
        }
    });

    // Show the Selected Form Container
    $("#createSelect").change(function() {
        var selectedValue = $(this).val(); // get the value of the selected option
        var containers = ["createContainerFacebook", "createContainerTiktok", "createContainerInstagram", "createContainerEmail", "createContainerPhone", "createContainerAddress"];
        // put the container IDs into an array in the same order as the options in the select element
        
        for (var i = 0; i < containers.length; i++) {
            if (selectedValue === containers[i].replace("createContainer", "").toLowerCase()) {
            $("#" + containers[i]).show(); // display the corresponding container
            } else {
            $("#" + containers[i]).hide(); // hide all other containers
            }
        }
    });
      
    // Show Create Form
    $("#createBtn").click(function(){
        $("#createBgContainer").show();
        $("#createFormContainer").show();
    });

    // Hide Create Form
    $("#createCloseFormIcon").click(function(){
        $("#createBgContainer").hide();
        $("#createFormContainer").hide();
    });

    // Close Success Insert
    $("#successAlertCloseIconInsert").click(function(){
        $("#successAlertInsert").hide();
    });

    // Validation
    $('#facebookUrl').on('input', function() {
        const facebookUrl = $(this).val().trim();
        if(isValidUrl(facebookUrl)){
            $("#invalidUrlFacebookErr").hide();
            $(this).css('border-color', 'hsl(122, 39%, 49%)');
        } else {
            $("#invalidUrlFacebookErr").show();
            $(this).css('border-color', 'hsl(4, 95%, 56%)');
        }
    });

    function isValidUrl(url) {
        // Regular expression for validating URLs
        const urlRegex = /^(?:\w+:)?\/\/([^\s\.]+\.\S{2}|localhost[\:?\d]*)\S*$/;
        return urlRegex.test(url);
    }

    function updateSelect(){
        const selectedValue = $("#updateSelect").val();
        var dataUrl = ""; // variable to store the data URL
        
        switch(selectedValue) {
            case "facebook":
                dataUrl = "../../../../../g4stickerworks/asset/php/all-footer-page/display/d-update-facebook.php";
                break;
            case "tiktok":
                dataUrl = "../../../../../g4stickerworks/asset/php/all-footer-page/display/d-update-tiktok.php";
                break;
            case "instagram":
                dataUrl = "../../../../../g4stickerworks/asset/php/all-footer-page/display/d-update-instagram.php";
                break;
            case "email":
                dataUrl = "../../../../../g4stickerworks/asset/php/all-footer-page/display/d-update-email.php";
                break;
            case "phone":
                dataUrl = "../../../../../g4stickerworks/asset/php/all-footer-page/display/d-update-phone.php";
                break;
            case "address":
                dataUrl = "../../../../../g4stickerworks/asset/php/all-footer-page/display/d-update-address.php";
                break;
            default:
                $("#updateDisplayDataAllTable").empty();
                break;
        }
        
        if(dataUrl !== "") {
            $("#updateDisplayDataAllTable").load(dataUrl); // load the data for the selected option
        }
    }

    function deleteSelect(){
        const selectedValue = $("#deleteSelect").val().trim(); // get the value of the selected option
        let dataUrl = ""; // variable to store the data URL
        
        switch(selectedValue) {
            case "facebook":
                dataUrl = "../../../../../g4stickerworks/asset/php/all-footer-page/display/d-delete-facebook.php";
                break;
            case "tiktok":
                dataUrl = "../../../../../g4stickerworks/asset/php/all-footer-page/display/d-delete-tiktok.php";
                break;
            case "instagram":
                dataUrl = "../../../../../g4stickerworks/asset/php/all-footer-page/display/d-delete-instagram.php";
                break;
            case "email":
                dataUrl = "../../../../../g4stickerworks/asset/php/all-footer-page/display/d-delete-email.php";
                break;
            case "phone":
                dataUrl = "../../../../../g4stickerworks/asset/php/all-footer-page/display/d-delete-phone.php";
                break;
            case "address":
                dataUrl = "../../../../../g4stickerworks/asset/php/all-footer-page/display/d-delete-address.php";
                break;
            default:
                dataUrl = "";
                $("#deleteDisplayDataAllTable").empty();
                break;
        }
        
        if(dataUrl !== "") {
            $("#deleteDisplayDataAllTable").load(dataUrl); // load the data for the selected option
        }
    }
});