<?php
    include './include/header.php';
    
    if($_GET["page"]) {
        $page = $_GET["page"];
        if($page == "login"){
            include './page/login.php';
        }elseif($page == "signup"){
            include './page/signup.php';
        }elseif($page == "test"){
            include './page/test.php';
        }else{
            header('Location: http://' . $_SERVER['SERVER_NAME']  ."/MyWeb" ."/sheet/" . '?page=login');
        }
    }else{
        header('Location: http://' . $_SERVER['SERVER_NAME']  ."/MyWeb" ."/sheet/" . '?page=login');
    }

?>