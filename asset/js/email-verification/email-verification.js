$(document).ready(function () {
    // Retrieve the values from local storage
    var timeLeftLocalStorage = localStorage.getItem("timeLeft");
    var statusTimeLocalStorage = localStorage.getItem("statusTime");
    var emailLocalStorage = localStorage.getItem("email");
    var statusEmailLocalStorage = localStorage.getItem("statusEmail");

    if (!emailLocalStorage || !statusEmailLocalStorage){
        if(statusEmailLocalStorage == "sendingCode"){
            // send the form data to the server with AJAX
            $.ajax({
                type: "POST", // use the POST method
                url: "../../../../g4stickerworks/asset/php/index/signup-send-verification-code.php", // replace with the URL of your form processing script
                data: { 
                    email: email,
                }, // send the Content field value as data
                success: function(response){
                    console.log(response);
                    var responseVarChar = response.trim();   
                    
                    if(responseVarChar == "emailNotExist"){
                        window.location.href = '../../../../g4stickerworks/404';
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.error("Form submission failed: " + textStatus, errorThrown); // log error message to the console
                    // do something to handle the error (e.g. display an error message to the user)
                }
            });
        }else{
            // ID on form signUp
            $('#signUpForm').submit(function(e){
                e.preventDefault();

                $("#submitDisSignUpBtn").show();
                $("#submitSignUpBtn").hide();

                // send the form data to the server with AJAX
                $.ajax({
                    type: "POST", // use the POST method
                    url: "../../../../g4stickerworks/asset/php/index/signup.php", // replace with the URL of your form processing script
                    data: { 
                        email: email,
                        password: password
                    }, // send the Content field value as data
                    success: function(response){
                        var responseVarChar = response.trim();                
                        if(responseVarChar == "emailExist"){
                            $("#submitDisSignUpBtn").hide();
                            $("#submitSignUpBtn").show();
                            $("#existEmailErrSignUp").show();
                            $('#emailSignUp').val("").css('border-color', 'hsl(4, 95%, 56%)');
                        }else if(responseVarChar == "sendingCode"){
                            localStorage.setItem("email", email);
                            localStorage.setItem("statusEmail", "sendingCode");
                            window.location.href = '../../../../g4stickerworks/email-verification';
                        }else{
                            localStorage.setItem("email", email);
                            localStorage.setItem("statusEmail", "notSendingCode");
                            window.location.href = '../../../../g4stickerworks/email-verification';
                        }
                        // do something with the server response (e.g. show a success message)
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.error("Form submission failed: " + textStatus, errorThrown); // log error message to the console
                        // do something to handle the error (e.g. display an error message to the user)
                    }
                });
            });
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
