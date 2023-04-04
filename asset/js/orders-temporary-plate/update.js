$(document).ready(function(){
    $(document).on("change", ".changeStatusOrder", function(){
        var id = $(this).attr("data-id");
        var val = $(this).val();
        if(id != "" && val != ""){
            $.ajax({
                url: '../../../../g4stickerworks/asset/php/orders-temporary-plate/update.php',
                type: 'POST',
                data: { 
                    id: id,
                    val: val,
                },
                success: function (data){
                    console.log(data);
                    var dataVar = data.trim();
                    if(dataVar == "updated"){
                        loadDiv();
                    }
                }
            });
        }
    });

    function loadDiv(){
        $("#displayOrderTemporaryPlate").load("../../../../../g4stickerworks/asset/php/orders-temporary-plate/display/d-data.php");
        $(".displayNotPaid").load("../../../../../g4stickerworks/asset/php/orders-temporary-plate/display/d-not-paid.php");
        $(".displayPending").load("../../../../../g4stickerworks/asset/php/orders-temporary-plate/display/d-pending.php");
        $(".displayVerified").load("../../../../../g4stickerworks/asset/php/orders-temporary-plate/display/d-verified.php");
        $(".displayReject").load("../../../../../g4stickerworks/asset/php/orders-temporary-plate/display/d-reject.php");
        $(".displayReady").load("../../../../../g4stickerworks/asset/php/orders-temporary-plate/display/d-ready.php");
        $(".displayDone").load("../../../../../g4stickerworks/asset/php/orders-temporary-plate/display/d-done.php");
    }
});