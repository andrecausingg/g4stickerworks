$(document).ready(function(){
    // Decals
    $("#allDecalsProduct").load("../../../../../g4stickerworks/asset/php/product-page/display/d-decals.php");

    // Services
    $("#displayContentServices").load("../../../../../g4stickerworks/asset/php/services-page/display/d-data-content.php");
    $("#displaySubTitleServices").load("../../../../../g4stickerworks/asset/php/services-page/display/d-data.php");

    // Contact Us
    $("#displaySubTitleContactUs").load("../../../../../g4stickerworks/asset/php/contact-us-page/display/d-data.php");

    $("#facebookUrlContainerContactUs").load("../../../../../g4stickerworks/asset/php/contact-us-page/display/d-facebook.php");
    $("#tiktokUrlContainerContactUs").load("../../../../../g4stickerworks/asset/php/contact-us-page/display/d-tiktok.php");
    $("#instagramUrlContainerContactUs").load("../../../../../g4stickerworks/asset/php/contact-us-page/display/d-instagram.php");
    $("#emailContainerContactUs").load("../../../../../g4stickerworks/asset/php/contact-us-page/display/d-email.php");
    $("#phoneContainerContactUs").load("../../../../../g4stickerworks/asset/php/contact-us-page/display/d-phone.php");

    // About Us
    $("#displaySubTitleAboutUs").load("../../../../../g4stickerworks/asset/php/about-us-page/display/d-data.php");
    $("#displayImagesAboutUs").load("../../../../../g4stickerworks/asset/php/about-us-page/display/d-images.php");

    // Gallery Page
    $("#displayCaption").load("../../../../../g4stickerworks/asset/php/gallery-page/display/d-caption.php");
    $("#displayImages").load("../../../../../g4stickerworks/asset/php/gallery-page/display/d-images.php");

    // All Footers
    $("#facebookUrlContainer").load("../../../../../g4stickerworks/asset/php/all-footer-page/display/d-facebook.php");
    $("#tiktokUrlContainer").load("../../../../../g4stickerworks/asset/php/all-footer-page/display/d-tiktok.php");
    $("#instagramUrlContainer").load("../../../../../g4stickerworks/asset/php/all-footer-page/display/d-instagram.php");
    $("#emailContainer").load("../../../../../g4stickerworks/asset/php/all-footer-page/display/d-email.php");
    $("#phoneContainer").load("../../../../../g4stickerworks/asset/php/all-footer-page/display/d-phone.php");
    $("#addressContainer").load("../../../../../g4stickerworks/asset/php/all-footer-page/display/d-address.php");
});