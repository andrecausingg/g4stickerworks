$(document).ready(function(){
    $(document).on("change", ".changeStatusOrder", function(){
        var id = $(this).attr("data-id");
        var val = $(this).val();
        if(id != "" && val != ""){
            $.ajax({
                url: '../../../../g4stickerworks/asset/php/orders-tarpauline/update.php',
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
        $("#displayOrderTarpauline").load("../../../../../g4stickerworks/asset/php/orders-tarpauline/display/d-data.php");
        $(".displayNotPaid").load("../../../../../g4stickerworks/asset/php/orders-tarpauline/display/d-not-paid.php");
        $(".displayPending").load("../../../../../g4stickerworks/asset/php/orders-tarpauline/display/d-pending.php");
        $(".displayVerified").load("../../../../../g4stickerworks/asset/php/orders-tarpauline/display/d-verified.php");
        $(".displayReject").load("../../../../../g4stickerworks/asset/php/orders-tarpauline/display/d-reject.php");
        $(".displayReady").load("../../../../../g4stickerworks/asset/php/orders-tarpauline/display/d-ready.php");
        $(".displayDone").load("../../../../../g4stickerworks/asset/php/orders-tarpauline/display/d-done.php");
    }
});