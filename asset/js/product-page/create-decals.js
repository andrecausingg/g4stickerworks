$(document).ready(function(){
    // Listen for form submit event
    $('#createFormDecals').submit(function(event) {
        event.preventDefault(); // Prevent default form submission behavior

        // Create form data object
        var formData = new FormData(this);

        // Send AJAX request to server
        $.ajax({
        type: 'POST',
        url: 'asset/php/product-page/create-decals.php',
        data: formData,
        contentType: false,
        processData: false,
        success: function(response) {
            const responseVar = response.trim();
            if(responseVar == "created"){
                resetForm();
            }

            // Handle success response here
        },
        error: function(xhr, status, error) {
            console.error(error); // Log error
            // Handle error response here
        }
        });
    });
    
    // Show the Selected Form Container
    $("#selectOptionDecals").change(function() {
        var selectedValue = $(this).val(); // get the value of the selected option
        var containers = ["create", "update", "delete"];
        var captions = ["CREATE", "UPDATE", "DELETE"];
        // put the container IDs into an array in the same order as the options in the select element
        // put the captions into an array in the same order as the options in the select element
        
        // loop through the containers array and hide all containers except the one corresponding to the selected option
        for (var i = 0; i < containers.length; i++) {
            var containerID = containers[i] + "DisplayContainer"; // get the ID of the container
            if (selectedValue == containers[i]) {
                $("#" + containerID).show(); // show the corresponding container
                $("#titleCaptionDecals").text(captions[i]); // change the title caption to match the selected option
            } else {
                $("#" + containerID).hide(); // hide the other containers
            }
        }
        if (selectedValue == "create") {
            $("#filterDecalsUpdateDelete").hide();
            $("#mainFormContainer").removeClass("yot-overlay-mid-container-form-tablet-size-up");
            $("#createDisplayContainerDecals").show(); // show the create container
            $("#updateDisplayContainerDecals").hide(); // hide the update container
            $("#deleteDisplayContainerDecals").hide(); // hide the delete container
        } else if (selectedValue == "update") {
            $("#filterDecalsUpdateDelete").show();
            $("#mainFormContainer").addClass("yot-overlay-mid-container-form-tablet-size-up");
            $("#createDisplayContainerDecals").hide(); // hide the create container
            $("#updateDisplayContainerDecals").show(); // show the update container
            $("#deleteDisplayContainerDecals").hide(); // hide the delete container
        } else if (selectedValue == "delete") {
            $("#filterDecalsUpdateDelete").show();
            $("#mainFormContainer").addClass("yot-overlay-mid-container-form-tablet-size-up");
            $("#createDisplayContainerDecals").hide(); // hide the create container
            $("#updateDisplayContainerDecals").hide(); // hide the update container
            $("#deleteDisplayContainerDecals").show(); // show the delete container
        }
    });

    // Display Form Decals Create Update Delete
    $("#decalsFormBtn").click(function(){
        $("#createBgContainerDecals").show();
        $("#createFormContainerDecals").show();
    });

    // Close Form Decals Create Update Delete
    $("#createCloseFormIconDecals").click(function(){
        $("#createBgContainerDecals").hide();
        $("#createFormContainerDecals").hide();
    });

    // Hide Create Update Delete Alert
    $("#alertIconClose").click(function(){
        $("#createSuccessAlert").hide();
        $("#deleteSuccessAlert").hide();
        $("#updateSuccessAlert").hide();
    });

    // Hide Create Success Alert
    $("#createSuccessAlertCloseIcon").click(function(){
        $("#createSuccessAlert").hide();
    });

    selectTagDisplayBrandAndModel();
    selectTagDisplayBrandAndModelFilter();
    
    // For Create Form Only
    function selectTagDisplayBrandAndModel(){
        var data = {
            "Honda": ["Honda BeAT", "Honda Click", "Honda Genio", "Honda PCX", "Honda ADV150", "Honda CBR150R", "Honda CB150R", "Honda CB400X", "Honda CB650R", "Honda CB1000R", "Honda CRF150L", "Honda CRF250L", "Honda CRF300L", "Honda XR150L", "Honda Supra GTR150", "Honda TMX125 Alpha", "Honda Wave110 Alpha", "Honda XRM125 Motard", "Honda RS150R", "Honda Zoomer-X"],
            "Yamaha": ["Yamaha Mio i 125", "Yamaha Mio Soul i 125", "Yamaha Nmax", "Yamaha Aerox 155", "Yamaha Sniper 150", "Yamaha MT-15", "Yamaha R15", "Yamaha XSR155", "Yamaha Tracer 900", "Yamaha Super Tenere", "Yamaha YZF-R3", "Yamaha TFX 150", "Yamaha FZi", "Yamaha FZ16", "Yamaha SZ-R", "Yamaha XTZ125", "Yamaha YTX125", "Yamaha YBR125"],
            "Suzuki Philippines": ["Suzuki Raider J Crossover", "Suzuki Skydrive Fi", "Suzuki Address", "Suzuki Burgman Street", "Suzuki Gixxer FI", "Suzuki GSX-R150", "Suzuki SV650", "Suzuki V-Strom 1050XT", "Suzuki DR200S", "Suzuki RM-Z250", "Suzuki GSX-S750", "Suzuki GSX-S1000", "Suzuki SV650X", "Suzuki GSX-R1000R", "Suzuki Hayabusa"],
            "Kawasaki Motors": ["Kawasaki Ninja 400", "Kawasaki Z400", "Kawasaki Versys-X 300", "Kawasaki W800", "Kawasaki Z650", "Kawasaki Versys 650", "Kawasaki Ninja 650", "Kawasaki Z900", "Kawasaki Z900RS", "Kawasaki Ninja 1000SX", "Kawasaki Versys 1000", "Kawasaki Z H2", "Kawasaki Vulcan S", "Kawasaki KLX150L", "Kawasaki KLX300R"],
            "Kymco": ["Kymco Like 125", "Kymco Agility 125", "Kymco Super 8 150", "Kymco X-Town CT300i", "Kymco Xciting S 400i", "Kymco AK 550", "Kymco Like 150i ABS", "Kymco Like 200i", "Kymco X-Town 300i", "Kymco Like 150 R"],
            "Motorstar": ["Motorstar Nicess 110", "Motorstar Star-X 125 II", "Motorstar Star-X 155"],
            "TVS": ["TVS XL100", "TVS Rockz 125", "TVS Dazz Prime", "TVS Apache RTR 160", "TVS Apache RTR 180", "TVS Apache RTR 200", "TVS Apache RR 310"],
            "Royal Enfield": ["Royal Enfield Classic 350", "Royal Enfield Meteor 350", "Royal Enfield Himalayan", "Royal Enfield Continental GT 650", "Royal Enfield Continental GT 650", "Royal Enfield Interceptor 650"],
            "CFMoto":["CFMoto 150NK", "CFMoto 250NK", "CFMoto 400NK", "CFMoto 650MT", "CFMoto 650GT"],
        };
        
        var brandSelect = $('#brandSelect');
        var modelSelect = $('#modelSelect');
        
        brandSelect.append('<option value="">- Select Brand -</option>'); // add the "Select Brand" option
        // loop through each key in the data object and add it as an option in the brandSelect dropdown
        for (var brand in data) {
            brandSelect.append('<option value="' + brand + '">' + brand + '</option>');
        }
        
        // Set up the change event listener for the brand dropdown
        brandSelect.change(function() {
            modelSelect.empty(); // remove all existing options from the dropdown
            var selectedBrand = $(this).val(); // get the value of the selected brand
            var models = data[selectedBrand]; // get the corresponding models from the data object
        
            modelSelect.append('<option value="">- Select Model -</option>'); // add the "Select Model" option
            for (var i = 0; i < models.length; i++) {
                modelSelect.append('<option value="' + models[i] + '">' + models[i] + '</option>');
            }
        });

        // Display hide each Container start to #selectDecals
        $("#imageDecals").change(function(){
            const imageDecals = $(this).val();
            if(imageDecals != ""){
                $(".submitContainerDecals").show();
            }else{
                $(".submitContainerDecals").hide();
            }
        });

        $("#modelSelect").change(function(){
            const modelSelect = $(this).val();
            if(modelSelect != ""){
                $('#imageDecals').val('');
                $(".uploadImageContainerDecals").show();
            }else{
                $(".uploadImageContainerDecals").hide();
                $(".submitContainerDecals").hide();
            }
        });

        $("#brandSelect").change(function(){
            const brandSelect = $(this).val();
            if(brandSelect != ""){
                $(".selectContainerModel").show();
                $('#imageDecals').val('');
            }else{
                $(".selectContainerModel").hide();
                $(".uploadImageContainerDecals").hide();
                $(".submitContainerDecals").hide();
            }
        });
        
        $("#selectDecals").change(function(){
            const selectDecals = $(this).val();
            
            if(selectDecals != ""){
                $(".selectContainerBrand").show();
                $('#imageDecals').val('');
            }else{
                $(".selectContainerBrand").hide();
                $(".selectContainerModel").hide();
                $(".uploadImageContainerDecals").hide();
                $(".submitContainerDecals").hide();
            }
        });
        
    }
    // For Delete and Update Select Tag Display Sepecific Only
    function selectTagDisplayBrandAndModelFilter(){
        var data = {
            "Honda": ["Honda BeAT", "Honda Click", "Honda Genio", "Honda PCX", "Honda ADV150", "Honda CBR150R", "Honda CB150R", "Honda CB400X", "Honda CB650R", "Honda CB1000R", "Honda CRF150L", "Honda CRF250L", "Honda CRF300L", "Honda XR150L", "Honda Supra GTR150", "Honda TMX125 Alpha", "Honda Wave110 Alpha", "Honda XRM125 Motard", "Honda RS150R", "Honda Zoomer-X"],
            "Yamaha": ["Yamaha Mio i 125", "Yamaha Mio Soul i 125", "Yamaha Nmax", "Yamaha Aerox 155", "Yamaha Sniper 150", "Yamaha MT-15", "Yamaha R15", "Yamaha XSR155", "Yamaha Tracer 900", "Yamaha Super Tenere", "Yamaha YZF-R3", "Yamaha TFX 150", "Yamaha FZi", "Yamaha FZ16", "Yamaha SZ-R", "Yamaha XTZ125", "Yamaha YTX125", "Yamaha YBR125"],
            "Suzuki Philippines": ["Suzuki Raider J Crossover", "Suzuki Skydrive Fi", "Suzuki Address", "Suzuki Burgman Street", "Suzuki Gixxer FI", "Suzuki GSX-R150", "Suzuki SV650", "Suzuki V-Strom 1050XT", "Suzuki DR200S", "Suzuki RM-Z250", "Suzuki GSX-S750", "Suzuki GSX-S1000", "Suzuki SV650X", "Suzuki GSX-R1000R", "Suzuki Hayabusa"],
            "Kawasaki Motors": ["Kawasaki Ninja 400", "Kawasaki Z400", "Kawasaki Versys-X 300", "Kawasaki W800", "Kawasaki Z650", "Kawasaki Versys 650", "Kawasaki Ninja 650", "Kawasaki Z900", "Kawasaki Z900RS", "Kawasaki Ninja 1000SX", "Kawasaki Versys 1000", "Kawasaki Z H2", "Kawasaki Vulcan S", "Kawasaki KLX150L", "Kawasaki KLX300R"],
            "Kymco": ["Kymco Like 125", "Kymco Agility 125", "Kymco Super 8 150", "Kymco X-Town CT300i", "Kymco Xciting S 400i", "Kymco AK 550", "Kymco Like 150i ABS", "Kymco Like 200i", "Kymco X-Town 300i", "Kymco Like 150 R"],
            "Motorstar": ["Motorstar Nicess 110", "Motorstar Star-X 125 II", "Motorstar Star-X 155"],
            "TVS": ["TVS XL100", "TVS Rockz 125", "TVS Dazz Prime", "TVS Apache RTR 160", "TVS Apache RTR 180", "TVS Apache RTR 200", "TVS Apache RR 310"],
            "Royal Enfield": ["Royal Enfield Classic 350", "Royal Enfield Meteor 350", "Royal Enfield Himalayan", "Royal Enfield Continental GT 650", "Royal Enfield Continental GT 650", "Royal Enfield Interceptor 650"],
            "CFMoto":["CFMoto 150NK", "CFMoto 250NK", "CFMoto 400NK", "CFMoto 650MT", "CFMoto 650GT"],
        };
        
        var brandSelect = $('#brandSelectFilter');
        var modelSelect = $('#modelSelectFilter');
        
        brandSelect.append('<option value="">- Select Brand -</option>');
        for (var brand in data) {
            brandSelect.append('<option value="' + brand + '">' + brand + '</option>');
        }

        brandSelect.change(function() {
            modelSelect.empty();
            var selectedBrand = $(this).val();
            var models = data[selectedBrand];
            if (models) {
                modelSelect.append('<option value="">- Select Model -</option>');
                for (var i = 0; i < models.length; i++) {
                    modelSelect.append('<option value="' + models[i] + '">' + models[i] + '</option>');
                }
            }
        });

    }

    // Reset All Create
    function resetForm(){
        $("#createSuccessAlert").show();
        setTimeout(function() {
            $("#createSuccessAlert").hide(); // Show the element after 10 seconds
        }, 10000); // 10000 milliseconds = 10 seconds
        
        // Create select tag
        $('#selectDecals').val('');
        $('#brandSelect').val('');
        $('#modelSelect').empty();  // remove all existing options from the dropdown
        $('#imageDecals').val('');
        
        // Filters Update Delete Set Empty String 
        $("#decalSelectFilter").val('');
        $('#brandSelectFilter').val('');
        $('#modelSelectFilter').val('');

        $(".selectContainerBrand").hide();
        $(".selectContainerModel").hide();
        $(".uploadImageContainerDecals").hide();
        $(".submitContainerDecals").hide();

        $("#updateDisplayDecals").load("../../../../../g4stickerworks/asset/php/product-page/display/d-update-decals.php");
        $("#deleteDisplayDecals").load("../../../../../g4stickerworks/asset/php/product-page/display/d-delete-decals.php");
    }
});