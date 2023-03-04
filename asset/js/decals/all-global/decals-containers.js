$(document).ready(function(){
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
    
    // loop through each key in the data object and add it as an option in the brandSelect dropdown
    for (var brand in data) {
        brandSelect.append('<option value="' + brand + '">' + brand + '</option>');
    }
    
    // Set up the change event listener for the brand dropdown
    brandSelect.change(function() {
        $("#modelContainer").show();
        modelSelect.empty(); // remove all existing options from the dropdown
        var selectedBrand = $(this).val(); // get the value of the selected brand
        var models = data[selectedBrand]; // get the corresponding models from the data object

        modelSelect.append('<option value="-1">- Select Model -</option>'); // add the "Select Model" option
        for (var i = 0; i < models.length; i++) {
            modelSelect.append('<option value="' + models[i] + '">' + models[i] + '</option>');
        }
    });


    // Show Motorcylce after select on Select Brand
    $("#yamahaMotorCylceSelect").change(function(){
        const yamahaMotorCylceSelect = $(this).val();

        if(yamahaMotorCylceSelect == "Mio i 125"){
            $("#motorCycleTitle").html("Motor Cycle: " + yamahaMotorCylceSelect)
            $("#yamahaMioI125").show();
            $("#allDecalsProduct").hide();
        }else if(yamahaMotorCylceSelect == "Mio Aerox V1 & V2"){
            $("#motorCycleTitle").html("Motor Cycle: " + yamahaMotorCylceSelect)
        }else if(yamahaMotorCylceSelect == "Mio Soul i 125"){
            $("#motorCycleTitle").html("Motor Cycle: " + yamahaMotorCylceSelect)
        }else if(yamahaMotorCylceSelect == "Mio Sporty"){
            $("#motorCycleTitle").html("Motor Cycle: " + yamahaMotorCylceSelect)
        }else if(yamahaMotorCylceSelect == "Sniper"){
            $("#motorCycleTitle").html("Motor Cycle: " + yamahaMotorCylceSelect)
        }else if(yamahaMotorCylceSelect == "Nmax"){
            $("#motorCycleTitle").html("Motor Cycle: " + yamahaMotorCylceSelect)
        }
    });
    
    // Show Motorcylce after select on Select Brand
    $("#brandSelect").change(function(){
        const brandSelect = $(this).val();
        
        if(brandSelect == "yamaha"){
            $("#yamahaMotorCycleContainer").show();
            $("#brandTitleDecals").html("Brand: Yamaha")
        }else if(brandSelect == "honda"){
            $("#hondaMotorCycleContainer").show();
            $("#brandTitleDecals").html("Brand: Honda")
        }else{
            $("#yamahaMotorCycleContainer").hide();
            $("#hondaMotorCycleContainer").hide();
        }

    });
    
    // Show Filter Btn and Change the name of the title
    $("#selectDecals").change(function(){
        const selectDecals = $(this).val();
        
        if(selectDecals == "Full Decals"){
            $("#decalsTitle").html(selectDecals);
            $("#decalsFilterBtn").show();
        }else if(selectDecals == "Stock Decals"){
            $("#decalsTitle").html(selectDecals);
            $("#decalsFilterBtn").show();
        }else if(selectDecals == "Sticker Mags"){
            $("#decalsTitle").html(selectDecals);
            $("#decalsFilterBtn").show();
        }else{
            $("#decalsTitle").html("All Decals");
            $("#decalsFilterBtn").hide();
            $("#brandAndMotorCycleTitle").hide();
        }
        
    });

    // Show Filter Btn
    $("#selectDecals").change(function(){
        const selectDecals = $(this).val();

        if(selectDecals == "Full Decals"){
            $("#decalsTitle").html("Full Decals");
            $("#decalsFilterBtn").show();
        }else if(selectDecals == "Stock Decals"){
            $("#decalsTitle").html("Stock Decals");
            $("#decalsFilterBtn").show();
        }else if(selectDecals == "Sticker Mags"){
            $("#decalsTitle").html("Sticker Mags");
            $("#decalsFilterBtn").show();
        }else{
            $("#decalsTitle").html("All Decals");
            $("#decalsFilterBtn").hide();
        }
        
    });

    // Show Filter Container
    $("#decalsFilterBtn").click(function(){
        $("#filterBgContainer").show();
        $("#filterContainer").show();
    });

    // Close Filter Container
    $("#filterContainerCloseIcon").click(function(){
        $("#filterBgContainer").hide();
        $("#filterContainer").hide();
    });
    
});