$(document).ready(function(){
    // Delete All
    $(document).on("click", ".deleteIconDecals", function() {
        const id = $(this).attr("data-id");
        
        if(id != ""){
            $.ajax({
                type: "POST",
                url: "../../../../g4stickerworks/asset/php/product-page/delete-decals.php", // replace with the URL of your form processing script
                data: { 
                    id: id
                },
                success: function(response) {
                    const responseVar = response.trim();
                    if(responseVar == "deleted"){
                        resetForm();
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.error("Form submission failed: " + textStatus, errorThrown); // log error message to the console
                    // do something to handle the error (e.g. display an error message to the user)
                }
            });
        }
    });
    // Close Success Delete
    $("#deleteSuccessAlertCloseIcon").click(function(){
        $("#deleteSuccessAlert").hide();
    });
    
    // Reset All Delete
    function resetForm(){
        $("#deleteSuccessAlert").show();
        setTimeout(function() {
            $("#deleteSuccessAlert").hide(); // Show the element after 10 seconds
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

        $("#updateDisplayDecals").load("../../../../../g4stickerworks/asset/php/product-page/display/d-update-decals.php");
        // $("#deleteDisplayDecals").load("../../../../../g4stickerworks/asset/php/product-page/display/d-delete-decals.php");

        // Get the selected values And Display the table on #deleteDisplayDecals
        var decalValue = $('#decalSelectFilter').val() ? $('#decalSelectFilter').val() : "";
        var brandValue = $('#brandSelectFilter').val() ? $('#brandSelectFilter').val() : "";
        var modelValue = $('#modelSelectFilter').val() ? $('#modelSelectFilter').val() : "";

        console.log(decalValue);
        console.log(brandValue);
        console.log(modelValue);

        // Make an AJAX request with the selected values
        $.ajax({
            url: '../../../../g4stickerworks/asset/php/product-page/display/d-delete-filter.php',
            method: 'POST',
            data: {
                decal: decalValue,
                brand: brandValue,
                model: modelValue
            },
            success: function(response) {
                // console.log(response);
                $("#deleteDisplayDecals").html(response)
            },
            error: function(xhr) {
                // Handle any errors that occur during the AJAX request
            }
        });
    }
});