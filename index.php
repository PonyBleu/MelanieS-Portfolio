<?php    //---------------------------------------------------------------WEBROOT-----------------------------------------------------------------------//
session_start();
$page = "index.php";

define('WEBROOT', str_replace($page, '', $_SERVER['SCRIPT_NAME']));

require_once("model/PDO.php");

require_once('controller/php/form.php');



    $page = "view/pages/home.php";
    $page = "view/pages/portfolio.php";
    $page = "view/pages/contact.php";
    //$page = "view/pages/link.php";


    if (isset($_GET['page'])) {
        $page = "view/pages/".$_GET['page'].".php";
    }



include("view/template/index.php");
