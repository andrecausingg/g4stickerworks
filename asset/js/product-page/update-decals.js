$(document).ready(function(){
     


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

        // Get the selected values And Display the table on #updateDisplayDecals
        var decalValue = $('#decalSelectFilter').val() ? $('#decalSelectFilter').val() : "";
        var brandValue = $('#brandSelectFilter').val() ? $('#brandSelectFilter').val() : "";
        var modelValue = $('#modelSelectFilter').val() ? $('#modelSelectFilter').val() : "";

        console.log(decalValue);
        console.log(brandValue);
        console.log(modelValue);

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
        $('#decalSelectFilter, #brandSelectFilter, #modelSelectFilter').on('change', function() {
            // Get the selected values
            var decalValue = $('#decalSelectFilter').val() ? $('#decalSelectFilter').val() : "";
            var brandValue = $('#brandSelectFilter').val() ? $('#brandSelectFilter').val() : "";
            var modelValue = $('#modelSelectFilter').val() ? $('#modelSelectFilter').val() : "";
            
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