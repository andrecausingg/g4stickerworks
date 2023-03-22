$(document).ready(function(){
    // Tarpaulin Container | Drop Down Nav | Mobile and Desktop
    $(".tarpaulinContainerUserProduct").click(function(){
        $(".tarpaulinContainerUserProduct").toggleClass("yot-active-bb-blue1");
        $(".tarpaulinNavLink").toggleClass("yot-tc-blue1");
        $(".rPmLContainer").toggle();

        if($(".faAngleRight").hasClass("fa-angle-right")){
            $(".faAngleRight").removeClass("fa-angle-right");
            $(".faAngleRight").addClass("fa-angle-down");
        }else{
            $(".faAngleRight").removeClass("fa-angle-down");
            $(".faAngleRight").addClass("fa-angle-right");
        }
    });

    // Order Container | Drop Down Nav
    $(".orderPageContainerOverView").click(function(){
        $(".orderPageContainerOverView").toggleClass("yot-active-bb-blue");
        $(".orderContainerOverView").toggle();

        if($(".faAngleRightOrder").hasClass("fa-angle-right")){
            $(".faAngleRightOrder").removeClass("fa-angle-right");
            $(".faAngleRightOrder").addClass("fa-angle-down");
        }else{
            $(".faAngleRightOrder").removeClass("fa-angle-down");
            $(".faAngleRightOrder").addClass("fa-angle-right");
        }
    });

    // Accounts Container | Drop Down Nav
    $(".accountPageContainerOverView").click(function(){
        $(".accountPageContainerOverView").toggleClass("yot-active-bb-blue");
        $(".AdEmUsContainerOverView").toggle();

        if($(".faAngleRight").hasClass("fa-angle-right")){
            $(".faAngleRight").removeClass("fa-angle-right");
            $(".faAngleRight").addClass("fa-angle-down");
        }else{
            $(".faAngleRight").removeClass("fa-angle-down");
            $(".faAngleRight").addClass("fa-angle-right");
        }
    });

    // Pages Container | Drop Down Nav
    $(".pagesPageContainerOverView").click(function(){
        $(".pagesPageContainerOverView").toggleClass("yot-active-bb-blue");
        $(".InPrSeGaContainerOverView").toggle();

        if($(".faAngleRightPages").hasClass("fa-angle-down")){
            $(".faAngleRightPages").removeClass("fa-angle-down");
            $(".faAngleRightPages").addClass("fa-angle-right");
        }else{
            $(".faAngleRightPages").removeClass("fa-angle-right");
            $(".faAngleRightPages").addClass("fa-angle-down");
        }
    });

    // Work Container | Drop Down Nav
    $(".workPageContainerOverView").click(function(){
        $(".workPageContainerOverView").toggleClass("yot-active-bb-blue");
        $(".jobContainerOverView").toggle();

        if($(".faAngleRightWork").hasClass("fa-angle-down")){
            $(".faAngleRightWork").removeClass("fa-angle-down");
            $(".faAngleRightWork").addClass("fa-angle-right");
        }else{
            $(".faAngleRightWork").removeClass("fa-angle-right");
            $(".faAngleRightWork").addClass("fa-angle-down");
        }
    });

    // Open Hamburger All Pages | Drop Down Nav
    $("#hamburgerIndex").click(function(){
        $("#hamburgerIndex").hide();
        $("#hamburgerCloseIndex").show();
        $("#overlayMobileBgIndex").show();
        $("#overlayMobileIndex").show();
        $('body').css('overflowY', 'hidden'); 
    });
    // Close Hamburger All Pages
    $("#hamburgerCloseIndex").click(function(){
        $("#hamburgerIndex").show();
        $("#hamburgerCloseIndex").hide();
        $("#overlayMobileBgIndex").hide();
        $("#overlayMobileIndex").hide();
        $('body').css('overflowY', 'auto'); 
    });
    
});