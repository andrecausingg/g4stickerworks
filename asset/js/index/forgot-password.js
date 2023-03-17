$(document).ready(function () {
    $('#forgotPasswordForm').submit(function(e){
        e.preventDefault();

        var emailForgotPassword = $('#emailForgotPassword').val().trim();
        console.log("xzczxc");

        $.ajax({
            url: '../../../../g4stickerworks/asset/php/index/login.php',
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
