$(document).ready(function(){
    $(document).on("click", ".updateIconDecals", function() {
        const id = $(this).attr("data-id").trim();
        const fileInput = $('#imageDecalsUpdate[data-id="' + id + '"]');
        const file = fileInput[0].files[0];
        
        const formData = new FormData();
        formData.append('file', file); // Add the file to the form data object
        formData.append('id', id); // Add the id to the form data object
    
        // Send the AJAX request to update the image in the database
        $.ajax({
            url: '../../../../g4stickerworks/asset/php/product-page/update-decals.php', // replace this with your server URL
            type: 'POST',
            data: formData, // pass formData as the data parameter
            processData: false,
            contentType: false,
            success: function(response) {
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
    

    // Filter In back End update Only
    updateFilterSelectTag();
    
    // Reset All update
    function resetForm(){
        $("#updateSuccessAlert").show();
        setTimeout(function() {
            $("#updateSuccessAlert").hide(); // Show the element after 10 seconds
        }, 10000); // 10000 milliseconds = 10 seconds
        
        // Set Empty String Create Form
        $('#selectDecals').val('');
        $('#brandSelect').val('');
        $('#modelSelect').empty();  // remove all existing options from the dropdown
        $('#imageDecals').val('');

        // Hide Container Create Select Tag
        $(".selectContainerBrand").hide();
        $(".selectContainerModel").hide();
        $(".uploadImageContainerDecals").hide();
        $(".submitContainerDecals").hide();

        $("#deleteDisplayDecals").load("../../../../../g4stickerworks/asset/php/product-page/display/d-delete-decals.php");

        // Get the selected values
        var decalValue = $('#decalSelectFilterUpdate').val() ? $('#decalSelectFilterUpdate').val() : "";
        var brandValue = $('#brandSelectFilterUpdate').val() ? $('#brandSelectFilterUpdate').val() : "";
        var modelValue = $('#modelSelectFilterUpdate').val() ? $('#modelSelectFilterUpdate').val() : "";

        // Make an AJAX request with the selected values
        $.ajax({
            url: '../../../../g4stickerworks/asset/php/product-page/display/d-update-filter.php',
            method: 'POST',
            data: {
                decal: decalValue,
                brand: brandValue,
                model: modelValue
            },
            success: function(response) {
                // console.log(response);
                $("#updateDisplayDecals").html(response)
            },
            error: function(xhr) {
                // Handle any errors that occur during the AJAX request
            }
        });
    }
    function updateFilterSelectTag(){
        // Wait for the page to load before binding the change event to the select elements
        $('#decalSelectFilterUpdate, #brandSelectFilterUpdate, #modelSelectFilterUpdate').on('change', function() {
            // Get the selected values
            var decalValue = $('#decalSelectFilterUpdate').val() ? $('#decalSelectFilterUpdate').val() : "";
            var brandValue = $('#brandSelectFilterUpdate').val() ? $('#brandSelectFilterUpdate').val() : "";
            var modelValue = $('#modelSelectFilterUpdate').val() ? $('#modelSelectFilterUpdate').val() : "";
            
            // Make an AJAX request with the selected values
            $.ajax({
                url: '../../../../g4stickerworks/asset/php/product-page/display/d-update-filter.php',
                method: 'POST',
                data: {
                    decal: decalValue,
                    brand: brandValue,
                    model: modelValue
                },
                success: function(response) {
                    // console.log(response);
                    $("#updateDisplayDecals").html(response)
                },
                error: function(xhr) {
                    // Handle any errors that occur during the AJAX request
                }
            });
        });
    }
});