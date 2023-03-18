<?php
    if(isset($_POST["firstName"]) && isset($_POST["lastName"]) && isset($_POST["phoneNumber"])){
        $firstName = sanitize($_POST["firstName"]);
        $lastName = sanitize($_POST["lastName"]);
        $phoneNumber = sanitize($_POST["phoneNumber"]);

        $classNewUser = new classNewUser();
        $classNewUser->create();
    }

    // Sanitize Input
    function sanitize($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    class classNewUser{
        function create(){
            
        }
    }
?>