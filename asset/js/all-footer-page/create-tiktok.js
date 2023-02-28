$(document).ready(function(){
    // Create Form Tiktok
    $('#createFormTiktok').submit(function(e){
        e.preventDefault();

        const tiktokUrl = $('input[name="tiktokUrl"]').val().trim();

        if(tiktokUrl != ""){
            // validate url
            if(isValidUrl(tiktokUrl)){
                $.ajax({
                    type: "POST",
                    url: "../../../../g4stickerworks/asset/php/all-footer-page/create-tiktok.php", // replace with the URL of your form processing script
                    data: { 
                        tiktokUrl: tiktokUrl
                    },
                    success: function(response) {
                        const responseVar = response.trim();
                        if(responseVar == "created"){
                            $("#createFormTiktok").trigger("reset");
                            $("#successAlertInsert").show();
                            setTimeout(function() {
                                $("#successAlertInsert").hide(); // Show the element after 10 seconds
                            }, 10000); // 10000 milliseconds = 10 seconds
                            $("#tiktokUrlContainer").load("../../../../../g4stickerworks/asset/php/all-footer-page/display/d-tiktok.php")
                            $('#tiktokUrl').css('border-color', 'hsl(207, 90%, 54%)');
                        }
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.error("Form submission failed: " + textStatus, errorThrown); // log error message to the console
                        // do something to handle the error (e.g. display an error message to the user)
                    }
                });
            } else {
                $("#invalidUrlTiktokErr").show();
                $('#tiktokUrl').css('border-color', 'hsl(4, 95%, 56%)');
            }
        } else {
            $("#invalidUrlTiktokErr").show();
            $('#tiktokUrl').css('border-color', 'hsl(4, 95%, 56%)');
        }
    });

    // Validation
    $('#tiktokUrl').on('input', function() {
        const tiktokUrl = $(this).val().trim();
        if(isValidUrl(tiktokUrl)){
            $("#invalidUrlTiktokErr").hide();
            $(this).css('border-color', 'hsl(122, 39%, 49%)');
        } else {
            $("#invalidUrlTiktokErr").show();
            $(this).css('border-color', 'hsl(4, 95%, 56%)');
        }
    });

    function isValidUrl(url) {
        // Regular expression for validating URLs
        const urlRegex = /^(?:\w+:)?\/\/([^\s\.]+\.\S{2}|localhost[\:?\d]*)\S*$/;
        return urlRegex.test(url);
    }
});