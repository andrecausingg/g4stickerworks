<?php
    // require_once("../index/login.php");
    // require_once("../../php/index/login.php");
    // require_once("../../../asset/php/index/login.php");
    // require_once("../../../../g4stickerworks/asset/php/index/login.php");

    if(isset($_SESSION["id"])){
        echo"set";
    }else{
        die("Access Denied!");
    }
?>