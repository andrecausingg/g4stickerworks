$(document).ready(function(){
    $(document).on("click", ".updateIconUserProduct", function() {
        const id = $(this).attr("data-id").trim();
        const fileInput = $('#imageUserProductUpdate[data-id="' + id + '"]');
        const file = fileInput[0].files[0];
        
        const formData = new FormData();
        formData.append('file', file); // Add the file to the form data object
        formData.append('id', id); // Add the id to the form data object
    
        // Send the AJAX request to update the image in the database
        $.ajax({
            url: '../../../../g4stickerworks/asset/php/user-product-page/update.php', // replace this with your server URL
            type: 'POST',
            data: formData, // pass formData as the data parameter
            processData: false,
            contentType: false,
            success: function(response) {
                console.log(response);
                const responseVar = response.trim();
    
                if(responseVar == 'updated'){
                    resetForm();
                }else if(responseVar == 'imagetoolarge'){
                    hideErrImgTooBig();
                }else if(responseVar == 'errorUploadingimage'){
                    hideErroruploadingimage();
                }else if(responseVar == 'invalidfiletype'){
                    hideInvalidfiletype();
                }
            },
            error: function(xhr, status, error) {
                // handle error response here
                console.log(error);
            }
        });
    });

    $("#updateSuccessAlertCloseIcon").click(function(){
        $("#updateSuccessAlert").hide();
    });

    // Reset All update
    function resetForm(){
        $("#updateSuccessAlert").show();
        setTimeout(function() {
            $("#updateSuccessAlert").hide(); // Show the element after 10 seconds
        }, 10000); // 10000 milliseconds = 10 seconds
        $("#displayUserProducts").load("../../../../../g4stickerworks/asset/php/user-product-page/display/d-images.php");
        $("#updateDisplayProduct").load("../../../../../g4stickerworks/asset/php/user-product-page/display/d-update.php");
        $("#deleteDisplayProduct").load("../../../../../g4stickerworks/asset/php/user-product-page/display/d-delete.php");
    }
});