$(document).ready(function () {
    $('#logInForm').submit(function(e){
        e.preventDefault();

        var loginEmail = $('#emailLogIn').val().trim();

        $.ajax({
            url: '../../../../g4stickerworks/asset/php/index/login.php',
            type: 'POST',
            data: { 
                email: loginEmail,
                password: logInPassword,
            },
            success: function (response){
                var responseVarChar = response.trim();
                if(responseVarChar == 'accountNotFound'){
                    $('#accountNotFoundErr').show();
                }else if(responseVarChar == 'emailorPasswordIsIncorrect'){
                    $('#emailOrPassIncorrectErr').show();
                }else if(responseVarChar == "newUser"){
                    window.location.href = '../../../../g4stickerworks/new-user';
                }else{
                    window.location.href = '../../../../g4stickerworks/user-product';
                }
            }
        })
    });
});
