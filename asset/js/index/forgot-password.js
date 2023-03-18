$(document).ready(function () {
    $('#forgotPasswordForm').submit(function(e){
        e.preventDefault();

        var emailForgotPassword = $('#emailForgotPassword').val().trim();
        console.log(emailForgotPassword);

        $.ajax({
            url: '../../../../g4stickerworks/asset/php/forgot-password.php',
            type: 'POST',
            data: { 
                email: emailForgotPassword,
            },
            success: function (response){
                console.log(response);
                var responseVarChar = response.trim();
                
            }
        })
    });
});
