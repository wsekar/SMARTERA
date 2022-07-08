<?php
    session_start();
    $_SESSION['id_pengelola']='';
    $_SESSION['email_pengelola']='';

    unset($_SESSION['id_pengelola']);
    unset($_SESSION['email_pengelola']);

    session_unset();
    session_destroy();

    header ('Location:login.php');

    ?>