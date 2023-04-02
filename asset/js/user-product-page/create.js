$(document).ready(function() {
    $('#createFormProduct').submit(function(event) {
        event.preventDefault(); // prevent default form submission

        var name = $('#name').val().trim();
        var description = $('#description').val().trim();
        var price = $('#price').val().trim();
        var imageUserProduct = $('#imageUserProduct').val().trim();

        if(name != "" && validateName() &&
            description != "" && validateDescription() &&
            price != "" && validatePrice() &&
            imageUserProduct != "" && validateImage()
        ){
            var formData = new FormData(this); // create form data object
            $.ajax({
                url: '../../../../g4stickerworks/asset/php/user-product-page/create.php',
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    var responseVar = response.trim();
                    console.log(responseVar);
                    if(responseVar == "created"){
                        resetForm();
                    }else if(responseVar == 'imagetoolarge'){
                        hideErrImgTooBig();
                    }else if(responseVar == 'errorUploadingimage'){
                        hideErroruploadingimage();
                    }else if(responseVar == 'invalidfiletype'){
                        hideInvalidfiletype();
                    }
    
              },
              error: function(jqXHR, textStatus, errorThrown) {
                console.log(errorThrown); // handle error response from server
              }
            });
        }else{
            validateName();
            validateDescription();
            validatePrice();
            validateImage();
        }

        // Function Name
        function validateName(){
            var name = $('#name').val().trim();

            if(name == ""){
                $("#emptyErrName").show();
                $('#name').css('border-color', 'hsl(4, 95%, 56%)');
                return false;
            }else{
                $("#emptyErrName").hide();
                $('#name').css('border-color', 'hsl(122, 39%, 49%)');
                return true;
            }
        }

        // Function description
        function validateDescription(){
            var description = $('#description').val().trim();

            if(description == ""){
                $("#emptyErrDescription").show();
                $('#description').css('border-color', 'hsl(4, 95%, 56%)');
                return false;
            }else{
                $("#emptyErrDescription").hide();
                $('#description').css('border-color', 'hsl(122, 39%, 49%)');
                return true;
            }
        }
        
        // Function price
        function validatePrice(){
            var price = $('#price').val().trim();

            if(price == ""){
                $("#emptyErrPrice").show();
                $('#price').css('border-color', 'hsl(4, 95%, 56%)');
                return false;
            }else{
                $("#emptyErrPrice").hide();
                $('#price').css('border-color', 'hsl(122, 39%, 49%)');
                return true;
            }
        }

        // Function image
        function validateImage(){
            var imageUserProduct = $('#imageUserProduct').val().trim();
        
            if(imageUserProduct == ""){
                $("#emptyErrimageUserProduct").show();
                $('#imageUserProduct').css('border-color', 'hsl(4, 95%, 56%)');
                return false;
            }else{
                $("#emptyErrimageUserProduct").hide();
                $('#imageUserProduct').css('border-color', 'hsl(122, 39%, 49%)');
                return true;
            }
        }
    });

    // Show the Selected Form Container
    $("#selectOptionProduct").change(function() {
        var selectedValue = $(this).val(); // get the value of the selected option
        var containers = ["create", "update", "delete"];
        var captions = ["CREATE", "UPDATE", "DELETE"];
        // put the container IDs into an array in the same order as the options in the select element
        // put the captions into an array in the same order as the options in the select element
        
        // loop through the containers array and hide all containers except the one corresponding to the selected option
        for (var i = 0; i < containers.length; i++) {
            var containerID = containers[i] + "DisplayContainerProduct"; // get the ID of the container
            if (selectedValue == containers[i]) {
                $("#" + containerID).show(); // show the corresponding container
                $("#captionProduct").text(captions[i]); // change the Product caption to match the selected option
            } else {
                $("#" + containerID).hide(); // hide the other containers
            }
        }
        if (selectedValue == "create") {
            $("#createDisplayContainerProduct").show(); // show the create container
            $("#updateDisplayContainerProduct").hide(); // hide the update container
            $("#deleteDisplayContainerProduct").hide(); // hide the delete container
        } else if (selectedValue == "update") {
            $("#createDisplayContainerProduct").hide(); // hide the create container
            $("#updateDisplayContainerProduct").show(); // show the update container
            $("#deleteDisplayContainerProduct").hide(); // hide the delete container
        } else if (selectedValue == "delete") {
            $("#createDisplayContainerProduct").hide(); // hide the create container
            $("#updateDisplayContainerProduct").hide(); // hide the update container
            $("#deleteDisplayContainerProduct").show(); // show the delete container
        }
    });

    // Show Product Form
    $("#addProductBtn").click(function(){
        $("#createBgContainerProduct").show();
        $("#createFormContainerProduct").show();
    });

    // Hide Product Form
    $("#createCloseFormIconProduct").click(function(){
        $("#createBgContainerProduct").hide();
        $("#createFormContainerProduct").hide();
    });

    // Validation
    $('#name').keyup(validateName);
    $('#description').keyup(validateDescription);
    $('#price').keyup(validatePrice);
    $('#imageUserProduct').change(validateImage);

    // Function Name
    function validateName(){
        var name = $('#name').val().trim();

        if(name == ""){
            $("#emptyErrName").show();
            $('#name').css('border-color', 'hsl(4, 95%, 56%)');
        }else{
            $("#emptyErrName").hide();
            $('#name').css('border-color', 'hsl(122, 39%, 49%)');
        }
    }

    // Function description
    function validateDescription(){
        var description = $('#description').val().trim();

        if(description == ""){
            $("#emptyErrDescription").show();
            $('#description').css('border-color', 'hsl(4, 95%, 56%)');
        }else{
            $("#emptyErrDescription").hide();
            $('#description').css('border-color', 'hsl(122, 39%, 49%)');
        }
    }
    
    // Function price
    function validatePrice(){
        var price = $('#price').val().trim();

        if(price == ""){
            $("#emptyErrPrice").show();
            $('#price').css('border-color', 'hsl(4, 95%, 56%)');
        }else{
            $("#emptyErrPrice").hide();
            $('#price').css('border-color', 'hsl(122, 39%, 49%)');
        }
    }

    // Function image
    function validateImage(){
        var imageUserProduct = $('#imageUserProduct').val().trim();
    
        if(imageUserProduct == ""){
            $("#emptyErrimageUserProduct").show();
            $('#imageUserProduct').css('border-color', 'hsl(4, 95%, 56%)');
        }else{
            $("#emptyErrimageUserProduct").hide();
            $('#imageUserProduct').css('border-color', 'hsl(122, 39%, 49%)');
        }
    }

    // Allow Number
    $("#price").on("input", function() {
        var regex = /[^0-9]/g;
        if ($(this).val().match(regex)) {
            $(this).val($(this).val().replace(regex, ''));
        }
    });

    function resetForm(){
        $("#displayUserProducts").load("../../../../../g4stickerworks/asset/php/user-product-page/display/d-images.php");
        // Clear image display
       $('#imageUserProduct').html('');
       $("#createSuccessAlert").show();
       setTimeout(function() {
           $("#createSuccessAlert").hide(); // Show the element after 10 seconds
       }, 10000); // 10000 milliseconds = 10 seconds
       $('#name, #description, #price, #imageUserProduct').val("");
       $('#name, #description, #price, #imageUserProduct').css('border-color', 'hsl(207, 90%, 54%)');
    }

    // hide
    $("#createSuccessAlertCloseIcon").click(function(){
        $("#createSuccessAlert").hide();
    });  

    // Image Alert Hide
    $(".alertCloseIcon").click(function(){
        $('#errorImagetoolargeAlert').hide();
        $('#errorUploadingimageAlert').hide();
        $('#invalidfiletypeAlert').hide();
    });

});