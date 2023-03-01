$(document).ready(function(){
    // Delete All
    $(document).on("click", ".deleteIcon", function() {
        const id = $(this).attr("data-id");
        const role = $(this).attr("role");

        if(id != ""){
            $.ajax({
                type: "POST",
                url: "../../../../g4stickerworks/asset/php/all-footer-page/delete.php", // replace with the URL of your form processing script
                data: { 
                    id: id
                },
                success: function(response) {
                    const responseVar = response.trim();
                    if(responseVar == "deleted"){
                        $("#deleteSuccessAlert").show();
                        setTimeout(function() {
                            $("#deleteSuccessAlert").hide(); // Show the element after 10 seconds
                        }, 10000); // 10000 milliseconds = 10 seconds

                        let dataUrl = ""; // variable to store the data URL

                        // Display the data after success delete
                        switch(role) {
                            case "select":
                                $("#deleteDisplayDataAllTable").empty();
                                deleteSelect();
                                updateSelect();
                                break;
                            case "facebook":
                                deleteSelect();
                                updateSelect();
                                dataUrl = "../../../../../g4stickerworks/asset/php/all-footer-page/display/d-delete-facebook.php";
                                $("#facebookUrlContainer").load("../../../../../g4stickerworks/asset/php/all-footer-page/display/d-facebook.php");
                                break;
                            case "tiktok":
                                deleteSelect();
                                updateSelect();
                                dataUrl = "../../../../../g4stickerworks/asset/php/all-footer-page/display/d-delete-tiktok.php";
                                $("#tiktokUrlContainer").load("../../../../../g4stickerworks/asset/php/all-footer-page/display/d-tiktok.php");
                                break;
                            case "instagram":
                                deleteSelect();
                                updateSelect();
                                dataUrl = "../../../../../g4stickerworks/asset/php/all-footer-page/display/d-delete-instagram.php";
                                $("#instagramUrlContainer").load("../../../../../g4stickerworks/asset/php/all-footer-page/display/d-instagram.php");
                                break;
                            case "email":
                                deleteSelect();
                                updateSelect();
                                dataUrl = "../../../../../g4stickerworks/asset/php/all-footer-page/display/d-delete-email.php";
                                $("#emailContainer").load("../../../../../g4stickerworks/asset/php/all-footer-page/display/d-email.php");
                                break;
                            case "phone":
                                deleteSelect();
                                updateSelect();
                                dataUrl = "../../../../../g4stickerworks/asset/php/all-footer-page/display/d-delete-phone.php";
                                $("#phoneContainer").load("../../../../../g4stickerworks/asset/php/all-footer-page/display/d-phone.php");
                                break;
                            case "address":
                                deleteSelect();
                                updateSelect();
                                dataUrl = "../../../../../g4stickerworks/asset/php/all-footer-page/display/d-delete-address.php";
                                $("#addressContainer").load("../../../../../g4stickerworks/asset/php/all-footer-page/display/d-address.php");
                                break;
                            default:
                                deleteSelect();
                                updateSelect();
                                dataUrl = "";
                                break;
                        }

                        
                        if(dataUrl !== "") {
                            $("#deleteDisplayDataAllTable").load(dataUrl); // load the data for the selected option
                        }
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.error("Form submission failed: " + textStatus, errorThrown); // log error message to the console
                    // do something to handle the error (e.g. display an error message to the user)
                }
            });
        }
    });

    // Show the Selected Form Container
    $("#deleteSelect").change(function() {
        const selectedValue = $(this).val().trim(); // get the value of the selected option
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
    });

    // Show delete Container
    $("#deleteBtn").click(function(){
        $("#deleteBgContainer").show();
        $("#deleteFormContainer").show();
    });

    // Hide delete Container
    $("#deleteCloseFormIcon").click(function(){
        $("#deleteBgContainer").hide();
        $("#deleteFormContainer").hide();
    });

    // Close Success Delete
    $("#deleteSuccessAlertCloseIcon").click(function(){
        $("#deleteSuccessAlert").hide();
    });

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