$(document).ready(function(){
    // Edit  
    $(document).on("submit", "#editFormAdminAccounts", function(e){
        e.preventDefault();

        const idEdit = $('#idEdit').val().trim();
        const emailEdit = $('#emailEdit').val().trim();
        const passwordNewEdit = $('#passwordNewEdit').val().trim();


        if(idEdit != "" && emailEdit != "" && passwordNewEdit != ""){
            $.ajax({
                url: '../../../../g4stickerworks/asset/php/admin-accounts/edit.php',
                type: 'POST',
                data: { 
                    id: idEdit,
                    email: emailEdit,
                    password: passwordNewEdit,
                },
                success: function (data){
                    console.log(data);
                    var dataVar = data.trim();
    
                    if(dataVar == "edited"){
                        $("#editbgContainer").hide();
                        $("#editformContainer").hide();

                        $("#successAlertInsert").hide();
                        $("#successAlertDelete").hide();
                        $("#successAlertEdit").show();
    
                        setTimeout(function() {
                            $("#successAlertEdit").hide(); // Show the element after 10 seconds
                        }, 10000); // 10000 milliseconds = 10 seconds

                        // Display Data
                        $("#displayDataTable").load("../../../../../g4stickerworks/asset/php/user-accounts/display/d-user-accounts.php");
                        // Display Total
                        $("#totalAdminAccounts").load("../../../../../g4stickerworks/asset/php/user-accounts/display/d-total.php");
                    }
                }
            })
        }
    });

    // Display Edit Form
    $(document).on("click", ".editIcon", function() {
        $('body').css('overflow', 'hidden'); 
        const id = $(this).attr("data-id").trim();

        $.ajax({
            url: '../../../../g4stickerworks/asset/php/admin-accounts/display/d-edit-container.php',
            type: 'POST',
            data: { 
                id: id,
            },
            success: function (data){
                $(".displayContainerEdit").html(data); 
            }
        })
    });

    // Hide Alert Edit Container.
    $(document).on("click", "#successAlertCloseIconEdit", function(){
        $("#successAlertEdit").hide();
    });

    // Hide Edit Form 
    $(document).on("click", "#editCloseFormIcon", function() {
        $("#editbgContainer").hide();
        $("#editformContainer").hide();
        $('body').css('overflow', 'auto'); 
    });

    // Hide / Show password Old
    $(document).on("click", "#showPasswordOld", function() {
        var passwordInput = $('#passwordOld');
        var icon = $(this);
        
        if (passwordInput.attr('type') === 'password') {
            passwordInput.attr('type', 'text');
            icon.toggleClass('fa-eye-slash fa-eye');
        } else {
            passwordInput.attr('type', 'password');
            icon.toggleClass('fa-eye fa-eye-slash');
        }
    });

    // Hide / Show password New
    $(document).on("click", "#showPasswordNew", function() {
        var passwordInput = $('#passwordNewEdit');
        var icon = $(this);
        
        if (passwordInput.attr('type') === 'password') {
            passwordInput.attr('type', 'text');
            icon.toggleClass('fa-eye-slash fa-eye');
        } else {
            passwordInput.attr('type', 'password');
            icon.toggleClass('fa-eye fa-eye-slash');
        }
    });

    // // Validation
    $(document).on('keyup', '#emailEdit', validateFieldsEmail);
    // $(document).on('keyup', '#passwordOldEdit', validateFieldsPasswordOld);
    // $(document).on('keyup', '#passwordNewEdit', validateFieldsPasswordNew);

    // // Function validate Email
    function validateFieldsEmail(){
        var email = $('#emailEdit').val().trim();
        var trustedDomains = ['gmail.com', 'yahoo.com', 'outlook.com', 'aol.com', 'triots.com'];

        if(!validateEmail(email)){
            $('#emailInvalidErrEdit').show();
            $('#emailEdit').css('border-color', 'hsl(4, 95%, 56%)');
        }
        
        if(!validateEmailDomain(email)){
            $('#emailDomainEmailErrEdit').show();
            $('#emailEdit').css('border-color', 'hsl(4, 95%, 56%)');
        }
        
        if (email == ''){
            $('#emailEmptyErrEdit').show();
            $('#emailEdit').css('border-color', 'hsl(4, 95%, 56%)');
        }

        if(validateEmail(email) && validateEmailDomain(email) && email != '' && $("#emailExistErr").css("display") === "none"){
            $('#emailEmptyErrEdit, #emailInvalidErrEdit, #emailDomainEmailErrEdit, #emailExistErr').hide();
            $('#emailEdit').css('border-color', 'hsl(122, 39%, 49%)');
        }

        // Invalid Function
        function validateEmail(email) {
            var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            return regex.test(email);
        }

        // Trusted Domain Only
        function validateEmailDomain(email) {
            var domain = email.split('@')[1];
            return trustedDomains.includes(domain);
        }
    }

    // // Function validate Password Old
    // function validateFieldsPasswordOld(){
    //     var password = $('#passwordOldEdit').val().trim();
    //     if (password == ''){
    //         $('#passwordEmptyErrOldEdit').show();
    //         $('#passwordOldEdit').css('border-color', 'hsl(4, 95%, 56%)');
    //     }
        
    //     if (password.length < 8) {
    //         $('#passwordMin8ErrOldEdit').show();
    //         $('#passwordOldEdit').css('border-color', 'hsl(4, 95%, 56%)');
    //     }
        
    //     if(password != '' && password.length > 8){
    //         $('#passwordEmptyErrOldEdit, #passwordMin8ErrOldEdit').hide();
    //         $('#passwordOldEdit').css('border-color', 'hsl(122, 39%, 49%)');
    //     }
    // }

    // // Function validate Password New
    // function validateFieldsPasswordNew(){
    //     var password = $('#passwordNewEdit').val().trim();
    //     if (password == ''){
    //         $('#passwordEmptyErrNewEdit').show();
    //         $('#passwordNewEdit').css('border-color', 'hsl(4, 95%, 56%)');
    //     }
        
    //     if (password.length < 8) {
    //         $('#passwordMin8ErrNewEdit').show();
    //         $('#passwordNewEdit').css('border-color', 'hsl(4, 95%, 56%)');
    //     }
        
    //     if(password != '' && password.length > 8){
    //         $('#passwordEmptyErrNewEdit, #passwordMin8ErrNewEdit').hide();
    //         $('#passwordNewEdit').css('border-color', 'hsl(122, 39%, 49%)');
    //     }
    // }

});
