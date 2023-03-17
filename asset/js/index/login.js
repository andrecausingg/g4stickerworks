$(document).ready(function () {
    $('#logInForm').submit(function(e){
        e.preventDefault();

        var loginEmail = $('#emailLogIn').val().trim();
        var logInPassword = $('#passwordLogIn').val().trim();

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

    // Show Password Log In
    $('#showPasswordLogIn').click(function() {
        var passwordInput = $('#passwordLogIn');
        var icon = $(this);
        
        if (passwordInput.attr('type') === 'password') {
            passwordInput.attr('type', 'text');
            icon.toggleClass('fa-eye-slash fa-eye');
        } else {
            passwordInput.attr('type', 'password');
            icon.toggleClass('fa-eye fa-eye-slash');
        }
    });

    // Show Confirm Password Sign Up
    $('#showConfirmPasswordLogIn').click(function() {
        var passwordInput = $('#confirmPasswordLogIn');
        var icon = $(this);
        
        if (passwordInput.attr('type') === 'password') {
            passwordInput.attr('type', 'text');
            icon.toggleClass('fa-eye-slash fa-eye');
        } else {
            passwordInput.attr('type', 'password');
            icon.toggleClass('fa-eye fa-eye-slash');
        }
    });
});
