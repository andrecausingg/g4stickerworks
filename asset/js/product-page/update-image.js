$(document).ready(function(){

    // Functions
    function resetForm(){
        $("#updateSuccessAlert").show();
        setTimeout(function() {
            $("#updateSuccessAlert").hide(); // Show the element after 10 seconds
        }, 10000); // 10000 milliseconds = 10 seconds

        $('#imageGalleryUpdate').val('');

        $("#displayImages").load("../../../../../g4stickerworks/asset/php/gallery-page/display/d-images.php");
        $("#updateDisplayContainerImage").load("../../../../../g4stickerworks/asset/php/gallery-page/display/d-update-image.php");
        $("#deleteDisplayContainerImage").load("../../../../../g4stickerworks/asset/php/gallery-page/display/d-delete-image.php");
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