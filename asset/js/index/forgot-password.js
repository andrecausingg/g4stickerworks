$(document).ready(function () {
    $('#forgotPasswordForm').submit(function(e){
        e.preventDefault();

        var emailForgotPassword = $('#emailForgotPassword').val().trim();

        if(emailForgotPassword != ""){
            $("#forgotPasswordDisSubmitContainer").show();
            $("#forgotPasswordSubmitContainer").hide();

            $.ajax({
                url: '../../../../g4stickerworks/asset/php/index/forgot-password.php',
                type: 'POST',
                data: { 
                    email: emailForgotPassword,
                },
                success: function (response){
                    var responseVarChar = response.trim();
                    if(responseVarChar == "sent"){
                        $("#emailForgotPassword").val("");
                        $("#emailDoesntExist").hide();
                        $("#sentVerificationKeyAlert").show();
                        setTimeout(function() {
                            $("#sentVerificationKeyAlert").hide(); // Show the element after 10 seconds
                        }, 10000); // 10000 milliseconds = 10 seconds
                        $('#emailForgotPassword').css('border-color', 'hsl(207, 90%, 54%)');
                        $("#forgotPasswordDisSubmitContainer").hide();
                        $("#forgotPasswordSubmitContainer").show();
                    }else if(responseVarChar == "accountNotFound"){
                        $("#emailDoesntExist").show();
                        $('#emailForgotPassword').css('border-color', 'hsl(4, 95%, 56%)');
                        $("#forgotPasswordDisSubmitContainer").hide();
                        $("#forgotPasswordSubmitContainer").show();
                    }
                }
            })
        }
    });
});
