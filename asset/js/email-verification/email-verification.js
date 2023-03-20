$(document).ready(function (){
    checkIfTimeLeftResend();

    // Form
    $('#emailVerificationForm').submit(function(e){
        e.preventDefault();

        var verificationCode = $("#verificationCode").val().trim();

        $("#submitDisEmailVerContainer").show();
        $("#submitEmailVerContainer").hide();

        // send the form data to the server with AJAX
        $.ajax({
            type: "POST", // use the POST method
            url: "../../../../g4stickerworks/asset/php/email-verification/email-verification.php", // replace with the URL of your form processing script
            data: { 
                verificationCode: verificationCode,
            }, // send the Content field value as data
            success: function(response){
                console.log(response);      
                var responseVarChar = response.trim();     
                
                if(responseVarChar == "verified"){
                    $("#successEmailVerifiedContainer").show();
                    $("#emailVerificationFormContainer").hide();
                }else{
                    $("#submitDisEmailVerContainer").hide();
                    $("#submitEmailVerContainer").show();
                    $("#verificationCodeErr").show();
                }
                
                // do something with the server response (e.g. show a success message)
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.error("Form submission failed: " + textStatus, errorThrown); // log error message to the console
                // do something to handle the error (e.g. display an error message to the user)
            }
        });
    });

    $("#resendCode").click(function(){
        // send the form data to the server with AJAX
        $.ajax({
            type: "POST", // use the POST method
            url: "../../../../g4stickerworks/asset/php/email-verification/resend-verification-code.php", // replace with the URL of your form processing script
            data: { 
                sendCodeNow: "sendCodeNow"
            }, // send the Content field value as data
            success: function(response){
                var responseVarChar = response.trim();     
                
                // do something with the server response (e.g. show a success message)
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.error("Form submission failed: " + textStatus, errorThrown); // log error message to the console
                // do something to handle the error (e.g. display an error message to the user)
            }
        });

        $("#count").text("30");
        $("#resendCode").prop("disabled", true);
        $("#resendCode").removeClass("yot-btn-blue1");
        $("#resendCode").addClass("yot-btn-dis");
        $("#resendCodeAlert").show();

        var count = setInterval(function () {
            var timeLeft = parseInt($("#count").text()) - 1;

            $("#count").text(timeLeft);

            localStorage.setItem("timeLeft", timeLeft);
    
            if (timeLeft === 0) {
                localStorage.setItem("timeLeft", timeLeft);
                clearInterval(count);
                $("#resendCode").prop("disabled", false);
                $("#resendCode").removeClass("yot-btn-dis");
                $("#resendCode").addClass("yot-btn-blue1");
                $(".yot-tc-green").hide();
            }
        }, 1000); // 1000 milliseconds = 1 second
    });

    // Allow Number 
    $("#verificationCode").click(function(event){
        if (event.which < 48 || event.which > 57) {
            event.preventDefault();
        }
    });

    $("#loginNav").click(function(){
        window.location.href = '../../../../g4stickerworks/index';  
    });

    function checkIfTimeLeftResend(){
        var timeLeftLocalStorage = localStorage.getItem("timeLeft");

        if(timeLeftLocalStorage == null){
            localStorage.setItem("timeLeft", 30);
        }else if(timeLeftLocalStorage < 30){
            $("#count").text(timeLeftLocalStorage);
            $("#resendCode").prop("disabled", true);
            $("#resendCode").removeClass("yot-btn-blue1");
            $("#resendCode").addClass("yot-btn-dis");
            $("#resendCodeAlert").show();
            
            var count = setInterval(function () {
                var timeLeft = parseInt($("#count").text()) - 1;
                if(isNaN(timeLeft)) {
                    clearInterval(count);
                    return;
                }
        
                $("#count").text(timeLeft);
        
                localStorage.setItem("timeLeft", timeLeft);
        
                if (timeLeft === 0) {
                    clearInterval(count);
                    $("#resendCode").prop("disabled", false);
                    $("#resendCode").removeClass("yot-btn-dis");
                    $("#resendCode").addClass("yot-btn-blue1");
                    $(".yot-tc-green").hide();
                }
            }, 1000); // 1000 milliseconds = 1 second
        }else{
            localStorage.setItem("timeLeft", 30);
        }
    }
});
