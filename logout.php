<?php
    session_start();
    unset($_SESSION['id']);
    session_unset();
    session_destroy();
    header('Refresh: 0;url=index');
    exit();
?>