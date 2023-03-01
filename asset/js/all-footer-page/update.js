$(document).ready(function(){
    // update All
    $(document).on("click", ".updateIcon", function() {
        const id = $(this).attr("data-id").trim();
        const role = $(this).attr("role").trim();
        const updateFacebookUrl = $("#updateFacebookUrl").val()?.trim() || '';
        const updateTiktokUrl = $("#updateTiktokUrl").val()?.trim() || '';
        const updateInstagramUrl = $("#updateInstagramUrl").val()?.trim() || '';
        const updateEmail = $("#updateEmail").val()?.trim() || '';
        const updatePhone = $("#updatePhone").val()?.trim() || '';
        const updateAddress = $("#updateAddress").val()?.trim() || '';

        if(role == "facebook" && id != ""){
            if(updateFacebookUrl != "" && isValidUrl(updateFacebookUrl)){
                $.ajax({
                    type: "POST",
                    url: "../../../../g4stickerworks/asset/php/all-footer-page/update.php", // replace with the URL of your form processing script
                    data: { 
                        id: id,
                        role: role,
                        updateFacebookUrl: updateFacebookUrl
                    },
                    success: function(response){
                        console.log(response);
                        const responseVar = response.trim();
                        if(responseVar == "updated"){
                            $("#updateSuccessAlert").show();

                            setTimeout(function() {
                                $("#updateSuccessAlert").hide(); // Show the element after 10 seconds
                            }, 10000); // 10000 milliseconds = 10 seconds

                            $("#displayDataAllTableupdate").load("../../../../../g4stickerworks/asset/php/all-footer-page/display/d-update-facebook.php");
                            $("#facebookUrlContainer").load("../../../../../g4stickerworks/asset/php/all-footer-page/display/d-facebook.php");
                        }
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.error("Form submission failed: " + textStatus, errorThrown); // log error message to the console
                        // do something to handle the error (e.g. display an error message to the user)
                    }
                });
            }else{
                if(!isValidUrl(updateFacebookUrl)){
                    $("#invalidUrlFacebookErrUpdate").show();
                    $(this).css('border-color', 'hsl(4, 95%, 56%)');
                }
            }
        }

        if(role == "tiktok" && id != ""){
            if(updateTiktokUrl != "" && isValidUrl(updateTiktokUrl)){
                $.ajax({
                    type: "POST",
                    url: "../../../../g4stickerworks/asset/php/all-footer-page/update.php", // replace with the URL of your form processing script
                    data: { 
                        id: id,
                        role: role,
                        updateTiktokUrl: updateTiktokUrl
                    },
                    success: function(response){
                        console.log(response);
                        const responseVar = response.trim();
                        if(responseVar == "updated"){
                            $("#updateSuccessAlert").show();
                            $("#invalidUrlTiktokErrUpdate").css('border-color', 'hsl(207, 90%, 54%)');
        
                            setTimeout(function() {
                                $("#updateSuccessAlert").hide(); // Show the element after 10 seconds
                            }, 10000); // 10000 milliseconds = 10 seconds
        
                            $("#displayDataAllTableupdate").load("../../../../../g4stickerworks/asset/php/all-footer-page/display/d-update-tiktok.php");
                            $("#tiktokUrlContainer").load("../../../../../g4stickerworks/asset/php/all-footer-page/display/d-tiktok.php");
                        }
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.error("Form submission failed: " + textStatus, errorThrown); // log error message to the console
                        // do something to handle the error (e.g. display an error message to the user)
                    }
                });
            }else{
                if(!isValidUrl(updateTiktokUrl)){
                    $("#invalidUrlFacebookErrUpdate").show();
                    $(this).css('border-color', 'hsl(4, 95%, 56%)');
                }
            }
        }

        if(role == "instagram" && id != ""){
            if(updateInstagramUrl != "" && isValidUrl(updateInstagramUrl)){
                $.ajax({
                    type: "POST",
                    url: "../../../../g4stickerworks/asset/php/all-footer-page/update.php", // replace with the URL of your form processing script
                    data: { 
                        id: id,
                        role: role,
                        updateInstagramUrl: updateInstagramUrl
                    },
                    success: function(response){
                        console.log(response);
                        const responseVar = response.trim();
                        if(responseVar == "updated"){
                            $("#updateSuccessAlert").show();
                            $("#updateInstagramUrl").css('border-color', 'hsl(207, 90%, 54%)');
        
                            setTimeout(function() {
                                $("#updateSuccessAlert").hide(); // Show the element after 10 seconds
                            }, 10000); // 10000 milliseconds = 10 seconds
        
                            $("#displayDataAllTableupdate").load("../../../../../g4stickerworks/asset/php/all-footer-page/display/d-update-instagram.php");
                            $("#instagramUrlContainer").load("../../../../../g4stickerworks/asset/php/all-footer-page/display/d-instagram.php");
                        }
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.error("Form submission failed: " + textStatus, errorThrown); // log error message to the console
                        // do something to handle the error (e.g. display an error message to the user)
                    }
                });
            }else{
                if(!isValidUrl(updateInstagramUrl)){
                    $("#invalidUrlInstagramErrUpdate").show();
                    $("#updateInstagramUrl").css('border-color', 'hsl(4, 95%, 56%)');
                }
            }
        }
        
        if(role == "email" && id != ""){
            if(updateEmail != "" && isValid(updateEmail)){
                $.ajax({
                    type: "POST",
                    url: "../../../../g4stickerworks/asset/php/all-footer-page/update.php", // replace with the  of your form processing script
                    data: { 
                        id: id,
                        role: role,
                        updateEmail: updateEmail
                    },
                    success: function(response){
                        console.log(response);
                        const responseVar = response.trim();
                        if(responseVar == "updated"){
                            $("#updateSuccessAlert").show();
                            $("#updateEmail").css('border-color', 'hsl(207, 90%, 54%)');
        
                            setTimeout(function() {
                                $("#updateSuccessAlert").hide(); // Show the element after 10 seconds
                            }, 10000); // 10000 milliseconds = 10 seconds
        
                            $("#displayDataAllTableupdate").load("../../../../../g4stickerworks/asset/php/all-footer-page/display/d-update-email.php");
                            $("#tiktokContainer").load("../../../../../g4stickerworks/asset/php/all-footer-page/display/d-email.php");
                        }
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.error("Form submission failed: " + textStatus, errorThrown); // log error message to the console
                        // do something to handle the error (e.g. display an error message to the user)
                    }
                });
            }else{
                if(!isValid(updateEmail)){
                    $("#invalidFacebookErrUpdate").show();
                    $(this).css('border-color', 'hsl(4, 95%, 56%)');
                }
            }
        }

        if(role == "phone" && id != ""){
            if(updatePhone != "" && isValid(updatePhone)){
                $.ajax({
                    type: "POST",
                    url: "../../../../g4stickerworks/asset/php/all-footer-page/update.php", // replace with the  of your form processing script
                    data: { 
                        id: id,
                        role: role,
                        updatePhone: updatePhone
                    },
                    success: function(response){
                        console.log(response);
                        const responseVar = response.trim();
                        if(responseVar == "updated"){
                            $("#updateSuccessAlert").show();
                            $("#updatePhone").css('border-color', 'hsl(207, 90%, 54%)');
        
                            setTimeout(function() {
                                $("#updateSuccessAlert").hide(); // Show the element after 10 seconds
                            }, 10000); // 10000 milliseconds = 10 seconds
        
                            $("#displayDataAllTableupdate").load("../../../../../g4stickerworks/asset/php/all-footer-page/display/d-update-phone.php");
                            $("#tiktokContainer").load("../../../../../g4stickerworks/asset/php/all-footer-page/display/d-phone.php");
                        }
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.error("Form submission failed: " + textStatus, errorThrown); // log error message to the console
                        // do something to handle the error (e.g. display an error message to the user)
                    }
                });
            }else{
                if(!isValid(updatePhone)){
                    $("#invalidFacebookErrUpdate").show();
                    $(this).css('border-color', 'hsl(4, 95%, 56%)');
                }
            }
        }
    });

    // Show the Selected Form Container
    $("#updateSelect").change(function() {
        const selectedValue = $(this).val().trim(); // get the value of the selected option
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
    });

    // Show update Container
    $("#updateBtn").click(function(){
        $("#updateBgContainer").show();
        $("#updateFormContainer").show();
    });

    // Hide update Container
    $("#updateCloseFormIcon").click(function(){
        $("#updateBgContainer").hide();
        $("#updateFormContainer").hide();
    });

    // Close Success Update
    $("#updateSuccessAlertCloseIcon").click(function(){
        $("#updateSuccessAlert").hide();
    });

    // Validation Facebook
    $(document).on('input', '#updateFacebookUrl', function() {
        const facebookUrl = $(this).val().trim();
        if(isValidUrl(facebookUrl)){
            $("#invalidUrlFacebookErrUpdate").hide();
            $(this).css('border-color', 'hsl(122, 39%, 49%)');
        } else {
            $("#invalidUrlFacebookErrUpdate").show();
            $(this).css('border-color', 'hsl(4, 95%, 56%)');
        }
    });

    // Validation Tiktok
    $(document).on('input', '#updateTiktokUrl', function() {
        const facebookUrl = $(this).val().trim();
        if(isValidUrl(facebookUrl)){
            $("#invalidUrlTiktokErrUpdate").hide();
            $(this).css('border-color', 'hsl(122, 39%, 49%)');
        } else {
            $("#invalidUrlTiktokErrUpdate").show();
            $(this).css('border-color', 'hsl(4, 95%, 56%)');
        }
    });
    
    function isValidUrl(url) {
        // Regular expression for validating URLs
        const urlRegex = /^(?:\w+:)?\/\/([^\s\.]+\.\S{2}|localhost[\:?\d]*)\S*$/;
        return urlRegex.test(url);
    }
});