$(document).ready(function(){
    $("#displaySubTitleAboutUs").load("../../../../../g4stickerworks/asset/php/about-us-page/display/d-data.php");
    $("#updateDisplayContainerSubTitle").load("../../../../../g4stickerworks/asset/php/about-us-page/display/d-update-sub-title.php");
    $("#deleteDisplayContainerSubTitle").load("../../../../../g4stickerworks/asset/php/about-us-page/display/d-delete-sub-title.php");

    $("#displayImagesAboutUs").load("../../../../../g4stickerworks/asset/php/about-us-page/display/d-images.php");
    $("#updateDisplayContainerImage").load("../../../../../g4stickerworks/asset/php/about-us-page/display/d-update-image.php");
    $("#deleteDisplayContainerImage").load("../../../../../g4stickerworks/asset/php/about-us-page/display/d-delete-image.php");
});