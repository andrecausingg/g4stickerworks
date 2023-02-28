$(document).ready(function(){
    // Delete
    $(document).on("click", "#confirmDelete", function(){
        const id = $("#id").val().trim();

        $.ajax({
            url: '../../../../web-code/asset/php/admin-accounts/delete.php',
            type: 'POST',
            data: { 
                id: id,
            },
            success: function (data){
                const dataVar = data;
                if(dataVar == "deleted"){
                    $("#deleteBgContainer").hide();
                    $("#deleteFormContainer").hide();
                    $("#successAlertInsert").hide();
                    $("#successAlertEdit").hide();
                    $("#successAlertDelete").show();

                    setTimeout(function() {
                        $("#successAlertDelete").hide(); // Show the element after 10 seconds
                    }, 10000); // 10000 milliseconds = 10 seconds

                    // Display Data
                    $("#displayDataTable").load("../../../../../web-code/asset/php/admin-accounts/display/d-admin-accounts.php");
                    // Display Total
                    $("#totalAdminAccounts").load("../../../../../web-code/asset/php/admin-accounts/display/d-total.php");
                }
            }
        })
    });

    // Display Delete Form
    $(document).on("click", ".deleteIcon", function() {
        $('body').css('overflow', 'hidden'); 
        const id = $(this).attr("data-id").trim();

        $.ajax({
            url: '../../../../web-code/asset/php/admin-accounts/display/d-delete-container.php',
            type: 'POST',
            data: { 
                id: id,
            },
            success: function (data){
                $(".displayContainerDelete").html(data);  
            }
        })
    });
    
    // Hide Alert Delete Container.
    $(document).on("click", "#successAlertCloseIconDelete", function(){
        $("#successAlertDelete").hide();
    });

    // Hide Display Delete Form 
    $(document).on("click", "#cancelDelete", function() {
        $("#deleteBgContainer").hide();
        $("#deleteFormContainer").hide();
        $('body').css('overflow', 'auto'); 
    });
});