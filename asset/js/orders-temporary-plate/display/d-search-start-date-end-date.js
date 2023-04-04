$(document).ready(function(){
    // Search | Start Date | End Date
    $('#search, #startDate, #endDate, #filterStatusOrder').on('keyup change', function(){
        var search = $('#search').val().trim();
        var startDate = $('#startDate').val().trim();
        var endDate = $('#endDate').val().trim();
        var filterStatusOrder = $("#filterStatusOrder").val().trim();

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
            url: '../../../../../g4stickerworks/asset/php/orders-temporary-plate/display/d-start-date-end-date-search.php',
            type: 'POST',
            data: { 
                search: search,
                startDate: startFormattedDate,
                endDate: endFormattedDate,
                filterStatusOrder: filterStatusOrder,
            },
            success: function (data){
                $("#displayOrderTemporaryPlate").html(data);
            }
        })
    });
});