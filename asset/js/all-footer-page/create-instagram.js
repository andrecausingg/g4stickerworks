$(document).ready(function(){
    // Create Form instagram
    $('#createFormInstagram').submit(function(e){
        e.preventDefault();

        const instagramUrl = $('input[name="instagramUrl"]').val().trim();

        if(instagramUrl != ""){
            // validate url
            if(isValidUrl(instagramUrl)){
                $.ajax({
                    type: "POST",
                    url: "../../../../web-code/asset/php/all-footer-page/create-instagram.php", // replace with the URL of your form processing script
                    data: { 
                        instagramUrl: instagramUrl
                    },
                    success: function(response) {
                        const responseVar = response.trim();
                        if(responseVar == "created"){
                            $("#createFormInstagram").trigger("reset");
                            $("#successAlertInsert").show();
                            setTimeout(function() {
                                $("#successAlertInsert").hide(); // Show the element after 10 seconds
                            }, 10000); // 10000 milliseconds = 10 seconds
                            $("#instagramUrlContainer").load("../../../../../web-code/asset/php/all-footer-page/display/d-instagram.php")
                            $('#instagramUrl').css('border-color', 'hsl(207, 90%, 54%)');
                        }
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.error("Form submission failed: " + textStatus, errorThrown); // log error message to the console
                        // do something to handle the error (e.g. display an error message to the user)
                    }
                });
            } else {
                $("#invalidUrlInstagramErr").show();
                $('#instagramUrl').css('border-color', 'hsl(4, 95%, 56%)');
            }
        } else {
            $("#invalidUrlInstagramErr").show();
            $('#instagramUrl').css('border-color', 'hsl(4, 95%, 56%)');
        }
    });

    // Validation
    $('#instagramUrl').on('input', function() {
        const instagramUrl = $(this).val().trim();
        if(isValidUrl(instagramUrl)){
            $("#invalidUrlInstagramErr").hide();
            $(this).css('border-color', 'hsl(122, 39%, 49%)');
        } else {
            $("#invalidUrlInstagramErr").show();
            $(this).css('border-color', 'hsl(4, 95%, 56%)');
        }
    });

    function isValidUrl(url) {
        // Regular expression for validating URLs
        const urlRegex = /^(?:\w+:)?\/\/([^\s\.]+\.\S{2}|localhost[\:?\d]*)\S*$/;
        return urlRegex.test(url);
    }
});