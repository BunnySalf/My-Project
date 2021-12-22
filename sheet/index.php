<?php
    include './include/header.php';

    if($_GET["page"]) {
        $page = $_GET["page"];
        if($page == "home"){
            include './page/home.php';
        }elseif($page == "shop"){
            include './page/shop.php';
        }elseif($page == "Topup"){
            include './page/Topup.php';
        }elseif($page == "Faq"){
            include './page/Faq.php';
        }elseif($page == "check"){
            include './page/check.php';
        }else{
            header('Location: http://' . $_SERVER['SERVER_NAME']  ."/MyWeb" ."/sheet/" . '?page=home');
        }
    }else{
        header('Location: http://' . $_SERVER['SERVER_NAME']  ."/MyWeb" ."/sheet/" . '?page=home');
    }

?>