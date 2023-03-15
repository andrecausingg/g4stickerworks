$(document).ready(function () {
    // Retrieve the values from local storage
    var timeLeftLocalStorage = localStorage.getItem("timeLeft");
    var statusTimeLocalStorage = localStorage.getItem("statusTime");
    var emailLocalStorage = localStorage.getItem("email");
    var statusEmailLocalStorage = localStorage.getItem("statusEmail");

    if(emailLocalStorage != "" && statusEmailLocalStorage != ""){
        if(statusEmailLocalStorage == "sendingCode"){
            //ajax
            console.log("asdasd");
        }else{

        }
    }

    // Condition to click resend code btn
    if(statusTimeLocalStorage == "finish"){
        $("#resendCode").click(function () {
            $("#resendCode").prop("disabled", true);
            $("#resendCode").removeClass("yot-btn-blue1");
            $("#resendCode").addClass("yot-btn-dis");
            $("#count").text("30");
            $("#resendCodeAlert").show();
    
            var count = setInterval(function () {
            var timeLeft = parseInt($("#count").text()) - 1;
    
            localStorage.setItem("statusTime", "not");
            localStorage.setItem("timeLeft", timeLeft);
    
            $("#count").text(timeLeft);
    
            if (timeLeft === 0) {
                localStorage.setItem("statusTime", "finish");
                clearInterval(count);
                $("#resendCode").prop("disabled", false);
                $("#resendCode").removeClass("yot-btn-dis");
                $("#resendCode").addClass("yot-btn-blue1");
                $(".yot-tc-green").hide();
            }
            }, 1000); // 1000 milliseconds = 1 second
        });
    }else if(statusTimeLocalStorage == "not"){
        $("#resendCode").prop("disabled", true);
        $("#resendCode").removeClass("yot-btn-blue1");
        $("#resendCode").addClass("yot-btn-dis");
        $("#count").text(timeLeftLocalStorage);
        $("#resendCodeAlert").show();
    
        var count = setInterval(function () {
            var timeLeft = parseInt($("#count").text()) - 1;
            localStorage.setItem("timeLeft", timeLeft);
            $("#count").text(timeLeft);
    
            if (timeLeft === 0) {
                clearInterval(count);
                localStorage.setItem("statusTime", "finish");
                $("#resendCode").prop("disabled", false);
                $("#resendCode").removeClass("yot-btn-dis");
                $("#resendCode").addClass("yot-btn-blue1");
                $(".yot-tc-green").hide();
            }
        }, 1000); // 1000 milliseconds = 1 second
    }else{
        $("#resendCode").click(function () {
            $("#resendCode").prop("disabled", true);
            $("#resendCode").removeClass("yot-btn-blue1");
            $("#resendCode").addClass("yot-btn-dis");
            $("#count").text("30");
            $("#resendCodeAlert").show();
    
            var count = setInterval(function () {
            var timeLeft = parseInt($("#count").text()) - 1;
    
            localStorage.setItem("statusTime", "not");
            localStorage.setItem("timeLeft", timeLeft);
    
            $("#count").text(timeLeft);
    
            if (timeLeft === 0) {
                clearInterval(count);
                localStorage.setItem("statusTime", "finish");
                $("#resendCode").prop("disabled", false);
                $("#resendCode").removeClass("yot-btn-dis");
                $("#resendCode").addClass("yot-btn-blue1");
                $(".yot-tc-green").hide();
            }
            }, 1000); // 1000 milliseconds = 1 second
        });
    }

});
