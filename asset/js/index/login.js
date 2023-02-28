$(document).ready(function () {
    $('#formLogIn').submit(function(e){
        e.preventDefault();

        var loginEmail = $('.loginEmail').val();
        var logInPassword = $('.logInPassword').val();

        $.ajax({
            url: '../../../../neydra2/assets/php/index/login',
            type: 'POST',
            data: { 
                email: loginEmail,
                password: logInPassword,
            },
            success: function (data){
                console.log(data);
                var dataVar = data.trim();
                if(dataVar == 'AccountNotFound'){
                    $('.errAccountNotFound').show();
                }else if(dataVar == 'EmailorPasswordIsIncorrect'){
                    $('.errEmailOrPassword').show();
                }else if(dataVar == 'Verified'){
                    window.location.href = 'global-wall';
                }
            }
        })
    });
});
