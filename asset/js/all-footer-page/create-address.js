$(document).ready(function(){
// Create Form Address
$('#createFormAddress').submit(function(e){
    e.preventDefault();

    const address = $('input[name="address"]').val().trim();

    if(address !== ""){
        // validate address
        if(isValidAddress(address)){
            $.ajax({
                type: "POST",
                url: "../../../../g4stickerworks/asset/php/all-footer-page/create-address.php", // replace with the URL of your form processing script
                data: { 
                    address: address
                },
                success: function(response) {
                    const responseVar = response.trim();
                    if(responseVar == "created"){
                        $("#createFormAddress").trigger("reset");
                        $("#successAlertInsert").show();
                        setTimeout(function() {
                            $("#successAlertInsert").hide(); // Show the element after 10 seconds
                        }, 10000); // 10000 milliseconds = 10 seconds
                        $("#addressContainer").load("../../../../../g4stickerworks/asset/php/all-footer-page/display/d-address.php")
                        $('#address').css('border-color', 'hsl(207, 90%, 54%)');
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.error("Form submission failed: " + textStatus, errorThrown); // log error message to the console
                    // do something to handle the error (e.g. display an error message to the user)
                }
            });
        } else {
            $("#invalidAddressErr").show();
            $('#address').css('border-color', 'hsl(4, 95%, 56%)');
        }
    } else {
        $("#invalidAddressErr").show();
        $('#address').css('border-color', 'hsl(4, 95%, 56%)');
    }
});

// Validation
$('#address').on('input', function() {
    const address = $(this).val().trim();
    if(address === "") {
        $("#invalidAddressErr").show();
        $(this).css('border-color', 'hsl(4, 95%, 56%)');
    } else if(isValidAddress(address)) {
        $("#invalidAddressErr").hide();
        $(this).css('border-color', 'hsl(122, 39%, 49%)');
    } else {
        $("#invalidAddressErr").show();
        $(this).css('border-color', 'hsl(4, 95%, 56%)');
    }
});

function isValidAddress(address) {
    // Regular expression for validating address
    const addressRegex = /^[a-zA-Z0-9\s,'-]*$/;
    return address !== "" && addressRegex.test(address);
}

});