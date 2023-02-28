$(document).ready(function(){
    // Search | Start Date | End Date
    $('#search, #startDate, #endDate').on('keyup change', function(){
        var search = $('#search').val().trim();
        var startDate = $('#startDate').val().trim();
        var endDate = $('#endDate').val().trim();

        var startDateParts = startDate.split('/');
        var startYear = startDateParts[2];
        var startMonth = startDateParts[0];
        var startDay = startDateParts[1];
        var startFormattedDate = startYear + '-' + startMonth + '-' + startDay;

        var endDateParts = endDate.split('/');
        var endYear = endDateParts[2];
        var endMonth = endDateParts[0];
        var endDay = endDateParts[1];
        var endFormattedDate = endYear + '-' + endMonth + '-' + endDay;
        
        $.ajax({
            url: '../../../../web-code/asset/php/cut-file/display/d-start-date-end-date-search.php',
            type: 'POST',
            data: { 
                search: search,
                startDate: startFormattedDate,
                endDate: endFormattedDate,
            },
            success: function (data){
                $("#displayCutFile").html(data);
            }
        })
    });

    // Create 
    $('#createFormCutFile').submit(function(e){
        e.preventDefault();

        const jobName = $('#jobName').val().trim();
        const jobNum = $('#jobNum').val().trim();

        $.ajax({
            url: '../../../../web-code/asset/php/cut-file/cut-file.php',
            type: 'POST',
            data: { 
                jobName: jobName,
                jobNum: jobNum,
            },
            success: function (data){
                console.log(data);
                var dataVar = data.trim();
                if(dataVar == "insert"){
                    $("#createFormCutFile").trigger("reset");
                    $("#deleteAlertCutFile").hide();
                    $("#successEditAlertCutFile").hide();
                    $("#successAlertCutFile").show();

                    setTimeout(function() {
                        $("#successAlertCutFile").hide(); // Show the element after 10 seconds
                    }, 10000); // 10000 milliseconds = 10 seconds

                    // Display The Data of Cut File
                    $("#displayCutFile").load("../../../../../web-code/asset/php/cut-file/display/d-cut-file.php");
                    // Display the total of Cut file
                    $("#totalCutFile").load("../../../../../web-code/asset/php/cut-file/display/d-total.php");
                }
            }
        })
    });

    // Edit  
    $(document).on("submit", "#editFormCutFile", function(e){
        e.preventDefault();

        const idEdit = $('#idEdit').val().trim();
        const jobNameEdit = $('#jobNameEdit').val().trim();
        const jobNumEdit = $('#jobNumEdit').val().trim();

        $.ajax({
            url: '../../../../web-code/asset/php/cut-file/edit.php',
            type: 'POST',
            data: { 
                id: idEdit,
                jobNameEdit: jobNameEdit,
                jobNumEdit: jobNumEdit,
            },
            success: function (data){
                var dataVar = data.trim();

                if(dataVar == "edited"){
                    $("#bgEditContainer").hide();
                    $("#editFormContainerCutFile").hide();
                    $("#successAlertCutFile").hide();
                    $("#deleteAlertCutFile").hide();
                    $("#successEditAlertCutFile").show();

                    setTimeout(function() {
                        $("#successEditAlertCutFile").hide(); // Show the element after 10 seconds
                    }, 10000); // 10000 milliseconds = 10 seconds
                    // Display The Data of Cut File
                    $("#displayCutFile").load("../../../../../web-code/asset/php/cut-file/display/d-cut-file.php");
                    // Display the total of Cut file
                    $("#totalCutFile").load("../../../../../web-code/asset/php/cut-file/display/d-total.php");
                }
            }
        })
    });

    // Delete
    $(document).on("click", "#ConfirmDeleteCutFile", function(){
        const id = $("#id").val().trim();

        $.ajax({
            url: '../../../../web-code/asset/php/cut-file/delete.php',
            type: 'POST',
            data: { 
                id: id,
            },
            success: function (data){
                const dataVar = data;
                if(dataVar == "deleted"){
                    $(".deleteBgContainer").hide();
                    $(".deleteFormContainerCutFile").hide();
                    $("#successAlertCutFile").hide();
                    $("#successEditAlertCutFile").hide();
                    $("#deleteAlertCutFile").show();

                    setTimeout(function() {
                        $("#deleteAlertCutFile").hide(); // Show the element after 10 seconds
                    }, 10000); // 10000 milliseconds = 10 seconds

                    // Display The Data of Cut File
                    $("#displayCutFile").load("../../../../../web-code/asset/php/cut-file/display/d-cut-file.php");
                    // Display the total of Cut file
                    $("#totalCutFile").load("../../../../../web-code/asset/php/cut-file/display/d-total.php");
                }
            }
        })
    });

    // Display Form Create 
    $("#createBtnCutFile").click(function(){
        $("#bgCreateContainer").show();
        $("#createFormContainerCutFile").show();
        $('body').css('overflow', 'hidden'); 
    });

    // Display Edit Form
    $(document).on("click", ".editIcon", function() {
        $('body').css('overflow', 'hidden'); 
        const id = $(this).attr("data-id").trim();
        
        $.ajax({
            url: '../../../../web-code/asset/php/cut-file/display/d-edit-container.php',
            type: 'POST',
            data: { 
                id: id,
            },
            success: function (data){
                $(".displayEditContainerCutFile").html(data); 
            }
        })
    });

    // Display Delete Form
    $(document).on("click", ".deleteIcon", function() {
        $('body').css('overflow', 'hidden'); 
        const id = $(this).attr("data-id").trim();

        $.ajax({
            url: '../../../../web-code/asset/php/cut-file/display/d-delete-container.php',
            type: 'POST',
            data: { 
                id: id,
            },
            success: function (data){
                $(".displayDeleteContainerCutFile").html(data);  
            }
        })
    });

    // Hide Form Create 
    $("#closeCutFileFormIcon").click(function(){
        $("#bgCreateContainer").hide();
        $("#createFormContainerCutFile").hide();
        $('body').css('overflow', 'auto'); 
    });

    // Hide Edit Form 
    $(document).on("click", "#closeCutFileFormIconEdit", function() {
        $("#bgEditContainer").hide();
        $("#editFormContainerCutFile").hide();
        $('body').css('overflow', 'auto'); 
    });

    // Hide Display Delete Form 
    $(document).on("click", "#cancelDeleteCutFile", function() {
        $(".deleteBgContainer").hide();
        $(".deleteFormContainerCutFile").hide();
        $('body').css('overflow', 'auto'); 
    });

    // Allow Number Only Create
    $("#jobNum").click(function(event){
        if (event.which < 48 || event.which > 57) {
            event.preventDefault();
        }
    });

    // Allow Number Only Edit
    $(document).on('keypress', '#jobNumEdit', function(event) {
        if (event.which < 48 || event.which > 57) {
            event.preventDefault();
        }
    });

    // Hide Alert Success Container
    $("#successAlertCutFileCloseIcon").click(function(){
        $("#successAlertCutFile").hide();
    });

    // Hide Alert Delete Container.
    $(document).on("click", "#successDeleteCutFileCloseIcon", function(){
        $("#deleteAlertCutFile").hide();
    });

    // Hide Alert Edit Container.
    $(document).on("click", "#successEditAlertCutFileCloseIcon", function(){
        $("#successEditAlertCutFile").hide();
    });
});