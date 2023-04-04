$(document).ready(function(){
    $(document).on("change", ".changeStatusOrder", function(){
        var id = $(this).attr("data-id");
        var val = $(this).val();
        if(id != "" && val != ""){
            $.ajax({
                url: '../../../../g4stickerworks/asset/php/orders-product/update.php',
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
        $("#displayProduct").load("../../../../../g4stickerworks/asset/php/orders-product/display/d-data.php");

        $(".displayNotPaid").load("../../../../../g4stickerworks/asset/php/orders-product/display/d-not-paid.php");
        $(".displayPending").load("../../../../../g4stickerworks/asset/php/orders-product/display/d-pending.php");
        $(".displayVerified").load("../../../../../g4stickerworks/asset/php/orders-product/display/d-verified.php");
        $(".displayReject").load("../../../../../g4stickerworks/asset/php/orders-product/display/d-reject.php");
        $(".displayReady").load("../../../../../g4stickerworks/asset/php/orders-product/display/d-ready.php");
        $(".displayDone").load("../../../../../g4stickerworks/asset/php/orders-product/display/d-done.php");
    }
});