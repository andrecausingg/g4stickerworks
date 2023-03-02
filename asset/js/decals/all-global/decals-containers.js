$(document).ready(function(){
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
        
        if(selectDecals == "fullDecals"){
            $("#decalsTitle").html("Full Decals");
            $("#decalsFilterBtn").show();
        }else if(selectDecals == "stockDecals"){
            $("#decalsTitle").html("Stock Decals");
            $("#decalsFilterBtn").show();
        }else if(selectDecals == "stickerMags"){
            $("#decalsTitle").html("Sticker Mags");
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
        
        if(selectDecals == ""){
            $("#decalsTitle").html("All Decals");
            $("#decalsFilterBtn").hide();
        }else if(selectDecals == "fullDecals"){
            $("#decalsTitle").html("Full Decals");
            $("#decalsFilterBtn").show();
        }else if(selectDecals == "stockDecals"){
            $("#decalsTitle").html("Stock Decals");
            $("#decalsFilterBtn").show();
        }else if(selectDecals == "stickerMags"){
            $("#decalsTitle").html("Sticker Mags");
            $("#decalsFilterBtn").show();
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