$(document).ready(function(){
    $(document).on("click", ".updateIconImage", function() {
        const id = $(this).attr("data-id").trim();
        const fileInput = $('#imageUpdate[data-id="' + id + '"]');
        const file = fileInput[0].files[0];
        
        // Create a new form data object
        const formData = new FormData();
        formData.append('file', file); // Add the file to the form data object
        formData.append('id', id); // Add the id to the form data object
    
        // Send the AJAX request to update the image in the database
        $.ajax({
            url: '../../../../g4stickerworks/asset/php/about-us-page/update-image.php', // replace this with your server URL
            type: 'POST',
            data: formData, // pass formData as the data parameter
            processData: false,
            contentType: false,
            success: function(response) {
                console.log(response);
                const responseVar = response.trim();
    
                if(responseVar == 'updated'){
                    resetForm();

                   $("#displayImages").load("../../../../../g4stickerworks/asset/php/about-us-page/display/d-images.php");
                    $("#updateDisplayContainerImage").load("../../../../../g4stickerworks/asset/php/about-us-page/display/d-update-image.php");
                    $("#deleteDisplayContainerImage").load("../../../../../g4stickerworks/asset/php/about-us-page/display/d-delete-image.php");
                    
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
    
    
    
    // Functions
    function resetForm(){
        $("#updateSuccessAlert").show();
        setTimeout(function() {
            $("#updateSuccessAlert").hide(); // Show the element after 10 seconds
        }, 10000); // 10000 milliseconds = 10 seconds

        $('#imageUpdate').val('');
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